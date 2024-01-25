<?php

namespace App\Livewire;

use Livewire\Attributes\Modelable;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;

    #[Modelable]
    public $file;

    public function render()
    {
        return view('livewire.file-upload');
    }
}
