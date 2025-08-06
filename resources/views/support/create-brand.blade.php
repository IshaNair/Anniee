@extends('admin.layouts.app')
@section('content')
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Create Brand</h1>
							</div>
							<div class="col-sm-6 text-right">
								<a href="{{ route('brands') }}" class="btn btn-primary">Back</a>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
                    <form method="POST" action="{{ route('brand.store') }}" >
                        @csrf
					<div class="container-fluid">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-md-4">
										<div class="mb-3">
											<label for="name">Brand Name</label>
											<input type="text" name="brand_name" value="{{ old('brand_name')}}" id="brand_name" onchange="getslug();" class="form-control @error ('brand_name') is-invalid @enderror" placeholder="Name">
										   @error('brand_name')
                                              <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
                                        </div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<label for="email">Slug</label>
											<input type="text" name="slug" id="slug" class="form-control" placeholder="Slug">

										</div>
									</div>

                                    <div class="col-md-4">
										<div class="mb-3">
											<label for="status">Status</label>
											<select name="status" id="status" class="form-control" >
                                                <option value="0">Deactive</option>
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
					</div>
                </form>
					<!-- /.card -->
				</section>
			@endsection

            @section('customeJS')
                <script>
                    function getslug(){
                      let title = $('#brand_name').val();
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
