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
                    <tr>
                        <td> {{$aluno->id}} </td>
                        <td> {{$aluno->nome}} </td>
                    </tr>
            </tbody>
        </table>
    </body>
</html>