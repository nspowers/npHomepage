<!--<!doctype html>-->
<!--
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>$pageTitle</title>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="css/app.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/jquery.scrollto.js"></script>
</head>
-->
<?php include 'headPartial.php'; ?>

    <link rel="stylesheet" href="css/remove-sidebar.css" />
<body>
<?php include 'sidebarMenuPartial.php'; ?>

   <div class="wrapper">
    <!-- Work Section -->
    <section id="work" class="indexWork">
        <div class="row full-width">
            <article>
                <div class="row">
                    <div class="small-12 columns">
                        <h2 class="selectedWork">Work</h2>
                    </div>
                </div>
                
                <div class="project">
                           <a href="college-of-science.php">
                            <div class="projectImg cosProjectImg">
                                                                                       <div class="colorLayer cosHovColor">

                              <div class="projectTitle"><h3>College of Science Website</h3></div>
                                <div class="projectSubtitle"></div>
                                <div class="projectDesc">
                                <p>A comprehensive update for the College of Science website at North Greenville University</p>
                                </div>
                            </div>
														 </div>
                            </a>
                        </div>
                        <div class="project">
                           <a href="prospective-folder.php">
                            <div class="projectImg spmProjectImg">
                                                          <div class="colorLayer spmHovColor">

                              <div class="projectTitle"><h3>Sport Promotions</h3></div>
                                <div class="projectSubtitle"></div>
                                <div class="projectDesc">
                                <p>Delivering sport program copy to prospective students</p>
                                </div>
                            </div>
														 </div>
                            </a>
                        </div>
<!--
                        <div class="project">
                           <a href="college-of-science.php">
                            <div class="projectImg">
                              <div class="projectTitle"><h3>Animal Science Brochure</h3></div>
                                <div class="projectSubtitle"></div>
                                <div class="projectDesc">
                                <p>Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue.</p>
                                </div>
                            </div>
                            </a>
                        </div>
-->
                        
                        <div class="project">
                           <a href="allens-ridge-promo.php">
                            <div class="projectImg arrPromoImg">
                                                         <div class="colorLayer arrPromoHovColor">

                              <div class="projectTitle"><h3>Ranch Video Promos</h3></div>
                                <div class="projectSubtitle"></div>
                                <div class="projectDesc">
                                <p>Four promotional videos showcasing product offerings at Allen's Ridge Ranch</p>
                                </div>
                            </div>
														 </div>
                            </a>
                        </div>
                        
                        <div class="project">
                           <a href="allens-ridge.php">
                            <div class="projectImg arrInternImg">
                                                         <div class="colorLayer arrHovColor">

                              <div class="projectTitle"><h3>Branding Internship</h3></div>
                                <div class="projectSubtitle"></div>
                                <div class="projectDesc">
                                <p>Experience developing branding and promotions for Allen's Ridge Ranch</p>
                                </div>
                            </div>
														 </div>
                            </a>
                        </div>
                        <div class="project">
                           <a href="sma.php">
                            <div class="projectImg smaProjectImg lastWork">
                                                         <div class="colorLayer smaHovColor">

                              <div class="projectTitle"><h3>Student Marketing Association</h3></div>
                                <div class="projectSubtitle"></div>
                                <div class="projectDesc">
                                <p>Delivering logo, print assets, and website for SMA</p>
                                </div>
                            </div>
														 </div>
                            </a>
                        </div>
            </article>
        </div>
    </section>

    <!-- Contact Section -->

    <section id="form" class="indexForm">
        <div class="row full-width">
            <article>
                <div class="row">
                    <div class="small-12 columns">
                        <h2 id="contact" class="contactFormGreeting">Say Hello</h2>
                        <hr class="dotted">

                    </div>
                    <div class="">
                       <form action="contact_us_send.php" method="post">

                        <div class="input-field small-12 medium-6 columns">
                            <input placeholder="Your Name" id="name" name="name" type="text" class="validate">
                        </div>

                            <div class="input-field small-12 medium-6 columns">
                                <input placeholder="Your Email"  id="email" name="email" type="email" class="validate">
                            </div>
                            <div class="input-field small-12 medium-12 columns">
      <textarea placeholder="Your Message" type="text" id="comment" name="comment"></textarea>
                        </div>
                        <div class="">
                             <div class="small-12 columns">
                              <button type="submit" id="contactFormSubmit" name="submit" value="Submit">Submit</button>
                          </div>
                         </div>
                                                    </form>

                      </div>
            </article>
            </div>
    </section>


    </div>
    
     </div> <!-- end wrapper -->
    <footer>
  <div class="row full-width">
<!--
  <ul>
            <li>
                <a href="work.php">Work</a>
            </li>
            <li>
                <a href="about.php">About</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
        </ul>
-->
        <p>&copy;2015 Nathaniel Powers</p>
  </div>
</footer>

  <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/foundation.sidebar.js"></script>
    <script src="js/app.js"></script>

</body>

</html>
