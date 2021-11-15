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
                        <div>Add Post
                            <div class="page-title-subheading">Choose between regular React Bootstrap tables or advanced dynamic ones.</div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                        <button type="button" data-toggle="tooltip" title="" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark" data-original-title="Example Tooltip">
                            <i class="fa fa-star"></i>
                        </button>
                        <div class="d-inline-block dropdown">
                           
                        </div>
                    </div>    
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Add Post</h5>
                            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="position-relative form-group">
                                    <label for="exampleCategory" class="">Category</label>
                                    <select  id="exampleCategory" placeholder="Category here..." class="form-control @error('category') is-invalid @enderror" name="category"  required>
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleTitle" class="">Title</label>
                                    <input  id="exampleTitle" placeholder="Title here..." type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleDescription" class="">Description</label>
                                    <textarea  id="summernote" placeholder="Description here..." class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"></textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleImage" class="">Image</label>
                                    <input  id="exampleImage" placeholder="Image here..." type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="mt-1 btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>            
            
        </div>
        @include('includes.footer')    
    </div>
</div>



@endsection
