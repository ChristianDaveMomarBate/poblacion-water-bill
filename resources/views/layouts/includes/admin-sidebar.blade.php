<!-- Brand/LOGO -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
        {{-- <i class="fas fa-laugh-wink"></i> --}}
    </div>

    <div class="sidebar-brand-text mx-3">
        Water District
    </div>
</a>

<hr class="sidebar-divider my-0">

{{-- Dashboard --}}
<li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fa-solid fa-gauge-high"></i>
        <span>Dashboard</span>
    </a>
</li>

<hr class="sidebar-divider">

<div class="sidebar-heading">
    Account Info
</div>

{{-- Consumers --}}
<li class="nav-item {{ Request::is('admin/consumers') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('consumers.index') }}">
        <i class="fa-solid fa-user-check"></i>
        <span>Consumers</span>
    </a>
</li>

{{-- Billing --}}
<li class="nav-item {{ Request::is('admin/billings') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('billings.index') }}">
        <i class="fa-solid fa-money-bill"></i>
        <span>Billing</span>
    </a>
</li>

<hr class="sidebar-divider d-none d-md-block">

<div class="sidebar-heading">
    Records
</div>

{{-- Feedbacks --}}
<li class="nav-item {{ Request::is('admin/feedback') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('feedback.index') }}">
        <i class="fa-solid fa-comments"></i>
        <span>Feedbacks</span>
    </a>
</li>

<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
