<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class View extends Component
{
    public $orderId;

    public function render()
    {
        $order = Order::find($this->orderId);

        return view('livewire.view', [
            'order' => $order
        ]);
    }
}
