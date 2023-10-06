<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Menus;

class SubMenus extends Model
{
    
    use HasFactory;

    protected $table = 'personal_submenus';

    // Relação muitos para um com Menu
    public function menus()
    {
        return $this->belongsTo(Menus::class);
    }
}
