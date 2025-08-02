<?php

namespace App\Livewire;

use Livewire\Component;
use WireUi\Traits\Actions;

class Counter extends Component
{
    use Actions;
    
    public $count = 0;
    public $name = '';
    
    public function increment()
    {
        $this->count++;
        
        if ($this->count % 5 === 0) {
            $this->notification()->success(
                title: 'Milestone!',
                description: "You've reached {$this->count} clicks!"
            );
        }
    }
    
    public function decrement()
    {
        if ($this->count > 0) {
            $this->count--;
        } else {
            $this->notification()->error(
                title: 'Cannot go below zero',
                description: 'The counter cannot be negative.'
            );
        }
    }
    
    public function reset()
    {
        $this->count = 0;
        $this->notification()->info(
            title: 'Counter Reset',
            description: 'The counter has been reset to zero.'
        );
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
