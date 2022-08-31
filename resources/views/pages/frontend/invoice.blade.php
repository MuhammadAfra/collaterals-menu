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
                <a href="{{ route('invoice') }}" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong> {{ session('success') }} </strong>
            </div>
        @endif
        
        <!-- Main content -->
        <form action="{{ route('invoiceStore') }}" method="POST">
            @csrf
            <section class="col-xxl-6 connectedSortable px-5">
                <div class="container mt-3">
                    <h3>Collateral Utama - Invoice</h3>
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
                                <label for="exampleFormControlInput1" class="form-label">Nilai - Invoice</label>
                                <input type="input" class="form-control" name="nilai_invoice"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Jenis Invoice</label>
                                <input type="input" class="form-control" name="enis_invoice"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Atas Nama Invoice</label>
                                <input type="input" class="form-control" name="atas_nama_invoice"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Alamat Nama Invoice</label>
                                <input type="input" class="form-control" name="alamat_nama_invoice"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Tanggal Jatuh Tempo</label>
                                <input type="date" class="form-control" name="tgl_jatuh_tempo"
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
                                    <h3 class="card-title">Collateral Utama - Invoice</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Coll ID</th>
                                                <th>Nilai - Invoice</th>
                                                <th>Jenis Invoice</th>
                                                <th>Atas Nama Invoice</th>
                                                <th>Alamat Nama Invoice</th>
                                                <th>Tanggal Jatuh Tempo</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($nilai_invoices as $item)
                                                <tr>
                                                    <td>{{ str_pad($item->coll_id, 4, 0, STR_PAD_LEFT) }}</td>
                                                    <td>{{ $item->nilai_invoice }}</td>
                                                    <td>{{ $item->jenis_invoice }}</td>
                                                    <td>{{ $item->atas_nama_invoice }}</td>
                                                    <td>{{ $item->alamat_nama_invoice }}</td>
                                                    <td>{{ $item->tgl_jatuh_tempo }}</td>
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
