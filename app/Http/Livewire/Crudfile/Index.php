<?php

namespace App\Http\Livewire\Crudfile;

use Livewire\Component;
use App\Models\Customer;

class Index extends Component
{
    public function loadCustomer(){
        $customers = Customer::orderBy('created_at')->get();

        return compact('customers');
    }

    public function render()
    {
        return view('livewire.crudfile.index', $this->loadCustomer());
    }
}
