<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\SubMenus;

class Menus extends Model
{
    use HasFactory;

    protected $table = 'personal_menus';

    // Relação um para muitos com Submenu
    public function submenus()
    {
        return $this->hasMany(SubMenus::class, 'ps_menu_id');
    }
}
