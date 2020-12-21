<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/backend/assets/images/favicon.png') }}">
    <title>Dashboard-School Management</title>
    <!-- Custom CSS -->
    <link href="{{ asset('public/backend/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('public/backend/dist/css/style.min.css') }}" rel="stylesheet">
    <!-- toastr css-->
    <link href="{{asset('public/backend/assets/notification/toastr.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/backend/assets/notification/custom-notification.css')}}" />
    <!---select 2 css-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets/select2/select2.min.css')}}">
    <!---Datatable-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/cdn.datatables.net/v/bs4/dt-1.10.18/fc-3.2.5/r-2.2.2/datatables.min.css')}}" />
    <!---validate form bootstrap css-->
    <link href="{{asset('public/backend/assets/validate/form-validation.css')}}" rel="stylesheet" type="text/css" />
    <!--validate form validate css-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets/validate/custom-jqBootstrapValidation.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader Start- style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Preloader End - style you can find in spinners.css -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('backend.page_layout.topnavbar')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('backend.page_layout.sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

            <!-- ============================================================== -->
            <!-- Main Page Content-->
            <!-- ============================================================== -->
            @yield('content')
            <!-- ============================================================== -->
            <!-- Main Page Content-->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('backend.page_layout.footer')
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->

        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper Area End- style you can find in pages.scss -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery PlugIn -->
    <!-- ============================================================== -->
    <script src="{{ asset('public/backend/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="{{ asset('public/backend/dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('public/backend/dist/js/feather.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('public/backend/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('public/backend/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <script src="{{ asset('public/backend/assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/extra-libs/c3/c3.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('public/backend/dist/js/pages/dashboards/dashboard1.min.js') }}"></script>
    <!--Datatable js-->
    <script type="text/javascript" src="{{asset('public/backend/cdn.datatables.net/v/bs4/dt-1.10.18/fc-3.2.5/r-2.2.2/datatables.min.js')}}"></script>
    <!--select2-->
    <script src="{{asset('public/backend/assets/select2/select2.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/select2/custom-select2.js')}}"></script>
    <!-- toastr -->
    <script src="{{asset('public/backend/assets/notification/toastr.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/notification/custom-toastr.js')}}"></script>
    <!---sweet alert plugin-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!---bootstap form validation js-->
    <script src="{{asset('public/backend/assets/validate/bs_validation_script.js')}}"></script>
    <!-- ============================================================== -->
    <!-- All Jquery PlugIn-->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Extraa Scripts As Required Write Here-->
    <!-- ============================================================== -->
    <!---deafault toaster area--->
        <script>
            @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type)
                {
                    case 'info':
                    toastr.info("{{ Session::get('message') }}",
                                    "", {
                                        progressBar: !0,
                                        closeButton: !0
                                    });
                    break;
        
                    case 'warning':
                    toastr.warning("{{ Session::get('message') }}",
                                    "", {
                                        progressBar: !0,
                                        closeButton: !0
                                    });
                    break;
        
                    case 'success':
                    toastr.success("{{ Session::get('message') }}",
                                    "", {
                                        progressBar: !0,
                                        closeButton: !0
                                    });
                    break;
        
                    case 'error':
                    toastr.error("{{ Session::get('message') }}",
                                    "", {
                                        progressBar: !0,
                                        closeButton: !0
                                    });
                    break;
                }
            @endif
        </script>
    <!---deafault toaster area--->
    <!---showing image when select-->
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#imageView')
                            .attr('src', e.target.result)
                            .width(80)
                            .height(80);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    <!---showing image when select-->
    <!---datatable--->
        <script>
            $(document).ready(function() {
                $('#basicdatatable').DataTable({
                    "lengthMenu": [
                        [50, 100, 200, -1],
                        [50, 100, 200, "All"]
                    ],
                });
            });
        </script>
    <!---datatable--->
    <!---delete popup--->
        <script>
            $(document).ready(function() {
                $(document).on("click","#delete",function(e) {
                    e.preventDefault();
                    var actionTo = $(this).attr("href");
                    var token = $(this).attr("data-token");
                    var id = $(this).attr("data-id");
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to recover this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed)
                        {
                            $.ajax({
                                url: actionTo,
                                type: "POST",
                                data: {id:id, _token:token},
                                success: function (data) {
                                    Swal.fire(
                                        'Deleted!',
                                        'Data has been deleted.',
                                        'success'
                                    );
                                    $('.' + id).fadeOut();
                                }
                            });
                        }
                        else
                        {
                            Swal.fire(
                                        'Thanks!',
                                        'Data has been safe.',
                                        'info'
                            );
                        }
                    })
                });
            });
        </script>
    <!---delete popup--->
    <!----select 2 default--->
        <script>
            ;
            (function($) {
            'use strict'
                $(function() {
                    $('.select2').select2()
                    $('.select2-tags').select2({
                        tags: true,
                        tokenSeparators: [',', ' '],
                    })
                })
            })(jQuery)
        </script>
    <!----select 2 default--->
    
    {{--Add Fee Amount append field script area start --}}
    <script type="text/javascript">
        $(document).ready(function () {
            var counter = 0;
            $(document).on("click",".addeventmore",function(){
                var whole_extra_item_add = $("#whole_extra_item_add").html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
            });
            $(document).on("click",".removeeventmore",function(){
                var whole_extra_item_add = $("#whole_extra_item_add").html();
                $(this).closest(".delete_whole_extra_item_add").remove();
                counter -= 1;
            });
        });
    </script>
    {{--Add Fee Amount append field script area end --}}
    <!-- ============================================================== -->
    <!-- Extraa Scripts As Required Write Here-->
    <!-- ============================================================== -->
</body>

</html>