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
            <div class='card-body' id='thank-you'>
                <h2 class='thank-you text-center'>
                    Thank You!<br />
                    We will reach you shortly.
                </h2>
            </div>
        </div>
    </form>
</div>
@endsection