<div class='wrapper'>
    <div id='header-nav'>
        <div class='wrapper'>
            <nav class='navbar navbar-expand-lg fixed-top navbar-dark bg-gradient px-4'>
                <a href='/' class='navbar-brand py-0'>GRC Dashboard</a>
                <button class='navbar-toggler collapsed' type='button' data-toggle='collapse' data-target="#navBarMobileUser" aria-controls='navBarMobileUser' aria-expanded='false' aria-label='Toggle Account Pop Up'>
                    <i class='fas fa-user'></i>
                </button>
                <div class='navbar-collapse collapse' id='navBarMobileUser'>
                    <ul class='navbar-nav ml-auto navbar-right-top'>
                        <li class='nav-item'>
                            <div class='user-info'>
                                <h5 class='mb-0 user-name'>
                                    @guest
                                        Not signed in.
                                    @else
                                        {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                    @endguest
                                </h5>
                            </div>
                            <div class='user-status'>
                                <a
                                    href='{{ route('logout') }}'
                                    class='dropdown-item'
                                    onclick='event.preventDefault(); document.getElementById("logout-form").submit();'
                                >
                                    <i class='fas fa-power-off'></i>Logout
                                </a>
                            </div>
                            <form id='logout-form' action='{{ route('logout') }}' method='POST' class='d-none'>
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>