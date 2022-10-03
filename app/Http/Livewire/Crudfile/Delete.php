<?php

namespace App\Http\Livewire\Crudfile;

use Livewire\Component;
use App\Models\Customer;
use App\Events\UserLog;

class Delete extends Component
{
    public $customeraIdol;

    public function getCustomerProperty(){
        return Customer::select('id', 'name', 'email', 'description', 'amountbalance')
        ->find($this->customeraIdol);
    }

    public function delete(){
        $this->customer->delete();

        $log_entry = 'Deleted customer ' . $this->customer->name . " with the ID " . $this->customer->id;
        event(new UserLog($log_entry));

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
