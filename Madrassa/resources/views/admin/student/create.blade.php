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
										<h2 class="subheader-title text-dark font-weight-bold my-2 mr-3">Create Student Details</h2>
										<!--end::Page Title-->
										
									</div>
									<!--end::Page Heading-->
								</div>
								
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
											<form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
												@csrf
												<div class="card-body">
													
													<div class="form-group">
														<label>Name</label>
														<input type="text" name="name" class="form-control" placeholder="Enter  Name" />
														
													</div>

													<div class="form-group">
														<label>Email</label>
														<input type="text" name="email" class="form-control" placeholder="Enter  Email" />
														
													</div>

													<div class="form-group">
														<label>Mobile Number</label>
														<input type="text" name="mobile" class="form-control" placeholder="Enter  Mobile Number" />
														
													</div>


													<div class="form-group">
														<label>Password</label>
														<input type="password" name="password" class="form-control" placeholder="Enter Password" />
														
													</div>



													<div class="form-group">
														<label>Student Name</label>
														<input type="text" name="student_name" class="form-control" placeholder="Enter Student Name" />
														
													</div>


													<div class="form-group">
														<label>Student Date Of Birth</label>
														<input type="date" name="student_dob" class="form-control" placeholder="Enter SStudent Date Of Birth" />
														
													</div>


													{{-- <div class="form-group">
														<label>Student Gender</label>
														<input type="text" name="student_gender" class="form-control" placeholder="Enter Student Name" />
														
													</div> --}}



													<div class="form-group">
														<label for="exampleSelect1">Student Gender</label>
														<select name="student_gender" class="form-control" id="exampleSelect1" placeholder="Enter Student Gender">
															<option>Male</option>
															<option>Female</option>
														</select>
													</div>


													<div class="form-group">
														<label>Student Mother Name</label>
														<input type="text" name="student_mother" class="form-control" placeholder="Enter Student Mother Name" />
														
													</div>



													<div class="form-group">
														<label>Student Father Name</label>
														<input type="text" name="student_father" class="form-control" placeholder="Enter Student Father Name" />
														
													</div>


													<div class="form-group">
														<label>Student Guardian Name</label>
														<input type="text" name="student_guardian" class="form-control" placeholder="Enter Student Guardian Name" />
														
													</div>


													<div class="form-group">
														<label>Student Address</label>
														<input type="text" name="student_address" class="form-control" placeholder="Enter Student Address" />
														
													</div>


													<div class="form-group">
														<label>Student Picodes</label>
														<input type="text" name="student_picode" class="form-control" placeholder="Enter Student Picodes" />
														
													</div>




													<div class="form-group">
														<label>Student Whatsapp</label>
														<input type="text" name="student_whatsapp" class="form-control" placeholder="Enter Student Whatsapp Number" />
														
													</div>



													<div class="form-group">
														<label>Student Current School</label>
														<input type="text" name="student_current_school" class="form-control" placeholder="Enter Student Current School" />
														
													</div>


                                                    <div class="form-group">
														<label>Student Current Madrassa</label>
														<input type="text" name="student_current_madrassa" class="form-control" placeholder="Enter Student Current Madrassa" />
														
													</div>




													<div class="form-group">
														<label>Student Blood Group</label>
														<input type="text" name="student_blood" class="form-control" placeholder="Enter Student Blood Group" />
														
													</div>


													<div class="form-group">
														<label>Student Status</label>
														<input type="text" name="student_status" class="form-control" placeholder="Enter Student Status" />
														
													</div>

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
