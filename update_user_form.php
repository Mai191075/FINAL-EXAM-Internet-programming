<?php

if(isset($_GET['id'])){

    $id = $_GET['id'];

    require 'config.php';

    $query = "SELECT * FROM user WHERE id=$id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
?>


      <form method="POST" action="update_user_info.php?id=<?php echo $row[0]?>">  

            <div class="form-outline mb-4">
            <input type="text" id="form3Example1cg" name="user_name" value="<?php echo $row[1]?>" class="form-control form-control-lg"  required />
            <label class="form-label" for="form3Example1cg">Your Name</label>
            </div>

            <div class="form-outline mb-4">
            <input type="email" id="form3Example3cg" name="email" value="<?php echo $row[2]?>" class="form-control form-control-lg" required/>
            
            <label class="form-label" for="form3Example3cg">Your Email</label>
            </div>

            <div class="form-outline mb-4">
            <input type="password" name="password"  id="form3Example4cg" placeholder="New Password" class="form-control form-control-lg" required />
            <label class="form-label" for="form3Example4cg">Password</label>
            </div>


            <div class="form-check d-flex justify-content-center mb-5">
            <input class="form-check-input me-2" type="checkbox"value="" id="form2Example3cg" required/>
            <label class="form-check-label" for="form2Example3g">
                I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
            </label>
            </div>

            <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
            </div>

            <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="signin.php" class="fw-bold text-body"><u>Login here</u></a></p>

            </form>
</body>
</html>