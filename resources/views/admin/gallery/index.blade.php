@extends('admin.layout.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">All photos</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{route('photos.create')}}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
                <i data-feather="plus"></i> Add Photo
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            @if ($message = session('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-sm table-hover mb-0">
                    <thead>
                    <tr>
                        <th class="pt-0">No.</th>
                        <th class="pt-0">Category</th>
                        <th class="pt-0">Image</th>
                        <th class="pt-0">Created At</th>
                        <th class="pt-0">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($photo as $index => $val)
                        <tr>
                            <td>{{++$index}}</td>
                            <td>{{$val->category}}</td>
                            <td><img alt="img" src="/img/gallery/{{ $val->image }}" width="100px"></td>
                            <td>{{ $val->created_at }}</td>
                            <td>
                                <form action="{{ route('photos.destroy',$val->id) }}" method="POST">
                                    {{ csrf_field()  }}
                                    @method('DELETE')
                                    <a class="btn btn-sm btn-warning" href="{{route('photos.edit', $val->id)}}"><i data-feather="link"></i> Edit</a>
                                    <button class="btn btn-sm btn-danger" type="submit"><i data-feather="trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
