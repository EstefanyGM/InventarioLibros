<div>
    <form wire:submit.prevent="editar">
        <div class="row">
            <div class="mx-auto col-6">
                <div class="form-group">
                    <label>Titulo</label>
                    <input wire:model="libro.Titulo" type="text" class="form-control">
                    @error('libro.Titulo') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Editorial</label>
                    <input wire:model="libro.Editorial" type="text" class="form-control">
                    @error('libro.Editorial') <span class="text-danger">{{ $message }}</span>@enderror

                </div>


                <div class="form-group">
                    <label>Autor</label>
                    <input wire:model="libro.Autor" type="text" class="form-control">
                    @error('libro.Autor') <span class="text-danger">{{ $message }}</span>@enderror

                </div>

                <div class="form-group">
                    <label>Fecha de lanzamiento</label>
                    <input wire:model="libro.Fecha_Lanzamiento" type="text" class="form-control">
                    @error('libro.Fecha_Lanzamiento') <span class="text-danger">{{ $message }}</span>@enderror

                </div>

                <button class="btn btn-success btn-sm">Editar</button>
                <a href="{{route('index.libro')}}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>


        </div>
    </form>
</div>
