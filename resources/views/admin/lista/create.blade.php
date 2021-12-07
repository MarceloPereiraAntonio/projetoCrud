<h1>Cadastrando novo funcionario</h1>

<form action="{{ route('lista.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Dados pessoais</label> <br>
    <input type="text" name="name"  placeholder="Nome completo">
    <input type="number" name="idade" placeholder="Idade">
    <input type="number" name="cpf" placeholder="Insira seu CPF"> 
    <input type="email" name="email" placeholder="Insira seu email">
    <br><br>
    <label>Departamento e cargo</label> <br>
    <input type="text" name="cargo" placeholder="Cargo">
    <input type="text" name="setor" placeholder="Setor">
    <input type="number" name="salario" placeholder="Salario"> <br> <br>
    <button type="submit">cadastrar</button>

</form>