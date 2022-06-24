@extends('admin.layout.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Update Photo</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{ route('photos.index') }}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
                All Photos
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

            <form action="{{ route('photos.update', $photo->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Category <span class="text-danger" style="font-size: 1rem;">*</span></label>
                    <input value="{{ $photo->category }}" id="name" name="category" type="text" class="form-control"
                        placeholder="Category">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input id="image" name="image" type="file" class="form-control">
                    <img class="mt-2" src="/img/gallery/{{ $photo->image }}" width="300px">
                </div>

                <div>
                    <button type="submit" class="btn btn-success btn-icon-text mb-2 mb-md-0">
                        Update
                    </button>
                </div>

            </form>
        </div>

    </div>
@endsection

