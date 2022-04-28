@extends('dashboard.layout.master')

@section('body')



<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" style="text-align: center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Content</th>
                        <th>created_at</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $item )
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td><img src="storage/images/blog/{{$item->image}}" width="50%"></td>
                        <td>{{$item->category}}</td>
                        <td>{{$item->content}}</td>
                        <td>{{$item->created_at}}</td>
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
