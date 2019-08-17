@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Search Bar -->

    <div class="row justify-content-center text-center my-4">
        <div class="col-md-9">
            <form>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                <button type="submit" class="btn btn-outline-dark my-2">Search</button>   
            </form>
        </div>
    </div>

    <h3>Featured Medicines</h3>
      
        <div class="row">

        @foreach($medicines as $medicine)

      
            <div class="col-md-3">




                <div class="card-link">
                    <a href="#">
                        <div class="card my-3">
                            <div class="card-img">
                                <img class="card-img-top" src="{{asset('assets/entacyd.jpg')}}" alt="Card image cap">
                                <div class="med-details">500mg Tablet</div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-left">{{$medicine->med_name}}</h5>
                            </div>

                        </div>
                    </a>
                </div>
            </div>


            @endforeach


        </div>






</div>
@endsection


