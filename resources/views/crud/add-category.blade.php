@extends('crud.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a href="{{ route('manage.blog')}}" class="btn btn-outline-danger mt-5">Manage Blog</a>
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Add Category Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('new.category')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Category Name</label>
                                <input type="text" name="category_name" class="form-control" placeholder="Category Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <input type="radio" name="status" value="1"> Published
                                <input type="radio" name="status" value="0"> Unpublished
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary form-control" value="submit">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection