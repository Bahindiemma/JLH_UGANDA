@extends('admin.layout.app')

@section('content')

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('about.index') }}">about</a></li>
                    <li class="breadcrumb-item active">edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{ route('about.index') }}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
                All About Us
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            @if ($errors->any())
                <div class="mt-2 alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="title" class="form-label card-title">Title <span class="text-danger"
                                    style="font-size: 1rem;">*</span></label>
                            <input value="{{ $about->title }}" id="name" name="title" type="text"
                                class="form-control" placeholder="{{ $about->category }}">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body w-100 form-outline">
                        <h5 class="card-title">Description</h5>

                        <textarea class="quill-editor-full form-control" name="description" id="description" rows="3"
                            placeholder="{{ $about->description }}">
                            
                        </textarea>


                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input id="image" name="image" type="file" class="form-control">
                            <img class="mt-2" src="/img/about/{{ $about->image }}" width="300px">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <button type="submit" class="btn btn-success btn-icon-text mb-2 mb-md-0">
                            Update
                        </button>
                    </div>
                </div>

            </form>
        </div>

    </div>
@endsection
