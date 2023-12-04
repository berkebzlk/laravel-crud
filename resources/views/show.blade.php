@extends('layouts.master')

@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Show post</h4>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a href="{{ route('posts.create') }}" class="btn btn-success mx-1">Create</a>
                        <a class="btn btn-warning mx-1">Trashed</a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped table-bordered border-dark">

                    <tbody>

                        {{-- <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>
                                <img src="{{ asset($post->image) }}" alt="" width="80">
                            </td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->category_id }}</td>
                            <td>{{ date('d-m-Y', strtotime($post->created_at)) }}</td>
                            <td>
                                <a class="btn-sm btn-success">Show</a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn-sm btn-primary">Edit</a>
                                <a class="btn-sm btn-danger">Delete</a>
                            </td>

                        </tr> --}}

                        <tr>
                            <td>Id</td>
                            <td>{{ $post->id }}</td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td><img width="300" src="{{ asset($post->image) }}" /></td>
                        </tr>
                        <tr>
                            <td>Title</td>
                            <td>{{ $post->title }}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{ $post->description }}</td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>{{ $post->category_id }}</td>
                        </tr>
                        <tr>
                            <td>Publicsh Date</td>
                            <td>{{ date('d-m-Y', strtotime($post->created_at)) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
