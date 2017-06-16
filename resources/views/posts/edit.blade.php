@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{{ url('/home') }}">Dashboard</a></li>
                <li><a href="{{ route('posts.index') }}">Posts</a></li>
                <li class="active">Edit Posts</li>
            </ul>

            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>
                <div class="panel-body">
                {!! Form::model($posts, ['url' => route('posts.update', $posts->id),
                'method' => 'put', 'class'=>'form-horizontal']) !!}
                @include('posts._edit')
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@include('posts._scripts')
@endsection
