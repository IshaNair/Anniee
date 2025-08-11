
@extends('admin.layouts.app')
@section('content')
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>Post</h1>
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
							<div class="card-btn">
								<a href="{{ route('post.create') }}" class="button"> <img src="{{asset('admin/img/create.svg')}}" alt=""> New Post</a>
							</div>
						</div>
						<div class="card-body table-responsive p-0">
							<table class="table table-hover text-nowrap tableContainer">
								<thead>
									<tr>
										<th width="60">ID</th>
										<th>Name</th>
										<th>Slug</th>
										<th>Content</th>
										<th>Image</th>
                                        <th>Page Name</th>
										<th width="100">Status</th>
										<th width="100">Action</th>
									</tr>
								</thead>
								<tbody>
									@forelse ($posts as $post)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $post->title }}</td>
										<td>{{ $post->slug }}</td>
										<td>{{ Str::limit($post->content,20) }}</td>
										<td><img src="{{ asset('temp/post/'.$post->image) }}" width="50" height="50"></td>
                                        <td>{{ $post->page_type }}</td>
										<td>
											@if ($post->status ==1)
											<svg class="text-success-500 h-6 w-6 text-success" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
											</svg>
												@else
											<svg class="text-danger h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
											</svg>
											@endif
										</td>
										<td>
											<div class="actionBtn">
												<a href="{{ route('post.edit',['id'=>$post->id]) }}" class="btn edit">
													<i class="fa fa-pencil" aria-hidden="true"></i>
												</a>
												<a href="javascript:void(0)" onclick="deleteRecode({{ $post->id}});" class="btn delete">
													<i class="fa fa-trash" aria-hidden="true"></i>
												</a>
											</div>
										</td>
									</tr>
									@empty
									<tr>
										<td colspan="7">Recode Not found!</td>
									</tr>
									@endforelse
								</tbody>
							</table>
						</div>
						<div class="card-footer clearfix">
							{!! $posts->withQueryString()->links('pagination::bootstrap-5') !!}
						</div>
					</div>
				</section>

            @endsection

            @section('customeJS')
            <script>
                  function deleteRecode(id){
                     $.Jquery({
                        url:"{route('post.destroy/')}"+id,
                        data:{id:id},
                        datatype:json,
                        success:function(data){
                           console.log(data);
                        }
                     });
                  }
            </script>
            @endsection
