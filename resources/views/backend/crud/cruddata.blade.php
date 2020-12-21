@extends('backend.page_layout.master')
@section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right Page Titile -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">CRUD</h3>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <!-- DAta Insert modal Button-->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    &nbsp;Add New Data&nbsp;
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                </button>
                <!-- DAta Insert modal Form -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('crud.store') }}" method="post" class="needs-validation" novalidate>
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="validationTooltip01">Name(*)</label>
                                        <input type="text" class="form-control" name="fullname" required  placeholder="enter name">
                                        <div class="invalid-tooltip">
                                            Name is required(*)
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- DAta Insert modal Form -->
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
                List of Sections
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
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover text-center" id="basicdatatable">
                        <thead>
                            <tr>
                                <th>Serial No.</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key=> $value)
                                <tr class="{{ $value->id }}">
                                    <td>{{ $key+1 }}</td>
                                    <td>
                                        @if($value->fullname == NULL)
                                        Not Available
                                        @else
                                            {{$value->fullname}}
                                        @endif
                                    </td>
                                    <td>
                                        {{-- edit button --}}
                                        <a href="{{ route('crud.edit',$value->id) }}" class="btn btn-sm btn-success btn-circle" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>
                                        {{-- edit button --}}
                                        {{-- delete button --}}
                                        <a id="delete" href="{{ route('crud.delete') }}"  class="btn btn-sm btn-danger btn-circle" 
                                            data-toggle="tooltip" data-placement="top" title="Delete" data-token={{ csrf_token() }} data-id="{{ $value->id }}">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        {{-- delete button --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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