@extends('layout.master')

@section('title')
DPR Marketer | Dashboard
@endsection

@section('pagestyles')
<style>
    #retailer {
        background-color: #1c2141;
    }

    #retailer h3 {
        font-size: 28px;
    }

    #retailer .lpg.inner {
        height: 200px;
        background: url('images/Liquefied-Petroleum-Gas-.jpg');
        background-size: cover;
        background-position: center;
        filter: brightness(80%);
    }

    #retailer .cng.inner {
        height: 200px;
        background: url('images/cng-pic.jpg');
        background-size: cover;
        background-position: center;
        filter: brightness(80%);
    }

    #retailer .gpf.inner {
        height: 200px;
        background: url('images/Gas-Processing-Facilities.jpg');
        background-size: cover;
        background-position: center;
        filter: brightness(80%);
    }

    #retailer .gpli.inner {
        height: 200px;
        background: url('images/gas-pipeline.jpg');
        background-size: cover;
        background-position: center;
        filter: brightness(80%);
    }

    #retailer .prmo.inner {
        height: 200px;
        background: url('images/project-monitoring.jpg');
        background-size: cover;
        background-position: center;
        filter: brightness(80%);
    }

    #retailer .gpu.inner {
        height: 200px;
        background: url('images/Gas-Production-Utilization.jpg');
        background-size: cover;
        background-position: center;
        filter: brightness(80%);
    }

    #retailer .gpeo.inner {
        height: 200px;
        background: url('images/Gas-Production-export-operations.jpg');
        background-size: cover;
        background-position: center;
        filter: brightness(80%);
    }

    #retailer .gsso.inner {
        height: 200px;
        background: url('images/gsso.jpg');
        background-size: cover;
        background-position: center;
        filter: brightness(80%);
    }

    #retailer .gasdia.inner {
        height: 200px;
        background: url('images/gasdia.jpg');
        background-size: cover;
        background-position: center;
        filter: brightness(80%);
    }

</style>
@endsection

@section('content')
<div class="wrapper">

    @include('partials.backend_top_nav_all')


    @include('partials.backend_aside_marketer')

    <marketers-dashboard :user_name="`{{ Auth::user()->username }}`"></marketers-dashboard>

    @include('partials.base_footer')
</div>
@endsection

@section('pagescript')
<script>
    $( function () {
        $( '#example1' ).DataTable()
        $( '#example2' ).DataTable( {
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        } )
    } )

</script>
@endsection
