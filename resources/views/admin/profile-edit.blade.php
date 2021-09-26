@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="page-title">Profile</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-account-circle"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">Admin</li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-full">
<!-- Main content -->
<section class="content">

<div class="row">
    <div class="box box-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-black" style="background-color: #000051">
          <h3 class="widget-user-username">Pharmacy Admin</h3>
        </div>
        <div class="widget-user-image">
          <img class="rounded-circle"  style="height: 90px;" src="{{ !empty($user->profile_photo_path) ? url('upload/admin_image/'.$user->profile_photo_path) : url('upload/profile_image.png') }}" alt="User Avatar">
        </div>
        <div class="box-footer" style="background-color: #000051; margin-top: 1px;">
          <div class="row">
            <div class="col-sm-6">
              <div class="description-block">
                <h5 class="description-header text-white">Name</h5>
                <span class="description-header text-white">{{ $user->name }}</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <div class="description-block">
                <h5 class="description-header text-white">Email</h5>
                <span class="description-header text-white">{{ $user->email }}</span>
              </div>
              <!-- /.description-block -->
            </div>
          </div>
          <!-- /.row -->
        </div>
      </div>
</div>

     <div class="box">
       <div class="box-header with-border">
         <h4 class="box-title">Edit Profile</h4>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
               <form method="POST" action="{{ route('admin.profile.edit') }}" enctype="multipart/form-data">
                @csrf
                 <div class="row">
                   <div class="col-12">
                       <div class="form-group">
                           <h5>Name <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}" required data-validation-required-message="Name is required"> <div class="help-block"></div></div>
                            </div>
                       <div class="form-group">
                           <h5>User Name <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}" required data-validation-required-message="User name is required"> <div class="help-block"></div></div>
                       </div>
                       <div class="form-group">
                           <h5>Password</h5>
                           <div class="controls">
                               <input type="password" id="password" name="password" value='' class="form-control"> <div class="help-block"></div></div>
                               <div class="form-control-feedback"><small>Leave empty if won't change password</small></div>
                       </div>
                       <div class="form-group">
                           <h5>Profile Image</h5>
                            <div class="row">
                               <div class="controls col-md-10">
                                   <input type="file" id="image" name="image" class="form-control"> <div class="help-block"></div>
                                </div>
                                <div class="col-md-2">
                                    <input type="image" id="viewImage" style="min-width: 40px; max-width: 40px; min-height: 40px; max-height: 40px; border-radius: 50%;" src="{{ !empty($user->profile_photo_path) ? url('upload/admin_image/'.$user->profile_photo_path) : url('upload/profile_image.png') }}" alt="">
                                </div>
                           </div>
                       </div>
                   </div>
                 </div>
                   <div class="text-xs-right">
                       <button type="submit" class="btn btn-rounded btn-info">Update Profile</button>
                   </div>
               </form>

           </div>
           <!-- /.col -->
         </div>
         <!-- /.row -->
       </div>
       <!-- /.box-body -->
     </div>

</section>
<!-- /.content -->
</div>

<script>
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#viewImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>

@endsection
