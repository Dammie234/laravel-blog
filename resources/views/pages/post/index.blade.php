@extends('layouts.app')

@section('content')
@include('includes.header')      
       
<div class="app-main">
    @include('includes.sidebar')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                        </div>
                        <div>Posts
                            <div class="page-title-subheading">Choose between regular React Bootstrap tables or advanced dynamic ones.</div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                        <div class="d-inline-block dropdown">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                    </div>    
                </div>
            </div>            
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Posted By</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td><img src="{{'images/' . $post->image}}" height="50" alt=""></td>
                                    <td>{{$post->name}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{date('jS F Y H:i:s a', strtotime($post->created_at))}}</td>
                                    <td>{{$post->user_name}}</td>
                                    <td>
                                        @if($post->user_id == Auth::user()->id)
                                        <a href="{{ route('post.edit', [$post->slug]) }}" class="btn btn-primary mr-2">Edit</a>
                                        <a onclick="return confirm('Are you sure?')"  href="{{ route('post.destroy', [$post->id]) }}" class="btn btn-danger mr-2">Delete</a>
                                        @endif
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Posted By</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        @include('includes.footer')    
    </div>
</div>



@endsection
