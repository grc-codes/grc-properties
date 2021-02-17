@extends('layouts.front')

@section('site_title')
@endsection

@section('content')
<div id='contact-page'>
    <div class='container-fluid mx-0 px-0'>
        <div class='row px-0 mx-0'>
            <h2 class='py-2 mb-4'>Contact Information</h2>
            <div class='contact-description col-12 col-lg-5 mx-0 px-0 offset-lg-2'>
                <h4>
                    Main Office
                </h4>
                <p>
                    Boutique Apartments™
                    <br>
                    Managed by Portus, LLC
                    <br>
                    574 Santa Fe Drive, #110
                    <br>
                    Denver, Colorado 80204
                    <br>
                    Phone: 303-333-3773
                    <br>
                    Fax: 303-320-0944
                </p>
                <p>
                    <strong>
                        Open:
                    </strong>
                    M-F 9am-5:30pm, Sat 9am-5pm
                    <br>
                    <strong>
                        Closed:
                    </strong>
                    Sundays
                </p>
                <h4>
                    Leasing Inquiries
                </h4>
                <p>
                    Apartment tours are by appointment only. To request a tour, please fill out the form on this page, or contact us at <a href="mailto:leasing@boutiqueapartments.com">leasing@boutiqueapartments.com</a>.
                </p>
                <h4>
                    Resident Inquiries
                </h4>
                <p>
                    To submit a regular maintenance request, please log in to your <a href="https://residentwebaccess.rentmanager.com/CustomerLogin.aspx?corpID=boutique&amp;locationID=1" target="_blank" rel="noopener noreferrer">resident portal</a>.
                </p>
                <p>
                    For after-hours maintenance emergencies, such as a water or gas leak, or no heat, please call our after-hours emergency number at: 303-370-0200.
                </p>
                <p>
                    For all other resident inquiries, please contact our Resident Services team at <a href="mailto:rsc@boutiqueapartments.com">rsc@boutiqueapartments.com</a>.
                </p>
            </div>
            <div class='contact-form col-12 col-lg-6 ms-auto mx-0'>
                <div class='container-fluid px-0'>
                    <form action=''>
                        <div class='row mb-2'>
                            <label for='name' class='col-12 col-form-label'>Name</label>
                            <div class='col-12 col-md-8 col-lg-12 col-xl-8'>
                                <input type='text' class='form-control' id='name' name='name'>
                            </div>
                        </div>
                        <div class='row mb-2'>
                            <label for='email' class='col-12 col-form-label'>Email</label>
                            <div class='col-12 col-md-8 col-lg-12 col-xl-8'>
                                <input type='email' class='form-control' id='email' name='email'>
                            </div>
                        </div>
                        <div class='row mb-2'>
                            <label for='phoneNumber' class='col-12 col-form-label'>Phone Number</label>
                            <div class='col-12 col-md-8 col-lg-12 col-xl-8'>
                                <input type='tel' class='form-control' id='phoneNumber' name='phoneNumber'>
                            </div>
                        </div>
                        <div class='row mb-2'>
                            <label for='reference-select' class='col-12 col-form-label'>How did you hear about us?</label>
                            <div class='col-12 col-md-8 col-lg-12 col-xl-8'>
                                <select name='reference' id='reference-select' class='form-select'>
                                    <option value='' selected></option>
                                    <option value='drive-by'>Drive By: Leasing Banner / Sign</option>
                                    <option value='craigslist'>Craigslist</option>
                                    <option value='friend'>Friend</option>
                                    <option value='google'>Google Search</option>
                                    <option value='zillowdotcom'>Zillow.com</option>
                                    <option value='truliadotcom'>Trulia.com</option>
                                    <option value='apartmentsdotcom'>Apartments.com</option>
                                    <option value='facebook'>Facebook</option>
                                    <option value='instagram'>Instagram</option>
                                    <option value='other'>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class='row mb-2'>
                            <label for='movedate-select' class='col-12 col-form-label'>When are you looking to move?</label>
                            <div class='col-12 col-md-8 col-lg-12 col-xl-8'>
                                <select name='movedate' id='movedate-select' class='form-select'>
                                    <option value='' selected></option>
                                    <option value='lessthan2wks'>Within 2 weeks</option>
                                    <option value='2wksto4wks'>2-4 weeks</option>
                                    <option value='1moto3mo'>1-3 months</option>
                                    <option value='3moto6mo'>3-6 months</option>
                                    <option value='Other'>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class='row mb-2'>
                            <label for='budget-select' class='col-12 col-form-label'>How much are you looking to spend?</label>
                            <div class='col-12 col-md-8 col-lg-12 col-xl-8'>
                                <select name='budget' id='budget-select' class='form-select'>
                                    <option value='' selected></option>
                                    <option value='800to900'>$800-$900</option>
                                    <option value='900to1000'>$900-$1000</option>
                                    <option value='1000to1300'>$1000-$1300</option>
                                    <option value='1300plus'>$1300+</option>
                                    <option value='other'>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class='row mb-2'>
                            <label for='room-select' class='col-12 col-form-label'>What style of apartment?</label>
                            <div class='col-12 col-md-8 col-lg-12 col-xl-8'>
                                <select name='room' id='room-select' class='form-select'>
                                    <option value='' selected></option>
                                    <option value='studio'>Studio</option>
                                    <option value='onebed'>1 bedroom</option>
                                    <option value='twobed'>2 bedroom</option>
                                    <option value='threebed'>3 bedroom</option>
                                </select>
                            </div>
                        </div>
                        <div class='row mb-2'>
                            <label for='pet-select' class='col-12 col-form-label'>Do you have any pets?</label>
                            <div class='col-12 col-md-8 col-lg-12 col-xl-8'>
                                <select name='pet' id='pet-select' class='form-select'>
                                    <option value='' selected></option>
                                    <option value='no'>No</option>
                                    <option value='yes'>Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class='row mb-2'>
                            <label for='building-select' class='col-12 col-form-label'>What Botique Apartments building are you interested in?</label>
                            <div class='col-12 col-md-8 col-lg-12 col-xl-8'>
                                <select name='building' id='building-select' class='form-select'>
                                    <option value='' selected></option>
                                    <option value='unsure'>I'm not sure</option>
                                    <option value='manhattan'>Manhattan</option>
                                    <option value='bronx'>Bronx</option>
                                    <option value='queens'>Queens</option>
                                    <option value='long_island'>Long Island</option>
                                    <option value='brooklyn'>Brooklyn</option>
                                </select>
                            </div>
                        </div>
                        <div class='row mb-2'>
                            <label for='tour-select' class='col-12 col-form-label'>What kind of tour would you prefer? (Subject to availability)</label>
                            <div class='col-12 col-md-8 col-lg-12 col-xl-8'>
                                <select name='tour' id='tour-select' class='form-select'>
                                    <option value='' selected></option>
                                    <option value='virtual'>Virtual Tour</option>
                                    <option value='inperson'>In-person Tour</option>
                                </select>
                            </div>
                        </div>
                        <div class='row mb-4'>
                            <label for='comments' class='col-12 col-form-label'>Comments</label>
                            <div class='col-12 col-md-8 col-lg-12 col-xl-8'>
                                <textarea class='form-control' placeholder='Leave a comment here' id='comments'></textarea>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-12 col-md-8 col-lg-12 col-xl-8'>
                                <button class='btn btn-primary bg-gradient btn-block' type='submit'>Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection