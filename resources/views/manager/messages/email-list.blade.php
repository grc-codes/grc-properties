@extends('layouts.manager')

@section('content')
<section id='messages'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-12'>
                <div class='messages-header'>
                    <h2>Email List</h2>
                    <nav aria-label='breadcrumb'>
                        <ol class='breadcrumb'>
                            <li class='breadcrumb-item'>
                                <a href='/manager' class='breadcrumb-link'>Dashboard</a>
                            </li>
                            <li class='breadcrumb-item active' aria-current='page'>
                                Email List
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
                        Email List
                    </h5>
                    <div class='card-body'>
                        <div class='table-responsive'>
                            <table class='table table-hover table-bordered'>
                                <thead class='table-dark'>
                                    <tr>
                                        <th scope='col' class='text-center'>Name</th>
                                        <th scope='col' class='text-center'>Email</th>
                                        <th scope='col' class='text-center'>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($subscriptions as $subscription)
                                        <tr>
                                            <th scope='row' class='text-center'>{{ $subscription->name }}</th>
                                            <td class='text-center'>{{ $subscription->email }}</td>
                                            <td class='text-center'>
                                                <a href='/manager/email-list/{{ $subscription->id }}/delete'>
                                                    <i class='fas fa-trash-alt'></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class='card-footer'>
                        {{ $subscriptions->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection