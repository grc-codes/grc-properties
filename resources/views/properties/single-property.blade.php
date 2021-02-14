@extends('layouts.front')

@section('site_title')
@endsection

@section('content')
<div id='properties-page'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-12'>
                <div class='page-header'>
                    <h2>Properties</h2>
                    <nav aria-label='breadcrumb'>
                        <ol class='breadcrumb'>
                            <li class='breadcrumb-item'><a class='breadcrumb-link' href='/properties'>Home</a></li>
                            <li class='breadcrumb-item active' aria-current='page'>{{ $propName }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-12'>
                <div class='card'>
                    <h5 class='card-header'>
                        {{ $propName }}
                    </h5>
                    <div class='card-body'>
                        <div class='table-responsive'>
                            <table class='table table-hover table-bordered'>
                                <thead class='table-dark'>
                                    <tr>
                                        <th scope='col'>Unit #</th>
                                        <th scope='col'>Bed / Bath</th>
                                        <th scope='col'>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(range(0,20) as $idx)
                                        <tr>
                                            <th scope='row'>10{{ $idx }}</th>
                                            <td>1 / 1</td>
                                            <td>$1,000</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class='card-footer'>
                        Pagination
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection