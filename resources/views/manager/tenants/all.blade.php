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
                                    @foreach($tenants as $tenant)
                                        <tr>
                                            <th scope='row'>{{ $tenant->first_name . ' ' . $tenant->last_name }}</th>
                                            <td>{{ $tenant->email }}</td>
                                            <td>{{ $tenant->phone_number }}</td>
                                            <td>{{ $tenant->apartment_num }}</td>
                                            <td class='text-center'>
                                                <a href='/manager/tenants/{{ $tenant->id }}/edit'>
                                                    <i class='fas fa-edit'></i>
                                                </a>
                                            </td>
                                            <td class='text-center'>
                                                <a href='/manager/tenants/{{ $tenant->id }}/delete'>
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