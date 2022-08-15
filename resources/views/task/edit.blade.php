@extends('layouts.app')

@section('main')
<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="card-body">
            <form action="{{url("/task/$tasklist->id")}}"  method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Edit </label>
                    <textarea class="form-control" id="task" name="task" rows="3">{{$tasklist->task}}</textarea>
                    @error('task')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
