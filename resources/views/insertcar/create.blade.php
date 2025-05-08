<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Carro</title>
</head>
<body>
    <h1>Cadastro de Carro</h1>

    @if(session('mensagem'))
        <p style="color: green;">{{ session('mensagem') }}</p>
    @endif

    <form method="POST" action="/insertcar">
        @csrf
        <label>Marca:</label>
        <input type="text" name="marca" required><br><br>

        <label>Modelo:</label>
        <input type="text" name="modelo" required><br><br>

        <label>Ano:</label>
        <input type="text" name="ano" required><br><br>

        <label>Opção de cor 1:</label>
        <input type="image" name="cor1" required><br><br>

        <label>Opção de cor 2:</label>
        <input type="image" name="cor2" required><br><br>

        <label>Opção de cor 3:</label>
        <input type="image" name="cor3" required><br><br>

        <label>Preço:</label>
        <input type="text" name="preco" required><br><br>


        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>