@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('backend/js/pages/data-table.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="page-title">All Medicines</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-account-circle"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">Medicine</li>
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
        <h3 class="box-title">Medicine Table</h3>
        <h6 class="box-subtitle">Export as CSV, Excel, PDF</h6>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <div class="table-responsive">
            <table id="suppliers" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Registration Number</th>
                    <th>NIC</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Registration Number</th>
                    <th>NIC</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
        </div>
        </div>
        <!-- /.box-body -->
    </div>

</section>
</div>

<script>
    $(document).ready( function () {
            // $('#student-table').DataTable();
            var url = '{{route('admin.supplier.all')}}';

            $('#suppliers').DataTable({
                destroy: true,
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    "url":url,
                    "type": "GET"
                },
                deferRender: true,
                order: [[0,"asc"]],
                columns: [
                    {data:'DT_RowIndex', name: 'DT_RowIndex', orderable: true,searchable: true},
                    {data: 'reg_number', name: 'reg_number'},
                    {data: 'nic', name: 'nic'},
                    {data:'first_name',name: 'first_name' },
                    {data: 'last_name',name: 'last_name'},
                    {data:'email',name: 'email' },
                    {data:'action',name:'action',searchable: false }
                ]
            });
        } );

        $('#suppliers').on('click', '#delete-supplier', function () {

            toastr.options = {
                "closeButton": true,
                "newestOnTop": true,
                "positionClass": "toast-top-right"
            };

            const id = $(this).data('supplier-id');

            var url = "{{ route('admin.supplier.delete',':id') }}";
            url = url.replace(':id', id);

            var token = "{{ csrf_token() }}";
            var dataObject = {'_token': token, '_method': 'POST'};


            $.ajax({
                type: 'POST',
                url: url,
                data: dataObject,
                success: function (response) {
                    if (response.status == "success") {
                        // swal("@lang('messages.sweetAlertDeleted')", response.message, "success").then(function (e) {
                        //     location.reload();
                        // });
                        toastr.success("Supplier Deleted Successfully");
                        location.reload();
                    } else {
                        // swal("@lang('messages.deleteSuccess')", response.message, "error").then(function (e) {
                        //     location.reload();
                        // });
                        toastr.success("Somthing Went Wrong!");
                    }
                }
            });

        });
</script>

@endsection
