<div id="sidebar" class="bg-secondary text-white d-flex flex-column flex-shrink-0 p-3" style="width:250px; transition: width 0.3s; height: 100vh;">
    <!-- Brand / Company Name -->
    <h4 class="mb-4 text-warning fw-bold">Dave Properties</h4>

    <!-- Navigation Links -->
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item mb-2">
            <a href="{{ route('dashboard') }}" class="nav-link text-white">Dashboard</a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('profile.edit') }}" class="nav-link text-white">Profile</a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('properties.index') }}" class="nav-link text-white">Properties</a>
        </li>
        <li class="nav-item mt-auto">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger w-100">Logout</button>
            </form>
        </li>
    </ul>
</div>