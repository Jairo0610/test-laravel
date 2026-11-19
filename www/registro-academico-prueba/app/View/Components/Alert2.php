<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{
    /**
     * Create a new component instance.
     */

    public $class;
    public $titleAlert;
    public function __construct($type = 'info')
    {
        switch ($type) {
        case 'info':
            $this->class = ' bg-blue-50 text-blue-800';
            $this->titleAlert = 'Info Alert!';
            break;
        case 'danger':
            $this->class = ' bg-red-50 text-red-800';
            $this->titleAlert = 'Danger Alert!';
            break;
        case 'success':
            $this->class = ' bg-green-50 text-green-800';
            $this->titleAlert = 'Success Alert!';
            break;
        case 'warning':
            $this->class = ' bg-yellow-50 text-yellow-800';
            $this->titleAlert = 'Warning Alert!';
            break;
        case 'dark':
            $this->class = ' bg-gray-100 text-gray-800';
            $this->titleAlert = 'Dark Alert!';
            break;
        
        default:
            $this->class = ' bg-blue-50 text-blue-800';
            $this->titleAlert = 'Info Alert!';
            break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
