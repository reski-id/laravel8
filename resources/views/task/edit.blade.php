@extends('layouts.app')

@section('main')
<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            <form action="#">
                <div class="mb-3">
                    <label for="" class="form-label">Edit</label>
                    <textarea class="form-control" id="" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
