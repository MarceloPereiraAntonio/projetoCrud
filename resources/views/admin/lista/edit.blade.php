<h1>Editando</h1>

@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            
        @endforeach
    </div>
    
@endif

<form action="{{route('lista.update', $lista->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label>Dados pessoais</label> <br>
    <input type="text" name="name"  placeholder="Nome completo" value="{{$lista->name}}">
    <input type="number" name="idade" placeholder="Idade" value="{{$lista->idade}}">
    <input type="number" name="cpf" placeholder="Insira seu CPF" value="{{$lista->cpf}}"> 
    <input type="email" name="email" placeholder="Insira seu email" value="{{$lista->email}}">
    <br><br>
    <label>Departamento e cargo</label> <br>
    <input type="text" name="cargo" placeholder="Cargo" value="{{$lista->cargo}}">
    <input type="text" name="setor" placeholder="Setor" value="{{$lista->setor}}">
    <input type="number" name="salario" placeholder="Salario" value="{{$lista->salario}}"> <br> <br>
    <button type="submit">Salvar</button>
    

</form>
<form action="{{route('lista.distroy', $lista->id)}}" method="post">
    @csrf
    @method('DELETE')
<button type="submit">Deletar</button>
<a href="{{ route('lista.index')}}">voltar</a>

</form>