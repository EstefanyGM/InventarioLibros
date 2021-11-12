<?php

namespace App\Http\Livewire\InventarioLibros;

use App\Models\Libro;
use Livewire\Component;

class Editar extends Component
{
    public Libro $libro;
    public function render()
    {
        return view('livewire.inventario-libros.editar');

    }

    public function editar(){
        $this->validate();
        $this->libro->save();
        return redirect(route('index.libro'));
    }
    protected function rules()
    {
        return [
            'libro.Titulo' => 'required|string',
            'libro.Editorial' => 'required|string',
            'libro.Autor' => 'required|string',
            'libro.Fecha_Lanzamiento' => 'required|string'
        ];
    }
}
