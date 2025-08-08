@extends('admin.layouts.app')
@section('content')
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>Create User</h1>
				</section>
				<!-- Main content -->
				<section class="containerBox">
					<div class="containerBg">
						<form method="POST" action="{{ route('user.store') }}"  class="formContainer">
							@csrf
							
							<div class="inputBox">
								<label for="name">Name</label>
								<input type="text" name="name" id="name" value="{{ old('name') }}" class=" @error('name') is-invalid @enderror" placeholder="Name">
								@error('name')
									<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
							<div class="inputBox">
								<label for="email">Email</label>
								<input type="text" name="email" id="email" value="{{ old('email') }}" class=" @error('email') is-invalid @enderror" placeholder="Email">
								@error('email')
									<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
							<div class="inputBox">
								<label for="password">Password</label>
								<input type="password" name="password" id="password" value="{{ old('password') }}" class=" @error('password') is-invalid @enderror" placeholder="Password">
								@error('password')
									<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
							<div class="inputBox">
								<label for="phone">Phone</label>
								<input type="text" name="phone" id="phone" class=" @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Phone">
								@error('phone')
									<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
							<div class="inputBox">
								<label for="role">Role</label>
								<select name="role" id="role" class=" @error('role') is-invalid @enderror">
									<option value="">Select Role</option>
									<option value="support">Support</option>
									<option value="admin">Admin</option>
								</select>
									@error('role')
									<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
							<div class="inputBox">
								<label for="status">Status</label>
								<select name="status" id="status" class="">
									<option value="0">Block</option>
									<option value="1">Active</option>
								</select>
							</div>
							<div class="inputBox">
								<label for="phone">Address</label>
								<input type="text" name="address" id="address" class=" @error ('address') is-invalid @enderror" value="{{ old('address')}}" placeholder="Your Address">
								@error('address')
								<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
							
							<div class="fromBtnSection">
								<button class="button">Create</button>
								<a href="{{ route('user.list') }}" class="button outline">Cancel</a>
							</div>
						</form>
					</div>
				</section>
		  @endsection
