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
                            Monthly Revenue
                        </h5>
                        <div class='metric-value d-inline-block'>
                            <h1 class='mb-1'>
                                ${{ $monthly_revenue }}
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-12 col-md-6 col-lg-3'>
                <div class='card border-3 border-top border-top-primary'>
                    <div class='card-body'>
                        <h5 class='text-muted'>
                            Occupancy Rate
                        </h5>
                        <div class='metric-value d-inline-block'>
                            <h1 class='mb-1'>
                                {{ number_format($occupancy_rate, 2) }}
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-12 col-md-6 col-lg-3'>
                <div class='card border-3 border-top border-top-primary'>
                    <div class='card-body'>
                        <h5 class='text-muted'>
                            Vacancy Rate
                        </h5>
                        <div class='metric-value d-inline-block'>
                            <h1 class='mb-1'>
                                {{ number_format($vacancy_rate, 2) }}
                            </h1>
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
                                Estimated Revenue (Last 30 Days): ${{ $monthly_revenue }}
                            </span>
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
<link href='https://cdnjs.cloudflare.com/ajax/libs/c3/0.6.3/c3.min.css' rel='stylesheet'>
<script src="https://d3js.org/d3.v5.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/c3/0.6.3/c3.min.js'></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script src='../../js/app.js'></script>
@endsection
