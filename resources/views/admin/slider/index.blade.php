@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-head-line">Slider List</h1>
            <span class="page-subhead-line"><strong><a href="{{ route('dashboard') }}">Dashboard</a> >> Slider
                    List</strong></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="{{ route('slider.create') }}" class="btn btn-primary" style="margin-bottom:12px;">Add Slider</a>

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
                                    <th>Ordering</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($slider as $_slider)
                                    <tr>
                                        <td>{{ $i++ . '.' }}</td>
                                        <td>{{ $_slider->title }}</td>
                                        <td>{{ $_slider->ordering }}</td>
                                        <td>{{ $_slider->status == 1 ? 'Enable' : 'Disable' }}</td>
                                        <td><img src="{{$_slider->getFirstMediaUrl('image', 'thumb')}}"/  width="180px" height="120"></td>
                                        <td>
                                            <a href="{{ route('slider.edit', $_slider->id) }}" class="btn btn-primary"
                                                style="float:left;margin-right:4px;">Edit</a>
                                            <form action="{{ route('slider.destroy', $_slider->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td align="center" colspan="5">No Slider found</td>
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
