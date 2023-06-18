    <!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>ROP's</title>
            <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
            <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
        </head>
        <body>
            <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->

            <div class = "content"><!--body content holder-->

                <div class = "container">
                    <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                        <h1>What we organize</h1><!--body content title-->
                    </div>
                </div>

                <div class="container">
                    <div class="col-md-12">
                    <hr>
                    </div>
                </div>
    			
                <div class="row"><!--wedding content-->
                    <section>
                        <div class="container">
                            <div class="col-md-6"><!--image holder with 6 grid columns-->
                                <img src="images/weddingg2.jpg" class="img-responsive">
                            </div>
                            <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                                <h1>Wedding</h1><!--title-->
                                <p><!--content-->
                                The most important day in a couple's life.
                                Guaranteeing personalized solutions and flawless execution, our venues provide the perfect
                                location for your special day.
                                </p>
                                <hr class="customline"><!--css modified horizontal line-->
                                <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                                View Events  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                                </button>
                            </div><!--subcontent div-->
                        </div><!--container div-->
                    </section>
                </div><!--row div-->
    			
                <div class="container">
                <div class="col-md-12">
                <hr>
                </div>


                <div class="welcome-template">
                    <div class="welcome-template-content">
                        <h3><span class="orange-text">Welcoming</span> you to ROP</h3>
                        <p>Unlock Your Perfect Day: Discover, Plan, and Celebrate with Our Wedding Planners!</p>
                    </div>

                    <div class="welcome-template-cards">
                        <div class="template-card">
                            <div class="template-circle-icon">
                                <img src="images/frontpage.png">
                            </div>
                            <div class="template-card-content">
                                <h4>CREATIVE IDEAS</h4>
                                <p>Love Knots: Expert Guidance, Seamless Coordination, and Unforgettable Moments for Your Perfect Wedding</p>                        
                            </div>
                        </div>
                        <div class="template-card">
                            <div class="template-circle-icon">
                                <img src="images/frontpage.png">
                            </div>
                            <div class="template-card-content">
                                <h4>PLANNING</h4>
                                <p>From Vision to Reality: Personalized Wedding Planning Solutions for Your Dream Celebration.</p>
                            </div>
                        </div>
                        <div class="template-card">
                            <div class="template-circle-icon">
                                <img src="images/frontpage.png">
                            </div>
                            <div class="template-card-content">
                                <h4>SAFE WORK</h4>
                                <p>Ensuring Safe Celebrations: Prioritizing Health Guidelines for Memorable and Secure Wedding Experiences.</p>  
                            </div>
                        </div>
                        <div class="template-card">
                            <div class="template-circle-icon">
                                <img src="images/frontpage.png">
                            </div>
                            <div class="template-card-content">
                                <h4>BEST QUALITY</h4>
                                <p>Unveiling Timeless Splendor: Meticulously Curated Designs that Reflect Your Unique Love Story and Captivate Hearts</p>
                            </div>
                        </div> 
                    </div>
                </div>

                <div class="container">
                <div class="col-md-12">
                <hr>
                </div>
            </div>
                
                <div class="our-story reveal">
              <div class="story-left">
                  <div class="camera-man">
                    <img src="images/success.jpg" alt="" height="500px" width="100%"/>
                  </div>
              </div>
              <div class="story-right">
                <div class="story-info">
                  <h5>Our Experience</h5>
                  <h1>Our Stories Have Advanture</h1>
                  <p>
                    While marriages are made in heaven, they are planned on earth. Pulling off a wedding is not an easy task since it requires a lot of planning and a lot of attention to detail. To make the big day perfect a lot of leg work and meticulous planning are required. And that is what these our wedding planners are doing.
                  </p>
                </div>
                <div class="success">
                  <div class="journey">
                    <h1>12K+</h1>
                    <p>Success Journey</p>
                  </div>
                  <div class="journey">
                    <h1>16+</h1>
                    <p>Awards winning</p>
                  </div>
                  <div class="journey">
                    <h1>20+</h1>
                    <p>Year of experience</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="container">
                <div class="col-md-12">
                <hr>
                </div>
            </div>
            <div class="review reveal">
                <div class="review-left">
                    <div class="attractive-guy">
                      <img src="images/feedback.jpeg" alt="" width="100%">
                    </div>
                </div>

                <div class="review-right">
                    <div class="review-top">
                        <h1>A Customer Said About us:</h1>
                    </div>
                    
                    <div class="review-info">
                        <div class="info-top">
                            <p>Thank you so much (RPO’s)! You guys are all amazing, kind, professional, attentive, on point answering back to emails, calls, changes and concerns. You all made my wedding beautiful and more than what I expected! Thank you to all the vendors as well! You guys are incredible! Thank you so much and God bless you all!</p>
                        </div>
                        <div class="review-bottom">
                            <div class="bottom-left">
                              <img src="images/star.jpg" alt="" width="60%">
                              <h3>Andrew Sarma</h3>
                              <p>Enterprenuer</p>
                            </div>
                            <!-- <div class="bottom-right">
                              <div class="next-previous">
                                <div class="next n-small">
                                 <span><</span>
                                </div>
                                <div class="previous n-small">
                                  <span>></span>
                                </div>
                              </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

                
            <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
        </body>
    </html>
