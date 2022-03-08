
<?php 
include 'db.php';
$getname=mysqli_query($conn,"SELECT * FROM title ");
$row =mysqli_fetch_array($getname);
$appname=$row['app_name'];

echo '<div class="sidebar-wrapper sidebar-theme">
            
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            
            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
                   
                    <li class="nav-item theme-text">
                        <a href="home.php" class="nav-link">'.$appname.'</a>
                    </li>
                </ul>


                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu" style="color:white;">
                        <a href="home.php">
                            <div class="">
                                <i class="flaticon-computer-6 ml-3"></i>
                                <span>Home</span>
                            </div>

                            <div>
                               
                            </div>
                        </a>
                        
                    </li>
                   
                    

                   

                    

                    


                   



                <li class="menu">
                    <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                        <i class="flaticon-users"></i>
                            <span>Members</span>
                        </div>
                        <div>
                            <i class="flaticon-right-arrow"></i>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                        <li>
                            <a href="addmember.php"> Add Member </a>
                        </li>
                        <li>
                            <a href="view_member.php"> Edit Members </a>
                        </li>
                        <li>
                            <a href="print.php"> View Members </a>
                        </li>

                        



                       

                       
                    </ul>
                </li>




                

                    



                    <li class="menu">
                        <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-layers"></i>
                                <span>Admins</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="elements" data-parent="#accordionExample">
                            <li>
                                <a href="addadmin.php"> Add Admin </a>
                            </li>

                            <li>
                            <a href="addbg.php"> Add print Image </a>
                        </li>
                            <li>
                                <a href="viewadmin.php"> View Admin </a>
                            </li>
                           
                        </ul>
                    </li>




                    


                    


                    
                     
                    
                </ul>
            </nav>

        </div>'
               ;?>