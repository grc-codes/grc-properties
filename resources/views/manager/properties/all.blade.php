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
                                        <th scope='col'>Property Name</th>
                                        <th scope='col'>Location</th>
                                        <th scope='col'>Image URL</th>
                                        <th scope='col'>Availability</th>
                                        <th scope='col'>Edit</th>
                                        <th scope='col'>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(range(0,20) as $idx)
                                        <tr>
                                            <th scope='row'>Property Name</th>
                                            <td>Denver CO</td>
                                            <td>/img/building.png</td>
                                            <td>
                                                3 units available
                                            </td>
                                            <td class='text-center'>
                                                <a href='/manager/properties/1/edit'>
                                                    <i class='far fa-edit'></i>
                                                </a>
                                            </td>
                                            <td class='text-center'>
                                                <a href='/manager/properties/1/delete'>
                                                    <i class='far fa-trash-alt'></i>
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