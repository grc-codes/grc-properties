@extends('layouts.manager')

@section('content')
<section id='all-tenants'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-12'>
                <div class='tenants-header'>
                    <h2>New Tenant</h2>
                    <nav aria-label='breadcrumb'>
                        <ol class='breadcrumb'>
                            <li class='breadcrumb-item'>
                                <a href='/manager' class='breadcrumb-link'>Dashboard</a>
                            </li>
                            <li class='breadcrumb-item'>
                                <a href='/manager/tenants' class='breadcrumb-link'>Tenants</a>
                            </li>
                            <li class='breadcrumb-item active' aria-current='page'>
                                New Tenant
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class='row'>
            <div id='form-container' class='col-12'>
                <form action='/manager/tenants' class='container-fluid'>
                    <div class='card'>
                        <div class='card-header'>
                            <h3 class='mb-1 text-center'>
                                Create a new tenant
                            </h3>
                        </div>
                        <div class='card-body'>
                            <div class='row mb-3'>
                                <label for='firstName' class='col-sm-4 col-form-label'>
                                    First Name
                                </label>
                                <div class='col-sm-8'>
                                    <input placeholder='Joe' name='firstName' type='text' id='firstName' class='form-control'>
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <label for='lastName' class='col-sm-4 col-form-label'>
                                    Last Name
                                </label>
                                <div class='col-sm-8'>
                                    <input placeholder='Doe' name='lastName' type='text' id='lastName' class='form-control'>
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <label for='email' class='col-sm-4 col-form-label'>
                                    Email
                                </label>
                                <div class='col-sm-8'>
                                    <input placeholder='jdoe@gmail.com' name='email' type='email' id='email' class='form-control'>
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <label for='phone' class='col-sm-4 col-form-label'>
                                    Phone
                                </label>
                                <div class='col-sm-8'>
                                    <input placeholder='917-123-4566' name='phone' type='tel' id='phone' class='form-control'>
                                </div>
                            </div>
                            <div class='row mb-5'>
                                <label for='unit' class='col-sm-4 col-form-label'>
                                    Unit
                                </label>
                                <div class='col-sm-8'>
                                    <select name='unit' id='unit' class='form-select'>
                                        @foreach($available_units as $unit)
                                            <option value='{{ $unit->unit_prefix . '-' . $unit->id }}'>{{ $unit->unit_prefix . '-' . $unit->id }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 d-grid'>
                                    <button class='btn btn-primary btn-lg bg-gradient btn-block' type='submit'>
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection