@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-head-line">Blog List</h1>
            <span class="page-subhead-line"><strong><a href="{{ route('dashboard') }}">Dashboard</a> >> Blog
                    List</strong></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="{{ route('blog.create') }}" class="btn btn-primary" style="margin-bottom:12px;">Add Blog</a>

                    <div class="table-responsive">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <table class="table table-striped table-bordered table-hover myTable display">
                            <thead>
                                <tr>
                                    <th>Sr.No.</th>
                                    <th>Title</th>
                                    <th>Heading</th>
                                    <th>Ordering</th>
                                    <th>Identifier</th>
                                    <th>Banner Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($blog as $_blog)
                                    <tr>
                                        <td>{{ $i++ . '.' }}</td>
                                        <td>{{ $_blog->title }}</td>
                                        <td>{{ $_blog->heading }}</td>
                                        <td>{{ $_blog->ordering }}</td>
                                        <td>{{ $_blog->identifier }}</td>
                                        <td><img src="{{$_blog->getFirstMediaUrl('image', 'thumb')}}"/  width="180px" height="120"></td>
                                        <td>{{ $_blog->status == 1 ? 'Enable' : 'Disable' }}</td>
                                        <td>
                                            <a href="{{ route('blog.edit', $_blog->id) }}" class="btn btn-primary"
                                                style="float:left;margin-right:4px;">Edit</a>
                                            <form action="{{ route('blog.destroy', $_blog->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td align="center" colspan="7">No Blog found</td>
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
