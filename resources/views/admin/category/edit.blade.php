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
            <h3 class="card-title">Edit Categories</h3></div>
        <div class="card-body">
            <form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name">Name</label>
                        <input name="name" type="text" value="{{ $category->name }}" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="meta_title">Meta-title</label>"
                        <input name="meta_title" value="{{ $category->meta_title }}" type="text" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="meta_description">Meta-Description</label>
                        <input name="meta_description" value="{{ $category->meta_description }}" type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="meta_keywords">Meta-Keywords</label>
                        <input name="meta_keywords" value="{{ $category->meta_keywords }}" type="text" class="form-control">
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
