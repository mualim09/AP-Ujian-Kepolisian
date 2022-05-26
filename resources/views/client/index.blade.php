@extends('layouts.client-layouts')

@section('title', 'Dashboard - Aplikasi Uji Kompetensi Kepolisian')

@push('css')

@endpush


@section('main-content')
    <div class="row row-cols-1  justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
    <div class="row row-cols-1  justify-content-center">

        <div class="col-10 mb-4 btn shadow ">
            <a href="{{ route('client-index') }}">
                <div class="card border-primary">
                    <div class="card-body text-left">
                        <button type="button" class="btn btn-primary btn-sm" >
                            <i class="bi bi-box-arrow-in-right" style="font-size: 1rem; display:inline-block;"></i>
                        </button>
                        <h6 class="card-title font-weight-bold" style="font-size: 1rem; display: inline-block; margin-left: 40px;">INFORMASI</h6>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-10 mb-4 btn shadow">
            <a href="{{ route('client-index') }}">
                <div class="card border-warning  ">
                    <div class="card-body text-left">
                        <button type="button" class="btn btn-warning btn-sm">
                            <i class="bi bi-list-stars text-light" style="font-size: 1rem; display:inline-block;"></i>
                        </button>
                        <h6 class="card-title font-weight-bold text-warning" style=" font-size: 1rem; display: inline-block; margin-left: 40px;">JADWAL UJIAN</h6>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-10 mb-4 btn shadow">
            <a href="{{ route('client-index') }}">
                <div class="card border-success ">
                    <div class="card-body text-left">
                        <button type="button" class="btn btn-success btn-sm">
                            <i class="bi bi-award" style="font-size: 1rem; display:inline-block;"></i>
                        </button>
                        <h6 class="card-title font-weight-bold text-success" style="font-size: 1rem; display: inline-block; margin-left: 40px;">HASIL UJIAN</h6>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-10 mb-4 btn shadow">
            <a href="{{ route('client-index') }}">
                <div class="card border-info ">
                    <div class="card-body text-left">
                        <button type="button" class="btn btn-info btn-sm">
                            <i class="bi bi-star-fill" style="font-size: 1rem; display:inline-block;"></i>
                        </button>
                        <h6 class="card-title font-weight-bold text-info" style="font-size: 1rem; display: inline-block; margin-left: 40px;">MULAI UJIAN</h6>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-10 mb-4 btn shadow">
            {{-- <a href="#"> --}}
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="hidden" name="logoutrequest" value="CLIENT">
                <div class="card border-danger ">
                    <div class="card-body text-left">
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="bi bi-activity" style="font-size: 1rem; display:inline-block;"></i>
                        </button>
                        <h6 class="card-title font-weight-bold text-danger" style="font-size: 1rem; display: inline-block; margin-left: 40px;">KELUAR</h6>
                    </div>
                </div>
                </form>
            {{-- </a> --}}
        </div>

    </div>
@endsection


@push('css')

@endpush
