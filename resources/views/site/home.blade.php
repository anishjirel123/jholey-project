@extends('site.template', ['activePage' => 'home'])
@section('content')

<section id="imaage" >
     <div class="container-flude">
      <div class="col-md-12">
           <div class="card text-bg-dark">
           <img src="{{ asset('site/image/e.jpg') }}" class="card-img" alt="...">
          <div class="card-img-overlay">
              <h5 class="card-title">SMOKING CESSTION:</h5>
              <p class="card-text"><small>PAST, PRESENT ,& FUTURE</small></p>
              <p class="card-letter">Cancer For Disease Control Anc prevention</p>
                <p class="card-text">Natioanl Centre For Chronic Disease Prevention and promation</p>
                <p class="card-text">Office On Smoking And Health </p>
                <a href="{{ route('getMore') }}" class="bt">Read More</a><br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="#" class="bt">Just Me</a>
         </div>
       </div>
      </div>
     </div>
   </section>
<!-- slider end -->

   <!--about us section starts here  -->
   
   <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
              <h6>About Us</h6>
             </div>             
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="about-img">
              <img src="{{asset('site/image/b.jpg')}}" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-content">
            <h2>Cigratte</h2>
              <p>One of the most common problems we are facing in today’s world which is killing people is smoking. A lot of people pick up this habit because of stress, personal issues and more. In fact, some even begin showing it off. </p>
              <p>Tobacco can have a disastrous impact on our health. Nonetheless, people consume it daily for a long period of time till it’s too late. Nearly one billion people in the whole world smoke. It is a shocking figure as that 1 billion puts millions of people at risk along with themselves.
                Cigarettes have a major impact on the lungs. Around a third of all cancer cases happen due to smoking. For instance, it can affect breathing and causes shortness of breath and coughing. Further, it also increases the risk of respiratory tract infection which ultimately reduces the quality of life.</p>
              <a href="{{ route('getReadmore') }}" class="btn">Read More <i class="fas fa-book"></i></a>
            </div>
          </div>
        </div>
      </div>
      </div>  
  </section>
<!-- about us section ends here -->


   <!--good us section starts here  -->
   
   <section id="good">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="good-title">
              <h6></h6>
             </div>             
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="good-img">
              <img src="{{asset('site/image/t.jpg')}}" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6">
            <div class="good-content">
              <h1>Good Habit Of Smoking</h1>
                <button>
                In your essay about smoking, you might want to focus on its causes and effects or discuss why smoking is a dangerous habit. Other options are to talk about smoking prevention or to concentrate on the reasons why it is so difficult to stop smoking. Here we’ve gathered a range of catchy titles for research papers about smoking together with smoking essay examples. Get inspired with us!Smoking is a well-known source of harm yet popular regardless, and so smoking essays should cover various aspects of the topic to identify the reasons behind the trend.You will want to discuss the causes and effects of smoking and how they contributed to the persistent refusal of large parts of the population to abandon the habit even if they are aware of the dangers of cigarettes.
                </button>
            </div>
          </div>
        </div>
      </div>
      </div>  
  </section>
<!-- good us section ends here -->






   <!--Bad us section starts here  -->
   
    <section id="bad">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bad-title">
              <h6></h6>
             </div>             
          </div>
        </div>
        <div class="row">
          
        <div class="col-md-6">
            <div class="bad-content">
              <h1>Bad Habit Of Smoking</h1>
                <button>
                Have your parents ever told you that smoking is bad for you? This is a paper about smoking. Why people do it and what it does to their body. Some people think that smoking is fun, and what is “in” right now. Is what they may not know is that smoking is a bad habit that may be hard to just quit anytime you wanted to. Some teenagers may do it because their parents and their friends do it. But why did their parents start smoking. Maybe it was because their parents did it, or maybe because their hero or their favorite band smoked. If your parents didn't start smoking when they were teenagers maybe they started smoking because they were stressed at work, or at home.

                </button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="bad-img">
              <img src="{{asset('site/image/r.jpg')}}" alt="" class="img-fluid">
            </div>
          </div>
          
        </div>
      </div>
      </div>  
    </section>
