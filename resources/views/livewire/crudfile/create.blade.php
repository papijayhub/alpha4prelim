
<div>
    <div class="card bg-secondary">
        <div class="card-header">
            <h3>Add Customer</h3>
        </div>
        <div class="card-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="name">
                <label for="name">Name</label>
                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" wire:model.debounce.500ms="email">
                <label for="email">Email</label>
                @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.debounce.500ms="address">
                <label for="address">Address</label>
                @error('address')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="description">
                <label for="description">Descriptions</label>
                @error('description')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="amountpaid">
                <label for="amountpaid">Amount Paid</label>
                @error('amountpaid')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="amountbalance">
                <label for="amountbalance">Amount Balance</label>
                @error('amountbalance')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="assisted" class="form-select" wire:model.defer="assisted">
                    <option hidden="true">Select Assister</option>
                    <option selected disabled>Select Assister</option>
                    <option value="cha">Cha</option>
                    <option value="arlene">Arlene</option>
                    <option value="chaplyn">Chaplyn</option>
                </select>
                <label for="assisted">Assisted By:</label>
                @error('assisted')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" type="submit" wire:click="addCustomer()">
                    Add Customer
                </button>
            </div>
        </div>
    </div>
</div>
