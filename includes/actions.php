<div class="createform position-absolute z-3 border border-dark top-50 start-50 translate-middle p-3 bg-white text-dark col-md-4 " id="createForm" style="z-index: 2;display:none">
    <form action="functions/actionsCode.php" method="post">
            <h5 class="text-secondary text-center  p-2">Create</h5>
            <hr>
            <input type="text" name="groupname" class="mt-4 form-control p-2" placeholder="Enter group name" required>
    
            <input type="submit" value="Create" class="btn btn-dark col-md-12 mt-4 p-2 text-secondary mb-3" name="create-btn">
    </form>
</div>

<div class="joinform position-absolute z-3 border border-secondary top-50 start-50 translate-middle p-3 bg-white text-dark col-md-4" id="joinForm"  style="z-index: 2;display:none;">
        <form action="functions/actionsCode.php" method="post">
            <h5 class="text-secondary text-center  p-2">Join</h5>
            <hr>
            <input type="text" name="joincode" class="mt-4 form-control p-2" placeholder="Enter group code" required>
            <input type="submit" value="Join" class="btn btn-dark col-md-12 mt-4 p-2 text-secondary mb-3" name="join-btn">
        </form>
</div>