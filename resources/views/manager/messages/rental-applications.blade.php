@extends('layouts.manager')

@section('content')
<section id='rental-applications'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-12'>
                <div class='rental-applications-header'>
                    <h2>Rental Applications</h2>
                    <nav aria-label='breadcrumb'>
                        <ol class='breadcrumb'>
                            <li class='breadcrumb-item'>
                                <a href='/manager' class='breadcrumb-link'>Dashboard</a>
                            </li>
                            <li class='breadcrumb-item active' aria-current='page'>
                                Rental Applications
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
                        Rental Applications
                    </h5>
                    <div class='card-body'>
                        <div class='table-responsive'>
                            <table class='table table-hover table-bordered'>
                                <thead class='table-dark'>
                                    <tr>
                                        <th scope='col' class='text-center'>Name</th>
                                        <th scope='col' class='text-center'>Email</th>
                                        <th scope='col' class='text-center'>Phone Number</th>
                                        <th scope='col' class='text-center'>Monthly Salary</th>
                                        <th scope='col' class='text-center'>Preferred Unit</th>
                                        <th scope='col' class='text-center'>Place Tenant</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($applications as $application)
                                        <tr>
                                            <th scope='row' class='text-center'>{{$application->first_name.' '.$application->last_name}}</th>
                                            <td class='text-center'>{{ $application->email }}</td>
                                            <td class='text-center'>{{ $application->phone_number }}</td>
                                            <td class='text-center'>${{ $application->monthly_salary }}</td>
                                            <td class='text-center'>{{ $application->preferred_unit}}</td>
                                            <td class='text-center'>
                                                <a href='/manager/tenants/create'>
                                                    <i class='fas fa-user-plus'></i>
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