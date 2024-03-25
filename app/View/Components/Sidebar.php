<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    //bosung
    public $title;
    public $email;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $email)
    {
        //su dung ngoai view
        $this->title = $title;
        $this->email = $email;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar');
    }

    //bo sung
    public function users()
    {
        return [
            'Nguyen van A',
            'Nguyen van B',
            'Nguyen van C',
            'Nguyen van D',
        ];
    }
    public function users1($name)
    {
        return [
            'Nguyen van A',
            'Nguyen van B',
            'Nguyen van C',
            'Nguyen van D',
            $name
        ];
    }
}
