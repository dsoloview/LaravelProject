<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $name;
    public $errors;
    public $type;
    public $title;
    public $model;

    public function __construct($name, $errors, $type, $title, $model = null)
    {
        $this->name = $name;
        $this->errors = $errors;
        $this->type = $type;
        $this->title = $title;
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.input');
    }
}
