@extends('layoutadmin')
@section ('admin_content')
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-6">
								<div class="row">
									<div class="col-xl-12">
										<div class="card tryal-gradient">
											<div class="card-body tryal row">
												<div class="col-xl-7 col-sm-6">
													<h2>Manage your project in one touch</h2>
													<span>Let Fillow manage your project automatically with our best AI systems </span>
													<a href="javascript:void(0);" class="btn btn-rounded  fs-18 font-w500">Try Free Now</a>
												</div>
												<div class="col-xl-5 col-sm-6">
													<img src="{{('public/FontEnd/adminpage/admin_pages/images/chart.png')}}" alt="" class="sd-shape">
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="card">
											<div class="card-header border-0 flex-wrap">
												<h4 class="fs-20 font-w700 mb-2">Project Statistics</h4>
												<div class="d-flex align-items-center project-tab mb-2">
													<div class="card-tabs mt-3 mt-sm-0 mb-3 ">
														<ul class="nav nav-tabs" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" data-bs-toggle="tab" href="#monthly" role="tab">Monthly</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-bs-toggle="tab" href="#Weekly" role="tab">Weekly</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-bs-toggle="tab" href="#Today" role="tab">Today</a>
															</li>
														</ul>
													</div>
													<div class="dropdown ms-2">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body">
												<div class="d-flex justify-content-between align-items-center flex-wrap">
													<div class="d-flex">
														<div class="d-inline-block position-relative donut-chart-sale mb-3">
															<span class="donut1" data-peity='{ "fill": ["rgba(136,108,192,1)", "rgba(241, 234, 255, 1)"],   "innerRadius": 20, "radius": 15}'>5/8</span>
														</div>
														<div class="ms-3">
															<h4 class="fs-24 font-w700 ">246</h4>
															<span class="fs-16 font-w400 d-block">Total Projects</span>
														</div>
													</div>
													<div class="d-flex">
														<div class="d-flex me-5">
															<div class="mt-2">
																<svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<circle cx="6.5" cy="6.5" r="6.5" fill="#FFCF6D"></circle>
																</svg>
															</div>
															<div class="ms-3">
																<h4 class="fs-24 font-w700 ">246</h4>
																<span class="fs-16 font-w400 d-block">On Going</span>
															</div>
														</div>
														<div class="d-flex">
															<div class="mt-2">
																<svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<circle cx="6.5" cy="6.5" r="6.5" fill="#FFA7D7"></circle>
																</svg>

															</div>
															<div class="ms-3">
																<h4 class="fs-24 font-w700 ">28</h4>
																<span class="fs-16 font-w400 d-block">Unfinished</span>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-content">
													<div class="tab-pane fade active show" id="monthly">
														<div id="chartBar" class="chartBar"></div>
													</div>
													<div class="tab-pane fade" id="Weekly">
														<div id="chartBar1" class="chartBar"></div>
													</div>
													<div class="tab-pane fade" id="Today">
														<div id="chartBar2" class="chartBar"></div>
													</div>
												</div>
												<div class="d-flex align-items-center">
													<label class="form-check-label font-w400 fs-16 mb-0" for="flexSwitchCheckChecked1">Number</label>
													<div class="form-check form-switch toggle-switch">
														<input class="form-check-input custome" type="checkbox" id="flexSwitchCheckChecked1" checked="">

													</div>
													<label class="form-check-label font-w400 fs-16 mb-0 ms-3" for="flexSwitchCheckChecked2">Analytics</label>
													<div class="form-check form-switch toggle-switch">
														<input class="form-check-input custome" type="checkbox" id="flexSwitchCheckChecked2" checked="">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="card">
											<div class="card-header border-0 pb-0">
												<h4 class="fs-20 font-w700 mb-0">Completion Project Rate</h4>
												<div class="dropdown ">
													<div class="btn-link" data-bs-toggle="dropdown">
														<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
														</svg>
													</div>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="javascript:void(0)">Delete</a>
														<a class="dropdown-item" href="javascript:void(0)">Edit</a>
													</div>
												</div>
											</div>
											<div class="card-body pb-0">
												<div id="revenueMap" class="revenueMap"></div>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="card">
											<div class="card-header border-0">
												<div>
													<h4 class="fs-20 font-w700">Recent Emails</h4>
													<span class="fs-14 font-w400">Lorem ipsum dolor sit amet</span>
												</div>
												<div>
													<a href="javascript:void(0);" class="btn btn-outline-primary btn-rounded fs-18">View More</a>
												</div>
											</div>
											<div class="card-body px-0">
												<div class="d-flex justify-content-between recent-emails">
													<div class="d-flex">
														<div class="profile-k">
															<span class="bg-success">K</span>
														</div>
														<div class="ms-3">
															<h4 class="fs-18 font-w500">How to improve project management flows</h4>
															<span class="font-w400 d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua...</span>
														</div>
													</div>
													<div class="email-check">
														<label class="like-btn mb-0">
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
													</div>
												</div>
												<div class="d-flex justify-content-between recent-emails">
													<div class="d-flex">
														<div class="profile-k">
															<img src="{{('public/FontEnd/adminpage/admin_pages/images/profile/small/pic6.jpg')}}" alt="">
														</div>
														<div class="ms-3">
															<h4 class="fs-18 font-w500">Fillow Final UseCase Diagram</h4>
															<span class="font-w400 d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua...</span>
															<div class="final-badge">
																<span class="badge text-black border"><i class="far fa-file-alt me-3"></i>Master_file.fig</span>
																<span class="badge text-black border"><i class="fas fa-image me-2"></i>CoverPreview.jpg</span>
																<span class="badge border bgl-primary font-w700">4 files more</span>
															</div>
														</div>
													</div>
													<div class="email-check">
														<label class="like-btn mb-0">
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
													</div>
												</div>
												<div class="d-flex justify-content-between recent-emails">
													<div class="d-flex">
														<div class="profile-k">
															<span class="bg-warning">G</span>
														</div>
														<div class="ms-3">
															<h4 class="fs-18 font-w500">Weekly Design Inspirations by Envato</h4>
															<span class="font-w400 d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua...</span>
														</div>
													</div>
													<div class="email-check">
														<label class="like-btn mb-0">
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
													</div>
												</div>
												<div class="d-flex justify-content-between recent-emails">
													<div class="d-flex">
														<div class="profile-k">
															<img src="{{('public/FontEnd/adminpage/admin_pages/images/profile/small/pic8.jpg')}}" alt="">
														</div>
														<div class="ms-3">
															<h4 class="fs-18 font-w500">How to improve project management flows</h4>
															<span class="font-w400 d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua...</span>
														</div>
													</div>
													<div class="email-check">
														<label class="like-btn mb-0">
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="col-xl-6">
								<div class="row">
									<div class="col-xl-12">
										<div class="row">
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body d-flex px-4 pb-0 justify-content-between">
														<div>
															<h4 class="fs-18 font-w600 mb-4 text-nowrap">Total Clients</h4>
															<div class="d-flex align-items-center">
																<h2 class="fs-32 font-w700 mb-0">68</h2>
																<span class="d-block ms-4">
																	<svg width="21" height="11" viewbox="0 0 21 11" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M1.49217 11C0.590508 11 0.149368 9.9006 0.800944 9.27736L9.80878 0.66117C10.1954 0.29136 10.8046 0.291359 11.1912 0.661169L20.1991 9.27736C20.8506 9.9006 20.4095 11 19.5078 11H1.49217Z" fill="#09BD3C"></path>
																	</svg>
																	<small class="d-block fs-16 font-w400 text-success">+0,5%</small>
																</span>
															</div>
														</div>
														<div id="columnChart"></div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body px-4 pb-0">
														<h4 class="fs-18 font-w600 mb-5 text-nowrap">Total Clients</h4>
														<div class="progress default-progress">
															<div class="progress-bar bg-gradient1 progress-animated" style="width: 40%; height:10px;" role="progressbar">
																<span class="sr-only">45% Complete</span>
															</div>
														</div>
														<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
															<span>76 left from target</span>
															<h4 class="mb-0">42</h4>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body d-flex px-4  justify-content-between">
														<div>
															<div class="">
																<h2 class="fs-32 font-w700">562</h2>
																<span class="fs-18 font-w500 d-block">Total Clients</span>
																<span class="d-block fs-16 font-w400"><small class="text-danger">-2%</small> than last month</span>
															</div>
														</div>
														<div id="NewCustomers"></div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body d-flex px-4  justify-content-between">
														<div>
															<div class="">
																<h2 class="fs-32 font-w700">892</h2>
																<span class="fs-18 font-w500 d-block">New Projects</span>
																<span class="d-block fs-16 font-w400"><small class="text-success">-2%</small> than last month</span>
															</div>
														</div>
														<div id="NewCustomers1"></div>
													</div>
												</div>
											</div>
										</div>

									</div>
									<div class="col-xl-12">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-xl-6 col-sm-6">
														<div class=" owl-carousel card-slider">
															<div class="items">
																<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile Website Project</h4>
																<span class="fs-14 font-w400">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </span>
															</div>
															<div class="items">
																<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile Website Project</h4>
																<span class="fs-14 font-w400">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </span>
															</div>
															<div class="items">
																<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile Website Project</h4>
																<span class="fs-14 font-w400">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </span>
															</div>
														</div>
													</div>
													<div class="col-xl-6 redial col-sm-6">
														<div id="redial"></div>
														<span class="text-center d-block fs-18 font-w600">On Progress <small class="text-success">70%</small></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12">
										<div class="row">
											<div class="col-xl-6 col-xxl-12 col-sm-6">
												<div class="card">
													<div class="card-header border-0">
														<div>
															<h4 class="fs-20 font-w700">Email Categories</h4>
															<span class="fs-14 font-w400 d-block">Lorem ipsum dolor sit amet</span>
														</div>
													</div>
													<div class="card-body">
														<div id="emailchart"> </div>
														<div class="mb-3 mt-4">
															<h4 class="fs-18 font-w600">Legend</h4>
														</div>
														<div>
															<div class="d-flex align-items-center justify-content-between mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6" fill="#886CC0"></rect>
																	</svg>
																	Primary (27%)
																</span>
																<span class="fs-18 font-w600">763</span>
															</div>
															<div class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6" fill="#26E023"></rect>
																	</svg>
																	Promotion (11%)
																</span>
																<span class="fs-18 font-w600">321</span>
															</div>
															<div class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6" fill="#61CFF1"></rect>
																	</svg>
																	Forum (22%)
																</span>
																<span class="fs-18 font-w600">69</span>
															</div>
															<div class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6" fill="#FFDA7C"></rect>
																	</svg>
																	Socials (15%)
																</span>
																<span class="fs-18 font-w600">154</span>
															</div>
															<div class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6" fill="#FF86B1"></rect>
																	</svg>
																	Spam (25%)
																</span>
																<span class="fs-18 font-w600">696</span>
															</div>
														</div>

													</div>
													<div class="card-footer border-0 pt-0">
														<a href="javascript:void(0);" class="btn btn-outline-primary d-block btn-rounded">Update Progress</a>

													</div>
												</div>
											</div>
											<div class="col-xl-6 col-xxl-12 col-sm-6">
												<div class="card">
													<div class="card-header border-0 pb-0">
														<div>
															<h4 class="fs-20 font-w700">Important Projects</h4>
															<span class="fs-14 font-w400 d-block">Lorem ipsum dolor sit amet</span>
														</div>
													</div>
													<div class="card-body pb-0">
														<div class="project-details">
															<div class="d-flex align-items-center justify-content-between">
																<div class="d-flex align-items-center">
																	<span class="big-wind">
																		<img src="{{('public/FontEnd/adminpage/admin_pages/images/big-wind.png')}}" alt="">
																	</span>
																	<div class="ms-3">
																		<h4>Big Wind</h4>
																		<span class="fs-14 font-w400">Creative Agency</span>
																	</div>
																</div>
																<div class="dropdown">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
																		</svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="javascript:void(0)">Delete</a>
																		<a class="dropdown-item" href="javascript:void(0)">Edit</a>
																	</div>
																</div>
															</div>
															<h4 class="fs-16 font-w600 mt-4">Optimization Dashboard Page for indexing in Google</h4>
															<div class="projects">
																<span class="badge bgl-warning text-warning font-w700 me-3">SEO</span>
																<span class="badge bgl-danger text-danger font-w700">MARKETING</span>
															</div>
															<div class="mt-3">
																<div class="progress default-progress">
																	<div class="progress-bar bg-gradient1 progress-animated" style="width: 45%; height:10px;" role="progressbar">
																		<span class="sr-only">45% Complete</span>
																	</div>
																</div>
																<div class="d-flex align-items-end mt-3 pb-3 justify-content-between">
																	<span class="fs-14 font-w400"><small class="font-w700 me-2">12</small>Task Done</span>
																	<span class="fs-14 font-w400">Due date: 12/05/2020</span>
																</div>
															</div>
														</div>
														<div class="project-details">
															<div class="d-flex align-items-center justify-content-between">
																<div class="d-flex align-items-center">
																	<span class="big-wind">
																		<img src="{{('public/FontEnd/adminpage/admin_pages/images/circle-hunt.png')}}" alt="">
																	</span>
																	<div class="ms-3">
																		<h4>Circle Hunt</h4>
																		<span class="fs-14 font-w400">Creative Agency</span>
																	</div>
																</div>
																<div class="dropdown">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
																		</svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="javascript:void(0)">Delete</a>
																		<a class="dropdown-item" href="javascript:void(0)">Edit</a>
																	</div>
																</div>
															</div>
															<h4 class="fs-16 font-w600 mt-4">Redesign Landing Page Website for Company Profile</h4>
															<div class="projects">
																<span class="badge bgl-primary text-primary font-w700 me-3">UI/UX</span>
																<span class="badge bgl-danger text-danger font-w700">WEBSITE</span>
															</div>
															<div class="mt-3">
																<div class="progress default-progress">
																	<div class="progress-bar bg-gradient1 progress-animated" style="width: 45%; height:10px;" role="progressbar">
																		<span class="sr-only">45% Complete</span>
																	</div>
																</div>
																<div class="d-flex align-items-end mt-3 pb-3 justify-content-between">
																	<span class="fs-14 font-w400"><small class="font-w700 me-2">12</small>Task Done</span>
																	<span class="fs-14 font-w400">Due date: 12/05/2020</span>
																</div>
															</div>
														</div>
													</div>
													<div class="card-footer pt-0 border-0">
														<a href="javascript:void(0);" class="btn btn-outline-primary d-block btn-rounded">Pin other projects</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12">
										<div class="card">
											<div class="card-header border-0">
												<div>
													<h4 class="fs-20 font-w700">Messages</h4>
													<span>Lorem ipsum dolor sit amet</span>
												</div>
												<div>
													<a href="javascript:void(0);" class="btn btn-primary btn-rounded">+New Messages</a>
												</div>
											</div>
											<div class="card-body px-0">
												<div class="msg-bx d-flex justify-content-between align-items-center">
													<div class="msg d-flex align-items-center w-100">
														<div class="image-box active">
															<img src="{{('public/FontEnd/adminpage/admin_pages/images/profile/small/pic6.jpg')}}" alt="">
														</div>
														<div class="ms-3 w-100 ">
															<h4 class="fs-18 font-w600">Maren Rosser</h4>
															<div class="d-flex justify-content-between">
																<span class="me-auto">Hei, dont forget to clear server cache!</span>
																<span class="me-4 fs-12">25min ago</span>
															</div>
														</div>

													</div>
													<div class="dropdown">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</div>
												<div class="msg-bx d-flex justify-content-between align-items-center">
													<div class="msg d-flex align-items-center w-100">
														<div class="image-box">
															<img src="{{('public/FontEnd/adminpage/admin_pages/images/profile/small/pic7.jpg')}}" alt="">
														</div>
														<div class="ms-3 w-100">
															<h4 class="fs-18 font-w600">Kaiya Bergson</h4>
															<div class="d-flex justify-content-between">
																<span class="me-auto">I remember that project due is tomorrow.</span>
																<span class="me-4 fs-12">Yesterday, 8:24 AM</span>
															</div>
														</div>
													</div>
													<div class="dropdown">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</div>
												<div class="msg-bx d-flex justify-content-between align-items-center">
													<div class="msg d-flex align-items-center w-100">
														<div class="image-box active">
															<img src="{{('public/FontEnd/adminpage/admin_pages/images/profile/small/pic4.jpg')}}" alt="">
														</div>
														<div class="ms-3 w-100">
															<h4 class="fs-18 font-w600">Ruben Press</h4>
															<div class="d-flex justify-content-between">
																<span class="me-auto">Ok sir. I will fix it as soon as possible</span>
																<span class="me-4 fs-12">December 12th, 2020 10:24 AM</span>
															</div>
														</div>
													</div>
													<div class="dropdown">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</div>
												<div class="msg-bx d-flex justify-content-between align-items-center">
													<div class="msg d-flex align-items-center w-100">
														<div class="image-box active">
															<img src="{{('public/FontEnd/adminpage/admin_pages/images/profile/small/pic3.jpg')}}" alt="">
														</div>
														<div class="ms-3 w-100">
															<h4 class="fs-18 font-w600">Cristofer Torff</h4>
															<div class="d-flex justify-content-between">
																<span class="me-auto">Maybe we should schedule that meeting</span>
																<span class="me-4 fs-12">December 12th, 2020 10:24 AM</span>
															</div>
														</div>
													</div>
													<div class="dropdown">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</div>
												<div class="msg-bx d-flex justify-content-between align-items-center">
													<div class="msg d-flex align-items-center w-100">
														<div class="image-box active">
															<img src="{{('public/FontEnd/adminpage/admin_pages/images/profile/small/pic5.jpg')}}" alt="">
														</div>
														<div class="ms-3 w-100">
															<h4 class="fs-18 font-w600">Ann Rosser</h4>
															<div class="d-flex justify-content-between">
																<span class="me-auto">I dont’t know where that files saved dude.</span>
																<span class="me-4 fs-12">Yesterday, 8:24 AM</span>
															</div>
														</div>
													</div>
													<div class="dropdown">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Content body end
        ***********************************-->


@endsection

		<!--**********************************
            Footer start
        ***********************************-->
		
	<!-- <script src="{{('public/FontEnd/adminpage/admin_pages/js/styleSwitcher.js')}}"></script> -->
	<script>
		function cardsCenter() {

			/*  testimonial one function by = owl.carousel.js */



			jQuery('.card-slider').owlCarousel({
				loop: true,
				margin: 0,
				nav: true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive: {
					0: {
						items: 1
					},
					576: {
						items: 1
					},
					800: {
						items: 1
					},
					991: {
						items: 1
					},
					1200: {
						items: 1
					},
					1600: {
						items: 1
					}
				}
			})
		}

		jQuery(window).on('load', function() {
			setTimeout(function() {
				cardsCenter();
			}, 1000);
		});
	</script>

</body>

</html>