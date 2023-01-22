@extends('crud.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a href="{{ route('manage.blog')}}" class="btn btn-outline-danger mt-5">Manage Blog</a>
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Add Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('new.blog')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Blog Title</label>
                                <input type="text" name="blog_title" class="form-control" placeholder="Blog Title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Blog Category</label>
                                <input type="text" name="blog_category" class="form-control" placeholder="Blog Category">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Author Name</label>
                                <input type="text" name="author_name" class="form-control" placeholder="Author Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control"id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Image</label>
                                <input type="file" name="image">
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