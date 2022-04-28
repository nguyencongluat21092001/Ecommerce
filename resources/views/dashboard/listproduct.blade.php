@extends('dashboard.layout.master')

@section('body')



<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" style="text-align: center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $item )
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->productcategory->name}}</td>
                        <td><img src="front/img/products/{{$item->post_image}}" width="50%"></td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->qty}}</td>
                        <td ><div  style="height:100%;display: flex;justify-content:center;">
                            <button class="btn btn-primary" type="submit" style="margin:85% 0;outline: none;"> <a style=" display:inline-block;"><i style="color: #fff"  class="far fa-edit "></i></a></button>
                        </div></td>
                            <td  style="height:100%;display: flex;justify-content:center;"><button type="button" class="btn btn-danger"  style="margin:80% 0; height:100%"> <a href=""><i  style="color: #fff" class="far fa-trash-alt"></i></button></td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
