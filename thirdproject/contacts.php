<?php
require "contactconnect.php";
if (isset($_POST['submit'])){
    $fullname = stripslashes($_POST['fullname']);
    $fullname = mysqli_real_escape_string($connect,$fullname);
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($connect,$email);
    $phone = stripslashes($_POST['phone']);
    $phone = mysqli_real_escape_string($connect,$phone);
    $address = stripslashes($_POST['address']);
    $address = mysqli_real_escape_string($connect,$address);
    $subject = isset($_POST['subject']) ? stripslashes($_POST['subject']) : ''; // FIX IS HERE
    $subject = mysqli_real_escape_string($connect, $subject);

    $messages = stripslashes( $_POST['messages']);
    $messages = mysqli_real_escape_string($connect,$messages);

    $errorMessages = "fill in all fields !";

     //error handlers
     $errors = false;

     if (empty($fullname) || empty($email) || empty($subject)){
      echo '<div class="alert alert-danger alert-dismissible fade show">';
      echo '  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
      echo '  <strong>Error!</strong> ' . htmlspecialchars($errorMessages); // Use htmlspecialchars for security
      echo '</div>';
            $errors = true;
     };
    
     if (!$errors){
          $query = "INSERT INTO informationtwo(fullname, email, phone, address, subject, messages) VALUES('$fullname', '$email', '$phone', '$address', '$subject', '$messages')";
    $result = mysqli_query($connect, $query);
    if($result){
        echo "<script>alert('Thanks for contacting us we will get back to u shortly')</script>";

    }
    else{
        echo "<script>alert('connection failed..try later')</script>";
    }

     }


    
}
?>

<div class="shop ibeji shadow-lg">
        <section class="indexone about-contents">
          <div class="divs">
            <h1 class="divs-h1 py-3">CONTACT</h1>

            <p>
              <i
                >Have a project in mind, a question to ask, or just want to
                connect? I'd love to hear from you.</i
              ><br />
              <br />
              As a junior full-stack developer , I'm always open to new
              opportunities, collaborations, and conversations. Feel free to
              reach out using the form below-I'll get back to you as soon as i
              can.
            </p>
          </div>
        </section>

        <section class="call calltwo">
          <div class="blue bluetwo">
            <div class="imgone">
              <img src="img/IMG-20250525-WA0003.jpg" alt="" />
            </div>
          </div>
        </section>
      </div>

      <div class="main-div">
        <h1 class="mb-5 text-center">Contact Info</h1>
        <div
          class="d-flex flex-column flex-md-row justify-content-center contact-page"
        >
          <div class="w-100 w-md-75">
            <div class="form p-5 rounded border border-dark">
              <form action="" method="POST" class="offset-2 offset-md-0">
                <div class="form-group mt-3">
                  <label for="fullname">Fullname</label><br />
                  <input
                    type="text"
                    name="fullname"
                    id="fullname"
                    placeholder="Enter your Fullname"
                    class="form-control"
                    required
                    autocomplete="name"
                  />
                </div>

                <div class="form-group mt-3">
                  <label for="email">Email</label><br />
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Enter your Email"
                    class="form-control"
                    required
                    autocomplete="email"
                  />
                </div>

                <div class="form-group mt-3">
                  <label for="phone">Phone number</label><br />
                  <input
                    type="text"
                    name="phone"
                    id="phone"
                    placeholder="Enter your Phone number"
                    class="form-control"
                    autocomplete="tel"
                  />
                </div>

                <div class="form-group mt-3">
                  <label for="address">Address</label><br />
                  <input
                    type="text"
                    name="address"
                    id="address"
                    placeholder="Enter your Address"
                    class="form-control"
                    autocomplete="address-line1"
                  />
                </div>

                <div class="form-group mt-3">
                  <label for="subject">Website Type</label><br />
                  
                  <select name="subject" id="subject" class="form-control">
                  <option value="" disabled selected >Select an option</option>
                      <option value="Static Website">Static Website</option>
                      <option value="Dynamic Website">Dynamic Website</option>
                      <option value="E-commerce Website">E-commerce Website</option>
                      <option value="Blog or Personal Website">Blog or Personal Website</option>
                      <option value="Portfolio Website">Portfolio Website</option>
                      <option value="Business or coorporate Website">Business or coorporate Website</option>
                      <option value="Educational Website">Educational Website</option>
                      <option value="Social media or community Website">Social media or community Website</option>
                      <option value="Entertainment Website">Entertainment Website</option>
                      <option value="News or Magazine Website">News or Magazine Website</option>
                      <option value="Web Application">Web Application</option>
                      <option value="Non-Profit or NGO Website">Non-Profit or NGO Website</option>
                      <option value="Forum or Discussion Website">Forum or Discussion Website</option>
                      <option value="Streaming Website">Streaming Website</option>
                    </select>

                  
                </div>

                <br />
                <div class="form-group">
                  <label for="messages">Submit a Website complaint</label><br />
                  <textarea
                    name="messages"
                    id="messages"
                    class="form-control"
                    autocomplete="off"
                  ></textarea>
                </div>
                <input
                  class="bg-success fw-bold text-light mt-5 px-5 py-3"
                  type="submit"
                  name="submit"
                  value="SUBMIT"
                />
              </form>
            </div>
          </div>

          <section
            class="me-5 w-100 w-md-50 d-flex flex-column align-items-center"
          >
            <ul>
              <li><b>Name:</b> Abdulrazak Abdulazeez</li>
              <li><b>Email:</b> abdulrazakabullaziz9@gmail.com</li>
              <li><b>Phone:</b> 07036998066</li>
              <li><b>Location:</b> Nasarawa, Nigeria</li>
              <li>
                <b>facebook:</b>
                <a href="https://www.facebook.com/abdulrazak.abdulazeez.7731"
                  >Abdulrazak Abdulazeez</a
                >
              </li>
            </ul>
          </section>
        </div>
      </div>