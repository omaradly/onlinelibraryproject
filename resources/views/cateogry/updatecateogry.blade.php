@extends('layouts.pagearticture')
{{-- title of page --}}
@section('title')
   Update Cateogry
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('css/cateogry/updatecateogry.css')}}">
@endsection
{{-- content of page --}}
@section('content')
<section class="py-5 bm">
    <div class="container pt-5">
      <h2 class="text-center pb-3"><i class="far fa-bookmark mr-2 specailiconforregister "></i>Update Cateogry</h2>
        <div>

            @if ($errors->any())
          
                @foreach ($errors->all() as $error)
          
                    <div class="alert alert-danger" role="alert">
                      {{ $error }}
                    </div>
          
                @endforeach
          
            @endif
          
          </div>
          <form action="{{route('Category.updatedbcateogry',$category->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">category Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="title" value="{{old('title') ?? $category->categoryname}}">
                </div>
              </div>
          
              <div class="form-group row">
                <div class="col-sm-10">
                  <button type="submit" class="btn addnewbook"><i class="far fa-edit mr-2"></i>Update category</button>
                </div>
              </div>
            </form>
            <a href="{{route('Category.showallCateogries')}}" class="btn addnewbook"><i class="fas fa-chevron-left mr-2"></i>Back</a>
    </div>
</section>
    
@endsection