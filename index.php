<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Murugan Personal Portfolio</title>

    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     
    <link rel="preconnect" href="https://fonts.googleapis.com">


   <!--custom CSS file-->

   <link rel="stylesheet" href="style.css">

    
</head>
<body>
    <header class="1-header">
        <nav class="nav bd-grid">
            <div class="nav_toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
            

            </div>

            <div>
                <a href="#" class="nav_logo">Murugan</a>
            </div>

            <div class="nav_menu" id="nav-menu">
                <div class="nav_close" id="nav-close">
                <i class='bx bx-x' ></i>

                </div>
                <ul class="nav_list">
                    <li class="nav_item"><a href="#home" class="nav_link active">Home</a></li>
                    <li class="nav_item"><a href="#about" class="nav_link">About</a></li>
                    <li class="nav_item"><a href="#skills" class="nav_link">Skills</a></li>
                    <li class="nav_item"><a href="#services" class="nav_link">Services</a></li>
                    <li class="nav_item"><a href="#works" class="nav_link">Works</a></li>
                    <li class="nav_item"><a href="#contact" class="nav_link">Contactme</a></li>
                </ul>

            </div>

        </nav>
    </header>

    <main class="l-main">
        <section class="home">
            <div class="home_container bd-grid">
                <div class="home_data">
                    <div class="home_img">
                        <img src="images/muruganimg2.0.png" alt="" height="100%" width="90%">
                    </div>
                    <h1 class="home_title">Murugan Dhanasekaran</h1>
                    <span class="home_profession">Web Developer</span>

                    <div class="home_social">
                        <a href="#" class="home_social-link"><i class='bx bxl-linkedin' ></i></a>
                        <a href="#" class="home_social-link"><i class='bx bxl-github' ></i></a>
                        <a href="#" class="home_social-link"><i class='bx bxl-instagram' ></i></a>
                        <a href="#" class="home_social-link"><i class='bx bx-envelope' ></i></a>
                    </div>

                    <a download=""  href="#" class="button home_button">Download Resume</a>
                </div>

            </div>
        </section>
        <section class="about section" id="about">
        <span class="section-subtitle">My intro</span>
        <h2 class="section-title">About me</h2>

        <div class="about_container bd_grid">
            <div class="about_data">
                <p class="about_description">Hi, I,m a java & web developer , passionated about creating and developing the backend as a fresher i have a experience in developing android apps and web apps in my college days and with multiple quality projects..</p>
                <img src="images/muruganim2.jpg" alt="" class="about_img" height="100%" width="50%">
            </div>
            <div class="about_information">
                <h3 class="about_information-title">Information</h3>

                <div class="about_information-data">
                <i class='bx bx-user about_information-icon'></i>
                <span>Murugan Dhanasekaran</span>
                </div>


                <div class="about_information-data">
                <i class='bx bx-phone about_information-icon'></i>
                <span>+91 7358047810</span>
                </div>


                <div class="about_information-data">
                <i class='bx bx-envelope about_information-icon'></i>
                <span>muruganmanoj590@gmail.com</span>
                </div>

                <div class="about_information">
                <h3 class="about_information-title">Project Experiences in College Days</h3>

                <div class="about_information-data">
                <i class='bx bx-briefcase about_information-icon'></i>
                
                <div>
                    <span class="about_information-subtitle">3+ web projects using Php</span>
                </div>
                <div>
                    <span class="about_information-subtitle">2+ android projects using android studio</span>
                </div>
                </div>

                <div class="about_information-data">
                <i class='bx bx-medal about_information-icon'></i>
                
                <div>
                    <span class="about_information-subtitle">Core java certification</span>
                </div>
                <div>
                    <span class="about_information-subtitle">PHP full stack certification.</span>
                </div>
                </div>

                </div>


            </div>
        </div>

        </section>

    </main>


    <script src="script.js"></script>
</body>
</html>