@extends('layouts.pagearticture')
{{-- title of page --}}
@section('title')
   Update Book
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('css/updatebook.css')}}">
@endsection
{{-- content of page --}}
@section('content')
<section class="py-5 bm">
    <div class="container pt-5">
        <h2 class="text-center pb-3"><i class="far fa-bookmark mr-2 specailiconforregister "></i>Update Book</h2>
        <div>

            @if ($errors->any())
          
                @foreach ($errors->all() as $error)
          
                    <div class="alert alert-danger" role="alert">
                      {{ $error }}
                    </div>
          
                @endforeach
          
            @endif
          
          </div>
          <form action="{{route('updatedbbook',$book->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Book Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="title" value="{{old('title') ?? $book->bookname}}">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label" >Book Description</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" name="description"  value="{{old('description') ?? $book->bookdescription}}">
                </div>
              </div>
              <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label" >Book Price</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="price"  value="{{old('price') ?? $book->bookprice}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label" >Book Image</label>
                  <div class="col-sm-10">
                    {{-- <input type="text" class="form-control" id="inputPassword3" name="image"  value="{{old('image') ?? $book->bookimage}}"> --}}
                     <div class="custom-file">
                     <input type="file" class="custom-file-input" id="inputGroupFile01" name="image">
                     <input type="text" class="d-none" name="defaultimg" value="{{ old('image') ?? $book->bookimage }}">
                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                  </div>
                </div>


<!-- chose  -->
<fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Sale</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="Sale" name="Sale" class="custom-control-input" value="yes">
    <label class="custom-control-label" for="Sale">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="Sale2" name="Sale" class="custom-control-input" value="no">
    <label class="custom-control-label" for="Sale2" >No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <label for="inputnewPrice" class="col-sm-2 col-form-label ">New Price</label>
    <div class="col-sm-10 pt-0 ">
      <div class="input-group mt-0 ">
  <input type="number" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" id="inputnewPrice" disabled name="newprice">
  <div class="input-group-append ">
    <span class="input-group-text">EGP</span>
  </div>
</div>


    </div>
  </div>


              <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn addnewbook"><i class="far fa-edit mr-2"></i>Update Book</button>
                </div>
              </div>
            </form>
            <a href="{{route('books.showall')}}" class="btn addnewbook"><i class="fas fa-chevron-left mr-2"></i>Back</a>
    </div>
</section>
    
@endsection
@section('script')
<script src="{{asset('js/addmewbook.js')}}"></script>
<script>
    
    if({{$book->keysale}} == true){
        $('input[id="inputnewPrice"]').removeAttr( "disabled" );
        $('#Sale').attr( "checked" ,'');
        $('input[id="inputnewPrice"]').attr("value","{{old('newprice')??$book->newprice}}")
    }else{
        $('#Sale2').attr( "checked" ,'');
        $('input[id="inputnewPrice"]').attr( "disabled" ,'');
    }
  
</script>
    
@endsection