<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
   public $type;
   public $name;
   public $label;
   public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$type,$label,$id)
    {
        $this->name =$name;
        $this->type =$type;
        $this->label=$label;
        $this->id=$id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
