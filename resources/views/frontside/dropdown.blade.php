<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>@yield('title', 'WholeSale | Dropdown')</title>
   <!-- Bootstrap 4 -->
   @include('partials.links')
   <style>
      .dropdown-submenu {
         position: relative;
      }

      .dropdown-submenu>.dropdown-menu {
         top: 0;
         left: 100%;
         margin-top: -6px;
         margin-left: -1px;
         -webkit-border-radius: 0 6px 6px 6px;
         -moz-border-radius: 0 6px 6px;
         border-radius: 0 6px 6px 6px;
      }

      .dropdown-submenu:hover>.dropdown-menu {
         display: block;
         margin-top: 39px;
         margin-left: -100px;
      }
      .dropdown-submenu:hover>.dropdown-menu.secondsub {
         margin-top: 0;
         margin-left: 0;
      }
      .dropdown-submenu>a:after {
         display: block;
         content: " ";
         /*float: right;*/
         width: 0;
         height: 0;
         border-color: transparent;
         border-style: solid;
         border-width: 5px 0 5px 5px;
         border-left-color: #ccc;
      /*   margin-top: 5px;*/
      /*   margin-right: -10px;*/
         margin-top: -16px;
         margin-right: -12px;
      }

      .dropdown-submenu:hover>a:after {
         border-left-color: #fff;
      }

      .dropdown-submenu.pull-left {
         float: none;
      }

      .dropdown-submenu.pull-left>.dropdown-menu {
         left: -100%;
         margin-left: 10px;
         -webkit-border-radius: 6px 0 6px 6px;
         -moz-border-radius: 6px 0 6px 6px;
         border-radius: 6px 0 6px 6px;
      }
   </style>
</head>

<body>
<div class="container my-4">

   <p class="font-weight-bold">An example of bootstrap nested dropdown. Easy to implement and customize. Examples of basic and advanced usage.</p>

   <p>
      <strong>Detailed documentation and more examples you can find in our
         <a href="https://mdbootstrap.com/docs/jquery/components/dropdowns/" target="_blank">Bootstrap Dropdown Docs</a>
      </strong>
   </p>

   <hr>

   <p class="font-weight-bold">Basic example</p>


   <div class="dropdown">
{{--      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--         Categories--}}
{{--      </button>--}}

      <ul class="dropdown-menu multi-level d-flex align-items-center" role="menu" aria-labelledby="dropdownMenu">

         @foreach($categories as $category)
         <li class="dropdown-submenu">
            <a  class="dropdown-item" tabindex="-1" href="#">{{$category->name}}</a>
            @if($category->subcategory->count() > 0)
            <ul class="dropdown-menu">
               @foreach($category->subcategory as $subcat)
               <li class="dropdown-submenu">
                  <a class="dropdown-item" href="#">{{$subcat->name}}</a>
                  @if($subcat->subcategory->count() > 0)
                  <ul class="dropdown-menu secondsub">
                     @foreach($subcat->subcategory as $secondsub)
                     <li class="dropdown-submenu "><a class="dropdown-item" href="#">{{$secondsub->name}}</a>
                        <ul class="dropdown-menu">
                           <li class="dropdown-item"><a href="#">4th level</a></li>
                           <li class="dropdown-item"><a href="#">4th level</a></li>
                           <li class="dropdown-item"><a href="#">4th level</a></li>
                        </ul>
                     </li>
                     @endforeach
                  </ul>
                  @endif
               </li>
               @endforeach
            </ul>
            @endif
         </li>
         @endforeach
      </ul>
   </div>

</div>
   @include('partials.scripts')
</body>
</html>

