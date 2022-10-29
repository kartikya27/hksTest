<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HKS Test</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- Styles<meta http-equiv="refresh" content="5"> -->
    <style>

    </style>
</head>

<body class="antialiased">

    <div class="side-bar">
        <div class="menu">
            @foreach($menus as $menu)
            <div class="item">
            
                <a class="sub-btn" href="#">
                    {{ $menu->name }} <i class="fas fa-angle-right dropdown"></i>
                </a>
                <div class="sub-menu">
                @foreach($menu->children as $child)
                
                    <a href="#" class="sub-item sub-btn">{{ $child->name }} @if($child->isChild() !== 0)<i class="fas fa-angle-right dropdown"></i>@endif
                    </a>
                    <div class="sub-menu">
                        @foreach($child->children as $child2)
                            
                                <a href="#" class="sub-item sub-btn">{{ $child2->name }} @if($child2->isChild() !== 0)<i class="fas fa-angle-right dropdown"></i>@endif</a>
                                <div class="sub-menu">
                                    @foreach($child2->children as $child3)

                                            <a href="#" class="sub-item">{{ $child3->name }}</a>

                                    @endforeach
                                    </div>
                                
                            
                        @endforeach
                        </div>
                    
                    @endforeach
                </div>
                
            </div>
            
            @endforeach

        </div>
    </div>




    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">

        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $('.sub-btn').click(function() {
            $(this).next('.sub-menu').slideToggle();
            $(this).find('.dropdown').toggleClass('rotate');
        });
    });
    </script>

</body>

</html>