<?php
session_start();
require_once('csrf.php');
$csrf_token = generate_csrf_token();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
  <!-- Basic Meta Tags -->
  <title> Abdul Azeez – Full Stack Web Developer | Portfolio</title>
  <meta name="description" content="Full Stack Web Developer skilled in HTML, CSS, JavaScript, Bootstrap, PHP, and MySQL. Explore my work, skills, and portfolio projects.">
  <meta name="keywords" content="Full Stack Developer, JavaScript, PHP, MySQL, Nigerian Web Developer">
  <meta name="author" content=" Abdul azeez">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Open Graph -->
  <meta property="og:title" content=" Abdul Azeez – Full Stack Web Developer">
  <meta property="og:description" content="Check out my portfolio showcasing responsive websites, backend systems, and full stack projects.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://abdulazeez.unaux.com/">
  <meta property="og:image" content="https://abdulazeez.unaux.com/img/portfolio-preview.png">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content=" Abdul Azeez – Full Stack Web Developer">
  <meta name="twitter:description" content="Portfolio of a Full Stack Developer specializing in HTML, CSS, JavaScript, Bootstrap, PHP, and MySQL.">
  <meta name="twitter:image" content="https://abdulazeez.unaux.com/img/portfolio-preview.png">

  <!-- Schema.org for Home Page -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Person",
      "name": "Abdul Azeez",
      "jobTitle": "Full Stack Web Developer",
      "url": "https://abdulazeez.unaux.com",
      "sameAs": [
        "https://abdulazeez.unaux.com",
        "https://github.com/ABDUL-maker-netizen",
        "https://linkedin.com/in/abdulrazak-abdulazeez-ba5984248/",
        "https://x.com/Abdulra88912779"
      ],
      "worksFor": {
        "@type": "Organization",
        "name": "Freelance / Open to Hire"
      },
      "knowsAbout": ["Web Development", "HTML", "CSS", "JavaScript", "Bootstrap", "PHP", "MySQL"]
    },
    {
      "@type": "WebSite",
      "url": "https://abdulazeez.unaux.com",
      "name": "Abdul Azeez Portfolio",
      "description": "Full Stack Web Developer skilled in HTML, CSS, JavaScript, Bootstrap, PHP, and MySQL. Explore portfolio projects, skills, and contact details.",
      "publisher": {
        "@type": "Person",
        "name": "Abdul Azeez"
      }
    },
    {
      "@type": "WebPage",
      "name": "Home – Abdul Azeez Portfolio",
      "url": "https://abdulazeez.unaux.com",
      "description": "Welcome to Abdul Azeez's portfolio – explore projects, skills, and services as a Full Stack Web Developer.",
      "isPartOf": {
        "@id": "https://abdulazeez.unaux.com"
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
        }
      ]
    }
  ]
}
</script>


  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">

  <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/allgenes.css" />
