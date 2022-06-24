@extends('website.layout.app')

@section('content')
<!--  ************************* Page Title Starts Here ************************** -->
        
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Thematic Areas</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i>Services</li>
            </ul>
        </div>
    </div>
</div>



<!-- ################# Events Start Here#######################--->
{{-- <section class="events">
    <div class="container">
       
        <div class="event-ro row">
            <div class="col-md-4 col-sm-6">
                <div class="event-box box">
                    <img src="{{ asset('assets/images/events/image_04.jpg') }}" alt="">
                    <h4>JUSTICE</h4>
                    <p class="desic">This thematic focuses on Child Protectiion Project (CPP)</p>
                    <button class="btn btn-success btn-sm w-100 align-self-end">Read more >></button>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="event-box box">
                    <img src="{{ asset('assets/images/events/image_04.jpg') }}" alt="">
                    <h4>LIVELIHOODS</h4>
                    <p class="desic">This thematic focuses on Agri-Livelihoods Project(ALP), Agro-Forestry in Gulu, Charcoal Making Project in Kasese, Solar Installation Project in Kasese, Village savings Groups and Enhancement of VSGs through Community Based Trainers in Kasese.
                    </p>
                    <button class="btn btn-success btn-sm w-100">Read more >></button>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="event-box box">
                    <img src="{{ asset('assets/images/events/image_04.jpg') }}" alt="">
                    <h4>HEALTH</h4>
                    <p class="desic">This thematic focuses on Establishing Community Therapy Practice(ECTP)-Gulu</p>
                    <button class="btn btn-success btn-sm w-100">Read more >></button>
                </div>
            </div>
        </div>
    </div>
</section> --}}

{{-- <div class="container mt-4">
    <div class="row gy-4">
        <div class="col-lg-4">
            <div class="box bg-light shadow-md text-dark">
                <img  class="w-100" style="height: 40vh; object-fit:cover !important;" src="{{ asset('assets/images/events/image_04.jpg') }}" alt="">
                <h4>JUSTICE</h4>
                <p>This thematic focuses on Child Protectiion Project (CPP)</p>
                <a href="#" class="btn btn-primary bottom-0">Read More</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="box bg-light shadow-md text-dark">
                <div>
                    <img class="w-100 object-cover" style="height: 40vh; object-fit:cover !important;" src="{{ asset('assets/images/events/image_04.jpg') }}" alt="">
                    <h4>LIVELIHOODS</h4>
                    <p>This thematic focuses on Agri-Livelihoods Project(ALP), Agro-Forestry in Gulu, Charcoal Making Project in Kasese, Solar Installation Project in Kasese, Village savings Groups and Enhancement of VSGs through Community Based Trainers in Kasese.</p>
                </div>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="box bg-light shadow-md text-dark">
                <img  class="w-100 object-cover" style="height: 40vh; object-fit:cover !important;" src="{{ asset('assets/images/events/image_04.jpg') }}" alt="">
                <h4>HEALTH</h4>
                <p>This thematic focuses on Establishing Community Therapy Practice(ECTP)-Gulu</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
</div> --}}

<div class="container">
    <div class="row g-3">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/events/image_04.jpg') }}"  style="height: 40vh; object-fit:cover !important;" class="card h-100-img-top" alt="A Street in Europe">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">JUSTICE</h5>
                    <p class="card-text">This thematic focuses on Child Protectiion Project (CPP)</p>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/events/image_04.jpg') }}"  style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="London">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">LIVELIHOODS</h5>
                    <p class="card-text">This thematic focuses on Agri-Livelihoods Project(ALP), Agro-Forestry in Gulu, Charcoal Making Project in Kasese, Solar Installation Project in Kasese, Village savings Groups and Enhancement of VSGs through Community Based Trainers in Kasese.</p>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/events/image_04.jpg') }}"  style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="New York">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">HEALTH</h5>
                    <p class="card-text">This thematic focuses on Establishing Community Therapy Practice(ECTP)-Gulu</p>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection