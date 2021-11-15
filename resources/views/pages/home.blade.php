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
                            <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
                        </div>
                        <div>Dashboard
                            <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                        <div class="d-inline-block dropdown">
                            
                        </div>
                    </div>    
                </div>
            </div>        
            
            <div class="tabs-animation">
              
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="mb-3 card">
                            <div class="card-header-tab card-header">
                                <div>Posts</div>
                                <div class="btn-actions-pane-right">
                                    <div role="group" class="btn-group-sm btn-group">
                                        <button class="btn-shadow  btn btn-dark">Refresh</button>
                                        <button type="button" class="btn-shadow  btn btn-dark">Remove</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table style="width: 100%;" id="example2"
                                    class="table table-hover table-striped table-bordered">
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
                </div>
                
                
            </div>
        </div>
        @include('includes.footer')
    </div>
</div>
</div>



@endsection
