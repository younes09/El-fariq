@extends('layouts.master')
@section('css')
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
				{{-- search row --}}
				<form action="{{ url('search') }}" method="POST">
					@csrf
					<div class="row">
						<div class="col-lg-4 mg-t-20 mg-lg-t-0">
							<div class="input-group">
								<input name="search" class="form-control" placeholder="أكتب إسم الفريق ..." type="text"><span class="input-group-btn"><button class="btn btn-primary" type="submit"><span class="input-group-btn"><i class="fa fa-search"></i></span></button></span>
							</div><!-- input-group -->
						</div>
					</div>
				</form>
				<br><br><br>
				<!-- row -->	
				<div class="row row-sm"> 
					@if (count($teams) == 0)
						<div class="col-12 text-center">
							<h1> لا يوجد أي معلومات!</h1>
						</div>
					@else
						@foreach ($teams as $temp)
						<div class="col-xl-2 col-lg-4 col-md-12"> 
							<div class="card text-center"> 
								{{-- <img class="card-img-top w-100" src="{{ url('images/'.$temp->team_logo) }}" alt="">  --}}
								<div class="card-img-top w-100 text-center" style="background-color: #ebeaea;">
									<div style="background: url({{ url('images/'.$temp->team_logo) }}) no-repeat center;background-size: contain;height: 150px;margin: 0.5rem;"></div>
								</div>
								<div class="card-body"> 
									<h2 class=" mb-3">{{ $temp->team_name }}</h2> 
									<a class="btn btn-primary" href="{{ url('home/'.$temp->id.'/edit') }}">Show</a> 
								</div> 
							</div> 
						</div> 
						@endforeach
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