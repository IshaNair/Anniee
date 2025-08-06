@extends('admin.layouts.app')
 @section('content')
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Update Category</h1>
							</div>
							<div class="col-sm-6 text-right">
								<a href="{{ route('categories') }}" class="btn btn-primary">Back</a>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
             <form method="POST" action="{{route('categories.update',['id' => $category->id])}}" id="addcategory" name="addcategory">
                @method('PUT')
                 @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" onchange="getslug();" class="form-control" value="{{ $category->name}}">
                                    @error('name')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="email">Slug</label>
                                    <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug" readonly value="{{ $category->slug}}">
                                     @error('slug')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control" >
                                        <option value="0" {{ ($category->status =='0') ? 'selected' : '' }} >Deactive</option>
                                        <option value="1" {{ ($category->status =='1') ? 'selected' : ''}} >Actice</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5 pt-3">
                    <button class="btn btn-primary">Update</button>
                    <a href="#" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
            </form>
            </div>
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
