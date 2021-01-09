@extends('layouts.pagearticture')
{{-- title of page --}}
@section('title')
    Books
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('css/showallbooks.css')}}">
@endsection
{{-- content of page --}}
@section('content')
   <section class="showAllBooks pt-5 bm">
       <div class="container pt-5">
       
       
       
        <h2 class="text-center"><i class="far fa-bookmark mr-2"></i> All Avaliable Books  </h2>
        
        <div class="cards py-5">
            @auth
            @if (Auth::user()->is_admin == 1)
            <a href="{{route('books.create')}}" class="btn   mb-3 addnewbook"><i class="fas fa-plus mr-2"></i> Add New Book </a> 
            @endif
            @endauth
            
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3" id="books">
                @foreach ($result as $item)
                <div class="col mb-4">
                    <div class="card bookcard border-0">
                      <img src='{{ asset("images/bookimages/$item->bookimage")}}' class="card-img-top bookimage" alt="..." >
                      <div class="card-body">
                          <h5 class="card-title oneline">{{$item->bookname}}</h5>
                          <p class="card-text oneline">{{$item->bookdescription}}</p>
                          @if ($item->keysale != 'true')
                          <p class="card-text oneline"><span class="font-weight-bold">Price: </span> {{$item->bookprice}} <span class="font-weight-bold">EGP</span></p> 
                          @else
                          <div class="d-flex">
                          <p class="card-text oneline"><span class="font-weight-bold">Price: </span> </p>
                          <p class="card-text pricesale ml-2 oneline">{{$item->bookprice}}</p>
                          <p class="card-text ml-2 oneline">{{$item->newprice}} <span class="font-weight-bold">EGP</span></p>
                          </div>
                          <div class="sale btn bg-warning"> sale</div>
                          @endif
                          
                          <a href="{{route('books.showonebook',$item->id)}}" class="btn  btn-primary mt-2">  Show More <i class="fas fa-angle-right"></i></a>
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
        </div>
        {{$result->render()}}
       </div>
   </section>
   
@endsection