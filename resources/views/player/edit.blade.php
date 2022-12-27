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
				<form action="{{ url('player/'.$players->id) }}" method="POST" enctype="multipart/form-data" data-parsley-validate="">
					@csrf
					@method('PUT')
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										<h2 style="font-weight: bold;">اسماء اللاعبين الاساسيين</h2>
									</div>
									<p class="mg-b-20"><h6>ادخل اسم و لقب كل لاعب اساسي </h6></p>
								</div>
							</div>
						</div>
						{{-- first player --}}
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										<h2 style="font-weight: bold;">اللاعب الاول (رائد الفريق) </h2>
									</div>
									<p class="mg-b-20"></p>									
									<div class="row row-sm">
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font"> الاسم<span class="tx-danger">*</span></label>
											<input type="text" name="player_1_name" value="{{ $leader->leader_name }}" class="form-control" id="" disabled>                                
										</div>
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font">اللقب<span class="tx-danger">*</span></label>
											<input type="text" name="player_1_familyname" value="{{ $leader->leader_famely_name }}" class="form-control" id=""  disabled>
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
															<input type="file" name="photo_p1" class="dropify" data-default-file="{{url('images/'.$leader->leader_photo)}}" data-height="200" accept="image/*" disabled/>
														</div>
													</div>
												</div>
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>
						{{-- 2nd player --}}
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										<h2 style="font-weight: bold;">اللاعب الثاني</h2>
									</div>
									<p class="mg-b-20"></p>
									<div class="row row-sm">
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font">الاسم<span class="tx-danger">*</span></label>
											<input type="text" name="player_2_name" value="{{ $players->player_2_name }}" class="form-control" id="" required>                                
										</div>
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font">اللقب<span class="tx-danger">*</span></label>
											<input type="text" name="player_2_familyname" value="{{ $players->player_2_familyname }}" class="form-control" id=""  required>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="card">
												<div class="card-body">
													<div>
														<h4 class=" mb-1">صورة</h4>
														<p class="text-muted card-sub-title">اختر ملفًا أو اسحبه هنا</p>
													</div>
													<div class="row mb-4">
														<div class="col-sm-12 col-md-12 mg-t-10 mg-sm-t-0">
															{{-- <input type="file" class="dropify" data-default-file="{{URL::asset('assets/img/photos/1.jpg')}}" data-height="200"/> --}}
															<input type="file" name="photo_p2" data-default-file="{{url('images/'.$players->photo_p2)}}" class="dropify" data-height="200" accept="image/*"/>
														</div>
													</div>
												</div>
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>
						{{-- 3rd player --}}
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										<h2 style="font-weight: bold;">اللاعب الثالث</h2>
									</div>
									<p class="mg-b-20"></p>
									<div class="row row-sm">
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font">الاسم<span class="tx-danger">*</span></label>
											<input type="text" name="player_3_name" value="{{ $players->player_3_name }}" class="form-control" id="" required>                                
										</div>
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font">اللقب<span class="tx-danger">*</span></label>
											<input type="text" name="player_3_familyname" value="{{ $players->player_3_familyname }}" class="form-control" id=""  required>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="card">
												<div class="card-body">
													<div>
														<h4 class=" mb-1">صورة</h4>
														<p class="text-muted card-sub-title">اختر ملفًا أو اسحبه هنا</p>
													</div>
													<div class="row mb-4">
														<div class="col-sm-12 col-md-12 mg-t-10 mg-sm-t-0">
															{{-- <input type="file" class="dropify"  data-height="200"/> --}}
															<input type="file" name="photo_p3" data-default-file="{{url('images/'.$players->photo_p3)}}" class="dropify" data-height="200" accept="image/*"/>
														</div>
													</div>
												</div>
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>
						{{-- 4rd player --}}
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										<h2 style="font-weight: bold;">اللاعب الرابع</h2>
									</div>
									<p class="mg-b-20"></p>
									<div class="row row-sm">
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font">الاسم<span class="tx-danger">*</span></label>
											<input type="text" name="player_4_name" value="{{ $players->player_4_name }}" class="form-control" id="" required>                                
										</div>
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font">اللقب<span class="tx-danger">*</span></label>
											<input type="text" name="player_4_familyname" value="{{ $players->player_4_familyname }}" class="form-control" id=""  required>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="card">
												<div class="card-body">
													<div>
														<h4 class=" mb-1">صورة</h4>
														<p class="text-muted card-sub-title">اختر ملفًا أو اسحبه هنا</p>
													</div>
													<div class="row mb-4">
														<div class="col-sm-12 col-md-12 mg-t-10 mg-sm-t-0">
															{{-- <input type="file" class="dropify" data-default-file="{{URL::asset('assets/img/photos/1.jpg')}}" data-height="200"/> --}}
															<input type="file" name="photo_p4" data-default-file="{{url('images/'.$players->photo_p4)}}" class="dropify" data-height="200" accept="image/*"/>
														</div>
													</div>
												</div>
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>
						{{-- 5nd player --}}
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										<h2 style="font-weight: bold;">اللاعب الخامس</h2>
									</div>
									<p class="mg-b-20"></p>
									<div class="row row-sm">
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font">الاسم<span class="tx-danger">*</span></label>
											<input type="text" name="player_5_name" value="{{ $players->player_5_name }}" class="form-control" id="" required>                                
										</div>
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font">اللقب<span class="tx-danger">*</span></label>
											<input type="text" name="player_5_familyname" value="{{ $players->player_5_familyname }}" class="form-control" id=""  required>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="card">
												<div class="card-body">
													<div>
														<h4 class=" mb-1">صورة</h4>
														<p class="text-muted card-sub-title">اختر ملفًا أو اسحبه هنا</p>
													</div>
													<div class="row mb-4">
														<div class="col-sm-12 col-md-12 mg-t-10 mg-sm-t-0">
															{{-- <input type="file" class="dropify" data-default-file="{{URL::asset('assets/img/photos/1.jpg')}}" data-height="200"/> --}}
															<input type="file" name="photo_p5" data-default-file="{{url('images/'.$players->photo_p5)}}" class="dropify" data-height="200" accept="image/*"/>
														</div>
													</div>
												</div>
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>
						{{-- 6rd player --}}
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										<h2 style="font-weight: bold;">اللاعب السادس</h2>
									</div>
									<p class="mg-b-20"></p>
									<div class="row row-sm">
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font">الاسم<span class="tx-danger">*</span></label>
											<input type="text" name="player_6_name" value="{{ $players->player_6_name }}" class="form-control" id="" required>                                
										</div>
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font">اللقب<span class="tx-danger">*</span></label>
											<input type="text" name="player_6_familyname" value="{{ $players->player_6_familyname }}" class="form-control" id=""  required>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="card">
												<div class="card-body">
													<div>
														<h4 class=" mb-1">صورة</h4>
														<p class="text-muted card-sub-title">اختر ملفًا أو اسحبه هنا</p>
													</div>
													<div class="row mb-4">
														<div class="col-sm-12 col-md-12 mg-t-10 mg-sm-t-0">
															{{-- <input type="file" class="dropify" data-default-file="{{URL::asset('assets/img/photos/1.jpg')}}" data-height="200"/> --}}
															<input type="file" name="photo_p6" data-default-file="{{url('images/'.$players->photo_p6)}}" class="dropify" data-height="200" accept="image/*"/>
														</div>
													</div>
												</div>
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>
						{{-- 7rd player --}}
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										<h2 style="font-weight: bold;">اللاعب السابع</h2>
									</div>
									<p class="mg-b-20"></p>
									<div class="row row-sm">
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font">الاسم<span class="tx-danger">*</span></label>
											<input type="text" name="player_7_name" value="{{ $players->player_7_name }}" class="form-control" id="" required>                                
										</div>
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font">اللقب<span class="tx-danger">*</span></label>
											<input type="text" name="player_7_familyname" value="{{ $players->player_7_familyname }}" class="form-control" id=""  required>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="card">
												<div class="card-body">
													<div>
														<h4 class=" mb-1">صورة</h4>
														<p class="text-muted card-sub-title">اختر ملفًا أو اسحبه هنا</p>
													</div>
													<div class="row mb-4">
														<div class="col-sm-12 col-md-12 mg-t-10 mg-sm-t-0">
															{{-- <input type="file" class="dropify" data-default-file="{{URL::asset('assets/img/photos/1.jpg')}}" data-height="200"/> --}}
															<input type="file" name="photo_p7" data-default-file="{{url('images/'.$players->photo_p7)}}" class="dropify" data-height="200" accept="image/*"/>
														</div>
													</div>
												</div>
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>
						{{-- 8rd player --}}
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										<h2 style="font-weight: bold;">اللاعب الثامن</h2>
									</div>
									<p class="mg-b-20"></p>
									<div class="row row-sm">
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font">الاسم<span class="tx-danger">*</span></label>
											<input type="text" name="player_8_name" value="{{ $players->player_8_name }}" class="form-control" id="" required>                                
										</div>
										<div class="col-lg-6 col-sm-12 mb-3">
											<label for="" class="form-label form-font">اللقب<span class="tx-danger">*</span></label>
											<input type="text" name="player_8_familyname" value="{{ $players->player_8_familyname }}" class="form-control" id=""  required>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="card">
												<div class="card-body">
													<div>
														<h4 class=" mb-1">صورة</h4>
														<p class="text-muted card-sub-title">اختر ملفًا أو اسحبه هنا</p>
													</div>
													<div class="row mb-4">
														<div class="col-sm-12 col-md-12 mg-t-10 mg-sm-t-0">
															{{-- <input type="file" class="dropify" data-default-file="{{URL::asset('assets/img/photos/1.jpg')}}" data-height="200"/> --}}
															<input type="file" name="photo_p8" data-default-file="{{url('images/'.$players->photo_p8)}}" class="dropify" data-height="200" accept="image/*"/>
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