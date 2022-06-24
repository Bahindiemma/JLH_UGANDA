@extends('admin.layout.app')

@section('content')
    @foreach ($settings as $index => $val)
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap grid-margin">
            <div class="pagetitle">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('settings.index') }}">Settings</a></li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <div class="d-flex align-items-center flex-wrap text-nowrap">

                {{-- <a href="{{ route('settings.edit', 1) }}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
        <i data-feather="plus"></i>Edit Site Settings
    </a> --}}
                <a class="form-control btn btn-sm btn-warning mx-2" href="{{ route('settings.edit', $val->id) }}"><i
                        data-feather="link"></i> Edit</a>

            </div>
        </div>

        <section class="section">
            <div class="row">

                <div class="col-lg-6">
                    <div class="card">
                        @if ($message = session('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="card-body">
                            <!-- General Form Elements -->
                            <form class="mt-4">
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input name="siteTitle" type="email" placeholder="{{ $val->siteTitle }}"
                                            class="form-control" disabled readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input name="email" type="email" placeholder="{{ $val->email }}"
                                            class="form-control" disabled readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input name="mobile" type="number" placeholder="{{ $val->mobile }}"
                                            class="form-control" disabled readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input name="whatsapp" type="number" placeholder="{{ $val->whatsapp }}"
                                            class="form-control" disabled readonly>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input name="map" type="text" placeholder="{{ $val->map }}"
                                            class="form-control" disabled readonly>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="card">
                        @if ($message = session('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="card-body">
                            <!-- General Form Elements -->
                            <form class="mt-4">
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="email" placeholder="{{ $val->siteTitle }}" class="form-control"
                                            disabled readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input name="youtube" type="text" placeholder="{{ $val->youtube }}"
                                            class="form-control" disabled readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input name="twitter" type="number" placeholder="{{ $val->twitter }}"
                                            class="form-control" disabled readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input name="{{ $val->instagram }}" type="number"
                                            placeholder="{{ $val->instagram }}" class="form-control" disabled readonly>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
