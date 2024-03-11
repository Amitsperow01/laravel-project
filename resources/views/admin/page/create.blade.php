@extends('layouts.admin')

@section('content')

	<div class="row">
		<div class="col-md-12">
			<h1 class="page-head-line">Page Add</h1>
            <span class="page-subhead-line"><strong><a href="{{route('dashboard')}}">Dashboard</a> >> Add Page </strong></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<form role="form" action="{{route('page.store')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label>Enter Title</label>
							<input class="form-control" type="text" name="title" value="{{old('title')}}">
							{{-- <p class="help-block" style="color:red;">
								@error('status')
									{{$message}}
								@enderror
							</p> --}}
						</div>
						<div class="form-group">
							<label>Enter Heading</label>
							<input class="form-control" type="text" name="heading" value="{{old('heading')}}">
						</div>
						<div class="form-group">
							<label>Enter Ordering</label>
							<input class="form-control" type="number" name="ordering" value="{{old('ordering')}}">
						</div>
						<div class="form-group">
							<label>Select Status</label>
							<select class="form-control" name="status">
								<option value="" selected disabled>Select Status</option>
								<option value="1" {{(old('status')=='1')?'selected':""}}>Enable</option>
								<option value="1" {{(old('status')=='2')?'selected':""}}>Disable</option>
							</select>
						</div>
						<div class="form-group">
							<label>Enter URL Key</label>
							<input class="form-control" type="text" name="url_key" value="{{old('url_key')}}">
						</div>
						<div class="form-group">
							<label>Enter Description</label>
							<textarea class="form-control" name="description">{{old('description')}}</textarea>
						</div>
						<div class="">
							<div class="fileupload fileupload-new" data-provides="fileupload">
								<div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
								<div>
									<span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>
									<input type="file" name="image" value="{{old('image')}}"></span>
									<a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-info">Save</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection