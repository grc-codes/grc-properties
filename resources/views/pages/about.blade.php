@extends('layouts.front')

@section('site_title')
@endsection

@section('content')
<div id='about-page'>
    {{-- <div class='container-fluid mx-0 px-0'>
        <div class='row mx-0 px-0'>
            <div class='about-text col-12 col-lg-5 mx-0 px-0 offset-lg-2'>
                <h2 class='mb-4'>About</h2>
                <p>
                    Boutique Apartments™, managed by Portus, LLC, has represented a whole new idea in Denver apartment living since 2005. And the people behind our company have spent years building the experience to get it right. Our team of leasing, maintenance, and property management professionals are here to make your apartment experience memorable.
                </p>
            </div>
            <div class='about-image col-12 col-lg-5 ms-auto mx-0 px-0'>
                <div id='about-img' class='container-fluid p-0 mb-0 bg-image'>
                </div>
            </div>
        </div>
    </div> --}}
    <div class='container-fluid mx-0 px-0'>
        <div class='about-image mb-5'>
            <div id='about-img' class='container-fluid p-0 mb-0 bg-image'>
            </div>
        </div>
        <h2 class='text-center'>
            About Us
        </h2>
        <div class='row'>
            <div class='col-12 col-lg-4 d-flex flex-column align-items-center'>
                <i class='fas fa-users'></i>
                <h4>
                    Who are we?
                </h4>
                <p>
                    We are a team of dedicated marketing nerds who know the property management industry inside and out. Working with property managers across the country every day keeps us in-tune with what is getting results and what isn't
                </p>
            </div>
            <div class='col-12 col-lg-4 d-flex flex-column align-items-center'>
                <i class='fas fa-laptop-house'></i>
                <h4>
                    What do we do?
                </h4>
                <p>
                    We help property managers grow and get more leads with superior strategies that we test and track constantly. From stunning lead-generating websites, results based local SEO, reputation management, and PPC, we got you covered
                </p>
            </div>
            <div class='col-12 col-lg-4 d-flex flex-column align-items-center'>
                <i class='fas fa-fire'></i>
                <h4>
                    Why do we do it?
                </h4>
                <p>
                    We are passionate about helping property managers break free from out-dated and inefficient marketing and SEO. We are crazy about keeping up with the latest trends and it makes our day when we see new clients drastic improvements
                </p>
            </div>
        </div>
    </div>
</div>
@endsection