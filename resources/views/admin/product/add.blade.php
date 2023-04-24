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
                <h3 class="card-title">Add more Products</h3></div>
            <div class="card-body">
                <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 ">

                                @foreach ($category as $cat )
                                <input type="checkbox" name="categories[]" value="{{ $cat->id }}"/>
                                <label for="">{{ $cat->name }}</label><br/>
                                @endforeach
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <select class="form-control mt-4" name="variant_id" aria-label="Default select example">
                                <option selected>Select Variant</option>
                                @foreach ($variant as $vat )
                                <option value="{{ $vat->id }}">{{ $vat->name }}</option>
                                @endforeach
                              </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="slug">Slug</label>
                            <input name="slug" type="text" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                </form>
            </div>
            <!-- card-body -->
        </div>
        <!-- card -->
    </div>
    <!-- col-->

    @endsection
