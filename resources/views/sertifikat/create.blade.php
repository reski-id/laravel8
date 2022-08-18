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
            <form action="{{ url('sertifikat')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Nama Sertifikat</label>
                    <input class="form-control" id="name" name="name" type="text" value="{{old('name')}}">
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Dikeluarkan Oleh</label>
                    <input class="form-control" id="lembaga" name="lembaga" type="text"  value="{{old('lembaga')}}">
                    @error('lembaga')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal</label>
                    <input class="form-control" id="waktu" name="waktu" type="datetime-local" value="{{old('waktu')}}">
                    @error('waktu')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Berlaku Sampai</label>
                    <input class="form-control" id="sampai" name="sampai" type="datetime-local" value="{{old('sampai')}}">
                    @error('sampai')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Link</label>
                    <textarea class="form-control" id="link" name="link" rows="3" value="{{old('link')}}"></textarea>
                    @error('link')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
{{-- 'name'=>$request->name,
'lembaga'=>$request->lembaga,
'waktu'=>$request->waktu,
'sampai'=>$request->sampai,
'link'=>$request->link, --}}
