@extends('layouts.dashboard-layouts')
@section('title', 'Ujian Kepolisian')
@section('content-prefix', 'Daftar Peserta')
@section('content-header', 'Dashboard - Daftar Peserta')

@push('css')
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/datatables') }}/datatables.min.css"> --}}
    <link href="{{ asset('datatables') }}/datatables.min.css" rel="stylesheet">
@endpush

@section('main-content')

    <div class="card mb-3">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <h4>
                        <b>
                            Daftar Peserta
                        </b>
                    </h4>
                </div>
                <hr />
                <div class="row">
                    <div class="table-responsive">
                        <table id="example" class="display table-bordered" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>Pembuat</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Fathur Walkers</td>
                                    <td class="mx-auto">
                                        <button type="button" class="btn btn-sm btn-success mr-1">Lihat</button>
                                        <button type="button" class="btn btn-sm btn-info">Ubah</button>
                                        <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Kengkeng Walkers</td>
                                    <td>Budaya Nusantara</td>
                                    <td>Pilih jawaban dibawah ini yang merupakan tata cara berjalan dengan lurus</td>
                                    <td>21 Jan, 2022 | 22:24</td>
                                    <td class="mx-auto">
                                        <button type="button" class="btn btn-sm btn-success mr-1">Lihat</button>
                                        <button type="button" class="btn btn-sm btn-info">Ubah</button>
                                        <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('js')
    <script src="{{ asset('datatables') }}/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endpush
