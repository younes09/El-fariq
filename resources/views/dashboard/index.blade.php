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
				{{-- <div class="row">
					<div class="col-12">
						<div class="progress mg-b-10">
							@if(!$is_team_inserted)
								<div class="progress-bar progress-bar-lg bg-success wd-0p" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
							@elseif (!$is_leader_inserted)
								<div class="progress-bar progress-bar-lg bg-success wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
							@elseif (!$is_player_inserted)
								<div class="progress-bar progress-bar-lg bg-success wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
							@elseif (!$is_reserve_inserted)
								<div class="progress-bar progress-bar-lg bg-success wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
							@else
								<div class="progress-bar progress-bar-lg bg-success wd-100p" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
							@endif
						</div>
					</div>
				</div> --}}
				<!-- row -->
				{{-- معلومات عامة عن الفريق --}}
                @if (session('status'))
                    <div class="row" id="success-alert">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">
                                <h5><strong>{{ session('status') }}.</strong></h5>                        
                            </div>
                        </div>
                    </div>
                @endif
				<div class="row">
					@if(!$is_team_inserted)
					<div class="col-lg-3 col-md-12">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-body text-danger">
								<div class="main-error-wrapper">
									<h4 class="mg-b-20">معلومات عامة عن الفريق</h4>
									<i class="si si-close mg-b-20 tx-50"></i>
									<h6 class="mg-b-20">لم يتم العثور على بيانات</h6>
									<a class="btn btn-outline-danger btn-sm" href="{{ url('/team') }}">انقر لعرض التفاصيل</a>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>	
					@else
					<div class="col-lg-3 col-md-12">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-body text-success">
								<div class="main-error-wrapper">
									<h4 class="mg-b-20">معلومات عامة عن الفريق</h4>
									<i class="si si-check mg-b-20 tx-50"></i>
									<h6 class="mg-b-20">تم الإرسال بنجاح</h6>
									<a class="btn btn-outline-success btn-sm" href="{{url('team/'.auth()->id().'/edit')}}">انقر لعرض التفاصيل</a>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>	
					@endif	

					@if ($is_team_inserted)
						{{-- معلومات خاصة برائد الفريق --}}
						@if (!$is_leader_inserted)
						<div class="col-lg-3 col-md-12">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body text-danger">
									<div class="main-error-wrapper">
										<h4 class="mg-b-20">معلومات خاصة برائد الفريق</h4>
										<i class="si si-close mg-b-20 tx-50"></i>
										<h6 class="mg-b-20">لم يتم العثور على بيانات</h6>
										<a class="btn btn-outline-danger btn-sm" href="{{ url('/leader') }}">انقر لعرض التفاصيل</a>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>						
						@else
						<div class="col-lg-3 col-md-12">
							<!--Page Widget Error-->
							<div class="card bd-0 mg-b-20">
								<div class="card-body text-success">
									<div class="main-error-wrapper">
										<h4 class="mg-b-20">معلومات خاصة برائد الفريق</h4>
										<i class="si si-check mg-b-20 tx-50"></i>
										<h6 class="mg-b-20">تم الإرسال بنجاح</h6>
										<a class="btn btn-outline-success btn-sm" href="{{url('leader/'.auth()->id().'/edit')}}">انقر لعرض التفاصيل</a>
									</div>
								</div>
							</div>
							<!--Page Widget Error-->
						</div>
						@endif	

						{{-- اللاعبين الاساسيين --}}
                        @if ($is_leader_inserted)
                            @if (!$is_player_inserted)
                            <div class="col-lg-3 col-md-12">
                                <!--Page Widget Error-->
                                <div class="card bd-0 mg-b-20">
                                    <div class="card-body text-danger">
                                        <div class="main-error-wrapper">
                                            <h4 class="mg-b-20">اللاعبين الاساسيين</h4>
                                            <i class="si si-close mg-b-20 tx-50"></i>
                                            <h6 class="mg-b-20">لم يتم العثور على بيانات</h6>
                                            <a class="btn btn-outline-danger btn-sm" href="{{ url('/player') }}">انقر لعرض التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <!--Page Widget Error-->
                            </div>						
                            @else
                            <div class="col-lg-3 col-md-12">
                                <!--Page Widget Error-->
                                <div class="card bd-0 mg-b-20">
                                    <div class="card-body text-success">
                                        <div class="main-error-wrapper">
                                            <h4 class="mg-b-20">اللاعبين الاساسيين</h4>
                                            <i class="si si-check mg-b-20 tx-50"></i>
                                            <h6 class="mg-b-20">تم الإرسال بنجاح</h6>
                                            <a class="btn btn-outline-success btn-sm" href="{{url('player/'.auth()->id().'/edit')}}">انقر لعرض التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <!--Page Widget Error-->
                            </div>
                            @endif

                            {{-- تشكيلة الاحتياط  --}}
                            @if (!$is_reserve_inserted)
                            <div class="col-lg-3 col-md-12">
                                <!--Page Widget Error-->
                                <div class="card bd-0 mg-b-20">
                                    <div class="card-body text-danger">
                                        <div class="main-error-wrapper">
                                            <h4 class="mg-b-20">تشكيلة الاحتياط </h4>
                                            <i class="si si-close mg-b-20 tx-50"></i>
                                            <h6 class="mg-b-20">لم يتم العثور على بيانات</h6>
                                            <a class="btn btn-outline-danger btn-sm" href="{{ url('/reserve') }}">انقر لعرض التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <!--Page Widget Error-->
                            </div>						
                            @else
                            <div class="col-lg-3 col-md-12">
                                <!--Page Widget Error-->
                                <div class="card bd-0 mg-b-20">
                                    <div class="card-body text-success">
                                        <div class="main-error-wrapper">
                                            <h4 class="mg-b-20">تشكيلة الاحتياط </h4>
                                            <i class="si si-check mg-b-20 tx-50"></i>
                                            <h6 class="mg-b-20">تم الإرسال بنجاح</h6>
                                            <a class="btn btn-outline-success btn-sm" href="{{url('reserve/'.auth()->id().'/edit')}}">انقر لعرض التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <!--Page Widget Error-->
                            </div>
                            @endif
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
<script>
	$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").alert('close');
});
</script>
@endsection