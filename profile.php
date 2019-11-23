<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <!-- sets the width to the width of the device -->
    <meta name="description" content="Professional encyclopedia for professors.">
    <meta name="keywords" content="web design, profbook, index, professor encyclopedia">
    <meta name="author" content="Denis Nadarevic, Emily Boice, Mitchell Sturba, Tony ...">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profile.css">
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/popup.js"></script>
    <title>Profbook | Welcome</title>
</head>

<body>
    <header>
        <div class="container">
            <div id="logo">
                <img src="images/uw_logo.png" id="uwindsor-logo">
                <h1><span class="highlight">Prof</span>Book</h1>
            </div>

            <nav>
                <ul>
                    <li class="current"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="profList.html">ProfList</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="profile-summary">

        <img id="your-profile-pic" src="images/default-icon.png" width="250px">
        <div id="profile-general-info">
            <h1>Roohollah Etemadi</h1>
            <p>PhD, School of Computer Science</p>
            <p>University of Windsor</p>
            <p>Email: etemadir@uwindsor.ca</p>
            <p>Phone: - Fax: -</p>
            <p>Address: 401 Sunset Ave, Windsor, ON N9B 3P4</p>
        </div>
        <div id="signup-popup" class="popup">
            <div id="signup-popup-content" class="contact-content">
                <span class="exit">&times;</span>
                <h1> Contact Me! </h1>
                <form id="contact-form">
                    <input type="email" placeholder="email">
                    <input type="text" placeholder="Enter your message..." class="email-message">
                    <button>Submit</button>
                </form>
            </div>

        </div>
        <button class="edit" id="myButton"><a href="edit-profile.html"><img src="images/editable.png"></a></button>
        <button class="contact" id="myButton">Send a Message</button>
    </section>

    <section id="academics-info">
        <div id="container">
            <div id="profile-menu">
                <h1 class="academics">Academics</h1>
                <h1 class="about-me">About Me</h1>
            </div>
            <input type="button" name="testytest" value="EDIT RESEARCH INFO">
            <?php
             if (array_key_exists('testytest', $_EDITBUT)){
                but1();
             }else {
                 echo "Something messed up";
             }

             function but1() {
                echo "You have pressed the edit button";
             }
            ?>
                <div class="boxes">
                    <h1>Research</h1>
                    <div class="academics-box" id="research" contenteditable="true">
                        <img src="images/research1.png" width="100px">
                        <h3>Large-scale network embedding</h3>
                        <p>Year: 2018-2019 </p>
                        <p>Summary: Massive networks are ubiquitous in the big and hidden data era. Facebook, for example, is an online social network with more than 2.2 billion users. Analyzing such networks using traditional network representations is
                            computationally expensive. Thus, efficient representations with low dimensions and at the same time preserving more information of the network are desirable. In this project, deep neural networks are designed to learn a low-dimensional
                            embed space for large-scale networks. </p>
                        <img src="images/research2.png" width="100px">
                        <h3>PES: Priority Edge Sampling in Streaming Triangle Estimation</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero felis, porta et rhoncus nec, dignissim sed ligula. Suspendisse eu massa pharetra.</p>
                        <h3>The Bias and Variance in Clustering Coefficient Estimation</h3>
                        <img src="images/research4.png" width="100px">
                        <h3>Bias Correction in Clustering Coefficient Estimation</h3>
                        <img src="images/research5.png" width="100px">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero felis, porta et rhoncus nec, dignissim sed ligula. Suspendisse eu massa pharetra</p>
                        <img src="images/research6.png" width="100px">
                        <h3>Efficient Estimation of Triangles in Very Large Graphs</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero felis, porta et rhoncus nec, dignissim sed ligula. Suspendisse eu massa pharetra.</p>
                        <!-- Back end stuff. This should display a list of their projects. It can also display a description of their main field. Shown above is what the back end should provide. The more research they do, the more h3 and p tags should show up. -->
                    </div>

                    <h1>Announcements</h1>
                    <div class="academics-box" id="announcements">
                        <h3>[Course Name] - [Announcement title]</h3>
                        <p>Blah blah you have 18 projects due that r worth 1% each lol also u have a final project that i wont give you time to do ever, its worth 110% of your mark.</p>
                        <h3>[Course Name] - [Announcement title]</h3>
                        <p>Blah blah you have 18 projects due that r worth 1% each lol also u have a final project that i wont give you time to do ever, its worth 110% of your mark.</p>
                        <h3>[Course Name] - [Announcement title]</h3>
                        <p>Blah blah you have 18 projects due that r worth 1% each lol also u have a final project that i wont give you time to do ever, its worth 110% of your mark.</p>
                        <!-- Back end stuff. You should be able to scroll through their general
                    announcements. -->
                    </div>
                    <h1>Courses</h1>
                    <div class="academics-box" id="courses">
                        <h3><a>[Course ID] - [Course Name]</a></h3>
                        <p>[comma seperated list of GAs and TAs w/ hyperlinks to their profile]</p>
                        <h3><a>[Course ID] - [Course Name]</a></h3>
                        <p>[comma seperated list of GAs and TAs w/ hyperlinks to their profile]</p>
                        <h3><a>[Course ID] - [Course Name]</a></h3>
                        <p>[comma seperated list of GAs and TAs w/ hyperlinks to their profile]</p>
                        <!-- Back end stuff. You should be able to see a list of their courses-->
                    </div>
                </div>
        </div>
    </section>

    <footer>
        <p>ProfBook, Copyright &copy; 2019</p>
        <a href="faq.html">FAQ</a>
        <a href="contactus.html">Contact Us</a>
    </footer>
</body>

</html>