<?php

namespace App\Livewire\MainDomain;

use App\Models\FormRequest;
use Livewire\Component;

class RegisterForm extends Component
{
    public string $name = '';
    public string $phoneNumber = '';
    public bool $isSubmitted = false;

    public function render()
    {
        return view('livewire.main-domain.register-form');
    }

    public function submit()
    {
        FormRequest::create([
            'name' => $this->name,
            'mobile' => $this->phoneNumber,
        ]);

        $this->name = '';
        $this->phoneNumber = '';

        $this->isSubmitted = true;
    }
}
