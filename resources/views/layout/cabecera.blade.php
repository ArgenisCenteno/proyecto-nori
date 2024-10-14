

<nav class="app-header navbar bg-light navbar-expand bg-body"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i
                        class="bi bi-list"></i> </a> </li>
 
        </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->

            <!--begin::Messages Dropdown Menu-->

            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <i class="bi bi-bell-fill position-relative">
                        <span
                            class="navbar-badge badge text-bg-warning position-absolute top-0 start-100 translate-middle rounded-pill">{{ auth()->user()->unreadNotifications->count() }}</span>
                    </i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <span class="dropdown-item dropdown-header">{{ auth()->user()->unreadNotifications->count() }}
                        Notifications</span>

                    @foreach(auth()->user()->unreadNotifications as $notification)
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('notificaciones.show', $notification->id) }}" class="dropdown-item">
                            <i class="bi {{ $notification->data['icon'] ?? 'bi-bell' }} me-2"></i>
                            {{ $notification->data['message'] ?? 'Nueva notificación' }}
                            <span
                                class="float-end text-secondary fs-7">{{ $notification->created_at->diffForHumans() }}</span>
                        </a>
                    @endforeach

                    <div class="dropdown-divider"></div>
                    <a href="{{ route('notificaciones.index') }}" class="dropdown-item dropdown-footer">
                        Ver todas
                    </a>
                </div>
            </li>

            <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize"
                        class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit"
                        style="display: none;"></i> </a> </li> <!--end::Fullscreen Toggle-->
            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"> <span class="d-none d-md-inline">{{Auth::user()->name}}</span> </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                    <li class="user-header text-bg-primary">
                        <p>
                            {{Auth::user()->name}}
                            <small>{{Auth::user()->role}}</small>
                        </p>
                    </li> <!--end::User Image--> <!--begin::Menu Body-->

                    <li class="user-footer"> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            Salir
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li> <!--end::Menu Footer-->
                </ul>
            </li> <!--end::User Menu Dropdown-->
        </ul> <!--end::End Navbar Links-->
    </div> <!--end::Container-->
</nav> <!--end::Header--> <!--begin::Sidebar-->
@include('layout.script')
