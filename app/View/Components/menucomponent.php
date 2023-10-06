<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

use App\Models\Menus;

class menucomponent extends Component
{
    /**
     * Create a new component instance.
     */
    private $menus;

    public function __construct()
    {
        $this->menus = Menus::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $dados = [
            "menus"=>$this->menus,
        ];
        
        return view('components.menucomponent', $dados);
    }
}
