<?php

namespace App\Http\Livewire;

use App\Models\MaritalStatus;
use Livewire\Component;

class CreatePeople extends Component
{
    public $marital_status_id;
    public $address_id;
    public $name;
    public $gender;
    public $email;
    public $phone;
    public $date_birth;

    public $state;
    public $county;
    public $cep;
    public $street;
    public $number;
    public $district;
    public $complement;

    public $maritalStatus;
    public $addressData;

    public function mount()
    {
        $this->maritalStatus = MaritalStatus::all();
    }

    public function render()
    {
        return view('livewire.create-people', [
            'maritalStatus' => $this->maritalStatus,
        ]);
    }
}
