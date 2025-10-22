
<?php
require "contactconnect.php";

require_once('csrf.php');
$csrf_token = generate_csrf_token();


$f_value = $e_value = $p_value= $a_value= $s_value= $m_value="";

$error_display="";

if (isset($_POST['submit'])){

   if (isset($_POST['csrf_token'])) {
        if (!verify_csrf_token($_POST['csrf_token'])) {
            die('CSRF Validation Failed');
        }
    }

    $fullname = $_POST['fullname'] ??"";
    $email = $_POST['email'] ??"";
    $phone = $_POST['phone'] ??"";
    $address = $_POST['address'] ??"";
    $subject = $_POST['subject'] ??"";
    $messages = $_POST['messages'] ??"";
 
     $f_value = $fullname;
    $e_value = $email;
    $p_value = $phone;
    $a_value = $address;
    $s_value = $subject;
    $m_value = $messages;

    $is_valid = true;
    $error_msg = "";

     if (empty(trim($fullname))){
          $error_msg = "Your full name is empty<br>";
     }elseif (!preg_match('/^[a-zA-Z\s]+$/', trim($fullname))) {
        $error_msg = "Fullname must contain only letters and spaces.";
    }elseif(empty(trim($email))){
       $error_msg = "Your email is invalid or empty.";
     }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_msg = "Invalid email format.";
    }else if(!preg_match("/^[a-zA-Z0-9._+]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", trim($email))){
    $error_msg = "Invalid email format.";
   }elseif (empty(trim($phone))) {
        $error_msg = "Your phone is empty.";
    } elseif (!preg_match('/^[0-9\s\-\+\(\)]{10,15}$/', trim($phone))) { // Allow formatted phone (10-15 chars with digits/spaces/-+())
        $error_msg = "Phone number must be 10-15 digits (with optional formatting).";
    }elseif(empty(trim($address))){
         $error_msg = "Your address is empty.";
    }elseif(strlen($address) < 6){
      $error_msg = "Address is too short.please enter a valid one.";
    }elseif (!preg_match("/^[a-zA-Z0-9\s,.-]+$/", trim($address))) {
      $error_msg = "Address contains invalid characters.";
    }elseif(empty(trim($subject))){
      $error_msg = "Subject cannot not be empty.";
    }elseif(empty(trim($messages))){
         $error_msg = "Message cannot be empty.";
    }elseif(strlen($messages) < 10){
      $error_msg = "Message is too short.please enter a valid one.";
    }
    if (!empty($error_msg)) {
        // store message instead of echoing
        $error_display = '
        <div class="alert alert-danger alert-dismissible fade show mt-2">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <strong>Error!</strong> ' . htmlspecialchars($error_msg) . '
        </div>';
        $is_valid = false;
    }

     if ($is_valid) {
        // All validations passed: Now sanitize raw data
        $f_value = trim(filter_var($fullname, FILTER_SANITIZE_FULL_SPECIAL_CHARS)); // Modern special chars filter
        $e_value = trim($email);
        $p_value = preg_replace('/\D/', '', $phone);
        $a_value = trim(filter_var($address, FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $s_value = trim(filter_var($subject, FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $m_value = trim(filter_var($messages, FILTER_SANITIZE_FULL_SPECIAL_CHARS));
       

        $f_value = mysqli_real_escape_string($connect, $f_value);
         $e_value = mysqli_real_escape_string($connect, $e_value);
         $p_value = mysqli_real_escape_string($connect, $p_value);
         $a_value = mysqli_real_escape_string($connect, $a_value);
         $s_value = mysqli_real_escape_string($connect, $s_value);
         $m_value = mysqli_real_escape_string($connect, $m_value);

           $query = "INSERT INTO informationtwo(fullname, email, phone, address, subject, messages) VALUES('$f_value', '$e_value', '$p_value', '$a_value', '$s_value', '$m_value')";
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

<!DOCTYPE html>
<html lang="en">

  <head>
 <title>Contact Abdul azeez – Full Stack Web Developer</title>
  <meta name="description" content="Get in touch with Abdul azeez for web development collaborations, freelance projects, or job opportunities. Contact details and inquiry form available.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Open Graph -->
  <meta property="og:title" content="Contact Abdul azeez – Full Stack Web Developer">
  <meta property="og:description" content="Reach out to Abdul azeez for project collaborations, freelance work, or job opportunities.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://abdulazeez.unaux.com/contact">
  <meta property="og:image" content="https://abdulazeez.unaux.com/img/contact-preview.png">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Contact Abdul azeez – Full Stack Web Developer">
  <meta name="twitter:description" content="Contact page for Abdul azeez. Let’s connect for web development opportunities.">
  <meta name="twitter:image" content="https://abdulazeez.unaux.com/img/contact-preview.png">

  <!-- Schema.org for Contact Page -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Contact – Abdul Azeez",
  "url": "https://abdulazeez.unaux.com/contact",
  "description": "Get in touch with Abdul Azeez, Full Stack Web Developer. Send a message or connect via social media.",
  "mainEntity": {
    "@type": "Person",
    "name": "Abdul Azeez",
    "jobTitle": "Full Stack Web Developer",
    "email": "mailto:abdulrazakabullaziz9@gmail.com",
    "url": "https://abdulazeez.unaux.com",
    "sameAs": [
      "https://github.com/ABDUL-maker-netizen",
      "https://linkedin.com/in/abdulrazak-abdulazeez-ba5984248/",
      "https://x.com/Abdulra88912779"
    ]
  }
}
</script>


<!-- Schema.org for Contact Page -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "ContactPage",
      "name": "Contact – Abdul Azeez",
      "url": "https://abdulazeez.unaux.com/contact",
      "description": "Get in touch with Abdul Azeez for freelance web development or project collaborations.",
      "mainEntity": {
        "@type": "Person",
        "name": "Abdul Azeez",
        "jobTitle": "Full Stack Web Developer",
        "email": "mailto:abdulrazakabullaziz9@gmail.com",
        "url": "https://abdulazeez.unaux.com",
        "sameAs": [
          "https://github.com/ABDUL-maker-netizen",
          "https://linkedin.com/in/abdulrazak-abdulazeez-ba5984248/",
          "https://x.com/Abdulra88912779"
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://abdulazeez.unaux.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Contact",
          "item": "https://abdulazeez.unaux.com/contact"
        }
      ]
    }
  ]
}
</script>

  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">

  <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/allgenes.css" />

</head>

<body>
    <div class="bg-light">
      
      <div>
        <?php
        echo $error_display;
      ?>
        <nav class="navbar navbar-expand-md">
          
          <div class="container-fluid az">
            <a class="navbar-brand" href="#"
              ><span class="text-primary spans">/AZ</span>
              <span class="text-primary spanss">ABDUL AZEEZ</span></a
            >

            <button
              class="navbar-toggler"
              data-bs-toggle="collapse"
              data-bs-target="#mainNavbar"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
              <ul class="navbar-nav d-flex justify-content-end w-100">
                <li class="nav-item">
                  <a href="index.php" class="nav-link">Home</a>
                </li>

                <li class="nav-item">
                  <a href="about.php" class="nav-link">About</a>
                </li>

                <li class="nav-item">
                  <a href="service.php" class="nav-link">Service</a>
                </li>

                <li class="nav-item">
                  <a href="portfolio.php" class="nav-link">Portfolio</a>
                </li>

                <li class="nav-item">
                  <a href="contact.php" class="nav-link">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>

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
              As a full-stack developer , I'm always open to new
              opportunities, collaborations, and conversations. Feel free to
              reach out using the form below-I'll get back to you as soon as i
              can.
            </p>
          </div>
        </section>

        <section class="call calltwo">
          <div class="blue bluetwo">
            <div class="imgone">
              <img src="img/IMG-20250525-WA0003.jpg" alt="Abdulrazak Abdulazeez contact photo showcasing the contact" />
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
                  <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
                </div>
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
                    aria-required="true"
                    aria-label="Full name"
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
                   aria-required="true"
                  aria-label="Email address"
                  />
                </div>

                <div class="form-group mt-3">
                  <label for="phone">Phone number</label><br />
                  <input
                    type="phone"
                    name="phone"
                    id="phone"
                    placeholder="Enter your Phone number"
                    class="form-control"
                    autocomplete="tel"
                     aria-required="true"
                  aria-label="Phone Number"
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
                     aria-required="true"
                  aria-label="Address"
                  />
                </div>

                <div class="form-group mt-3">
                  <label for="subject">Website Type</label><br />
                 <select name="subject" id="subject" class="form-control">
                     <option value="" disabled selected >Select an option</option>
                      <option value="Static Website" <?php if($s_value=="Static Website") echo "selected"; ?>>Static Website</option>
                      <option value="Dynamic Website" <?php if($s_value=="Dynamic Website") echo "selected"; ?>>Dynamic Website</option>
                      <option value="E-commerce Website" <?php if($s_value=="E-commerce Website") echo "selected"; ?>>E-commerce Website</option>
                      <option value="Blog or Personal Website" <?php if($s_value=="Blog or Personal Website") echo "selected"; ?>>Blog or Personal Website</option>
                      <option value="Portfolio Website" <?php if($s_value=="Portfolio Website") echo "selected"; ?>>Portfolio Website</option>
                      <option value="Business or coorporate Website" <?php if($s_value=="Business or coorporate Website") echo "selected"; ?>>Business or coorporate Website</option>
                      <option value="Educational Website" <?php if($s_value=="Educational Website") echo "selected"; ?>>Educational Website</option>
                      <option value="Social media or community Website" <?php if($s_value=="Social media or community Website") echo "selected"; ?>>Social media or community Website</option>
                      <option value="Entertainment Website" <?php if($s_value=="Entertainment Website") echo "selected"; ?>>Entertainment Website</option>
                      <option value="News or Magazine Website" <?php if($s_value=="News or Magazine Website") echo "selected"; ?>>News or Magazine Website</option>
                      <option value="Web Application" <?php if($s_value=="Web Application") echo "selected"; ?>>Web Application</option>
                      <option value="Non-Profit or NGO Website" <?php if($s_value=="Non-profit or NGO Website") echo "selected"; ?>>Non-Profit or NGO Website</option>
                      <option value="Forum or Discussion Website" <?php if($s_value=="Forum or Discussion Website") echo "selected"; ?>>Forum or Discussion Website</option>
                      <option value="Streaming Website" <?php if($s_value=="Streaming Website") echo "selected"; ?>>Streaming Website</option>
                      <option value="Other Website" <?php if($s_value=="Other Website") echo "selected"; ?>>Other Website</option>
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
                     aria-required="true"
                     aria-label="Messages"
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
             <li><b>Email:</b> <a href="mailto:abdulrazakabullaziz9@gmail.com" title="Email Abdulrazak" class="text-decoration-none  link-dark">abdulrazakabullaziz9@gmail.com</a></li>
              <li><b>Phone:</b> <a href="tel:+2347036998066" title="Call Abdulrazak" class="text-decoration-none  link-dark">07036998066</a></li>
              <li><b>Location:</b> Nasarawa, Nigeria</li>
              <li>
                <b>facebook:</b>
                <a href="https://www.facebook.com/abdulrazak.abdulazeez.7731"
                  target="_blank" rel="noopener noreferrer" title="Abdulrazak on Facebook" class="text-decoration-none  link-dark">Abdulrazak Abdulazeez</a
                >
              </li>
              <li>
                <b>X(Twitter):</b>
                <a href="https://x.com/Abdulra88912779"
                  target="_blank" rel="noopener noreferrer" title="Abdulrazak on X" class="text-decoration-none  link-dark">Abdulrazak Abdulazeez</a
                >
              </li>
              <li>
                <b>Linkedin:</b>
                <a href="https://linkedin.com/in/abdulrazak-abdulazeez-ba5984248/"
                  target="_blank" rel="noopener noreferrer" title="Abdulrazak on Linkedin" class="text-decoration-none  link-dark">Abdulrazak Abdulazeez</a
                >
              </li>
              <li>
                <b>Github:</b>
                <a href="https://github.com/ABDUL-maker-netizen"
                  target="_blank" rel="noopener noreferrer" title="Abdulrazak on github" class="text-decoration-none  link-dark">Abdulrazak Abdulazeez</a
                >
              </li>
            </ul>
          </section>
        </div>
      </div>
      <footer>
        <div
          class="text-center d-flex justify-content-center align-items-center"
        >
          <span class="text-center fs-5">Copyright © 2025 /Az Abdul Azeez</span>
        </div>
      </footer>
    </div>
     <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>

      


      
  