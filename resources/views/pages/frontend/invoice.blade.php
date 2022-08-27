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
                                <input type="input" class="form-control"  name="coll_id" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Nilai - Invoice</label>
                                <input type="input" class="form-control" name="nilai_invoice" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Jenis Invoice</label>
                                <input type="input" class="form-control" name="enis_invoice" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Atas Nama Invoice</label>
                                <input type="input" class="form-control"  name="atas_nama_invoice" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Alamat Nama Invoice</label>
                                <input type="input" class="form-control" name="alamat_nama_invoice" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Tanggal Jatuh Tempo</label>
                                <input type="date" class="form-control" name="tanggal_jatuh_tempo" id="exampleFormControlInput1">
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
                    </div>
            </section>
    </div>
    </div>
    </section>
    </form>
@endsection
