<?php 



function convert()
{
     
$curl = curl_init();
$linker = $_POST['links'];
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.pdfshift.io/v2/convert/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode(array("source" =>$linker, "landscape" => false, "use_print" => true)),
    CURLOPT_HTTPHEADER => array('Content-Type:application/json'),
    CURLOPT_USERPWD => 'dbd5782a10df46ed93d82e933830f71e'
));

$response = curl_exec($curl);

file_put_contents('pdf/database6.pdf', $response);


echo '<a href="">Click to download file</a>';

}

function footer() {
    $dy=date("Y");

    echo' 					<p style="background-color:rgba(0, 0, 0, 0.836);">© '.$dy.' HCT. All rights reserved | Design by <a href="http://purplesofts.com/" target="blank">Purple Software.</a></p>';

}



function login() 

{
    

    include "db.php";
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $log=mysqli_query($conn,"SELECT * FROM super WHERE email='$email' AND password='$password'");

    if ($row=mysqli_fetch_array($log)) {

     $_SESSION['id']=$row['id'];
     $_SESSION['name']=$row['name'];
     $_SESSION['email']=$row['email'];

     echo '
     <div id="mess"><p>Login Successful <img src="loading.gif" width="30px" height="30px"/></p></div> 
     
            <script>
                setTimeout(function(){
                    window.location="home.php";
                },3000)
            </script>';
    } else {
        echo'<div id="mess" style="background-color:red;"><p>Please enter correct email or password</p></div> ';

    }
}









function addmember(){

    include "db.php";
    $name= $_POST['name'];
    $nickname = $_POST['nickname'];
    $position = $_POST['position'];
    $contact = $_POST['contact'];
    $club = $_POST['club'];
    $ambition = $_POST['ambition'];

    $cmemb= mysqli_query($conn,"SELECT * FROM members WHERE contact= '$contact'  ");
    $rcourse= mysqli_fetch_array($cmemb);
        if ($rcourse >=1) {
            echo' <div id="mess" style="background-color:red;"><p>Sorry member already in  records</p></div>';
                        
            # code...
        } else {


            if (empty($name)) {

                echo' <div id="mess" style="background-color:red;"><p>Please enter name</p></div>';

                
            }
            elseif(empty($contact)) {
                echo' <div id="mess" style="background-color:red;"><p>Please enter phone number</p></div>';

            }
            else {
                    $img = $_POST['image'];
                    $folderPath = "upload/";
                
                    $image_parts = explode(";base64,", $img);
                    $image_type_aux = explode("image/", $image_parts[0]);
                    $image_type = $image_type_aux[1];
                
                    $image_base64 = base64_decode($image_parts[1]);
                    $fileName = uniqid() . '.png';
                
                    $file = $folderPath . $fileName;
                    file_put_contents($file, $image_base64);
                $admemb= mysqli_query($conn,"INSERT INTO members(name,nickname,position,contact,club,ambition,pic,dateadded) VALUES ('$name','$nickname','$position','$contact','$club','$ambition','$fileName','fffff')  ");
            
                if ($admemb) {
                    echo' <div id="mess"><p>Member added successfully</p></div>';
                        
                } else {
                    echo' <div id="mess" style="background-color:red;"><p>Failed to add member</p></div>';
                }
            }
           
                
        }
        


}



function addadmin()
{
    include 'db.php';

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if (empty($name)) {

        echo' <div id="mess" style="background-color:red;"><p>Enter name</p></div>';

    }
    elseif(empty($email)){

        echo' <div id="mess" style="background-color:red;"><p>enter email address</p></div>';


    }
    elseif (empty($password)) {
        echo' <div id="mess" style="background-color:red;"><p>enter password</p></div>';

        # code...
    }
    else {

       $inseto = mysqli_query($conn,"INSERT INTO super (name,email,password) VALUES ('$name','$email','$password')");
       if ($inseto) {
        echo' <div id="mess"><p>Admin Added Successfully</p></div>
        
        <script> 
            setTimeout(function(){
                window.location="viewadmin.php";

            },5000)
        </script>
        ';

           # code...
       }

    }



}













function edic($id,$ctitle,$duration,$arequirement,$location,$level,$structure,$description,$fees){

    include 'db.php';
    $edip= mysqli_query($conn,"UPDATE programme SET ctitle ='$ctitle',duration='$duration',arequirement= '$arequirement',location= '$location',level='$level',structure='$structure',description='$description',fees='$fees' WHERE id = '$id' ");

    if ($edip) {

        echo' <div id="mess"><p>Course updated successfully</p></div>';
        # code...
    } else {
        echo' <div id="mess" style="background-color:red;"><p>Failed to update course</p></div>';

    }
    



}

function updateadmin()
{

    $name= $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id  = $_POST['id'];


    include 'db.php';
    $edip= mysqli_query($conn,"UPDATE super SET name ='$name',email='$email',password= '$password' WHERE id = '$id' ");

    if ($edip) {

        echo' <div id="mess"><p>Admin  updated successfully</p></div>';
        # code...
    } else {
        echo' <div id="mess" style="background-color:red;"><p>Failed to update Admin</p></div>';

    }
   
    

}



