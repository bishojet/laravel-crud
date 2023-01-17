@extends('profiles.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-left">
                <h2>Edit Profile</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('profiles.index') }}"> Back</a>
            </div>

        </div>
    </div>

    @if ($errors->any())

        <div class="alert alert-danger pt-2">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif


    <form action="{{ route('profiles.update',$profile->id) }}" method="POST" enctype="multipart/form-data">

        @csrf

        @method('PUT')

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $profile->name }}" class="form-control" placeholder="Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" Email="email" value="{{ $profile->email }}" class="form-control" placeholder="Email">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone:</strong>
                    <input type="text" Phone="phone" value="{{ $profile->phone }}" class="form-control" placeholder="Phone">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" Address="address" value="{{ $profile->address }}" class="form-control" placeholder="Address">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/images/{{ $profile->image }}" width="300px">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </div>

    </form>

@endsection
