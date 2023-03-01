<div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <livewire:create />
            </div>
            {{-- deleting order --}}
            <div wire:ignore.self class="modal fade" id="delete-modal-order" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title title3" id="exampleModalLabel">Do you want to delete this order
                                permanently?</h5>
                            <button type="button" class="btn btn-outline-secondary rounded-circle" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="text-center text-black ">If you click "Yes" the order will be gone.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger form-control" wire:click="deleted()">
                                Yes
                            </button>
                            <button type="button" class="btn btn-secondary form-control"
                                data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end deleting order --}}
            <div class="col-sm-9">
                @if (session('message'))
                    <h5 class="alert alert-success text-success text-center">{{ session('message') }}</h5>
                @endif
                <h3>Order List</h3>
                <select name="category" class="form-control" wire:model.lazy="category">
                    <option value="All">All</option>
                    <option value="Vegetables">Vegetables</option>
                    <option value="Fruits">Fruits</option>
                    <option value="Grains">Grains</option>
                    <option value="Protein Foods">Protein Foods</option>
                    <option value="Dairy">Dairy</option>
                    <option value="Added Sugars">Added Sugars</option>
                    <option value="Beverages">Beverages</option>
                </select>
                <table class="table table-striped table-hover">
                    <thead class="bg-dark">
                        <tr>
                            <th class="text-white">ID.</th>
                            <th class="text-white">Order Name</th>
                            <th class="text-white">Description</th>
                            <th class="text-white">Stock</th>
                            <th class="text-white">Category</th>
                            <th class="text-white">Status</th>
                            <th class="text-white">Price</th>
                            <th class="text-white">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->food_name }}</td>
                                <td>{{ $order->description }}</td>
                                <td>{{ $order->stock }}</td>
                                <td>{{ $order->category }}</td>
                                <td>{{ $order->status }}</td>
                                <td>{{ $order->price }}</td>
                                <td>
                                    <a href="{{ url('edit', ['order' => $order->id]) }}"
                                        class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-danger" title="Delete" data-toggle="modal"
                                        data-target="#delete-modal-order"
                                        wire:click="delete({{ $order->id }})">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        @if ($orders->count() === 0)
                            <td colspan="8" class="text-center">No order found.</td>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
