@extends('site.template', ['activePage' => 'abouts'])
@section('content')
@section('css')
<style>

/* about us section starts here */
#abouts{
  background-color:#ddd;
  min-height: 100vh;
  padding: 60px;
}

#abouts .section-title h6{
  font-size: 30px;
  font-weight: bold;
  /* text-align: center; */
}

#abouts .about-content h2{
  font-size:20px;
  font-weight: bolder;
  text-align:left;
  margin-top: 10px;
}
#abouts .abouts-img img{
  border-radius: 10px;
  margin-top: 20px;
  box-shadow:0rem 0.1rem 1.1rem 0.9rem;
}

#abouts .abouts-img img:hover{
  border: 1px solid white;
}

#abouts .abouts-content{
  text-align: center;
}
#abouts .abouts-content p{
  /* font-weight:bold; */
  font-size: 18px;
  margin-top: 25px;
  text-align: justify;
}

#abouts .abouts-content p:hover{
  font-weight:bold;
  font-size: 18px;
  text-align: justify;
}
/* about us section ends here */
    
</style>
@endsection

@section('content')       
 <!--about us section starts here  -->
   
 <section id="abouts">
      <div class="container-fluide">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
              <h6>Abouts Us</h6>
             </div>             
          </div>
        </div>
        <div class="col-md-12">
            <div class="abouts-content">
            <h2>Cigratte</h2>
              <p>One of the most common problems we are facing in today’s world which is killing people is smoking. A lot of people pick up this habit because of stress, personal issues and more. In fact, some even begin showing it off. </p>
              <p>Tobacco can have a disastrous impact on our health. Nonetheless, people consume it daily for a long period of time till it’s too late. Nearly one billion people in the whole world smoke. It is a shocking figure as that 1 billion puts millions of people at risk along with themselves.
                Cigarettes have a major impact on the lungs. Around a third of all cancer cases happen due to smoking. For instance, it can affect breathing and causes shortness of breath and coughing. Further, it also increases the risk of respiratory tract infection which ultimately reduces the quality of life.</p>
              <a href="{{ route('getReadmore') }}" class="btn">Read More <i class="fas fa-book"></i></a>
            </div>
          </div>
             <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="abouts-img">
                    <img src="{{ asset('site/image/b.jpg') }}" alt="" class="img-fluid" style="height: 216px; width: -webkit-fill-available;">
                  </div>
                </div>
                  <div class="col">
                    <div class="abouts-img">
                    <img src="{{ asset('site/image/yoga.jpg') }}" alt="" class="img-fluid">
                    
                    </div>
                </div>
                <div class="col">
                    <div class="abouts-img">
                    <img src="{{ asset('site/image/wer.jpg') }}" alt="" class="img-fluid" style="height: 216px; width: -webkit-fill-available;">
                   </div>
                  </div>
                </div>
          </div>
        </div>
       </div>  
  </section>
<!-- about us section ends here -->

@endsection