
@extends('admin.layouts.app')
@section('content')
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>Create Page</h1>
				</section>
				<!-- Main content -->
				<section class="containerBox">
					<!-- Default box -->
					<div class="containerBg">
						<form action="" class="formContainer">
							<div class="inputBox">
								<label for="name">Name</label>
								<input type="text" name="name" id="name"  placeholder="Name">
							</div>
							<div class="inputBox">
								<label for="email">Slug</label>
								<input type="text" name="slug" id="slug"  placeholder="Slug">
							</div>
							<div class="inputBox">
								<label for="content">Content</label>
								<textarea name="content" id="content" class="summernote" cols="30" rows="10"></textarea>
							</div>
							<div class="fromBtnSection">
								<button class="button">Create</button>
								<a href="{{route('pages')}}" class="button outline">Cancel</a>
							</div>
						</form>
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