<!-- Bad us section ends here -->



<!-- branch  -->

<!-- <section id="branch"> -->
<div class="container-fluid">
    <h1 class="branch">Our Branch </h1>
    <hr class="mx-auto mx-5w-25">
  <div class="row mb-5">
    <div class="col-12 col-sm-6 col-md-3 m-auto">
    <!-- card -->
     <div class="card-shadow">
       <img src="{{ asset('site/image/Surya.jpg') }}" alt="" class="card-img-top"  style="height:200px;">
     <div class="card-body">
        <h3 class="text-center">Surya</h3>
        <hr class="mx-auto w-75">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptatum maiores labore et reprehenderit facere ullam itaque debitis a iste aut temporibus, hic quos odit laborum. Voluptatum, minima aliquam deleniti earum mollitia fuga nulla perferendis, voluptas recusandae adipisci, possimus quasi.</p>
      </div>
    </div>
    <!-- end card -->
  </div>
  <!-- col end -->

  <div class="col-12 col-sm-6 col-md-3 m-auto">
    <!-- card -->
    <div class="card-shadow">
      <img src="{{ asset('site/image/black1.jpg') }}" alt="" class="card-img-top"  style="height:200px;">
      <div class="card-body">
        <h3 class="text-center">Black</h3>
        <hr class="mx-auto w-75">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptatum maiores labore et reprehenderit facere ullam itaque debitis a iste aut temporibus, hic quos odit laborum. Voluptatum, minima aliquam deleniti earum mollitia fuga nulla perferendis, voluptas recusandae adipisci, possimus quasi.</p>
      </div>
    </div>
    <!-- end card -->
  </div>
  <!-- col end -->
  <div class="col-12 col-sm-6 col-md-3 m-auto">
    <!-- card -->
    <div class="card-shadow">
      <img src="{{ asset('site/image/k.jpg') }}" alt="" class="card-img-top" style="height:200px;">
      <div class="card-body">
        <h3 class="text-center">Winston</h3>
        <hr class="mx-auto w-75">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptatum maiores labore et reprehenderit facere ullam itaque debitis a iste aut temporibus, hic quos odit laborum. Voluptatum, minima aliquam deleniti earum mollitia fuga nulla perferendis, voluptas recusandae adipisci, possimus quasi.</p>
      </div>
    </div>
    <!-- end card -->
  </div>
  <!-- col end -->

  <div class="col-12 col-sm-6 col-md-3 m-auto">
    <!-- card -->
    <div class="card-shadow">
      <img src="{{ asset('site/image/marlboro.jpg') }}" alt="" class="card-img-top" style="height:200px;">
      <div class="card-body">
        <h3 class="text-center">Marlboro</h3>
        <hr class="mx-auto w-75">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptatum maiores labore et reprehenderit facere ullam itaque debitis a iste aut temporibus, hic quos odit laborum. Voluptatum, minima aliquam deleniti earum mollitia fuga nulla perferendis, voluptas recusandae adipisci, possimus quasi.</p>
      </div>
    </div>
    <!-- end card -->
  </div>
  <!-- col end -->

  <div class="col-12 col-sm-6 col-md-3 m-auto">
    <!-- card -->
    <div class="card-shadow">
      <img src="{{ asset('site/image/captain.jpg') }}" alt="" class="card-img-top" style="height:200px;">
      <div class="card-body">
        <h3 class="text-center">Captain</h3>
        <hr class="mx-auto w-75">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptatum maiores labore et reprehenderit facere ullam itaque debitis a iste aut temporibus, hic quos odit laborum. Voluptatum, minima aliquam deleniti earum mollitia fuga nulla perferendis, voluptas recusandae adipisci, possimus quasi.</p>
      </div>
    </div>
    <!-- end card -->
  </div>
  <!-- col end -->

  <div class="col-12 col-sm-6 col-md-3 m-auto">
    <!-- card -->
    <div class="card-shadow">
      <img src="{{ asset('site/image/Khukuri.jpg') }}" alt="" class="card-img-top" style="height:200px;">
      <div class="card-body">
        <h3 class="text-center">Khukuri</h3>
        <hr class="mx-auto w-75">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptatum maiores labore et reprehenderit facere ullam itaque debitis a iste aut temporibus, hic quos odit laborum. Voluptatum, minima aliquam deleniti earum mollitia fuga nulla perferendis, voluptas recusandae adipisci, possimus quasi.</p>
      </div>
    </div>
    <!-- end card -->
  </div>
  <!-- col end -->

  <div class="col-12 col-sm-6 col-md-3 m-auto">
    <!-- card -->
    <div class="card-shadow">
      <img src="{{ asset('site/image/Pilot.jpg') }}" alt="" class="card-img-top" style="height:200px;">
      <div class="card-body">
        <h3 class="text-center">Pilot</h3>
        <hr class="mx-auto w-75">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptatum maiores labore et reprehenderit facere ullam itaque debitis a iste aut temporibus, hic quos odit laborum. Voluptatum, minima aliquam deleniti earum mollitia fuga nulla perferendis, voluptas recusandae adipisci, possimus quasi.</p>
      </div>
    </div>
    <!-- end card -->
  </div>
  <!-- col end -->

  <div class="col-12 col-sm-6 col-md-3 m-auto">
    <!-- card -->
    <div class="card-shadow">
      <img src="{{ asset('site/image/h.jpg') }}" alt="" class="card-img-top" style="height:200px;">
      <div class="card-body">
        <h3 class="text-center">Beedi</h3>
        <hr class="mx-auto w-75">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptatum maiores labore et reprehenderit facere ullam itaque debitis a iste aut temporibus, hic quos odit laborum. Voluptatum, minima aliquam deleniti earum mollitia fuga nulla perferendis, voluptas recusandae adipisci, possimus quasi.</p>
      </div>
    </div>
    <!-- end card -->
  </div>
  <!-- col end -->

  </div>
