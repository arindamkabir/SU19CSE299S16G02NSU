@extends('layouts.admin')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between">
        <h4 class="admin-heading"><i class="fas fa-pills"></i> Medicines</h4>

        <div class="admin-add-btn"><a href="{{route('medicine.create')}}"><button class="btn btn-primary ">Add New Medicine</button></a></div>
    </div>


    <table class="mt-4 table table-striped table-bordered table-hover">
        <thead class="thead-dark">
            <tr class="">
            <th scope="col">#</th>
            <th scope="col">Medicine Name</th>
            <th scope="col">In Stock</th>
            <th scope="col">Price</th>
            <th scope="col">Added</th>
            <th scope="col">Updated</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($medicines as $medicine)
                <tr>
                <th scope="row">{{$medicine->med_id}}</th>
                <td>{{$medicine->med_name}}</td>
                <td>{{$medicine->med_stock}}</td>
                <td>{{$medicine->med_price}}</td>
                <td>{{$medicine->created_at}}</td>
                <td>{{$medicine->updated_at}}</td>
                <td>
                <form action="{{route('medicine.destroy', ['id' => $medicine->med_id])}}" method="DELETE">
                <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
                </td>
                <td>
                <form action="{{route('medicine.edit', ['id' => $medicine->med_id])}}" method="GET">
                <button type="submit" class="btn btn-info">EDIT</button>
                </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</div>
@endsection