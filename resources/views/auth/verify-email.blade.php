@extends('layouts.app')

@section('main')
<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success">
                A fresh verification link has been send to your email
            </div>
            @endif
                Before proceeding, please check your email for verification link
                or
                <form class="d-inline" action="{{route('verification.send')}}" method="post">
                    @csrf
                    <button class="btn btn-link p-0 m-0 align-baseline" type="submit">{{__('click here to request another verification link')}}</button>
                </form>
        </div>
    </div>
</div>
@endsection
