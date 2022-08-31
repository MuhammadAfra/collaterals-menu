@extends('layouts.frontend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Collateral</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                <a href="{{ route('house') }}" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong> {{ session('success') }} </strong>
            </div>
        @endif

        <!-- Main content -->
        <form action="{{ route('houseStore') }}" method="POST">
            @csrf
            <section class="col-xxl-6 connectedSortable px-5">
                <div class="container mt-3">
                    <h3>Collateral Utama - House/Land</h3>
                    <div class="container px-5">
                        <div class="row">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Partner ID</label>
                                <input type="input" class="form-control" name="partner_id" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Debitur ID</label>
                                <input type="input" class="form-control" name="debitur_id" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Produk ID</label>
                                <input type="input" class="form-control" name="produk_id" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Coll ID</label>
                                <input type="input" class="form-control" readonly disabled
                                    value="{{ str_pad($coll_id, 4, 0, STR_PAD_LEFT) }}" name="coll_id"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Nilai - House/Land</label>
                                <input type="input" class="form-control" name="nilai_house_land"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">No. SHM/ No. HGB/ No. HGU/ No. HP/
                                    No. SHSRS/ No.
                                    GIRIK</label>
                                <input type="input" class="form-control" name="no_shm_no_hgb"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Luas</label>
                                <input type="input" class="form-control" name="luas" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Atas Nama</label>
                                <input type="input" class="form-control" name="atas_nama" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                <input type="input" class="form-control" name="alamat" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Nilai Appraisal</label>
                                <input type="input" class="form-control" name="nilai_appraisal"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Status</label>
                                <input type="input" class="form-control" name="status" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-5 col-md-6 mb-3">
                                <button type="submit" class="btn btn-primary float-md-end">Submit</button>
                            </div>
                        </div>

                        <div class="col-12 py-2">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Collateral Utama - House/Land</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Coll ID</th>
                                                <th>Nilai - House/Land</th>
                                                <th>No. SHM/ No. HGB/ No. HGU</th>
                                                <th>Luas</th>
                                                <th>Atas Nama</th>
                                                <th>Alamat</th>
                                                <th>Nilai Appraisal</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($nilai_houses as $item)
                                                <tr>
                                                    <td>{{ str_pad($item->coll_id, 4, 0, STR_PAD_LEFT) }}</td>
                                                    <td>{{ $item->nilai_house_land }}</td>
                                                    <td>{{ $item->no_shm_no_hgb }}</td>
                                                    <td>{{ $item->luas }}</td>
                                                    <td>{{ $item->atas_nama }}</td>
                                                    <td>{{ $item->alamat }}</td>
                                                    <td>{{ $item->nilai_appraisal }}</td>
                                                    <td>{{ $item->status }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
            </section>
    </div>
    </div>
    </section>
    </form>
@endsection
