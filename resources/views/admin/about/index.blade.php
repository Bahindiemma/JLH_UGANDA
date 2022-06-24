@extends('admin.layout.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap grid-margin">
        <div class="pagetitle">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('about.index') }}">about</a></li>
              </ol>
            </nav>
          </div><!-- End Page Title -->
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{route('about.create')}}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
                <i data-feather="plus"></i> Add about
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
                        <th class="pt-0">Image</th>
                        <th class="pt-0">Title</th>
                        <th class="pt-0">Description</th>
                        <th class="pt-0">Created At</th>
                        <th class="pt-0">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($about as $index => $val)
                        <tr>
                            <td>{{++$index}}</td>
                            <td><img alt="img" src="/img/about/{{ $val->image }}" width="100px"></td>
                            <td>{{$val->title}}</td>
                            <td>{{$val->description}}</td>
                            <td>{{ $val->created_at }}</td>
                            <td>
                                <form class="form-control d-flex flex-row" action="{{ route('about.destroy',$val->id) }}" method="POST">
                                    {{ csrf_field()  }}
                                    @method('DELETE')
                                    <a class="form-control btn btn-sm btn-warning mx-2" href="{{route('about.edit', $val->id)}}"><i data-feather="link"></i> Edit</a>
                                    <button class="form-control btn btn-sm btn-danger mx-2" type="submit"><i data-feather="trash"></i> Delete</button>
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
