<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class dashboardcomponent extends Component
{
    /**
     * Create a new component instance.
     */

    private $contas;


    public function __construct()
    {
        $this->contas = [
            'teste'=>'teste',
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $dados = [
            'teste' =>$this->contas,
        ];
        return view('components.dashboardcomponent', $dados);
    }
}
