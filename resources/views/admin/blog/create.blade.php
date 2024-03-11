@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-head-line">Blog Add</h1>
            <span class="page-subhead-line"><strong><a href="{{ route('dashboard') }}">Dashboard</a> >> Add
                    Blog</strong></span>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-info">
                <div class="panel-body">
                    <form role="form" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Enter Title</label>
                            <input class="form-control" type="text" name="title">
                        </div>
                        <div class="form-group">
                            <label>Enter Heading</label>
                            <input class="form-control" type="text" name="heading">
                        </div>

                        <div class="form-group">
                            <label>Enter Ordering</label>
                            <input class="form-control" type="number" name="ordering">
                        </div>

                        <div class="form-group">
                            <label>Enter Identifier</label>
                            <input class="form-control" type="text" name="identifier">
                        </div>

                        <div class="form-group">
                            <label>Select Status</label>
                            <select class="form-control" name="status">
                                <option value="">Select Status</option>
                                <option value="1">Enable</option>
                                <option value="2">Disable</option>
                            </select>
                        </div>
                        <div class="">
							<div class="fileupload fileupload-new" data-provides="fileupload">
								<div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
								<div>
									<span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>
									<input type="file" name="image"></span>
									<a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
								</div>
							</div>
						</div>  
                        <div class="form-group">
                            <label>Enter Description</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>

                        <button type="submit" class="btn btn-info">Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
