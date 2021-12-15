@include('admin.layouts.app')

<h2>Editando funcionário </h2>
@include('admin.layouts.alerts')

<form action="{{route('lista.update', $lista->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label>Dados pessoais</label>
    <div class="form-row"> 
        <div class="form-group col-md-4 mb-3 ">
        <input type="text" name="name" class="form-control"  placeholder="Nome completo" value="{{$lista->name}}">
        </div>
        <div class="form-group col-md-1 mb-1">
        <input type="number" name="idade" class="form-control" placeholder="Idade" value="{{$lista->idade}}">
        </div>
        <div class="form-group col-md-3 mb-5">
        <input type="number" name="cpf" class="form-control" placeholder="Insira seu CPF" value="{{$lista->cpf}}">
        </div>
        <div class="form-group col-md-2 mb-3 ">
        <input type="email" name="email" class="form-control" placeholder="Insira seu email" value="{{$lista->email}}">
        </div>
    </div>
    <label >Departamento e cargo</label>
    <div class="form-row"> 
        <div class="form-group col-md-4 mb-3"> 
        <input type="text" name="cargo" class="form-control" placeholder="Cargo" value="{{$lista->cargo}}">
        </div>
        <div class="form-group col-md-3">
        <input type="text" name="setor" class="form-control" placeholder="Setor" value="{{$lista->setor}}">
        </div>
        <div class="form-group col-md-3">
        <input type="number" name="salario" class="form-control" placeholder="Salario"value="{{$lista->salario}}" >
        </div>
        
    </div>

    <button type="submit" class="btn btn-success mr-2">Salvar</button>
    <br> <br>     
</form>
<form action="{{route('lista.distroy', $lista->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger mr-2">Deletar</button>
    <a href="{{ route('lista.index')}}" class="btn btn-primary mr-2">voltar</a>
</form>