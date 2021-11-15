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
                        <div>Categories
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
                            <th>Name</th>
                            <th>Description</th>
                            <th>Slug</th>
                            <th>Count</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>
                                @if(!empty($category->description))
                                    {{$category->description}}
                                @else
                                    -
                                @endif
                            </td>
                            <td>{{$category->slug}}</td>
                            <td>{{$category->count}}</td>
                            <td>{{date('jS F Y H:i:s a', strtotime($category->created_at))}}</td>
                            <td>
                                <a href="{{ route('category.edit', [$category->slug]) }}" class="btn btn-primary mr-2">Edit</a>
                                <a onclick="return confirm('Are you sure?')"  href="{{ route('category.destroy', [$category->id]) }}" class="btn btn-danger mr-2">Delete</a>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Slug</th>
                            <th>Count</th>
                            <th>Date</th>
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
