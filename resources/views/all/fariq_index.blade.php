@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">الصفحات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ الصفحة الرئيسية</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				{{-- معلومات عامة عن الفريق --}}
				<div class="row">
					@if(!$is_team_inserted)
					<div class="col-lg-4 col-md-12">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-body text-danger">
								<div class="main-error-wrapper">
									<h4 class="mg-b-20">معلومات عامة عن الفريق</h4>
									<i class="si si-close mg-b-20 tx-50"></i>
									<h6 class="mg-b-20">لم يتم العثور على بيانات</h6>
									<a class="btn btn-outline-danger btn-sm" href="{{ url('/teamIndex') }}">انقر لعرض التفاصيل</a>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>	
					@else
					<div class="col-lg-4 col-md-12">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-body text-success">
								<div class="main-error-wrapper">
									<h4 class="mg-b-20">معلومات عامة عن الفريق</h4>
									<i class="si si-check mg-b-20 tx-50"></i>
									<h6 class="mg-b-20">تم الإرسال بنجاح</h6>
									<a class="btn btn-outline-success btn-sm" href="{{ url('/fariq_team_update') }}">انقر لعرض التفاصيل</a>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>	
					@endif	

					@if ($is_team_inserted)
						{{-- معلومات خاصة برائد الفريق --}}
						@if (!$is_leader_inserted)
						<div class="col-lg-4 col-md-12">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body text-danger">
									<div class="main-error-wrapper">
										<h4 class="mg-b-20">معلومات خاصة برائد الفريق</h4>
										<i class="si si-close mg-b-20 tx-50"></i>
										<h6 class="mg-b-20">لم يتم العثور على بيانات</h6>
										<a class="btn btn-outline-danger btn-sm" href="{{ url('/leaderIndex') }}">انقر لعرض التفاصيل</a>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>						
						@else
						<div class="col-lg-4 col-md-12">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body text-success">
									<div class="main-error-wrapper">
										<h4 class="mg-b-20">معلومات خاصة برائد الفريق</h4>
										<i class="si si-check mg-b-20 tx-50"></i>
										<h6 class="mg-b-20">تم الإرسال بنجاح</h6>
										<a class="btn btn-outline-success btn-sm" href="">انقر لعرض التفاصيل</a>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						@endif	

						{{-- اللاعبين الاساسيين --}}
						@if (!$is_player_inserted)
						<div class="col-lg-4 col-md-12">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body text-danger">
									<div class="main-error-wrapper">
										<h4 class="mg-b-20">اللاعبين الاساسيين</h4>
										<i class="si si-close mg-b-20 tx-50"></i>
										<h6 class="mg-b-20">لم يتم العثور على بيانات</h6>
										<a class="btn btn-outline-danger btn-sm" href="{{ url('/playerIndex') }}">انقر لعرض التفاصيل</a>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>						
						@else
						<div class="col-lg-4 col-md-12">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body text-success">
									<div class="main-error-wrapper">
										<h4 class="mg-b-20">اللاعبين الاساسيين</h4>
										<i class="si si-check mg-b-20 tx-50"></i>
										<h6 class="mg-b-20">تم الإرسال بنجاح</h6>
										<a class="btn btn-outline-success btn-sm" href="">انقر لعرض التفاصيل</a>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						@endif

						{{-- تشكيلة الاحتياط  --}}
						@if (!$is_reserve_inserted)
						<div class="col-lg-4 col-md-12">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body text-danger">
									<div class="main-error-wrapper">
										<h4 class="mg-b-20">تشكيلة الاحتياط </h4>
										<i class="si si-close mg-b-20 tx-50"></i>
										<h6 class="mg-b-20">لم يتم العثور على بيانات</h6>
										<a class="btn btn-outline-danger btn-sm" href="{{ url('/reserveIndex') }}">انقر لعرض التفاصيل</a>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>						
						@else
						<div class="col-lg-4 col-md-12">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body text-success">
									<div class="main-error-wrapper">
										<h4 class="mg-b-20">تشكيلة الاحتياط </h4>
										<i class="si si-check mg-b-20 tx-50"></i>
										<h6 class="mg-b-20">تم الإرسال بنجاح</h6>
										<a class="btn btn-outline-success btn-sm" href="">انقر لعرض التفاصيل</a>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						@endif
					@endif
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection