<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class Index extends Component
{
    public $category = 'All';
    public $orderId, $orderDelete;
    public function loadOrder() {
        $query = Order::orderBy('food_name', 'desc');

        if($this->category != 'All') {
            $query->where('category', $this->category);
        }

        $orders = $query->get();

        return compact('orders');
    }
    public function delete($orderId) {
        $this->orderDelete = $orderId;
    }
    public function deleted() {

        Order::find($this->orderDelete)->delete();

        return redirect('/orders')->with('message', 'The order is deleted permanently.');
    }
    public function render()
    {
        return view('livewire.index', $this->loadOrder());
    }
}
