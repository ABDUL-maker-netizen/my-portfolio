<?php
require "contactconnect.php";
if (isset($_POST['submit'])){
    $fullname = stripslashes($_POST['fullname']);
    $fullname = mysqli_real_escape_string($connect,$fullname);
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($connect,$email);
   
    $subject = isset($_POST['subject']) ? stripslashes($_POST['subject']) : ''; // FIX IS HERE
    $subject = mysqli_real_escape_string($connect, $subject);

    

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
          $query = "INSERT INTO informationtwo(fullname, email, subject) VALUES('$fullname', '$email', '$subject')";
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



<div class="shop shadow-lg">
        <section class="indexone">
          <p>
            HELLO, MY NAME IS <br />
            <span> _____</span>
          </p>
          <div class="divs">
            <h1 class="divs-h1">ABDUL AZEEZ <br> <span class="divs-h5 mt-5">WEB DEVELOPER</span></h1>
           
            <p class="mt-5">
              Turning ideas into interactive web realities, one line of code at
              a time.
            </p>
          </div>

          <div class="one">
            <div>
              <img
                src="bootstrap-icons-1.11.3/envelope.svg"
                class="bg-primary p-2"
                alt="Email icon"
              />
              <span><a href="mailto:abdulrazakabdullaziz9@gmail.com">abdulrazakabdullaziz9@gmail.com</a></span>
            </div>

            <div class="mt-5">
              <img
                src="bootstrap-icons-1.11.3/phone.svg"
                class="bg-primary p-2"
                alt="Phone icon"
              />
              <span><a href="tel:+2347036998066">07036998066</a></span>
            </div>
          </div>

          <div class="popularity d-flex gap-5 align-items-center">
            <div>
              <h3 class="divs-h1">10+</h3>
              <p>Projects</p>
            </div>

            <div>
              <h3 class="divs-h1">1+</h3>
              <p>Years Experiences</p>
            </div>
          </div>
        </section>

        <section class="call">
          <div class="blue">
            <div class="imgone">
              <img src="img/IMG-20250525-WA0003.jpg" alt="Profile photo of Abdulrazak Abdulazeez" />
            </div>
          </div>
        </section>
      </div>
      <div
        class="main-div shadow-lg d-flex flex-column justify-content-center align-items-center"
      >
        <section
          class="d-flex flex-column flex-md-row align-items-center gap-5"
        >
          <div class="imgthree w-100 w-md-50">
            <img src="img/IMG-20250525-WA0002.jpg" alt="Abdulrazak Abdulazeez profile photo working on a project" class="img-fluid" />
          </div>
          <div class="w-100 w-md-50">
            <h2 class="A text-primary mt-5 mt-md-0">About me</h2>
            <h3>
              I'm a enthusiastic junior web developer based in Nigeria,
              passionate about building user-friendly websites and improving my
              skills in web
            </h3>
          </div>
        </section>

        <section
          class="about d-flex flex-column flex-md-row justify-content-between align-items-center gap-5"
        >
          <h3 class="B p-md-5 p-0 w-100 w-md-50">
            I create simple and attractive websites, focusing on learning and
            improving everyday
          </h3>
          <p class="w-100 w-md-50 mt-5 mt-md-0">
            As a junior web developer, I've gained hands-on experience by
            building small but functional websites that are already live. these
            project helped me understand how to meet client needs using modern
            tools like HTML, CSS,Javascript, and responsive design practices
            <br />
            <br />
            I've worked on projects from different industries, which has given
            me flexible approach to problem-solving and design. I always aim to
            suggest the best ideas and options, and I believe in working closely
            with clients to find the right solution-without pushing you in a
            single direction. With me, collaboration comes first.
          </p>
        </section>
        <section class="about d-flex flex-row align-items-center flex-wrap dob">
          <div>
            <p>Date Of Birth</p>
            <p class="fw-bold">11 May 2002</p>
          </div>
          <div>
            <p>Contact</p>
             <p class="fw-bold"><a href="tel:+2347036998066">07036998066</a></p>
          </div>
          <div>
            <p>Email</p>
             <p class="fw-bold"><a href="mailto:abdulrazakabdullaziz9@gmail.com">abdulrazakabdullaziz9@gmail.com</a></p>
          </div>

          <div>
            <p>Spoken Languages</p>
            <p class="fw-bold">English</p>
          </div>
          <div>
            <p>Interest</p>
            <p class="fw-bold">Music,coding</p>
          </div>
          <div>
            <p>Social Media</p>
            <p class="fw-bold">
              <a href="https://www.facebook.com/abdulrazak.abdulazeez.7731"
                ><img src="bootstrap-icons-1.11.3/facebook.svg" alt="Facebook"
              /></a>
              <a
                class="ms-2"
                href="https://wa.me/2347036998066"
                ><img src="bootstrap-icons-1.11.3/whatsapp.svg" alt="Whatsapp"
              /></a>
              <a
                class="ms-2"
                href="https://x.com/Abdulra88912779"
                ><img src="bootstrap-icons-1.11.3/twitter-x.svg" alt="X(Twitter)"
              /></a>
              <a
                class="ms-2"
                href="https://linkedin.com/in/abdulrazak-abdulazeez-ba5984248/"
                ><img src="bootstrap-icons-1.11.3/linkedin.svg" alt="Linkedin"
              /></a>
            </p>
          </div>
        </section>
      </div>
      <div class="main-div shadow-lg">
        <section
          class="d-flex flex-column flex-md-row align-items-center gap-5"
        >
          <div class="imgthree w-100 w-md-50">
            <img src="img/IMG-20250515-WA0001.jpg" alt="Portfolio project showcase" class="img-fluid" />
          </div>
          <div class="w-100 w-md-50 mt-5 mt-md-0">
            <h2>What I do</h2>
            <p>
              From understanding your requirements, designing a blueprint and
              delivering <br />
              the final product, I do everything that falls in between these
              lines.
            </p>
          </div>
        </section>

        <section class="three-pp">
          <div class="card shadow-lg p-3">
            <img
              class="card-img-top"
              src="img/IMG-20250526-WA0001.jpg"
              alt="Web design and development project"
            />
            <div class="card-body">
              <h3 class="card-title">Web Design and development</h3>

              <p>
                I design and build clean, responsive websites using HTML, CSS,
                and Javascript. I focus on creating user-friendly layouts that
                look good on all devices
              </p>
            </div>
          </div>
          <div class="card shadow-lg p-3">
            <img
              class="card-img-top"
              src="img/IMG-20250526-WA0002.jpg"
              alt="Frontend development project"
            />
            <div class="card-body">
              <h3 class="card-title">Frontend Development</h3>

              <p>
                I bring designs to life with interactive and functional frontend
                features, using tools like bootstrap, basic Javascript, and
                beginner -level frameworks
              </p>
            </div>
          </div>
          <div class="card shadow-lg p-3">
            <img
              class="card-img-top"
              src="img/IMG-20250526-WA0003.jpg"
              alt="Website maintenance project"
            />
            <div class="card-body">
              <h3 class="card-title">Website Maintenance</h3>

              <p>
                I help keep websites updated, fix bugs, and make small
                improvements to ensure smooth performance.
              </p>
            </div>
          </div>
          <div class="card shadow-lg p-3">
            <img
              class="card-img-top"
              src="img/IMG-20250526-WA0004.jpg"
              alt="Continuous learning project"
            />
            <div class="card-body">
              <h3 class="card-title">Learning and Growing</h3>
              <p>
                As a junior developer, i'm always learning new technologies and
                trends to improve my skills and deliver better results.
              </p>
            </div>
          </div>
        </section>
      </div>
    </div>

    <div class="five bg-light w-100">
      <div class="main-div shadow-lg">
        <section
          class="d-flex flex-column align-items-center flex-md-row gap-5"
        >
          <div class="imgthree w-100 w-md-50">
            <img src="img/IMG-20250526-WA0015.jpg" alt="Education and skills section illustration" class="img-fluid" />
          </div>
          <div class="w-100 w-md-50 mt-5 mt-md-0">
            <h2 class="educa fw-bold">Education, skills &amp Experience</h2>
            <p>
              A snapshot of my education, skills and experience that drive my
              passion for innovative solution
            </p>
          </div>
        </section>
        <div class="about">
          <h3 class="text-center">Education</h3>
          <div class="d-flex flex-column flex-md-row gap-5 mt-5">
            <section class="mortar p-2">
              <img src="bootstrap-icons-1.11.3/mortarboard-fill.svg" alt="Graduation cap icon" />
              <p class="fw-bold">
                <span class="me-5 text-primary">2019-2025</span>B.Tech Computer
                Science
              </p>
              <p>
                Abubakar Tafawa Balewa University (ATBU) is a federal university
                of technology located in Bauchi, Nigeria, known for its focus on
                science, engineering, and technology education.
              </p>
              <p class="text-end fw-bold">ATBU, Bauchi State, Nigeria</p>
            </section>
            <section class="p-2">
              <img src="bootstrap-icons-1.11.3/mortarboard-fill.svg" alt="Graduation cap icon" />
              <p class="fw-bold">
                <span class="me-5 text-primary">2012-2019</span>High/Higher
                Secondary School
              </p>
              <p>
                Al-Hikma International Academy in Mararaba, Nasarawa State, is a
                school that offers both Western and Islamic education, from
                nursery through secondary levels.
              </p>
              <p class="text-end fw-bold">Al-Hikma,Nasarawa State, Nigeria</p>
            </section>
          </div>
        </div>

        <div
          class="about d-flex flex-column flex-md-row justify-content-center align-items-center"
        >
          <div class="w-100 w-md-50">
            <h3>Skills</h3>
            <div class="three-p" aria-label="Skills and proficiency">
              <p>HTML</p>
              <div class="progress" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" aria-label="HTML skill level 99 percent">
                <div class="progress-bar" style="width: 99%">99%</div>
              </div>
              <p>CSS</p>
              <div class="progress" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" aria-label="CSS skill level 95 percent">
                <div class="progress-bar" style="width: 95%">95%</div>
              </div>
              <p>Javascript</p>
              <div class="progress" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" aria-label="JavaScript skill level 85 percent">
                <div class="progress-bar" style="width: 85%">85%</div>
              </div>
              <p>PHP</p>
              <div class="progress" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" aria-label="PHP skill level 85 percent">
                <div class="progress-bar" style="width: 85%">85%</div>
              </div>
              <p>SQL</p>
              <div class="progress" aria-valuenow="95     " aria-valuemin="0" aria-valuemax="100" aria-label="SQL skill level 95 percent">
                <div class="progress-bar" style="width: 99%" >99%</div>
              </div>
            </div>
          </div>
          <div class="about text-center w-100 w-md-50">
            <h2 class="experience">My Experience</h2>
            <div class="three-p experience">
              <p>Built portfolio websites</p>
              <p>created a business websites</p>
            </div>
          </div>
        </div>
      </div>

      <div class="main-div">
        <h2>Portfolio</h2>
        <section
          class="d-flex flex-column flex-md-row gap-5 justify-content-center"
        >
          <div class="port-div">
            <p>Business Website</p>
            <div class="w-100 w-md-50 portimg">
              <img src="img/ddt_1.png" alt="" class="img-fluid" />
              <a
                class="btn btn-primary mt-4"
                href="https://thedonautocarpartandrepairs.unaux.com/"
                >click to access websites</a
              >
            </div>
          </div>
          <div class="port-div">
            <p>Portfolio Website</p>
            <div class="w-100 w-md-50 portimg">
              <img src="img/teeboy.png" alt="Portfolio website screenshot created by Abdulrazak Abdulazeez" class="img-fluid" />
              <a
                class="btn btn-primary mt-4"
                href="https://thedonautocarpartandrepairs.unaux.com/"
                title="Business Website by Abdulrazak Abdulazeez">click to access websites</a
              >
            </div>
          </div>
        </section>
        <div class="mt-5">
          <p>Designs</p>
          <section
            class="designs d-flex flex-column flex-md-row gap-5 justify-content-center"
          >
            <div class="w-100 w-md-50">
              <img src="img/Untitled (4).png" alt="" class="img-fluid" />
            </div>
            <div class="w-100 w-md-50">
              <img src="img/Frame 1.png" alt="" class="img-fluid" />
            </div>
            <div class="w-100 w-md-50">
              <img src="img/Untitled (5).png" alt="" class="img-fluid" />
            </div>
          </section>
        </div>
      </div>
      <div class="main-div shadow-lg">
        <h2 class="mb-5 text-center">Contact Info</h2>
        <p class = "mb-5 text-center"> <i
                >Have a project in mind, a question to ask, or just want to
                connect? I'd love to hear from you.</i></p>
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
             <li><b>Email:</b> <a href="mailto:abdulrazakabullaziz9@gmail.com">abdulrazakabullaziz9@gmail.com</a></li>
              <li><b>Phone:</b> <a href="tel:+2347036998066">07036998066</a></li>
              <li><b>Location:</b> Nasarawa, Nigeria</li>
              <li>
                <b>facebook:</b>
                <a href="https://www.facebook.com/abdulrazak.abdulazeez.7731"
                  >Abdulrazak Abdulazeez</a
                >
              </li>
              <li>
                <b>X(Twitter):</b>
                <a href="https://x.com/Abdulra88912779"
                  >Abdulrazak Abdulazeez</a
                >
              </li>
              <li>
                <b>Linkedin:</b>
                <a href="https://linkedin.com/in/abdulrazak-abdulazeez-ba5984248/"
                  >Abdulrazak Abdulazeez</a
                >
              </li>
              <li>
                <b>Github:</b>
                <a href="https://github.com/ABDUL-maker-netizen"
                  >Abdulrazak Abdulazeez</a
                >
              </li>
            </ul>
          </section>
        </div>
      </div>