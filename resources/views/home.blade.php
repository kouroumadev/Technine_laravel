@extends('layouts.app')

@section('content')

<div class="card-box pd-20 height-100-p mb-30" style="margin-right: 200px;">
    <div class="row align-items-center">
        <div class="col-md-4">
            <img src="{{ asset('theme/vendors/images/banner-img.png') }}" alt="">
        </div>
        <div class="col-md-8">
            <h4 class="font-20 weight-500 mb-10 text-capitalize">
                Welcome back,
                <div class="weight-600 font-30 text-blue">{{ auth()->user()->name }}!</div>
            </h4>
            <p class="font-18 max-width-600">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Minus officia harum odit illum nisi pariatur architecto.
                 Mollitia voluptatum voluptate id totam officia, magnam esse!
                 Odit soluta ut dicta delectus officia?</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-xl-4 mb-30">
            <a href="{{ route('student.index') }}" class="btn btn-primary btn-block p-3">
                <h3 class="text-white">List of Students</h3>
            </a>
        </div>
        <div class="col-xl-4 mb-30">
            <a href="{{ route('student.create') }}" class="btn btn-info btn-block p-3">
                <h3 class="text-white">Add New Student</h3>
            </a>
        </div>
        <div class="col-xl-4 mb-30">
            <a href="{{ route('logout') }}" class="btn btn-danger btn-block p-3"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <h3 class="text-white">Logout</h3>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</div>



@endsection
