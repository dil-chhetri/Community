<?php

session_start();
include_once 'config/dbcon.php';

if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
header('location:../login.php');
exit();
}
include_once "includes/headers.php";
include_once "includes/navbar.php";
include_once "includes/actions.php";
include_once "includes/overlay.php";
// include_once('config/dbcon.php');
// include('includes/cartmodule.php');
if(isset($_SESSION['id'])){
    echo $_SESSION['id'];
   $user_id = $_SESSION['id'];
}
?>


       
    <div class="py-5">
        <div class="container">
    
        <div class="row justify-content-center">
        <div class="col-md-12">
                  
               
        
                        <div class="row justify-content-center p-2 main-contain">
                                 <?php
                                $query = "SELECT * FROM community_chatgroup WHERE userid = $user_id";
                                $query_run = mysqli_query($con,$query);
                                if(mysqli_num_rows($query_run) > 0){
                                foreach($query_run as $item){ ?>
                            <div class="col-md-3 " >
                                <a href="products.php?id=<?= $item['chatroomid'];?>" class="text-decoration-none text-black">
                                <div class="card shadow " style="width:300px;margin:0px 0 0 0;">
                                    <div class="card-body">

                                        
                                 <div class="" style="margin:20px 0;">
                                 <h4 class="text-center fw-bold " style="font-family:Clarendon Blk BT;font-size:1.2em;"><?= $item['chat_name'];?></h4>
                                 <hr>
                                        <p class="text-center" style="font-size:0.9em;font-weight:600;opacity:0.6;">Code: <?= $item['chat_password'];?></p>
                                </a>
               
                                 </div>   
                                 <div class="action d-flex justify-content-end p-2 mt-5" >
                                  
                                <i class="fa-solid fa-trash " style="color:#24385c;margin-right:15px;cursor:pointer;" aria-hidden="true" onclick="on(),deleteConfirm()"></i>
                                <i class="fa fa-sign-out "  style="color:#24385c;cursor:pointer;" aria-hidden="true" onclick="on(),leaveConfirm()"></i>

                                 </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                                <?php   }
                                }else{
                                echo "No data available";
                                }
                            ?>
                        </div>
                
        </div>
        </div>
        </div>
    </div>

    
<?php include_once "includes/footer.php";?>