@extends('dashboard_master')



@section('page_title')
    Dashboard
@endsection


@section('content')
<div class="row">
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-danger">
            <div class="card-body  p-4">
                <div class="media">
                    <span class="mr-3">
                        <i class="fa fa-list"></i>
                    </span>
                    <div class="media-body text-white text-right">
                        <p class="mb-1">Categories</p>
                        <h3 class="text-white">{{ $total_active_category }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-success">
            <div class="card-body p-4">
                <div class="media">
                    <span class="mr-3">
                        <i class="fa fa-users"></i>
                    </span>
                    <div class="media-body text-white text-right">
                        <p class="mb-1">Users</p>
                        <h3 class="text-white">{{ $total_users }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-info">
            <div class="card-body p-4">
                <div class="media">
                    <span class="mr-3">
                        <i class="flaticon-381-heart"></i>
                    </span>
                    <div class="media-body text-white text-right">
                        <p class="mb-1">Total Patient</p>
                        <h3 class="text-white">783K</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-primary">
            <div class="card-body p-4">
                <div class="media">
                    <span class="mr-3">
                        <i class="flaticon-381-user-7"></i>
                    </span>
                    <div class="media-body text-white text-right">
                        <p class="mb-1">Chef</p>
                        <h3 class="text-white">$76</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-primary">
            <div class="card-body  p-4">
                <div class="media">
                    <span class="mr-3">
                        <i class="la la-users"></i>
                    </span>
                    <div class="media-body text-white">
                        <p class="mb-1">Total Students</p>
                        <h3 class="text-white">3280</h3>
                        <div class="progress mb-2 bg-secondary">
                            <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                        </div>
                        <small>80% Increase in 20 Days</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-warning">
            <div class="card-body p-4">
                <div class="media">
                    <span class="mr-3">
                        <i class="la la-user"></i>
                    </span>
                    <div class="media-body text-white">
                        <p class="mb-1">New Students</p>
                        <h3 class="text-white">245</h3>
                        <div class="progress mb-2 bg-primary">
                            <div class="progress-bar progress-animated bg-light" style="width: 50%"></div>
                        </div>
                        <small>50% Increase in 25 Days</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-secondary">
            <div class="card-body p-4">
                <div class="media">
                    <span class="mr-3">
                        <i class="la la-graduation-cap"></i>
                    </span>
                    <div class="media-body text-white">
                        <p class="mb-1">Total Course</p>
                        <h3 class="text-white">28</h3>
                        <div class="progress mb-2 bg-primary">
                            <div class="progress-bar progress-animated bg-light" style="width: 76%"></div>
                        </div>
                        <small>76% Increase in 20 Days</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-danger ">
            <div class="card-body p-4">
                <div class="media">
                    <span class="mr-3">
                        <i class="la la-dollar"></i>
                    </span>
                    <div class="media-body text-white">
                        <p class="mb-1">Fees Collect</p>
                        <h3 class="text-white">250$</h3>
                        <div class="progress mb-2 bg-secondary">
                            <div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
                        </div>
                        <small>30% Increase in 30 Days</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <h4 class="card-title">Total Students</h4>
                <h3>3280</h3>
                <div class="progress mb-2">
                    <div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
                </div>
                <small>80% Increase in 20 Days</small>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <h4 class="card-title">New Students</h4>
                <h3>245</h3>
                <div class="progress mb-2">
                    <div class="progress-bar progress-animated bg-warning" style="width: 50%"></div>
                </div>
                <small>50% Increase in 25 Days</small>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <h4 class="card-title">Total Course</h4>
                <h3>28</h3>
                <div class="progress mb-2">
                    <div class="progress-bar progress-animated bg-red" style="width: 76%"></div>
                </div>
                <small>76% Increase in 20 Days</small>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <h4 class="card-title">Fees Collection</h4>
                <h3>25160$</h3>
                <div class="progress mb-2">
                    <div class="progress-bar progress-animated bg-success" style="width: 30%"></div>
                </div>
                <small>30% Increase in 30 Days</small>
            </div>
        </div>
    </div>


    <div class="col-xl-12 col-lg-12 col-sm-12">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-primary">
                    <div class="card-header border-0 pb-0">
                        <h3 class="card-title text-white">Total Students</h3>
                        <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 422</h5>
                    </div>
                    <div class="card-body text-center">
                        <div class="ico-sparkline">
                            <div id="sparkline12"><canvas width="100" height="100" style="display: inline-block; width: 100px; height: 100px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-warning overflow-hidden">
                    <div class="card-header border-0 ">
                        <h3 class="card-title text-white">New Students</h3>
                        <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 357</h5>
                    </div>
                    <div class="card-body text-center p-0">
                        <div class="ico-sparkline">
                            <div id="spark-bar-2"><canvas width="290" height="140" style="display: inline-block; width: 290px; height: 140px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-primary">
                    <div class="card-header pb-3 border-0 pb-0">
                        <h3 class="card-title text-white">Total Course</h3>
                        <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 547</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="px-4"><span class="bar1" data-peity="{ &quot;fill&quot;: [&quot;rgb(255, 255, 255)&quot;, &quot;rgb(255, 255, 255)&quot;]}" style="display: none;">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span><svg class="peity" height="140" width="100%"><rect data-value="6" fill="#0B2A97" x="0.9200000000000002" y="24.705882352941188" width="7.359999999999999" height="49.41176470588235"></rect><rect data-value="2" fill="#209f84" x="10.120000000000001" y="57.647058823529406" width="7.359999999999996" height="16.47058823529413"></rect><rect data-value="8" fill="#2781d5" x="19.32" y="8.235294117647072" width="7.359999999999999" height="65.88235294117646"></rect><rect data-value="4" fill="#0B2A97" x="28.52" y="41.17647058823529" width="7.360000000000003" height="32.941176470588246"></rect><rect data-value="-3" fill="#209f84" x="37.72" y="74.11764705882354" width="7.359999999999999" height="24.70588235294116"></rect><rect data-value="8" fill="#2781d5" x="46.92" y="8.235294117647072" width="7.3600000000000065" height="65.88235294117646"></rect><rect data-value="1" fill="#0B2A97" x="56.11999999999999" y="65.88235294117646" width="7.360000000000014" height="8.235294117647072"></rect><rect data-value="-3" fill="#209f84" x="65.32" y="74.11764705882354" width="7.360000000000014" height="24.70588235294116"></rect><rect data-value="6" fill="#2781d5" x="74.52" y="24.705882352941188" width="7.360000000000014" height="49.41176470588235"></rect><rect data-value="-5" fill="#0B2A97" x="83.72" y="74.11764705882354" width="7.360000000000014" height="41.17647058823529"></rect><rect data-value="9" fill="#209f84" x="92.91999999999999" y="0" width="7.360000000000014" height="74.11764705882354"></rect><rect data-value="2" fill="#2781d5" x="102.11999999999999" y="57.647058823529406" width="7.359999999999999" height="16.47058823529413"></rect><rect data-value="-8" fill="#0B2A97" x="111.32000000000001" y="74.11764705882354" width="7.359999999999985" height="65.88235294117646"></rect><rect data-value="1" fill="#209f84" x="120.52000000000001" y="65.88235294117646" width="7.359999999999985" height="8.235294117647072"></rect><rect data-value="4" fill="#2781d5" x="129.72" y="41.17647058823529" width="7.359999999999985" height="32.941176470588246"></rect><rect data-value="8" fill="#0B2A97" x="138.92000000000002" y="8.235294117647072" width="7.359999999999985" height="65.88235294117646"></rect><rect data-value="9" fill="#209f84" x="148.12" y="0" width="7.359999999999985" height="74.11764705882354"></rect><rect data-value="8" fill="#2781d5" x="157.32" y="8.235294117647072" width="7.360000000000014" height="65.88235294117646"></rect><rect data-value="2" fill="#0B2A97" x="166.52" y="57.647058823529406" width="7.359999999999985" height="16.47058823529413"></rect><rect data-value="1" fill="#209f84" x="175.72" y="65.88235294117646" width="7.359999999999985" height="8.235294117647072"></rect></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-danger overflow-hidden">
                    <div class="card-header pb-3 border-0 pb-0">
                        <h3 class="card-title text-white">Fees Collection</h3>
                        <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 3280$</h5>
                    </div>
                    <div class="card-body p-0">
                        <span class="peity-line-2" data-width="100%" style="display: none;">7,6,8,7,3,8,3,3,6,5,9,2,8</span><svg class="peity" height="150" width="100%"><polygon fill="#fa707e" points="0 148.5 0 34.16666666666667 19.333333333333332 50.5 38.666666666666664 17.833333333333343 58 34.16666666666667 77.33333333333333 99.5 96.66666666666666 17.833333333333343 116 99.5 135.33333333333331 99.5 154.66666666666666 50.5 174 66.83333333333333 193.33333333333331 1.5 212.66666666666666 115.83333333333334 232 17.833333333333343 232 148.5"></polygon><polyline fill="none" points="0 34.16666666666667 19.333333333333332 50.5 38.666666666666664 17.833333333333343 58 34.16666666666667 77.33333333333333 99.5 96.66666666666666 17.833333333333343 116 99.5 135.33333333333331 99.5 154.66666666666666 50.5 174 66.83333333333333 193.33333333333331 1.5 212.66666666666666 115.83333333333334 232 17.833333333333343" stroke="#f77f8b" stroke-width="3" stroke-linecap="square"></polyline></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-header border-0 pb-0">
                <h2 class="card-title">about me</h2>
            </div>
            <div class="card-body pb-0">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex px-0 justify-content-between">
                        <strong>Gender</strong>
                        <span class="mb-0">Male</span>
                    </li>
                    <li class="list-group-item d-flex px-0 justify-content-between">
                        <strong>Education</strong>
                        <span class="mb-0">PHD</span>
                    </li>
                    <li class="list-group-item d-flex px-0 justify-content-between">
                        <strong>Designation</strong>
                        <span class="mb-0">Se. Professor</span>
                    </li>
                    <li class="list-group-item d-flex px-0 justify-content-between">
                        <strong>Operation Done</strong>
                        <span class="mb-0">120</span>
                    </li>
                </ul>
            </div>
            <div class="card-footer pt-0 pb-0 text-center">
                <div class="row">
                    <div class="col-4 pt-3 pb-3 border-right">
                        <h3 class="mb-1 text-primary">150</h3>
                        <span>Projects</span>
                    </div>
                    <div class="col-4 pt-3 pb-3 border-right">
                        <h3 class="mb-1 text-primary">140</h3>
                        <span>Uploads</span>
                    </div>
                    <div class="col-4 pt-3 pb-3">
                        <h3 class="mb-1 text-primary">45</h3>
                        <span>Tasks</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-8 col-xxl-8 col-lg-12 col-sm-12">
        <div id="user-activity" class="card">
            <div class="card-header border-0 pb-0 d-sm-flex d-block">
                <h4 class="card-title">Visitor Activity</h4>
                <div class="card-action mb-sm-0 my-2">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#user" role="tab">
                                Day
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#bounce" role="tab">
                                Month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#session-duration" role="tab">
                                Year
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="user" role="tabpanel"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="activity" class="chartjs chartjs-render-monitor" height="600" style="display: block; width: 577px; height: 300px;" width="1154"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-sm-6">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="text-center">
                    <div class="profile-photo">
                        <img src="images/profile/profile.png" width="100" class="img-fluid rounded-circle" alt="">
                    </div>
                    <h3 class="mt-4 mb-1">Deangelo Sena</h3>
                    <p class="text-muted">Senior Manager</p>
                    <a class="btn btn-outline-primary btn-rounded mt-3 px-5" href="javascript:void()">Folllow</a>
                </div>
            </div>

            <div class="card-footer pt-0 pb-0 text-center">
                <div class="row">
                    <div class="col-4 pt-3 pb-3 border-right">
                        <h3 class="mb-1">150</h3><span>Follower</span>
                    </div>
                    <div class="col-4 pt-3 pb-3 border-right">
                        <h3 class="mb-1">140</h3><span>Place Stay</span>
                    </div>
                    <div class="col-4 pt-3 pb-3">
                        <h3 class="mb-1">45</h3><span>Reviews</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-sm-6">
        <div class="card active_users">
            <div class="card-header bg-success border-0 pb-0">
                <h4 class="card-title text-white">Active Users</h4>
                <span id="counter"></span>
            </div>
            <div class="bg-success"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="activeUser" width="608" height="360" style="display: block; width: 304px; height: 180px;" class="chartjs-render-monitor"></canvas>
            </div>
            <div class="card-body pt-0">
                <div class="list-group-flush mt-4">
                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1 font-weight-semi-bold border-top-0">
                        <p class="mb-0">Top Active Pages</p>
                        <p class="mb-0">Active Users</p>
                    </div>
                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1">
                        <p class="mb-0">/bootstrap-themes/</p>
                        <p class="mb-0">3</p>
                    </div>
                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1">
                        <p class="mb-0">/tags/html5/</p>
                        <p class="mb-0">3</p>
                    </div>
                    <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none">
                        <p class="mb-0">/</p>
                        <p class="mb-0">2</p>
                    </div>
                    <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none">
                        <p class="mb-0">/preview/falcon/dashboard/</p>
                        <p class="mb-0">2</p>
                    </div>
                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1">
                        <p class="mb-0">/100-best-themes...all-time/</p>
                        <p class="mb-0">1</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-12 col-sm-12">
        <div class="card overflow-hidden">
            <div class="text-center p-3 overlay-box " style="background-image: url(images/big/img1.jpg);">
                <div class="profile-photo">
                    <img src="images/profile/profile.png" width="100" class="img-fluid rounded-circle" alt="">
                </div>
                <h3 class="mt-3 mb-1 text-white">Deangelo Sena</h3>
                <p class="text-white mb-0">Senior Manager</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Patient Gender</span> <strong class="text-muted">Female	</strong></li>
                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Years Old</span> 		<strong class="text-muted">Age: 24	</strong></li>
            </ul>
            <div class="card-footer border-0 mt-0">
                <button class="btn btn-primary btn-lg btn-block">
                    <i class="fa fa-bell-o"></i> Reminder Alarm
                </button>
            </div>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recent Payments Queue</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive recentOrderTable">
                    <table class="table verticle-middle table-responsive-md">
                        <thead>
                            <tr>
                                <th scope="col">Ward No.</th>
                                <th scope="col">Patient</th>
                                <th scope="col">Dr Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Bills</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12</td>
                                <td>Mr. Bobby</td>
                                <td>Dr. Jackson</td>
                                <td>01 August 2020</td>
                                <td><span class="badge badge-rounded badge-primary">Checkin</span></td>
                                <td>$120</td>
                                <td>
                                    <div class="dropdown custom-dropdown mb-0">
                                        <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10 </td>
                                <td>Mr. Dexter</td>
                                <td>Dr. Charles</td>
                                <td>31 July 2020</td>
                                <td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                <td>$540</td>
                                <td>
                                    <div class="dropdown custom-dropdown mb-0">
                                        <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>03 </td>
                                <td>Mr. Nathan</td>
                                <td>Dr. Frederick</td>
                                <td>30 July 2020</td>
                                <td><span class="badge badge-rounded badge-danger">Canceled</span></td>
                                <td>$301</td>
                                <td>
                                    <div class="dropdown custom-dropdown mb-0">
                                        <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>Mr. Aurora</td>
                                <td>Dr. Roman</td>
                                <td>29 July 2020</td>
                                <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                                <td>$099</td>
                                <td>
                                    <div class="dropdown custom-dropdown mb-0">
                                        <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td>Mr. Matthew</td>
                                <td>Dr. Samantha</td>
                                <td>28 July 2020</td>
                                <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                                <td>$520</td>
                                <td>
                                    <div class="dropdown custom-dropdown mb-0">
                                        <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
        <div class="card text-white bg-primary">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Blood type :</span><strong>O+</strong></li>
                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Allergies :</span><strong>Penicilin, peanuts </strong></li>
                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Pressure :</span><strong>120/100 mmHG</strong></li>
                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Diseases :</span><strong>Diabetes</strong></li>
                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Temperture :</span><strong>34 Degree</strong></li>
            </ul>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
        <div class="card text-white bg-warning text-black">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Regular Checkups</span></li>
                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Theodore Handle :</span><strong>Dentist</strong></li>
                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Valentino Morose :</span><strong>Surgeon</strong></li>
                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Fleece Marigold :</span><strong>Clinical</strong></li>
                <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Eric Widget :</span><strong>Cardiology</strong></li>
            </ul>
        </div>
    </div>

    <div class="col-xl-4 col-lg-12 col-xxl-4 col-sm-12">
        <div class="card">
            <div class="card-body text-center ai-icon  text-primary">
                <svg id="rocket-icon" class="my-2" viewBox="0 0 24 24" width="80" height="80" stroke="currentColor" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                </svg>
                <h4 class="my-2">You don’t have badges yet</h4>
                <a href="javascript:void(0);" class="btn my-2 btn-primary btn-lg px-4"><i class="fa fa-usd"></i> Earn Budges</a>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-12 col-xxl-8 col-sm-12">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <div class="clearfix">
                            <h3 class="card-title">Blood pressure</h3>
                            <span>In the normal</span>
                        </div>
                        <div class="clearfix text-center">
                            <h3 class="text-primary mb-0">120/89</h3>
                            <span>mmHG</span>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <div class="ico-sparkline">
                            <div id="spark-bar"><canvas width="188" height="200" style="display: inline-block; width: 188px; height: 200px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <div class="clearfix">
                            <h3 class="card-title">Heart Rate</h3>
                            <span class="text-danger">Above the normal</span>
                        </div>
                        <div class="clearfix text-center">
                            <h3 class="text-danger mb-0">107</h3>
                            <span>Per Min</span>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <div class="ico-sparkline">
                            <div id="composite-bar"><canvas width="208" height="200" style="display: inline-block; width: 208px; height: 200px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <div class="clearfix">
                            <h3 class="card-title">Glucose Rate</h3>
                            <span>In the normal</span>
                        </div>
                        <div class="clearfix text-center">
                            <h3 class="text-success mb-0">97</h3>
                            <span>mg/dl</span>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <div class="ico-sparkline">
                            <div id="sparkline8"><canvas width="243" height="50" style="display: inline-block; width: 243.656px; height: 50px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <div class="clearfix">
                            <h3 class="card-title">Clolesterol</h3>
                            <span>In the normal</span>
                        </div>
                        <div class="clearfix text-center">
                            <h3 class="text-info mb-0">124</h3>
                            <span>mg/dl</span>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <div class="ico-sparkline">
                            <div id="sparkline9" class="height80;"><canvas width="243" height="50" style="display: inline-block; width: 243.656px; height: 50px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-sm-12">
        <div class="card overflow-hidden">
            <div class="text-center p-5 overlay-box" style="background-image: url(images/big/img5.jpg);">
                <img src="images/profile/profile.png" width="100" class="img-fluid rounded-circle" alt="">
                <h3 class="mt-3 mb-0 text-white">Deangelo Sena</h3>
            </div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-6">
                        <div class="bgl-primary rounded p-3">
                            <h4 class="mb-0">Female</h4>
                            <small>Patient Gender</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bgl-primary rounded p-3">
                            <h4 class="mb-0">Age: 24</h4>
                            <small>Years Old</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer mt-0">
                <button class="btn btn-primary btn-lg btn-block">View Profile</button>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-xxl-6 col-sm-6">
        <div class="card bg-primary">
            <div class="card-body pb-0">
                <div class="row">
                    <div class="col">
                        <h5 class="text-white">Power</h5>
                        <span class="text-white">2017.1.20</span>
                    </div>
                    <div class="col text-right">
                        <h5 class="text-white"><i class="fa fa-caret-up"></i> 260</h5>
                        <span class="text-white">+12.5(2.8%)</span>
                    </div>
                </div>
            </div>
            <div class="chart-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="chart_widget_1" width="942" height="300" style="display: block; width: 471px; height: 150px;" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-xxl-6 col-sm-6">
        <div class="card bg-success">
            <div class="card-body pb-0">
                <div class="row">
                    <div class="col">
                        <h5 class="text-white">Power</h5>
                        <span class="text-white">2017.1.20</span>
                    </div>
                    <div class="col text-right">
                        <h5 class="text-white"><i class="fa fa-caret-up"></i> 260</h5>
                        <span class="text-white">+12.5(2.8%)</span>
                    </div>
                </div>
            </div>
            <div class="chart-wrapper">
                <div id="chart_widget_5"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><path d="M0,150L0,66.571L66.228,45.714L132.455,118.714L198.683,24.857L264.911,4L331.138,35.286L397.366,29.029L463.594,54.057L463.594,150Z" class="ct-area"></path><path d="M0,66.571L66.228,45.714L132.455,118.714L198.683,24.857L264.911,4L331.138,35.286L397.366,29.029L463.594,54.057" class="ct-line"></path><line x1="0" y1="66.57142857142857" x2="0.01" y2="66.57142857142857" class="ct-point" ct:value="4"></line><line x1="66.22767857142857" y1="45.71428571428571" x2="66.23767857142857" y2="45.71428571428571" class="ct-point" ct:value="5"></line><line x1="132.45535714285714" y1="118.71428571428572" x2="132.46535714285713" y2="118.71428571428572" class="ct-point" ct:value="1.5"></line><line x1="198.68303571428572" y1="24.85714285714286" x2="198.6930357142857" y2="24.85714285714286" class="ct-point" ct:value="6"></line><line x1="264.9107142857143" y1="4" x2="264.92071428571427" y2="4" class="ct-point" ct:value="7"></line><line x1="331.13839285714283" y1="35.28571428571429" x2="331.1483928571428" y2="35.28571428571429" class="ct-point" ct:value="5.5"></line><line x1="397.36607142857144" y1="29.02857142857144" x2="397.37607142857144" y2="29.02857142857144" class="ct-point" ct:value="5.8"></line><line x1="463.59375" y1="54.057142857142864" x2="463.60375" y2="54.057142857142864" class="ct-point" ct:value="4.6"></line></g></g><g class="ct-labels"></g></svg></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
        <div class="card">
            <div class="card-body pb-0">
                <div class="row">
                    <div class="col">
                        <h5>3650</h5>
                        <span>VIEWS OF YOUR PROJECT</span>
                    </div>
                </div>
            </div>
            <div class="chart-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="chart_widget_2" width="608" height="300" style="display: block; width: 304px; height: 150px;" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5>Latency</h5>
            </div>
            <div class="chart-wrapper">
                <div id="chart_widget_17" style="padding: 0px; position: relative;"><canvas class="flot-base" width="303" height="150" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 303.656px; height: 150px;"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><div style="position: absolute; max-width: 53px; top: 138px; font: 400 10px / 12px poppins, sans-serif; color: rgb(255, 255, 255); left: 13px; text-align: center;">0</div><div style="position: absolute; max-width: 53px; top: 138px; font: 400 10px / 12px poppins, sans-serif; color: rgb(255, 255, 255); left: 68px; text-align: center;">10</div><div style="position: absolute; max-width: 53px; top: 138px; font: 400 10px / 12px poppins, sans-serif; color: rgb(255, 255, 255); left: 124px; text-align: center;">20</div><div style="position: absolute; max-width: 53px; top: 138px; font: 400 10px / 12px poppins, sans-serif; color: rgb(255, 255, 255); left: 181px; text-align: center;">30</div><div style="position: absolute; max-width: 53px; top: 138px; font: 400 10px / 12px poppins, sans-serif; color: rgb(255, 255, 255); left: 238px; text-align: center;">40</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><div style="position: absolute; top: 132px; font: 400 10px / 12px poppins, sans-serif; color: rgb(255, 255, 255); left: 9px; text-align: right;">0</div><div style="position: absolute; top: 100px; font: 400 10px / 12px poppins, sans-serif; color: rgb(255, 255, 255); left: 4px; text-align: right;">25</div><div style="position: absolute; top: 67px; font: 400 10px / 12px poppins, sans-serif; color: rgb(255, 255, 255); left: 3px; text-align: right;">50</div><div style="position: absolute; top: 35px; font: 400 10px / 12px poppins, sans-serif; color: rgb(255, 255, 255); left: 4px; text-align: right;">75</div><div style="position: absolute; top: 2px; font: 400 10px / 12px poppins, sans-serif; color: rgb(255, 255, 255); left: 0px; text-align: right;">100</div></div></div><canvas class="flot-overlay" width="303" height="150" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 303.656px; height: 150px;"></canvas></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-xxl-4 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <h4 class="text-uppercase">74,206 K</h4>
                        <span>Lifetime earnings</span>
                    </div>
                    <div class="col-auto">
                        <div class="chart-wrapper height100"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <canvas id="chart_widget_7" width="0" height="200" style="display: block; width: 0px; height: 100px;" class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-12 col-xxl-12">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <h5>Lorem Ipsum</h5>
                            </div>
                            <div class="col-auto">
                                <h5>
                                    <span><i class="fa fa-caret-up"></i></span>
                                    <span>2,250</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="chart-wrapper">
                        <div id="chart_widget_6"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><path d="M0,150L0,52.667L66.228,28.333L132.455,64.833L198.683,28.333L264.911,52.667L331.138,16.167L397.366,57.533L463.594,38.067L463.594,150Z" class="ct-area"></path><path d="M0,52.667L66.228,28.333L132.455,64.833L198.683,28.333L264.911,52.667L331.138,16.167L397.366,57.533L463.594,38.067" class="ct-line"></path><line x1="0" y1="52.66666666666667" x2="0.01" y2="52.66666666666667" class="ct-point" ct:value="4"></line><line x1="66.22767857142857" y1="28.33333333333333" x2="66.23767857142857" y2="28.33333333333333" class="ct-point" ct:value="5"></line><line x1="132.45535714285714" y1="64.83333333333333" x2="132.46535714285713" y2="64.83333333333333" class="ct-point" ct:value="3.5"></line><line x1="198.68303571428572" y1="28.33333333333333" x2="198.6930357142857" y2="28.33333333333333" class="ct-point" ct:value="5"></line><line x1="264.9107142857143" y1="52.66666666666667" x2="264.92071428571427" y2="52.66666666666667" class="ct-point" ct:value="4"></line><line x1="331.13839285714283" y1="16.166666666666657" x2="331.1483928571428" y2="16.166666666666657" class="ct-point" ct:value="5.5"></line><line x1="397.36607142857144" y1="57.533333333333346" x2="397.37607142857144" y2="57.533333333333346" class="ct-point" ct:value="3.8"></line><line x1="463.59375" y1="38.06666666666668" x2="463.60375" y2="38.06666666666668" class="ct-point" ct:value="4.6"></line></g></g><g class="ct-labels"></g></svg></div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col text-center">
                                <h5 class="font-weight-normal">1230</h5>
                                <span>Type A</span>
                            </div>
                            <div class="col text-center">
                                <h5 class="font-weight-normal">1230</h5>
                                <span>Type A</span>
                            </div>
                            <div class="col text-center">
                                <h5 class="font-weight-normal">1230</h5>
                                <span>Type A</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <h5>Lorem Ipsum</h5>
                            </div>
                            <div class="col-auto">
                                <h5>
                                    <span><i class="fa fa-caret-up"></i></span>
                                    <span>2,250</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="chart-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="chart_widget_3" width="942" height="300" style="display: block; width: 471px; height: 150px;" class="chartjs-render-monitor"></canvas>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col text-center">
                                <h5 class="font-weight-normal">1230</h5>
                                <span>Type A</span>
                            </div>
                            <div class="col text-center">
                                <h5 class="font-weight-normal">1230</h5>
                                <span>Type A</span>
                            </div>
                            <div class="col text-center">
                                <h5 class="font-weight-normal">1230</h5>
                                <span>Type A</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-body pb-0">
                <h4 class="card-title text-uppercase font-weight-normal">Market Now</h4>
                <h2 class="font-weight-normal text-danger">
                    <span><i class="fa fa-caret-up"></i></span>
                    <span>3454664</span>
                </h2>
                <div class="row mt-5">
                    <div class="col text-center">
                        <h5 class="font-weight-normal">APPL</h5>
                        <span class="text-success">+ 82.24 %</span>
                    </div>
                    <div class="col text-center">
                        <h5 class="font-weight-normal">FB</h5>
                        <span class="text-danger">- 12.24 %</span>
                    </div>
                    <div class="col text-center">
                        <h5 class="font-weight-normal">GOOG</h5>
                        <span class="text-success">+ 42.24 %</span>
                    </div>
                </div>
            </div>
            <div class="chart-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="chart_widget_4" width="942" height="510" style="display: block; width: 471px; height: 255px;" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-body pb-0">
                <h4 class="card-title text-uppercase font-weight-normal">Sales Analysis</h4>
                <h2 class="font-weight-normal text-danger">
                    <span><i class="fa fa-caret-up"></i></span>
                    <span>3454664</span>
                </h2>
                <div class="row mt-5">
                    <div class="col text-center">
                        <h5 class="font-weight-normal">Today</h5>
                        <span class="text-success">+ 8224</span>
                    </div>
                    <div class="col text-center">
                        <h5 class="font-weight-normal">Today</h5>
                        <span class="text-danger">- 1224</span>
                    </div>
                    <div class="col text-center">
                        <h5 class="font-weight-normal">Week</h5>
                        <span class="text-success">+ 4224</span>
                    </div>
                </div>
            </div>
            <div class="chart-wrapper">
                <div id="chart_widget_8"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><path d="M0,111.571L66.228,75.714L132.455,201.214L198.683,39.857L264.911,4L331.138,57.786L397.366,47.029L463.594,90.057" class="ct-line"></path><line x1="0" y1="111.57142857142858" x2="0.01" y2="111.57142857142858" class="ct-point" ct:value="4"></line><line x1="66.22767857142857" y1="75.71428571428572" x2="66.23767857142857" y2="75.71428571428572" class="ct-point" ct:value="5"></line><line x1="132.45535714285714" y1="201.21428571428572" x2="132.46535714285713" y2="201.21428571428572" class="ct-point" ct:value="1.5"></line><line x1="198.68303571428572" y1="39.85714285714286" x2="198.6930357142857" y2="39.85714285714286" class="ct-point" ct:value="6"></line><line x1="264.9107142857143" y1="4" x2="264.92071428571427" y2="4" class="ct-point" ct:value="7"></line><line x1="331.13839285714283" y1="57.78571428571428" x2="331.1483928571428" y2="57.78571428571428" class="ct-point" ct:value="5.5"></line><line x1="397.36607142857144" y1="47.02857142857144" x2="397.37607142857144" y2="47.02857142857144" class="ct-point" ct:value="5.8"></line><line x1="463.59375" y1="90.05714285714288" x2="463.60375" y2="90.05714285714288" class="ct-point" ct:value="4.6"></line></g></g><g class="ct-labels"></g></svg></div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header border-0 pb-0">
                <h4 class="card-title">Top Products</h4>
            </div>
            <div class="card-body pb-0">
                <div class="widget-media">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-panel">
                                <div class="media mr-2">
                                    <img alt="image" width="50" src="images/avatar/1.jpg">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-1">Dr sultads Send you Photo</h5>
                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                </div>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
                                        <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-panel">
                                <div class="media mr-2 media-info">
                                    KG
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-1">Resport created successfully</h5>
                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                </div>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-info light sharp" data-toggle="dropdown">
                                        <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-panel">
                                <div class="media mr-2 media-success">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-1">Reminder : Treatment Time!</h5>
                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                </div>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                        <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="chart-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="chart_widget_9" width="942" height="500" style="display: block; width: 471px; height: 250px;" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header border-0 pb-0">
                <h4 class="card-title">Top Products</h4>
            </div>
            <div class="card-body pb-0">
                <div class="widget-media">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-panel">
                                <div class="media mr-2">
                                    <img alt="image" width="50" src="images/avatar/4.jpg">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-1">Dr sultads Send you Photo</h5>
                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                </div>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
                                        <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-panel">
                                <div class="media mr-2 media-info">
                                    <img alt="image" width="50" src="images/avatar/2.jpg">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-1">Resport created successfully</h5>
                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                </div>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-info light sharp" data-toggle="dropdown">
                                        <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-panel">
                                <div class="media mr-2 media-success">
                                    <img alt="image" width="50" src="images/avatar/3.jpg">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-1">Reminder : Treatment Time!</h5>
                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                </div>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                        <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="chart-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="chart_widget_10" width="942" height="500" style="display: block; width: 471px; height: 250px;" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-xxl-8 col-lg-12">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-5 p-0">
                            <div class="card-body">
                                <h6 class="font-weight-normal text-uppercase">Weekly sales</h6>
                                <h4>$ 14000</h4>
                                <div>
                                    <span class="badge badge-light">60%</span>
                                    <span>Higher</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-7 p-0">
                            <div class="chart-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                <canvas id="chart_widget_11" width="744" height="540" style="display: block; width: 372px; height: 270px;" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5>570</h5>
                        <p>All Sales</p>
                    </div>
                    <div class="chart-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="chart_widget_14" height="400" style="display: block; width: 304px; height: 200px;" width="608" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5>570</h5>
                        <p>All Sales</p>
                    </div>
                    <div class="chart-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="chart_widget_15" height="400" style="display: block; width: 304px; height: 200px;" width="608" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-xxl-4 col-lg-12">
        <div class="card">
            <div class="chart-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="chart_widget_16" height="690" style="display: block; width: 304px; height: 345px;" width="608" class="chartjs-render-monitor"></canvas>
            </div>
            <div class="card-body">
                <h4 class="card-title">Sales Status</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-between">
                            <h6>67%</h6>
                            <span>Grow</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="d-flex justify-content-between">
                            <h6>67%</h6>
                            <span>Grow</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: 70%"></div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="d-flex justify-content-between">
                            <h6>67%</h6>
                            <span>Grow</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" style="width: 40%"></div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="d-flex justify-content-between">
                            <h6>67%</h6>
                            <span>Grow</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-3 col-sm-6">
        <div class="card">
            <div class="social-graph-wrapper widget-facebook">
                <span class="s-icon"><i class="fa fa-facebook"></i></span>
            </div>
            <div class="row">
                <div class="col-6 border-right">
                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                        <h4 class="m-1"><span class="counter">89</span> k</h4>
                        <p class="m-0">Friends</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                        <h4 class="m-1"><span class="counter">119</span> k</h4>
                        <p class="m-0">Followers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-3 col-sm-6">
        <div class="card">
            <div class="social-graph-wrapper widget-linkedin">
                <span class="s-icon"><i class="fa fa-linkedin"></i></span>
            </div>
            <div class="row">
                <div class="col-6 border-right">
                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                        <h4 class="m-1"><span class="counter">89</span> k</h4>
                        <p class="m-0">Friends</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                        <h4 class="m-1"><span class="counter">119</span> k</h4>
                        <p class="m-0">Followers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-3 col-sm-6">
        <div class="card">
            <div class="social-graph-wrapper widget-googleplus">
                <span class="s-icon"><i class="fa fa-google-plus"></i></span>
            </div>
            <div class="row">
                <div class="col-6 border-right">
                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                        <h4 class="m-1"><span class="counter">89</span> k</h4>
                        <p class="m-0">Friends</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                        <h4 class="m-1"><span class="counter">119</span> k</h4>
                        <p class="m-0">Followers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-3 col-sm-6">
        <div class="card">
            <div class="social-graph-wrapper widget-twitter">
                <span class="s-icon"><i class="fa fa-twitter"></i></span>
            </div>
            <div class="row">
                <div class="col-6 border-right">
                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                        <h4 class="m-1"><span class="counter">89</span> k</h4>
                        <p class="m-0">Friends</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                        <h4 class="m-1"><span class="counter">119</span> k</h4>
                        <p class="m-0">Followers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
