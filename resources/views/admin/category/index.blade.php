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
                        <li class="breadcrumb-item"><a href="#">table</a></li>
                    </ol>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                
                @if(Session::has('status'))
                     <p class="alert alert-success">{{ Session::get('status') }}</p>
                    @endif
                <div class="card-header">
                    <h3 class="card-title">List of Category</h3>
                </div>
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Meta Title</th>
                                <th>Meta Description</th>
                                <th>Meta Keywords</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($category as $cat )
                            <tr>
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->name }}</td>
                                <td>{{ $cat->meta_title }}</td>
                                <td>{{ $cat->meta_description }}</td>
                                <td>{{ $cat->meta_keywords }}</td>
                                <td>
                                    <a href="{{ url('edit-category/'.$cat->id) }}" class="btn btn-outline-primary btn-sm m-2"><i class="fas fa-edit"></i></a>
                                    <a href="{{ url('delete-category/'.$cat->id) }}" class="btn btn-outline-danger btn-sm m-2"><i class="fas fa-trash-alt"></i></a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    <!-- End Row -->


</div>

@endsection
