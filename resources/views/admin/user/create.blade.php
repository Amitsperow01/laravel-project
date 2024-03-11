@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-head-line">Add User</h1>
            <span class="page-subhead-line"><strong><a href="{{ route('dashboard') }}">Dashboard</a> >> Add
                    User</strong></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <form action="{{ route('user.store') }}" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <label>Enter Name</label>
                            <input class="form-control" name="name" type="text">
                        </div>
                        <div class="form-group">
                            <label>Enter Email</label>
                            <input class="form-control" name="email" type="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" name="password" type="password">
                        </div>
                        <button type="submit" class="btn btn-info">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
