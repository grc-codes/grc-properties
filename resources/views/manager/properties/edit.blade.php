@extends('layouts.manager')

@section('content')
<section id='all-properties'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-12'>
                <div class='properties-header'>
                    <h2>New Property</h2>
                    <nav aria-label='breadcrumb'>
                        <ol class='breadcrumb'>
                            <li class='breadcrumb-item'>
                                <a href='/manager' class='breadcrumb-link'>Dashboard</a>
                            </li>
                            <li class='breadcrumb-item'>
                                <a href='/manager/properties' class='breadcrumb-link'>Properties</a>
                            </li>
                            <li class='breadcrumb-item active' aria-current='page'>
                                New Property
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class='row'>
            <div id='form-container' class='col-12'>
                <form action='/manager/properties' class='container-fluid'>
                    <div class='card'>
                        <div class='card-header'>
                            <h3 class='mb-1 text-center'>
                                Create a new property
                            </h3>
                        </div>
                        <div class='card-body'>
                            <div class='row mb-3'>
                                <label for='propertyName' class='col-sm-4 col-form-label'>
                                    Property Name
                                </label>
                                <div class='col-sm-8'>
                                    <input placeholder='Knickerbocker' name='propertyName' type='text' id='propertyName' class='form-control'>
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <label for='location' class='col-sm-4 col-form-label'>
                                    Location
                                </label>
                                <div class='col-sm-8'>
                                    <input placeholder='New York NY' name='location' type='text' id='location' class='form-control'>
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <label for='propertyImage' class='col-sm-4 col-form-label'>
                                    Property Image URL
                                </label>
                                <div class='col-sm-8'>
                                    <input placeholder='/img/building.png' name='propertyImage' type='text' id='propertyImage' class='form-control'>
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <label for='floors' class='col-sm-4 col-form-label'>
                                    Floors
                                </label>
                                <div class='col-sm-8'>
                                    <select name='floors' id='floors' class='form-select'>
                                        <option selected value='1'>1</option>
                                        <option value='2'>2</option>
                                        <option value='3'>3</option>
                                        <option value='4'>4</option>
                                        <option value='5'>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class='row mb-5'>
                                <label for='unitsPerFloor' class='col-sm-4 col-form-label'>
                                    Units Per Floor
                                </label>
                                <div class='col-sm-8'>
                                    <select name='unitsPerFloor' id='unitsPerFloor' class='form-select'>
                                        <option selected value='10'>10</option>
                                        <option value='20'>20</option>
                                        <option value='30'>30</option>
                                        <option value='40'>40</option>
                                        <option value='50'>50</option>
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