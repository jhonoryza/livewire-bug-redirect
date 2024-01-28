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
        session()->put('alertMessage', 'Your custom alert message..');
        $this->redirect('detail');

        // please follow me on GitHub
        // https://github.com/perisicnikola37

        // please star my repository
        // https://github.com/perisicnikola37/laravel-inertia-vue-spa

        // thank you :)
    }
}
