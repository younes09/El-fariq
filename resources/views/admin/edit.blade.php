@extends('layouts.master')
@section('css')
<style>
	td img {
    	height: 5rem;
	}
</style>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Empty</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				@if (count($leader) != 0)
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="border-bottom-0">#</th>
												<th class="border-bottom-0">الإسم</th>
												<th class="border-bottom-0">اللقب</th>
												<th class="border-bottom-0">تاريخ الميلاد</th>
												<th class="border-bottom-0">الهاتف</th>
												<th class="border-bottom-0">الإيميل</th>
												<th class="border-bottom-0">العنوان</th>
												<th class="border-bottom-0">الصورة</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>القائد</td>
												<td class="text-nowrap">{{ $leader[0]->leader_name }}</td>
												<td class="text-nowrap">{{ $leader[0]->leader_famely_name }}</td>
												<td class="text-nowrap">{{ $leader[0]->leader_birth_day }}</td>
												<td class="text-nowrap"><a href="tel:{{ $leader[0]->leader_phone }}">{{ $leader[0]->leader_phone }}</a></td>
												<td class="text-nowrap"><a href="mailto:{{ $leader[0]->leader_mail }}">{{ $leader[0]->leader_mail }}</a></td>
												<td class="text-nowrap">{{ $leader[0]->leader_addres }}</td>
												<td class="text-nowrap"><img src="{{ url('images/'.$leader[0]->leader_photo) }}" alt="" srcset=""></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>					
				</div>
				@endif
				<!-- row closed -->
				<!-- row -->
				@if (count($player) != 0)
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">#</th>
												<th class="wd-15p border-bottom-0">الإسم</th>
												<th class="wd-15p border-bottom-0">اللقب</th>
												<th class="wd-25p border-bottom-0">الصورة</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>اللاعب 2</td>
												<td class="text-nowrap">{{ $player[0]->player_2_name }}</td>
												<td class="text-nowrap">{{ $player[0]->player_2_familyname }}</td>
												<td class="text-nowrap"><img src="{{ url('images/'.$player[0]->photo_p2) }}" alt="" srcset=""></td>
											</tr>
											<tr>
												<td>اللاعب 3</td>
												<td class="text-nowrap">{{ $player[0]->player_3_name }}</td>
												<td class="text-nowrap">{{ $player[0]->player_3_familyname }}</td>
												<td class="text-nowrap"><img src="{{ url('images/'.$player[0]->photo_p3) }}" alt="" srcset=""></td>
											</tr>
											<tr>
												<td>اللاعب 4</td>
												<td class="text-nowrap">{{ $player[0]->player_4_name }}</td>
												<td class="text-nowrap">{{ $player[0]->player_4_familyname }}</td>
												<td class="text-nowrap"><img src="{{ url('images/'.$player[0]->photo_p4) }}" alt="" srcset=""></td>
											</tr>
											<tr>
												<td>اللاعب 5</td>
												<td class="text-nowrap">{{ $player[0]->player_5_name }}</td>
												<td class="text-nowrap">{{ $player[0]->player_5_familyname }}</td>
												<td class="text-nowrap"><img src="{{ url('images/'.$player[0]->photo_p5) }}" alt="" srcset=""></td>
											</tr>
											<tr>
												<td>اللاعب 6</td>
												<td class="text-nowrap">{{ $player[0]->player_6_name }}</td>
												<td class="text-nowrap">{{ $player[0]->player_6_familyname }}</td>
												<td class="text-nowrap"><img src="{{ url('images/'.$player[0]->photo_p6) }}" alt="" srcset=""></td>
											</tr>
											<tr>
												<td>اللاعب 7</td>
												<td class="text-nowrap">{{ $player[0]->player_7_name }}</td>
												<td class="text-nowrap">{{ $player[0]->player_7_familyname }}</td>
												<td class="text-nowrap"><img src="{{ url('images/'.$player[0]->photo_p7) }}" alt="" srcset=""></td>
											</tr>
											<tr>
												<td>اللاعب 8</td>
												<td class="text-nowrap">{{ $player[0]->player_8_name }}</td>
												<td class="text-nowrap">{{ $player[0]->player_8_familyname }}</td>
												<td class="text-nowrap"><img src="{{ url('images/'.$player[0]->photo_p8) }}" alt="" srcset=""></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endif	
				<!-- row closed -->
				<!-- row -->
				@if (count($reserve) != 0)
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">#</th>
												<th class="wd-15p border-bottom-0">الإسم</th>
												<th class="wd-15p border-bottom-0">اللقب</th>
												<th class="wd-25p border-bottom-0">الصورة</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>الإحتياطي 1</td>
												<td class="text-nowrap">{{ $reserve[0]->reserve_1_name }}</td>
												<td class="text-nowrap">{{ $reserve[0]->reserve_1_familyname }}</td>
												<td class="text-nowrap"><img src="{{ url('images/'.$reserve[0]->photo_r1) }}" alt="" srcset=""></td>
											</tr>
											<tr>
												<td>الإحتياطي 2</td>
												<td class="text-nowrap">{{ $reserve[0]->reserve_2_name }}</td>
												<td class="text-nowrap">{{ $reserve[0]->reserve_2_familyname }}</td>
												<td class="text-nowrap"><img src="{{ url('images/'.$reserve[0]->photo_r2) }}" alt="" srcset=""></td>
											</tr>
											<tr>
												<td>الإحتياطي 3</td>
												<td class="text-nowrap">{{ $reserve[0]->reserve_3_name }}</td>
												<td class="text-nowrap">{{ $reserve[0]->reserve_3_familyname }}</td>
												<td class="text-nowrap"><img src="{{ url('images/'.$reserve[0]->photo_r3) }}" alt="" srcset=""></td>
											</tr>
											<tr>
												<td>الإحتياطي 4</td>
												<td class="text-nowrap">{{ $reserve[0]->reserve_4_name }}</td>
												<td class="text-nowrap">{{ $reserve[0]->reserve_4_familyname }}</td>
												<td class="text-nowrap"><img src="{{ url('images/'.$reserve[0]->photo_r4) }}" alt="" srcset=""></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endif	
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection