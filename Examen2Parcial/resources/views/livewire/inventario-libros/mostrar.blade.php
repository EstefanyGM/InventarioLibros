<div>
    <div>
        <div class="card mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title text-center">{{$libro->Titulo}}</h5>
              <p class="card-text text-center">{{$libro->Editorial}}</p>
              <p class="card-text text-center">{{$libro->Autor}}</p>
              <p class="card-text text-center">{{$libro->Fecha_Lanzamiento}}</p>
              <a  href="{{route('index.libro')}}" type="submit" class="btn btn-warning">Regresar</a>
            </div>
          </div>
    </div>
</div>

