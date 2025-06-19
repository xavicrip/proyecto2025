<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Integrado de Planificación e Inversión Pública - SIPeIP - @yield('title')</title>

    {{-- Escribir estilos --}}

    <style> 



    </style>

</head>
<body>

        {{-- Header --}}

        <header>
           <h1>Sistema Integrado de Planificación e Inversión Pública</h1> 
        </header>

        {{-- Barras de Navegacion --}}

        <nav>

            <a href="{{ url('/')}}">Inicio</a>
            <a href="{{ route('entidades.index')}}">Entidades</a>

            
        </nav>

        {{-- Contenido Principal --}}

        <main>

            @yield('content')

        </main>

        {{-- Pie de página --}}

        <footer>

            <small>&copy; </small>

        </footer>

</body>
</html>