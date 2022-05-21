@extends('layouts.plantilla')

@section('title', 'contactanos')

@section('content')
    <h1>Dejanos un mensaje</h1>

    <form action="{{ route('contactanos.store')}}" method="POST">

        @csrf
        
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>

        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label>
            <br>
            Correo:
            <br>
            <input type="text" name="correo">
        </label>

        @error('correo')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label>
            <br>
            Mensaje:
            <br>
            <textarea name="mensaje" rows="4" placeholder="Ingresar texto"></textarea>
        </label>
        <br>
        @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <button type="submit">Enviar</button>
    </form>

    @if(session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
@endsection