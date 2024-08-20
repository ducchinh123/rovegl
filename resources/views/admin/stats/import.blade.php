@extends('admin.layouts.master')

@section('title')
    Import
@endsection

@section('content')
    <h2>Import Stats</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif

    @if (session()->has('ok'))
        <div class="alert alert-success">
            {{ session('ok') }}
        </div>
    @endif
    <form action="{{ route('admin.table.import', ['table' => 'stats']) }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="file_excel">File data excel</label>
            <input type="file" name="file_excel" id="file_excel" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection
