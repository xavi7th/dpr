@extends('layout.master')

@section('title')
DPR Access | LPG/CNG
@endsection

@section('pagestyles')
<style>
    hr {
        border-top: 1px solid #ccc;
    }

    #caps {
        text-transform: uppercase;
        font-weight: bold;
        font-size: 17px;
    }

    .small-box h3 {
        font-size: 24px;
        text-transform: uppercase;
    }

    .widget-user-2 .widget-user-username {
        font-size: 24px;
        font-weight: bold;
        margin-left: 0;
        text-transform: uppercase;
    }

    .widget-user-2 .widget-user-username,
    .widget-user-2 .widget-user-desc {
        margin-left: 0;
    }

    .small-box .icon {
        font-size: 70px;
    }

    .small-box:hover .icon {
        font-size: 70px;
        color: #fff;
    }

    .small-box p {
        visibility: hidden;
    }

    .hider {
        visibility: hidden;
    }

</style>
@endsection

@section('content')
<div class="wrapper">

    @include('partials.backend_top_nav_all')


    @include('partials.backend_aside_all')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 id="caps">
                LPG/CNG Retailer outlets
            </h1>
        </section>

        <section class="content">
            <hr>
            <h5 id="caps">LPG - License & Permit</h5>
            <div class="row">
                <div class="col-md-2">
                    <div class="box box-widget widget-user-2">
                        <div class="widget-user-header bg-light-blue-active">
                            <h3 class="widget-user-username">SSI</h3>
                            <h5 class="widget-user-desc">Site Suitability Inspection</h5>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                <li><a href="/view_ssi_records?val=lpg_atc">Track<i
                                            class="pull-right fa fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-light-blue-active">
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">ATC</h3>
                            <h5 class="widget-user-desc">Approval to Construct</h5>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                {{-- <li><a href="/apply_for_atc_get">Apply<i class="pull-right fa fa-plus"></i></a></li>  --}}
                                <li><a href="/view_atc_records?val=lpg_atc">Track<i
                                            class="pull-right fa fa-search"></i></a></li>
                                {{-- <li><a href="#">Report<i class="pull-right fa fa-newspaper-o"></i></a></li>  --}}
                                {{-- <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- ./col -->
                <div class="col-md-2">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-light-blue-active">
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">LTO</h3>
                            <h5 class="widget-user-desc">License to Operate</h5>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                {{-- <li><a href="/apply_for_lto_get">Apply<i class="pull-right fa fa-plus"></i></a></li>  --}}
                                <li><a href="/view_lto_records?val=lpg_lto">Track<i
                                            class="pull-right fa fa-search"></i></a></li>
                                {{-- <li><a href="#">Report<i class="pull-right fa fa-newspaper-o"></i></a></li>  --}}
                                {{-- <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- ./col -->
                <div class="col-md-2">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-light-blue-active">
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">Renewal</h3>
                            <h5 class="widget-user-desc hider">License to Operate</h5>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                {{-- <li><a href="#">Apply<i class="pull-right fa fa-plus"></i></a></li>  --}}
                                <li><a href="/view_renewal_records?val=lpg_renewal">Track<i
                                            class="pull-right fa fa-search"></i></a></li>
                                {{-- <li><a href="#">Report<i class="pull-right fa fa-newspaper-o"></i></a></li>  --}}
                                {{-- <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- ./col -->
                <div class="col-md-2">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-light-blue-active">
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">Takeover</h3>
                            <h5 class="widget-user-desc hider">License to Operate</h5>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                {{-- <li><a href="#">Apply<i class="pull-right fa fa-plus"></i></a></li>  --}}
                                <li><a href="/view_takeover_records?val=lpg_takeover">Track<i
                                            class="pull-right fa fa-search"></i></a></li>
                                {{-- <li><a href="#">Report<i class="pull-right fa fa-newspaper-o"></i></a></li>  --}}
                                {{-- <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- ./col -->
            </div>


            <hr>
            <h5 id="caps">CNG - License & Permit</h5>
            <div class="row">
                <div class="col-md-3">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-yellow">
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">ATC</h3>
                            <h5 class="widget-user-desc">Approval to Construct</h5>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                {{-- <li><a href="#">Apply<i class="pull-right fa fa-plus"></i></a></li>  --}}
                                <li><a href="/view_atc_records?val=cng_atc">Track<i
                                            class="pull-right fa fa-search"></i></a></li>
                                {{-- <li><a href="#">Report<i class="pull-right fa fa-newspaper-o"></i></a></li>  --}}
                                {{-- <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- ./col -->
                <div class="col-md-3">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-yellow">
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">LTO</h3>
                            <h5 class="widget-user-desc">License to Operate</h5>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                {{-- <li><a href="#">Apply<i class="pull-right fa fa-plus"></i></a></li>  --}}
                                <li><a href="/view_lto_records?val=cng_lto">Track<i
                                            class="pull-right fa fa-search"></i></a></li>
                                {{-- <li><a href="#">Report<i class="pull-right fa fa-newspaper-o"></i></a></li>  --}}
                                {{-- <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- ./col -->
                <div class="col-md-3">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-yellow">
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">Renewal</h3>
                            <h5 class="widget-user-desc hider">License to Operate</h5>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                {{-- <li><a href="#">Apply<i class="pull-right fa fa-plus"></i></a></li>  --}}
                                <li><a href="/view_renewal_records?val=cng_renewal">Track<i
                                            class="pull-right fa fa-search"></i></a></li>
                                {{-- <li><a href="#">Report<i class="pull-right fa fa-newspaper-o"></i></a></li>  --}}
                                {{-- <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- ./col -->
                <div class="col-md-3">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-yellow">
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">Takeover</h3>
                            <h5 class="widget-user-desc hider">License to Operate</h5>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                {{-- <li><a href="#">Apply<i class="pull-right fa fa-plus"></i></a></li>  --}}
                                <li><a href="/view_takeover_records?val=cng_takeover">Track<i
                                            class="pull-right fa fa-search"></i></a></li>
                                {{-- <li><a href="#">Report<i class="pull-right fa fa-newspaper-o"></i></a></li>  --}}
                                {{-- <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- ./col -->
            </div>

            <hr>
            <h5 id="caps">add-on - License & Permit</h5>
            <div class="row">
                <div class="col-md-3">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-navy">
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">add-on ATi</h3>
                            <h5 class="widget-user-desc hider">Approval to Construct</h5>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                {{-- <li><a href="#">Apply<i class="pull-right fa fa-plus"></i></a></li>  --}}
                                <li><a href="/view_ati_records">Track<i class="pull-right fa fa-search"></i></a></li>
                                {{-- <li><a href="#">Report<i class="pull-right fa fa-newspaper-o"></i></a></li>  --}}
                                {{-- <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- ./col -->
                <div class="col-md-3">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-navy">
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">add-on LTO</h3>
                            <h5 class="widget-user-desc hider">License to Operate</h5>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                {{-- <li><a href="#">Apply<i class="pull-right fa fa-plus"></i></a></li>  --}}
                                <li><a href="/view_addon_lto_records">Track<i class="pull-right fa fa-search"></i></a>
                                </li>
                                {{-- <li><a href="#">Report<i class="pull-right fa fa-newspaper-o"></i></a></li>  --}}
                                {{-- <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- ./col -->
            </div>

            <hr>
            <h5 id="caps">cat 'd' - License & Permit</h5>
            <div class="row">
                <div class="col-md-3">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-red">
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">cat 'd' LTO</h3>
                            <h5 class="widget-user-desc hider">Approval to Construct</h5>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                {{-- <li><a href="#">Apply<i class="pull-right fa fa-plus"></i></a></li>  --}}
                                <li><a href="/view_catd_lto_records">Track<i class="pull-right fa fa-search"></i></a>
                                </li>
                                {{-- <li><a href="#">Report<i class="pull-right fa fa-newspaper-o"></i></a></li>  --}}
                                {{-- <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- ./col -->
                <div class="col-md-3">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-red">
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">cat 'd' Renewal</h3>
                            <h5 class="widget-user-desc hider">License to Operate</h5>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                {{-- <li><a href="#">Apply<i class="pull-right fa fa-plus"></i></a></li>  --}}
                                <li><a href="/view_catd_renewal_records">Track<i
                                            class="pull-right fa fa-search"></i></a></li>
                                {{-- <li><a href="#">Report<i class="pull-right fa fa-newspaper-o"></i></a></li>  --}}
                                {{-- <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- ./col -->
            </div>


            <hr>
            <h5 id="caps">License & Permit chart</h5>
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-light-blue-active">
                        <div class="inner">
                            <h3>lpg chart</h3>

                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-light-blue-active">
                        <div class="inner">
                            <h3>cng chart</h3>

                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-light-blue-active">
                        <div class="inner">
                            <h3>add-on chart</h3>

                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-light-blue-active">
                        <div class="inner">
                            <h3>cat 'd' chart</h3>

                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-navy">
                            {{-- <div class="widget-user-image">
                  <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>  --}}
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">routine inspections</h3>
                            <h5 class="widget-user-desc hider">feed</h5>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                <li><a href="#">Search<i class="pull-right fa fa-search"></i></a></li>
                                {{-- <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- ./col -->
                <div class="col-md-3">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-navy">
                            {{-- <div class="widget-user-image">
                  <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>  --}}
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">pressure testing</h3>
                            <h5 class="widget-user-desc hider">feed</h5>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                <li><a href="/view_pressure_test_records">Track<i
                                            class="pull-right fa fa-search"></i></a></li>
                                {{-- <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- ./col -->
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
    @include('partials.base_footer')
</div>
@endsection

@section('pagescript')


@endsection




{{-- permit and consent  --}}
