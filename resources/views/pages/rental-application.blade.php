@extends('layouts.front')

@section('site_title')
@endsection

@section('content')
<div id='rental-app-page'>
    <form method='POST' action='/rental-application' class='container-fluid splash'>
        @csrf
        <div class='card'>
            <div class='card-header'>
                <h3 class='mb-1 text-center'>
                    Rental Application
                </h3>
                <p class='text-center'>
                    Please fill out this form and someone will get in contact with you.
                </p>
            </div>
            <div class='card-body'>
                
                <div class='row mb-3'>
                    <label for='first_name' class='col-sm-4 col-form-label'>First Name</label>
                    <div class='col-sm-8'>
                        <input type='text' class='form-control @error('first_name') is-invalid @enderror' id='first_name' name='first_name'>
                        @error('first_name')
                            <span class='invalid-feedback' role='alert'>
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class='row mb-3'>
                    <label for='last_name' class='col-sm-4 col-form-label'>Last Name</label>
                    <div class='col-sm-8'>
                        <input type='text' class='form-control @error('last_name') is-invalid @enderror' id='last_name' name='last_name'>
                        @error('last_name')
                            <span class='invalid-feedback' role='alert'>
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class='row mb-3'>
                    <label for='email' class='col-sm-4 col-form-label'>Email</label>
                    <div class='col-sm-8'>
                        <input type='email' class='form-control @error('email') is-invalid @enderror' id='email' name='email'>
                        @error('email')
                            <span class='invalid-feedback' role='alert'>
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class='row mb-3'>
                    <label for='phone_number' class='col-sm-4 col-form-label'>Phone</label>
                    <div class='col-sm-8'>
                        <input type='tel' class='form-control @error('phone_number') is-invalid @enderror' id='phone_number' name='phone_number'>
                        @error('phone_number')
                            <span class='invalid-feedback' role='alert'>
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class='row mb-3'>
                    <label for='monthly_salary' class='col-sm-4 col-form-label'>Monthly Salary ($)</label>
                    <div class='col-sm-8'>
                        <input type='text' class='form-control @error('monthly_salary') is-invalid @enderror' id='monthly_salary' name='monthly_salary'>
                        @error('monthly_salary')
                            <span class='invalid-feedback' role='alert'>
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class='row mb-5'>
                    <label for='preferred_unit' class='col-sm-4 col-form-label'>Preferred Unit</label>
                    <div class='col-sm-8'>
                        <select aria-label='Unit Selection' class='form-select' name='preferred_unit' id='preferred_unit'>
                            @foreach($available_units as $unit)
                            <option value='{{ $unit->apartment_num }}'>{{ $unit->apartment_num }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 d-grid gap-2'>
                        <button class='btn btn-primary btn-lg bg-gradient btn-block' type='submit'>Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection