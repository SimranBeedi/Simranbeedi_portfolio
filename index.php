<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- FontAwesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<!-- Local FontAwesome -->
<link rel="stylesheet" href="fontawesome/css/all.min.css">


</head>
<body>
    <!-- Navbar -->
    <?php require 'nav.html'; ?>

    <!-- Hero Section -->
    <header id="home" class="vh-100 d-flex align-items-center justify-content-center text-white">
        <div class="dots-container">
            <!-- Generate multiple dots -->
            <div class="dot" style="top: -150px; left: -150px;"></div>
            <div class="dot" style="top: 100px; left: 100px;"></div>
            <div class="dot" style="top: -100px; left: 200px;"></div>
            <div class="dot" style="top: 150px; left: -200px;"></div>
            <div class="dot" style="top: -200px; left: -50px;"></div>
            <div class="dot" style="top: 0; left: 300px;"></div>
            <div class="dot" style="top: 250px; left: 50px;"></div>
            <div class="dot" style="top: -250px; left: -250px;"></div>
        </div>
        <div class="text-center">
            <h1 class="display-4">Hi, I'm <span>Simran Beedi</span></h1>
            <p class="lead">A Developer Creating Innovative Solutions</p>
            <div class="typing-effect">
                <span id="dynamic-text"></span>
            </div>
            
            <a href="#projects" class="btn btn-primary btn-lg mt-3">View My Work</a>
        </div>
    </header>
    <section id="skills" class="container-fluid py-5">
        <h2 class="text-center mb-4">My Skills</h2>
        
        <div class="row">
          <!-- Web Development Card -->
          <div class="col-md-4 mb-4">
            <div class="card skill-card custom-card-margin">
              <div class="card-body">
                <h3>Web Development</h3>
                <div class="skill-item">
                  <div class="d-flex align-items-center">
                    <i class="fab fa-html5 skill-icon"></i>
                    <span class="skill-name">HTML</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" style="width: 90%"></div>
                  </div>
                </div>
                <div class="skill-item">
                  <div class="d-flex align-items-center">
                    <i class="fab fa-css3-alt skill-icon"></i>
                    <span class="skill-name">CSS</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" style="width: 80%"></div>
                  </div>
                </div>
                <div class="skill-item">
                  <div class="d-flex align-items-center">
                    <i class="fab fa-js-square skill-icon"></i>
                    <span class="skill-name">JavaScript</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" style="width: 75%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
          <!-- Backend Development Card -->
          <div class="col-md-4 mb-4">
            <div class="card skill-card custom-card-margin">
              <div class="card-body">
                <h3>Backend Development</h3>
                <div class="skill-item">
                  <div class="d-flex align-items-center">
                    <i class="fab fa-python skill-icon"></i>
                    <span class="skill-name">Python</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" style="width: 85%"></div>
                  </div>
                </div>
                <div class="skill-item">
                  <div class="d-flex align-items-center">
                    <i class="fab fa-php skill-icon"></i>
                    <span class="skill-name">PHP</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" style="width: 85%"></div>
                  </div>
                </div>
                <div class="skill-item">
                  <div class="d-flex align-items-center">
                    <i class="fab fa-python skill-icon"></i>
                    <span class="skill-name">Flask</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" style="width: 80%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
          <!-- Database Management Card -->
          <div class="col-md-4 mb-4">
            <div class="card skill-card custom-card-margin">
              <div class="card-body">
                <h3>Database Management</h3>
                <div class="skill-item">
                  <div class="d-flex align-items-center">
                    <i class="fa-database skill-icon"></i>
                    <span class="skill-name">MySQL</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" style="width: 80%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        <!-- About Section -->
    <!-- About Section -->
    <section id="about" class="py-5 bg-gradient-custom">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image on the left -->
            <div class="col-lg-6 order-lg-1">
                <img src="image/simran.jpeg" alt="Profile Picture"  style="max-height: 700px;"class="img-fluid rounded-circle shadow-lg about-image">
            </div>
            <div class="col-lg-6 order-lg-2">
                <h2 class="about-title">About Me</h2>
                <hr>
                <p class="about-description">I am a developer with expertise in front-end and back-end technologies. I create engaging and visually appealing web applications.</p>
                <p><strong>Skills:</strong> HTML, CSS, JavaScript, Python, Flask, MySQL, React</p>

                <div class="container">
                    <div class="row">
                        <!-- Hobbies & Interests Section -->
                        <div class="col-md-6">
                            <div class="about-hobbies">
                                <h2>Hobbies & Interests</h2>
                                <hr>
                                <ul>
                                    <li>Gardening</li>
                                    <li>Reading (Tech Blogs, Science Fiction)</li>
                                    <li>Traveling</li>
                                    <li>Cooking</li>
                                    <li>Open Source Contributions</li>
                                </ul>
                            </div>
                        </div>
                
                        <!-- Skills & Expertise Section -->
                        <div class="col-md-6">
                            <div class="about-skills">
                                <h2>Skills & Expertise</h2>
                                <hr>
                                <ul>
                                    <li>Web Development (HTML, CSS, JavaScript, Python, PHP, etc.)</li>
                                    <li>UX/UI Design</li>
                                    <li>Database Management (MySQL)</li>
                                    <li>Version Control (Git, GitHub)</li>
                                    <li>Responsive Design</li>
                                    <li>Problem Solving & Debugging</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media Links -->
                <hr>
                <div class="social-links mt-3">
                    <a href="https://www.linkedin.com/in/simran-beedi/" class="social-icon text-white mx-2" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/SimranBeedi" class="social-icon text-white mx-2" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="social-icon text-white mx-2"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="education" class="container-fluid py-5" style="background-color: #f4f4f4;">
    <h2 class="text-center mb-4">Education</h2>
    <hr>
    <div style="border:20px;" class="row">
        <!-- Left Side: Education Cards -->
        <div class="col-md-6 mb-4">
            <div class="card edu-card shadow-lg">
                <div class="card-body">
                    <h4 class="card-title">Bachelor of Science in Computer Science</h4>
                    <p class="card-text">Karnatak Science College Dharwad - 2022</p>
                    <p>Relevant Coursework: Data Structures, Algorithms, Web Development, Databases,Electronics,Mathematics</p>
                </div>
            </div>
            <div class="card edu-card shadow-lg mt-4">
                <div class="card-body">
                    <h4 class="card-title">Master's in Computer Applications</h4>
                    <p class="card-text">Karnatak University Dharwad -2024 </p>
                    <p>Specialization in Python,Web Development and AI.</p>
                </div>
            </div>
        </div>

        <!-- Right Side: Certifications and Bullets -->
        <div class="col-md-6 mb-4">
            <div class="certifications">
                <h4>Certifications</h4>
                <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle"></i> Certified in Web Designing and Developmen-  Apponix Technologies</li>
                    <li><i class="bi bi-check-circle"></i>  STCES, Certified in Diploma in MS Office, DTP - Infosaaz Institute</li>
                    <li><i class="bi bi-check-circle"></i></li>
                </ul>
            </div>
            <div class="additional-info mt-4">
                <h4>Additional Information</h4>
                <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle"></i> Strong background in Data Structures and Algorithms</li>
                    <li><i class="bi bi-check-circle"></i> </li>
                    <li><i class="bi bi-check-circle"></i> Passionate about Full Development</li>
                </ul>
            </div>
        </div>
    </div>
    <HR></HR>
    <h2 class="text-center mb-4">Download My Resume</h2>
  
    <div class="text-center">
      <div class="text-center">
        <a href="download.php" class="btn btn-download">
            <i class="fas fa-download"></i> Download Resume
        </a>
    </div>
    
        
    </div>
