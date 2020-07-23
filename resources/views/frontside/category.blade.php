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
<div class="container">
   <div class="row">
      <div class="col-md-6 pt-5">
         @if($category->subcategory()->count())
            @foreach($category->subcategory as $subcat)
            <a href="{{route('showcategory', $subcat->id)}}" class="badge badge-secondary">{{$subcat->name}}</a>
{{--               @if($subcat->subcategory()->count())--}}
{{--                  @foreach($subcat->subcategory as $subsubcat)--}}
{{--                     <a href="{{route('showcategory', $subsubcat->id)}}" class="badge badge-secondary">{{$subsubcat->name}}</a>--}}

{{--                     @if($subsubcat->subcategory()->count())--}}
{{--                        @foreach($subsubcat->subcategory as $subsubsubcat)--}}
{{--                           <a href="{{route('showcategory', $subsubsubcat->id)}}" class="badge badge-secondary">{{$subsubsubcat->name}}</a>--}}
{{--                        @endforeach--}}
{{--                     @endif--}}

{{--                  @endforeach--}}
{{--               @endif--}}
            @endforeach
         @endif
      </div>
   </div>

   <div class="row pt-5">
      @foreach($category->products as $product)
      <div class="col-md-3 mr-5">
         <div class="card" style="width: 18rem;">
            <img src="{{asset('storage/'.$product->images()->first()->image_path)}}" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title"><strong>{{$product->name}}</strong></h5>
               <p class="card-text">£ {{$product->single_price}}</p>
               <a href="#" class="btn btn-primary">Add</a>
            </div>
         </div>
      </div>
      @endforeach
   </div>
   <div class="row mt-5">
      <div class="col-md-12 mb-3"><h1>Brands</h1></div>
      @foreach($category->brands as $brand)
      <div class="col-md-2">
         <a href="" class="btn btn-outline-info">{{$brand->name}}</a>
      </div>
      @endforeach
   </div>
</div>
</body>
@include('partials.scripts')
</html>
