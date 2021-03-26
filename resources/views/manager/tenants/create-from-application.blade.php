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
                <form method='POST' action='/manager/tenants' class='container-fluid'>
                    @csrf
                    <div class='card'>
                        <div class='card-header'>
                            <h3 class='mb-1 text-center'>
                                Create a new tenant
                            </h3>
                        </div>
                        <div class='card-body'>
                            <div class='row mb-3'>
                                <label for='first_name' class='col-sm-4 col-form-label'>
                                    First Name
                                </label>
                                <div class='col-sm-8'>
                                    <input value='{{ old('first_name', $application->first_name) }}' placeholder='Joe' name='first_name' type='text' id='first_name' class='form-control @error('first_name') is-invalid @enderror'>
                                    @error('first_name')
                                        <span class='invalid-feedback' role='alert'>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <label for='last_name' class='col-sm-4 col-form-label'>
                                    Last Name
                                </label>
                                <div class='col-sm-8'>
                                    <input value='{{ old('last_name', $application->last_name) }}' placeholder='Doe' name='last_name' type='text' id='last_name' class='form-control @error('last_name') is-invalid @enderror'>
                                    @error('last_name')
                                        <span class='invalid-feedback' role='alert'>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <label for='email' class='col-sm-4 col-form-label'>
                                    Email
                                </label>
                                <div class='col-sm-8'>
                                    <input value='{{ old('email', $application->email) }}' placeholder='jdoe@gmail.com' name='email' type='email' id='email' class='form-control @error('email') is-invalid @enderror'>
                                    @error('email')
                                        <span class='invalid-feedback' role='alert'>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <label for='phone_number' class='col-sm-4 col-form-label'>
                                    Phone
                                </label>
                                <div class='col-sm-8'>
                                    <input value='{{ old('phone_number', $application->phone_number) }}' placeholder='917-123-4566' name='phone_number' type='tel' id='phone_number' class='form-control @error('phone_number') is-invalid @enderror'>
                                    @error('phone_number')
                                        <span class='invalid-feedback' role='alert'>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <label for='monthly_salary' class='col-sm-4 col-form-label'>
                                    Monthly Salary ($)
                                </label>
                                <div class='col-sm-8'>
                                    <input value='{{ old('monthly_salary', $application->monthly_salary) }}' placeholder='5000' name='monthly_salary' type='text' id='monthly_salary' class='form-control @error('monthly_salary') is-invalid @enderror'>
                                    @error('monthly_salary')
                                        <span class='invalid-feedback' role='alert'>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class='row mb-5'>
                                <label for='unit' class='col-sm-4 col-form-label'>
                                    Unit
                                </label>
                                <div class='col-sm-8'>
                                    <select name='unit' id='unit' class='form-select'>
                                        <option value='{{$application->preferred_unit}}'>{{ $application->preferred_unit }}</option>
                                        @foreach($available_units as $unit)
                                            <option value='{{ $unit->apartment_num }}'>{{ $unit->apartment_num }}</option>
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