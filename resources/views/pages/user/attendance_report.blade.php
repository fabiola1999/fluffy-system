@extends('layouts.user')

@section('content')
            <div class="container-dash">
                <div class="content_head bg-light d-flex justify-content-between  pt-5">
                    <div>
                        <div class="d-inline-flex text-blue  rounded-top pb-1 pt-2 px-3 ml-4 mt-4" style=" background-color:white;">
                            <div class="d-flex mr-3" >
                                <div class="mr-2 h5" ><i class="fas fa-tachometer-alt" ></i></div>
                                <div>
                                    <div><strong class="h5 font-weight-bold">Dashboard</strong></div>
                                    <div>Employee panel</div>
                                </div>
                            </div>
                            <div style="color: #EC0544 !important;">
                                <i class="fas fa-times-circle fa-sm"></i>
                            </div>
                        </div>
                        <div class="d-inline-flex text-white  rounded-top pb-0 pt-2 px-3 ml-4 mt-4" style=" background-color:#012840; height:58px;">
                            <div class="d-flex mr-3" >
                                <div class="mr-2 h5"><i class="fas fa-envelope pr-2  border-right text-white"></i></div>
                                <div>
                                    <div><strong class="h5 font-weight-bold">Attendance Report</strong></div>
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-times-circle fa-sm"></i>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex m-4" style="color:#606060; font-size:20px;">
                        <i class="fas fa-angle-left m-2" ></i>
                        <i class="fas fa-angle-right m-2"></i>
                    </div>
                </div>
                <div class="content">
                    <div class="d-flex justify-content-end align-items-center py-2 px-4">
                        <span class="font-weight-bold mr-1"><i class="fas fa-home mr-1"></i>Home</span> / Attendance Report
                    </div>

                    <div class="d-inline-flex text-white  mb-4 pb-0 pt-2 px-3 ml-4 mt-4" style=" background-color:#012840;">
                        <div class="d-flex mr-3" >
                            <div class="mr-2 h5"><i class="fas mr-2 fa-calendar" style="color:#F5A10E !important;"></i></div>
                            <div>
                                <div><strong class="col h5 font-weight-bold pr-2  border-right text-white"> February</strong></div>
                            </div>
                        </div>
                        <div>
                            <div><strong class="h5 font-weight-bold"> 2009</strong></div>
                        </div>
                    </div>
                    <div class="row px-4">
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="card4 rounded-sm text-blue h-100 w-100 "> 
                                <h4 class="px-3 py-2"> <i class="fas mr-2  mt-2 fa-calendar-check " style="color:#F5A10E;"></i>Week 1 - Year 2019</h4>

                                <div class="px-3 pt-2 pb-3 position-relative">
                                    <div class="w-75 ">
                                        <h4 class="m-0 font-weight-bold" style="color:#A8A8A8;">25 :  &nbsp;     34 :    &nbsp;       03</h4>
                                        <div class="p  font-weight-lighter m-0">Hours</div>
                                    </div>
                                    <div class="position-absolute h1 text-blue-70" style="bottom: 0; font-size: 3rem; right: 2rem;">
                                        <i class="fas fa-stopwatch" style="color:#D9D9D9;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="card4 rounded-sm text-blue h-100 w-100 ">
                                <h4 class="px-3 py-2"> <i class="fas mr-2 mt-2 fa-calendar-check "  style="color:#DF0873;"></i>Week 1 - Year 2019</h4>

                                <div class="px-3 pt-2 pb-3 position-relative">
                                    <div class="w-75 ">
                                        <h4 class="m-0 font-weight-bold" style="color:#A8A8A8;">25 :  &nbsp;     34 :    &nbsp;       03</h4>
                                        <div class="p  font-weight-lighter m-0">Hours</div>
                                    </div>
                                    <div class="position-absolute h1 text-blue-70" style="bottom: 0; font-size: 3rem; right: 2rem;">
                                        <i class="fas fa-stopwatch" style="color:#D9D9D9;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="card4 rounded-sm text-blue h-100 w-100 ">
                                <h4 class="px-3 py-2"> <i class="fas mr-2 mt-2 fa-calendar-check "  style="color:#036C62;"></i>Week 1 - Year 2019</h4>

                                <div class="px-3 pt-2 pb-3 position-relative">
                                    <div class="w-75 ">
                                        <h4 class="m-0 font-weight-bold" style="color:#A8A8A8;">25 :  &nbsp;     34 :    &nbsp;       03</h4>
                                        <div class="p  font-weight-lighter m-0">Hours</div>
                                    </div>
                                    <div class="position-absolute h1 text-blue-70" style="bottom: 0; font-size: 3rem; right: 2rem;">
                                        <i class="fas fa-stopwatch" style="color:#D9D9D9;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="card4 rounded-sm text-blue h-100 w-100  ">
                                <h4 class="px-3 py-2"> <i class="fas mr-4 mt-2 fa-calendar-check " style="color:#0091CA;"></i>Week 1 - Year 2019</h4>

                                <div class="px-3 pt-2 pb-3 position-relative">
                                    <div class="w-75 ">
                                        <h4 class="m-0 font-weight-bold" style="color:#A8A8A8;">25 :  &nbsp;     34 :    &nbsp;       03</h4>
                                        <div class="p  font-weight-lighter m-0">Hours</div>
                                    </div>
                                    <div class="position-absolute h1 text-blue-70" style="bottom: 0; font-size: 3rem; right: 2rem;">
                                        <i class="fas fa-stopwatch" style="color:#D9D9D9;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                       



                    </div>
                 <br>
                <div class="step1 row mx-4">
                    <div class="col-md-12 bg-light mr-4 ">
                    <div class="d-flex justify-content-between m-2">
                        <div class="mt-4 ">
                            <h3 style="color:#025214;  font-size:15px;  font-weight: bold;"><i class="fas fa-clock m-2" style="color:#025214;"></i> Attendance Report</h3>
                        </div>
                        <div class="d-inline-flex text-blue  mb-4 pb-0 pt-2 px-3 ml-4 mt-4" style=" background-color:#F5F5F5; ">
                        <div class="d-flex mr-3" >
                            <div class="mr-2 h5"><i class="fas ml-2 fa-file-excel" style="color:#015C16;!important;"></i></div>
                            <div>
                                <a href="#"><div><strong class="h5 font-weight-bold pr-2  border-right"  style="color:#606060; !important; font-size:0.5rem;"> EXCEL</strong></div></a>
                            </div>
                            <div class="mr-2 h5"><i class="fas ml-2 fa-file-csv" style="color:#F5A10E; !important;"></i></div>
                            <div>
                                <a href="#"><div><strong class="h5 font-weight-bold pr-2  border-right "  style="color:#606060; !important; font-size:0.5rem;"> CSV</strong></div></a>
                            </div>
                            <div class="mr-2 h5"><i class="far ml-2 fa-file-pdf" style="color:#AF0303; !important;"></i></div>
                            <div>
                                <a href="#"> <div><strong class="h5 font-weight-bold pr-2  border-right"  style="color:#606060; !important; font-size:0.5rem;"> PDF</strong></div></a>
                            </div>
                            <div class="mr-2 h5"><i class="fas ml-2 fa-print" style="color:#0091CA; !important;"></i></div>
                            <div>
                                <a href="#"> <div><strong class="h5 font-weight-bold "  style="color:#606060; !important; font-size:0.5rem;"> Print</strong></div></a>
                            </div>
                        </div>
                        </div>

                        <form class="form-inline my-2 my-lg-0  position-relative" style="background-color: rgba(0, 0, 0, .1); height:40px;  top: 50%; right: 1rem; transform: translateY(40%);" >
                            <input class="form-control bg-transparent border-0  mr-sm-2" type="search" placeholder="Search..." aria-label="Search"><button class="fas fa-search  border-0 position-absolute" style="right: .5rem; color:#606060;  background-color: rgba(0, 0, 0, .0);" ></button>
                        </form>
                    </div>

                    <table class="table table-bordered">
                        <thead class="thead" style="background-color:#00305A !important; color:#FFFFFF; font-weigt:bold;">
                            <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Day</th>
                            <th scope="col">clock in Date</th>
                            <th scope="col">Clock in Time</th>
                            <th scope="col">Clock out Date</th>
                            <th scope="col">Clock Out Time</th>
                            <th scope="col">Total Hours</th>
                            <th scope="col">Observations </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Monday</td>
                                <td>February  24, 2019</td>
                                <td>08 : 35 AM  <button type="button" class="btn btn-danger rounded-0" style="color:#FFFFFF; background-color:#DF0873; font-size:8px;  font-weight: bold; border:0;"><i class="fas fa-times"></i> </button></td> 
                                <td>February  24, 2019</td>
                                <td>08 : 35 AM  <button type="button" class="btn btn-danger rounded-0" style="color:#FFFFFF; background-color:#049D27; font-size:8px;  font-weight: bold; border:0;"><i class="far fa-check-circle"></i> </button></td> 
                                <td>08 : 35 Hours</td>
                                <td><div class="font-weight-bold" style="color:#AF0303; font-size:12px;">Time not achieved</div> </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Tuesday</td>
                                <td>February  24, 2019</td>
                                <td>08 : 35 AM <button type="button" class="btn btn-danger rounded-0" style="color:#FFFFFF; background-color:#049D27; font-size:8px;  font-weight: bold; border:0;"><i class="far fa-check-circle"></i> </button> </td>
                                <td>February  24, 2019</td>
                                <td>08 : 35 AM  <button type="button" class="btn btn-danger rounded-0" style="color:#FFFFFF; background-color:#DF0873; font-size:8px;  font-weight: bold; border:0;"><i class="fas fa-times"></i> </button></td> 
                                <td>08 : 35 Hours</td>
                                <td><div class="font-weight-bold" style="color:#24943D; font-size:12px;">Time Achieved </div> </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Monday</td>
                                <td>February  24, 2019</td>
                                <td>08 : 35 AM <button type="button" class="btn btn-danger rounded-0" style="color:#FFFFFF; background-color:#049D27; font-size:8px;  font-weight: bold; border:0;"><i class="far fa-check-circle"></i> </button> </td>
                                <td>February  24, 2019</td>
                                <td>08 : 35 AM  <button type="button" class="btn btn-danger rounded-0" style="color:#FFFFFF; background-color:#049D27; font-size:8px;  font-weight: bold; border:0;"><i class="far fa-check-circle"></i> </button></td> 
                                <td>08 : 35 Hours</td>
                                <td><div class="font-weight-bold" style="color:#AF0303; font-size:12px;">Time not achieved</div> </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Tuesday</td>
                                <td>February  24, 2019</td>
                                <td>08 : 35 AM  <button type="button" class="btn btn-danger rounded-0" style="color:#FFFFFF; background-color:#DF0873; font-size:8px;  font-weight: bold; border:0;"><i class="fas fa-times"></i> </button></td> 
                                <td>February  24, 2019</td>
                                <td>08 : 35 AM  <button type="button" class="btn btn-danger rounded-0" style="color:#FFFFFF; background-color:#DF0873; font-size:8px;  font-weight: bold; border:0;"><i class="fas fa-times"></i> </button></td> 
                                <td>08 : 35 Hours</td>
                                <td><div class="font-weight-bold" style="color:#24943D; font-size:12px;">Time Achieved </div> </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Monday</td>
                                <td>February  24, 2019</td>
                                <td>08 : 35 AM <button type="button" class="btn btn-danger rounded-0" style="color:#FFFFFF; background-color:#049D27; font-size:8px;  font-weight: bold; border:0;"><i class="far fa-check-circle"></i> </button> </td>
                                <td>February  24, 2019</td>
                                <td>08 : 35 AM  <button type="button" class="btn btn-danger rounded-0" style="color:#FFFFFF; background-color:#DF0873; font-size:8px;  font-weight: bold; border:0;"><i class="fas fa-times"></i> </button></td> 
                                <td>08 : 35 Hours</td>
                                <td><div class="font-weight-bold" style="color:#24943D; font-size:12px;">Time Achieved </div> </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Tuesday</td>
                                <td>February  24, 2019</td>
                                <td>08 : 35 AM <button type="button" class="btn btn-danger rounded-0" style="color:#FFFFFF; background-color:#049D27; font-size:8px;  font-weight: bold; border:0;"><i class="far fa-check-circle"></i> </button> </td>
                                <td>February  24, 2019</td>
                                <td>08 : 35 AM  <button type="button" class="btn btn-danger rounded-0" style="color:#FFFFFF; background-color:#DF0873; font-size:8px;  font-weight: bold; border:0;"><i class="fas fa-times"></i> </button></td> 
                                <td>08 : 35 Hours</td>
                                <td><div class="font-weight-bold" style="color:#24943D; font-size:12px;">Time Achieved </div> </td>
                            </tr>

                        </tbody>
                        </table>
                        <div class="d-flex justify-content-between m-2 pb-5">
                            <a href="#"><p style="color:#015C16; font-weight:bold;">Page |  1 of 3</p></a>
                            <div class="d-flex mr-3 " >
                                <a href="#"><button type="button" class="btn btn-danger rounded-0 mr-4 mb-0 py-2 px-3" style="color:#FFFFFF; background-color:#04668C; font-size:15px;  font-weight: bold; border:0; "> <i class="fas fa-angle-double-left"></i>&nbsp; Prev</button></a>
                                <div class=" mt-2 ">
                                    <a href="#"><div><strong class="h5 font-weight-bold pr-4 "  style="color:#606060; !important; font-size:1rem;"> 1</strong></div></a>
                                </div>
                                <div class=" mt-2 ">
                                    <a href="#"><div><strong class="h5 font-weight-bold pr-4 "  style="color:#606060; !important; font-size:1rem;"> 2</strong></div></a>
                                </div>
                                <div class=" mt-2 ">
                                    <a href="#"> <div><strong class="h5 font-weight-bold pr-4"  style="color:#606060; !important; font-size:1rem;"> 3</strong></div></a>
                                </div>
                                <a href="#"><button type="button" class="btn btn-danger rounded-0 ml-2  mb-0 py-2 px-3" style="color:#FFFFFF; background-color:#F5A10E; font-size:15px;  font-weight: bold; border:0; "> Next &nbsp; <i class="fas fa-angle-double-right"></i></button></a>
                            </div>
                        </div>
                    </div>
                </div>
     @endsection
