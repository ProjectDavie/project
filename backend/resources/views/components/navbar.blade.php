<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <button id="sidebarToggle" class="btn btn-outline-primary me-3">
            ☰
        </button>
        <a class="navbar-brand" href="{{ route('dashboard') }}">Dashboard</a>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleBtn = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');

        toggleBtn.addEventListener('click', () => {
            if(sidebar.style.width === '0px' || sidebar.style.width === '') {
                sidebar.style.width = '250px';
            } else {
                sidebar.style.width = '0px';
            }
        });
    });
</script>