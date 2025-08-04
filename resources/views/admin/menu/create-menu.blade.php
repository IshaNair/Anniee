
@extends('admin.layouts.app')
@section('content')
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Create Menu</h1>
							</div>
							<div class="col-sm-6 text-right">
								<a href="pages.html" class="btn btn-primary">Back</a>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->

					<div class="container-fluid">
                    <form method="post" action="{{ route('menu.store') }}">
                        @csrf
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-md-3">
										<div class="mb-3">
											<label for="title">Title</label>
											<input type="text" name="title" value="{{ old('title') }}" onchange="getslug(); " id="title" class="form-control @error('title') is-invalid  @enderror" placeholder="Title">
                                            @error('title')
                                               <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<label for="email">Slug</label>
											<input type="text" name="slug" id="slug" class="form-control" placeholder="Slug" readonly>
										</div>
									</div>
                                    <div class="col-md-3">
										<div class="mb-3">
											<label for="email">Page Link</label>
											<input type="text" name="page_link" value="{{ old('page_link') }}" id="page_link" class="form-control @error('page_link') is-invalid @enderror" placeholder="Page Link">
                                            @error('page_link')
                                               <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
										</div>
									</div>
                                    <div class="col-md-3">
										<div class="mb-3">
											<label for="email">status</label>
											<select name="status" id="status" class="form-control">
                                                <option value="0">Block</option>
                                                 <option value="1">Active</option>
                                            </select>
										</div>
									</div>
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
