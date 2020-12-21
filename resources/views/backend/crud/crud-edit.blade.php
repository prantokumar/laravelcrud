@extends('backend.page_layout.master')
@section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right Page Titile -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit CRUD DATa</h3>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <a href="{{ route('crud.view') }}" class="btn btn-success btn-sm">View CRUD DATa</a>
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
                Update Student Section
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        @foreach ($errors->all() as $error)
                            <strong>{{ $error }}</strong><br/>
                        @endforeach
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <form method="post" action="{{ route('crud.update',$editData->id) }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="validationTooltip01"> Name(*)</label>
                        <input type="text" name="fullname" class="form-control" required  value="{{$editData->fullname}}">
                        <div class="invalid-tooltip">
                            Name is required(*)
                        </div>
                    </div>
                    <button class="btn btn-success btn-block" type="submit">Save Changes</button>
                </form>
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