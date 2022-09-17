<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JHOLERY</title>
  <link rel="stylesheet" href=" {{ asset('site/bootstrap/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('site/fontawesome/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
  @yield('css')


</head>
<body>
          <!--  navbar section starts here  -->
   <section id="navbar">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#">JHOLEY</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav text-center ml-auto">
              <li class="nav-item {{ $activePage == 'home' ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('getHome')}}">HOME</a>
              </li>
              <li class="nav-item  {{ $activePage == 'abouts' ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('getAbouts')}}">ABOUTS</a>
              </li>
              <li class="nav-item  {{ $activePage == 'service' ? 'active' : ''}}">
                <a class="nav-link" href="{{ route ('getService') }}">SERVICES</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="">GALLERY</a>
              </li>            -->
              <li class="nav-item  {{ $activePage == 'contact' ? 'active' : ''}}">
                <a class="nav-link" href="{{ route ('getContact') }}">CONTACT</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
            <!-- <button class="btn" type="submit">Search</button> -->
          </form>
          </div>
        </nav>
      </div>
   </section>
<!-- navbar section end here  -->

@yield('content')

<!-- footer -->
<section id="footer" style="background-image: linear-gradient(180deg, #252525, transparent); border-radius: 50px 35px 15px 15px"> 
   <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-about">
          <a href="#">
            <h1>JHOLEY</h1>
        </div>
      </div>
       <div class="col-md-4">
        <div class="footer-links">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="{{ route('getHome')}}">Home</a></li>
            <li><a href="{{ route('getAbouts')}}">Abouts </a></li>
            <li><a href="{{ route ('getService') }}">Service</a></li>
            <!-- <li><a href="">Gallery</a></li> -->
            <li><a href="{{ route ('getContact') }}">Contact</a></li>
          </ul>
        </div>
       </div>
       
      <div class="col-md-4">
        <h4 style="color:white;">Social Icon</h4>
       <div class="icon">
        <a href="" class="icon"><i class="fab fa-facebook"></i></a>
        <a href="" class="icon"><i class="fab fa-youtube"></i></a>
        <a href="" class="icon"><i class="fa-brands fa-tiktok"></i></a>
        </div>
  
    </div>
      
    <div class="col-md-3">
        <div class="footer-links">
          <h4>Location Map</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.2124214971436!2d85.3129816145832!3d27.710726931951328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19018eac7c0f%3A0x82d81614fc050b54!2sSurya%20Nepal%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1663227890765!5m2!1sen!2snp"></iframe>
        </div>
       </div>

      <div class="col-md-12 text-center" style="color: black; letter-spacing:2px; font-weight:bolder;">
        "@2001Copyright:Jholey.com"
    </div>
      

   </div>  
</section>      
<!-- footer section end here -->

    <script src="{{asset('site/js/jquery.js')}}"></script>
    <script src="{{asset('site/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('site/fontawesome/js/all.js')}}"></script>
    <script src="{{asset('site/js/script.js') }}"></script>
    @yield('js')
</body>
</html>