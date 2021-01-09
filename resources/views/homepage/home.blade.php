@extends('layouts.pagearticture')
{{-- title of page --}}
@section('title')
    Home Page
@endsection
{{-- style page --}}
@section('style')
{{-- swiper slider --}}
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="{{asset('css/homepage.css')}}">
    <style>
        header{
            background-image: url("images/landingpage/pexels-cottonbro-4861363.jpg");
            background-size: cover;
            background-attachment: fixed;
            min-width: 100%;
            position: relative;
            transition: background-image 3s;
        }
        .contact-us{
            min-height: 600px;
            background-image: url('images/landingpage/20.jpg');
            background-size: cover;
            padding-top: 80px;
            padding-bottom: 80px;
            position: relative;
        }
    </style>
@endsection
{{-- content of page --}}
@section('content')
{{-- ================================== start header ==================================== --}}
      <header class="overflow-hidden py-5 ">
        <div class="overlay"></div>
        <div class="container pt-5">
            <div class="headercontent">
               {{--  typewrite --}}
              <div class="aaa">
                <h1 class="text-center">
                    <a href="" class="typewrite specialwrite" data-period="2000" data-type='[ "Welcome In Our Library", "We Have +10000 Book In Diffrent Fields", "We Hobe You Find What You Need"]'>
                      <span class="wrap"></span>
                    </a>
                  </h1>
                
              </div>
              <div class="input-group my-5 ">
                <input type="text" class="form-control form-control-lg rounded-0" placeholder="Book Name" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <select class="form-control form-control-lg rounded-0  px-2">
                        <option>All Catogiries</option>
                        <option>Large select</option>
                        <option>Large select</option>
                        <option>Large select</option>
                      </select>
                  <button class="btn searchbutton rounded-0 px-5 text-nowrap font-weight-bold" type="button" id="button-addon2">Get Book <i class="fas fa-search "></i></button>
                </div>
              </div>
            </div>
        </div>
      </header>
{{-- ================================== end header ==================================== --}}     
{{-- ================================== start about us ==================================== --}}    
<section class="about-us py-5">
  <div class="container overflow-hidden">
    <div class="row py-5">
      <div class="col-12 col-sm-12 col-lg-6 col-md-12 pr-3 s">
        <div class="a1 p-4 ">
        <img  src="{{asset('images/aboutus/pexels-cottonbro-4855562.jpg')}}" class="aboutusimage  rounded-lg shadow-lg" alt>
      </div>  
      </div>
      <div class="col-12 col-sm-12 col-lg-6 col-md-12 px-5">
        <h2 class="font-weight-bold undrlineheader pb-3 "><i class="far fa-bookmark mr-2 specailiconforaboutus "></i>About Us</h2>
        <p class="pt-4 aboutusP">
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
        </p>
      </div>
  
    </div>
  </div>  
</section> 
{{-- ================================== end about us ==================================== --}}     
{{-- ================================== start ourskills ==================================== --}}  
<section class="skills">
  <div class= "container">
    <h2 class="font-weight-bold  pb-3 "><i class="far fa-bookmark mr-2 iconcolor "></i>Our Skills</h2>
    <div class="skill-box">
      <div class="skill-name">Html</div>
      <div class="skill-progress" >
        <span data-progress="80%"></span>
      </div>
    </div>
    <div class="skill-box">
      <div class="skill-name">Css</div>
      <div class="skill-progress" >
        <span data-progress="100%"></span>
      </div>
    </div>
    <div class="skill-box">
      <div class="skill-name">Java Script</div>
      <div class="skill-progress">
        <span data-progress="40%"></span>
      </div>
    </div>
    <div class="skill-box">
      <div class="skill-name">bootstrap</div>
      <div class="skill-progress">
        <span data-progress="2%"></span>
      </div>
    </div>
    <div class="skill-box">
      <div class="skill-name">media query</div>
      <div class="skill-progress">
        <span data-progress="50%"></span>
      </div>
    </div>
    <div class="skill-box">
      <div class="skill-name">jquery</div>
      <div class="skill-progress">
        <span data-progress="14%"></span>
      </div>
    </div>
  </div>
