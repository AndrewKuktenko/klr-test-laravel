<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('manager') }}">KOLORO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : null }}">
                    <a class="nav-link" href="{{ route('manager') }}">Manager Form
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('project') ? 'active' : null }}">
                    <a class="nav-link" href="{{ route('project') }}">Project Form</a>
                </li>
                <li class="nav-item {{ Request::is('project-list') ? 'active' : null }}">
                    <a class="nav-link" href="{{route('projectList')}}">Project List</a>
                </li>
                <li class="nav-item {{ Request::is('manager-list') ? 'active' : null }}">
                    <a class="nav-link" href="{{route('managerList')}}">Manager List</a>
                </li>
            </ul>
        </div>
    </div>
</nav>