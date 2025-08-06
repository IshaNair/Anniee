
@extends('admin.layouts.app')
@section('content')
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Create Post</h1>
							</div>
							<div class="col-sm-6 text-right">
								<a href="{{ route('post.list') }}" class="btn btn-primary">Back</a>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<div class="container-fluid">
                        <form method="POST" action="{{ route('post.store') }}">
                        @csrf
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label for="title">Title</label>
											<input type="text" onchange="getslug();" name="title" id="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" placeholder="Title">
                                            @error('title')
                                             <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="email">Slug</label>
											<input type="text" name="slug" id="slug" class="form-control" placeholder="Slug" readonly>
                                            @error('slug')
                                             <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
										</div>
									</div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="content">Content</label>
                                            <textarea name="content" id="content" class="summernote" cols="30" rows="10">{{ old('content') }}</textarea>
                                             @error('content')
                                             <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-control">
                                               <option value="0">Block</option>
                                               <option value="1">Active</option>
                                            </select>
                                        </div>
                                    </div>

                                   <div class="card mb-3">
                                    <div class="mb-3">
                                    <label for="image">Image</label>
                                        <div id="image" class="dropzone dz-clickable">
                                            <div class="dz-message needsclick">
                                                <br>Drop files here or click to upload.<br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                              <div class="card mb-3" id="product-gallery">



								</div>
							</div>
						</div>
						<div class="pb-5 pt-3">
							<button class="btn btn-primary">Create</button>
							<a href="#" class="btn btn-outline-dark ml-3">Cancel</a>
						</div>
                    </form>
					</div>
					<!-- /.card -->
				</section>
	@endsection

    @section('customeJS')
        <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
		<!-- Bootstrap 4 -->
		<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- AdminLTE App -->
		<script src="{{ asset('admin/js/adminlte.min.js') }}"></script>
		<!-- AdminLTE for demo purposes -->
        <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>

		<script src="{{ asset('admin/js/demo.js') }}"></script>
        <script src="{{ asset('admin/plugins/summernote/summernote.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/dropzone/dropzone.js') }}"></script>
                <script>
                    $(function () {
                        // Summernote
                        $('.summernote').summernote({
                            height: '200px'
                        });
                    });

                    function getslug(){
                      let title = $('#title').val();
                      if(title !=''){
                         $.get("{{ route('getslug') }}", { title: title }, function(data) {
                             if(data.status==true){
                              $('#slug').val(data.slug);
                             }
                             else{
                                   $('#slug').val('');
                                   alert(data.message);
                             }
                           }, 'json');
                         }
                    }
    //
            Dropzone.autoDiscover = false;
			const dropzone = $("#image").dropzone({
				url:  "{{ route('temp.post.images.create') }}",
				maxFiles: 10,
				paramName: 'image',
				addRemoveLinks: true,
				acceptedFiles: "image/jpeg,image/png,image/gif",
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}, success: function(file, response){

					//$("#image_id").val(response.image_id);
					//console.log(response)

                  var html = `<div class="col-md-3" id="image-row-${response.image_id}">
                               <div class="card">
				              <input type="hidden" name="post_image" value="${response.image}">
					          <img src="${response.ImagePath}" class="card-img-top" alt="...">
					          <div class="card-body">
						      <a href="javascript:void(0);" onclick="deleteImage(${response.image_id})" class="btn btn-danger">Remove</a>
					          </div>
					          </div>
                              </div>`;
					         $("#product-gallery").append(html);
				          },
						  complete:function(file){
                              this.removeFile(file);
						  }
			         });

                function deleteImage(id){
                 $("#image-row-"+id).remove();
			     }

        </script>
        @endsection
