
@extends('admin.layouts.app')
@section('content')
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Pages</h1>
							</div>
							
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<section class="containerBox">
					<div class="containerBg">
						<div class="card-header">
							<div class="searchInput">
								<input type="text" name="table_search"  placeholder="Search">
								<button type="submit" class="searchbtn">
									<img src="{{asset('admin/img/search.svg')}}" alt="search">
								</button>
							</div>
							<div class="card-btn">
								<a href="{{ route('page.create') }}" class="button"><img src="{{asset('admin/img/create.svg')}}" alt=""> New Page</a>
							</div>
						</div>
						<div class="card-body table-responsive p-0">
							<table class="table table-hover text-nowrap tableContainer">
								<thead>
									<tr>
										<th width="60">ID</th>
										<th>Name</th>
										<th>Slug</th>
										<th width="100">Status</th>
										<th width="100">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>About Us</td>
										<td>about-us</td>
										<td>
											<svg class="text-success-500 h-6 w-6 text-success" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
											</svg>
										</td>
										<td>
											<div class="actionBtn">
												<a href="" class="btn edit">
													<i class="fa fa-pencil" aria-hidden="true"></i>
												</a>
												<a href="#" class="btn delete">
													<i class="fa fa-trash" aria-hidden="true"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Terms & Conditions</td>
										<td>terms-and-conditions</td>
										<td>
											<svg class="text-danger h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
											</svg>
										</td>
										<td>
											<div class="actionBtn">
												<a href="" class="btn edit">
													<i class="fa fa-pencil" aria-hidden="true"></i>
												</a>
												<a href="#" class="btn delete">
													<i class="fa fa-trash" aria-hidden="true"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Privacy Policy</td>
										<td>privacy-policy</td>
										<td>
											<svg class="text-success-500 h-6 w-6 text-success" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
											</svg>
										</td>
										<td>
											<div class="actionBtn">
												<a href="" class="btn edit">
													<i class="fa fa-pencil" aria-hidden="true"></i>
												</a>
												<a href="#" class="btn delete">
													<i class="fa fa-trash" aria-hidden="true"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>4</td>
										<td>Refund Policy</td>
										<td>refund-policy</td>
										<td>
											<svg class="text-success-500 h-6 w-6 text-success" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
											</svg>
										</td>
										<td>
											<div class="actionBtn">
												<a href="" class="btn edit">
													<i class="fa fa-pencil" aria-hidden="true"></i>
												</a>
												<a href="#" class="btn delete">
													<i class="fa fa-trash" aria-hidden="true"></i>
												</a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="card-footer clearfix">
							<ul class="pagination pagination m-0 float-right">
								<li class="page-item"><a class="page-link" href="#">«</a></li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">»</a></li>
							</ul>
						</div>
					</div>
				</section>

            @endsection

            @section('customeJS')
            <script>

            </script>
            @endsection
