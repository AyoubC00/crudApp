<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImageLoader extends Component
{
    public $isInvalid;
    public $src;
    /**
     * Create a new component instance.
     */
    public function __construct($isInvalid = '', $src = '')
    {
        $this->isInvalid = $isInvalid;
        $this->src = $src;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.image-loader');
    }
}
