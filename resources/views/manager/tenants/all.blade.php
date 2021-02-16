@extends('layouts.manager')

@section('content')
<section id='all-tenants'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-12'>
                <div class='tenants-header'>
                    <h2>Tenants</h2>
                    <nav aria-label='breadcrumb'>
                        <ol class='breadcrumb'>
                            <li class='breadcrumb-item'>
                                <a href='/manager' class='breadcrumb-link'>Dashboard</a>
                            </li>
                            <li class='breadcrumb-item active' aria-current='page'>
                                Tenants
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
                        All Tenants
                    </h5>
                    <div class='card-body'>
                        <div class='table-responsive'>
                            <table class='table table-hover table-bordered'>
                                <thead class='table-dark'>
                                    <tr>
                                        <th scope='col'>Tenant Name</th>
                                        <th scope='col'>Email</th>
                                        <th scope='col'>Phone</th>
                                        <th scope='col'>Unit</th>
                                        <th scope='col'>Edit</th>
                                        <th scope='col'>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(range(0,20) as $idx)
                                        <tr>
                                            <th scope='row'>John Doe</th>
                                            <td>jdoe@gmail.com</td>
                                            <td>917-342-2203</td>
                                            <td>BK-100</td>
                                            <td class='text-center'>
                                                <a href='/manager/tenants/1/edit'>
                                                    <i class='fas fa-edit'></i>
                                                </a>
                                            </td>
                                            <td class='text-center'>
                                                <a href='/manager/tenants/1/delete'>
                                                    <i class='fas fa-trash-alt'></i>
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