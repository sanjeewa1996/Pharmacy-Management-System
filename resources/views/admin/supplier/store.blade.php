@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="page-title">Add New Supplier</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-account-circle"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">Supplier</li>
                        <li class="breadcrumb-item active" aria-current="page">Add</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>



<div class="container-full">

<section class="content">
    <div class="col-md-12 col-12">
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Supplier Registration Number <strong>Verification</strong></h4>
          </div>
          <div class="box-body">
            <h4></h4>
            <form id="form-1" action="javascript:void(0)" method="GET">
                <div class="form-group">
                    <h5>Basic Text Input <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" id="name" name="name" class="form-control"  data-validation-required-message="This field is required"> <div class="help-block"></div></div>

                        <div class="form-control-feedback"><small id="error"></small></div>

                        <div class="text-xs-right">
							<button type="button" id="submit" class="btn btn-rounded btn-info">Submit</button>
						</div>
                </div>
            </form>
          </div>
          <div class="box-footer text-right">
            {{-- <button class="btn btn-rounded btn-primary">Check</button> --}}
            <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#modal-center">
                Launch demo modal
              </button>

          </div>
        </div>
      </div>

      <div class="modal center-modal fade" id="modal-center" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Your content comes here</p>
            </div>
            <div class="modal-footer modal-footer-uniform">
              <button type="button" class="btn btn-rounded btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-rounded btn-primary float-right">Save changes</button>
            </div>
          </div>
        </div>
      </div>

      <div id="overlay">

    </div>
    </div>

</section>



<script>

    // $('#overlay').hide();

    $('#submit').click(function(){
        // $('#error').html('Testing...');

        var regNo = $('#name').val();
        var url = "{{ route('admin.supplier.verification',':regNo') }}";
        url = url.replace(':regNo', regNo);

        $.ajax({
            type: 'GET',
            url: url,
            beforeSend: function (){
                $('#overlay').html('<div class="overlays"><div class="overlays__inners"><div class="overlays__contents"><span class=""></span></div></div></div>');
            },
            complete: function(){
                $('#overlay').hide();
            },
            success: function (data) {
                console.log(5769479846795);
                if (data.status == "success") {
                    $('#error').html(data.data);
                    // window.location.href = "{{ route('admin.supplier') }}";
                    console.log(data.data.supplier);
                }
                else
                {
                    $('#error').html('Invalid Registration Number. Check and Try again');
                }
            }
        });
    });

</script>

@endsection


