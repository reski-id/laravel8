@extends('layouts.app')

@section('main')
<div class="border rounded my-5 mx-auto d-flex flex-column align-items-stretch bg-white" style="width: 380px;">
    <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
        <span class="fs-5 fw-semibold">Task Lists</span>
        <span class="btn btn-sm btn-primary">add</span>
    </div>
    @foreach ($data as $item)
    <div class="list-group list-group-flush border-bottom scrollarea">
        <div class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
            <div class="d-flex w-100 align-items-center justify-content-between">
                <strong class="mb-1">{{$item->task}}</strong>
            </div>
            <div class="group-action">
                <a href="#" class="badge bg-info text-white">edit</a>
                <a href="#" class="badge bg-danger text-white">delete</a>
            </div>
        </div>
    </div>
    @endforeach
    <br>
    {{$data->links('pagination::bootstrap-4')}}
</div>
@endsection
