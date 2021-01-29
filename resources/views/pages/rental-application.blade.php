@extends('layouts.front')

@section('site_title')
@endsection

@section('content')
<div id='rental-app-page'>
    <form class='container-fluid splash'>
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
                <form action=''> 
                    <div class='row mb-3'>
                        <label for='firstName' class='col-sm-4 col-form-label'>First Name</label>
                        <div class='col-sm-8'>
                            <input type='text' class='form-control' id='firstName' name='firstName'>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <label for='lastName' class='col-sm-4 col-form-label'>Last Name</label>
                        <div class='col-sm-8'>
                            <input type='text' class='form-control' id='lastName' name='lastName'>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <label for='email' class='col-sm-4 col-form-label'>Email</label>
                        <div class='col-sm-8'>
                            <input type='email' class='form-control' id='email' name='email'>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <label for='phoneNumber' class='col-sm-4 col-form-label'>Phone</label>
                        <div class='col-sm-8'>
                            <input type='tel' class='form-control' id='phoneNumber' name='phoneNumber'>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <label for='monthlySalary' class='col-sm-4 col-form-label'>Monthly Salary ($)</label>
                        <div class='col-sm-8'>
                            <input type='text' class='form-control' id='monthlySalary' name='monthlySalary'>
                        </div>
                    </div>
                    <div class='row mb-5'>
                        <label for='selectUnit' class='col-sm-4 col-form-label'>Preferred Unit</label>
                        <div class='col-sm-8'>
                            <select aria-label='Unit Selection' class='form-select' name='selectUnit' id='selectUnit'>
                                <option selected value='bk101'>BK 101</option>
                                <option value='bk102'>BK 102</option>
                                <option value='bk102'>BK 102</option>
                                <option value='bk102'>BK 102</option>
                                <option value='bk102'>BK 102</option>
                                <option value='bk102'>BK 102</option>
                                <option value='bk102'>BK 102</option>
                                <option value='bk102'>BK 102</option>
                                <option value='bk102'>BK 102</option>
                            </select>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 d-grid gap-2'>
                            <button class='btn btn-primary btn-lg bg-gradient btn-block' type='submit'>Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
</div>
@endsection