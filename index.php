<?php include_once "includes/headers.php";


include('config/dbcon.php');
// include('includes/cartmodule.php');
?>
  <?php if(isset($_SESSION['message'])): ?>
                    <div class="alert alert-warning alert-dismissible fade show position-absolute" role="alert" style="width: 100%;">
                    <strong>Hey!</strong> <?= $_SESSION['message']; ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php 
                unset($_SESSION['message']);
                endif; ?>

       
    <div class="py-5">
        <div class="container">
    
        <div class="row justify-content-center">
        <div class="col-md-12">
                  
               
        
                        <div class="row" style=" display: grid;column-gap:30px;grid-template-columns:30% 30% 30%; padding:0 0 0 50px; width: auto;row-gap:40px;">
                                 <?php
                                $query = "SELECT * FROM community_chatgroup";
                                $query_run = mysqli_query($con,$query);
                                if(mysqli_num_rows($query_run) > 0){
                                foreach($query_run as $item){ ?>
                            <div class="col-md-3 mb-2">
                                <a href="products.php?id=<?= $item['chatroomid'];?>" class="text-decoration-none text-black">
                                <div class="card shadow" style="width: 300px;margin:0px 0 0 0;">
                                    <div class="card-body">

                                        
                                 <div class="" style="margin:20px 0;">
                                 <h4 class="text-center fw-bold " style="font-family:Clarendon Blk BT;font-size:1.2em;"><?= $item['chat_name'];?></h4>
                                 <hr>
                                        <p class="text-center" style="font-size:0.9em;font-weight:600;opacity:0.6;">Code: <?= $item['chat_password'];?></p>
                                </a>
               
                                 </div>   
                                 <div class="action" style="margin-left:220px;">
                                <button onclick="on(),deleteConfirm()"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                <button onclick="on(),leaveConfirm()" ><i class="fa fa-sign-out" aria-hidden="true"></i></button>

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