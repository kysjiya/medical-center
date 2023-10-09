<?php require 'main/nav.php' ?>

<?php   include("main/connect.php"); ?>

<main>
      <!--? Hero Start -->
      <div class="slider-area2">
         <div class="slider-height2 d-flex align-items-center">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                           <div class="hero-cap hero-cap2 text-center">
                              <h2>Log In</h2>
                           </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      <!-- Hero End -->


   <!-- login form -->
   <section class="contact-form-main">
    <div class="containerr">
        <div class="content">
            <h2 class="logo"><img src="assets/img/logo/logo.png" alt=""></h2>
            <div class="text-sci">
                <h2>Welcome <br> <span> to Our Website</span></h2>
              <p>Efficient, intuitive, and secure solution to help manage, administer and outreach patients at scale.Simplify patient experience and automate workflow with a global health IT leader.</p>
           </div>
        </div>
        <div class="logreg-box">
            <div class="form-box login">
                <form action="login.php">
                    <h2>Log In</h2>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" name="email" id="">
                        <label>Email Address</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="password" id="">
                        <label>Password</label>
                    </div>
                    <button type="submit" class="boxed-btn">Log In</button>
                    <div class="login-register">
                        <p>Don't have an account?<a href="" class="register-link">Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

   </main>












<?php require 'main/footer.php' ?>