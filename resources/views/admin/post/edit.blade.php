
@extends('admin.layouts.app')
@section('content')
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>Update Post</h1>
				</section>
				<!-- Main content -->
				<section class="containerBox">
					<!-- Default box -->
					<div class="containerBg">
                        <form method="POST" action="{{ route('post.update',$post->id) }}" class="formContainer">
                        @csrf
                        @method('PUT')
						<div class="inputBox">
                            <label for="title">Title</label>
                            <input type="text" onchange="getslug();" name="title" id="title" value="{{ old('title',$post->title) }}" class="form-control @error('title') is-invalid @enderror" placeholder="Title">
                            @error('title')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="inputBox">
                            <label for="email">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" value="{{ $post->slug }}" placeholder="Slug" readonly>
                            @error('slug')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="inputBox">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" class="summernote" cols="30" rows="10">{{ old('content', $post->content) }}</textarea>
                                @error('content')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="inputBox">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="0" {{ ($post->status==0)? 'selected':''}}>Block</option>
                                <option value="1" {{ ($post->status==1)? 'selected':''}}>Active</option>
                            </select>
                        </div>
                        <div class="inputBox">
                            <img src="{{ asset('temp/post/'.$post->image) }}" width="150" height="150">
                            <input type="hidden" name="old_image" value="{{$post->image }}">

                        </div>
                        <div class="inputBox">
                            <label for="image">Image</label>
                            <div id="image" class="dropzone dz-clickable">
                                <div class="dz-message needsclick">
                                    <br>Drop files here or click to upload.<br><br>
                                </div>
                            </div>
                        </div>
                         <div class="inputBox" id="product-gallery">

                        </div>

                         <div class="inputBox">
                            <label for="email">Post No</label>
                            <input type="text" name="page_type" id="page_type" class="" value="{{ old('page_type',$post->page_type )}}" placeholder="Post No">
                            @error('page_type')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
						<div class="fromBtnSection">
							<button class="button">Update</button>
							<a href="{{ route('post.list') }}" class="button outline">Cancel</a>
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

                  var html = `<div class="mb-3" id="image-row-${response.image_id}">
				              <input type="hidden" name="post_image" value="${response.image}">
					          <img src="${response.ImagePath}" class="card-img-top" alt="...">
					          <div class="card-body">
						      <a href="javascript:void(0);" onclick="deleteImage(${response.image_id})" class="btn btn-danger">Remove</a>

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
