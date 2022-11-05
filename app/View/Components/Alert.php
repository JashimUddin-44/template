<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    protected $message;
    protected $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($message=null,$type=null)
    {
        $this->message = $message;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert',['message'=>$this->message,'type'=>$this->type]);
    }
}
