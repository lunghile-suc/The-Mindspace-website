<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/main.css">
    <title>Contact Us</title>
</head>

<body>
    
    <section class="nav_section">
        <nav class="nav">
            <div class="logo">
                <a href="index.html">
                    <img src="./images/logo-3 (2).png" class="logo-img" alt="Mvanand tech group Logo" />
                </a>
            </div>
            <div class="menu-toggle" id="mobile-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="nav-list">
                <ul>
                    <li><a href="index.html" class="link-toggle">HOME</a></li>
                    <li><a href="#about" class="link-toggle">ABOUT US</a></li>
                    <li><a href="#services" class="link-toggle">SERVICES</a></li>
                    <li><a href="#mission" class="link-toggle">TEAM</a></li>
                    <li><a href="contact.html" class="link-toggle">CONTACT</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <header class="contact_header">

    </header>
    <section class="form_section">
        <img src="./images/art-vector-1.png" class="img_av2 a_img" alt="" srcset="">
        <div class="container">
            <div class="contact_header section-header">
                <p>How can we assist?</p>
                <h1>Get in Touch</h1>
            </div>
            <div class="form_controls">
                <form action="email.php" method="post" class="form">
                    <div class="form-control">
                        <div>
                            <label for="">First Name</label>
                            <input type="text" name="first_name" id="first_name" required>
                        </div>
                        <div>
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" id="last_name" required>
                        </div>
                    </div>
                    <div class="form-control">
                        <div>
                            <label for="">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number" required>
                        </div>
                        <div>
                            <label for="">Email Address</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-control">
                        <div>
                            <label for="">Which therapist would you like to book a session with?</label>
                            <select name="therapist" id="therapist">
                                <option value="">Caroline Kapp</option>
                                <option value="">Alexander Oosthuysen</option>
                                <option value="">Kim Serebro</option>
                                <option value="">Sheri Dalton</option>
                                <option value="">Sindi Mlotshwa</option>
                                <option value="">Sumayya Seth</option>
                            </select>
                        </div>
                        <div>
                            <label for="">How can we assist?</label>
                            <textarea name="" id="therapy_service" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form_btn">
                        <input id="btn" type="submit" value="SEND" name="submit">
                    </div>
                </form>
            </div>
        </div>
        <img src="./images/art-vector-1.png" class="img_av3 a_img" alt="" srcset="">
    </section>
    <section class="bottom-section">
        <div class="book-section">
            <h3>Book your next session <br> at The Mindspace</h3>
            <div>
                <a href="">BOOK NOW</a>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer_logo">
                    <img src="./images/logo-2.png" alt="The mindspace logo">
                </div>
                <div class="navigations">
                    <h3 class="ft-h3">Navigation</h3>
                    <li>HOME</li>
                    <li>ABOUT US</li>
                    <li>SERVICES</li>
                    <li>TEAM</li>
                </div>
                <div class="ft-therapists">
                    <h3 class="ft-h3">Our Therapists</h3>
                    <a href="">Caroline Kapp</a>
                    <a href="">Alexander Oosthuysen</a>
                    <a href="">Kim Serebro</a>
                    <a href="">Sheri Dalton</a>
                    <a href="">Sindi Mlotshwa</a>
                    <a href="">Sumaya Seth</a>
                </div>
                <div class="contact_us">
                    <h3 class="ft-h3">Contact Us</h3>
                    <p>Have any enquiries about any of our services? Feel free to get in touch.</p>
                    <div class="book_now_btn">
                        <a href="">BOOK NOW</a>
                    </div>
                </div>
            </div>
        </div>
        <p>The Mind Space © All Rights Reserved 2023. Created by Mvelisto Inc</p>
    </footer>
    <script src="./scripts/jquery-3.6.0.min.js"></script>
    <script src="./slick/slick.min.js"></script>
    <script src="./scripts/"></script>
</body>

</html>