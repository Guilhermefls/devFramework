< html>
<h2>Adicionar Aluno </h2>
<form method="POST action=*{{ route('alunos.salvar')}}">
@csrf
<div>
<label for="nome">Nome:</label>
<input type="text" name="nome" required>
</div>
<div>
<label for="data_nascimento">Data de Nascimento:</label>
<input type="date" name="data_nascimento" required>
</div>
