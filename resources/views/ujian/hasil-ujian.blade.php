@extends('layouts.dashboard-layouts')
@section('title', 'Ujian Kepolisian')
@section('content-prefix', 'Hasil Ujian')
@section('content-header', 'Dashboard - Hasil Ujian')

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
                            Hasil Ujian
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
                                    <th>Nama Ujian</th>
                                    <th>Penanggung Jawab</th>
                                    <th>Jumlah Soal</th>
                                    <th>Waktu Ujian</th>
                                    <th>Token</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Test Dasar Polisi</td>
                                    <td>Trisno</td>
                                    <td>10 Soal (Soal Acak).</td>
                                    <td>
                                        13 Apr, 2022 | 00:00 s/d
                                        13 Apr, 2022 | 00:00
                                        (116 Menit)
                                    </td>
                                    <td>T9SD9</td>
                                    <td class="mx-auto">
                                        <button type="button" class="btn btn-sm btn-success mr-1">Lihat</button>
                                        <button type="button" class="btn btn-sm btn-info">Ubah</button>
                                        <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Test Dasar Ilmu Komputer</td>
                                    <td>Fathur Multiverse</td>
                                    <td>15 Soal (Soal Acak).</td>
                                    <td>
                                        13 Apr, 2022 | 00:00 s/d
                                        13 Apr, 2022 | 00:00
                                        (120 Menit)
                                    </td>
                                    <td>VK7D9</td>
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
