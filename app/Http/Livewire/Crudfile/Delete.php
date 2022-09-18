<?php

namespace App\Http\Livewire\Crudfile;

use Livewire\Component;
use App\Models\Customer;

class Delete extends Component
{
    public $customeraIdol;

    public function getCustomerProperty(){
        return Customer::select('id', 'name', 'email', 'description', 'amountbalance')
        ->find($this->customeraIdol);
    }

    public function delete(){
        $this->customer->delete();

        return redirect('/crud')->with('message', 'Deleted successfuly');
    }
    
    public function back(){
        return redirect('/crud');
    }

    public function render()
    {
        return view('livewire.crudfile.delete');
    }
}
