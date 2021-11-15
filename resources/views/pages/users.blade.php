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
                        <div>Users
                            <div class="page-title-subheading">Choose between regular React Bootstrap tables or advanced dynamic ones.</div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                        
                    </div>    
                </div>
            </div>            
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email Address</th>
                            
                            <th>Date</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            
                            <td>{{date('jS F Y H:i:s a', strtotime($user->created_at))}}</td>
                            
                        </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email Address</th>
                            
                            <th>Date</th>
                            
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
