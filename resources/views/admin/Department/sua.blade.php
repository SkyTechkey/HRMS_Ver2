@extends('layouts.master')
@section('css')
<link href="{{asset('project_asset/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

<!-- Waves Effect Css -->
<link href="{{asset('project_asset/plugins/node-waves/waves.css')}}" rel="stylesheet" />

<!-- Animation Css -->
<link href="{{asset('project_asset/plugins/animate-css/animate.css')}}" rel="stylesheet" />

<!-- Morris Chart Css-->
<link href="{{asset('project_asset/plugins/morrisjs/morris.css')}}" rel="stylesheet" />

<!-- Custom Css -->
<link href="{{asset('project_asset/css/style.css')}}" rel="stylesheet">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="{{asset('project_asset/css/themes/all-themes.css')}}" rel="stylesheet" />
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Basic Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Chỉnh Sửa Phòng Ban Công Ty SkyTech</h2>
                        
                    </div>
                    <div class="body">
                        <form action = "{{url('phongban/sua/'.$editPhongBan->id)}}" id="form_validation" method="POST">
                        @csrf
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input  type="text" class="form-control" name="name" value="{{$editPhongBan->name}}"   required>
                                    
                                </div>
                            </div>
                            <div class="demo-radio-button">
                                
                                <input value = "active" name="group1" type="radio" id="radio_1" checked />
                                <label name for="radio_1">Hoạt động</label>
                                <input value = "close" name="group1" type="radio" id="radio_2" />
                                <label name for="radio_2">Tạm ngừng</label>
                                
                            </div>
                            
                            
                            
                            <button class="btn btn-primary waves-effect" type="submit">Chỉnh sửa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @if(session('success'))
            <div class ="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss ="alert" aria-hidden="true"></button>
                
                {{session('success')}}
            </div>
        @endif
        <!-- #END# Basic Validation -->
        <!-- Advanced Validation -->
        
        <!-- #END# Advanced Validation -->
        <!-- Validation Stats -->
        
        <!-- #END# Validation Stats -->
    </div>
</section>
@endsection
@section('js')
<script src="{{asset('project_asset/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{asset('project_asset/plugins/bootstrap/js/bootstrap.js')}}"></script>

<!-- Select Plugin Js -->
<script src="{{asset('project_asset/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{asset('project_asset/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{asset('project_asset/plugins/node-waves/waves.js')}}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{asset('project_asset/plugins/jquery-countto/jquery.countTo.js')}}"></script>

<!-- Morris Plugin Js -->
<script src="{{asset('project_asset/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('project_asset/plugins/morrisjs/morris.js')}}"></script>

<!-- ChartJs -->
<script src="{{asset('project_asset/plugins/chartjs/Chart.bundle.js')}}"></script>

<!-- Flot Charts Plugin Js -->
<script src="{{asset('project_asset/plugins/flot-charts/jquery.flot.js')}}"></script>
<script src="{{asset('project_asset/plugins/flot-charts/jquery.flot.resize.js')}}"></script>
<script src="{{asset('project_asset/plugins/flot-charts/jquery.flot.pie.js')}}"></script>
<script src="{{asset('project_asset/plugins/flot-charts/jquery.flot.categories.js')}}"></script>
<script src="{{asset('project_asset/plugins/flot-charts/jquery.flot.time.js')}}"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="{{asset('project_asset/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

<!-- Custom Js -->
<script src="{{asset('project_asset/js/admin.js')}}"></script>
<script src="{{asset('project_asset/js/pages/index.js')}}"></script>
@endsection