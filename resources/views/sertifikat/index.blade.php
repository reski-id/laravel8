@extends('layouts.app')

@section('main')
<div class="border rounded my-5 mx-auto d-flex flex-column align-items-stretch bg-white" style="width: 380px;">
    <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
        <span class="fs-5 fw-semibold">Daftar Sertifikat {{$data->total()}}</span>
        <a href="{{url('/todo/create')}}" class="btn btn-sm btn-primary">add</a>
    </div>
    @foreach ($data as $item)
    <div class="list-group list-group-flush border-bottom scrollarea">
        <div class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
            <div class="d-flex w-100">
                <strong class="mb-1">{{$item->name}}</strong> <br>
                <span class="mb-1">{{$item->lembaga}}</span> <br>
                <span class="mb-1">{{$item->waktu}}</span> <br>
            </div>
            <div class="group-action">
                <form action="{{url("/sertifikat/$item->id")}}" method='POST'>
                    @csrf @method('DELETE')
                    <a href="{{url("/sertifikat/$item->id/edit")}}" class="badge bg-info text-white">edit</a>
                    <button type="submit" class="badge bg-danger text-white">delete</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    <br>
    {{$data->links('pagination::bootstrap-4')}}
</div>
@endsection
