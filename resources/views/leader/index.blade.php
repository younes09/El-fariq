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
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									<h2 style="font-weight: bold;">معلومات خاصة برائد الفريق</h2>
								</div>
								<p class="mg-b-20"><h6>هو من يمثل الفريق و يتكلم باسمه و نيابة عنه (تفويض رسمي اجباري)</h6></p>
								<form action="{{ url('/leader') }}" method="POST" enctype="multipart/form-data" data-parsley-validate="">
									@csrf
									<div class="row row-sm">
										<div class="col-lg-3 col-sm-12 mb-3">
											<label for="" class="form-label form-font"> الاسم<span class="tx-danger">*</span></label>
											<input type="text" name="leader_name" value="{{ old('leader_name') }}" class="form-control" id="" required>                                
										</div>
										<div class="col-lg-3 col-sm-12 mb-3">
											<label for="" class="form-label form-font">اللقب<span class="tx-danger">*</span></label>
											<input type="text" name="leader_famely_name" class="form-control" id=""  required>
										</div>
										<div class="col-lg-3 col-sm-12 mb-3">
											<label for="" class="form-label form-font">تاريخ الميلاد<span class="tx-danger">*</span></label>
											<input type="date" name="leader_birth_day" class="form-control" id=""  required>
										</div>
										<div class="col-lg-3 col-sm-12 mb-3">
											<label for="" class="form-label form-font">رقم الجوال<span class="tx-danger">*</span></label>
											<input type="tel" name="leader_phone" class="form-control" id="" maxlength="10"  required>
										</div>
										<div class="col-lg-3 col-sm-12 mb-3">
											<label for="" class="form-label form-font">البريد الالكتروني<span class="tx-danger">*</span></label>
											<input type="email" name="leader_mail" class="form-control" id="" aria-describedby="emailHelp" required>
										</div>
										<div class="col-lg-3 col-sm-12 mb-3">
											<label for="" class="form-label form-font">العنوان<span class="tx-danger">*</span></label>
											<input type="text" name="leader_addres" class="form-control" id=""  required>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="card">
												<div class="card-body">
													<div>
														<h4 class=" mb-1">صورة</h4>
														<p class="text-muted card-sub-title">اختر ملفًا أو اسحبه هنا</p>
													</div>
													<div class="row mb-4">
														<div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
															{{-- <input type="file" class="dropify" data-default-file="{{URL::asset('assets/img/photos/1.jpg')}}" data-height="200"/> --}}
															<input type="file" name="leader_photo" class="dropify" data-height="200" accept="image/*"/>
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