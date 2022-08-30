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
        <!-- Main content -->
        <form action="{{ route('corporateStore') }}" method="POST">
            @csrf
            <section class="col-xxl-6 connectedSortable px-5">
                <div class="container mt-3">
                    <h3>Collateral Utama - Corporate Guarantie</h3>
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
                                <input type="input" class="form-control" name="coll_id" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Nilai - Corporate Guarantie</label>
                                <input type="input" class="form-control" name="nilai_corporate_guarantie"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Nama PT Penerima Corporate
                                    Guarantie</label>
                                <input type="input" class="form-control" name="nama_pt_penerima_corporate"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Nama PT Pemberi Corporate
                                    Guarantie</label>
                                <input type="input" class="form-control" name="nama_pt_pemberi_corporate_guarantie"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Notelp PT Pemberi Corporate
                                    Guarantie</label>
                                <input type="input" class="form-control" name="notelp_pt_pemberi_corporate_guarantie"
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
                                    <h3 class="card-title">Collateral Utama - Motor Vehicle</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Coll ID</th>
                                                <th>Nilai - Corporate Gurantie</th>
                                                <th>Nama PT Penerima Corporate Guarantie</th>
                                                <th>Nama PT Pemberi Corporate Guarantie</th>
                                                <th>Notelp PT Pemberi Corporate Guarantie</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dataCorporate as $item)
                                            <tr>
                                                <td>{{ $item->coll_id }}</td>
                                                <td>{{ $item->nilai_corporate_guarantie }}</td>
                                                <td>{{ $item->nama_pt_penerima_corporate }}</td>
                                                <td>{{ $item->nama_pt_pemberi_corporate_guarantie }}</td>
                                                <td>{{ $item->notelp_pt_pemberi_corporate_guarantie }}</td>
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
