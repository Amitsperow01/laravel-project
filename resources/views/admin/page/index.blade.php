@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-head-line">Page List</h1>
            <span class="page-subhead-line"><strong><a href="{{ route('dashboard') }}">Dashboard</a> >> Page
                    List</strong></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="{{ route('page.create') }}" class="btn btn-primary" style="margin-bottom:12px;">Add Page</a>
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
                                    <th>Status</th>
                                    <th>URL Key</th>
                                    <th>Banner Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($page as $_page)
                                    <tr>
                                        <td>{{ $i++ . '.' }}</td>
                                        <td>{{ $_page->title }}</td>
                                        <td>{{ $_page->heading }}</td>
                                        <td>{{ $_page->ordering }}</td>
                                        <td>{{ $_page->status == 1 ? 'Enable' : 'Disable' }}</td>
                                        <td>{{ $_page->url_key }}</td>
                                        <td><img src="{{$_page->getFirstMediaUrl('image', 'thumb')}}"/  width="180px" height="120"></td>
                                        <td>
                                            <a href="{{ route('page.edit', $_page->id) }}" class="btn btn-primary"
                                                style="float:left;margin-right:4px;">Edit</a>
                                            <form action="{{ route('page.destroy', $_page->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td align="center" colspan="7">No Page found</td>
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
