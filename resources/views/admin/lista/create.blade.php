@include('admin.layouts.app')
<h2>Cadastrando novo funcionario</h2>
@include('admin.layouts.alerts')

<form action="{{ route('lista.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Dados pessoais</label>
    <div class="form-row"> 
        <div class="form-group col-md-4 mb-3 ">
        <input type="text" name="name" class="form-control"  placeholder="Nome completo" value="{{ old('name') }}">
        </div>
        <div class="form-group col-md-1 mb-1">
        <input type="number" name="idade" class="form-control" placeholder="Idade" value="{{ old('idade') }}">
        </div>
        <div class="form-group col-md-3 mb-5">
        <input type="number" name="cpf" class="form-control" placeholder="Insira seu CPF" value="{{ old('cpf') }}">
        </div>
        <div class="form-group col-md-2 mb-3 ">
        <input type="email" name="email" class="form-control" placeholder="Insira seu email" value="{{ old('email') }}">
        </div>
    </div>
    <label >Departamento e cargo</label>
    <div class="form-row"> 
        <div class="form-group col-md-4 mb-3"> 
        <input type="text" name="cargo" class="form-control" placeholder="Cargo" value="{{ old('cargo') }}">
        </div>
        <div class="form-group col-md-3">
        <input type="text" name="setor" class="form-control" placeholder="Setor" value="{{ old('setor') }}">
        </div>
        <div class="form-group col-md-3">
        <input type="number" name="salario" class="form-control" placeholder="Salario" value="{{ old('salario') }}">
        </div>
        
    </div>
    <button type="submit" class="btn btn-success">cadastrar</button>
    <a href="{{ route('lista.index')}}" class="btn btn-primary">voltar</a>
</form>