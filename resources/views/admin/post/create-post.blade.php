
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
								<a href="{{ route('posts') }}" class="btn btn-primary">Back</a>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<div class="container-fluid">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" class="form-control" placeholder="Name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="email">Slug</label>
											<input type="text" name="slug" id="slug" class="form-control" placeholder="Slug">
										</div>
									</div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="content">Content</label>
                                            <textarea name="content" id="content" class="summernote" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
						<div class="pb-5 pt-3">
							<button class="btn btn-primary">Create</button>
							<a href="pages.html" class="btn btn-outline-dark ml-3">Cancel</a>
						</div>
					</div>
					<!-- /.card -->
				</section>
				@endsection

                @section('customeJS')
                <script src="plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="js/adminlte.min.js"></script>
		<!-- AdminLTE for demo purposes -->
        <script src="plugins/summernote/summernote-bs4.min.js"></script>

		<script src="js/demo.js"></script>
                <script>
                   <script>
                    $(function () {
                        // Summernote
                        $('.summernote').summernote({
                            height: '300px'
                        });
                    });
                </script>
                </script>
                @endsection
