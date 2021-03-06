@extends('layouts.manager')

@section('content')
<section id='all-properties'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-12'>
                <div class='properties-header'>
                    <h2>Edit Property</h2>
                    <nav aria-label='breadcrumb'>
                        <ol class='breadcrumb'>
                            <li class='breadcrumb-item'>
                                <a href='/manager' class='breadcrumb-link'>Dashboard</a>
                            </li>
                            <li class='breadcrumb-item'>
                                <a href='/manager/properties' class='breadcrumb-link'>Properties</a>
                            </li>
                            <li class='breadcrumb-item active' aria-current='page'>
                                Edit Property
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class='row'>
            <div id='form-container' class='col-12'>
                <form method='POST' action='/manager/properties/{{ $property->id }}' class='container-fluid'>
                    @csrf
                    @method('PUT')
                    <div class='card'>
                        <div class='card-header'>
                            <h3 class='mb-1 text-center'>
                                Edit property
                            </h3>
                        </div>
                        <div class='card-body'>
                            <div class='row mb-3'>
                                <label for='name' class='col-sm-4 col-form-label'>
                                    Property Name
                                </label>
                                <div class='col-sm-8'>
                                    <input value='{{ old('name', $property->name) }}' placeholder='Manhattan' name='name' type='text' id='name' class='form-control @error('name') is-invalid @enderror'>
                                    @error('name')
                                        <span class='invalid-feedback' role='alert'>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <label for='property_prefix' class='col-sm-4 col-form-label'>
                                    Property Abbreviation
                                </label>
                                <div class='col-sm-8'>
                                    <input value='{{ old('property_prefix', $property->property_prefix) }}' placeholder='MAN' name='property_prefix' type='text' id='property_prefix' class='form-control @error('property_prefix') is-invalid @enderror'>
                                    @error('property_prefix')
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
                                    <input value='{{ old('image_url', $property->image_url) }}' placeholder='/img/building.png' name='image_url' type='text' id='image_url' class='form-control @error('image_url') is-invalid @enderror'>
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
                                    <select name='floors' id='floors' class='form-select'>
                                        <option value='1' @if($property->floors == '1')selected @endif>1</option>
                                        <option value='2' @if($property->floors == '2')selected @endif>2</option>
                                        <option value='3' @if($property->floors == '3')selected @endif>3</option>
                                        <option value='4' @if($property->floors == '4')selected @endif>4</option>
                                        <option value='5' @if($property->floors == '5')selected @endif>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <label for='units_per_floor' class='col-sm-4 col-form-label'>
                                    Units Per Floor
                                </label>
                                <div class='col-sm-8'>
                                    <select name='units_per_floor' id='units_per_floor' class='form-select'>
                                        <option value='10' @if($property->units_per_floor == '10')selected @endif>10</option>
                                        <option value='20' @if($property->units_per_floor == '20')selected @endif>20</option>
                                        <option value='30' @if($property->units_per_floor == '30')selected @endif>30</option>
                                        <option value='40' @if($property->units_per_floor == '40')selected @endif>40</option>
                                        <option value='50' @if($property->units_per_floor == '50')selected @endif>50</option>
                                    </select>
                                </div>
                            </div>
                            <div class='row mb-5'>
                                <label for='description' class='col-sm-4 col-form-label'>
                                    Property Description
                                </label>
                                <div class='col-sm-8'>
                                    <textarea name='description' class='form-control @error('description') is-invalid @enderror' placeholder='Lorem ...' id='description'>
                                        {{ old('description', $property->description) }}
                                    </textarea>
                                    @error('description')
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