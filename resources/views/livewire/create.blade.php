<div>
    <div class="card border border-light">
        <div class="card-body shadow">
            <h3 class="text-center mt-2">Create an Order</h3>
            <hr>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="food_name">
                <label for="food_name">Order Name</label>
                @error('food_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" cols="30" rows="10" wire:model.defer="description"></textarea>
                <label for="descripion">Description</label>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="recipient-name" wire:model.defer="stock"
                    required="">
                <label for="stock">Stock</label>
                @error('stock')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="category" class="form-select" wire:model.defer="category">
                    <option disabled>Category</option>
                    <option selected hidden="true">Category</option>
                    <option value="Vegetables">Vegetables</option>
                    <option value="Fruits">Fruits</option>
                    <option value="Grains">Grains</option>
                    <option value="Protein Foods">Protein Foods</option>
                    <option value="Dairy">Dairy</option>
                    <option value="Added Sugars">Added Sugars</option>
                    <option value="Beverages">Beverages</option>
                </select>
                <label for="category">Category</label>
                @error('category')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="recipient-name" wire:model.defer="status"
                    required="">
                <label for="status">Status</label>
                @error('status')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="recipient-name" wire:model.defer="price"
                    required="">
                <label for="price">Price</label>
                @error('price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-floating mb-2 d-grip gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" wire:click="addToList()">
                    Add Order
                </button>
            </div>
        </div>
    </div>
</div>
