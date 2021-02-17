@extends('layouts.front')

@section('site_title')
@endsection

@section('content')
<div id='properties-page'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-12'>
                <div class='page-header'>
                    <h2>Properties</h2>
                    <nav aria-label='breadcrumb'>
                        <ol class='breadcrumb'>
                            <li class='breadcrumb-item active' aria-current='page'>Home</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-12'>
                <h5 class='text-center'>All Properties</h5>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($properties as $property)
                <div class="col property">
                    <div class="card h-100 hoverable">
                        <a href='/properties/{{ $property->property_name }}'>
                            <div class='bg-image hover-zoom'>
                                <img
                                    src={{ $property->image_url }}
                                    class="card-img-top"
                                />
                            </div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $property->property_name }}
                            </h5>
                            <p class="card-text">
                                {{ $property->property_description }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection