<div>
    <div class="container">
        {{-- update order --}}
        <div wire:ignore.self class="modal fade" id="update-modal-order" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title title3" id="exampleModalLabel">You want to update this order?</h5>
                    <button type="button" class="btn btn-outline-secondary rounded-circle" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center text-black ">If clicking yes this may save the order.</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary form-control"  wire:click="update()">
                        Yes
                    </button>
                    <button type="button" class="btn btn-secondary form-control" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end update order --}}
        <div class="row">
            <div class="col-sm-7">

                <div class="card border border-light">
                    <div class="card-body shadow">
                        <h3 class="text-center mt-2">Update Order</h3>
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
                            <button class="btn btn-primary" data-toggle="modal"
                            data-target="#update-modal-order">
                                Update Order
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
