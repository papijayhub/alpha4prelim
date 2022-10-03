<?php

namespace App\Http\Livewire\Crudfile;

use Livewire\Component;
use App\Models\Customer;
use App\Events\UserLog;

class Create extends Component
{
    public $name, $email, $description, $address, $amountpaid, $amountbalance, $assisted;

    public function addCustomer() {
        $this->validate([
            'name'                      =>          ['required', 'string', 'max:255'],
            'email'                     =>          ['required', 'email', 'unique:customers'],
            'description'            =>          ['required', 'string', 'max:255'],
            'address'                   =>          ['required', 'string', 'max:255'],
            'amountpaid'                  =>          ['required', 'string', 'max:255'],
            'amountbalance'                  =>          ['required', 'string', 'max:255'],
            'assisted'                  =>          ['required', 'string', 'max:255'],
        ]);

        $customer = Customer::create([
            'name'                  =>      $this->name,
            'email'                 =>      $this->email,
            'description'        =>      $this->description,
            'address'               =>      $this->address,
            'amountpaid'              =>      $this->amountpaid,
            'amountbalance'              =>      $this->amountbalance,
            'assisted'              =>      $this->assisted
        ]);

        $log_entry = 'Added a new Customer' . $customer->name . 'with the ID of ' . $customer->id;
        event(new UserLog($log_entry));

        return redirect('/crud')->with('message', 'Added Successfully');
    }

    public function updated($propertyEmail) {
        $this->validateOnly($propertyEmail, [
            'email'         =>      ['required', 'email', 'unique:customers']
        ]);
    }


    public function render()
    {
        return view('livewire.crudfile.create');
    }
}
