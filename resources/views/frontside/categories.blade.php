<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @include('partials.links')
   <title>Document</title>
</head>
<body>
   <div class="">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               @foreach($categories as $category)
               <li class="nav-item active dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     {{$category->name}}
                  </a>
                  <a href="{{route('showcategory', ['id' => $category->id])}}">All {{$category->name}} products</a>
                  @if($category->subcategory()->count())
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     @foreach($category->subcategory as $subcat)

                        <a class="dropdown-item" href="{{route('showcategory', $subcat->id)}}" id="navbarDropdown}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           {{$subcat->name}}
                        </a>

                           @if($subcat->subcategory()->count())
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 @foreach($subcat->subcategory as $subsubcat)

                                    <a class="dropdown-item" href="{{route('showcategory', $subsubcat->id)}}" id="navbarDropdown}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       {{$subsubcat->name}}
                                    </a>

                                 @endforeach
                              </div>
                           @endif

                     @endforeach
                     </div>
                  @endif
               </li>
               @endforeach

            </ul>
         </div>
      </nav>
   </div>
</body>
   @include('partials.scripts')
</html>
