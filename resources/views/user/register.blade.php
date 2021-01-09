@extends('layouts.pagearticture')
{{-- title of page --}}
@section('title')
Register
@endsection
{{-- style page --}}
@section('style')
<link rel="stylesheet" href="{{asset('css/loginandregister/register.css')}}">
    <style>
        body{
            background-image: url("{{asset('images/loginandregister/pexels-photo-4855385.jpeg')}}");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
@endsection
{{-- content of page --}}
@section('content')
<div class="overlay"></div>
    <section class="py-5 bm">
        <div class="container pt-5">
            <div class="box text-light">
                
                <div class="sub-box">
                    <h2 class="text-center pb-3"><i class="far fa-bookmark mr-2 specailiconforregister "></i>Register</h2>
                

                    <div>

                        @if ($errors->any())
                      
                            @foreach ($errors->all() as $error)
                      
                                <div class="alert alert-danger" role="alert">
                                  {{ $error }}
                                  
                                </div>
                      
                            @endforeach
                      
                        @endif
                      
                      </div>
                      <form action="{{route('auth.registerstore')}}" method="POST" class="px-4">
                          @csrf
                          
                          <div class="form-group row border-bottom border-secondary px-0" >
                            
                            <div class="col-sm-10 px-0">
                            <input type="text" class="form-control" id="inputusername" name="name" placeholder="Enter Your User Name"
                            @if (session('user') == null)
                            value="{{ old('name') }}"
                            @else
                            @if (session('user')->nickname == null)
                            value="{{ session('user')->name }}" 
                            @else
                            value="{{ session('user')->nickname }}"
                            @endif   
                            @endif>
                            </div>
                            <label for="inputusername" class="col-sm-2 col-form-label text-right px-0"><i class="fas fa-user"></i></label>
                          </div>
                          <div class="form-group row border-bottom border-secondary px-0">
                              <div class="col-sm-10 px-0">
                              <input type="text" class="form-control" id="inputEmail3" name="email" value="{{session('user') == null ? old('email') : session('user')->email}}" placeholder="Enter Your Email">
                              </div>
                              <label for="inputEmail3" class="col-sm-2 col-form-label text-right px-0"><i class="far fa-envelope"></i></label>
                            </div>
                            <div class="form-group row border-bottom border-secondary px-0">
                              
                              <div class="col-sm-10 px-0">
                              <input type="password" class="form-control" id="inputpassword" name="password" value="{{old('password')}}" placeholder="Enter Password">
                              </div>
                              <label for="inputpassword" class="col-sm-2 col-form-label text-right px-0" ><i class="fas fa-unlock-alt"></i></label>
                            </div>
                          <div class="form-group row">
                            <div class="col-sm-12 text-center">
                              <button type="submit" class="btn btn-primary addnewbook btn-block">Signup</button>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-12 text-center">
                               <h6 class="line">or<h6>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-12 text-center ">
                                <a href="{{route('auth.login')}}" class="btn addnewbook btn-block">Signin</a>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-12 text-center ">
                                <a href="{{route('auth.login.github')}}" class="btn addnewbook btn-block"><i class="fab fa-github mr-2 githupicon"></i>Githup</a>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-12 text-center ">
                                <a href="{{route('auth.login.facebook')}}" class="btn addnewbook btn-block "><i class="fab fa-facebook mr-2 facebookicon"></i>Facebook</a>
                            </div>
                          </div>
                        
                        </form>
                        


                </div>


            </div>
        </div>
    </section>
@endsection