</section>   
{{-- ================================== end ourskills ==================================== --}}
	<!-- start Time line -->
	<div class="timeline">
    <div class="container">
      <h2 class="font-weight-bold  pb-5  text-center "><i class="far fa-bookmark mr-2  iconcolor"></i>Timeline</h2>
      <div class="timeline-content">
        <div class="year">2020</div>
        <div class="left">
          <div class="content">
            <h3>Testing heading</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.   </p>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="right">
          <div class="content">
            <h3>Testing heading</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.   </p>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="year">2021</div>
        <div class="left">
          <div class="content">
            <h3>Testing heading</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.   </p>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="right">
          <div class="content">
            <h3>Testing heading</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.   </p>
          </div>
        </div>
      </div>
      </div>
    </div>
    <!-- end Time line -->
    <!-- ================================ start Testimonials =========================== -->
    <section class="Testimonials py-5 third-back-ground overflow-hidden" id="Testimonials">
      <div class="py-5">
       <h2 class="firstColor service-header font-weight-bold mb-3 text-center mt-5 "><i class="far fa-bookmark mr-2 specailiconforaboutus "></i>Customer Testimonials</h2>
       <p class="text-muted service-header-pargraph mb-5 text-center">Our customers are satisfied with the work we do. The greatest gratification is to receive recognition <br>for what we have built. This motivates us to improve even more.
       </p>
       <div class="swiper-container second-swiper">
         <div class="swiper-wrapper">
           <div class="swiper-slide rounded shadow">
             <img src="{{asset('images/testimonails/team-1.jpg')}} " class="rounded-circle mb-3 Testimonials-img">
             <h5 class="firstColor font-weight-bold mt-2 mb-3 Testimonials-title oneline">Karen Usman</h5>
             <p class="text-muted service-card-pargraph Testimonials-card-pargraph oneline">I had small problems with the <br>payment, but it was resolved.</p>
             <ul class="nav justify-content-center flex-nowrap oneline">
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
              
             </ul>
           </div>
           <!-- 2 -->
           <div class="swiper-slide rounded shadow">
             <img src="{{asset('images/testimonails/team-2.jpg')}} " class="rounded-circle mb-3 Testimonials-img">
             <h5 class="firstColor font-weight-bold mt-2 mb-3 Testimonials-title oneline">Adams Baker</h5>
             <p class="text-muted service-card-pargraph Testimonials-card-pargraph oneline">My website looks amazing with <br>the Leverage Theme.</p>
             <ul class="nav justify-content-center flex-nowrap oneline">
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
             </ul>
           </div>
           <!-- 3 -->
           <div class="swiper-slide rounded shadow">
             <img src="{{asset('images/testimonails/team-3.jpg')}} " class="rounded-circle mb-3 Testimonials-img">
             <h5 class="firstColor font-weight-bold mt-2 mb-3 Testimonials-title oneline">Mary Evans</h5>
             <p class="text-muted service-card-pargraph Testimonials-card-pargraph oneline">This company created an <br>exclusive form. Fantastic.</p>
             <ul class="nav justify-content-center flex-nowrap oneline">
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
             </ul>
           </div>
           <!-- 4 -->
           <div class="swiper-slide rounded shadow ">
             <img src="{{asset('images/testimonails/team-4.jpg')}} " class="rounded-circle mb-3 Testimonials-img">
             <h5 class="firstColor font-weight-bold mt-2 mb-3 Testimonials-title oneline">Sarah Lopez</h5>
             <p class="text-muted service-card-pargraph Testimonials-card-pargraph oneline">I'm loving the partnership. The <br>support deserves 5 stars.</p>
             <ul class="nav justify-content-center flex-nowrap oneline">
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
             </ul>
           </div>
           <!-- 5 -->
           <div class="swiper-slide rounded shadow">
             <img src="{{asset('images/testimonails/team-5.jpg')}} " class="rounded-circle mb-3 Testimonials-img">
             <h5 class="firstColor font-weight-bold mt-2 mb-3 Testimonials-title oneline">Joseph Hills</h5>
             <p class="text-muted service-card-pargraph Testimonials-card-pargraph oneline">My app was perfect. I will <br>request more services soon.</p>
             <ul class="nav justify-content-center flex-nowrap oneline">
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link Testimonials-card-icons" href="#"><i class="far fa-star"></i></a>
               </li>
             </ul>
           </div>
           
         </div>
         <!-- Add Pagination -->
         <div class="swiper-pagination"></div>
      </div>
     </section>
     <!-- ================================ end Testimonials =========================== -->
     <!-- start contact us  -->
	<div class="contact-us">
    <div class="overlay"></div>
    <div class="container">
      <h2 class="font-weight-bold  pb-3 "><i class="far fa-bookmark mr-2 iconcolor "></i>Contact Us</h2>
      <form action="">
        <div class="left">
        <input type="text" placeholder="Your Name" name="username">
        <input type="text" placeholder="Your Phone" name="userphone">
        <input type="text" placeholder="Your Email" name="useremail">
        <input type="text" placeholder="subject" name="subject">
        </div>
        <div class="right">
          <textarea name="message" placeholder="your Message"></textarea>
          <input type="submit" value="send">
        </div>
      </form>
    </div>
    </div>
    <!--  end contact us --> 
        

 
         
      
@endsection
@section('script')
{{-- <script src="{{asset('js/typed.js')}}"></script> --}}
    {{-- swiper slider --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="{{asset('js/homepage.js')}}"></script>
    <script>
    /* landing page*/
    //get array of images
        let imgsArray = ["pexels-cottonbro-4861363.jpg","pexels-photo-1319855.jpeg","pexels-photo-2067569.jpeg","pexels-photo-4855559.jpeg","pexels-photo-4861357.jpeg","pexels-photo-4861353.jpeg"];
          backgroundInterval = setInterval(()=>{
    //get random number for image
          let randomnumber  = Math.floor(Math.random() * imgsArray.length);
          console.log('url('+"{{asset('images/landingpage')}}"+'/'+imgsArray[randomnumber]+')');
    //change background url
          document.querySelector('header').style.backgroundImage = 'url('+"{{asset('images/landingpage')}}"+'/'+imgsArray[randomnumber]+')';
          }, 7000);	
          
          
        
    </Script>
@endsection