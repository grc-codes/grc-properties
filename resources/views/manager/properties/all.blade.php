@extends('layouts.manager')

@section('content')
<section id='all-properties'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-12'>
                <div class='properties-header'>
                    <h2>Properties</h2>
                    <nav aria-label='breadcrumb'>
                        <ol class='breadcrumb'>
                            <li class='breadcrumb-item'>
                                <a href='/manager' class='breadcrumb-link'>Dashboard</a>
                            </li>
                            <li class='breadcrumb-item active' aria-current='page'>
                                Properties
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
                        All Properties
                    </h5>
                    <div class='card-body'>
                        <div class='table-responsive'>
                            <table class='table table-hover table-bordered'>
                                <thead class='table-dark'>
                                    <tr>
                                        <th scope='col' class='text-center'>Property Name</th>
                                        <th scope='col' class='text-center'>Location</th>
                                        <th scope='col' class='text-center'>Image URL</th>
                                        <th scope='col' class='text-center'>Floors</th>
                                        <th scope='col' class='text-center'>Units Per Floor</th>
                                        <th scope='col' class='text-center'>Availability</th>
                                        <th scope='col' class='text-center'>Edit</th>
                                        <th scope='col' class='text-center'>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(range(0,20) as $idx)
                                        <tr>
                                            <th scope='row' class='text-center'>Property Name</th>
                                            <td class='text-center'>Denver CO</td>
                                            <td class='text-center'>/img/building.png</td>
                                            <td class='text-center'>2</td>
                                            <td class='text-center'>20</td>
                                            <td class='text-center'>
                                                3 units available
                                            </td>
                                            <td class='text-center'>
                                                <a href='/manager/properties/1/edit'>
                                                    <i class='fas fa-edit'></i>
                                                </a>
                                            </td>
                                            <td class='text-center'>
                                                <a href='/manager/properties/1/delete'>
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