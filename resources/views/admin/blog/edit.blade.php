@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-head-line">Edit Blog </h1>
            <span class="page-subhead-line"><strong><a href="{{ route('dashboard') }}">Dashboard</a> >> Edit
                    Blog</strong></span>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-info">
                <div class="panel-body">
                    <form role="form" action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Enter Title</label>
                            <input class="form-control" type="text" name="title" value="{{ $blog->title }}">
                        </div>
                        <div class="form-group">
                            <label>Enter Heading</label>
                            <input class="form-control" type="text" name="heading" value="{{ $blog->heading }}">
                        </div>

                        <div class="form-group">
                            <label>Enter Ordering</label>
                            <input class="form-control" type="number" name="ordering" value="{{ $blog->ordering }}">
                        </div>


                        <div class="form-group">
                            <label>Enter Identifier</label>
                            <input class="form-control" type="text" name="identifier" value="{{ $blog->identifier }}">
                        </div>

                        <div class="form-group">
                            <label>Select Status</label>
                            <select class="form-control" name="status">
                                <option value="">Select Status</option>
                                <option value="1"{{ $blog->status == '1' ? 'selected' : '' }}>Enable</option>
                                <option value="2"{{ $blog->status == '2' ? 'selected' : '' }}>Disable</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4">Image Upload</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"><img src="{{$blog->getFirstMediaUrl('image')}}" alt=""></div>
                                    <div>
                                        <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>
                                        <input type="file" name="image" value="{{$blog->getFirstMediaUrl('image')}}"></span>
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Enter Description</label>
                            <textarea class="form-control" name="description">{{ $blog->description }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-info">Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
