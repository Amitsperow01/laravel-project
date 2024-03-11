@extends('layouts.admin')

@section('content')
    <div class="col-md-12">
        <h1 class="page-head-line">User List</h1>
        <span class="page-subhead-line"><strong><a href="{{ route('dashboard') }}">Dashboard</a> >> User list</strong></span>
    </div>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <a href="{{ route('user.create') }}" class="btn btn-primary" style="margin-bottom:12px;">Add User</a>
                <div class="table-responsive">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Sr.No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @forelse ($user as $_user)
                                <tr>
                                    <td>{{ $i++ . '.' }}</td>
                                    <td><span class="label label-danger">{{ $_user->name }}</span></td>

                                    <td><span class="label label-info">{{ $_user->email }}</span></td>

                                    <td>
                                        <a href="{{ route('user.edit', $_user->id) }}" class="btn btn-primary"
                                            style="float:left;margin-right:4px;">Edit</a>
                                        <form action="{{ route('user.destroy', $_user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td align="center" colspan="4">No User found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
