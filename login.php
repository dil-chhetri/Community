<?php include_once "includes/headers.php" ?>
<div class="login position-absolute z-3 border border-secondary top-50 start-50 translate-middle p-4 bg-white text-dark col-md-4">
    <form action="functions/authenticate.php" method="post">
      <h5 class="p-2 text-center text-secondary">Login</h5>
      <hr>
      <div  class="mt-2 p-2">
        <input type="text" name="username" placeholder="username" class="form-control ">

      </div>

      <div class="mt-2 p-2">
        <input type="password" name="password" placeholder=" password" id="myPassword" style="display: block;" class="form-control ">
      </div>
      <div class="d-flex justify-content-end mt-1">
      <input type="checkbox" name="" id="" onclick="showPassword()"> <small class="text-secondary">show password</small> 
      </div>


      <input type="submit" name="login" value="Login" class="btn btn-dark col-md-12 mt-5 p-2">

    </form>

    <div style="height: 5px;"></div>
    <div style="color: rgba(255,148,148); font-size: 1em;">
   
    </div>
    <div style="height: 5px;"></div>
  </div>
  <?php include_once "includes/footer.php"; ?>