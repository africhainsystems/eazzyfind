@extends('admin.layouts.app')
@section('body')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Eazzyfind</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <svg class="stroke-icon">
                                <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row size-column">
            <div class="col-xxl-12 col-md-12 box-col-12 grid-ed-12">
                <div class="row">
                    <div class="col-lg-3 col-sm-4 col-6">
                        <div class="card small-widget">
                          <div class="card-body primary">
                            <span class="f-light">Total Users</span>
                            <div class="d-flex align-items-end gap-1">
                              <h4>{{ $allusers }}</h4>
                            </div>
                            <div class="bg-gradient">
                              <svg class="stroke-icon svg-fill">
                                <use href="{{ asset('admin/svg/icon-sprite.svg#fill-user') }}"></use>
                              </svg>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-4 col-6">
                        <div class="card small-widget">
                          <div class="card-body primary">
                            <span class="f-light">Banned Users</span>
                            <div class="d-flex align-items-end gap-1">
                              <h4>{{ $bannedusers }}</h4>
                            </div>
                            <div class="bg-gradient">
                              <svg class="stroke-icon svg-fill">
                                <use href="{{ asset('admin/svg/icon-sprite.svg#fill-user') }}"></use>
                              </svg>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-4 col-6">
                        <div class="card small-widget">
                          <div class="card-body primary">
                            <span class="f-light">Joined Today</span>
                            <div class="d-flex align-items-end gap-1">
                              <h4>{{ $todayusers }}</h4>
                            </div>
                            <div class="bg-gradient">
                              <svg class="stroke-icon svg-fill">
                                <use href="{{ asset('admin/svg/icon-sprite.svg#fill-user') }}"></use>
                              </svg>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-4 col-6">
                        <div class="card small-widget">
                          <div class="card-body primary">
                            <span class="f-light">Total Subscribers</span>
                            <div class="d-flex align-items-end gap-1">
                              <h4>{{ $subscribers }}</h4>
                            </div>
                            <div class="bg-gradient">
                              <svg class="stroke-icon svg-fill">
                                <use href="{{ asset('admin/svg/icon-sprite.svg#fill-user') }}"></use>
                              </svg>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-4 col-6">
                        <div class="card small-widget">
                          <div class="card-body primary">
                            <span class="f-light">Total Listings</span>
                            <div class="d-flex align-items-end gap-1">
                              <h4>{{ $totallistings }}</h4>
                            </div>
                            <div class="bg-gradient">
                              <svg class="stroke-icon svg-fill">
                                <use href="{{ asset('admin/svg/icon-sprite.svg#fill-task') }}"></use>
                              </svg>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-4 col-6">
                        <div class="card small-widget">
                          <div class="card-body primary">
                            <span class="f-light">Banned Listings</span>
                            <div class="d-flex align-items-end gap-1">
                              <h4>{{ $bannedtotallistings }}</h4>
                            </div>
                            <div class="bg-gradient">
                              <svg class="stroke-icon svg-fill">
                                <use href="{{ asset('admin/svg/icon-sprite.svg#fill-task') }}"></use>
                              </svg>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-4 col-6">
                        <div class="card small-widget">
                          <div class="card-body primary">
                            <span class="f-light">Pending Listings</span>
                            <div class="d-flex align-items-end gap-1">
                              <h4>{{ $pendinglistings }}</h4>
                            </div>
                            <div class="bg-gradient">
                              <svg class="stroke-icon svg-fill">
                                <use href="{{ asset('admin/svg/icon-sprite.svg#fill-task') }}"></use>
                              </svg>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-4 col-6">
                        <div class="card small-widget">
                          <div class="card-body primary">
                            <span class="f-light">Listed Today</span>
                            <div class="d-flex align-items-end gap-1">
                              <h4>{{ $todaylistings }}</h4>
                            </div>
                            <div class="bg-gradient">
                              <svg class="stroke-icon svg-fill">
                                <use href="{{ asset('admin/svg/icon-sprite.svg#fill-task') }}"></use>
                              </svg>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <ul class="user-list">
                                    <li>
                                        <div class="user-icon primary">
                                            <div class="user-box"><i class="font-primary" data-feather="user-plus"></i></div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">{{ $providers }}</h5><span class="font-primary d-flex align-items-center"><i
                                            class="icon-arrow-up icon-rotate me-1"> </i><span class="f-w-500">Providers</span></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-icon success">
                                            <div class="user-box"><i class="font-success" data-feather="list"></i></div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">{{$blog }}</h5><span class="font-danger d-flex align-items-center"><i
                                            class="icon-arrow-down icon-rotate me-1"></i><span
                                            class="f-w-500">Articles</span></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <ul class="user-list">
                                    <li>
                                        <div class="user-icon warning">
                                            <div class="user-box"><i class="font-warning" data-feather="user-plus"></i></div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">{{ $pendingproviders }}</h5><span class="font-warning d-flex align-items-center"><i
                                            class="icon-arrow-up icon-rotate me-1"> </i><span class="f-w-500">Pending Providers</span></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-icon danger">
                                            <div class="user-box"><i class="font-danger" data-feather="user-plus"></i></div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">{{ $bannedproviders }}</h5><span class="font-danger d-flex align-items-center"><i
                                            class="icon-arrow-down icon-rotate me-1"></i><span
                                            class="f-w-500">Banned Providers</span></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5 class="m-0">Recent Providers</h5>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="appointment-table customer-table table-responsive">
                                    <table class="table table-bordernone">
                                        <tbody>
                                            @foreach ($recentproviders as $item)
                                            <tr>
                                                <td><img class="img-fluid img-40 rounded-circle me-2" src="{{ Storage::url($item->photo) }}" alt="user"></td>
                                                <td class="img-content-box"><a class="f-w-500" href="#">{{ $item->username }}</a><span class="f-light">{{ $item->email }}</span></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5 class="m-0">Weekly Visitors</h5>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="chart-right">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card-body p-0">
                                                <div class="activity-wrap">
                                                    <div id="activity-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-12 notification">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5 class="m-0">Recent Listings</h5>
                                </div>
                            </div>
                            <div class="card-body pt-0 notice-board">
                                <ul>
                                    <li class="d-flex">
                                        <div class="activity-dot-primary"></div>
                                        <div class="ms-3">
                                            <p class="d-flex mb-2"><span class="date-content light-background">16 Feb, 2023</span></p>
                                            <h6>We have over 25 years of experience. We've rented more than 250 properties and won
                                                awards.<span class="dot-notification"></span></h6>
                                            <p class="f-light">Jennyfar Lopez / 5 min ago<span
                                                class="badge alert-light-success txt-success ms-2 f-w-600">New</span></p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="activity-dot-primary"></div>
                                        <div class="ms-3">
                                            <p class="d-flex mb-2"><span class="date-content light-background">16 Feb, 2023</span></p>
                                            <h6>We have over 25 years of experience. We've rented more than 250 properties and won
                                                awards.<span class="dot-notification"></span></h6>
                                            <p class="f-light">Jennyfar Lopez / 5 min ago<span
                                                class="badge alert-light-success txt-success ms-2 f-w-600">New</span></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@section('scripts')
    <script>
        var optionsactivity = {
            series: [
            {
                name: "Visitors",
                data: [200, 405, 250, 150, 50, 100, 40],
            },
            ],
            chart: {
            height: 300,
            type: "bar",
            toolbar: {
                show: false,
            },
            dropShadow: {
                enabled: true,
                top: 10,
                left: 0,
                blur: 5,
                color: "#7064F5",
                opacity: 0.35,
            },
            },
            plotOptions: {
            bar: {
                borderRadius: 6,
                columnWidth: "30%",
            },
            },
            dataLabels: {
            enabled: false,
            },
            xaxis: {
            categories: ["S", "M", "T", "W", "T", "F", "S"],
            labels: {
                style: {
                fontSize: "12px",
                fontFamily: "Rubik, sans-serif",
                colors: "var(--chart-text-color)",
                },
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
            tooltip: {
                enabled: false,
            },
            },
            yaxis: {
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
            labels: {
                formatter: function (val) {
                return val + " " + "Visitor";
                },
                style: {
                fontSize: "12px",
                fontFamily: "Rubik, sans-serif",
                colors: "var(--chart-text-color)",
                },
            },
            },
            grid: {
            borderColor: "var(--chart-dashed-border)",
            strokeDashArray: 5,
            },
            colors: ["#7064F5", "#8D83FF"],
            fill: {
            type: "gradient",
            gradient: {
                shade: "light",
                type: "vertical",
                gradientToColors: ["#7064F5", "#8D83FF"],
                opacityFrom: 0.98,
                opacityTo: 0.85,
                stops: [0, 100],
            },
            },
            responsive: [
            {
                breakpoint: 1200,
                options: {
                chart: {
                    height: 200,
                },
                },
            },
            ],
        };

         var chartactivity = new ApexCharts(
            document.querySelector("#activity-chart"),
            optionsactivity
        );
        chartactivity.render();
    </script>
@endsection
@endsection
