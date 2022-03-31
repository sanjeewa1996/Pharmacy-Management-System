@extends('admin.admin_master')

@section('admin')

<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="page-title">Dashboard</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-view-dashboard"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">Dashboard</li>
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
    <div class="col-xl-3 col-6">
        <div class="box overflow-hidden pull-up" style="background: linear-gradient(60deg, #ffa726, #fb8c00);">
            <div class="box-body">
                <div class="icon bg-primary-light rounded w-60 h-60 align-center">
                    <i class="text-primary mr-0 font-size-24 mdi mdi-medical-bag"></i>
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path d="M555.3 300.1L424.3 112.8C401.9 81 366.4 64 330.4 64c-22.63 0-45.5 6.75-65.5 20.75C245.2 98.5 231.2 117.5 223.4 138.5C220.5 79.25 171.1 32 111.1 32c-61.88 0-111.1 50.08-111.1 111.1L-.0028 368c0 61.88 50.12 112 112 112s112-50.13 112-112L223.1 218.9C227.2 227.5 231.2 236 236.7 243.9l131.3 187.4C390.3 463 425.8 480 461.8 480c22.75 0 45.5-6.75 65.5-20.75C579 423.1 591.5 351.8 555.3 300.1zM159.1 256H63.99V144c0-26.5 21.5-48 48-48s48 21.5 48 48V256zM354.8 300.9l-65.5-93.63c-7.75-11-10.75-24.5-8.375-37.63c2.375-13.25 9.75-24.87 20.75-32.5C310.1 131.1 320.1 128 330.4 128c16.5 0 31.88 8 41.38 21.5l65.5 93.75L354.8 300.9z"/> --}}
                    {{-- </svg> --}}
                </div>
                <div>
                    <p class="text-mute text-white mt-20 mb-0 font-size-16">All Variety of Medicines</p>
                    <h3 class="text-white mb-0 font-weight-500">{{ $data['medicines'] }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-6">
        <div class="box overflow-hidden pull-up" style="background: linear-gradient(60deg, #26c6da, #00acc1);">
            <div class="box-body">
                <div class="icon bg-warning-light rounded w-60 h-60">
                    <i class="text-warning mr-0 font-size-24 mdi mdi-ambulance"></i>
                </div>
                <div>
                    <p class="text-mute text-white mt-20 mb-0 font-size-16">Total Suppliers</p>
                    <h3 class="text-white mb-0 font-weight-500">{{ $data['no_of_suppliers'] }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-6">
        <div class="box overflow-hidden pull-up" style="background: linear-gradient(60deg, #ef5350, #e53935);">
            <div class="box-body">
                <div class="icon bg-info-light rounded w-60 h-60">
                    <i class="text-info mr-0 font-size-24 mdi mdi-chart-bar-stacked"></i>
                </div>
                <div>
                    <p class="text-mute text-white mt-20 mb-0 font-size-16">Count of Medicine Items</p>
                    <h3 class="text-white mb-0 font-weight-500">{{ $data['count_of_all_items'] }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-6">
        <div class="box overflow-hidden pull-up" style="background: linear-gradient(60deg, #66bb6a, #43a047);">
            <div class="box-body">
                <div class="icon bg-danger-light rounded w-60 h-60">
                    <i class="text-danger mr-0 font-size-24 mdi mdi-account-multiple"></i>
                </div>
                <div>
                    <p class="text-mute text-white mt-20 mb-0 font-size-16">Total Employees</p>
                    <h3 class="text-white mb-0 font-weight-500">05</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="box">
            {{-- <div class="box-header">
                <h4 class="box-title align-items-start flex-column">
                    New Arrivals
                    <small class="subtitle">More than 400+ new members</small>
                </h4>
            </div> --}}
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-border">
                        <thead>
                            <tr class="text-uppercase bg-lightest">
                                <th style="min-width: 250px"><span class="text-white">products</span></th>
                                <th style="min-width: 100px"><span class="text-fade">pruce</span></th>
                                <th style="min-width: 100px"><span class="text-fade">deposit</span></th>
                                <th style="min-width: 150px"><span class="text-fade">agent</span></th>
                                <th style="min-width: 130px"><span class="text-fade">status</span></th>
                                <th style="min-width: 120px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pl-0 py-8">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 mr-20">
                                            <div class="bg-img h-50 w-50" style="background-image: url({{ asset('backend/images/gallery/creative/img-1.jpg') }})"></div>
                                        </div>

                                        <div>
                                            <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                        Paid
                                    </span>
                                    <span class="text-white font-weight-600 d-block font-size-16">
                                        $45,800k
                                    </span>
                                </td>
                                <td>
                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                        Paid
                                    </span>
                                    <span class="text-white font-weight-600 d-block font-size-16">
                                        $45k
                                    </span>
                                </td>
                                <td>
                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                        Sophia
                                    </span>
                                    <span class="text-white font-weight-600 d-block font-size-16">
                                        Pharetra
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-primary-light badge-lg">Approved</span>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                    <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pl-0 py-8">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 mr-20">
                                            <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-2.jpg)"></div>
                                        </div>

                                        <div>
                                            <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                        Paid
                                    </span>
                                    <span class="text-white font-weight-600 d-block font-size-16">
                                        $45,800k
                                    </span>
                                </td>
                                <td>
                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                        Paid
                                    </span>
                                    <span class="text-white font-weight-600 d-block font-size-16">
                                        $45k
                                    </span>
                                </td>
                                <td>
                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                        Sophia
                                    </span>
                                    <span class="text-white font-weight-600 d-block font-size-16">
                                        Pharetra
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-warning-light badge-lg">In Progress</span>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                    <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pl-0 py-8">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 mr-20">
                                            <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-3.jpg)"></div>
                                        </div>

                                        <div>
                                            <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                        Paid
                                    </span>
                                    <span class="text-white font-weight-600 d-block font-size-16">
                                        $45,800k
                                    </span>
                                </td>
                                <td>
                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                        Paid
                                    </span>
                                    <span class="text-white font-weight-600 d-block font-size-16">
                                        $45k
                                    </span>
                                </td>
                                <td>
                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                        Sophia
                                    </span>
                                    <span class="text-white font-weight-600 d-block font-size-16">
                                        Pharetra
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-success-light badge-lg">Success</span>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                    <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pl-0 py-8">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 mr-20">
                                            <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-4.jpg)"></div>
                                        </div>

                                        <div>
                                            <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                        Paid
                                    </span>
                                    <span class="text-white font-weight-600 d-block font-size-16">
                                        $45,800k
                                    </span>
                                </td>
                                <td>
                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                        Paid
                                    </span>
                                    <span class="text-white font-weight-600 d-block font-size-16">
                                        $45k
                                    </span>
                                </td>
                                <td>
                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                        Sophia
                                    </span>
                                    <span class="text-white font-weight-600 d-block font-size-16">
                                        Pharetra
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-danger-light badge-lg">Rejected</span>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                    <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pl-0 py-8">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 mr-20">
                                            <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-5.jpg)"></div>
                                        </div>

                                        <div>
                                            <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                        Paid
                                    </span>
                                    <span class="text-white font-weight-600 d-block font-size-16">
                                        $45,800k
                                    </span>
                                </td>
                                <td>
                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                        Paid
                                    </span>
                                    <span class="text-white font-weight-600 d-block font-size-16">
                                        $45k
                                    </span>
                                </td>
                                <td>
                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                        Sophia
                                    </span>
                                    <span class="text-white font-weight-600 d-block font-size-16">
                                        Pharetra
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-warning-light badge-lg">In Progress</span>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                    <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- /.content -->
</div>
@endsection
