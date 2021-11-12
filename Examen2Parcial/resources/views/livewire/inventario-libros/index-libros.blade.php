<div>
    <table class="table table-success">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Titulo</th>
            <th scope="col">Editorial</th>
            <th scope="col">Autor</th>
            <th scope="col">Fecha de lanzamiento</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
            <tr>
                <th scope="row">{{$libro->id}}</th>
                <td>{{$libro->Titulo}}</td>
                <td>{{$libro->Editorial}}</td>
                <td>{{$libro->Autor}}</td>
                <td>{{$libro->Fecha_Lanzamiento}}</td>
                <td>
                    <td>
                        <a href ="{{route('mostrar.libro',$libro)}}"button title="Mostrar más" class="btn-sm btn btn-secondary"><i class="fa fa-eye"></i></button>
                        <a href="{{route('editar.libro',$libro)}}" button title="Editar" class="btn-sm btn btn-warning"><i class="fa fa-edit"></i></button>
                    </td>

                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
      {{$libros->links()}}
</div>