</head>
<body>
    <div class="bg-light">
      <div>
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
              <span><a href="mailto:abdulrazakabdullaziz9@gmail.com" class="text-decoration-none">abdulrazakabdullaziz9@gmail.com</a></span>
            </div>

            <div class="mt-5">
              <img
                src="bootstrap-icons-1.11.3/phone.svg"
                class="bg-primary p-2"
                alt="Phone icon"
              />
              <span><a href="tel:+2347036998066" class="text-decoration-none">07036998066</a></span>
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
              I'm a enthusiastic web developer based in Nigeria,
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
            As a web developer, I've gained hands-on experience by
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
             <p class="fw-bold"><a href="tel:+2347036998066" class="text-decoration-none  link-dark">07036998066</a></p>
          </div>
          <div>
            <p>Email</p>
             <p class="fw-bold"><a href="mailto:abdulrazakabdullaziz9@gmail.com" class="text-decoration-none  link-dark">abdulrazakabdullaziz9@gmail.com</a></p>
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
                  target="_blank" rel="noopener noreferrer" title="Abdulrazak on Facebook" class="text-decoration-none  link-dark"><img src="bootstrap-icons-1.11.3/facebook.svg" alt="Facebook"/></a
                >
              <a
                class="ms-2"
                href="https://wa.me/2347036998066"
                target="_blank" rel="noopener noreferrer" title="Abdulrazak on Whatsapp" class="text-decoration-none  link-dark"><img src="bootstrap-icons-1.11.3/whatsapp.svg" alt="Whatsapp"
              /></a>
              <a
                class="ms-2"
                href="https://x.com/Abdulra88912779"
                arget="_blank" rel="noopener noreferrer" title="Abdulrazak on X" class="text-decoration-none  link-dark"><img src="bootstrap-icons-1.11.3/twitter-x.svg" alt="X(Twitter)"
              /></a>
              <a
                class="ms-2"
                href="https://linkedin.com/in/abdulrazak-abdulazeez-ba5984248/"
                arget="_blank" rel="noopener noreferrer" title="Abdulrazak on Linkedin" class="text-decoration-none  link-dark"><img src="bootstrap-icons-1.11.3/linkedin.svg" alt="Linkedin"
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
                <div class="progress-bar" id="progressBar1" style="width: 0%">0%</div>
              </div>
              <p>CSS</p>
              <div class="progress" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" aria-label="CSS skill level 95 percent">
                <div class="progress-bar" id="progressBar2" style="width: 0%">0%</div>
              </div>

               <p>BOOTSTRAP</p>
              <div class="progress" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" aria-label="BOOTSTRAP skill level 95 percent">
                <div class="progress-bar" id="progressBar3" style="width: 0%">0%</div>
              </div>
              
              <p>Javascript</p>
              <div class="progress" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" aria-label="JavaScript skill level 85 percent">
                <div class="progress-bar" id="progressBar4" style="width: 0%">0%</div>
              </div>
              <p>PHP</p>
              <div class="progress" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" aria-label="PHP skill level 85 percent">
                <div class="progress-bar" id="progressBar5" style="width: 0%">0%</div>
              </div>
              <p>SQL</p>
              <div class="progress" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" aria-label="SQL skill level 97 percent">
                <div class="progress-bar" id="progressBar6" style="width: 0%" >0%</div>
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
              <a href="img/ddt_1.png" rel="noopener noreferrer"><img src="img/ddt_1.png"  alt="Business website screenshot by Abdulrazak Abdulazeez" class="img-fluid" /></a>
             <a class="btn btn-primary mt-4" href="https://thedonautocarpartandrepairs.unaux.com/" target="_blank"
           rel="noopener noreferrer"
           title="Open business website project by Abdulrazak Abdulazeez">Click to access website</a>
      
            </div>
          </div>
          <div class="port-div">
            <p>Portfolio Website</p>
            <div class="w-100 w-md-50 portimg">
             <a href="img/teeboy.png" rel="noopener noreferrer"><img src="img/teeboy.png" alt="Portfolio website screenshot created by Abdulrazak Abdulazeez" class="img-fluid" /></a>
             <a class="btn btn-primary mt-4" href="https://abdulazeez.unaux.com/" target="_blank"
           rel="noopener noreferrer"
           title="Open portfolio website project by Abdulrazak Abdulazeez">Click to access website</a>
      </div>
          </div>
        </section>
        <div class="mt-5">
          <p>Designs</p>
          <section
            class="designs d-flex flex-column flex-md-row gap-5 justify-content-center"
          >
            <div class="w-100 w-md-50">
             <a href="img/Untitled (4).png" rel="noopener noreferrer"><img src="img/Untitled (4).png" alt="UI design example 1 by Abdulrazak" class="img-fluid" /></a>
            </div>
            <div class="w-100 w-md-50">
              <a href="img/Frame 1.png" rel="noopener noreferrer"><img src="img/Frame 1.png" alt="UI design example 2 by Abdulrazak" class="img-fluid" /></a>
            </div>
            <div class="w-100 w-md-50">
              <a href="img/Untitled (5).png" rel="noopener noreferrer"><img src="img/Untitled (5).png" alt="UI design example 1 by Abdulrazak" class="img-fluid" /></a>
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
              <form action="" method="POST" class="offset-2 offset-md-0" id="contactForm" aria-label="Contact form">

               <div class="form-group mt-3">
                  <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
                </div>
                 
              <div id="form-alert"></div>

                <div class="form-group mt-3">
                  <label for="fullname" class="form-label">Fullname</label><br />
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
                  <label for="email" class="form-label">Email</label><br />
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
                  <label for="subject" class="form-label">Website Type</label><br />
                  
                  <select name="subject" id="subject" class="form-select">
                     <option value="">-- Select a Subject --</option>
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
                      <option value="Other Website">Other Website</option>
                    </select>
                    </select>

                  
                </div>

               
                <input
                  class="bg-success fw-bold text-light mt-5 px-5 py-3"
                  type="submit"
                  name="submit"
                  value="SUBMIT"
                  aria-label="Submit contact form"
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