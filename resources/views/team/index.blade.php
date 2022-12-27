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
				{{-- show errors --}}
				{{-- <div class="row">
					<div class="col-12">
						@if ($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif    
					</div>
				</div> --}}
				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									<h2 style="font-weight: bold;">معلومات عامة عن الفريق</h2>
								</div>
								<p class="mg-b-20"><h6>يتم تسجيل تشكيلة الفريق و المعلومات الاخرى من طرف رائد الفريق و هذا باسم الفريق و بتفويض منه
									لكل تشكيلة شعار - لونين مختلفين - رائد - 8 لاعبين و 4 احتياط</h6></p>
								<form action="{{ url('/team') }}" method="post" enctype="multipart/form-data" data-parsley-validate="">
									@csrf
									<div class="row row-sm">
										<div class="col-lg-4 col-sm-12 mb-3">
											<label for="" class="form-label form-font">ماهو اسم الفريق:<span class="tx-danger">*</span></label>
											<input type="text" name="team_name" value="{{ old('team_name') }}" class="form-control @error('team_name') is-invalid @enderror" id="team_name" required>                            
											@error('team_name')
												<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
										<div class="col-lg-4 col-sm-12 mb-3">
											<label for="" class="form-label form-font">الوان الفريق الاساسية:<span class="tx-danger">*</span></label>
											{{-- <input type="text" name="team_prencipal_color" class="form-control" id="" required> --}}
											<select name="team_prencipal_color[]" class="form-control select2" multiple="multiple" required>
												<option value="الأحمر">
													الأحمر
												</option>
												<option value="البرتقالي">
													البرتقالي
												</option>
												<option value="الأصفر">
													الأصفر
												</option>
												<option value="الأخضر">
													الأخضر
												</option>
												<option value="الأزرق">
													الأزرق
												</option>
												<option value="البنفسجي">
													البنفسجي
												</option>
												<option value="الأبيض">
													الأبيض
												</option>
												<option value="الأسود">
													الأسود
												</option>
											</select>
										</div>
										<div class="col-lg-4 col-sm-12 mb-3">
											<label for="" class="form-label form-font">الوان الفريق الاحتياطية:<span class="tx-danger">*</span></label>
											{{-- <input type="text" name="team_second_color" class="form-control" id=""  required> --}}
											<select name="team_second_color[]" class="form-control select2" multiple="multiple" required>
												<option value="الأحمر">
													الأحمر
												</option>
												<option value="البرتقالي">
													البرتقالي
												</option>
												<option value="الأصفر">
													الأصفر
												</option>
												<option value="الأخضر">
													الأخضر
												</option>
												<option value="الأزرق">
													الأزرق
												</option>
												<option value="البنفسجي">
													البنفسجي
												</option>
												<option value="الأبيض">
													الأبيض
												</option>
												<option value="الأسود">
													الأسود
												</option>
											</select>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="card">
												<div class="card-body">
													<div>
														<h4 class=" mb-1">شعار الفريق</h4>
														<p class="text-muted card-sub-title">اختر ملفًا أو اسحبه هنا</p>
													</div>
													<div class="row mb-4">
														<div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
															<input type="file" name="team_logo" class="dropify" data-height="200" accept="image/*"/>
														</div>
													</div>
												</div>
											</div>
										</div>										
										<div class="col-12 text-center"><button class="btn btn-main-primary pd-x-20 mg-t-10" style="font-size: large;" type="submit">إرسال المعلومات <i class="fas fa-arrow-circle-left   mr-3 "></i></button></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
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