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
                <div class="card-header">
                    <h3 class="card-title">List of Variant</h3>
                </div>
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Sap Product Code</th>
                                <th>web Product Code</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                           @foreach ($variant as $vat )
                            <tr>
                                <td>{{ $vat->id }}</td>
                                <td>{{ $vat->name }}</td>
                                <td>{{ $vat->sap_product_code }}</td>
                                <td>{{ $vat->web_product_code }}</td>
                                <td>
                                    <a href="{{ url('edit-variant/'.$vat->id) }}" class="btn btn-outline-primary btn-sm mx-2"><i class="fas fa-edit"></i></a>
                                    <a href="{{ url('delete-variant/'.$vat->id) }}" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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
