<?php
    include 'header.php';
?>

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="img/hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-text">
                        <!--<span>5 to 9 may 2019, mardavall hotel, New York</span>-->
                        <h2>Change Your Mind<br /> To Become Sucess</h2>
                        <a href="registration.html" class="primary-btn">Register here</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="img/hero-right.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Counter Section Begin -->
    <section class="counter-section bg-gradient">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-4">
                    <div class="counter-text">
                        <span>Conference Date</span>
                        <h3>Count Every Second <br />Until the Event</h3>
                    </div>
                </div> -->
                <div class="col-md-12">
                    <div class="cd-timer" style="text-align: center;" id="countdown">
                        <div class="cd-item">
                            <span>40</span>
                            <p>Days</p>
                        </div>
                        <div class="cd-item">
                            <span>18</span>
                            <p>Hours</p>
                        </div>
                        <div class="cd-item">
                            <span>46</span>
                            <p>Minutes</p>
                        </div>
                        <div class="cd-item">
                            <span>32</span>
                            <p>Seconds</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Home About Section Begin -->
    <section class="home-about-section">
        <div class="container">
            <div class="row">
				<div class="col-lg-4">
                    <div class="ha-text">
                        <h2>TRACKS</h2>
                        
                        <ul class="list-group">
                            <a href="#"><li><span class="icon_check"></span> Plastic Surgery</li></a>
                            <a href="#"><li><span class="icon_check"></span> Abdominoplaty</li></a>
                            <a href="#"><li><span class="icon_check"></span> Body Contouring And Lifting</li></a>
                            <a href="#"><li><span class="icon_check"></span> Breast Reconstruction</li></a>
                            <a href="#"><li><span class="icon_check"></span> Challenges In Blepharoplasty</li></a>
                            <a href="#"><li><span class="icon_check"></span> Cosmetic Surgery</li></a>
                            <a href="#"><li><span class="icon_check"></span> Rhinoplasty And Otoplasty</li></a>
                            <a href="#"><li><span class="icon_check"></span> Vaginal Rejuvenation</li></a>
                            <a href="#"><li><span class="icon_check"></span> Vaginoplasty</li></a>
                        </ul>
						
                        <!-- <a href="#" class="ha-btn">Discover Now</a> -->
                    </div>
                </div>
                <div class="col-lg-4" style="background: none;">
                    <div class="">
                        <img src="img/h-about.jpg" alt="" style="padding-top: 80px;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ha-text">
                        <h2>About Conference</h2>
                        <!-- p>When I first got into the online advertising business, I was looking for the magical
                            combination that would put my website into the top search engine rankings, catapult me to
                            the forefront of the minds or individuals looking to buy my product, and generally make me
                            rich beyond my wildest dreams! After succeeding in the business for this long, I’m able to
                            look back on my old self with this kind of thinking and shake my head.</p> -->
                        <ul>
                            <li>
                                <span class="icon_check"></span>
                                <a href="#" class="ha-btn">About conference</a>
                            </li>
                            <br>
                            <li>
                                <span class="icon_check"></span>
                                <a href="#" class="ha-btn">Market report</a>
                            </li>
                            <br>
                            <li>
                                <span class="icon_check"></span>
                                <a href="#" class="ha-btn">Learn more</a>
                            </li>

                            <!-- <li><span class="icon_check"></span> Write On Your Business Card</li>
                            <li><span class="icon_check"></span> Advertising Outdoors</li>
                            <li><span class="icon_check"></span> Effective Advertising Pointers</li>
                            <li><span class="icon_check"></span> Kook 2 Directory Add Url Free</li>-->
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home About Section End -->

    <!-- Team Member Section Begin -->
    <section class="team-member-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Who’s speaking</h2>
                        <p>These are our communicators, you can see each person information</p>
                    </div>
                </div>
            </div>
        </div>

        <?php 
            $query = mysqli_query($db->conn, "select * from speaker");
            if(mysqli_num_rows($query) > 0) {
                while($row = mysqli_fetch_assoc($query)){
        ?>
        <div class="member-item set-bg" data-setbg="./admin/assets/uploads/<?=$row['image']?>">
            <div class="mi-social" style="top:0">
                <div class="mi-social-inner bg-gradient">
                    <!-- <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a> -->
                    <h5 style="color: #fff;">Speaker</h5>
                </div>
            </div>
            <div class="mi-text" style="left:20px">
                <h5><?=$row['name']?></h5>
                <span><?=$row['type']?></span>
            </div>
        </div>

    <?php  } } ?>
        
    </section>
    <!-- Team Member Section End -->

    <!-- Schedule Section Begin -->
    <section class="schedule-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our Schedule</h2>
                        <p>Do not miss anything topic about the event</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <h5>OCM (Chair/Co-Chair)</h5>
                                    <!-- <p>May 04, 2019</p> -->
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <h5>Keynote (Speakers)</h5>
                                    <!-- <p>May 05, 2019</p> -->
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    <h5>Speakers(Oral)</h5>
                                    <!-- <p>May 06, 2019</p> -->
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                    <h5>Poster (Presentations)</h5>
                                    <!-- <p>May 07, 2019</p> -->
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">
                                    <h5>Young Research Forum</h5>
                                    <!-- <p>May 08, 2019</p> -->
                                </a>
                            </li>
                        </ul><!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Dealing with Difficult People</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>V7 Digital Photo Printing</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Beyond The Naked Eye</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-4.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Influencing The Influencer</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Dealing with Easy People</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>V7 Digital Photo Printing</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Beyond The Naked Eye</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-4.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Influencing The Influencer</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Dealing with Intermediate People</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>V7 Digital Photo Printing</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Beyond The Naked Eye</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-4.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Influencing The Influencer</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Dealing with Expert People</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>V7 Digital Photo Printing</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Beyond The Naked Eye</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-4.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Influencing The Influencer</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-5" role="tabpanel">
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Dealing with Too Difficult People</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>V7 Digital Photo Printing</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Beyond The Naked Eye</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-4.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Influencing The Influencer</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Schedule Section End -->

    <!-- Pricing Section Begin -->
    <!--<section class="pricing-section set-bg spad" data-setbg="img/pricing-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Ticket Pricing</h2>
                        <p>Get your event ticket plan</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="price-item">
                        <h4>1 Day Pass</h4>
                        <div class="pi-price">
                            <h2><span>$</span>129</h2>
                        </div>
                        <ul>
                            <li>One Day Conference Ticket</li>
                            <li>Coffee-break</li>
                            <li>Lunch and Networking</li>
                            <li>Keynote talk</li>
                            <li>Talk to the Editors Session</li>
                        </ul>
                        <a href="#" class="price-btn">Get Ticket <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="price-item top-rated">
                        <div class="tr-tag">
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>Full Pass</h4>
                        <div class="pi-price">
                            <h2><span>$</span>199</h2>
                        </div>
                        <ul>
                            <li>One Day Conference Ticket</li>
                            <li>Coffee-break</li>
                            <li>Lunch and Networking</li>
                            <li>Keynote talk</li>
                            <li>Talk to the Editors Session</li>
                            <li>Lunch and Networking</li>
                            <li>Keynote talk</li>
                        </ul>
                        <a href="#" class="price-btn">Get Ticket <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="price-item">
                        <h4>Group Pass</h4>
                        <div class="pi-price">
                            <h2><span>$</span>79</h2>
                        </div>
                        <ul>
                            <li>One Day Conference Ticket</li>
                            <li>Coffee-break</li>
                            <li>Lunch and Networking</li>
                            <li>Keynote talk</li>
                            <li>Talk to the Editors Session</li>
                        </ul>
                        <a href="#" class="price-btn">Get Ticket <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Pricing Section End -->

    <!-- latest BLog Section Begin -->
    <!--<section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Latest News</h2>
                        <p>Do not miss anything topic abput the event</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="latest-item set-bg large-item" data-setbg="img/blog/latest-b/latest-1.jpg">
                        <div class="li-tag">Marketing</div>
                        <div class="li-text">
                            <h4><a href="./blog-details.html">Improve You Business Cards And Enchan Your Sales</a></h4>
                            <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="latest-item set-bg" data-setbg="img/blog/latest-b/latest-2.jpg">
                        <div class="li-tag">Experience</div>
                        <div class="li-text">
                            <h5><a href="./blog-details.html">All users on MySpace will know that there are millions of people out there.</a></h5>
                            <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                        </div>
                    </div>
                    <div class="latest-item set-bg" data-setbg="img/blog/latest-b/latest-3.jpg">
                        <div class="li-tag">Marketing</div>
                        <div class="li-text">
                            <h5><a href="./blog-details.html">A Pocket PC is a handheld computer, which features many of the same capabilities.</a></h5>
                            <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- latest BLog Section End -->

    <!-- Newslatter Section Begin -->
    <section class="newslatter-section">
        <div class="container">
            <div class="newslatter-inner set-bg" data-setbg="img/newslatter-bg.jpg">
                <div class="ni-text">
                    <h3>Want to be a Speaker</h3>
                    <p>Hurry up! Submit your abstract now and become speaker of the conference</p>
                </div>
                <form action="schedule.php" class="ni-form">
                    <input type="text" placeholder="Submit your Abstract">
                    <button type="submit">Abstract</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Newslatter Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <!-- <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Location</h2>
                        <p>Get directions to our event center</p>
                    </div>
                    <div class="cs-text">
                        <div class="ct-address">
                            <span>Address:</span>
                            <p>Pillar no 50 Hyderabad <br />INDIA</p>
                        </div>
                        <ul>
                            <li>
                                <span>Phone:</span>
                                +91 98765443221
                            </li>
                            <li>
                                <span>Email:</span>
                                info@imc.com
                            </li>
                        </ul>
                        <div class="ct-links">
                            <span>Website:</span>
                            <p>https://imc.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cs-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52901.38789495531!2d-118.19465514866786!3d34.03523211493029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2cf71ad83ff9f%3A0x518b28657f4543b7!2sEast%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1579763856144!5m2!1sen!2sbd"
                            height="400" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- Contact Section End -->

<?php 
    include 'footer.php'
?>