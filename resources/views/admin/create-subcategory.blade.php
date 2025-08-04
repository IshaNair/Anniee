@extends('admin.layouts.app')
@section('content')
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Create Sub Category</h1>
							</div>
							<div class="col-sm-6 text-right">
								<a href="{{ route('subcategory') }}" class="btn btn-primary">Back</a>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->

                    <form method="POST" action="{{ route('subcategory.store') }}">
                        @csrf
					<div class="container-fluid">
						<div class="card">
							<div class="card-body">
								<div class="row">
                                    <div class="col-md-6">
										<div class="mb-3">
											<label for="name">Category</label>
											<select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                                 <option value="">Select</option>
                                                @foreach ($categories as $category)
                                                   <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                              <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="name">Name</label>
											<input type="text" name="name" value="{{ old('name')}}" onchange="getslug(); " id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                                            @error('name')
                                              <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="email">Slug</label>
											<input type="text" name="slug" value="{{ old('slug')}}" id="slug" class="form-control" placeholder="Slug" readonly>
										</div>
									</div>

                                    <div class="col-md-6">
										<div class="mb-3">
											<label for="status">Status</label>
											<select name="status" id="status" class="form-control @error('status') is-invalid @enderror" >
                                                 <option value="1">Active</option>
                                                 <option value="0">Deactive</option>
                                            </select>
                                             @error('status')
                                              <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="pb-5 pt-3">
							<button class="btn btn-primary">Create</button>
							<a href="subcategory.html" class="btn btn-outline-dark ml-3">Cancel</a>
						</div>
					</div>
                    </form>
					<!-- /.card -->
				</section>
				<!-- /.content -->
			@endsection

            @section('customeJS')
                <script>
                    function getslug(){
                      let title = $('#name').val();
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
