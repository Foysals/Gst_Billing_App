@extends('layout.app')

@section('content')
<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="page-title-box">
                <h2 class="page-title font-weight-bold text-uppercase">Manage Parties</h2>
            </div>
        </div>

    </div>
    <!-- end page title -->
    <div class="row">
        <!--Include alert file-->
        @include('include.alert')
        <div class="col-12">
            <div class="card-box">
                <a href="{{ route('party.add') }}" class="btn btn-sm btn-blue waves-effect waves-light float-right">
                    <i class="mdi mdi-plus-circle"></i> Add Party
                </a>
                <h4 class="header-title mb-4 text-uppercase">All Parties</h4>
                <table id="basic-datatable" class="table table-hover m-0 table-centered dt-responsive nowrap w-100 table-bordered">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <!-- <?php /* <th>Client Type</th>*/ ?> -->
                             <th>Client type</th>
                            <th>Client Info</th>
                            <th>Bank A/c</th>
                            <th>Created At</th>
                            <th class="hidden-sm">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td></td>
                            <td>
                                <span class="badge">
                                  
                                </span>
                            </td>

                            <td>
                                <ul class="list-unstyled">
                                    <li><b>Name :</b><span> </span></li>
                                    <li><b>Phone :</b><span> </span></li>
                                    <li><b>Address :</b> <span> </span></li>
                                    <li><span class="">
                                        </span>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-unstyled">
                                    <li><b>Account Holder Name :</b><span> </span></li>
                                    <li><b>Acc No :</b><span> </span></li>
                                    <li><b>Bank Name :</b> <span></span></li>
                                    <li><b>IFSC Code :</b> <span></span></li>
                                    <li><b>Branch Address :</b> <span></span></li>
                                </ul>
                            </td>
                            <td></td>
                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                       
                                        <a class="dropdown-item" target="_blank" href=""><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Create Invoice</a>
                                     
                                        <a class="dropdown-item" href=""><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit</a>

                                        <form method="post" action="">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="dropdown-item"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Delete</button>
                                        </form>
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
