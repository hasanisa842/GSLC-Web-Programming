@include('layouts.header')
<div class="d-flex justify-content-center">
    <a href="scoretalker">
        <button type="button" class="btn btn-primary">What your score says about you</button>
    </a>
</div>
<br>
<div class="d-flex justify-content-center">
    @yield('quote')
</div>
@extends('layouts.footer')