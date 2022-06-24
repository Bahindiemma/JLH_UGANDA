@extends('admin.layout.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div class="pagetitle">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('about.index') }}">blog</a></li>
                <li class="breadcrumb-item active">create</li>
              </ol>
            </nav>
          </div><!-- End Page Title -->
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{ route('blog.index') }}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
                All blogs
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

            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="title" class="form-label card-title">Title <span class="text-danger">*</span></label>
                            <input id="title" name="title" type="text" class="form-control" placeholder="Blog Title">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="category" class="form-label card-title">Category <span class="text-danger">*</span></label>
                            <input id="category" name="category" type="text" class="form-control" placeholder="Blog category">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body w-100 form-outline">
                        <h5 class="card-title">Description</h5>

                        <textarea class="quill-editor-full form-control" name="description" id="description" rows="3" placeholder="Type description...">
                            
                        </textarea>
                        

                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="image" class="form-label card-title">Image <span
                                    class="text-danger">*</span></label>
                            <input id="image" name="image" type="file" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <button type="submit" class="btn btn-success btn-icon-text mb-2 mb-md-0">
                            Save
                        </button>
                    </div>
                </div>

            </form>
        </div>

    </div>
@endsection
