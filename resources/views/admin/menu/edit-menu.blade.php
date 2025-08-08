
@extends('admin.layouts.app')
@section('content')
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>Update Menu</h1>
				</section>
				<!-- Main content -->
				<section class="containerBox">
					<div class="containerBg">
						<form method="post" action="{{ route('menu.update',$menu->id) }}" class="formContainer">
							@csrf
							@method('PUT')
							<div class="inputBox">
								<label for="title">Title</label>
								<input type="text" name="title" value="{{ old('title', $menu->title) }}" onchange="getslug(); " id="title" class=" @error('title') is-invalid  @enderror" placeholder="Title">
								@error('title')
								<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
							<div class="inputBox">
								<label for="email">Slug</label>
								<input type="text" name="slug" id="slug" value="{{ $menu->slug}}" class="" placeholder="Slug" readonly>
							</div>
							<div class="inputBox">
								<label for="email">Page Link</label>
								<input type="text" name="page_link" value="{{ old('page_link', $menu->page_link) }}" id="page_link" class=" @error('page_link') is-invalid @enderror" placeholder="Page Link">
								@error('page_link')
								<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
							<div class="inputBox">
								<label for="email">status</label>
								<select name="status" id="status" class="">
									<option value="0" {{ ($menu->status ==0 )? 'selected':''}}>Block</option>
									<option value="1" {{ ($menu->status ==1 )? 'selected':''}}>Active</option>
								</select>
							</div>
							<div class="fromBtnSection">
								<button class="button">Update</button>
								<a href="#" class="button outline">Cancel</a>
							</div>
						</form>
					</div>
				</section>
				@endsection

                @section('customeJS')

                <script>
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
                </script>
                @endsection
