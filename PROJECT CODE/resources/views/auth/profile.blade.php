@extends('layouts.app')

@section('content')

<!-- <form class="was-validated" action="{{route('profile.update')}}" enctype="multipart/form-data" method="POST">

@csrf
    <div class="custom-file">
        <input type="file" name="profile_picture" class="custom-file-input" id="validatedCustomFile" required>
        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>
    </div>

<button class="btn btn-primary" type="submit">Upload</button>
</form> -->

<div class="row profile">

    <div class="p-0 m-0 profile-picture" style="background: url({{url('assets/bg-1.jpg')}})">

            <div class="picture d-flex justify-content-center">
                <img src="{{url('assets/profile.jpg')}}" width="30%" alt="" class="align-self-center">
            </div>

    </div>

    <div class="col profile-details">
    
    </div>

</div>





@endsection