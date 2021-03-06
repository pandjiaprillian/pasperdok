<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->nama }}</span>
                <img class="img-profile rounded-circle"
                    src="{{ asset('storage/uploads/image/' . (Auth::user()->doctor->photo ?? Auth::user()->nurse->photo ?? Auth::user()->admin->photo)) }}">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                @if (Auth::user()->hasRole('doctor'))
                <a href="{{ route('doctors.show', ['doctor' => Auth::user()->doctor->id]) }}"
                    class="dropdown-item px-3">Profile</a>
                @elseif (Auth::user()->hasRole('nurse'))
                <a href="{{ route('nurses.show', ['nurse' => Auth::user()->nurse->id]) }}"
                    class="dropdown-item px-3">Profile</a>
                @elseif (Auth::user()->hasRole('admin'))
                <a href="{{ route('admins.show', ['admin' => Auth::user()->admin->id]) }}"
                    class="dropdown-item px-3">Profile</a>
                @endif
                <a class="dropdown-item px-3" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"">
                    @csrf
                </form>
            </div>
        </li>

    </ul>

</nav>
