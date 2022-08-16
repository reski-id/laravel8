@extends('layouts.app')

@section('main')
<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input class="form-control" id="email" type='email' name="email" value="{{old('email')}}">
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input class="form-control" id="password" type='password' name="password" value="{{old('password')}}">
                    @error('password')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
