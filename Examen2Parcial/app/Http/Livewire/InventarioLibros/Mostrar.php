<?php

namespace App\Http\Livewire\InventarioLibros;

use App\Models\Libro;
use Livewire\Component;

class Mostrar extends Component
{
    public Libro $libro;
    public function render()
    {
        return view('livewire.inventario-libros.mostrar');
    }
}
