@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
@endsection
@section('content')
				<!--Row-->
				<div class="row row-sm">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">USERS TABLE</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<p class="tx-12 tx-gray-500 mb-2">Example of Valex Simple Table. <a href="">Learn more</a></p>
							</div>
							<div class="card-body">
								<div class="table-responsive border-top userlist-table">
									<table class="table card-table table-striped table-vcenter text-nowrap mb-0">
										<thead>
											<tr>
												<th class="wd-lg-8p"><span>User</span></th>
												<th class="wd-lg-20p"><span></span></th>
												<th class="wd-lg-20p"><span>Created</span></th>
												<th class="wd-lg-20p"><span>Status</span></th>
												<th class="wd-lg-20p"><span>Email</span></th>
												<th class="wd-lg-20p">Action</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach($name_users as $n)
											<tr>
												<td>
													<img alt="avatar" class="rounded-circle avatar-md mr-2" src="{{URL::asset('assets/img/faces/1.jpg')}}">
												</td>
												<td>{{$n->user->name}}</td>
												<td>
													{{$n->user->phone}}
												</td>
												<td>
													{{$n->user->address}}
												</td>
												<td>
													<a href="#">{{$n->user->email}}</a>
												</td>
												<td>
													<a href="{{route('show_medications',$n->user_id)}}" class="btn btn-sm btn-primary">
														<i class="las la-search"></i>
													</a>
                                                    <form action="{{route('delete.order',$n->user->id)}}" method="post">@csrf
													<button type="submit" class="btn btn-sm btn-danger" style="margin:-40px 50px 0px 0px;">
														<i class="las la-trash"></i>
                                                        </button>
                                                          </form>
												</td>
											</tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
								<ul class="pagination mt-4 mb-0 float-left">
									<li class="page-item page-prev disabled">
										<a class="page-link" href="#" tabindex="-1">Prev</a>
									</li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item page-next">
										<a class="page-link" href="#">Next</a>
									</li>
								</ul>
							</div>
						</div>
					</div><!-- COL END -->
				</div>
				<!-- row closed  -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
@endsection
