@extends ('layout')

@section ('content')
    <div class="mytopnav">
    <a class="navbar-brand" href="https://hz.nl/">
        <div class="logo-image">
            <img src="/images/hz.jfif" class="scale-down">
        </div>
    </a>
    <div class="mytopnav-right">
        <a href="/" class="{{ Request::path() === '/' ? 'active' : '' }}">Home</a>
        <a href="/myprofile" class="{{ Request::path() === '/myprofile' ? 'active' : '' }}">My profile</a>
        <a href="/dashboard">Dashboard</a>
        <a href="/faq">FAQ</a>
        <a href="/blog">Blog</a>
    </div>
    </div>
