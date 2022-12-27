@extends('layouts.master')
@section('css')
<!---Internal Fileupload css-->
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
<!---Internal Fancy uploader css-->
<link href="{{URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">الصفحات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ معلومات عامة عن الفريق</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<form action="{{ url('/reserve') }}" method="POST" enctype="multipart/form-data" data-parsley-validate="">
					@csrf
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										<h2 style="font-weight: bold;">اسماء لاعبين الاحتياط</h2>
									</div>
									<p class="mg-b-20"><h6>ادخل اسم و لقب كل لاعب إحتياطي </h6></p>
								</div>
							</div>
						</div>
						{{-- first reserv --}}
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										<h2 style="font-weight: bold;">اللاعب الاحتياطي الاول </h2>
									</div>
									<p class="mg-b-20"></p>									
									<div class="row row-sm">
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font"> الاسم<span class="tx-danger">*</span></label>
											<input type="text" name="reserve_1_name" value="{{ old('leader_name') }}" class="form-control" id="" >                                
										</div>
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font">اللقب<span class="tx-danger">*</span></label>
											<input type="text" name="reserve_1_familyname" class="form-control" id=""  >
										</div>
										<div class="col-lg-12 col-sm-12">
											<div class="card">
												<div class="card-body">
													<div>
														<h4 class=" mb-1">صورة</h4>
														<p class="text-muted card-sub-title">اختر ملفًا أو اسحبه هنا</p>
													</div>
													<div class="row mb-4">
														<div class="col-lg-12 col-sm-12 mg-t-10 mg-sm-t-0">
															{{-- <input type="file" class="dropify" data-default-file="{{URL::asset('assets/img/photos/1.jpg')}}" data-height="200"/> --}}
															<input type="file" name="photo_r1" class="dropify" data-height="200" accept="image/*"/>
														</div>
													</div>
												</div>
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>
						{{-- 2nd reserv --}}
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										<h2 style="font-weight: bold;">اللاعب الاحتياطي الثاني </h2>
									</div>
									<p class="mg-b-20"></p>									
									<div class="row row-sm">
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font"> الاسم<span class="tx-danger">*</span></label>
											<input type="text" name="reserve_2_name" value="{{ old('leader_name') }}" class="form-control" id="" >                                
										</div>
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font">اللقب<span class="tx-danger">*</span></label>
											<input type="text" name="reserve_2_familyname" class="form-control" id=""  >
										</div>
										<div class="col-lg-12 col-sm-12">
											<div class="card">
												<div class="card-body">
													<div>
														<h4 class=" mb-1">صورة</h4>
														<p class="text-muted card-sub-title">اختر ملفًا أو اسحبه هنا</p>
													</div>
													<div class="row mb-4">
														<div class="col-lg-12 col-sm-12 mg-t-10 mg-sm-t-0">
															{{-- <input type="file" class="dropify" data-default-file="{{URL::asset('assets/img/photos/1.jpg')}}" data-height="200"/> --}}
															<input type="file" name="photo_r2" class="dropify" data-height="200" accept="image/*"/>
														</div>
													</div>
												</div>
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>
						{{-- 3rd reserv --}}
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										<h2 style="font-weight: bold;">اللاعب الاحتياطي الثالث </h2>
									</div>
									<p class="mg-b-20"></p>									
									<div class="row row-sm">
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font"> الاسم<span class="tx-danger">*</span></label>
											<input type="text" name="reserve_3_name" value="{{ old('leader_name') }}" class="form-control" id="" >                                
										</div>
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font">اللقب<span class="tx-danger">*</span></label>
											<input type="text" name="reserve_3_familyname" class="form-control" id=""  >
										</div>
										<div class="col-lg-12 col-sm-12">
											<div class="card">
												<div class="card-body">
													<div>
														<h4 class=" mb-1">صورة</h4>
														<p class="text-muted card-sub-title">اختر ملفًا أو اسحبه هنا</p>
													</div>
													<div class="row mb-4">
														<div class="col-lg-12 col-sm-12 mg-t-10 mg-sm-t-0">
															{{-- <input type="file" class="dropify" data-default-file="{{URL::asset('assets/img/photos/1.jpg')}}" data-height="200"/> --}}
															<input type="file" name="photo_r3" class="dropify" data-height="200" accept="image/*"/>
														</div>
													</div>
												</div>
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>
						{{-- 4th reserv --}}
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										<h2 style="font-weight: bold;">اللاعب الاحتياطي الرابع </h2>
									</div>
									<p class="mg-b-20"></p>									
									<div class="row row-sm">
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font"> الاسم<span class="tx-danger">*</span></label>
											<input type="text" name="reserve_4_name" value="{{ old('leader_name') }}" class="form-control" id="" >                                
										</div>
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font">اللقب<span class="tx-danger">*</span></label>
											<input type="text" name="reserve_4_familyname" class="form-control" id=""  >
										</div>
										<div class="col-lg-12 col-sm-12">
											<div class="card">
												<div class="card-body">
													<div>
														<h4 class=" mb-1">صورة</h4>
														<p class="text-muted card-sub-title">اختر ملفًا أو اسحبه هنا</p>
													</div>
													<div class="row mb-4">
														<div class="col-lg-12 col-sm-12 mg-t-10 mg-sm-t-0">
															{{-- <input type="file" class="dropify" data-default-file="{{URL::asset('assets/img/photos/1.jpg')}}" data-height="200"/> --}}
															<input type="file" name="photo_r4" class="dropify" data-height="200" accept="image/*"/>
														</div>
													</div>
												</div>
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 text-center mb-4"><button class="btn btn-main-primary pd-x-20 mg-t-10" style="font-size: large;" type="submit">إرسال المعلومات <i class="fas fa-arrow-circle-left   mr-3 "></i></button></div>
					</div>
				</form>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal  Parsley.min js -->
<script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<!-- Internal Form-validation js -->
<script src="{{URL::asset('assets/js/form-validation.js')}}"></script>
<!--Internal  Datepicker js -->
{{-- <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script> --}}
<!-- Internal Select2 js-->
{{-- <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script> --}}
<!--Internal Fileuploads js-->
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
<!--Internal Fancy uploader js-->
{{-- <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script> --}}
<!--Internal  Form-elements js-->
{{-- <script src="{{URL::asset('assets/js/advanced-form-elements.js')}}"></script> --}}
{{-- <script src="{{URL::asset('assets/js/select2.js')}}"></script> --}}
<!--Internal Sumoselect js-->
{{-- <script src="{{URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script> --}}
<!-- Internal TelephoneInput js-->
{{-- <script src="{{URL::asset('assets/plugins/telephoneinput/telephoneinput.js')}}"></script> --}}
{{-- <script src="{{URL::asset('assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script> --}}
@endsection