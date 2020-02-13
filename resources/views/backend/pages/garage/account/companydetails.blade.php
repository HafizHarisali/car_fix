@extends('backend.layout.master')
@section('backend-content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-2">
			
		</div>
		<div class="col-lg-8">
			@if($errors->any())   	
	      	<div class="alert alert-danger alert-mg-b alert-success-style4 alert-success-stylenone">
                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
					<span class="icon-sc-cl" aria-hidden="true">&times;</span>
				</button>
                @foreach ($errors->all() as $error)
                <p class="message-alert-none">{{ $error }}</p>
	  			@endforeach
            </div>
			@endif
		</div>
		<div class="col-lg-2">
			
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        <div class="sparkline12-list">
	            <div class="sparkline12-hd">
	                <div class="main-sparkline12-hd">
	                    <h1>Company Images</h1>
	                    <div class="dropzone-pro mg-tb-30">
                            <div id="dropzone1" class="multi-uploader-cs">
                                <form action="{{ route('upload-images') }}" class="dropzone dropzone-custom needsclick" id="dropzone" enctype="multipart/form-data">
                                	@csrf
                                    <div class="dz-message needsclick download-custom">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        <h2>Drop files here or click to upload.</h2>
                                        <p><span class="note needsclick"></span>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px;">
	        <div class="sparkline12-list">
	            <div class="sparkline12-hd">
	                <div class="main-sparkline12-hd">
	                    <h1>Company Details</h1>
	                </div>
	            </div>
	            <div class="sparkline12-graph">
	                <div class="basic-login-form-ad">
	                    <div class="row">
	                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                            <div class="all-form-element-inner">
	                                <form action="{{ route('update-company-details') }}" method="post">
	                                	@csrf
	                                    <div class="form-group-inner">
	                                        <div class="row">
	                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                                                <label class="login2 pull-right pull-right-pro">Garage Name <span class="text-danger">*</span></label>
	                                            </div>
	                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
	                                                <input type="text" class="form-control" name="name" value="{{ old('name') ? old('name') : $query->name ?? ''  }}">
	                                            </div>
	                                        </div>
	                                        <div class="row" style="margin-top: 20px;">
	                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                                                <label class="login2 pull-right pull-right-pro">Garage Location <span class="text-danger">*</span></label>
	                                            </div>
	                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
	                                                <input type="text" class="form-control" name="location" value="{{ old('location') ? old('location') : $query->location ?? '' }}">
	                                            </div>
	                                        </div>
	                                        <div class="row" style="margin-top: 20px;">
	                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                                                <label class="login2 pull-right pull-right-pro">Established Date <span class="text-danger">*</span></label>
	                                            </div>
	                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
	                                                <div class="input-group date">
			                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
			                                            <input type="text" class="form-control" value="" id="datepicker" name="established_date" value="{{ old('established_date') ? old('established_date') : $query->established_date ?? '' }}">
			                                        </div>
	                                            </div>
	                                        </div>
	                                        <div class="row" style="margin-top: 20px;">
	                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                                                <label class="login2 pull-right pull-right-pro">Website Link <span class="text-danger">*</span></label>
	                                            </div>
	                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
	                                                <input type="text" class="form-control" name="web_link" placeholder="https://" value="{{ old('web_link') ? old('web_link') : $query->web_link ?? '' }}">
	                                            </div>
	                                        </div>
	                                        <div class="row" style="margin-top: 20px;">
	                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                                                <label class="login2 pull-right pull-right-pro">Description <span class="text-danger">*</span></label>
	                                            </div>
	                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
	                                                <textarea class="form-control" rows="5" name="description">
	                                                	{{ old('description') ? old('description') : $query->description ?? '' }}
	                                                </textarea>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="form-group-inner">
	                                        <div class="login-btn-inner">
	                                            <div class="row">
	                                                <div class="col-lg-3"></div>
	                                                <div class="col-lg-9">
	                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
	                                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection
@section('page_script')
<script type="text/javascript">
	$(function () {
		var imageUrl = "http://localhost:82/car_fix/public/backend-asset/backendimages/";
  		$("#datepicker").datepicker();
		Dropzone.options.dropzone =
            {
                maxFilesize: 12,
                renameFile: function (file) {
                    var dt = new Date();
                    var time = dt.getTime();
                    return time + file.name;
                },
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                timeout: 50000,
                removedfile: function (file) {
                    var name = file.name;
                    console.log(name);
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        },
                        type: 'POST',
                        url: '{{ route("delete-images") }}',
                        data: {filename: name},
                        success: function (data) {
                            toastr.success('Image successfully removed');
                        },
                        error: function (e) {
                            toastr.error('Something went wrong while removing image');
                            console.log(e);
                        }
                    });
                    var fileRef;
                    return (fileRef = file.previewElement) != null ?
                        fileRef.parentNode.removeChild(file.previewElement) : void 0;
                },
                success: function (file, response) {
                    console.log(response);
                },
                error: function (file, response) {
                    return false;
                },
                init: function () {
	                var myDropzone = this;
				    $.get('{{ route("get-images") }}', function (data) {
				      $.each(data.images, function (key, value) {
				        var file = {name: value.image}
				        myDropzone.options.addedfile.call(myDropzone, file)
				        myDropzone.options.thumbnail.call(myDropzone, file, imageUrl + "garage/" + value.image)
				        myDropzone.emit('complete', file)
				      })
				    })
	            }
            };

		 

});
</script>
@endsection