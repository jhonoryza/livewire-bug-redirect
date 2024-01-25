<?php

namespace App\Livewire;

use Livewire\Component;

class FileUpload extends Component
{
    public $file;

    public function render()
    {
        return view('livewire.file-upload');
    }
}
