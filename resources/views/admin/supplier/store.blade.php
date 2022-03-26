@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

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
                    <h5>Supplier Registration Number <span class="text-danger">*</span></h5>
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
              <form method="POST" action="{{ route('admin.supplier.save') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="regNo" id="regNo" value="">
                <input type="hidden" name="nic" id="nic" value="">
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
                                      <h5>NIC Number <span class="text-danger">*</span></h5>
                                      <div class="controls">
                                          <input type="text" name="nicN" id="nicN" class="form-control" disabled required data-validation-required-message="This field is required"> <div class="help-block"></div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <h5>First Name <span class="text-danger">*</span></h5>
                                      <div class="controls">
                                          <input type="text" name="fname" id="fname" class="form-control" required data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                  </div>
                                  <div class="form-group">
                                      <h5>Last Name <span class="text-danger">*</span></h5>
                                      <div class="controls">
                                          <input type="text" name="lname" id="lname" class="form-control" required data-validation-required-message="This field is required"> <div class="help-block"></div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <h5>Email <span class="text-danger">*</span></h5>
                                      <div class="controls">
                                          <input type="email" name="email" id="email" class="form-control" required data-validation-required-message="This field is required"> <div class="help-block text-danger"></div></div>
                                  </div>
                                  <div class="form-group">
                                      <h5>Telephone <span class="text-danger">*</span></h5>
                                      <div class="controls">
                                          <input type="number" name="phone" id="phone" min="0" class="form-control" required data-validation-required-message="This field is required"> <div class="help-block"></div></div>
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
              <p>This Supplier Already Exit in This System. Try Again with New Registration Number</p>
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
                if(data.status == "exit") {
                    $('#already_exit').modal('show');
                }
                else if (data.status == "success") {
                    // var supplier = data.data[0];
                    // var url2 = "{{ route('admin.supplier.verification',':supplier') }}";
                    // url3 = url2.replace(':supplier', supplier);
                    // window.location.href = url3;
                    // console.log(data.data[0]);
                    $('#regNo').val(data.data[0].regNo);
                    $('#Registration').html(data.data[0].regNo);
                    $('#nicN').val(data.data[0].nic);
                    $('#nic').val(data.data[0].nic);
                    $('#fname').val(data.data[0].fName);
                    $('#lname').val(data.data[0].lName);
                    $('#email').val(data.data[0].email);
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


