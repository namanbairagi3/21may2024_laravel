<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    //properties
    public $message= '';
    //constructor
    /**
     * Create a new component instance.
     */
    public function __construct(public string $type)
    {
        //the role of constructor is initialize the properties
        $this->message = 'A simple success alert—check it out';
    }

    //method
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert'); //respurce/view/components/alert
    }
}
