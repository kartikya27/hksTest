<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Fluent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class treeEntry extends Model
{
    use HasFactory;
    protected $table="tree_entry";
    public static function tree(){
        // $allMenu = treeEntry::get();
        $allMenu = treeEntry::join('tree_entry_lang','tree_entry_lang.entry_id','=','tree_entry.entry_id')->get();
        $rootMenu = $allMenu->where('parent_entry_id',0);
        self::formatTree($rootMenu,$allMenu);
        return $rootMenu;
    }

    private static function formatTree($menus, $allMenu){
        foreach($menus as $menu){
            $menu->children = $allMenu->where('parent_entry_id',$menu->entry_id)->values();
            if($menu->children->isNotEmpty()){
                self::formatTree($menu->children,$allMenu);
            }
        }
    }

    public function isChild()
    {
        return $this->parent_entry_id !== 0;
    }
}