</div>
<!-- </section> -->

   <!--service section starts here -->
 <section id="service">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="service-tittle">
              <h6>Our Services</h6>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="service-box">
              <i class="fa-solid fa-smoking icon"></i>
                <h2 style=" font-weight: bold; font-size: 30px; text-transform: capitalize;">Cigratte</h2>
                  <p>Lorem ipsum dolowr sit amet, consectetfeur adipisiecing elit, sed do eiusmod
                  tempor incididunt wut labore et dolore magna aliqua. Uet enim ad minim veniawem,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex sssea commodo consequat.</p>
                  <a href="#" class="btn">Read  <i class="fa-solid fa-book-open-reader"></i></a>
              </div>      
            </div>
            <div class="col-md-4">
              <div class="service-tax">
              <i class="fa-solid fa-user icon"></i>
                <h1>Man</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <a href="#" class="btn">Read  <i class="fa-solid fa-book-open-reader"></i></a>
              </div>      
            </div>
               <div class="col-md-4">
                <div class="service-fire">
                <i class="fa-solid fa-fire icon"></i>
                <h1>Fire</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <a href="#" class="btn">Read  <i class="fa-solid fa-book-open-reader"></i></a>
              </div>      
            </div>
              <div class="col-md-4">
              <div class="service-company">
              <i class="fa-solid fa-shop icon"></i> 
                <h1>Company</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <a href="#" class="btn">Read  <i class="fa-solid fa-book-open-reader"></i></a>
              </div>      
            </div>
              <div class="col-md-4">
              <div class="service-weed">
              <i class="fa-solid fa-bong icon"></i>
                <h1>Weed Box</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <a href="#" class="btn">Read  <i class="fa-solid fa-book-open-reader"></i></a>
              </div>      
            </div>
              <div class="col-md-4">
              <div class="service-bus">
              <i class="fa-solid fa-bus icon"></i>
                 <h1>Bus</h1>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <a href="#" class="btn">Read  <i class="fa-solid fa-book-open-reader"></i></a>
              </div>      
            </div>  
        </div>
      </div>  
</section>
  <!-- service section end here -->
     

   <!-- company section  -->
