@extends('layouts.user')

@section('content')
            <div class="container-dash">
                <div class="content_head bg-light d-flex justify-content-between ">
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
                                    <div><strong class="h5 font-weight-bold">Notificationss</strong></div>
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
                    <div class="d-flex justify-content-end align-items-center py-2 px-4 mb-4">
                        <span class="font-weight-bold mr-1"><i class="fas fa-home mr-1"></i>Home</span> / Messages
                    </div>

                <div class="step1 row mx-4 h-100 shadow">
                    <div class="col-md-12 bg-light mr-4 p-0">
                    <div class="d-flex justify-content-between m-2 border-bottom px-3 pb-2 p-4">
                        <h3 style="color:#04668C;  font-size:15px;  font-weight: bold;"><i class="fas fa-envelope m-2" style="color:#EC0544;"></i>Recents messages</h3>
                        <form class=" form-inline my-2 my-lg-0 m-5 mr-5  position-relative search"  style="background-color: rgba(0, 0, 0, .1);" >
                            <input class="form-control mr-sm-2 bg-transparent border-0" type="search" placeholder="Search..." aria-label="Search"><button class="fas fa-search border-0 position-absolute" style="right:.5rem; color:#606060; border:0;  background-color: rgba(0, 0, 0, .0);" ></button>
                        </form>
                    </div>

                <div class="row">
                    <div class="col-11 ml-4  m-4">
                    <table class="table table-bordered">
                        <thead class="thead" style="background-color:#00305A !important; color:#FFFFFF; font-weigt:bold;">
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
                            <td><a href="#"> <i class="fas fa-eye ml-2" style="color:#049D27;"></i></a><a href="#"> <i class="fas fa-edit ml-2" style="color:#04668C;"></i></a> 
                                <a href="#"><i class="fas fa-trash-alt ml-2" style="color:#EC0544;"></i></a> <a href="#"> <i class="fas fa-download ml-2" style="color:#012840;"></i></a>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">1</th>
                            <td>2020-02-28</td>
                            <td>CEO</td>
                            <td>2020-03-12</td>
                            <td>urgent</td>
                            <td><a href="#"><button type="button" class="btn btn-success rounded-0" style="color:#FFFFFF; background-color:#049D27;  font-size:7px;   font-weight: bold; width:80px;"> <i class="fas fa-check-circle"></i>&nbsp; Completed</button></a></td>
                            <td><a href="#"> <i class="fas fa-eye ml-2" style="color:#049D27;"></i></a><a href="#"> <i class="fas fa-edit ml-2" style="color:#04668C;"></i></a> 
                                <a href="#"><i class="fas fa-trash-alt ml-2" style="color:#EC0544;"></i></a> <a href="#"> <i class="fas fa-download ml-2" style="color:#012840;"></i></a>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                        <div class="d-flex justify-content-between m-2 mb-4">
                            <p style="color:#015C16; font-weight:bold;">Page |  1 of 3</p>
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
            </div>
                </div>
    @endsection
