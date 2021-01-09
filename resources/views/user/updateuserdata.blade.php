@extends('layouts.pagearticture')
{{-- title of page --}}
@section('title')
Update Profile
@endsection
{{-- style page --}}
@section('style')
<link rel="stylesheet" href="{{asset('css/loginandregister/update.css')}}">
    
@endsection
{{-- content of page --}}
@section('content')

    <section class="py-5 bm">
        <div class="container pt-5">
            <div class="box text-light">
                
                <div class="sub-box">
                    <h2 class="text-center pb-3"><i class="far fa-bookmark mr-2 specailiconforregister "></i>UpdateProfile</h2>
                

                    <div>

                        @if ($errors->any())
                      
                            @foreach ($errors->all() as $error)
                      
                                <div class="alert alert-danger" role="alert">
                                  {{ $error }}
                                  
                                </div>
                      
                            @endforeach
                      
                        @endif
                      
                      </div>
                      <form action="{{route('auth.updatedbdata')}}" method="POST" class="px-4">
                          @csrf
                          <div class="form-group row " >
                            <label for="inputusername" class="col-sm-2 col-form-label ">User Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputusername" name="name" placeholder="Enter Your User Name" value="{{old('name')??Auth::user()->name}}">
                            </div>
                            
                          </div>
                          <div class="form-group row ">
                            <label for="inputEmail3" class="col-sm-2 col-form-label  ">Email</label>
                              <div class="col-sm-10 ">
                              <input type="text" class="form-control" id="inputEmail3" name="email" value="{{ old('email')??Auth::user()->email}}" placeholder="Enter Your Email">
                              </div>
                              
                            </div>
                      
                        
                          <div class="form-group row">
                            <div class="col-sm-12 ">
                              <button type="submit" class="btn btn-primary addnewbook "><i class="far fa-edit mr-2"></i>UpdateDate</button>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-12 ">
                                <a href="{{route('homepage')}}" class="btn addnewbook"><i class="fas fa-chevron-left mr-2"></i>Back</a>
                            </div>
                          </div>
                          
                         
                         
                        
                        </form>
                        


                </div>


            </div>
        </div>
    </section>
@endsection