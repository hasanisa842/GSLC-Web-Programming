@include('layouts.header')

    <div class="text-center mb-4">
        <h3>Your score says...</h3>
    </div>
    <div class="container d-flex justify-content-center">
        @if (($score >= 0) and ($score <= 50))
            <div>
                You didn't pass, that's okay! You can do better!
            </div>
        @else
            <div>
                Keep it up, you're doing great!
            </div>
        @endif
    </div>
@extends('layouts.footer')