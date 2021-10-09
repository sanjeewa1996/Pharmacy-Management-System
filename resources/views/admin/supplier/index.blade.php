@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('backend/js/pages/data-table.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="page-title">All Suppliers</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-account-circle"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">Supplier</li>
                        <li class="breadcrumb-item active" aria-current="page">All</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-full">

<section class="content">

    <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title">Suppliers Table</h3>
        <h6 class="box-subtitle">Export as CSV, Excel, PDF</h6>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <div class="table-responsive">
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot>
        </table>
        </div>
        </div>
        <!-- /.box-body -->
    </div>

</section>
</div>

@endsection