<section id="company">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="company-title">
              <h6>Our Company</h6>
            </div>
          </div>
              <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                  <div class="card">
                        <img src="{{ asset('site/image/company.jpg') }}" class="card-img-top" alt="...">
                 </div>
               </div>
            <div class="col">
              <div class="card">
                   <img src="{{ asset('site/image/black.jpg') }}" class="card-img-top" alt="...">
                </div>
              </div>
           <div class="col">
             <div class="card">
                 <img src="{{ asset('site/image/company2.jpg') }}" class="card-img-top" alt="...">
             </div>
          </div>
        <div class="col">
          <div class="card">
               <img src="{{ asset('site/image/company3.jpg') }}" class="card-img-top" alt="...">
     
          </div>
      </div>
  </div>


        </div>
      </div>  
</section>

<!-- conpany end -->

<!-- branch name  -->
<section id="branch">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="branch-title">
              <h6>Our Branch Name</h6>
            </div>
          </div>
              <div class="row row-cols-1 row-cols-md-3 g-4">
                 <div class="col">
                   <div class="card">
                        <img src="{{ asset('site/image/add.jpg') }}" class="card-img-top" alt="..." style="height:100px ;">
                     </div>
                  </div>
            <div class="col">
               <div class="card">
                      <img src="{{ asset('site/image/add1.jpg') }}" class="card-img-top" alt="..." style="height:100px ;">
                 </div>
              </div>
          <div class="col">
             <div class="card">
                    <img src="{{ asset('site/image/add2.jpg') }}" class="card-img-top" alt="..." style="height:100px ;">
                 </div>
             </div>
         <div class="col">
            <div class="card">
                  <img src="{{ asset('site/image/add3.jpg') }}" class="card-img-top" alt="..." style="height:100px ;">
              </div>
           </div>
        <div class="col">
            <div class="card">
                 <img src="{{ asset('site/image/add4.jpg') }}" class="card-img-top" alt="..." style="height:100px ;">
              </div>
            </div>
        <div class="col">
           <div class="card">
                <img src="{{ asset('site/image/add5.jpg') }}" class="card-img-top" alt="..." style="height:100px ;">
             </div>
          </div>
      </div>

        </div>
      </div>  
</section>
<!-- branch name end  -->

<!-- contact  -->
<section id="contact">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="contact-title">
              <h6>Our Contact Us</h6>
            </div>
          </div>
                 <div class="row">
          <div class="col-md-6">
            <div class="about-img">
              <img src="{{asset('site/image/long.jpg')}}" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6">
          <div class="col-md-12">
      <form action="">
           <div class="row">
            <div class="col-md-12">
             <div class="form-group">
                    <label for="name"><i class="fa-solid fa-user"></i>&nbsp;FullName</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your full name here..."
                        required>
                     </div>
                     <div class="form-group">
                    <label for="name"><i class="fa-solid fa-user"></i>&nbsp;LastName</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your last name here..."
                        required>
                     </div>
                   <div class="form-group">
                            <label for="email"><i class="fa-solid fa-envelope"></i>&nbsp;Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email here..."
                           required>
                      </div>
                     <div class="form-group">
                        <label for="subject"><i class="fa-solid fa-book"></i>&nbsp;Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address here..." required>
                      </div>
                      <div class="form-group">
                        <label for="subject"><i class="fa-solid fa-person-half-dress"></i>&nbsp;Genden</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Enter your gender here..." required>
                        
                          </div>
                     </div>
                    <div class="col-md-12">
                   <div class="form-group">
                   <label for="subject"><i class="fa-solid fa-comment"></i>&nbsp;Message</label>
                      <textarea id="message" name="viewermessage" class="form-control" rows="8" placeholder="Enter your message..."></textarea>
                     </div>
                   </div>
                 
             <div class="col-md-12 text-center">
                <button class=btn>Submit form <i class="fa-solid fa-paper-plane"></i></button>
           </div>
           </div>
          </form>
         </div>
          </div>
        </div>
          </div>
      </div>  
</section>
<!-- contact end -->
@endsection

