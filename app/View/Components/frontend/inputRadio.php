<?php

namespace App\View\Components\frontend;

use Illuminate\View\Component;

class inputRadio extends Component
{
    public $question;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($question)
    {
        $this->question = $question;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.input-radio');
    }
}
