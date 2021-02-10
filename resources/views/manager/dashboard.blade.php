@extends('layouts.manager')

@section('content')
<section id='manager-dashboard'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-12'>
                <div class='dashboard-header'>
                    <h2>Manager Dashboard</h2>
                    <nav aria-label='breadcrumb'>
                        <ol class='breadcrumb'>
                            <li class='breadcrumb-item'>
                                <a href='/manager' class='breadcrumb-link'>Dashboard</a>
                            </li>
                            <li class='breadcrumb-item active' aria-current='page'>
                                Dashboard
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-12 col-md-6 col-lg-3'>
                <div class='card border-3 border-top border-top-primary'>
                    <div class='card-body'>
                        <h5 class='text-muted'>
                            Total Revenue
                        </h5>
                        <div class='metric-value d-inline-block'>
                            <h1 class='mb-1'>
                                $2322
                            </h1>
                        </div>
                        <div class='metric-label d-inline-block float-right text-success font-weight-bold'>
                            <span>
                                <i class='fa fa-fw fa-arrow-up'></i>
                            </span>
                            <span>
                                5.86%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-12 col-md-6 col-lg-3'>
                <div class='card border-3 border-top border-top-primary'>
                    <div class='card-body'>
                        <h5 class='text-muted'>
                            Total Revenue
                        </h5>
                        <div class='metric-value d-inline-block'>
                            <h1 class='mb-1'>
                                $2322
                            </h1>
                        </div>
                        <div class='metric-label d-inline-block float-right text-success font-weight-bold'>
                            <span>
                                <i class='fa fa-fw fa-arrow-up'></i>
                            </span>
                            <span>
                                5.86%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-12 col-md-6 col-lg-3'>
                <div class='card border-3 border-top border-top-primary'>
                    <div class='card-body'>
                        <h5 class='text-muted'>
                            Total Revenue
                        </h5>
                        <div class='metric-value d-inline-block'>
                            <h1 class='mb-1'>
                                $2322
                            </h1>
                        </div>
                        <div class='metric-label d-inline-block float-right text-success font-weight-bold'>
                            <span>
                                <i class='fa fa-fw fa-arrow-up'></i>
                            </span>
                            <span>
                                5.86%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-12 col-md-6 col-lg-3'>
                <div class='card border-3 border-top border-top-primary'>
                    <div class='card-body'>
                        <h5 class='text-muted'>
                            Total Revenue
                        </h5>
                        <div class='metric-value d-inline-block'>
                            <h1 class='mb-1'>
                                $2322
                            </h1>
                        </div>
                        <div class='metric-label d-inline-block float-right text-success font-weight-bold'>
                            <span>
                                <i class='fa fa-fw fa-arrow-up'></i>
                            </span>
                            <span>
                                5.86%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-12 col-lg-7'>
                <div class='card'>
                    <h5 class='card-header'>
                        Total Revenue
                    </h5>
                    <div class='card-body'>
                        <div id='morris_totalrevenue'></div>
                    </div>
                    <div class='card-footer'>
                        <p class='display-7 font-weight-bold'>
                            <span class='text-primary d-inline-block'>
                                Estimated Revenue (Last 30 Days): $2241
                            </span>
                            <span class='text-success float-right'>+9.45%</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class='col-12 col-lg-5'>
                <div class='card'>
                    <h5 class='card-header'>
                        Revenue by Property
                    </h5>
                    <div class='card-body'>
                        <div id='c3chart_revenueByProperty'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
