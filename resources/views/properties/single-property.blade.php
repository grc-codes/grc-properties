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
                            <li class='breadcrumb-item active' aria-current='page'>{{ $property->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-12'>
                <div class='card'>
                    <h5 class='card-header'>
                        {{ $property->name }}
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
                                    @foreach($units as $unit)
                                        <tr>
                                            <th scope='row'>{{ $unit->apartment_num }}</th>
                                            <td>{{ $unit->beds }} / {{ $unit->baths }}</td>
                                            <td>${{ number_format($unit->rent_price) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class='card-footer'>
                        {{ $units->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection