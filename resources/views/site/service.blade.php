@extends('site.template',['activePage' => 'service'])
@section('css')
<style>
    
/*services section starts here*/
#services{
  min-height: 100vh;
  padding: 60px;
}

#services .services-tittle h6{
  text-align: center;
  font-size: 34px;
  font-weight: bold;
  
}

#services .services-box{
  padding: 20px;
  border-radius: 5px;
  text-align: center;
  background-color:#fff;
  background-clip: border-box;
  margin-bottom: 20px;
}

#services .services-box:hover{
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
  border-radius: 4px;
  background-color: #6609ff;
  border: 1.5px solid var(--s-color);
}



#services .services-tax{
  padding: 20px;
  border-radius: 5px;
  text-align: center;
  background-color:#fff;
  background-clip: border-box;
  margin-bottom: 20px;
}


#services .services-tax:hover{
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
  border-radius: 4px;
  background-color:red;
  border: 1.5px solid var(--s-color);
}

#services .services-tax .icon{
  font-size:30px;
}
#services .services-tax .icon:hover{
  font-size:35px;
  color:blue;
}

#services .services-fire{
  padding: 20px;
  border-radius: 5px;
  text-align: center;
  background-color:#fff;
  background-clip: border-box;
  margin-bottom: 20px;
}


#services .services-fire:hover{
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
  border-radius: 4px;
  background-color:lawngreen;
  border: 1.5px solid var(--s-color);
}

#services .services-fire .icon{
  font-size:30px;
}
#services .services-fire .icon:hover{
  font-size:35px;
  color:yellow;
}


#services .services-company{
  padding: 20px;
  border-radius: 5px;
  text-align: center;
  background-color:#fff;
  background-clip: border-box;
  margin-bottom: 20px;
}


#services .services-company:hover{
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
  border-radius: 4px;
  background-color:darkcyan;
  border: 1.5px solid var(--s-color);
}

#services .services-company .icon{
  font-size:30px;
}
#services .services-company .icon:hover{
  font-size:35px;
  color:orangered;
}

#services .services-weed{
  padding: 20px;
  border-radius: 5px;
  text-align: center;
  background-color:#fff;
  background-clip: border-box;
  margin-bottom: 20px;
}


#services .services-weed:hover{
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
  border-radius: 4px;
  background-color:purple;
  border: 1.5px solid var(--s-color);
}

#services .services-weed .icon{
  font-size:30px;
}
#services .services-weed .icon:hover{
  font-size:35px;
  color:firebrick;
}


#services .services-bus{
  padding: 20px;
  border-radius: 5px;
  text-align: center;
  background-color:#fff;
  background-clip: border-box;
  margin-bottom: 20px;
}


#services .services-bus:hover{
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
  border-radius: 4px;
  background-color:orangered;
  border: 1.5px solid var(--s-color);
}

#services .services-bus .icon{
  font-size:30px;
}
#services .services-bus .icon:hover{
  font-size:35px;
  color:green;
}


#services .services-box h1{
  color: var(--skin-color);
  font-weight: bold;
  font-size: 30px;
  text-transform: capitalize; 
}

#services .services-box p{
  font-size: 15px;
  font-weight: bold;
}

#services .services-box .icon{
  font-size:30px;
}

#services .services-box .icon:hover{
  font-size:27px;
  color:white;
  }
/*services section ends here*/

</style>
@endsection('css')


@section('content')
   <!--services section starts here -->
   <section id="services">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="services-tittle">
              <h6>Our Services</h6>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="services-box">
              <i class="fa-solid fa-smoking icon"></i>
                <h2 style=" font-weight: bold; font-size: 30px; text-transform: capitalize;">Cigratte</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <a href="#" class="btn">Read  <i class="fa-solid fa-book-open-reader"></i></a>
              </div>      
            </div>
            <div class="col-md-4">
              <div class="services-tax">
              <i class="fa-solid fa-user icon"></i>
                <h1>Man</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <a href="#" class="btn">Read  <i class="fa-solid fa-book-open-reader"></i></a>
              </div>      
            </div>
               <div class="col-md-4">
                <div class="services-fire">
                <i class="fa-solid fa-fire icon"></i>
                <h1>Fire</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <a href="#" class="btn">Read  <i class="fa-solid fa-book-open-reader"></i></a>
              </div>      
            </div>
              <div class="col-md-4">
              <div class="services-company">
              <i class="fa-solid fa-shop icon"></i> 
                <h1>Company</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <a href="#" class="btn">Read  <i class="fa-solid fa-book-open-reader"></i></a>
              </div>      
            </div>
              <div class="col-md-4">
              <div class="services-weed">
              <i class="fa-solid fa-bong icon"></i>
                <h1>Weed Box</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <a href="#" class="btn">Read  <i class="fa-solid fa-book-open-reader"></i></a>
              </div>      
            </div>
              <div class="col-md-4">
              <div class="services-bus">
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
  <!-- services section end here -->
  @endsection 