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
									<h4 class="card-title mg-b-0">Problems</h4>
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
												<th class="wd-lg-20p"><span>Phone</span></th>
												<th class="wd-lg-20p"><span>Email</span></th>
												<th class="wd-lg-20p"><span>problems</span></th>
												<th class="wd-lg-20p">Action</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach($problems as $p)
											<tr>
												<td>
													<img alt="avatar" class="rounded-circle avatar-md mr-2" src="{{URL::asset('assets/img/faces/1.jpg')}}">
												</td>
												<td>{{$p->user->name}}</td>
												<td>
													{{$p->user->phone}}
												</td>
												<td>
													<a href="#">{{$p->user->email}}</a>
												</td>
                                                <td>
													<a href="#">{{$p->probleme}}</a>
												</td>
												<td>
													<a href="{{route('problem.edit',$p->id)}}" class="btn btn-success" style=>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  fill="currentColor" class="bi bi-chat-square-dots" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg>
													</a>
                                                    <form action="{{route('problem.destroy',$p->id)}}" method="post">
													@csrf
                                                    @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" style="width:50px; margin:-60px 60px 0px -60px">
														<i class="las la-trash" ></i>
                                                    </button></form>
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
