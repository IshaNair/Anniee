@extends('support.layouts.app')
@section('content')
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Update Customer</h1>
							</div>
							<div class="col-sm-6 text-right">
								<a href="{{ route('list.customer') }}" class="btn btn-primary">Back</a>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<div class="container-fluid">
                    <form method="POST" action="{{ route('update.customer',$customer->id) }}" >
                        @method('PUT')
                        @csrf
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" value="{{ old('name',$customer->name) }}" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                                            @error('name')
                                              <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" value="{{ old('email',$customer->email) }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                                            @error('email')
                                              <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="password">Password</label>
											<input type="password" name="password" id="password" value="{{ old('password',$customer->password) }}" class="form-control @error('password') is-invalid @enderror" readonly>
                                            @error('password')
                                              <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
										</div>
									</div>
                                    <div class="col-md-6">
										<div class="mb-3">
											<label for="phone">Phone</label>
											<input type="text" name="phone" id="phone" class="form-control @error('phone',$customer->phone) is-invalid @enderror" value="{{ old('phone') }}" placeholder="Phone">
                                            @error('phone')
                                              <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
										</div>
									</div>

                                    <div class="col-md-6">
										<div class="mb-3">
											<label for="role">Role</label>
											<select name="role" id="role" class="form-control @error('role') is-invalid @enderror">
                                                <option value="">Select Role</option>
                                                <option value="support" {{ ($customer->role =='support') ? 'selected' : '' }}>Support</option>
                                                <option value="admin" {{ ($customer->role =='admin') ? 'selected' : '' }}>Admin</option>
                                            </select>
                                             @error('role')
                                              <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
										</div>
									</div>

                                    <div class="col-md-6">
										<div class="mb-3">
											<label for="status">Status</label>
											<select name="status" id="status" class="form-control">
                                                <option value="0" {{ ($customer->status =='0') ? 'selected' : '' }}>Block</option>
                                                <option value="1" {{ ($customer->status =='1') ? 'selected' : '' }}>Active</option>
                                            </select>
										</div>
									</div>

									<div class="col-md-12">
										<div class="mb-3">
											<label for="address">Address</label>
											<input type="text" name="address" id="address" class="form-control @error ('address') is-invalid @enderror" value="{{ old('address',$customer->address )}}">
                                            @error('address')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
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
		  @endsection
