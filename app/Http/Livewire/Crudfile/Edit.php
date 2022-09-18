<?php

namespace App\Http\Livewire\Crudfile;

use Livewire\Component;
use App\Models\Customer;

class Edit extends Component
{
    public $customeraID;
    public $name, $email, $description, $address, $amountpaid, $amountbalance, $assisted;

    public function mount(){
        $this->name = $this->customer->name;
        $this->email = $this->customer->email;
        $this->description = $this->customer->description;
        $this->address = $this->customer->address;
        $this->amountpaid = $this->customer->amountpaid;
        $this->amountbalance = $this->customer->amountbalance;
        $this->assisted = $this->customer->assisted;
    }

    public function editCustomer(){
        $this->validate([
            'name'                      =>          ['required', 'string', 'max:255'],
            'email'                     =>          ['required', 'email', 'unique:customers,email,' .$this->customer->id],
            'description'            =>          ['required', 'string', 'max:255'],
            'address'                   =>          ['required', 'string', 'max:255'],
            'amountpaid'                  =>          ['required', 'string', 'max:255'],
            'amountbalance'                  =>          ['required', 'string', 'max:255'],
            'assisted'                  =>          ['required', 'string', 'max:255'],
        ]);
        $this->customer->update([
           'name'        => $this->name,
           'email'       => $this->email,
           'description' => $this->description,
            'address'    => $this->address,
            'amountpaid' => $this->amountpaid,
            'amountbalance' => $this->amountbalance,
            'assisted'   => $this->assisted,
        ]);
        return redirect('/crud')->with('message', 'Updated Successfuly');
    }

    public function getCustomerProperty(){
        return Customer::find($this->customeraID);
    }

    public function render()
    {
        return view('livewire.crudfile.edit');
    }
}
