@extends('profiles.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-left">
                <h2>Show Profile</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('profiles.index') }}"> Back</a>
            </div>

        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $profile->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $profile->email }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone:</strong>
                {{ $profile->phone }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                {{ $profile->address }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="/images/{{ $profile->image }}" width="500px">
            </div>
        </div>

    </div>

@endsection
