<div>
    <div class="container col-md-6 offset-md-3 mt-4">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center text-warning">Delete Customer?</h1>
            </div>
            <div class="card-body">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <td>{{$this->customer->name}}</td> 
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{$this->customer->email}}</td> 

                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{$this->customer->description}}</td> 

                </tr>
                <tr>
                    <th>Amount Balance</th>
                    <td>{{$this->customer->amountbalance}}</td> 

                </tr>
            </table>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger" wire:click="delete()">Delete</button>
                    <button class="btn btn-secondary mx-4" wire:click="back()">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
