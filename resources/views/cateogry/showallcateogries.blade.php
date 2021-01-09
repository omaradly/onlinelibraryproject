@extends('layouts.pagearticture')
{{-- title of page --}}
@section('title')
    Cateogries
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('css/cateogry/showallcateogry.css')}}">
@endsection
{{-- content of page --}}
@section('content')
    <section class="py-5 bm">
        <div class="container pt-5">
            <h2 class="text-center"><i class="far fa-bookmark mr-2"></i> All Avaliable Catogries  </h2>
@auth
@if (Auth::user()->is_admin == 1)
<a href="{{route('Category.createnewcateogry')}}" class="btn mb-3 addnewcateogry"><i class="fas fa-plus mr-2"></i> Add New category </a>
@endif
@endauth            

<table class="table table-striped table-light">
    <thead class="text-center">
      <tr>
        <th scope="col">categoryname</th>
        @auth
        @if (Auth::user()->is_admin == 1)
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
        @endif
        @endauth
      
      </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($result as $item)
        <tr>
            <td class="text-capitalize font-weight-bold "><a class="nav-link text-body cateogryname" href="{{route('Category.showonecateogry',$item->id)}}">{{$item->categoryname}}</a></td>
            @auth
            @if (Auth::user()->is_admin == 1)
            <td><a href="{{route('Category.updatecateogry',$item->id)}}" class="btn btn-success mt-2 iconsize"> <i class="far fa-edit "></i></a></td>
            <td><a href="{{route('Category.deletecateogry',$item->id)}}" class="btn btn-danger mt-2 iconsize"> <i class="fas fa-trash "></i></a></td> 
            @endif
            @endauth
            
        </tr>  
        @endforeach
     
     
    </tbody>
  </table>
  {{$result->render()}}
        </div>
    </section>
@endsection