@extends('layouts.admin')

@section('content')
<div class="container-dash">
    <div class="content_head bg-light">
        <div class="d-inline-flex text-white   rounded-top pb-1 pt-2 px-3 ml-4 mt-4" style=" background-color:#012840;">
            <div class="d-flex mr-3" >
                <div class="mr-2 h5"><i class="fas fa-tachometer-alt"></i></div>
                <div>
                    <div><strong class="h5 font-weight-bold">Dashboard</strong></div>
                    <div>Employee panel</div>
                </div>
            </div>
            <div>
                <i class="fas fa-times-circle fa-sm"></i>
            </div>
        </div>
    </div>
    <div class="content px-4">
        <div class="d-flex justify-content-end align-items-center py-2 m-4">
            <span class="font-weight-bold mr-1"><i class="fas fa-home mr-1"></i>Home</span> / Dashboard
        </div>
        
        <div class="row">
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card1 rounded-sm text-white h-100 w-100">
                    <div class="position-relative">
                        <h4 class="px-3 py-2 pt-3">Weekly Worked Time</h4>
                        <div class="border-bottom" style="border-color:#BFBFBF !important; opacity:0.3;"></div>

                        <div class="rounded-circle bg-transparent position-absolute d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="border: 2px solid #F5A10E; width: 20px; padding: 3px; bottom: 0; left: 1rem; transform: translateY(50%);">
                            <div class="rounded-circle embed-responsive embed-responsive-1by1" style="background-color:#FFFFFF; background-size: cover;"> 
                        </div>
                    </div>
                    </div> 
                        <div class="px-3 pt-2 pb-3 position-relative">
                            <div class="w-75 text-center">
                                <h4 class="m-0 font-weight-lighter">HH    &nbsp; &nbsp;    MM    &nbsp; &nbsp;      SS</h4>
                                <div class="h3 font-weight-bold m-0">25 : 34 : 03</div>
                                <div class="progress mt-1 rounded-0" style="background-color:#012840;">
                                    <div class="progress-bar font-weight-light" role="progressbar" style="Background-color:#F5A10E; width: 45%; font-size:7px;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">55% to target</div>
                                </div>
                            </div>
                            <div class="position-absolute text-white-50" style="bottom: 0; right: 1rem; color:#BFBFBF; opacity:0.2;">
                                <i class="fas fa-clock fa-4x"></i>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card2 rounded-sm text-white h-100 w-100">
                    <div class="position-relative">
                        <h4 class="px-3 py-2 pt-3" >Total Leave Taken</h4> 
                        <div class="border-bottom" style="border-color:#BFBFBF !important; opacity:0.3;"></div>
                        <div class="rounded-circle bg-transparent position-absolute d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="border: 2px solid #FFFFFF; width: 20px; padding: 3px; bottom: 0; left: 1rem; transform: translateY(50%);">
                                <div class="rounded-circle embed-responsive embed-responsive-1by1" style="background-color:#F5A10E; background-size: cover;"> 
                        </div>
                        </div>
                    </div>

                    <div class="px-3 pt-4 pb-1 position-relative">
                        <div class="w-75 text-center">
                            <div class="h3 font-weight-bold m-0">4 Days</div>
                            <p style="font-size:15px !important;"> You have exceeded </p>
                        </div>
                        <div class="position-absolute text-white-50" style="bottom: 0; right: 1rem; color:#D9D9D9; opacity:0.2;">
                            <i class="fas fa-university fa-4x"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card3 rounded-sm text-white h-100 w-100">
                    <div class="position-relative">
                        <h4 class="px-3 py-2 pt-3">Unread Messages</h4>
                        <div class="border-bottom" style="border-color:#BFBFBF !important; opacity:0.35;"></div>
                        <div class="rounded-circle bg-transparent position-absolute d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="border: 2px solid #FFFFFF; width: 20px; padding: 3px; bottom: 0; left: 1rem; transform: translateY(50%);">
                            <div class="rounded-circle embed-responsive embed-responsive-1by1" style="background-color:#F5A10E; background-size: cover;"> 
                        </div>
                    </div>
                </div>
                    <div class="px-3  pt-4 pb-1 position-relative">
                        <div class="w-75 text-center text-center" >
                            <div class="h3 font-weight-bold m-0">4 </div> 
                            <p style="font-size:15px !important;">Unread Messages </p>
                        </div>
                    </div> 
                    <div class="position-absolute text-white-50 m-2" style="bottom: 0; right: 1rem; color:#00305A; opacity:0.5;">
                            <i class="fas fa-envelope fa-4x"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card4 rounded-sm text-blue h-100 w-100">
                    <div class="position-relative">
                        <h4 class="px-3 py-2 pt-3">Clock-in-out Status</h4>
                        <div class="border-bottom" style="border-color:#BFBFBF !important; opacity:0.35;"></div>
                        <div class="rounded-circle bg-transparent position-absolute d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="border: 2px solid #F5A10E; width: 20px; padding: 3px; bottom: 0; left: 1rem; transform: translateY(50%);">
                            <div class="rounded-circle embed-responsive embed-responsive-1by1" style="background-color:#F5A10E; background-size: cover;"> 
                        </div>
                    </div>
                </div>
                    <div class="px-3  pt-2 pb-3 position-relative">
                        <div class="w-75 text-center" text-center>
                            <div class="p m-0 mb-4 font-weight-light">You need to Clock-in </div>  <a href="#">
                            <button type="button" class="btn btn-success font-weight-bold"  style="background-color:#049D27;"><i class="fas fa-sign-in-alt"></i> clock In</button></a>
                        </div>
                    </div> 
                    <div class="position-absolute text-white-40 m-2"  style="bottom: 0; right: 1rem; color:#E9E9E9; opacity:0.75;">
                        <i class="fas fa-stopwatch fa-4x mr-4"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="step1 row mt-4">
            <div class="col-md-6">
                <div class="bg-light shadow">
                    <div class="d-flex justify-content-between border-bottom pt-3 pb-2 px-3 position-relative">
                        <h3 style="color:#04668C;  font-size:15px;  font-weight: bold;"><i class="fas fa-tasks mr-2" style="color:#F5A10E;"></i>Tasks board</h3>
                        <form class=" form-inline position-absolute search mr-5"  style="background-color: rgba(0, 0, 0, .1); top: 50%; right: 1rem; transform: translateY(-50%);" >
                            <input class="form-control bg-transparent border-0" type="search" placeholder="Search..." aria-label="Search"><button class="fas fa-search border-0 position-absolute" style="right:.5rem; color:#606060; border:0;  background-color: rgba(0, 0, 0, .0);" ></button>
                        </form>
                    </div>

                    <div class="p-3">
                        <table class="table table-bordered " >
                            <thead class="thead border-0" style="background-color:#00305A !important; color:#FFFFFF; font-weigt:bold; ">
                                <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Creation Date</th>
                                <th scope="col">Author</th>
                                <th scope="col">Date Due</th>
                                <th scope="col">Comment</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>2020-02-28</td>
                                <td>CEO</td>
                                <td>2020-03-12</td>
                                <td>urgent</td>
                                <td><a href="#"><button type="button" class="btn btn-danger rounded-0" style="color:#FFFFFF; background-color:#EC0544; font-size:8px;  font-weight: bold; width:80px;"><i class="fas fa-spinner fa-spin"></i>&nbsp;  Pending</button></a></td>
                                <td><a href="#"> <i class="fas fa-eye ml-1" style="color:#049D27;"></i></a><a href="#"> <i class="fas fa-edit ml-1" style="color:#04668C;"></i></a> 
                                    <a href="#"><i class="fas fa-trash-alt ml-1" style="color:#EC0544;"></i></a> <a href="#"> <i class="fas fa-download ml-1" style="color:#012840;"></i></a>
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">1</th>
                                <td>2020-02-28</td>
                                <td>CEO</td>
                                <td>2020-03-12</td>
                                <td>urgent</td>
                                <td><a href="#"><button type="button" class="btn btn-success rounded-0" style="color:#FFFFFF; background-color:#049D27;  font-size:7px;   font-weight: bold; width:80px;"> <i class="fas fa-check-circle"></i>&nbsp; Completed</button></a></td>
                                <td><a href="#"> <i class="fas fa-eye ml-1" style="color:#049D27;"></i></a><a href="#"> <i class="fas fa-edit ml-1" style="color:#04668C;"></i></a> 
                                    <a href="#"><i class="fas fa-trash-alt ml-1" style="color:#EC0544;"></i></a> <a href="#"> <i class="fas fa-download ml-1" style="color:#012840;"></i></a>
                                </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>2020-02-28</td>
                                    <td>CEO</td>
                                    <td>2020-03-12</td>
                                    <td>urgent</td>
                                    <td><a href="#"><button type="button" class="btn btn-danger rounded-0" style="color:#FFFFFF; background-color:#EC0544; font-size:8px;  font-weight: bold; width:80px;"><i class="fas fa-spinner fa-spin"></i>&nbsp;  Pending</button></a></td>
                                    <td><a href="#"> <i class="fas fa-eye ml-1" style="color:#049D27;"></i></a><a href="#"> <i class="fas fa-edit ml-1" style="color:#04668C;"></i></a> 
                                        <a href="#"><i class="fas fa-trash-alt ml-1" style="color:#EC0544;"></i></a> <a href="#"> <i class="fas fa-download ml-1" style="color:#012840;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>2020-02-28</td>
                                    <td>CEO</td>
                                    <td>2020-03-12</td>
                                    <td>urgent</td>
                                    <td><a href="#"><button type="button" class="btn btn-success rounded-0" style="color:#FFFFFF; background-color:#049D27;  font-size:7px;   font-weight: bold; width:80px;"> <i class="fas fa-check-circle"></i>&nbsp; Completed</button></a></td>
                                    <td><a href="#"> <i class="fas fa-eye ml-1" style="color:#049D27;"></i></a><a href="#"> <i class="fas fa-edit ml-1" style="color:#04668C;"></i></a> 
                                        <a href="#"><i class="fas fa-trash-alt ml-1" style="color:#EC0544;"></i></a> <a href="#"> <i class="fas fa-download ml-1" style="color:#012840;"></i></a>
                                    </td>
                                 </tr>
                            </tbody>
                        </table>
                        <a href="#"><p style="color:#015C16; font-weight:bold;">View full task list  |  ></p></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="bg-light shadow h-100">
                    <div class="d-flex justify-content-between border-bottom pt-3 pb-2 px-3">
                        <h3 style="color:#00305A;  font-size:15px;  font-weight: bold;"><i class="fas fa-tasks mr-2" style="color:#F5A10E;"></i>Work time tracker</h3>
                        <p class="m-0 mr-5"><i class="fas fa-square mr-2" style="color: #049D27; font-size:18px;"></i> Clock-In <i class="fas fa-square mr-2" style="color: #EC0544; font-size:18px;"></i>Clock-out</p>
                    </div>

                    <div class="p-3 pr-5">
                        <div class="d-flex justify-content-end"> 
                            <div class="form-check form-check-inline">
                                <input class="form-check-input " type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label font-weight-bold" for="inlineCheckbox1">Daily</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label font-weight-bold" for="inlineCheckbox2">Weekly</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <label class="form-check-label font-weight-bold" for="inlineCheckbox3">Monthly</label>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('images/Groupe 235@2x.png') }}" class="img-fluid px-4 pb-4" alt=" work time">
                </div>
            </div>
            
            <div class="col-md-7 pt-4">
                <div class="bg-light shadow h-100">
                    <div class="d-flex justify-content-between border-bottom pt-3 pb-2 px-3 position-relative">
                        <h3 style="color:#04668C;  font-size:15px;  font-weight: bold;"><i class="fas fa-envelope mr-2" style="color:#EC0544;"></i>Recents messages</h3>

                        <form class="form-inline position-absolute search mr-5"  style="background-color: rgba(0, 0, 0, .1); top:50%; transform: translateY(-50%); right: 1rem;">
                            <input class="form-control mr-sm-2 bg-transparent border-0" type="search" placeholder="Search..." aria-label="Search"><button class="fas fa-search border-0 position-absolute" style="right:.5rem; color:#606060; border:0;  background-color: rgba(0, 0, 0, .0);" ></button>
                        </form>
                    </div>

                    <div class="p-3">
                        <table class="table table-bordered">
                            <thead class="thead" style="background-color:#00305A !important; color:#FFFFFF; font-weigt:bold;">
                                <tr>
                                <th scope="col">Sl</th>
                                <th scope="col">Received Date </th>
                                <th scope="col">Sender</th>
                                <th scope="col">Object</th>
                                <th scope="col">Content</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>2020-02-10</td>
                                <td>John Doe</td>
                                <td>Kindly send report...</td>
                                <td>Hello, you are invited...</td>
                                <td><a href="#"> <button type="button" class="btn btn-success rounded-0" style="color:#FFFFFF; background-color:#1BB13D;  font-size: 7px;   font-weight: bold;"><i class="fas fa-eye"></i> &nbsp; View</button></a>
                                    <a href="#"><button type="button" class="btn btn-info rounded-0" style="color:#FFFFFF; background-color:#04668C;  font-size: 7px;   font-weight: bold;" ><i class="fas fa-reply"></i> &nbsp; Reply</button></a>
    
                                </td>
                            
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>2020-02-10</td>
                                    <td>John Doe</td>
                                    <td>Kindly send report...</td>
                                    <td>Hello, you are invited...</td>
                                    <td><a href="#"> <button type="button" class="btn btn-success rounded-0" style="color:#FFFFFF; background-color:#1BB13D;  font-size: 7px;   font-weight: bold;"><i class="fas fa-eye"></i> &nbsp; View</button></a>
                                        <a href="#"><button type="button" class="btn btn-info rounded-0" style="color:#FFFFFF; background-color:#04668C;  font-size: 7px;   font-weight: bold;" ><i class="fas fa-reply"></i> &nbsp; Reply</button></a>
        
                                    </td>
                                
                                    </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>2020-02-10</td>
                                    <td>John Doe</td>
                                    <td>Kindly send report...</td>
                                    <td>Hello, you are invited...</td>
                                    <td><a href="#"> <button type="button" class="btn btn-success rounded-0" style="color:#FFFFFF; background-color:#1BB13D;  font-size: 7px;   font-weight: bold;"><i class="fas fa-eye"></i> &nbsp; View</button></a>
                                        <a href="#"><button type="button" class="btn btn-info rounded-0" style="color:#FFFFFF; background-color:#04668C;  font-size: 7px;   font-weight: bold;" ><i class="fas fa-reply"></i> &nbsp; Reply</button></a>
        
                                    </td>
                                
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>2020-02-10</td>
                                        <td>John Doe</td>
                                        <td>Kindly send report...</td>
                                        <td>Hello, you are invited...</td>
                                        <td><a href="#"> <button type="button" class="btn btn-success rounded-0" style="color:#FFFFFF; background-color:#1BB13D;  font-size: 7px;   font-weight: bold;"><i class="fas fa-eye"></i> &nbsp; View</button></a>
                                            <a href="#"><button type="button" class="btn btn-info rounded-0" style="color:#FFFFFF; background-color:#04668C;  font-size: 7px;   font-weight: bold;" ><i class="fas fa-reply"></i> &nbsp; Reply</button></a>
            
                                        </td>
                                    
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>2020-02-10</td>
                                        <td>John Doe</td>
                                        <td>Kindly send report...</td>
                                        <td>Hello, you are invited...</td>
                                        <td><a href="#"> <button type="button" class="btn btn-success rounded-0" style="color:#FFFFFF; background-color:#1BB13D;  font-size: 7px;   font-weight: bold;"><i class="fas fa-eye"></i> &nbsp; View</button></a>
                                            <a href="#"><button type="button" class="btn btn-info rounded-0" style="color:#FFFFFF; background-color:#04668C;  font-size: 7px;   font-weight: bold;" ><i class="fas fa-reply"></i> &nbsp; Reply</button></a>
            
                                        </td>
                                    
                                    </tr>
                            </tbody>
                        </table>
                        <a href="#"><p style="color:#015C16; font-weight:bold;">View full task list  |  ></p></a>
                    </div>
                </div>
            </div>

            <div class="col-5 pt-4">
                <div class="bg-light shadow h-100">
                    <div class="border-bottom pt-3 pb-2 px-3"> 
                        <h3 style="color:#00305A; font-size:15px; font-weight: bold;"><i class="fas fa-envelope mr-2 " style="color:#015C16;"></i>Employee Report</h3>
                    </div>
                
                    <div class="p-3 center-block">
                        <div class="d-flex justify-content-center ">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Daily</label>
                            </div>
                            
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Weekly</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <label class="form-check-label" for="inlineCheckbox3">Monthly</label>
                            </div>
                        </div>
    
                        <div class="form-group mx-auto">
                            <select class="form-control rounded-0 mx-auto" style="width: 70%; background-color:#F5A10E; color:#FFFFFF;" id="exampleFormControlSelect1">
                                <option>Select employee...</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
    
                        <div class="row">
                            {{-- <div class="mx-aut"> --}}
                                 
                            {{-- </div> --}}
                            
                            <div class="col-12">
                                <div class="d-flex align-items-center mx-auto" style="width: 70%">
                                    <div class="rounded-circle bg-transparent d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="border: 3px solid #00305A; flex: 0 0 80px; padding: 4px;">
                                        <div class="rounded-circle embed-responsive embed-responsive-1by1" style="background: url({{ asset('images/pic1.jpg') }}) no-repeat center; background-size: cover;"> 
                                        </div>
                                    </div>
                                
                                    <div class="pl-3">
                                        <div class="row">
                                            <h4 class="col-12 font-weight-bold">Tami Ambrad</h4> 
                                            <h6 class="col-12  font-weight-light" style="font-size: 18px;">Sales manager</h6>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('images/Groupe 234@2x.png') }}" class="img-fluid pl-5 pt-3" alt="employee report">
                    </div>
                </div>
                
            </div>
        </div> 

        
    </div>
</div>
@endsection