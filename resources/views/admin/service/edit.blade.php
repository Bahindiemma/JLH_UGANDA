@extends('admin.layout.app')

@section('content')

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('services.index') }}">services</a></li>
                    <li class="breadcrumb-item active">edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{ route('services.index') }}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
                All Services
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

            <form action="{{ route('services.update', $services->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="category" class="form-label card-title">Category <span class="text-danger"
                                    style="font-size: 1rem;">*</span></label>
                            <input value="{{ $services->category }}" id="category" name="category" type="text"
                                class="form-control" placeholder="{{ $services->category }}">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="shortText" class="form-label card-title">Short description <span class="text-danger"
                                    style="font-size: 1rem;">*</span></label>
                            <input value="{{ $services->shortText }}" id="category" name="shortText" type="text"
                                class="form-control" placeholder="{{ $services->shortText }}">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body w-100 form-outline">
                        <h5 class="card-title">Description</h5>

                        <textarea class="quill-editor-full form-control" name="description" id="description" rows="3"
                            placeholder="{{ $services->description }}">
                            
                        </textarea>


                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input id="image" name="image" type="file" class="form-control">
                            <img class="mt-2" src="/img/services/{{ $services->image }}" width="300px">
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
