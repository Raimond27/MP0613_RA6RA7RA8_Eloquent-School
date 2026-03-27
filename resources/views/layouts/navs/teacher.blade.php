<li class="nav-item">
    <a href="{{ url('teacher/dashboard') }}" class="nav-link @if (Request::segment(2) == 'dashboard') active @endif">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('teacher/subject/list') }}" class="nav-link @if (Request::segment(2) == 'subject') active @endif">
        <i class="nav-icon fas fa-book"></i>
        <p>Subject</p>
    </a>
</li>
