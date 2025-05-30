@extends('layout.app')

@section('title', 'Registro')

@section('content')
<div id="register">
    <div class="container py-5" style="max-width: 500px;">

        <div class="title col-md-6 mb-4 mb-md-0 my-4 pb-4">
        <h2 class="position-relative d-inline-block mx-4">Registro</h2>
        </div>

        <div class="bg-light p-4 rounded-3 shadow-sm">
            <form method="POST" action="{{ route('auth.register.post') }}">
                @csrf
                <div class="mb-4">
                    <label class="form-label text-muted mx-1">Nombre</label>
                    <input 
                        type="text" 
                        class="form-control rounded-m shadow-sm px-4 py-2 border-0 focus-ring" 
                        name="name" 
                        required
                    >
                </div>
                <div class="mb-4">
                    <label class="form-label text-muted mx-1">Email address</label>
                    <input type="email" class="form-control rounded-m shadow-sm px-4 py-2 border-0 focus-ring" name="email" required>
                </div>
                <div class="mb-4">
                    <label class="form-label text-muted mx-1">Contraseña</label>
                    <input type="password" name="password" class="form-control rounded-m shadow-sm px-4 py-2 border-0 focus-ring" required>
                </div>
                <div class="mb-4">
                    <label class="form-label text-muted mx-1">Confirmar contraseña</label>
                    <input type="password" name="password_confirmation" class="form-control rounded-m shadow-sm px-4 py-2 border-0 focus-ring" required>
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-danger btn-lg my-3">Registrarse</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
