<!-- resources/views/hola.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Texto</title>
</head>
<body>
    <h1>Enviar un Texto</h1>
    
    <form action="{{ route('enviar.texto') }}" method="POST">
        @csrf
        <label for="texto">Introduce un texto:</label>
        <input type="text" id="texto" name="texto" required>
        <button type="submit">Enviar</button>
    </form>

    @if (session('mensaje'))
        <p>{{ session('mensaje') }}</p>
    @endif

    <h2>Textos Guardados:</h2>
    <ul>
        @foreach ($textos as $texto)
            <li>{{ $texto->texto }}</li>
        @endforeach
    </ul>
</body>
</html>
