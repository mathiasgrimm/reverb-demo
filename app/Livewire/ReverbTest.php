<?php

namespace App\Livewire;

use App\Events\SendMessage;
use Livewire\Component;

class ReverbTest extends Component
{
    public $message = '';

    public function render()
    {
        return view('livewire.reverb-test');
    }

    public function sendMessage()
    {
        SendMessage::dispatch($this->message);
        $this->message = '';
    }
}
