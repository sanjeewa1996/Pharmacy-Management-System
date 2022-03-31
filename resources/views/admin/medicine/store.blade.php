@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="page-title">Add New Medicine</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-account-circle"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">Medicine</li>
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
            <h4 class="box-title">Medicine Registration Number <strong>Verification</strong></h4>
          </div>
          <div class="box-body">
            <h4></h4>
            <form id="form-1" action="javascript:void(0)" method="GET">
                <div class="form-group">
                    <h5>Medicine Registration Number <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" id="name" name="name" class="form-control"  data-validation-required-message="This field is required"> <div class="help-block"></div></div>

                        {{-- <div class="form-control-feedback"><small id="error"></small></div> --}}


                </div>
            </form>
          </div>
          <div class="box-footer text-right">
            {{-- <button class="btn btn-rounded btn-primary">Check</button> --}}
            {{-- <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#modal-center">
                Launch demo modal
              </button> --}}
              <div class="text-xs-right">
                <button type="button" id="submit" class="btn btn-rounded btn-info">Submit</button>
            </div>

          </div>
        </div>
      </div>

      <div class="modal center-modal fade" id="sForm" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 8px;">
              <form method="POST" action="{{ route('admin.product.save') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="regNo" id="regNo" value="">
                <input type="hidden" name="itemNo" id="itemNo" value="">
              <div class="modal-header">
                <h5 class="modal-title text-secondary" id="Registration"></h5>
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="box-body">
                    <div class="row">
                      <div class="col">

                            <div class="row">
                              <div class="col-12">
                                  <div class="form-group">
                                      <h5>Item Code <span class="text-danger">*</span></h5>
                                      <div class="controls">
                                          <input type="text" name="itemNumber" id="itemNumber" class="form-control" disabled required data-validation-required-message="This field is required"> <div class="help-block"></div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <h5>Product Name <span class="text-danger">*</span></h5>
                                      <div class="controls">
                                          <input type="text" name="productName" id="productName" class="form-control" required data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                  </div>
                                  <div class="form-group">
                                      <h5>Company Name <span class="text-danger">*</span></h5>
                                      <div class="controls">
                                          <input type="text" name="companyName" id="companyName" class="form-control" required data-validation-required-message="This field is required"> <div class="help-block"></div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <h5>Company Address<span class="text-danger">*</span></h5>
                                      <div class="controls">
                                          <input type="text" name="companyAddress" id="companyAddress" class="form-control" required data-validation-required-message="This field is required"> <div class="help-block text-danger"></div></div>
                                  </div>
                                  <div class="form-group">
                                      <h5>No of Items<span class="text-danger">*</span></h5>
                                      <div class="controls">
                                          <input type="number" min="0" name="noOfItems" id="noOfItems" class="form-control" value="0" required data-validation-required-message="This field is required"> <div class="help-block text-danger"></div></div>
                                  </div>
                              </div>
                            </div>


                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
              </div>
              <div class="modal-footer modal-footer-uniform" style="width: 100%;">
                <button type="button" class="btn btn-rounded btn-danger float-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-rounded btn-primary float-right">Save</button>
              </div>
            </form>
            </div>
          </div>
      </div>

      <div class="modal center-modal fade"  id="modal-center" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content" style="border-radius: 8px;">
            <div class="modal-header">
              <h5 class="modal-title text-danger">Invalid Registration Number</h5>
              <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>This is not a registerd number. Check your number and try again.</p>
            </div>
            <div class="modal-footer modal-footer-uniform">
              <button type="button" class="btn btn-rounded btn-danger float-right" data-dismiss="modal">Close</button>
              {{-- <button type="button" class="btn btn-rounded btn-primary float-right">Save changes</button> --}}
            </div>
          </div>
        </div>
      </div>

      <div class="modal center-modal fade"  id="database-error" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content" style="border-radius: 8px;">
            <div class="modal-header">
              <h5 class="modal-title text-danger">Database Error Occurred</h5>
              <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Unable to Connect. Try Again later</p>
            </div>
            <div class="modal-footer modal-footer-uniform">
              <button type="button" class="btn btn-rounded btn-danger float-right" data-dismiss="modal">Close</button>
              {{-- <button type="button" class="btn btn-rounded btn-primary float-right">Save changes</button> --}}
            </div>
          </div>
        </div>
      </div>

      <div class="modal center-modal fade"  id="already_exit" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content" style="border-radius: 8px;">
            <div class="modal-header">
              <h5 class="modal-title text-danger">Already Exit</h5>
              <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>This Medicine Already Exit in This System. Try Again with New Registration Number</p>
            </div>
            <div class="modal-footer modal-footer-uniform">
              <button type="button" class="btn btn-rounded btn-danger float-right" data-dismiss="modal">Close</button>
              {{-- <button type="button" class="btn btn-rounded btn-primary float-right">Save changes</button> --}}
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
        var url = "{{ route('admin.product.verification',':regNo') }}";
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
                if(data.status == "exit") {
                    $('#already_exit').modal('show');
                }
                else if (data.status == "success") {
                    // var product = data.data[0];
                    // var url2 = "{{ route('admin.product.verification',':product') }}";
                    // url3 = url2.replace(':product', product);
                    // window.location.href = url3;
                    console.log(data.data.Registeration_number);
                    $('#regNo').val(data.data.Registeration_number);
                    $('#Registration').html(data.data.Registeration_number);
                    $('#itemNo').val(data.data.Item_code);
                    $('#itemNumber').val(data.data.Item_code);
                    $('#productName').val(data.data.Product_name);
                    $('#companyName').val(data.data.Company_name);
                    $('#companyAddress').val(data.data.Company_Adress);
                    $('#sForm').modal('show');
                }
                else if(data.status == "invalid")
                {

                    $('#modal-center').modal('show');
                    // $('#error').html('Invalid Registration Number. Check and Try again');
                }
                else
                {
                    $('#database-error').modal('show');
                }
            }
        });
    });
</script>

@endsection


