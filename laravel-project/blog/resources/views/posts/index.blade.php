@extends('layouts.app')
@section('content')
<div class="card card-default">
                <div class="card-header">Posts</div>
                <div class="card-body">
                    @if($posts->count()>0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>
                                    <img src="{{asset('storage/'.$post->image)}}" alt=""
                                    width="50px" height="50px">
                                </td>
                                <td>{{$post->title}}</td>
                                <td>
                                    <a href="/posts/{{$post->id}}/show" class="btn btn-primary btn-sm">View</a>
                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-info btn-sm text-white">Edit</a>
                                    <form  class ="d-inline"action="/posts/{{$post->id}}/delete" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <h3 class="text-center">No Posts yet</h3>
                    @endif
                    
                </div>
            </div>
@endsection
            