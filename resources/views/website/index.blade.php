@extends('website.layout.app')

@section('content') 
                 
  <!-- ******************** Slider Starts Here ******************* -->
    <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="{{ asset('assets/images/slider/slider-3.jpg') }}" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title">Improving poor people's access to essential services</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="{{ asset('assets/images/slider/slider-1.jpg') }}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">Securing basic human rights and justice</h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="{{ asset('assets/images/slider/slider-2.jpg') }}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">Mutual Respect for People</h1>                               
                            </div>
                        </div>
                    </div>
                </div>
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
   
<section class="what-we-do">
    <div class="container">
         <div class="session-title row">
             <h2>What we Do</h2>
             <p>We build on local skills and knowledge with the aims of:</p> 
         </div><br>
         <div class="row">
             <div class="col-md-6">
                <br>
                 <div class="donat-form">
                      <div class="form-titl" style="background: #075985 !important;">
                          <b>Enter the amount for Donation</b>
                      </div>
                      <div class="form-dong">
                          <div class="input-group mb-3">
                               <div class="input-group-prepend">
                                 <span class="input-group-text">$</span>
                               </div>
                               <input type="text" class="form-control" placeholder="Enter Amount">
                               <div class="input-group-append">
                                 <span class="input-group-text">USD</span>
                               </div>
                          </div>
                          <div class="input-group mb-3">
                               <input type="text" class="form-control" placeholder="Enter Full Name">
                          </div>
                          <div class="input-group mb-3">
                               <input type="text" class="form-control" placeholder="Enter Email Address">
                          </div>
                           <div class="input-group mb-3">
                               <input type="text" class="form-control" placeholder="Enter City">
                          </div>
                          <div class=" no-margin ">
                             <button class="btn btn-success">Donate Now</button>
                          </div>
                      </div>
                       
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="donation-list">
                     <div class="we-ro">
                         <div class="icon">
                             <i class="fas fa-user-graduate"></i>
                         </div>
                         <div class="detail">
                             <h6>The Prevention or Relief of Poverty</h6>
                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                         </div>
                     </div>
                     <div class="we-ro">
                         <div class="icon">
                             <i class="fas fa-medkit"></i>    
                         </div>
                         <div class="detail">
                             <h6>The Advancement of Health and Saving Lives</h6>
                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                         </div>
                     </div>
                     <div class="we-ro">
                         <div class="icon">
                             <i class="fas fa-graduation-cap"></i>
                         </div>
                         <div class="detail">
                             <h6>The Advancement of Education</h6>
                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                         </div>
                     </div>
                     <div class="we-ro">
                         <div class="icon">
                             <i class="fas fa-dollar-sign"></i>
                         </div>
                         <div class="detail">
                             <h6>The Relief of Suffering and Distress</h6>
                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                         </div>
                     </div>
                    
                 </div>
             </div>
         </div>
         
         
    </div>
    
     
 </section>
    
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
   

    
     <!-- ################# Events Start Here#######################--->
    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>Popular Causes</h2>
                <p>We are a non-profital & Charity raising money for child education</p> 
            </div>
            <div class="event-ro row">
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="{{ asset('assets/images/events/image_05.jpg') }}" alt="">
                        <h4>Child protection training and advocacy</h4>
                        
                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Specific Objectives in Gulu with Gulu Newlife Baptist Association (GNLBA)
                            and Aswa Baptist Association (ABA) in Holistic agribusiness and
                            agroforestry training</p>
                        <button class="btn btn-success btn-sm">Donate Now</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="{{ asset('assets/images/events/image_07.jpg') }}" alt="">
                        <h4>Provision of affordable, quality water sources</h4>
                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Specific Objectives in Gulu with Gulu Newlife Baptist Association (GNLBA)
                            and Aswa Baptist Association (ABA) in Holistic agribusiness and
                            agroforestry training</p>
                        <button class="btn btn-success btn-sm">Donate Now</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="{{ asset('assets/images/events/image_04.jpg') }}" alt="">
                        <h4>Provision of communication therapy services</h4>
                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Specific Objectives in Gulu with Gulu Newlife Baptist Association (GNLBA)
                            and Aswa Baptist Association (ABA) in Holistic agribusiness and
                            agroforestry training</p>
                        <button class="btn btn-success btn-sm">Donate Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>   
    

   
   
    <!-- ################# Charity Number Starts Here#######################--->


    <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
               <div class="row session-title">
                   <h2>Our Achievemtns in Numbers</h2>
                   <p>We can talk for a long time about advantages of our Dental clinic before other medical treatment facilities.
But you can read the following facts in order to make sure of all pluses of our clinic:</p>
               </div>
                <div class="row">
                    <div class="col-sm-3 numb">
                        <h3>12+</h3>
                        <span>YEARS OF EXPEREANCE</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>1812+</h3>
                        <span>HAPPY CHILDRENS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>52+</h3>
                        <span>EVENTS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>48+</h3>
                        <span>FUNDS RAISED</span>
                    </div>
                </div>
            </div>

        </div>

    </div> 
         
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
                            <h5 class="card-title" style="font-size: 14px;">Director</h5>
                            <a href="#" class="btn btn-primary mt-auto">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
         
          
    
    <!-- ################# Our Blog Starts Here#######################--->

    <section class="our-blog">
         	<div class="container">
         		<div class="row session-title">
        			<h2> Our Blog </h2>
        			<p>Take a look at what people say about US </p>
        		</div>
        		<div class="blog-row row">
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="{{ asset('assets/images/events/image_01.jpg') }}" alt="">
        					</figure>
        					<div class="blog-detail">
        						<small>By Admin | August 10 2018</small>
								<h4>Methods of Recuirtments</h4>
								<p>
                                    Protect your people and your reputation by ensuring staff are equipped with a social media policy that outlines the organization's online tone of voice, procedure for handling complaints and escalation process,” Dyke advises. In other words: be responsive, not reactive.
                                </p>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        					
        					
        				</div>
        			</div>
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="{{ asset('assets/images/events/image_02.jpg') }}" alt="">
        					</figure>
        					<div class="blog-detail">
        						<small>By Admin | August 10 2018</small>
								<h4>Methods of Recuirtments</h4>
								<p>
                                    Protect your people and your reputation by ensuring staff are equipped with a social media policy that outlines the organization's online tone of voice, procedure for handling complaints and escalation process,” Dyke advises. In other words: be responsive, not reactive.
                                </p>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        					
        					
        				</div>
        			</div>
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="{{ asset('assets/images/events/image_03.jpg') }}" alt="">
        					</figure>
        					<div class="blog-detail">
        						<small>By Admin | August 10 2018</small>
								<h4>Methods of Recuirtments</h4>
								<p>
                                    Protect your people and your reputation by ensuring staff are equipped with a social media policy that outlines the organization's online tone of voice, procedure for handling complaints and escalation process,” Dyke advises. In other words: be responsive, not reactive.
                                </p>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        					
        					
        				</div>
        			</div>
        		</div>
         	</div>
         </section>
@endsection