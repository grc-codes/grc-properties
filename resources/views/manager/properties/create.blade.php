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
                <form action='/manager/properties' class='container-fluid' method='POST'>
                    @csrf
                    <div class='card'>
                        <div class='card-header'>
                            <h3 class='mb-1 text-center'>
                                Create a new property
                            </h3>
                        </div>
                        <div class='card-body'>
                            <div class='row mb-3'>
                                <label for='property_name' class='col-sm-4 col-form-label'>
                                    Property Name
                                </label>
                                <div class='col-sm-8'>
                                    <input placeholder='Manhattan' name='property_name' type='text' id='property_name' class='form-control @error('property_name') is-invalid @enderror'>
                                    @error('property_name')
                                        <span class='invalid-feedback' role='alert'>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <label for='property_abbreviation' class='col-sm-4 col-form-label'>
                                    Property Abbreviation
                                </label>
                                <div class='col-sm-8'>
                                    <input placeholder='MAN' name='property_abbreviation' type='text' id='property_abbreviation' class='form-control @error('property_abbreviation') is-invalid @enderror'>
                                    @error('property_abbreviation')
                                        <span class='invalid-feedback' role='alert'>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <label for='image_url' class='col-sm-4 col-form-label'>
                                    Property Image URL
                                </label>
                                <div class='col-sm-8'>
                                    <input placeholder='/img/building.png' name='image_url' type='text' id='image_url' class='form-control @error('image_url') is-invalid @enderror'>
                                    @error('image_url')
                                        <span class='invalid-feedback' role='alert'>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <label for='floors' class='col-sm-4 col-form-label'>
                                    Floors
                                </label>
                                <div class='col-sm-8'>
                                    <select name='floors' id='floors' class='form-select @error('floors') is-invalid @enderror'>
                                        <option selected value='1'>1</option>
                                        <option value='2'>2</option>
                                        <option value='3'>3</option>
                                        <option value='4'>4</option>
                                        <option value='5'>5</option>
                                    </select>
                                    @error('floors')
                                        <span class='invalid-feedback' role='alert'>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <label for='units_per_floor' class='col-sm-4 col-form-label'>
                                    Units Per Floor
                                </label>
                                <div class='col-sm-8'>
                                    <select name='units_per_floor' id='units_per_floor' class='form-select @error('units_per_floor') is-invalid @enderror'>
                                        <option selected value='10'>10</option>
                                        <option value='20'>20</option>
                                        <option value='30'>30</option>
                                        <option value='40'>40</option>
                                        <option value='50'>50</option>
                                    </select>
                                    @error('units_per_floor')
                                        <span class='invalid-feedback' role='alert'>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class='row mb-5'>
                                <label for='property_description' class='col-sm-4 col-form-label'>
                                    Property Description
                                </label>
                                <div class='col-sm-8'>
                                    <textarea name='property_description' class='form-control @error('property_name') is-invalid @enderror' placeholder='Lorem ...' id='property_description'></textarea>
                                    @error('property_description')
                                        <span class='invalid-feedback' role='alert'>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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