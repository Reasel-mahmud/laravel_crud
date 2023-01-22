@extends('crud.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a href="{{ route('home') }}" class="btn btn-outline-success mt-5">Home</a>
                {{-- <a href="{{ route('manage.blog') }}" class="btn btn-outline-danger mt-5">Manage Blog</a> --}}
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Add Form</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover text-center table-responsive-md">
                            <tr>
                                <th>sl</th>
                                <th>Blog Title</th>
                                <th>Blog Category</th>
                                <th>Author Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td>{{ $blog->blog_title }}</td>
                                <td>{{ $blog->blog_category }}</td>
                                <td>{{ $blog->author_name }}</td>
                                <td>{{ $blog->description }}</td>
                                <td>
                                    <img src="{{ asset($blog->image) }}" width="100" height="100" alt="image">
                                </td>
                                <td class="w-20">
                                    <a href="{{ route('edit',['id'=>$blog->id]) }}"class='btn btn-primary'>Edit</a>
                                    <!-- <a href="{{ route('delete',['id'=>$blog->id]) }}" onclick="return confirm('Are you sure, You want to delete this?')"class='btn btn-danger'>Delete</a> -->
                                    <!-- <a href=""class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete').submit()">Delete</a> -->
                                    <form action="{{ route('delete')}}" id="delete" method="post">
                                        @csrf
                                        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                        <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure, You want to delete this?')">
                                    </form>
                                </td>
                                
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
