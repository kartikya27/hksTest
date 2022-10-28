
    <a href="#" class="sub-item  sub-btn">{{ $menu->name }} 
        
        <i class="fas fa-angle-right dropdown"></i>
       
    </a> 


<x-menus :menus="$menu->children" />
