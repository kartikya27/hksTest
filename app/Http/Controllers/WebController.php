<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\treeEntry;

class WebController extends Controller
{
    public function index(){
        // $rootMenu = treeEntry::join('tree_entry_lang','tree_entry_lang.entry_id','=','tree_entry.entry_id')->get();
        // $rootMenu = treeEntry::where('parent_entry_id',0)->get();
        // return view('index',[
        //     'rootMenu' => $rootMenu,
        // ]);
        // $rootMenu = treeEntry::tree();
        // return view('index', compact('rootMenu'));
        
        return view('index',[
            'menus' =>   treeEntry::tree()
        ]);
    }
}
