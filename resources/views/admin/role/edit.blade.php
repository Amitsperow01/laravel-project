@extends('layouts.admin')

@section('content')
{{-- {{ $perName }} --}}
{{-- 

    // Use of toArray() function in php
@php
    $collection = collect(['name' => 'Desk', 'price' => 200]);
print_r($collection);
echo "<br><br>";
    $test = $collection->toArray();
    print_r($test);
@endphp --}}
<div class="col-md-12">
    <h1 class="page-head-line">Role List</h1>
    <span class="page-subhead-line"><strong><a href="{{ route('dashboard') }}">Dashboard</a> >> Role list</strong></span>
</div>

<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
      
        <div class="panel-body">
            <form action="{{ route('role.update', $roleData->id) }}" role="form" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Role Name</label>
                    <input class="form-control" type="text" name="role_name" value="{{ $roleData->name }}">
                </div>

                <div class="form-group">
                    <label>Permissions</label>
                    @forelse($permissions as $permission)
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="{{ $permission->name }}" name="permissions[]" {{ (in_array($permission->name, $perName) ? 'checked': '') }}>{{ $permission->name }}
                            </label>
                        </div>
                        @empty
                        <div class="checkbox">
                            No Permission found.
                        </div>
                    @endforelse
                </div>

                <button type="submit" class="btn btn-info">Update</button>

            </form>
        </div>
    </div>
</div>
@endsection