@extends('layouts.pagearticture')
{{-- title of page --}}
@section('title')
   {{$result->categoryname}}
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('css/cateogry/showallcateogry.css')}}">
<link rel="stylesheet" href="{{asset('css/showallbooks.css')}}">

@endsection
{{-- content of page --}}
@section('content')
<section class="py-5 bm">
    <div class="container pt-5">
        


    <div class="card mb-5 container" >
    <div class="row no-gutters">
      <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title text-capitalize">{{$result->categoryname}}</h5>
        </div>
      </div>
    </div>
  </div> 
  <a href="{{route('Category.showallCateogries')}}" class="btn addnewbook mb-3"><i class="fas fa-chevron-left mr-2"></i>Back</a>
 @if (count($result->books) > 0)
     
 <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3" id="books">
    @foreach ($result->books as $item)
    <div class="col mb-4">
        <div class="card bookcard border-0">
          <img src='{{ asset("images/bookimages/$item->bookimage")}}' class="card-img-top bookimage" alt="..." >
          <div class="card-body">
              <h5 class="card-title oneline">{{$item->bookname}}</h5>
              <p class="card-tex oneline">{{$item->bookdescription}}</p>
              @if ($item->keysale != 'true')
              <p class="card-text oneline"><span class="font-weight-bold">Price: </span> {{$item->bookprice}} <span class="font-weight-bold">EGP</span></p> 
              @else
              <div class="d-flex">
              <p class="card-tex oneline"><span class="font-weight-bold">Price: </span> </p>
              <p class="card-text pricesale ml-2 oneline">{{$item->bookprice}}</p>
              <p class="card-text ml-2 oneline">{{$item->newprice}} <span class="font-weight-bold">EGP</span></p>
              </div>
              <div class="sale btn bg-warning oneline"> sale</div>
              @endif
              
              <a href="{{route('books.showonebook',$item->id)}}" class="btn  btn-primary mt-2 ">  Show More <i class="fas fa-angle-right"></i></a>
              @auth
              @if (Auth::user()->is_admin == 1)
              <a href="{{route('updatebook',$item->id)}}" class="btn btn-success mt-2"> <i class="far fa-edit"></i> Edit </a>
              <a href="{{route('books.deletebook',$item->id)}}" class="btn btn-danger mt-2"> <i class="fas fa-trash"></i> Delete</a>
              @endif
              @endauth
              
          </div>
        </div>
      </div>   
    @endforeach
</div>
     
 @endif
  
  



    </div>
</section>
    
@endsection