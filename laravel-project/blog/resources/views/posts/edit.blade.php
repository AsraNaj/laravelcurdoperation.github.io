@extends('layouts.app')
@section('content')
<div class="card card-default">
                <div class="card-header">Edit Posts</div>
                <div class="card-body">
                    <form action="/posts/{{$post->id}}/update" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input  class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
                            @if($errors->has('title'))
                            <p class="text-danger">{{$errors->first('title')}}</p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                             <textarea name="description" id="description" cols="5" rows="5"
                              class="form-control">{{$post->description}}</textarea>
                             @if($errors->has('description'))
                            <p class="text-danger">{{$errors->first('description')}}</p>
                            @endif
                            </div>
                           
                            <div class="mb-3">
                            <img src="{{asset('storage/'.$post->image)}}" width="100%" alt="">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input  class="form-control" type="file" name="image" id="image">
                            @if($errors->has('image'))
                            <p class="text-danger">{{$errors->first('image')}}</p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success">Update Posts</button>
                        </div>
                    </form>
                </div>
            </div>
@endsection