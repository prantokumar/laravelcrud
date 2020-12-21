@extends('backend.page_layout.master')
@section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right Page Titile -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Page Heading</h3>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <a href="#" class="btn btn-success btn-sm">Button</a>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right Page Titile -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Main Page Body Area Start  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- *************************************************************** -->
    <!-- Main Page Body Content Area Start Here -->
    <!-- *************************************************************** -->
        <div class="card">
            <div class="card-header bg-dark text-white">
                Card Title
            </div>
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
            </div>
        </div>
    <!-- *************************************************************** -->
    <!-- Main Page Body Content Area End Here -->
    <!-- *************************************************************** -->
    
</div>
<!-- ============================================================== -->
<!-- End Main Page Body Area End  -->
<!-- ============================================================== -->
@endsection