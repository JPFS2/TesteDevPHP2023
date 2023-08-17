<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Consulta de CEP</h1>
    <form action="/consultar-cep" method="post">
        @csrf
        <input type="text" name="cep" placeholder="Digite o CEP">
        <button type="submit">Consultar</button>
    </form>

    @if(isset($data))
        <table>
            <tr>
                <th>CEP</th>
                <th>Logradouro</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>UF</th>
            </tr>
            <tr>
                <td>{{ $data['cep'] }}</td>
                <td>{{ $data['logradouro'] }}</td>
                <td>{{ $data['bairro'] }}</td>
                <td>{{ $data['localidade'] }}</td>
                <td>{{ $data['uf'] }}</td>
            </tr>
        </table>
        <form action="/exportar-csv" method="get">
            <button type="submit">Exportar CSV</button>
        </form>
    @endif

    <form action="/limpar-table" method="post">
        @csrf
        <button type="submit">Limpar Tabela</button>
    </form>
</body>
</html>