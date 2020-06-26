@extends('layouts.main')

@section('content')


<div class="content d-flex flex-column flex-column-fluid " id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline mr-5">
										<!--begin::Page Title-->
										<h2 class="subheader-title text-dark font-weight-bold my-2 mr-3">Edit Slide</h2>
										<!--end::Page Title-->
										<!--begin::Breadcrumb-->
										
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								<!--end::Toolbar-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<!--begin::Card-->
										<div class="card card-custom gutter-b example example-compact">
											
											<!--begin::Form-->
											<form action="{{ route('slides.update',$edit->id) }}" method="post" enctype="multipart/form-data">
												@csrf
												@method('put')
												<div class="card-body">
													
													<div class="form-group">
														<label>Slide Name</label>
														<input type="text" name="slide_name" value="{{ $edit->slide_name }}" class="form-control" />
														
													</div>




													


													
													<div class="form-group">
														<label>Slide Image</label>
														<input type="file" name="slide_image" value="{{ $edit->slide_image }}" class="form-control"  />
														
													</div>


													<div class="form-group">
														<label>Slide Description</label>
														<input type="text" name="slide_description" value="{{ $edit->slide_description }}" class="form-control"  />
														
													</div>
													<div class="form-group">
														<label>Slide Link</label>
														<input type="text" name="slide_link" value="{{ $edit->slide_link }}" class="form-control"  />
														
													</div>
													<div class="form-group">
														<label>Slide Status</label>
														<input type="text" name="slide_status" value="{{ $edit->slide_status }}" class="form-control"  />
														
													</div>
													
													<!--begin: Code-->
													
													<!--end: Code-->
												</div>
												<div class="card-footer">
													<button type="submit" class="btn btn-primary mr-2">Submit</button>
													<button type="reset" class="btn btn-secondary">Cancel</button>
												</div>
											</form>
											<!--end::Form-->
										</div>
										<!--end::Card-->
										
										<!--end::Card-->
									</div>
								</div>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
@endsection					
