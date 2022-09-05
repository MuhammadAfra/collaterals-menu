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
                <a href="{{ route('motor_vehicle') }}" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong> {{ session('success') }} </strong>
            </div>
        @endif

        <!-- Main content -->
        <form action="{{ route('carVehicleStore') }}" method="POST">
            @csrf
            <section class="col-xxl-6 connectedSortable px-5">
                <div class="container mt-3">
                    <h3>Collateral Utama - Car Vehicle</h3>
                    <div class="container px-5">
                        <div class="row">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Partner ID</label>
                                <input type="input" value="{{ $partner_id }}" class="form-control" name="partner_id" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Debitur ID</label>
                                <input type="input" value="{{ str_pad($debitur_id, 4, 0, STR_PAD_LEFT) }}" class="form-control" name="debitur_id" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Produk ID</label>
                                <input type="input" value="{{ str_pad($produk_id, 4, 0, STR_PAD_LEFT) }}" class="form-control" name="produk_id" id="exampleFormControlInput1">
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
                                <label for="exampleFormControlInput1" class="form-label">Nilai - Car Vehicle</label>
                                <input type="input" class="form-control" name="nilai_car_vehicle"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Merk</label>
                                <input type="input" class="form-control" name="merk" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Type</label>
                                <input type="input" class="form-control" name="type" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Model</label>
                                <input type="input" class="form-control" name="model" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Peruntukan</label>
                                <input type="input" class="form-control" name="peruntukan" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Nama di BPKB</label>
                                <input type="input" class="form-control" name="nama_di_bpkb"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Alamat di BPKB</label>
                                <input type="input" class="form-control" name="alamat_di_bpkb"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">No Frame</label>
                                <input type="input" class="form-control" name="no_frame"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">No Engine</label>
                                <input type="input" class="form-control" name="no_engine"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">No Polisi</label>
                                <input type="input" class="form-control" name="no_pol" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Colour</label>
                                <input type="input" class="form-control" name="colour" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Tahun</label>
                                <input type="input" class="form-control" name="tahun" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Silinder</label>
                                <input type="input" class="form-control" name="silinder"
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
                                    <h3 class="card-title">Collateral Utama - Car Vehicle</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Coll ID</th>
                                                <th>Nilai - Car Vehicle</th>
                                                <th>Merk</th>
                                                <th>Type</th>
                                                <th>Model</th>
                                                <th>Peruntukan</th>
                                                <th>Nama di BPKB</th>
                                                <th>Alamat di BPKB</th>
                                                <th>No Frame</th>
                                                <th>No Engine</th>
                                                <th>No Polisi</th>
                                                <th>Colour</th>
                                                <th>Tahun</th>
                                                <th>Silinder</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($nilai_car_vehicles as $item)
                                                <tr>
                                                    <td>{{ str_pad($item->coll_id, 4, 0, STR_PAD_LEFT) }}</td>
                                                    <td>{{ $item->nilai_car_vehicle }}</td>
                                                    <td>{{ $item->merk }}</td>
                                                    <td>{{ $item->type }}</td>
                                                    <td>{{ $item->model }}</td>
                                                    <td>{{ $item->peruntukan }}</td>
                                                    <td>{{ $item->nama_di_bpkb }}</td>
                                                    <td>{{ $item->alamat_di_bpkb }}</td>
                                                    <td>{{ $item->no_frame }}</td>
                                                    <td>{{ $item->no_engine }}</td>
                                                    <td>{{ $item->no_pol }}</td>
                                                    <td>{{ $item->colour }}</td>
                                                    <td>{{ $item->tahun }}</td>
                                                    <td>{{ $item->silinder }}</td>
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
