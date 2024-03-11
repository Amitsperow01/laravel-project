@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <h1 class="page-head-line">Role List</h1>
    <span class="page-subhead-line"><strong><a href="{{ route('dashboard') }}">Dashboard</a> >> Role list</strong></span>
</div>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="panel panel-info">
            
            <div class="panel-body">
                <form action="{{ route('role.store') }}" role="form" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Role Name</label>
                        <input class="form-control" type="text" name="role_name">
                    </div>
                    <div class="form-group">
                        <label>Permissions</label>
                        @forelse($permissions as $_permission)
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="{{ $_permission->name }}"
                                        name="permissions[]">{{ $_permission->name }}
                                </label>
                            </div>
                        @empty
                            <div class="checkbox">
                                No Permission found.
                            </div>
                        @endforelse

                    </div>
                    <button type="submit" class="btn btn-info">Save</button>

                </form>
            </div>
        </div>
    </div>
@endsection
