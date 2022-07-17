@extends('app')
@section('content')

<div class="row mt-4">
    <div class="col-md-6">
        <div class="wrapper text-center p-3" style="background-color:#8caca2;">
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
            @endif
            <form action="{{ route('register.action') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Name <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
                </div>
                <div class="mb-3">
                    <label>Username <span class="text-danger">*</span></label>
                    <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                </div>
                <div class="mb-3">
                    <label>Password <span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="password" />
                </div>
                <div class="mb-3">
                    <label>Password Confirmation<span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="password_confirm" />
                </div>
                <div class="mb-3 mt-4">
                    <button class="btn btn-dark - block">Register</button>
                    <a class="btn btn-dark - block" href="{{ route('home') }}">Back</a>
                </div>
            </form>
            <p class="mt-4 mb-3 text-muted">&copy; 2021–2022</p>
        </div>
    </div>
</div>
@endsection