@extends('layouts.manager')

@section('content')
<section id='all-units'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-12'>
                <div class='units-header'>
                    <h2>Units</h2>
                    <nav aria-label='breadcrumb'>
                        <ol class='breadcrumb'>
                            <li class='breadcrumb-item'>
                                <a href='/manager' class='breadcrumb-link'>Dashboard</a>
                            </li>
                            <li class='breadcrumb-item active' aria-current='page'>
                                Units
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-12'>
                <div class='card'>
                    <h5 class='card-header'>
                        All Units
                    </h5>
                    <div class='card-body'>
                        <div class='table-responsive'>
                            <table class='table table-hover table-bordered'>
                                <thead class='table-dark'>
                                    <tr>
                                        <th scope='col' class='text-center'>Unit #</th>
                                        <th scope='col' class='text-center'>Bed</th>
                                        <th scope='col' class='text-center'>Bath</th>
                                        <th scope='col' class='text-center'>Price</th>
                                        <th scope='col' class='text-center'>Claim</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($available_units as $available_unit)
                                        <tr>
                                            <th scope='row' class='text-center'>{{ $available_unit->unit_prefix . '-' . $available_unit->id }}</th>
                                            <td class='text-center'>{{ $available_unit->beds }}</td>
                                            <td class='text-center'>{{ $available_unit->baths }}</td>
                                            <td class='text-center'>${{ $available_unit->rent_price }}</td>
                                            <td class='text-center'>
                                                <a href='/manager/units/1/claim'>
                                                    <i class='fas fa-edit'></i>
                                                </a>
                                            </td>
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
</section>
@endsection