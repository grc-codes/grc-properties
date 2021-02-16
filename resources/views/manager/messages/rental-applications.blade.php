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
                                    @foreach(range(0,20) as $idx)
                                        <tr>
                                            <th scope='row' class='text-center'>John Doe</th>
                                            <td class='text-center'>jdoe@gmail.com</td>
                                            <td class='text-center'>917-123-4567</td>
                                            <td class='text-center'>$50,0000</td>
                                            <td class='text-center'>BK 101</td>
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