function updatemember()
{

    $name= $_POST['name'];
    $nickname = $_POST['nickname'];
    $position = $_POST['position'];
    $contact = $_POST['contact'];
    $club = $_POST['club'];
    $ambition = $_POST['ambition'];
    $id = $_POST['id'];


    include 'db.php';
    $edip= mysqli_query($conn,"UPDATE members SET name ='$name',nickname='$nickname',position= '$position',contact= '$contact',club= '$club',ambition= '$ambition' WHERE id = '$id' ");

    if ($edip) {

        echo' <div id="mess"><p>Member  updated successfully</p></div>';
        # code...
    } else {
        echo' <div id="mess" style="background-color:red;"><p>Failed to update member</p></div>';

    }


}




function viewproducts(){
    include 'db.php';
    $vp =mysqli_query($conn,"SELECT * FROM drugs");

    while ($vip= mysqli_fetch_array($vp)) {

        $id= $vip['id'];
        $bname= $vip['bname'];
        $gname = $vip['gname'];
        $sp = $vip['spname'];
        $cat=$vip['category'];
        $price = $vip['price'];
        $remaining = $vip['remaining'];
        $quantity = $vip['quantity'];
        $date_added = $vip['date_added'];
        $date_updated = $vip['date_updated'];
        $expire = $vip['expire'];



                                        $getsupp= mysqli_query($conn,"SELECT * FROM suppliers WHERE id ='$sp' ");
                                        $gets=mysqli_fetch_array($getsupp);
                                        $spname = $gets['name'];

                                        $getcupp= mysqli_query($conn,"SELECT * FROM category WHERE id ='$cat' ");
                                        $getc=mysqli_fetch_array($getcupp);
                                        $category = $getc['name'];

        echo '<tr>
        <td>'.$bname.'</td>
        <td>'.$gname.'</td>
        <td>'.$spname.'</td>
        <td>'.$category.'</td>
        <td>'.$price.'</td>
        <td>'.$remaining.'</td>
        <td>'.$quantity.'</td>
        <td>'.$date_added.'</td>
        <td>'.$date_updated.'</td>
        <td>'.$expire.'</td>
        <td><a href="editproduct.php?pid='.$id.'"><span class="flaticon-edit-7"></span> </a>| <a href="deleteproduct.php?pid='.$id.'" <span class="flaticon-delete"></span></td>

       
        
    </tr>';




        
    }

}

// FUction to display all members
function viewallmembers(){



    include 'db.php';
    $vp =mysqli_query($conn,"SELECT * FROM members");

    while ($vip= mysqli_fetch_array($vp)) {

        $id= $vip['id'];
        $name= $vip['name'];
        $nickname = $vip['nickname'];
        $position = $vip['position'];
        $contact=$vip['contact'];
        $club = $vip['club'];
        $ambition = $vip['ambition'];
        $pic = $vip['pic'];
        



                                        

        echo '<tr>
        <td>'.$name.'</td>
        <td>'.$nickname.'</td>
        <td>'.$position.'</td>
        <td>'.$contact.'</td>
        <td>'.$club.'</td>
        <td>'.$ambition.'</td>
        <td><img src="upload/'.$pic.'" width="100px" height="100px"/></td>
        
        <td><a href="editmember.php?pid='.$id.'"><span class="flaticon-edit-7"></span> </a>| <a href="deluser.php?pid='.$id.'" <span class="flaticon-delete"></span></td>

       
        
    </tr>';

    }
}



function viewalladmins()
{
    include 'db.php';

    $vp =mysqli_query($conn,"SELECT * FROM super");

    while ($vip= mysqli_fetch_array($vp)) {

        $id= $vip['id'];
        $name= $vip['name'];
        
        $email = $vip['email'];
        $password = $vip['password'];
        



                                        

        echo '<tr>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
       
        
        <td><a href="editadmin.php?pid='.$id.'"><span class="flaticon-edit-7"></span> </a>| <a href="deladmin.php?pid='.$id.'" <span class="flaticon-delete"></span></td>

       
        
    </tr>';

    }
}


function bgpic()
{
    include 'db.php';
    $fileinfo=PATHINFO($_FILES["image"]["name"]);
    $newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
    $pic= $newFilename;  
    $udbg = mysqli_query($conn,"UPDATE bg SET background = '$pic' WHERE id = 1 ");
    if ($udbg) {
        move_uploaded_file($_FILES["image"]["tmp_name"],"bg/" . $newFilename);


        echo' <div id="mess"><p>Print Background Updated</p></div>';

        # code...
    }
    else {
        echo' <div id="mess" style="background-color:red;"><p>Failed to update Pic</p></div>';

    }

}







function so(){

    include 'db.php';
    $gefo= mysqli_query($conn,"SELECT * FROM title WHERE id = '1' ");
    $getf= mysqli_fetch_array($gefo);
    $app = $getf['app_name'];

    echo'
    <footer class="footer-section theme-footer">

        <div class="footer-section-1 sidebar-theme">
            
        </div>

        <div class="footer-section-2 container-fluid">
            <div class="row">
                
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">© '.date("Y"). ' 1step Gh <a target="_blank" href="http://www.dollarstir.com">Designed by Dollarsoft Corporation</a></p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    ';
}








?>












































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































