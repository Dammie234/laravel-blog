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
                        <div>Edit Category
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
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Category</h5>
                            <form action="{{ route('category.update', [$category->id]) }}" method="post">
                                @csrf
                                <div class="position-relative form-group">
                                    <label for="exampleName" class="">Name</label>
                                    <input  id="exampleName" placeholder="Name here..." type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $category->name }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleDescription" class="">Description</label>
                                    <textarea  id="exampleDescription" placeholder="Description here..." class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $category->description }}"></textarea>
                                    @error('description')
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
