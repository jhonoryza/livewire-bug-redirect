<?php

namespace App\Livewire;

use Livewire\Component;

class SettingForm extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.setting-form');
    }

    public function save(): void
    {
        session()->flash('alertMessage', 'Settings saved.');
        redirect()->to('/detail');
        // $this->redirect('/detail');
    }
}
