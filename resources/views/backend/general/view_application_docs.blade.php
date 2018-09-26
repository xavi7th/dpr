@extends('layout.master')

@section('title')
  DPR Marketer | View Application Documents
@endsection

@section('pagestyles')

@endsection

@section('content')
  <div class="wrapper">

    @include('partials.backend_top_nav_all')


    @if (Auth::user()->role == 'Marketer')
      @include('partials.backend_aside_marketer')
    @elseif (Auth::user()->role == 'Admin')
      @include('partials.backend_aside_admin')
    @elseif (Auth::user()->role == 'Staff')
      @include('partials.backend_aside_all')
    @elseif (Auth::user()->role == 'Team Lead')
      @include('partials.backend_aside_teamlead')
    @elseif (Auth::user()->role == 'Head Gas M&G Lagos')
      @include('partials.backend_aside_headgas')
    @elseif (Auth::user()->role == 'ADO')
      @include('partials.backend_aside_ado')
    @elseif (Auth::user()->role == 'ZOPSCON')
      @include('partials.backend_aside_zopscon')
    @endif

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          License details
        </h1>
      </section>


      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="box box-primary">
            <div class="box-body box-profile">

              <h3 class="profile-username text-center">{{ $appDocReviewed->name_of_gas_plant }}</h3>

              <p class="text-muted text-center">{{ $appDocReviewed->application_id }}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Application type</b> <a class="pull-right">{{ $appDocReviewed->application_type }}</a>
                </li>
                <li class="list-group-item">
                  <b>Sub-category</b> <a class="pull-right">{{ $appDocReviewed->sub_category }}</a>
                </li>
                <li class="list-group-item">
                  <b>Plant type</b> <a class="pull-right">{{ $appDocReviewed->plant_type }}</a>
                </li>
                <li class="list-group-item">
                  <b>Capacity of tank</b> <a class="pull-right">{{ $appDocReviewed->capacity_of_tank }}</a>
                </li>
                <li class="list-group-item">
                  <b>State</b> <a class="pull-right">{{ $appDocReviewed->state }}</a>
                </li>
                <li class="list-group-item">
                  <b>L.G.A</b> <a class="pull-right">{{ $appDocReviewed->lga }}</a>
                </li>
                <li class="list-group-item">
                  <b>Town</b> <a class="pull-right">{{ $appDocReviewed->town }}</a>
                </li>
                <li class="list-group-item">
                  <b>Address</b> <a class="pull-right">{{ $appDocReviewed->address }}</a>
                </li>
                <li class="list-group-item">
                  <b>Date</b> <a class="pull-right">{{ $appDocReviewed->created_at }}</a>
                </li>
                {{-- now()->addMonths(3)->gte($item->expiry_date) --}}
                <br>
                {{-- @if ($appDocReviewed->application_status == 'Not Submitted')
                  <form class="" action="/mSubmitApplication" method="post">
                    {{ csrf_field() }}
                    <input type="text" hidden name="application_id" value="{{ $appDocReviewed->application_id }}">
                    <button type="submit" class="btn btn-primary btn-block">Renew License</button>
                  </form>
                @endif
                @if ($appDocReviewed->application_status == 'Site Suitable')
                  <form class="" action="/apply_for_atc" method="post">
                    {{ csrf_field() }}
                    <input type="text" hidden name="application_id" value="{{ $appDocReviewed->application_id }}">
                    <button type="submit" class="btn btn-primary btn-block">Apply For ATC</button>
                  </form>
                @endif
                @if ($appDocReviewed->application_status == 'ATC Issued')
                  <form class="" action="/apply_for_lto" method="post">
                    {{ csrf_field() }}
                    <input type="text" hidden name="application_id" value="{{ $appDocReviewed->application_id }}">
                    <button type="submit" class="btn btn-primary btn-block">Apply For LTO</button>
                  </form>
                @endif --}}
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <div class="col-md-8">
            <div class="box box-primary">
              <div class="box-header ui-sortable-handle" style="cursor: move;">
                <h3 class="box-title">Application ID: {{ $applicationID->application_id }}</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                @if($appDocReviewed->sub_category == 'Site Suitability Inspection' || $appDocReviewed->sub_category == 'ATC')
                  @include('partials.m_view_application_docs')
                @elseif($appDocReviewed->sub_category == 'ATC')
                  @include('partials.m_view_application_docs_atc')
                @elseif($appDocReviewed->sub_category == 'LTO')
                  @include('partials.m_view_application_docs_lto')
                @endif
              </div>
              <!-- /.box-body -->
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


@endsection
