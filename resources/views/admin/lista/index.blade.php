<h1>Lista de funcionários</h1>

<a href="{{ route('lista.create')}}">cadadastrar novo funcionario</a>


<table width="100%" border="1">
    <thead>
       <tr>
           <th>Id</th>
           <th>Nome</th> 
           <th>Idade</th> 
           <th>Documento</th> 
           <th>E-mail</th> 
           <th>Cargo</th>
           <th>Setor</th>
           <th>Salario</th>
           <th>Editar</th>  
             
        </tr> 
       
    </thead>
    <tbody>
        @foreach ($listas as $lista)
            <tr>
                <td>{{ $lista->id }}</td>
                <td>{{ $lista->name }}</td>
                <td>{{ $lista->idade }}</td>
                <td>{{ $lista->cpf }}</td>
                <td>{{ $lista->email }}</td>
                <td>{{ $lista->cargo }}</td>
                <td>{{ $lista->setor }}</td>
                <td>{{ $lista->salario }}</td>
                <td><a href="{{route('lista.edit', $lista->id)}}">Editar</a></td>
                


            </tr>
            
        @endforeach
    </tbody>
</table>