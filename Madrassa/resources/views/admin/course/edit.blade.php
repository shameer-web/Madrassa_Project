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
										<h2 class="subheader-title text-dark font-weight-bold my-2 mr-3">Edit Course</h2>
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
											<form action="{{ route('courses.update',$edit->id) }}" method="post" enctype="multipart/form-data">
												@csrf
												@method('put')
												<div class="card-body">
													
													<div class="form-group">
														<label>Course Name</label>
														<input type="text" name="course_name" value="{{ $edit->course_name }}" class="form-control" placeholder="Enter Course Name" />
														
													</div>




													{{-- <input type="hidden" name="course_description" value="{{ $edit->course_description }}" > --}}


													<div class="form-group">
														<label>Course Description</label>
														<input type="text" name="course_description" value="{{ $edit->course_description }}" class="form-control" placeholder="Enter Course Description" />
														
													</div>
													<div class="form-group">
														<label>Course Image</label>
														<input type="file" name="course_image" value="{{ $edit->course_image }}" class="form-control" placeholder="Enter Course Name" />
														
													</div>
													<div class="form-group">
														<label>Course Duration</label>
														<input type="text" name="course_duration" value="{{ $edit->course_duration }}" class="form-control" placeholder="Enter Course Duration" />
														
													</div>
													<div class="form-group">
														<label>Course Duration Type</label>
														<input type="text" name="course_duration_type" value="{{ $edit->course_duration_type }}" class="form-control" placeholder="Enter Course Duration Type" />
														
													</div>
													<div class="form-group">
														<label>Course Category</label>
														<input type="text" name="course_category" class="form-control" value="{{ $edit->course_category }}" placeholder="Enter Course Category" />
														
													</div>

													<div class="form-group">
														<label>Course Student Type</label>
														<input type="text" name="course_student_type" value="{{ $edit->course_student_type }}" class="form-control" placeholder="Enter Course Student Type" />
														
													</div>

													<div class="form-group">
														<label>Course Status</label>
														<input type="text" name="course_status" value="{{ $edit->course_status }}" class="form-control" placeholder="Enter Course Status" />
														
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
