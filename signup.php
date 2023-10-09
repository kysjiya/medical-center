<?php require 'main/nav.php' ?>

<?php
  include("main/connect.php");
?>

<?php

if(isset($_SESSION['userName']))
{
	header('location:index.php');
}
else
{

	if(isset($_POST['submit']))
	{

		$user_name = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$hash_password = password_hash($password,PASSWORD_BCRYPT);

		$user_register_query = "INSERT INTO `signup`(`user_name`, `user_email`, `password`) VALUES (:username, :email, :password)";

		$user_register_prepare = $connection->prepare($user_register_query);

		$user_register_prepare->bindParam(':username',$user_name);
		$user_register_prepare->bindParam(':email',$email);
		$user_register_prepare->bindParam(':password',$hash_password);

		$user_register_prepare->execute();


	}

}
?>

   <main>
      <!--? Hero Start -->
      <div class="slider-area2">
         <div class="slider-height2 d-flex align-items-center">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                           <div class="hero-cap hero-cap2 text-center">
                              <h2>Signup</h2>
                           </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      <!-- Hero End -->


   <!-- signup form -->
      <section class="contact-form-main">
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="signupform p-3 p-md-5">
         <div class="form-tittle">
                            <div class="row ">
                                <div class="col-xl-12">
                                    <div class="section-tittle section-tittle2">
                                        <span>It's Quick and Easy</span>
                                        <h2>Signup Now</h2>
                                    </div>
                                </div>
                            </div>
                       <div class=" row  m-5">
                          <div class="col-md-6 align-items-start input-group-lg">
                            <div class="formbold-mb-5 ">
                                 <label for="Username" class="form-label formbold-form-label">Username</label>
                                 <input type="text" class="formbold-form-input form-control" name="username" placeholder="Your Username">
                            </div>
                            <div class="formbold-mb-5">
                               <label for="exampleInputEmail1" class="form-label formbold-form-label">Email address</label>
                               <input type="email" class="formbold-form-input form-control" name="email" placeholder="Your Email address" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="formbold-mb-5">
                               <label for="exampleInputPassword1" class="form-label formbold-form-label">Password</label>
                               <input type="password" name="password" class="formbold-form-input form-control" placeholder="Your Password" id="exampleInputPassword1">
                            </div>
                            <button name="submit" type="submit" class="btn header-btn">Submit</button> 
                         
                          </div> 
                </div>
         </div>
   </form> 
   <!-- right image -->
<div class="from-leftt d-none d-lg-block" align="right" >
<img src="assets/img/gallery/Untitled design (2).svg" align="right" alt="">
</div>
    </section> 

   </main>
   <?php require 'main/footer.php' ?>