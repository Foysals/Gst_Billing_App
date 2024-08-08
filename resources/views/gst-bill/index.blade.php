@extends('layout.app')

@section('content')
<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="page-title-box">
                <h2 class="page-title font-weight-bold text-uppercase">Manage Bills</h2>
            </div>
        </div>

    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <!--Include alert file-->
            @include('include.alert')

            <div class="card-box">
                <a href="{{ route('gst.add') }}" class="btn btn-sm btn-blue waves-effect waves-light float-right">
                    <i class="mdi mdi-plus-circle"></i> Create New Bill
                </a>
                <h4 class="header-title mb-4 text-uppercase">All Bills</h4>

                <table id="basic-datatable" class="table table-hover m-0 table-centered dt-responsive nowrap w-100 table-bordered">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Invoice No</th>
                            <th>Cielnt's Info</th>
                            <th>Billing Info</th>
                            <th>Invoice Date</th>
                            <th class="hidden-sm">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                       
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td>
                                <ul class="list-unstyled">
                                    <li><b>Name:</b> <span></span></li>
                                    <li><b>Phone:</b> <span> </span></li>
                                </ul>
                            </td>

                            <td>
                                <ul class="list-unstyled">
                                    <li><b>Total Amount:</b> <span></span></li>
                                    <li><b>TAX:</b> <span></span></li>
                                    <li><b>Net Amount:</b> <span></span></li>
                                </ul>
                            </td>

                            <td></td>
                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href=""><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Delete</a>
                                        <a class="dropdown-item" href=""><i class="mdi mdi-printer mr-2 text-muted font-18 vertical-middle"></i>Print</a>
                                        <a class="dropdown-item" href="{{ route('gst.print') }}"><i class="mdi mdi-printer mr-2 text-muted font-18 vertical-middle"></i>Print USD Bill</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
            </div><!-- end col -->
        </div>
    </div>
    <!-- end row -->

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
</div>

@endsection
