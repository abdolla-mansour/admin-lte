@extends('dash_layouts.app')

@section('active_nav_search', 'active')
@section('active_link_search_enhanced', 'active')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <h2 class="text-center display-4">Enhanced Search</h2>
            <form action="enhanced-results.html">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Result Type:</label>
                                    <select class="select2" multiple="multiple" data-placeholder="Any" style="width: 100%;">
                                        <option>Text only</option>
                                        <option>Images</option>
                                        <option>Video</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Sort Order:</label>
                                    <select class="select2" style="width: 100%;">
                                        <option selected>ASC</option>
                                        <option>DESC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Order By:</label>
                                    <select class="select2" style="width: 100%;">
                                        <option selected>Title</option>
                                        <option>Date</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here" value="Lorem ipsum">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
  </div>
@endsection

@section('header')
  <link rel="stylesheet" href="{{ asset('dashboard_assets/plugins/select2/css/select2.min.css') }}">
@endsection

@section('footer')
  <!-- AdminLTE App -->
  <script src="{{ asset('dashboard_assets/dist/js/adminlte.min.js') }}"></script>
  <script src="{{ asset('dashboard_assets/plugins/select2/js/select2.full.min.js') }}"></script>
  <script>
    $(function () {
      $('.select2').select2()
    });
  </script>
@endsection

