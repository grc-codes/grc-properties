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
                            <li class='breadcrumb-item active' aria-current='page'>
                                Messages
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
                        Inbox
                    </h5>
                    <div class='card-body'>
                        <div class='table-responsive'>
                            <table class='table table-hover table-bordered'>
                                <thead class='table-dark'>
                                    <tr>
                                        <th scope='col' class='text-center'>Name</th>
                                        <th scope='col' class='text-center'>Email</th>
                                        <th scope='col' class='text-center'>Phone Number</th>
                                        <th scope='col' class='text-center'>Open Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(range(0,20) as $idx)
                                        <tr>
                                            <th scope='row' class='text-center'>John Doe</th>
                                            <td class='text-center'>jdoe@gmail.com</td>
                                            <td class='text-center'>917-123-4567</td>
                                            <td class='text-center'>
                                                <a href='/manager/messages/1'>
                                                    <i class='fas fa-envelope'></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
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