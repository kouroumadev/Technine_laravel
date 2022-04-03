@extends('layouts.app')

@section('content')


<div class="row justify-content-center mt-5">
    <div class="col-md-10">
        <div class="card-box mb-30">
            <div class="pd-20 text-center">
                <h2 class="text-blue text-left h4">
                    <a href={{ route('home') }}>
                        <i class="fa fa-arrow-circle-left text-blue" aria-hidden="true"></i>
                    </a>

                </h2>
                <h4 class="text-blue text-center h4">List Of All Students</h4>
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
                <br>

            </div>


            <div class="pb-20">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">Email</th>
                            <th scope="col" class="text-center">Phone</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($studs as $stud)
                        <tr>
                            <td class="text-center">{{ $stud->name }}</td>
                            <td class="text-center">{{ $stud->email }}</td>
                            <td class="text-center">{{ $stud->tel }}</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

                                        <a class="dropdown-item" href="{{ route('student.edit', $stud->id ) }}"><i class="dw dw-edit2"></i> Edit</a>
                                        <button type="submit" class="dropdown-item" href="{{ route('student.destroy',$stud->id ) }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('student-form.{{ $stud->id }}').submit(); ">
                                                <i class="dw dw-delete-3"></i> Delete</button>

                                            <form id="student-form.{{ $stud->id }}" action="{{ route('student.destroy',$stud->id ) }}" method="POST" class="d-none">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        {{ $studs->links() }}
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>

@endsection
