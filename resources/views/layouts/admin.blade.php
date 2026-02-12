@extends('layouts.main')

@section('title')
<h2>This is an admin section</h2>
@yield('admin-title')
@endsection

@section('content');
    <h3>Admin Content</h3>
    @yield('admin-content')
@endsection