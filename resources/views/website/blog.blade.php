@extends('website.layout.app')

@section('content')

<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Our Blog</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Blog</li>
            </ul>
        </div>
    </div>
</div>



<!-- ################# Our Blog Starts Here#######################--->

<div class="container my-3">
    <div class="row">
        <!-- Card with an image on left -->
        @foreach($blog as $index => $val)
        <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="img/blog/{{ $val->image }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{ $val->title }}</h5>
                  <p class="card-text">{{ $val->description }}</p>
                </div>
              </div>
            </div>
          </div><!-- End Card with an image on left -->
        @endforeach
        
          {{-- <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('assets/images/stories/story-4.jpg') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card with an image on left</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
          </div><!-- End Card with an image on left --> --}}
        {{-- <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/stories/story-1.jpg') }}"  style="height: 40vh; object-fit:cover !important;" class="card h-100-img-top" alt="A Street in Europe">
                <div class="card-body d-flex flex-column">
                    <small>By Admin | August 10 2018</small>
                    <h4>Methods of Recuirtments</h4>
                    <p class="card-text">Richard is a farmer in Labora, he is the group coordinator and the group chairperson, his family wanted to grow rice right from the start when the project was introduced.</p>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/stories/story-2.jpg') }}"  style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="London">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">JLH AGRO FORESTRY</h5>
                    <p class="card-text">The project has supported the participating households with seedlings of four selected species of trees and they included Pine, Eucalyptus, Gmelina Arborea and Meopsis Eminii.</p>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/stories/story-3.jpg') }}"  style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="New York">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Bongomin inspecting his Gmelina Arborea after harvesting the beans</h5>
                    <p class="card-text">Bongomin is one of the participants in the agroforestry pilot project. He comes from Pajja village where Pajja Baptist Church is located. </p>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div> --}}
    </div>
    {{-- <div class="row g-3">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/stories/story-4.jpg') }}"  style="height: 40vh; object-fit:cover !important;" class="card h-100-img-top" alt="A Street in Europe">
                <div class="card-body d-flex flex-column">
                    <small>By Admin | August 10 2018</small>
                    <h4>JLH Gulu Globetrotters(GGT) Support</h4>
                    <p class="card-text">GGT is a parent-led cooperative mainly funded by tuition rates and some fundraising to
                        offer British Curriculum education to any children from Gulu city.
                        </p>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/stories/story-5.jpg') }}"  style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="London">
                <div class="card-body d-flex flex-column">
                    <small>By Admin | August 10 2018</small>
                    <h5 class="card-title">JLH CPP Activity</h5>
                    <p class="card-text">Bi-weekly programmes on Radio Rupiny. In these radio programmes, training on
                        Child protection on how to keep children safe at home was done.
                        </p>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/stories/story-6.jpg') }}"  style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="New York">
                <div class="card-body d-flex flex-column">
                    <small>By Admin | August 10 2018</small>
                    <h5 class="card-title">JLH CPP Trainer at Radio Rupiny</h5>
                    <p class="card-text">Bi-weekly programmes on Radio Rupiny. In these radio programmes, training on
                        Child protection on how to keep children safe at home was done.
                        </p>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/stories/story-7.jpg') }}"  style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="New York">
                <div class="card-body d-flex flex-column">
                    <small>By Admin | August 10 2018</small>
                    <h5 class="card-title">Parents signing papers for the children to be taken to Gulu Remand Home</h5>
                    <p class="card-text">Trainings have been conducted to parents with children with Down Syndrome (family support group), comprising of parents and their children.</p>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/stories/story-8.jpg') }}"  style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="New York">
                <div class="card-body d-flex flex-column">
                    <small>By Admin | August 10 2018</small>
                    <h5 class="card-title">ECTP Activities</h5>
                    <p class="card-text">Trainings have been conducted to parents with children with Down Syndrome (family support group), comprising of parents and their children. </p>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/stories/story-9.jpg') }}"  style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="New York">
                <div class="card-body d-flex flex-column">
                    <small>By Admin | August 10 2018</small>
                    <h5 class="card-title">Isaac with a child with impairment</h5>
                    <p class="card-text">There is another good story of a child who is a girl, she  came to clinic when she was 2.5years. She was having difficulty with her communication; </p>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-md">
                <img src="{{ asset('assets/images/stories/story-10.jpg') }}"  style="height: 40vh; object-fit:cover !important;" class="card-img-top" alt="New York">
                <div class="card-body d-flex flex-column">
                    <small>By Admin | August 10 2018</small>
                    <h5 class="card-title">Bwambale Moris charging his mobile phone at Kyaminyawandi Baptist church</h5>
                    <p class="card-text">Bwambale Moris a resident of Kyaminyawandi Village and a beneficiary of the solar power at Kyaminyawandi Baptist church:</p>
                    <a href="#" class="btn btn-primary mt-auto">Read more</a>
                </div>
            </div>
        </div>
    </div> --}}
</div>

@endsection