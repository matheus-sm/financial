<?php

namespace App\Services\Menus;

use App\Models\Menus;

class MenusService
{
  public function createMenu($dados)
  {
    $menus = new Menus();

    $menus->pm_description = $dados->pm_description;
    $menus->pm_icon = $dados->pm_icon;

    $menus->save();
  }
}