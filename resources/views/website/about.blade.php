@extends('website.layout.app')

@section('content')

<!--  ************************* Page Title Starts Here ************************** -->
        
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>About Our Charity</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> About Us</li>
            </ul>
        </div>
    </div>
</div>


 <!--  ************************* About Us Starts Here ************************** -->    
   
<div class="about-us container-fluid">
<div class="container">

    <div class="row natur-row no-margin w-100">
        <div class="text-part col-md-6">
            <h2>About Our Charity</h2>
            <p>
                Justice Livelihoods Health JLH is an indigenous
registered Non-Governmental Organization. This
Local NGO was formed to see the lives of the poor
disadvantaged communities transformed from poverty
to opportunity from inequality to justice and from
despair to hope.
            </p>
        </div>
        <div class="image-part col-md-6">
            <div class="about-quick-box row">
                <div class="col-md-6">
                    <div class="about-qcard">
                       <i class="fas fa-user"></i>
                        <p>Become a Volunteer</p>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="about-qcard ">
                       <i class="fas fa-search-dollar red"></i>
                        <p>Quick Fundraise</p>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="about-qcard ">
                       <i class="fas fa-donate yell"></i>
                        <p>Give Donation</p>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="about-qcard ">
                       <i class="fas fa-hands-helping blu"></i>
                        <p>Help Someone</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>     



<!-- ################# Mission Vision Start Here #######################--->

<section class="container-fluid mission-vision">
  <div class="container">
      <div class="row mission">
          <div class="col-md-6 mv-det">
              <h1>Our Mission</h1>
              <p>
                The mission of JLH is to follow our Lord and Saviour Jesus Christ in
                securing a holistic approach to sustainable improvements in the
                lives of poor and disadvantaged people,particularly those affected
                by conflict and insecurity.
              </p>
          </div>
          <div class="col-md-6 mv-img">
              <img src="{{ asset('assets/images/misin.jpg') }}" alt="">
          </div>
      </div>
      <div class="row vision">
          <div class="col-md-6 mv-img">
               <img src="{{ asset('assets/images/vision.jpg') }}" alt="">
          </div>
          <div class="col-md-6 mv-det">
               <h1>Our Vision</h1>
               <p>
                Our vision is to see Jesus Christ’s approach to
                transformation of lives of poor and disadvantaged
                communities from poverty to opportunity, from inequality
                to Justice and from despair to hope.
               </p>
          </div>
      </div>
  </div>
</section>

<!--################### Our Team Starts Here #######################--->
<div class="container">
    <div class="session-title row">
        <h2>Meet our Team</h2>
  </div>
    <div class="row g-3">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/directors/director-1.jpg') }}"  style="height: 40vh; object-fit:cover !important;" class="card h-100-img-top" alt="A Street in Europe">
                <div class="card-body d-flex flex-column">
                    <h4 class="text-bold" style="font-size: 18px;">Mr. Eron Martin</h4>
                    <h5 style="font-size: 14px;">Chairman Board of Directors</h5>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/directors/director-2.jpg') }}"  style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="London">
                <div class="card-body d-flex flex-column">
                    <h4 class="text-bold" style="font-size: 18px;">Mr. Edward Sekabanja</h4>
                    <h5 class="card-title" style="font-size: 14px;">Director</h5>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/directors/director-3.jpg') }}"  style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="New York">
                <div class="card-body d-flex flex-column">
                    <h4 class="text-bold" style="font-size: 18px;">Mr. Ochen Fredrick</h4>
                    <h5 class="card-title" style="font-size: 14px;">Director</h5>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/directors/director-4.jpg') }}"  style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="New York">
                <div class="card-body d-flex flex-column">
                    <h4 class="text-bold" style="font-size: 18px;">Ms. Idembe Carol Bunga Proscovia</h4>
                    <h5 class="card-title" style="font-size: 14px;">Member</h5>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/directors/default.webp') }}"  style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="New York">
                <div class="card-body d-flex flex-column">
                    <h4 class="text-bold" style="font-size: 18px;">MR. GREENWOOD MARK EDWARD</h4>
                    <h5 class="card-title" style="font-size: 14px;">Ex-officio</h5>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/directors/default.webp') }}"  style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="New York">
                <div class="card-body d-flex flex-column">
                    <h4 class="text-bold" style="font-size: 18px;">PR. BWAMBALE ALFONSE</h4>
                    <h5 class="card-title" style="font-size: 14px;">Member</h5>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/directors/default.webp') }}"  style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="New York">
                <div class="card-body d-flex flex-column">
                    <h4 class="text-bold" style="font-size: 18px;">PR. OKELLO GEOFFREY</h4>
                    <h5 class="card-title" style="font-size: 14px;">Member</h5>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/directors/default.webp') }}"  style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="New York">
                <div class="card-body d-flex flex-column">
                    <h4 class="text-bold" style="font-size: 18px;">MR. KABANDA PETER</h4>
                    <h5 class="card-title" style="font-size: 14px;">Member</h5>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>   

@endsection