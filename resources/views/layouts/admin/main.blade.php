<!doctype html>
<html lang="en">
<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">
    <!--link rel="stylesheet" href="css/bootstrap.min.css"-->
    <link rel="stylesheet" href="{{asset('/resources/css/admin/style.css')}}">
    <link rel="stylesheet" href="{{asset('/resources/css/admin/box-statistics.css')}}">
    @yield('includes')
</head>
<body dir="rtl">
<div class="wrapper d-flex align-items-stretch">
    @include('layouts.admin.sidebar')
    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">منو</span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                @include('layouts.admin.header')
            </div>
        </nav>
        <h2 class="mb-4">داشبورد</h2>
        <div class="main-content">
            <div class="header background-theme pb-8 pt-5 pt-md-8">
                <div class="container-fluid">
                    <h2 class="mb-5 text-dark">آمار سایت</h2>
                    <div class="header-body">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6">
                                <div class="card card-stats mb-4 mb-xl-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">ترافیک</h5>
                                                <span class="h2 font-weight-bold mb-0">350,897</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                    <i class="fas fa-chart-bar"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-muted text-sm">
                                            <span class="text-nowrap">از ماه گذشته</span>
                                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <div class="card card-stats mb-4 mb-xl-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">فروش</h5>
                                                <span class="h2 font-weight-bold mb-0">2,356</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                                    <i class="fas fa-chart-pie"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-muted text-sm">
                                            <span class="text-nowrap">از هفته گذشته</span>
                                            <span class="text-danger mr-2"><i
                                                    class="fas fa-arrow-down"></i> 3.48%</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <div class="card card-stats mb-4 mb-xl-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">کاربران جدید</h5>
                                                <span class="h2 font-weight-bold mb-0">924</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-muted text-sm">
                                            <span class="text-nowrap">از روز گذشته</span>
                                            <span class="text-warning mr-2"><i
                                                    class="fas fa-arrow-down"></i> 1.10%</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <div class="card card-stats mb-4 mb-xl-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">بازدهی</h5>
                                                <span class="h2 font-weight-bold mb-0">49,65%</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                    <i class="fas fa-percent"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-muted text-sm">
                                            <span class="text-nowrap">از 3 ماه گذشته</span>
                                            <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page content -->
        </div>
        @include('layouts.admin.body')
    </div>
</div>
@include('layouts.admin.footer')
@yield('script')
<!--script src="js/jquery.min.js"></script-->
<!--script src="js/bootstrap.min.js"></script-->
<!--script src="js/popper.js"></script-->
<!--script src="js/persian-datepicker.min.js"></script-->
<!--script src="js/persian-datepicker-date.min.js"></script-->
<!--script src="js/main.js"></script-->
<!--script>

</script-->
</body>
</html>