@extends('site.template',['activePage' => 'contact'])

@section('css')
<style>

 /* contact  */
 #contacts{
  background-color:#ffff;
  min-width:50vh;
  padding:60px;
}

#contacts .contacts-title h6{
  text-align: center;
  color:black;
  font-size: 40px;
  font-style: italic;
  font-weight: bold;
}
#contacts img{
  height:40pc;
  width: 100pc;
}
#contacts .form-groups label{
  color:white;
  letter-spacing:2px;
  font-weight:bolder ;
}

#contacts .form-groups label:hover{
  color: red;
  letter-spacing: 3px;
}

#contacts .form-groups input{
  letter-spacing: 3px;
}

#contacts .form-groups input:hover{
  color: red;
  background-color:lightblue;
}

#contacts .form-groups textarea{
  letter-spacing:3px;
  background-color:lightgreen;
  
}

.bn{
  background-color: #3d3d3d;
  padding:12px 40px;
  text-decoration: none;
  color: #fff;
  font-size:15px;
  letter-spacing: 1.5px;
  margin-top: 15px;
  border-radius:10px;
}

.bn:hover{
  border-radius:50px;
  color:white;
  font-weight: bolder;
  font-size:18px;
  word-spacing: 1.2px;
  background-color:red;
}

 /* contact end */

</style>
@endsection('css')

@section('content')

<section id="contacts" >
     <div class="container-flude">
     <div class="row">
          <div class="col-md-12">
            <div class="contacts-title">
              <h6>Our Contact Us</h6>
            </div>
          </div>

          <div class="card text-bg-dark">
          <img src="{{asset('site/image/contact.jpg')}}" alt="" class="img-fluid">
       <div class="card-img-overlay">
          <form action="">
           <div class="row">
            <div class="col-md-6">
             <div class="form-groups">
                    <label for="name"><i class="fa-solid fa-user"></i>&nbsp;FullName</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your full name here..."
                        required>
                     </div>
                     <div class="form-groups">
                    <label for="name"><i class="fa-solid fa-user"></i>&nbsp;LastName</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your last name here..."
                        required>
                     </div>
                   <div class="form-groups">
                            <label for="email"><i class="fa-solid fa-envelope"></i>&nbsp;Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email here..."
                           required>
                      </div>
                     <div class="form-groups">
                        <label for="subject"><i class="fa-solid fa-book"></i>&nbsp;Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address here..." required>
                      </div>
                      <div class="form-groups">
                        <label for="subject"><i class="fa-solid fa-person-half-dress"></i>&nbsp;Genden</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Enter your gender here..." required>
                        
                          </div>
                     </div>
                    <div class="col-md-6">
                   <div class="form-groups">
                   <label for="subject"><i class="fa-solid fa-comment"></i>&nbsp;Message</label>
                      <textarea id="message" name="viewermessage" class="form-control" rows="8" placeholder="Enter your message..."></textarea>
                     </div>
                   </div>
                 
             <div class="col-md-12 text-center">
                <button class=bn>Submit form <i class="fa-solid fa-paper-plane"></i></button>
           </div>
           </div>
          </form>
          </div>
        </div>
     </div>
   </section>
<!-- contact end -->
@endsection
