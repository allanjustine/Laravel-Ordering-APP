<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class Create extends Component
{
    public $food_name, $description, $stock, $category, $status, $price;


    public function addToList()
    {
        $this->validate([
            'food_name'                       =>          ['required', 'string', 'max:255'],
            'description'                =>          ['required', 'string', 'max:255'],
            'stock'                   =>          ['required', 'string', 'max:255'],
            'category'                   =>          ['required', 'string', 'max:255'],
            'status'                   =>          ['required', 'string', 'max:255'],
            'price'                   =>          ['required', 'string', 'max:255']
        ]);

        Order::create([
            'food_name'                =>          $this->food_name,
            'description'         =>          $this->description,
            'stock'            =>          $this->stock,
            'category'            =>          $this->category,
            'status'            =>          $this->status,
            'price'            =>          $this->price
        ]);
        return redirect('/orders')->with('message', 'The order is added successfully.');
    }

    public function render()
    {
        return view('livewire.create');
    }
}
