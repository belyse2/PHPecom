<?php 
session_start();
include('includes/header.php')?>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php if(isset($_SESSION['message']))
                {
                    ?>
                          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong>Hey! </strong><?= $_SESSION['message']?>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                     <?php
                     unset($_SESSION['message']);
                }
                    ?>
                <div class="card">
                    <div class="card-header">
                    <h2>Register form</h2>
                    </div>
                    <div class="card-body">
                    <form action = "functions/auth.php" method="POST">
                         <div class="mb-3">
                              <label class="form-label">Names</label>
                              <input type="text" name = "name" class="form-control" placeholder="Enter your name">
                         </div>
                         <div class="mb-3">
                              <label class="form-label">Phone</label>
                              <input type="number" name = "phone" class="form-control"placeholder="Enter your Phone Number">
                         </div>
                         <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email Address">
                         </div>
                         <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" name = "password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password">
                         </div>
                         <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">confirm Password</label>
                              <input type="password" name = "confpassword" class="form-control" id="exampleInputPassword1" placeholder="confirm your Password">
                         </div>
                              <button type="submit"name = "register-btn" class="btn btn-primary">Submit</button>
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php')?>