</section>

<section id="projects">
    <div class="projects-container">
      <div class="heading">
        <h3 class="title">My  Projects</h3>
        <p class="separator"></p>
        <p class="subtitle">
          Here's a list of <u>most</u> of the projects I've been worked .
        </p>
      </div>
      
      <div class="projects-wrapper">
        <!-- Example Project 1 -->
        <div class="project">
        <img class="project-image" src="image/logo.jpg" style="max-width: 100px; max-height: 200px; display: block; margin: 0 auto;" alt="Project 1 Image">

          <div class="project-details">
            <div class="project-tile">
              <p class="icons">
                <i class="fab fa-js-square"></i>
                <i class="fab fa-css3-alt"></i>
                <i class="fab fa-html5"></i>
                <i class="fab fa-database"></i>
                <i class="fab fa-php"></i>
              </p>
              Construction Material Portal<hr>
            </div>
            <small>
              <b>Built using HTML,CSS,JS,PHP,BOOTSRAP and MYSQL.</b>
            </small>
            <p>Construction Management System is a web-based application that offers online management  and shopping  ,which include smart estimartion of 1bhk and 2bhk and implements  databases to store contractor, laborer, worker, and product information.Provided users with access to detailed profiles and information of contractors, laborers, and workers. </p>
            <div class="buttons">
              <a href="https://github.com/project-repo" target="_blank" rel="noopener noreferrer">
                View Source <i class="fas fa-external-link-alt"></i>
              </a>
              <a href="https://project-link.com" target="_blank" rel="noopener noreferrer">
                Try it Live <i class="fas fa-external-link-alt"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Example Project 2 -->
        <div class="project">
  <a class="project-link" href="https://project-link.com" target="_blank" rel="noopener noreferrer">
    <!-- Project Image Container -->
    <div class="project-image-container" style="width: 100px; height: 100px; display: flex; justify-content: center; align-items: center; margin: 0 auto;">
      <img class="project-image" src="image/buydirect.png" style="max-width: 100%; max-height: 100%;" alt="Project 2 Image">
    </div>
  </a>

  <!-- Project Details -->
  <div class="project-details">
    <div class="project-tile">
      <p class="icons">
        <i class="fab fa-js-square"></i>
        <i class="fab fa-html5"></i>
        <i class="fab fa-python"></i>
        <i class="fab fa-css3-alt"></i>
        <i class="fab fa-database"></i>
      </p>
      BuyDirect <br>
      <small>Save While You Shop</small>
      <hr>
    </div>
    <small>
      <b>Built using HTML, CSS, JS, PYTHON, FLASK, BOOTSTRAP, AJAX, jQuery, and MYSQL.</b>
    </small>
    <p>A full-stack website that lets you shop groceries online from local stores. The website integrates Admins, Shopkeepers, and Customers dashboards with tailored features for efficient operations. Provides safety through OTP-based registration and password hashing to protect user data.</p>
    <div class="buttons">
      <a href="https://github.com/project-repo" target="_blank" rel="noopener noreferrer">
        View Source <i class="fas fa-external-link-alt"></i>
      </a>
      <a href="https://project-link.com" target="_blank" rel="noopener noreferrer">
        Try it Live <i class="fas fa-external-link-alt"></i>
      </a>
    </div>
  </div>
