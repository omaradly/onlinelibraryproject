@extends('layouts.pagearticture')
{{-- title of page --}}
@section('title')
{{$result->bookname}}
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('css/shwoonebook.css')}}">
@endsection
{{-- content of page --}}
@section('content')
<section class="py-5 bm">
<div class="container pt-5">
<a href="{{route('books.showall')}}" class="btn mb-3 backbottom"><i class="fas fa-chevron-left"></i> Back</a> 
<div class="card mb-5 container px-0" >
    <div class="row no-gutters">
      <div class="col-md-4">
      <img src='{{asset("images/bookimages/$result->bookimage")}}' class="card-img cardimage" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title ">{{$result->bookname}}</h5>
            <p class="card-text ">{{$result->bookdescription}}</p>
            @if ($result->keysale != 'true')
            <p class="card-text "><span class="font-weight-bold">Price: </span> {{$result->bookprice}} <span class="font-weight-bold">EGP</span></p> 
            @else
            <div class="d-flex">
            <p class="card-text "><span class="font-weight-bold">Price: </span> </p>
            <p class="card-text pricesale ml-2 ">{{$result->bookprice}}</p>
            <p class="card-text ml-2 ">{{$result->newprice}} <span class="font-weight-bold">EGP</span></p>
            </div>
   
            @endif
            @if (count($result->Categories) > 0)
            <p class="card-text ">Categories:  </p>
            @endif
            <div class="d-flex flex-wrap cateogrylinks mb-4">
            @foreach ($result->Categories as $item)
            <p class="card-text m-0 mr-2 mb-2 p-0"><a class="nav-link cateogryname cateogry-bg" href="{{route('Category.showonecateogry',$item->id)}}">{{$item->categoryname}}</a></p>
            @endforeach
            </div>
        <a href="#" class="btn btn-success">Buy</a>
          
        </div>
      </div>
    </div>
  </div> 
  
</div>
</section>
@endsection