@extends('layouts.admin')
@section('content')

<!-- Start Content-->
<div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Dashboard</h4>
            <div class="page-title-right">
                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Moltran</a></li>
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                </ol>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    </div>
    <!-- end page title -->

    <div class="row">
    <!-- Basic example -->

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Variant</h3></div>
            <div class="card-body">
                <form action="{{ url('update-variant/'.$variant->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="name">Name</label>
                            <input name="name" value="{{ $variant->name }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="slug">Sap Product Code</label>
                            <input name="sap_product_code" value="{{ $variant->sap_product_code }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="slug">Web Product Code</label>
                            <input name="web_product_code" value="{{ $variant->web_product_code }}" type="text" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                </form>
            </div>
            <!-- card-body -->
        </div>
        <!-- card -->
    </div>
    <!-- col-->

    @endsection
