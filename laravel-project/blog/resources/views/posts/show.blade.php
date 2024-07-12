@extends('layouts.app')
@section('content')
<div class="card card-defualt">
    <div class="card-header">Detail</div>
    <div class="card-body">
        <h3>{{$post->title}}</h3>
        <p>
            {{$post->description}}
        </p>
        <img src="{{asset('storage/'.$post->image)}}" alt="" width="100%">
    </div>
</div>
@endsection