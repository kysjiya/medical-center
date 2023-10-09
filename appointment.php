<?php require 'main/nav.php' ?>
<?php   include("main/connect.php");
 ?>

<?php

	if(isset($_POST['appointment'])){

	if(isset($_SESSION['userName'])){

		$name = $_POST['name'];
		$date_of_birth = $_POST['date_of_birth'];
		$gender = $_POST['gender'];
    $phone = $_POST['phone'];
		$street_address = $_POST['street_address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$postal_code = $_POST['postal_code'];
    $vaccine = $_POST['vaccine'];
		$prefered_appointment = $_POST['prefered_appointment'];
		$userId = $_SESSION['userId'];


		$appointment_query = "INSERT INTO `appointment`(`user_id`, `name`, `date_of_birth`, `gender`, `phone_number`, `street_address`, `city`, `state`, `postal_code`, `vaccine`, `preferred_appointment`) VALUES (:userId,:name,:date_of_birth,:gender,:phone,:street_address,:city,:state,:postal_code,:vaccine,:prefered_appointment)";

		$appointment_prepare = $connection->prepare($appointment_query);
		$appointment_prepare->bindParam(':name',$name);
		$appointment_prepare->bindParam(':date_of_birth',$date_of_birth);
		$appointment_prepare->bindParam(':gender',$gender);
		$appointment_prepare->bindParam(':phone',$phone);
		$appointment_prepare->bindParam(':street_address',$street_address);
		$appointment_prepare->bindParam(':city',$city);
		$appointment_prepare->bindParam(':state',$state);
		$appointment_prepare->bindParam(':postal_code',$postal_code);
		$appointment_prepare->bindParam(':vaccine',$vaccine);
		$appointment_prepare->bindParam(':prefered_appointment',$prefered_appointment);
		$appointment_prepare->bindParam(':userId',$userId);
		$appointment_prepare->execute();
	}
	else
	{
		echo "<script>alert('Kindly Login to book an Appointment')</script>";
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
                        <h2>Appointment</h2>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    
           <!--? appointment form Start -->

           
     <div class="contact-form-main">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-7 col-lg-7">
                    <div class="form-wrapper">
                        <!--Section Tittle  -->
                        <div class="form-tittle">
                            <div class="row ">
                                <div class="col-xl-12">
                                    <div class="section-tittle section-tittle2">
                                        <span>It's Quick and Easy</span>
                                        <h2>Appointment Form</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Section Tittle  -->
                        <div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <label class="formbold-form-label formbold-form-label-2">
      Child's Information
        </label>
      <div class="formbold-mb-5">
        <label for="name" class="formbold-form-label">Child's Full Name </label>
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Full Name"
          class="formbold-form-input"
        />
      </div>
      <div class="flex flex-wrap formbold--mx-3">
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5 w-full">
            <label for="date" class="formbold-form-label">Child's Date of Birth</label>
            <input
              type="date"
              name="birth_date"
              id="date"
              class="formbold-form-input"
            />
          </div>
        </div>
        <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
            <label for="date" class="formbold-form-label">Gender</label>
            <div class="radio-css">
        <div class="form-check form-check-inline">
           <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="female">
         <label class="form-check-label formbold-form-label" for="inlineRadio1">Female</label>
       </div>
       <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="male">
       <label class="form-check-label formbold-form-label" for="inlineRadio2">Male</label>
       </div>
      </div>
          </div>
      </div>

      <div class="formbold-mb-5">
        <label for="phone" class="formbold-form-label"> Phone Number </label>
        <input
          type="text"
          name="phone"
          id="phone"
          placeholder="Enter your phone number"
          class="formbold-form-input"
        />
      </div>
      <div class="formbold-mb-5 formbold-pt-3">
        <label class="formbold-form-label formbold-form-label-2">
          Address Details
        </label>
        <div class="formbold-mb-5">
        <label for="email" class="formbold-form-label">Street Address </label>
        <input
          type="text"
          name="street_address"
          id="street_address"
          placeholder="Enter your Street Address"
          class="formbold-form-input"
        />
      </div>
        <div class="flex flex-wrap formbold--mx-3">
          
          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <input
                type="text"
                name="city"
                id="city"
                placeholder="Enter city"
                class="formbold-form-input"
              />
            </div>
          </div>
          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <input
                type="text"
                name="state"
                id="state"
                placeholder="Enter state"
                class="formbold-form-input"
              />
            </div>
          </div>
          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <input
                type="text"
                name="postal_code"
                id="post-code"
                placeholder="Post Code"
                class="formbold-form-input"
              />             
            </div>
          </div>
        </div>
      </div>
      </div>

      <div class="formbold-mb-5">
      <label class="formbold-form-label formbold-form-label-2">Which Vaccine do you want to make an appointment for?
</label>
      <select class="form-select formbold-form-label form-select-lg mb-3" aria-label=".form-select-lg example">
  <option name="vaccine" selected>Please select Vaccine
</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
      </div>

      <label class="formbold-form-label formbold-form-label-2">
      Prefered Appointment Date
        </label>
      <div class="flex flex-wrap formbold--mx-3">
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5 w-full">
            <label for="date" class="formbold-form-label"> Date </label>
            <input
              type="date"
              name="date"
              id="date"
              class="formbold-form-input"
            />
          </div>
        </div>
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5">
            <label for="time" class="formbold-form-label"> Time </label>
            <input
              type="time"
              name="time"
              id="time"
              class="formbold-form-input"
            />
          </div>
        </div>
      </div>

      

      <div>
        <button name="appointment" class="btn header-btn">Book an Appointment</button>
      </div>
    </form>
  </div>
</div>

                    </div>
                </div>
            </div>
        </div>
        <!-- appointment left Img-->
        <div class="from-left d-none d-lg-block">
            <img src="assets/img/gallery/appointment1.png" alt="">
        </div>
        
    </div>
    <!-- appointment form End -->
        </div>

    </main>
    <?php require 'main/footer.php' ?>