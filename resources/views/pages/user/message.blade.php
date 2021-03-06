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
                        <div class="d-inline-flex text-white  rounded-top pb-0 pt-2 px-3 ml-4 mt-4" style=" background-color:#012840; height:57px;">
                            <div class="d-flex mr-3" >
                                <div class="mr-2 h5"><i class="fas fa-envelope pr-2  border-right text-white"></i></div>
                                <div>
                                    <div><strong class="h5 font-weight-bold">Messages</strong></div>
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
                    <div class="d-flex justify-content-end align-items-center py-2 px-4 mb-2">
                        <span class="font-weight-bold mr-1"><i class="fas fa-home mr-1"></i>Home</span> / Messages
                    </div>

                <div class="step1 row mx-4 shadow h-100" style="background-color:#FFFFFF !important;">
                    <div class="col-md-12 bg-light mr-2 p-0 h-100">
                    <div class="d-flex justify-content-between m-2 border-bottom px-3 pb-2 ">
                        <h3 style="color:#04668C;  font-size:15px;  font-weight: bold;"><i class="fas fa-envelope m-2" style="color:#EC0544;"></i>Messages</h3>
                    </div>
                    <div class="m-2 ml-4">
                        <button type="button" class="btn btn-success rounded-0" style="color:#FFFFFF; background-color:#1BB13D;  font-size: 15px; border:0;" ><i class="fas fa-inbox"></i> &nbsp; Inbox (02)</button>
                        <button type="button" class="btn btn-info rounded-0" style="color:#FFFFFF; background-color:#0091CA;  font-size: 15px; border:0;" ><i class="fas fa-paper-plane"></i>&nbsp; Send (02)</button>
                        <button type="button" class="btn btn-info rounded-0" style="color:#FFFFFF; background-color:#F5A10E;  font-size: 15px; border:0;" ><i class="fas fa-archive"></i> &nbsp; Archive (02)</button>
                    </div>
                <div class="row pb-5">
                <div class="col-6 ml-4">
                    <table class="table table-bordered">
                        <thead class="thead" style="background-color:#00305A !important; color:#FFFFFF; font-weigt:bold;">
                            <tr>
                            <th scope="col">SL</th>
                            <th scope="col">From </th>
                            <th scope="col">Subject</th>
                            <th scope="col"> To</th>
                            <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>John DOE</td>
                            <td class="font-weight-bold">Hello, you are invited...</td>
                            <td>Kindly send report...</td>
                            <td>28 - 01 -2020</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>John DOE</td>
                                <td class="font-weight-bold">Checking operating...</td>
                                <td>Kindly send report...</td>
                                <td>28 - 01 -2020</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>John DOE</td>
                                <td class="font-weight-bold">Good morning sir...</td>
                                <td>Validate our meeting...</td>
                                <td>28 - 01 -2020</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>John DOE</td>
                                <td class="font-weight-bold">You are expected to...</td>
                                <td>Kindly send report...</td>
                                <td>28 - 01 -2020</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>John DOE</td>
                                <td class="font-weight-bold">Users are always...</td>
                                <td>Kindly send report...</td>
                                <td>28 - 01 -2020</td>
                            </tr>

                        </tbody>
                        </table>
                    </div>
                    <div class="col-5">
                        <div class="step1 row ">
                            <div class="col-12">
                                <div class="bg-light border ">
                                    <div class="d-flex justify-content-between align-items-center border-bottom px-3 pb-2 mb-2 mt-2">
                                        <h3 class="m-0" style="color:#012840;  font-size:15px;  font-weight: bold;">John Doe</h3>
                                        <i class="fas fa-arrow-right py-2"></i>
                                        <div  style="color:#535353; font-weight: bold;"> You</div>
                                        <div>
                                        <button type="button" class="btn btn-success" style="color:#FFFFFF; background-color:#24943D;  font-size: 8px;   font-weight: bold;"><i class="fas fa-reply"></i> &nbsp; Reply</button>
                                        <button type="button" class="btn btn-info" style="color:#FFFFFF; background-color:#04668C;  font-size: 8px;   font-weight: bold;" ><i class="fas fa-check-square"></i>&nbsp; Mark as read</button>
                                        <button type="button" class="btn btn-info" style="color:#FFFFFF; background-color:#EC0544;  font-size: 8px;   font-weight: bold;" ><i class="fas fa-trash-alt"></i> &nbsp; Delete</button>
                                        </div>
                                    </div>
                                    <div class="p-3 mb-5">
                                        <div class="card bg-white text-secondary shadow">
                                            <div class="px-3 card-img-top font-weight-bold py-2 border-bottom d-flex justify-content-between">
                                                <span>Good morning madam,</span>
                                                <i class="fas fa-expand-arrows-alt"></i>
                                            </div>
                                            <div class="card-body font-weight-light">
                                                I am fully grateful to all what you did to me. I never tought things could be no longer
                                                as there were before. All days of my life I spent contracting different employers
                                                and I think that I got a very nice one.   
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
    @endsection
