@extends('admin.layouts.app')
@section('content')
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>Orders</h1>
				</section>
				<!-- Main content -->
				<section class="containerBox">
					<!-- Default box -->
					<div class="containerBg">
						<div class="card-header">
							<div class="searchInput">
								<input type="text" name="table_search"  placeholder="Search">
								<button type="submit" class="searchbtn">
									<img src="{{asset('admin/img/search.svg')}}" alt="search">
								</button>
							</div>
						</div>
						<div class="card-body table-responsive p-0">
							<table class="table table-hover text-nowrap tableContainer">
								<thead>
									<tr>
										<th>Orders #</th>
										<th>Customer</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Status</th>
										<th>Total</th>
										<th>Date Purchased</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><a href="order-detail.html">OR756374</a></td>
										<td>Mohit Singh</td>
										<td>example@example.com</td>
										<td>12345678</td>
										<td>
											<span class="badge bg-success">Delivered</span>
										</td>
										<td>$400</td>
										<td>Nov 20, 2022</td>
									</tr>
									<tr>
										<td><a href="order-detail.html">OR756374</a></td>
										<td>Mohit Singh</td>
										<td>example@example.com</td>
										<td>12345678</td>
										<td>
											<span class="badge bg-success">Delivered</span>
										</td>
										<td>$400</td>
										<td>Nov 20, 2022</td>
									</tr>
									<tr>
										<td><a href="order-detail.html">OR756374</a></td>
										<td>Mohit Singh</td>
										<td>example@example.com</td>
										<td>12345678</td>
										<td>
											<span class="badge bg-success">Delivered</span>
										</td>
										<td>$400</td>
										<td>Nov 20, 2022</td>
									</tr>
									<tr>
										<td><a href="order-detail.html">OR756374</a></td>
										<td>Mohit Singh</td>
										<td>example@example.com</td>
										<td>12345678</td>
										<td>
											<span class="badge bg-success">Delivered</span>
										</td>
										<td>$400</td>
										<td>Nov 20, 2022</td>
									</tr>
									<tr>
										<td><a href="order-detail.html">OR756374</a></td>
										<td>Mohit Singh</td>
										<td>example@example.com</td>
										<td>12345678</td>
										<td>
											<span class="badge bg-success">Delivered</span>
										</td>
										<td>$400</td>
										<td>Nov 20, 2022</td>
									</tr>
									<tr>
										<td><a href="order-detail.html">OR756374</a></td>
										<td>Mohit Singh</td>
										<td>example@example.com</td>
										<td>12345678</td>
										<td>
											<span class="badge bg-success">Delivered</span>
										</td>
										<td>$400</td>
										<td>Nov 20, 2022</td>
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
					<!-- /.card -->
				</section>
				@endsection
