@extends('layouts.main')
@section('content')
		
		
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-9 col-xxl-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-xl-6">
										<div class="card-bx bg-dark-red">
											<div class="card-info text-white">
												<h2 class="text-white card-balance">$824,571.93</h2>
												<p class="fs-16">Wallet Balance</p>
												<span>+0,8% than last week</span>
											</div>
											<a class="change-btn" href="javascript:void(0);"><i class="fa fa-caret-up up-ico"></i>Change<span class="reload-icon"><i class="fa fa-refresh reload active"></i></span></a>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="row  mt-xl-0 mt-4">
											<div class="col-md-6">
												<h4 class="card-title">Card's Overview</h4>
												<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit psu olor</span>
												<ul class="card-list mt-4">
													<li><span class="bg-blue circle"></span>Account<span>20%</span></li>
													<li><span class="bg-success circle"></span>Services<span>40%</span></li>
													<li><span class="bg-warning circle"></span>Restaurant<span>15%</span></li>
													<li><span class="bg-light circle"></span>Others<span>15%</span></li>
												</ul>
											</div>
											<div class="col-md-6">
												
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-qr-code" viewBox="0 0 16 16">
												<path d="M2 2h2v2H2V2Z"/>
												<path d="M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z"/>
												<path d="M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z"/>
												<path d="M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z"/>
												<path d="M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z"/>
												</svg>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<div class="row invoice-card-row">
				<div class="col-md-6">
								<div class="card progress-card">
									<div class="card-body d-flex">
										<div class="me-auto">
											<h4 class="card-title">Total Transactions</h4>
											<div class="d-flex align-items-center">
												<h2 class="fs-38 mb-0">98k</h2>
												<div class="text-success transaction-caret">
													<i class="fa fa-sort-asc"></i>
													<p class="mb-0">+0.5%</p>
												</div>
											</div>
										</div>		
										<div class="progress progress-vertical-bottom" style="min-height:110px;min-width:10px;">
											<div class="progress-bar bg-primary" style="width:10px; height:40%;" role="progressbar">
												<span class="sr-only">40% Complete</span>
											</div>
										</div>
										<div class="progress progress-vertical-bottom" style="min-height:110px;min-width:10px;">
											<div class="progress-bar bg-primary" style="width:10px; height:55%;" role="progressbar">
												<span class="sr-only">55% Complete</span>
											</div>
										</div>
										<div class="progress progress-vertical-bottom" style="min-height:110px;min-width:10px;">
											<div class="progress-bar bg-primary" style="width:10px; height:80%;" role="progressbar">
												<span class="sr-only">80% Complete</span>
											</div>
										</div>
										<div class="progress progress-vertical-bottom" style="min-height:110px;min-width:10px;">
											<div class="progress-bar bg-primary" style="width:10px; height:50%;" role="progressbar">
												<span class="sr-only">50% Complete</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Invoice Remaining</h4>
										<div class="d-flex align-items-center">
											<div class="me-auto">
												<div class="progress mt-4" style="height:10px;">
													<div class="progress-bar bg-primary progress-animated" style="width: 45%; height:10px;" role="progressbar">
														<span class="sr-only">60% Complete</span>
													</div>
												</div>
												<p class="fs-16 mb-0 mt-2"><span class="text-danger">-0,8% </span>from last month</p>
											</div>
											<h2 class="fs-38">854</h2>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title mt-2">Invoice Sent</h4>
										<div class="d-flex align-items-center mt-3 mb-2">
											<h2 class="fs-38 mb-0 me-3">456</h2>
											<span class="badge badge-success badge-xl">+0.5%</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title mt-2">Invoice Compeleted</h4>
										<div class="d-flex align-items-center mt-3 mb-2">
											<h2 class="fs-38 mb-0 me-3">1467</h2>
											<span class="badge badge-danger badge-xl">-6.4%</span>
										</div>
									</div>
								</div>
							</div>
				</div>
				<div class="row">
				<div class="col-xl-6 col-xxl-12">
						<div class="row">
							<div class="col-xl-12">
								<div class="card coin-card">
									<div class="card-body d-sm-flex d-block align-items-center">
										<span class="coin-icon">
											<svg width="38" height="41" viewBox="0 0 38 41" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g><path d="M14.0413 32.5832C15.7416 32.5934 17.4269 32.2659 18.9997 31.6199C20.5708 32.2714 22.2572 32.5991 23.958 32.5832C29.1218 32.5832 33.1663 29.8278 33.1663 26.3088V20.441C33.1663 16.922 29.1218 14.1666 23.958 14.1666C23.7186 14.1666 23.4834 14.1779 23.2497 14.1906V7.55498C23.2497 4.10823 19.2051 1.41656 14.0413 1.41656C8.87759 1.41656 4.83301 4.10823 4.83301 7.55498V26.4448C4.83301 29.8916 8.87759 32.5832 14.0413 32.5832ZM30.333 26.3088C30.333 27.9366 27.715 29.7499 23.958 29.7499C20.201 29.7499 17.583 27.9366 17.583 26.3088V24.9984C19.5015 26.1652 21.7131 26.7604 23.958 26.714C26.203 26.7604 28.4145 26.1652 30.333 24.9984V26.3088ZM23.958 16.9999C27.715 16.9999 30.333 18.8132 30.333 20.441C30.333 22.0687 27.715 23.8807 23.958 23.8807C20.201 23.8807 17.583 22.0673 17.583 20.441C17.583 18.8147 20.201 16.9999 23.958 16.9999ZM14.0413 4.2499C17.7983 4.2499 20.4163 5.9924 20.4163 7.55498C20.4163 9.11757 17.7983 10.8615 14.0413 10.8615C10.2843 10.8615 7.66634 9.11898 7.66634 7.55498C7.66634 5.99098 10.2843 4.2499 14.0413 4.2499ZM7.66634 12.0161C9.59282 13.1601 11.8012 13.7417 14.0413 13.6948C16.2814 13.7417 18.4899 13.1601 20.4163 12.0161V14.6341C18.8724 15.0232 17.4565 15.8078 16.308 16.9107C15.5631 17.0718 14.8034 17.1545 14.0413 17.1572C10.2843 17.1572 7.66634 15.4146 7.66634 13.8521V12.0161ZM7.66634 18.3132C9.59323 19.4561 11.8015 20.0371 14.0413 19.9905C14.2935 19.9905 14.5372 19.9593 14.7851 19.9466C14.764 20.1106 14.7522 20.2756 14.7497 20.441V23.3947C14.5117 23.4089 14.2822 23.4542 14.0413 23.4542C10.2843 23.4542 7.66634 21.7117 7.66634 20.1477V18.3132ZM7.66634 24.6088C9.59282 25.7529 11.8012 26.3344 14.0413 26.2876C14.2793 26.2876 14.5131 26.2692 14.7497 26.2578V26.3088C14.7699 27.5148 15.2334 28.6711 16.0516 29.5572C15.3887 29.6824 14.7159 29.7469 14.0413 29.7499C10.2843 29.7499 7.66634 28.0074 7.66634 26.4448V24.6088Z" fill="#fff"></path></g>
											</svg>
										</span>
										<div>
											<h3 class="text-white">Get managed by Dompet’s Virtual Assistant</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
											<a class="text-white" href="javascript:void(0);">Learn more >></a>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				<div class="col-xl-3 col-xxl-5">
					
						<div class="card">
							<div class="card-header pb-0 border-0">
								<div>
									<h4 class="card-title mb-2">Activity</h4>
									<h2 class="mb-0">$78120</h2>
								</div>
								<ul class="card-list">
									<li class="justify-content-end">Income<span class="bg-success circle me-0 ms-2"></span></li>
									<li class="justify-content-end">Outcome<span class="bg-danger circle me-0 ms-2"></span></li>
								</ul>
							</div>
							<div class="card-body pb-0 pt-3">
								<div id="chartBar" class="bar-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-7">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div>
									<h4 class="card-title mb-2">Quick Transfer</h4>
									<span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
								</div>
								<div class="dropdown">
									<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
									</div>
								</div>
							</div>
							<div class="card-body">	
								<div class="user-bx">
									<img src="images/profile/small/pic1.jpg" alt="">
									<div>
										<h6 class="user-name">Samuel</h6>
										<span class="meta">@sam224</span>
									</div>
									<i class="las la-check-circle check-icon"></i>
								</div>
								<h4 class="mt-3 mb-3">Recent Friend<a href="javascript:void(0);" class="fs-16 float-end text-secondary font-w600">See More</a></h4>
								<ul class="user-list">
									<li><img src="images/avatar/1.jpg" alt=""></li>
									<li><img src="images/avatar/2.jpg" alt=""></li>
									<li><img src="images/avatar/3.jpg" alt=""></li>
									<li><img src="images/avatar/4.jpg" alt=""></li>
									<li><img src="images/avatar/5.jpg" alt=""></li>
									<li><img src="images/avatar/6.jpg" alt=""></li>
								</ul>
								<h4 class="mt-3 mb-0">Insert Amount</h4>
								<div class="format-slider">
                                    <input class="form-control amount-input"  title="Formatted number" id="input-format">
                                    <div id="slider-format"></div>
                                </div>
								<div class="text-secondary fs-16 d-flex justify-content-between font-w600 mt-4">
									<span>Your Balance</span>
									<span>$ 456,345.62</span>
								</div>
							</div>
							<div class="card-footer border-0 pt-0">
								<a href="javascript:void(0);" class="btn btn-primary d-block btn-lg text-uppercase">Transfer Now</a>
							</div>
						</div>
					</div>
					
					
            </div>
</div>
			
       
@endsection