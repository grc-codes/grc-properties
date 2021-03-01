@extends ('layouts.landing')

@section('site_title')
@endsection

@section('content')
<section class='container-fluid px-0 mx-0' id='home-page'>
    <div class='row py-0 px-0 mx-0'>
        <div class='row px-0 mx-0'>
            <div class='col-12 col-lg-6 px-4 py-4 cta-container'>
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
            <div class='col-12 col-lg-6 px-4 py-4 form-container'>
                <h4 class='text-center mb-0'>What are you looking for</h4>
                <form action='' class='mx-auto'>
                    <div class='row'>
                        <div class='col-6'>
                            <div class='form-floating'>
                                <select name='bedrooms' id='bedrooms-select' class='form-select'>
                                    <option value='any'>Any</option>
                                    <option value='0'>Studio</option>
                                    <option value='1'>1</option>
                                    <option value='2'>2</option>
                                    <option value='3'>3</option>
                                </select>
                                <label for='bedrooms-select'>Bedrooms</label>
                            </div>
                        </div>
                        <div class='col-6'>
                            <div class='form-floating'>
                                <select name='bathrooms' id='bathrooms-select' class='form-select'>
                                    <option value='any'>Any</option>
                                    <option value='1'>1</option>
                                    <option value='1.5'>1.5</option>
                                    <option value='2'>2</option>
                                </select>
                                <label for='bathrooms-select'>Bathrooms</label>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-12'>
                            <div class='form-floating'>
                                <select name='buildings' id='buildings-select' class='form-select'>
                                    <option value='any'>Any</option>
                                    <option value='knickerbocker'>Knickerbocker</option>
                                    <option value='getty'>Getty</option>
                                    <option value='crooks'>Crooks</option>
                                </select>
                                <label for='buildings-select'>Building</label>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-6'>
                            <div class='form-floating'>
                                <input name='min-price' type='text' class='form-control' id='min-price-input'>
                                <label for='min-price-input'>Min Price ($)</label>
                            </div>
                        </div>
                        <div class='col-6'>
                            <div class='form-floating'>
                                <input name='max-price' type='text' class='form-control' id='max-price-input'>
                                <label for='max-price-input'>Max Price ($)</label>
                            </div>
                        </div>
                    </div>
                    <div class='col text-center'>
                        <button class='btn btn-primary btn-lg mx-auto bg-gradient' type='submit'>
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class='container-fluid bottom-container' id='thank-you'>
        <h2 class='thank-you-text'>
            Thank you!<br />
            You will now receive updates on new vacancies.
        </h2>
    </div>
</section>
@endsection