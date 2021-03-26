@extends ('layouts.landing')

@section('site_title')
@endsection

@section('content')
<section class='container-fluid px-0 mx-0' id='home-page'>
    <div class='col-12 px-4 py-4 cta-container'>
        <div class='text'>
            <h3>Choose</h3>
            <p>
                an original Boutique Apartment, managed by Portus, LLC, renovated with a unique theme, and many with eco-friendly features. Studio, 1-br and 2-br Denver apartments are available.
            </p>
            <h3>
                Live
            </h3>
            <p>
                in the heart of Denver; our buildings are close to everything a city dweller needs.
            </p>
            <h3>
                Be a part
            </h3>
            <p>
                of the Boutique Apartments™ community, run with respect for each resident.
            </p>
        </div>
        <div class='image'>
        </div>
    </div>
    <div class='container-fluid bottom-container'>
        <div class='row row-cols-auto mx-auto'>
            <div class='bottom-card col-12 mx-auto my-0 col-lg-4'>
                <div class='icon-box'>
                    <i class='far fa-question-circle'></i>
                </div>
                <h3>
                    Have questions?
                </h3>
                <p>
                    Find out about our pet policy, how to qualify, our application process, and more ...
                </p>
                <a href='#' class='btn btn-outline-dark bg-gradient btn-lg'>
                    View our FAQs
                </a>
            </div>
            <div class='bottom-card col-12 mx-auto my-0 col-lg-4'>
                <div class='icon-box'>
                    <i class='far fa-building'></i>
                </div>
                <h3>
                    Interested?
                </h3>
                <p>
                    If you’re ready for a tour, or have questions not answered in our FAQ, fill out our guest card.
                </p>
                <a href='#' class='btn btn-outline-dark bg-gradient btn-lg'>
                    Contact Us
                </a>
            </div>
            <div class='bottom-card col-12 mx-auto my-0 col-lg-4'>
                <div class='icon-box'>
                    <i class='far fa-envelope'></i>
                </div>
                <h3>
                    Stay in the loop
                </h3>
                <p>
                    Receive updates on availability:
                </p>
                <form action='/' method='POST'>
                    @csrf
                    <div class='row mb-3 mx-auto'>
                        <div class='col-12 px-0'>
                            <input name='name' type='text' class='form-control @error('name') is-invalid @enderror' id='name' placeholder='Your Name'>
                            @error('name')
                                <span class='invalid-feedback' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class='row mb-5 mx-auto'>
                        <div class='col-12 px-0'>
                            <input name='email' type='text' class='form-control @error('email') is-invalid @enderror' id='email' placeholder='Your Email'>
                            @error('email')
                                <span class='invalid-feedback' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-12 px-0'>
                            <button class='btn btn-outline-dark bg-gradient btn-lg' type='submit'>
                                Sign Up
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id='properties-grid-section' class='row mx-0'>
        <h2>
            <span>Featured</span><br> Apartments
        </h2>
        <div class='properties-grid'>
            <a href='/properties/brooklyn' class='property-box-link' id='one'>
                <div class='property-box'>
                    <div class='property-name'>Brooklyn</div>
                    <div class='property-unit'>Unit #: BRK-1-7</div>
                    <div class='property-rooms'>3BR / 1BA</div>
                </div>
            </a>
            <a href='/properties/manhattan' class='property-box-link' id='two'>
                <div class='property-box'>
                    <div class='property-name'>Manhattan</div>
                    <div class='property-unit'>Unit #: MAN-2-20</div>
                    <div class='property-rooms'>1BR / 1BA</div>
                </div>
            </a>
            <a href='/properties/staten%20island' class='property-box-link' id='three'>
                <div class='property-box'>
                    <div class='property-name'>Staten Island</div>
                    <div class='property-unit'>Unit #: STI-2-14</div>
                    <div class='property-rooms'>4BR / 2BA</div>
                </div>
            </a>
            <a href='/properties/queens' class='property-box-link' id='four'>
                <div class='property-box'>
                    <div class='property-name'>Queens</div>
                    <div class='property-unit'>Unit #: QUE-1-8</div>
                    <div class='property-rooms'>0BR / 1BA</div>
                </div>
            </a>
            <a href='/properties/bronx' class='property-box-link' id='five'>
                <div class='property-box'>
                    <div class='property-name'>Bronx</div>
                    <div class='property-unit'>Unit #: BRX-1-7</div>
                    <div class='property-rooms'>0BR / 1BA</div>
                </div>
            </a>
            <a href='/properties/manhattan' class='property-box-link' id='six'>
                <div class='property-box'>
                    <div class='property-name'>Manhattan</div>
                    <div class='property-unit'>Unit #: MAN-4-6</div>
                    <div class='property-rooms'>2BR / 2BA</div>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection