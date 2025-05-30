<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NoticiaController extends Controller
{
    public function index() {
        $noticias = Noticia::all();
        return view('noticias.index', compact('noticias'));
    }
    public function store(Request $request) {
        $input = $request->all();
        $noticia = new Noticia();
        $noticia->titulo = $input['titulo'];
        $noticia->contenido = $input['contenido'];
        // Manejo de imágenes
        if ($request->hasFile('imagen')) {
            $filename = time() . '_img.' . $request->imagen->extension();
            $request->imagen->move(public_path('images/noticias/'), $filename);
            $noticia->imagen = $filename;
        }

        $noticia->save();
        return redirect()
            ->route('admin.section', ['seccion' => 'noticias'])
            ->with('feedback.message', 'Noticia creada correctamente')
            ->with('feedback.type', 'success');

    }

    public function destroy($id) {
        $noticia = Noticia::findOrFail($id);
        $noticia->delete();
        // Borrar imagen si existe
        if ($noticia->imagen && file_exists(public_path('images/noticias/' . $noticia->imagen))) {
            unlink(public_path('images/noticias/' . $noticia->imagen));
        }
        return redirect()
            ->route('admin.section', ['seccion' => 'noticias'])
            ->with('feedback.message', 'Noticia eliminada correctamente')
            ->with('feedback.type', 'success');
    }

    public function update(Request $request, $id) {
        $noticia = Noticia::findOrFail($id);
        $noticia->titulo = $request->input('titulo');
        $noticia->contenido = $request->input('contenido');
        // Manejo de imágenes
        if ($request->hasFile('imagen')) {
            // Borrar imagen anterior si existe
            if ($noticia->imagen && file_exists(public_path('images/noticias/' . $noticia->imagen))) {
                unlink(public_path('images/noticias/' . $noticia->imagen));
            }
        
            $filename = time() . '_img.' . $request->imagen->extension();
            $request->imagen->move(public_path('images/noticias'), $filename);
            $noticia->imagen =  $filename;
        }
        
        $noticia->save();
        return redirect()
            ->route('admin.section', ['seccion' => 'noticias'])
            ->with('feedback.message', 'Noticia actualizada correctamente')
            ->with('feedback.type', 'success');
    }

    public function publicas()
    {
        $noticias = Noticia::latest()->take(3)->get();
        return view('home', compact('noticias'));
    }
}
