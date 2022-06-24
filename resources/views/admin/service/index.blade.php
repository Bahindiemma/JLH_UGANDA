@extends('admin.layout.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap grid-margin">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Services</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{ route('services.create') }}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
                <i data-feather="plus"></i> Add service
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
                            <th class="pt-0">category</th>
                            <th class="pt-0">Short description</th>
                            <th class="pt-0">Description</th>
                            <th class="pt-0">Created At</th>
                            <th class="pt-0">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $index => $val)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td><img alt="img" src="/img/services/{{ $val->image }}" width="100px"></td>
                                <td>{{ $val->category }}</td>
                                <td>{{ $val->shortText }}</td>
                                <td>{{ $val->description }}</td>
                                <td>{{ $val->created_at }}</td>
                                <td>
                                    <form class="d-flex flex-row justify-content-between" action="{{ route('services.destroy', $val->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <a class="btn btn-sm btn-warning mx-2" href="{{ route('services.edit', $val->id) }}"><i
                                                data-feather="link"></i> Edit</a>
                                        <button class="btn btn-sm btn-danger" type="submit"><i data-feather="trash"></i>
                                            Delete</button>
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
