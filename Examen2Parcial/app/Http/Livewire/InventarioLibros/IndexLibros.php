<?php

namespace App\Http\Livewire\InventarioLibros;

use App\Models\Libro;
use Livewire\Component;

class IndexLibros extends Component
{
    public function render()
    {
        $libros = Libro::paginate(10);
        return view('livewire.inventario-libros.index-libros', compact('libros'));
    }
}
