<aside class="nav_dash" style="flex: 0 0 250px;">
    <nav class="navbar navbar-expand-lg navbar-light  p-0">
     <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="d-flex flex-column m-0 p-0 w-100">
            <div class="bg-white text-dark d-flex align-items-center justify-content-center font-weight-bold py-3 pr-3" id="navbarNavDropdown">
                <i class="far fa-clock fa-2x mr-2"></i>EMP TIME
            </div>
            <li>
                <div class="d-flex justify-content-end px-3 py-2" style="font-size:20px;"><i class="fas fa-edit"></i></div>
            <div class="pb-4 text-center">
                <div class="d-flex justify-content-center">
                    <div class="rounded-circle bg-transparent d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="border: 3px solid #F5A10E; width: 90px; padding: 4px;">                         
                        <div class="rounded-circle embed-responsive embed-responsive-1by1" style="background: url({{ asset('images/pic1.jpg') }}) no-repeat center; background-size: cover;"></div> 
                    </div> 
                </div>
                <h4 class="mb-0 " style="font-size: 25px !important; font-weight: bold;">Tami Ambrad</h4>
                <div class="d-flex justify-content-center">
                    <div class="col-8 d-flex justify-content-center border-bottom">
                        <div class="rounded-circle bg-white d-flex justify-content-center align-items-center mt-0 embed-responsive embed-responsive-1by1" style="border: 1px solid #FFFFFF; width: 15px; padding: -5px; transform: translateY(50%);"> 
                            <div class="rounded-circle  embed-responsive embed-responsive-1by1" style=" background-color:#F5A10E; width: 100%; "></div>
                         </div>
                    </div>
                </div> 
                
                <div class="m-2 font-weight-light" style="font-size:18px;color:#BFBFBF; !important;">Sales manager</div>
                <div class="d-flex justify-content-center">
                    <div><i class="fas fa-briefcase mr-1 pr-2 text-white"></i></div>
                    <div class="d-flex position-relative justify-content-center align-items-center border-left mr-1">
                        <div class="rounded-circle bg-warning embed-responsive embed-responsive-1by1" style=" width: 6px; bottom: 0; transform: translateX(-50%);"></div>
                    </div>
                    <span style="color:#F5A10E;">Hired on 26 - 02 - 2019</span>
                </div> 


                <div class="d-flex justify-content-center align-items-center pr-4">
                    <div class="rounded-circle  embed-responsive embed-responsive-1by1 mr-1"  style=" width: 15px; height: 15px; background-color:#BEDB39 !important;"></div>
                    <span style="color:#96CA2D !important;">Online</span> 
                </div>
                <div class="border-bottom mt-2" style="border-color:#F5A10E !important; opacity:0.25;"></div>
            </div>
            </li>
        <div class="accordion mt-5" id="accordionExample">
            <li class="nav-item ">
                <a class="nav-link pl-4 {{ Request::segment(1) === 'employee' ? 'active' : '' }}" href="{{ url("employee") }}"  ><i class="fas fa-tachometer-alt fa-fw mr-2"></i> Dashboard</a> 
            </li>
            <li class="nav-item mt-1">
                <a class="nav-link pl-4 {{ Request::segment(1) === 'attendance-report' ? 'active' : '' }} " href="{{ url("attendance-report") }}"   ><i class="fas fa-fw fa-user-tie  mr-2 "></i>  Attendance report</a> 
            </li>

            <li class="nav-item"> 
                <a class="nav-link pl-4 {{ Request::segment(1) === 'calendar' ? 'active' : '' }} " data-toggle="collapse" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" href="#multiCollapseExample1"><i class="fas fa-fw mr-2 fa-calendar"></i>My Calendar<i class="fas fa-fw mr-2 ml-2 fa-angle-right"></i></a> 
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse  bg-black-50  border-top border-thin pl-4" id="multiCollapseExample1" data-parent="#accordionExample" style=" background-color: rgba(0, 0, 0, 0.5); border-opacity: 0.5;">
                        <div class="border-left pl-3  navbar-nav d-flex align-items-justify  justify-content-end flex-column">
                            <a href="{{ url("calendar") }}" class="nav-item position-relative text-decoration-none sub-active"><span style="left: -16px;  width:15px; opacity:0.5;" class="position-relative">-</span> Add Calendar</a>
                            <a href="{{ url("calendar") }}" class="nav-item position-relative text-decoration-none "><span style="left: -16px; opacity:0.5;" class="position-relative">-</span> List Calendar</a>
                            <a href="{{ url("calendar") }}" class="nav-item position-relative text-decoration-none "><span style="left: -16px; opacity:0.5;" class="position-relative">-</span> Edit Calendar</a>
                        </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">  
                <div class="full-flex">  
                    <a class="nav-link pl-4 {{ Request::segment(1)=== 'user-chat' ? 'active' : '' }}" href="{{ url("user-chat") }}">
                        <i class="fa fa-sms fa-fw mr-2"></i> 
                        Chat
                        <div class="rounded-circle position-relative d-inline-flex justify-content-center align-items-center  align-items-center embed-responsive embed-responsive-1by1" style="width: 15px; height: 15px; font-size: .5rem; top: -4px; background-color:#1BB13D; ">12</div>
                    </a>
                </div>
            </li>
            <li class="nav-item">
            <a class="nav-link pl-4 {{ Request::segment(1)=== 'message' ? 'active' : 'message' }}" href="{{ url("message") }}"><i class="fas fa-fw mr-2 fa-envelope"></i> Messages</a> 
            </li>

            <li class="nav-item"> 
                <div class="full-flex">
                    <a class="nav-link pl-4 {{ Request::segment(1)=== 'task' ? 'active' : 'task' }}" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="multiCollapseExample2" href="#multiCollapseExample2">
                        <i class="fas fa-fw mr-2 fa-tasks"></i> My Tasks
                        <div class="rounded-circle position-relative d-inline-flex justify-content-center align-items-center  align-items-center embed-responsive embed-responsive-1by1" style="width: 15px; height: 15px; font-size: .5rem; top: -4px; background-color:#EC0544; ">12</div>
                        <i class="fas fa-fw mr-2 ml-2 fa-angle-right"></i>
                    </a> 
                </div>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse bg-black-50  border-top border-thin pl-4" id="multiCollapseExample2"  data-parent="#accordionExample"  style=" background-color: rgba(0, 0, 0, 0.5); border-opacity: 0.5;">
                                <div class=" border-left pl-3 navbar-nav d-flex align-items-justify   justify-content-end flex-column">
                                    <a href="{{ url("task") }}" class="nav-item position-relative text-decoration-none sub-active"><span style="left: -16px;  width:15px; opacity:0.5;" class="position-relative">-</span> Add Tasks</a>
                                    <a href="{{ url("task") }}" class="nav-item position-relative text-decoration-none "><span style="left: -16px; opacity:0.5;" class="position-relative">-</span> List Tasks</a>
                                    <a href="{{ url("task") }}" class="nav-item position-relative text-decoration-none "><span style="left: -16px; opacity:0.5;" class="position-relative">-</span> Edit Tasks</a>
                                </div>
                            </div>
                        </div>
                    </div>    
            </li>
            <li class="nav-item"> 
                <a class="nav-link pl-4 {{ Request::segment(1)=== 'settings' ? 'active' : '' }}" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="multiCollapsesettings" href="#multiCollapsesettings"> <i class="fas fa-fw mr-2 fa-cog"></i> Settings<i class="fas fa-fw mr-2 ml-2 fa-angle-right"></i></a> 
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse bg-black-50  border-top border-thin pl-4" id="multiCollapsesettings" data-parent="#accordionExample" style=" background-color: rgba(0, 0, 0, 0.5); border-opacity: 0.5;">
                        <div class="border-left pl-3  navbar-nav d-flex  align-items-justify justify-content-end flex-column">
                            <a href="#" class="nav-item position-relative text-decoration-none sub-active"><span style="left: -16px;  width:15px; opacity:0.5;" class="position-relative">-</span> profile settings</a>
                            <a href="#" class="nav-item position-relative text-decoration-none "><span style="left: -16px; opacity:0.5;" class="position-relative">-</span> language settings</a>
                            <a href="#" class="nav-item position-relative text-decoration-none "><span style="left: -16px; opacity:0.5;" class="position-relative">-</span> security settings</a>
                        </div>
                        </div>
                    </div>
                </div>
            </li>
        </div>


        </ul>

        </div>
    </nav>
</aside>