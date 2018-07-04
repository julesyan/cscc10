<!DOCTYPE html>
<html>
  <head>
    <?php include('head.php') ?>
    <link rel="stylesheet" href="./styling/home.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  </head>
  <body>
    <div class="" id="header">
      <?php include('header.php') ?>
    </div>

    <div class="" id="nav">
      <?php include('nav.php') ?>
    </div>

    <div class="main">
      <div class="container">
        <div class="notice">
          <h3>Service Update!</h3>

          <!--
              Put in your library notices (Yellow & Black?)
          -->
          All Richmond Hill Public library branches will be closed on Sunday,
          July 1 and Monday, July 2 for Canada Day.
          <a href="./holiday_schdule.php" class="blackLink">
            <b> More information about holiday hours.</b>
          </a>
        </div>

        <div class="home-container">
          <h3>Featured Books</h3>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <div class="carousel slide multi-item-carousel" id="theCarousel">
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="col-xs-4"><a href="#1"><img src="./imgs/covers/book1.jpg"
                                                            alt="book1"
                                                            class="img-responsive"
                                                            style="width: 300px; height: 300px;"></a></div>
                  </div>
                  <div class="item">
                    <div class="col-xs-4"><a href="#1"><img src="./imgs/covers/book2.jpg"
                                                            alt="book2"
                                                            class="img-responsive"
                                                            style="width: 300px; height: 300px;"></a></div>
                  </div>
                  <div class="item">
                    <div class="col-xs-4"><a href="#1"><img src="./imgs/covers/book3.jpg"
                                                            alt="book3"
                                                            class="img-responsive"
                                                            style="width: 300px; height: 300px;"></a></div>
                  </div>
                  <div class="item">
                    <div class="col-xs-4"><a href="#1"><img src="./imgs/covers/book4.jpg"
                                                            alt="book4"
                                                            class="img-responsive"
                                                            style="width: 300px; height: 300px;"></a></div>
                  </div>
                  <div class="item">
                    <div class="col-xs-4"><a href="#1"><img src="./imgs/covers/book5.jpg"
                                                            alt="book5"
                                                            class="img-responsive"
                                                            style="width: 300px; height: 300px;"></a></div>
                  </div>
                  <div class="item">
                    <div class="col-xs-4"><a href="#1"><img src="./imgs/covers/book6.jpg"
                                                            alt="book6"
                                                            class="img-responsive"
                                                            style="width: 300px; height: 300px;"></a></div>
                  </div>
                  <!-- add  more items here -->
                  <!-- Example item start:  -->

                  <div class="item">
                    <div class="col-xs-4"><a href="#1"><img src="./imgs/covers/book7.jpg"
                                                            alt="book7"
                                                            class="img-responsive"
                                                            style="width: 300px; height: 300px;"></a></div>
                  </div>

                  <!--  Example item end -->
                </div>
                <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!--
            Quick Links! Links to useful pages (5)
        -->
        <div class="home-container">
            <h3>Quick Links</h3>
            <hr>
            <div class="row">
                <div class="col-sm-2">
                    <div style="text-align: center">
                        <a href="#">
                            <img src="./imgs/program_guide.jpg"
                            style="width: 150px; height: 150px;">
                            Program Guide
                        </a>
                    </div>

                </div>
                <div class="col-sm-2">
                    <div style="text-align: center">
                        <a href="#">
                            <img src="./imgs/magazines.jpg"
                            style="width: 150px; height: 150px;">
                            Magazine
                        </a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div style="text-align: center">
                        <a href="#">
                            <img src="./imgs/eBooks.jpg"
                            style="width: 150px; height: 150px;">
                            Program Guide
                        </a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div style="text-align: center">
                         <a href="#">
                            <img src="./imgs/eVideo.jpg"
                            style="width: 150px; height: 150px;">
                            eVideo
                        </a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div style="text-align: center">
                        <a href="#">
                            <img src="./imgs/LyndaLogin.jpg"
                            style="width: 150px; height: 150px;">
                            Lynda Login
                        </a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div style="text-align: center">
                        <a href="#">
                            <img src="./imgs/Visual Guides.jpg"
                            style="width: 150px; height: 150px;">
                            Visual Guides
                        </a>
                    </div>
                </div>
            </div>
            <hr>
        </div>

        <!--
            Events
        -->
        <div class="home-container">
            <a href="#"><h3>Upcoming Events</h3></a>
            <hr>
            <div class="row">
                <div class="col-sm-2">
                    <a href="#">
                        <img src="./imgs/MovieMadness.jpg"
                        style="width: 150px; height: 200px;">
                    </a>
                </div>
                <div class="col-sm-8">
                    <div>
                        <a href="#"><h5>Movie Madness</h5></a>
                    </div>
                    <div>
                        Join in the fun at the Central Library on Saturday, June 9
                        at 2 pm and watch Peter Rabbit. You'll need to pick up a ticket.
                    </div>
                </div>
            </div>
            <hr>
            <div>
                <a href="#"><h5>Community Conversations</h5></a>
            </div>

            <div class="row">
                <div class="col-sm-10">
                    On Monday, June 11 at Central Library, RHPL hosts a panel discussion about
                    the reconciliation between Indeigenous peoples and non-Indigenous Cnadians.
                    Register online for this event.
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2">
                    <a href="#">
                        <img src="./imgs/FathersDayMovie.jpg"
                        style="width: 150px; height: 200px;">
                    </a>
                </div>
                <div class="col-sm-8">
                    <div><h5>Father's Day Movie</h5></div>
                    <div>
                        Dan is a single father who dedicates his life to his three children.
                        One day, he meets a voman, falls in love, and then finds out that she
                        is actually dating his younger brother. Join us for an early celebration,
                        June 10, from 2-4 pm at Central Library for this emotionally engaging
                        and hilarious comedy drama!
                    </div>
                </div>
            </div>
            <hr>
            <div>
                <a href="#"><h5>Everyday English</h5></a>
            </div>
            <div class="row">
                <div class="col-sm-10">
                    Improve your reading, writing, speakiing and listening for everyday conversations
                    in English! Join us every Tuesday and Thursday for this free program, led by a
                    facilitator from the York Catholic District Scholl Board.
                </div>
            </div>
            <hr>
            <div>
                <a href="#"><h5>Photographer in Residence</h5></a>
            </div>
            <div class="row">
                <div class="col-sm-10">
                    Photographers share your skills and artistic vision with the Richmond Hill community!
                    We invite professional visual artists working in the medium of photography to apply for
                    our photographer in Residence program. The program will offer and opportunity to
                    participate in various events and workshops, while exploring the Twon of Richmond Hill
                    and working toward a group exhibition.
                </div>
            </div>
            <hr>
        </div>


        <!--
            Suggestions! List some things that the user can do (2)
        -->
        <div class="home-container">
        <a href="#"><h3>Suggestions</h3></a>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <a href="#">
                        <img src="./imgs/LoanStars.jpg"
                             style="width: 225px; height: 125px;">
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="#">
                        <h5>LoanStars</h5>
                    </a>
                    <div>
                        Looking for reading recommendation? Loan Stars is the 10 hottest books published
                        monthly, as voted by library staff across Canada. Looking for more? Try our Reader's
                        Corner for more suggestions.
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <a href="#">
                        <img src="./imgs/NewOakRidgesLibrary.jpg"
                             style="width: 225px; height: 125px;">
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="#">
                        <h5>New Oak Ridges Library</h5>
                    </a>
                    <div>
                        Construction of the new Oak Ridges Library is well underway. Check the Oak Ridges
                        Building Project page for updates.
                    </div>
                </div>
            </div>
            <hr>
        </div>
      </div>
    </div>


    <div class="" id="footer">
      <?php include('footer.php') ?>
    </div>
  </body>
</html>