</div>

        <!-- Add more projects here -->
      </div>
    </div>
  </section>
<!----resume--><form id="contact-form" method="POST" action="contact.php">
  <section id="contact">
    <section class="section-main">
      <section class="contact-page">
        <div class="contact-page-header">
          <div class="contact-page-container">
            <h2>Contact Me</h2>
            <p>"Let’s connect! Feel free to send a message."...</p>
          </div>
        </div>
        <div class="contact-page-container">
          <div class="contact-page-row">
            <div class="contact-page-info">
              <div class="contact-page-info-item">
                <div class="contact-page-info-icon">
                  <i class="fas fa-home"></i>
                </div>
                <div class="contact-page-info-content">
                  <h4>Address</h4>
                  <p>Dharwad,<br/> Karnataka, <br/>580001</p>
                </div>
              </div>
              <div class="contact-page-info-item">
                <div class="contact-page-info-icon">
                  <i class="fas fa-phone"></i>
                </div>
                <div class="contact-page-info-content">
                  <h4>Phone</h4>
                  <p>7026156992</p>
                </div>
              </div>
              <div class="contact-page-info-item">
                <div class="contact-page-info-icon">
                  <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-page-info-content">
                  <h4>Email</h4>
                  <p>simranbeedi@gmail.com</p>
                </div>
              </div>
            </div>
            <div class="contact-page-form">
              <h2>Send Message</h2>
              <div class="contact-page-input-box">
                <input type="text" name="name" required>
                <span>Full Name</span>
              </div>
              <div class="contact-page-input-box">
                <input type="email" name="email" required>
                <span>Email</span>
              </div>
              <div class="contact-page-input-box">
                <textarea name="message" required></textarea>
                <span>Type your Message...</span>
              </div>
              <div class="contact-page-input-box">
                <input type="submit" value="Send">
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
  </form>

  
        
      </div>
    </div>
  </section></section>
  
    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Simran H Beedi. All Rights Reserved.</p>
        <div>
            <a href="#" class="text-white mx-2"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="text-white mx-2"><i class="fab fa-github"></i></a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>