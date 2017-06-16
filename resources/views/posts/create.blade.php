@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{{ url('/home') }}">Dashboard</a></li>
                <li><a href="{{ route('posts.index') }}">Posts</a></li>
                <li class="active">Tambah Posts</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Posts</div>
                <div class="panel-body">
                    {!! Form::open(['url' => route('posts.store'), 'method' => 'post', 'class'=>'form-horizontal']) !!}
                    @include('posts._form')
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
