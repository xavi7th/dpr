@extends('layout.master')

@section('title')
DPR {{Auth::user()->role}} | Apply For ATC
@endsection

@section('pagestyles')

@endsection

@section('content')
<div class="wrapper">

    @include('partials.backend_top_nav_all')

    @include('partials.router_aside')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Approval to Construct
                <small>{{Auth::user()->role}} Control panel</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Create Profile for New Application</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="/apply_for_approval_to_construct">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <select class="form-control select2" name="company_id" style="width: 100%;">
                                        <option selected="selected" :value="null">Select Company</option>
                                        @foreach ($companies as $item)
                                        <option value="{{$item->company_id}}">{{$item->company_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <apply-for-atc-component></apply-for-atc-component>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <b><a style="float: left;">lat: 34.032233, lng: -118.256015</a></b>
                                    <button type="submit" class="btn btn-primary" style="float: right;">Save &
                                        Continue</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('partials.base_footer')
</div>
@endsection

@section('pagescript')
<script>
    $( function () {
        //Initialize Select2 Elements
        $( '.select2' ).select2()
    } )

</script>
@endsection
