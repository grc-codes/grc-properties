@extends('layouts.manager')

@section('content')
<section id='messages'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-12'>
                <div class='messages-header'>
                    <h2>Messages</h2>
                    <nav aria-label='breadcrumb'>
                        <ol class='breadcrumb'>
                            <li class='breadcrumb-item'>
                                <a href='/manager' class='breadcrumb-link'>Dashboard</a>
                            </li>
                            <li class='breadcrumb-item'>
                                <a href='/manager/messages' class='breadcrumb-link'>Messages</a>
                            </li>
                            <li class='breadcrumb-item active' aria-current='page'>
                                {{ $message->name }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-12'>
                <div class='card'>
                    <h5 class='card-header'>
                        Message
                    </h5>
                    <div class='card-body'>
                        <div class='table-responsive'>
                            <table class='table table-hover table-bordered'>
                                <tbody>
                                    <tr>
                                        <th scope='col' class='text-center table-light'>Name</th>
                                        <td class='text-center'>{{ $message->name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope='row' class='text-center table-light'>Email</th>
                                        <td class='text-center'>{{ $message->email }}</td>
                                    </tr>
                                    <tr>
                                        <th scope='row' class='text-center table-light'>Phone Number</th>
                                        <td class='text-center'>{{ $message->phone_number }}</td>
                                    </tr>
                                    <tr>
                                        <th scope='row' class='text-center table-light'>How did you hear about us?</th>
                                        <td class='text-center'>{{ $message->how_did_you_hear }}</td>
                                    </tr>
                                    <tr>
                                        <th scope='row' class='text-center table-light'>When are you looking to move?</th>
                                        <td class='text-center'>{{ $message->moving_date }}</td>
                                    </tr>
                                    <tr>
                                        <th scope='row' class='text-center table-light'>How much are you looking to spend?</th>
                                        <td class='text-center'>{{ $message->budget }}</td>
                                    </tr>
                                    <tr>
                                        <th scope='row' class='text-center table-light'>What style of apartment?</th>
                                        <td class='text-center'>{{ $message->rooms }}</td>
                                    </tr>
                                    <tr>
                                        <th scope='row' class='text-center table-light'>Do you have any pets?</th>
                                        <td class='text-center'>{{ $message->pets }}</td>
                                    </tr>
                                    <tr>
                                        <th scope='row' class='text-center table-light'>What GRC Apartments building are you interested in?</th>
                                        <td class='text-center'>{{ $message->building }}</td>
                                    </tr>
                                    <tr>
                                        <th scope='row' class='text-center table-light'>What kind of tour would you prefer?</th>
                                        <td class='text-center'>{{ $message->tour }}</td>
                                    </tr>
                                    <tr>
                                        <th scope='row' class='text-center table-light'>Comments</th>
                                        <td class='text-center'>
                                            {{ $message->comments }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class='card-footer'>
                        Pagination
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection