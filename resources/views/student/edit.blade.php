@extends('layouts.app')

@section('content')


<div class="row justify-content-center" style="margin-right: 200px;">
    <div class="col-md-8">
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="text-center">
                    <h4 class="text-blue h4 mb-3">{{ __('Edit Student') }}</h4>
                </div>
            </div>
            <form action="{{ route('student.update', $student->id) }}" method="post" enctype="multipart/form-data">
                @csrf

                @method('PATCH')

                <div class="row">
                    <div class="col-md-12">


                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">NAME</label>
                            <div class="col-sm-12 col-md-10">
                                <input id="name" name="name" class="form-control @error('name') is-invalid @enderror" type="text" value="{{ $student->name }}" required>
                                @error('name')
                                <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                            <div class="col-sm-12 col-md-10">
                                <input id="email" name="email" class="form-control @error('email') is-invalid @enderror" type="email" value="{{ $student->email }}" required>
                                @error('email')
                                <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Phone</label>
                            <div class="col-sm-12 col-md-10">
                                <input id="tel" name="tel" class="form-control @error('tel') is-invalid @enderror" type="text" value="{{ $student->tel }}" required>
                                @error('tel')
                                <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Save changes') }}
                            </button>
                        </div>

                        <div class="form-group">
                            <a href="{{ route('student.index') }}" class="btn btn-warning btn-block"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Cancel the update</a>
                        </div>

                    </div>

                </div>

            </form>
        </div>
    </div>
</div>




@endsection
