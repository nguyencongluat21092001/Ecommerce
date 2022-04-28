@extends('dashboard.layout.master')

@section('body')


  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm huấn luyện viên</h6>
        </div>

        <div class="card-body">
            {{-- <form action="{{ route('addproduct') }}" method="POST" enctype="multipart/form-data"> --}}


            <form action="{{ route('store.blog')}}" method="POST" enctype="multipart/form-data" class="user">
                @method("POST")
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        name="title" aria-describedby="name"
                        placeholder="title">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        name="user_id" aria-describedby="price"
                        placeholder="user_id">
                </div>
                <div class="form-group">
                    <input type="file" class="form-control form-control-user"
                        name="image" aria-describedby="price"
                        placeholder="Image">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        name="category" aria-describedby="price"
                        placeholder="category">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        name="content" aria-describedby="price"
                        placeholder="content">
                </div>
                <div class="flex justify-center">
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Create</button>
                </div>

            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection
