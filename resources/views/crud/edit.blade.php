@extends('crud.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a href="{{ route('manage.blog')}}" class="btn btn-outline-danger mt-5">Manage Blog</a>
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Edit Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.blog')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Blog Title</label>
                                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                <input type="text" name="blog_title" class="form-control" value="{{ $blog->blog_title }}" placeholder="Blog Title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Blog Category</label>
                                <input type="text" name="blog_category" class="form-control" value="{{ $blog->blog_category }}" placeholder="Blog Category">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Author Name</label>
                                <input type="text" name="author_name" class="form-control" value="{{ $blog->author_name }}" placeholder="Author Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control"id=""  cols="30" rows="10">{{ $blog->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{ asset($blog->image) }}" alt="" class="img-fluid h-25 w-25 mt-2">
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
