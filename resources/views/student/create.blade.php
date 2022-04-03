@extends('layouts.app')

@section('content')


<div class="row justify-content-center mt-5" style="margin-right: 200px;">
    <div class="col-md-8">
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="text-center">
                    <h4 class="text-blue h4 mb-3">{{ __('Add New Student') }}</h4>
                    @if (session('yes'))
                    <div class="alert alert-success" role="alert">
                        {{ session('yes') }}
                    </div>
                    @endif
                    @if (session('no'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('no') }}
                        </div>
                    @endif
                </div>
            </div>
            <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-12">

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">NAME</label>
                            <div class="col-sm-12 col-md-10">
                                <input id="name" name="name" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Enter your name" required>
                                @error('name')
                                <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                            <div class="col-sm-12 col-md-10">
                                <input id="email" name="email" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="example@.....com" required>
                                @error('email')
                                <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Phone</label>
                            <div class="col-sm-12 col-md-10">
                                <input id="tel" name="tel" class="form-control @error('tel') is-invalid @enderror" type="text" placeholder="86......85" required>
                                @error('tel')
                                <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block float-right">
                                {{ __('Add new student') }}
                            </button>
                        </div>

                        <div class="row" >
                            <div class="col-md-12">
                                <div class="form-group mt-3">
                                    <a href="{{ route('home') }}" class="btn btn-warning btn-block"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Go to dashboard</a>
                                </div>
                            </div>
                        </div>



                    </div>

                </div>
            </form>
        </div>
    </div>
</div>




@endsection
