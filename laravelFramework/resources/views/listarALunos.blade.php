<html>
    <body>
        <h1>Listar alunos</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($alunos as $aluno)
                    <tr>
                        <td> {{$aluno->id}} </td>
                        <td> {{$aluno->nome}} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>