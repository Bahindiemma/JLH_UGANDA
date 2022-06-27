@extends('website.layout.app')

@section('content')
    <!-- ******************** Slider Starts Here ******************* -->
    <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel">
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
                <p>We build on local skills and knowledge with aims of; Improving poor people's access to essential services securing basic human rights and justice, improving economic opportunities.</p>
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
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>
                        <div class="we-ro">
                            <div class="icon">
                                <i class="fas fa-medkit"></i>
                            </div>
                            <div class="detail">
                                <h6>The Advancement of Health and Saving Lives</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s,</p>
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
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>


    </section>
    @foreach ($about as $index => $val)
        <!-- ################# Mission Vision Start Here #######################--->
        <section class="container-fluid mission-vision">
            <div class="container">
                @if ($val->title === 'OUR MISSION')
                    <div class="row mission">
                        <div class="col-md-6 mv-det">
                            <h1>{{ $val->title }}</h1>
                            <p>{{ $val->description }}</p>
                        </div>
                        <div class="col-md-6 mv-img">
                            <img src="img/about/{{ $val->image }}" alt="">
                        </div>
                    </div>
                @endif
                @if ($val->title === 'OUR VISION')
                    <div class="row vision">
                        <div class="col-md-6 mv-img">
                            <img src="img/about/{{ $val->image }}" alt="">
                        </div>
                        <div class="col-md-6 mv-det">
                            <h1>{{ $val->title }}</h1>
                            <p>{{ $val->description }}</p>
                        </div>
                    </div>
                @endif
            </div>
        </section>
    @endforeach

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
                        <h4 class="text-dark text-bold">JUSTICE</h4>
                        <p class="text-justify py-3">
                            {{ Illuminate\Support\Str::of(
                                'The project targets schools in Gulu, to provide Child protection
                                                                                                                policies which are essential in schools as guidelines for schools and their staff to create safe
                                                                                                                environments for children.',
                            )->words(20) }}
                        </p>
                        <p class="text-justify">
                            <a href="{{ route('services') }}" class="text-primary py-2">Read more</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="{{ asset('assets/images/events/image_07.jpg') }}" alt="">
                        <h4 class="text-dark text-bold">LIVELIHOODS</h4>
                        <p class="text-justify py-3">
                            {{ Illuminate\Support\Str::of(
                                'The project implementation started in January 2021 under Gulu New Life
                                                                                                                Baptist Association. Five (5) communities were selected to implement the project. The five
                                                                                                                communities are:-',
                            )->words(20) }}
                        </p>
                        <p class="text-justify">
                            <a href="{{ route('services') }}" class="text-primary py-2">Read more</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="{{ asset('assets/images/events/image_04.jpg') }}" alt="">
                        <h4 class="text-dark text-bold">HEALTH</h4>
                        <p class="text-justify py-3">
                            {{ Illuminate\Support\Str::of('This project proposes to facilitate the relocation and establishment of Fear Over Faith SLT (FOF) from Kampala to Gulu. FOF’s SLT is the only Acholi-speaking SLT looking to work in the Acholi-speaking region of Uganda, (which is highly significant as a high-level proficiency in the working language is a prerequisite to effective therapy), and JLH propose to become FOF’s first client in Gulu. JLH  engages FOF’s services for 3 days per week in triaging prospective clients, delivering therapeutic input and building community sensitization around communication disabilities.')->words(20) }}
                        </p>
                        <p class="text-justify">
                            <a href="{{ route('services') }}" class="text-primary py-2">Read more</a>
                        </p>
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
                </div>
                <div class="row">
                    <div class="col-sm-3 numb">
                        <h3>6+</h3>
                        <span>YEARS OF EXPEREANCE</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>5+</h3>
                        <span>JUSTICE</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>5+</h3>
                        <span>LIVEHOODS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>5+</h3>
                        <span>HEALTH</span>
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
                    <img src="{{ asset('assets/images/directors/director-1.jpg') }}"
                        style="height: 40vh; object-fit:cover !important;" class="card h-100-img-top"
                        alt="A Street in Europe">
                    <div class="card-body d-flex flex-column">
                        <h4 class="text-bold" style="font-size: 18px;">Mr. Eron Martin</h4>
                        <h5 style="font-size: 14px;">Chairman Board of Directors</h5>
                        <a href="#" class="btn btn-primary mt-auto">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-md">
                    <img src="{{ asset('assets/images/directors/director-2.jpg') }}"
                        style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="London">
                    <div class="card-body d-flex flex-column">
                        <h4 class="text-bold" style="font-size: 18px;">Mr. Edward Sekabanja</h4>
                        <h5 class="card-title" style="font-size: 14px;">Director</h5>
                        <a href="#" class="btn btn-primary mt-auto">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-md">
                    <img src="{{ asset('assets/images/directors/director-3.jpg') }}"
                        style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="New York">
                    <div class="card-body d-flex flex-column">
                        <h4 class="text-bold" style="font-size: 18px;">Mr. Ochen Fredrick</h4>
                        <h5 class="card-title" style="font-size: 14px;">Director</h5>
                        <a href="#" class="btn btn-primary mt-auto">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-md">
                    <img src="{{ asset('assets/images/directors/director-4.jpg') }}"
                        style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="New York">
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
                @foreach ($blog as $index => $val)
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog">
                            <figure class="h-25">
                                <img class="img-fluid object-cover " src="img/blog/{{ $val->image }}" alt="">
                            </figure>
                            <div class="blog-detail">
                                <small>By Admin | August {{ $val->created_at }}</small>
                                <h4 class="text-dark text-justify"
                                    style="font-size: 1.4rem; font-family:Arial, Helvetica, sans-serif; ">
                                    {{ $val->category }}</h4>

                                <p class="text-dark text-justify p-2">
                                    {{ Illuminate\Support\Str::of($val->description)->words(15) }}
                                </p>
                                <div class="link">
                                    <a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
                                </div>
                            </div>


                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
