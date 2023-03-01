<div>
    <div class="container offset-1">
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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->food_name }}</td>
                    <td>{{ $order->description }}</td>
                    <td>{{ $order->stock }}</td>
                    <td>{{ $order->category }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->price }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
