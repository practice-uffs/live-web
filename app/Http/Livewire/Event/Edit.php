<?php

namespace App\Http\Livewire\Event;

use App\Model\Event;
use Livewire\Component;

class Edit extends Component
{
    public Event $event;

    public $rules = [
        'event.title' => 'present',
   ];

    public function mount(Event $event)
    {
        $this->event = $event;
    }

    public function update()
    {
        $this->validate();
        $this->event->update();
    }

    public function updated($field, $value)
    {
        if ($field == 'event.status') {
        }

        $this->update();        
    }

    public function initTransmission() {
        // event();
    }

    public function startTransmission() {
        // event();
    }

    public function stopTransmission() {
        // event();
    }
}
