@extends('layouts.admin')

@section('content')
{{-- {{ $roles }} --}}
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line">Role List</h1>
        <span class="page-subhead-line"><strong><a href="{{ route('dashboard') }}">Dashboard</a> >> Role list</strong></span>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            
            <div class="panel-body">
                <a href="{{ route('role.create') }}" class="btn btn-primary" style="margin-bottom:12px;">Add Role</a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Sr.No.</th>
                                <th>Role Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @forelse($roles as $role)
                            <tr>
                                <td>{{ $i++ . '.' }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <a href="{{ route('role.edit', $role->id) }}" class="btn btn-primary" style="float:left;margin-right:4px;">Edit</a>
                                    <form action="{{ route('role.destroy', $role->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td align="center" colspan="3">No Role found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
