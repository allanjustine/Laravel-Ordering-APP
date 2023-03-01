<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class Edit extends Component
{
    public $orderId;
    public $food_name, $description, $stock, $category = 'All', $status, $price;
    public function mount() {
        $this->food_name = $this->order->food_name;
        $this->description = $this->order->description;
        $this->stock = $this->order->stock;
        $this->category = $this->order->category;
        $this->status = $this->order->status;
        $this->price = $this->order->price;

    }

    public function update() {
        $this->validate([
            'food_name'                       =>          ['required', 'string', 'max:255'],
            'description'                =>          ['required', 'string', 'max:255'],
            'stock'                   =>          ['required', 'string', 'max:255'],
            'category'                   =>          ['required', 'string', 'max:255'],
            'status'                   =>          ['required', 'string', 'max:255'],
            'price'                   =>          ['required', 'string', 'max:255']
        ]);

        $this->order->update([
            'food_name'                =>          $this->food_name,
            'description'         =>          $this->description,
            'stock'            =>          $this->stock,
            'category'            =>          $this->category,
            'status'            =>          $this->status,
            'price'            =>          $this->price
        ]);

        return redirect('/orders')->with('message', 'The order updated successfully.');
    }
    public function getOrderProperty() {
        return Order::find($this->orderId);
    }
    public function render()
    {
        return view('livewire.edit');
    }
}
