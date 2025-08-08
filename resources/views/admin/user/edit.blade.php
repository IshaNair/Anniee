@extends('admin.layouts.app')
@section('content')
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>Update User</h1>
				</section>
				<!-- Main content -->
				<section class="containerBox">
					<div class="containerBg">
						<form method="POST" action="{{ route('user.update',$user->id) }}" class="formContainer">
							@method('PUT')
							@csrf
							<div class="inputBox">
								<label for="name">Name</label>
								<input type="text" name="name" id="name" value="{{ old('name',$user->name) }}" class=" @error('name') is-invalid @enderror" placeholder="Name">
								@error('name')
								<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
							<div class="inputBox">
								<label for="email">Email</label>
								<input type="text" name="email" id="email" value="{{ old('email',$user->email) }}" class=" @error('email') is-invalid @enderror" placeholder="Email">
								@error('email')
								<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
							<div class="inputBox">
								<label for="password">Password</label>
								<input type="password" name="password" id="password" value="{{ old('password',$user->password) }}" class=" @error('password') is-invalid @enderror" readonly>
								@error('password')
								<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
							<div class="inputBox">
								<label for="phone">Phone</label>
								<input type="text" name="phone" id="phone" class=" @error('phone',$user->phone) is-invalid @enderror" value="{{ old('phone') }}" placeholder="Phone">
								@error('phone')
								<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
							<div class="inputBox">
								<label for="role">Role</label>
								<select name="role" id="role" class=" @error('role') is-invalid @enderror">
									<option value="">Select Role</option>
									<option value="support" {{ ($user->role =='support') ? 'selected' : '' }}>Support</option>
									<option value="admin" {{ ($user->role =='admin') ? 'selected' : '' }}>Admin</option>
								</select>
								@error('role')
								<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
							<div class="inputBox">
								<label for="status">Status</label>
								<select name="status" id="status" class="">
									<option value="0" {{ ($user->status =='0') ? 'selected' : '' }}>Block</option>
									<option value="1" {{ ($user->status =='1') ? 'selected' : '' }}>Active</option>
								</select>
							</div>
							<div class="inputBox">
								<label for="address">Address</label>
								<input type="text" name="address" id="address" class=" @error ('address') is-invalid @enderror" value="{{ old('address',$user->address )}}" placeholder="Your Address">
								@error('address')
								<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
							<div class="fromBtnSection">
								<button class="button">Update</button>
								<a href="{{ route('user.list') }}" class="button outline">Cancel</a>
							</div>
						</form>
					</div>
				</section>
		  @endsection
