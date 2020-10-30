<?php
    $uri = 'http://api.football-data.org/v2/competitions/2021/standings';
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token: 12dd0633a47645b98bf5db455c7ed2bc';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
    // $matches = var_dump($response);
    $json = json_decode($response, true);
    
    $standing = $json['standings'][0]['table'];
?>
<div class="hero-wrap js-fullheight" style="background-image: url('assets/index/images/bg1.jpg');" data-stellar-background-ratio="1">
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
                <h1 style="color:Black" class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6}">Selamat Datang di AzfaTiket</h1>
                <p style="color:Black" class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><b>Melayani pembelian tiket secara online.</b></p>
                <!--<p class="d-flex align-items-center">
                    <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center mr-3">
                        <span class="ion-ios-play"></span>
                    </a>
                    <span class="watch">Watch Games</span>
                </p>-->
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="game-wrap-1 ftco-animate p-4">
                    <div class="row p-2">
                        <div class="col-md-6 pb-4 pb-lg-0 col-lg-3">
                            <div class="text d-flex">
                                <div class="team-logo d-flex">
                                    <img class="img" src="<?= base_url('assets/index/images/team-1.jpg'); ?>" alt="">
                                    <img class="img img-2" src="<?= base_url('assets/index/images/team-2.jpg'); ?>" alt="">
                                </div>
                                <div class="team-name pl-3">
                                    <h3><span>Pusamania</span> <span>Barito FC</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pb-4 pb-lg-0 col-lg-3">
                            <div class="text">
                                <div class="img"></div>
                                <h3 class="league">Shopee Liga 1</h3>
                                <span>Semi-Final</span>
                            </div>
                        </div>
                        <div class="col-md-6 pb-4 pb-lg-0 col-lg-4">
                            <div class="text">
                                <div id="timer" class="d-flex mb-0">
                                    <div class="time" id="days"></div>
                                    <div class="time pl-3" id="hours"></div>
                                    <div class="time pl-3" id="minutes"></div>
                                    <div class="time pl-3" id="seconds"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pb-4 pb-lg-0 col-lg-2">
                            <div class="text">
                                <p class="mb-0"><a href="#" class="btn btn-primary py-3">Buy Tickets</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="heading-section ftco-animate">
                    <span class="subheading">Game Report</span>
                    <h2 class="mb-4">Great Win In Final Game</h2>
                </div>
                <div class="scoreboard mb-5 mb-lg-0">
                    <div class="divider text-center"><span>Tue. Feb 21, 2019; FIFA Champions League</span></div>
                    <div class="d-sm-flex mb-4">
                        <div class="sport-team d-flex align-items-center">
                            <div class="img logo" style="background-image: url('assets/index/images/team-1.jpg');"></div>
                            <div class="text-center px-1 px-md-3 desc">
                                <h3 class="score win"><span>3</span></h3>
                                <h4 class="team-name">Knight Warrior</h4>
                            </div>
                        </div>
                        <div class="sport-team d-flex align-items-center">
                            <div class="img logo order-sm-last" style="background-image: url('assets/index/images/team-2.jpg');">
                            <div class="text-center px-1 px-md-3 desc">
                                <h3 class="score lost"><span>1</span></h3>
                                <h4 class="team-name">Mighty Falcons</h4>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <p><a href="#" class="btn btn-primary">More Details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch">
                <img class="img d-flex align-items-center justify-content-center py-5" style="width: 100%;" src="<?= base_url('assets/index/images/victory.jpg'); ?>" alt="">
                <p class="text-center mb-0 py-5">
                    <a href="https://vimeo.com/45830194" class="icon-video-2 popup-vimeo d-flex justify-content-center align-items-center mr-3">
                        <span class="ion-ios-play"></span>
                    </a>
                    <small style="color: rgba(255,255,255,1); font-size: 16px;">Watch Highlights</small>
                </p>
                </img>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-game-schedule ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading-section ftco-animate mb-4">
                <span class="subheading">Game Schedule</span>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12 carousel-game-schedule owl-carousel">
                <div class="item">
                    <div class="game-schedule">
                        <div class="sport-team d-flex align-items-center">
                            <img class="img logo" src="<?= base_url('assets/index/images/team-1.jpg'); ?>" alt="">
                            <div class="pl-4 desc">
                                <span class="venue">Home @ Arena</span>
                                <h4 class="team-name">Knight Warrior</h4>
                                <span class="date">April 17, 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="game-schedule">
                        <div class="sport-team d-flex align-items-center">
                            <div class="img logo" style="background-image: <?= base_url('assets/index/images/team-2.jpg') ?>;"></div>
                            <div class="pl-4 desc">
                                <span class="venue">Home @ Arena</span>
                                <h4 class="team-name">Knight Warrior</h4>
                                <span class="date">April 17, 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="game-schedule">
                        <div class="sport-team d-flex align-items-center">
                            <img class="img logo" src="<?= base_url('assets/index/images/team-3.jpg'); ?>" alt="">
                            <div class="pl-4 desc">
                                <span class="venue">Home @ Arena</span>
                                <h4 class="team-name">Knight Warrior</h4>
                                <span class="date">April 17, 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="game-schedule">
                        <div class="sport-team d-flex align-items-center">
                            <img class="img logo" src="<?= base_url('assets/index/images/team-4.jpg'); ?>" alt="">
                            <div class="pl-4 desc">
                                <span class="venue">Home @ Arena</span>
                                <h4 class="team-name">Knight Warrior</h4>
                                <span class="date">April 17, 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="game-schedule">
                        <div class="sport-team d-flex align-items-center">
                            <img class="img logo" style="<?= base_url('assets/index/images/team-5.jpg'); ?>">
                            <div class="pl-4 desc">
                                <span class="venue">Home @ Arena</span>
                                <h4 class="team-name">Knight Warrior</h4>
                                <span class="date">April 17, 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="game-schedule">
                        <div class="sport-team d-flex align-items-center">
                            <img class="img logo" src="<?= base_url('assets/index/images/team-6.jpg'); ?>" alt="">
                            <div class="pl-4 desc">
                                <span class="venue">Home @ Arena</span>
                                <h4 class="team-name">Knight Warrior</h4>
                                <span class="date">April 17, 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-game-schedule ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading-section ftco-animate mb-4">
                <span class="subheading text-center">Match Standings Premiere League</span>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Team</th>
                    <th>Match Played</th>
                    <th>W</th>
                    <th>D</th>
                    <th>L</th>
                    <th>GF</th>
                    <th>GA</th>
                    <th>GD</th>
                    <th>Points</th>
                    <th>Form</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($standing as $value) : ?>
                    <tr>
                        <td><?php echo $value['position']; ?></td>
                        <td><img src="<?= $value['team']['crestUrl'] ?>" alt="" style="width:50px;height:50px"><?php echo ' '.$value['team']['name']; ?></td>
                        <td><?php echo $value['playedGames'] ?></td>
                        <td><?php echo $value['won'] ?></td>
                        <td><?php echo $value['draw'] ?></td>
                        <td><?php echo $value['lost'] ?></td>
                        <td><?php echo $value['goalsFor'] ?></td>
                        <td><?php echo $value['goalsAgainst'] ?></td>
                        <td><?php echo $value['goalDifference'] ?></td>
                        <td><?php echo $value['points'] ?></td>
                        <td><?php echo $value['form'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<section class="ftco-section services-section bg-light">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex">
                    <div class="icon"><span class="flaticon-american-football"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Senior Team</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex">
                    <div class="icon"><span class="flaticon-american-football-1"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">For Kids</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex">
                    <div class="icon"><span class="flaticon-lockers"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Football Schools</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex">
                    <div class="icon"><span class="flaticon-strategy"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Basic Tactics</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-team img" style="background-image:url(assets/index/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-6 heading-section heading-section-white text-center ftco-animate">
                <span class="subheading">Team Squad</span>
                <h2 class="mb-4">Our Team <span>Squad</span></h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="carousel-team owl-carousel">
                    <div class="item">
                        <div class="team-wrap text-center">
                            <img class="img" src="<?= base_url('assets/index/images/staff-1.jpg'); ?>" alt="">
                            <div class="text">
                                <h3 class="mb-0">David Scott</h3>
                                <span class="position">Wide Receiver</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-wrap text-center">
                            <img class="img" src="<?= base_url('assets/index/images/staff-2.jpg'); ?>" alt=""></img>
                            <div class="text">
                                <h3 class="mb-0">David Scott</h3>
                                <span class="position">Tight End</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-wrap text-center">
                            <img class="img" src="<?= base_url('assets/index/images/staff-3.jpg'); ?>" alt="">
                            <div class="text">
                                <h3 class="mb-0">David Scott</h3>
                                <span class="position">Defensive</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-wrap text-center">
                            <img class="img" src="<?= base_url('assets/index/images/staff-4.jpg'); ?>" alt="">
                            <div class="text">
                                <h3 class="mb-0">David Scott</h3>
                                <span class="position">Quarterback</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-wrap text-center">
                            <img class="img" src="<?= base_url('assets/index/images/staff-5.jpg'); ?>" alt="">
                            <div class="text">
                                <h3 class="mb-0">David Scott</h3>
                                <span class="position">Runing Back</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-wrap text-center">
                            <img class="img" src="<?= base_url('assets/index/images/staff-6.jpg'); ?>" alt="">
                            <div class="text">
                                <h3 class="mb-0">David Scott</h3>
                                <span class="position">Center</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-wrap text-center">
                            <img class="img" src="<?= base_url('assets/index/images/staff-7.jpg'); ?>" alt="">
                            <div class="text">
                                <h3 class="mb-0">David Scott</h3>
                                <span class="position">Offensive Guard</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <img class="img d-flex align-self-stretch" src="<?= base_url('assets/index/images/about.jpg'); ?>" alt="">
            </div>
            <div class="col-md-6 pl-lg-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h2 class="mb-4">About the Knights Team</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center py-3 bg-light mb-4">
                            <div class="text">
                                <strong class="number" data-number="100">0</strong>
                                <span>Game Played</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center py-3 bg-light mb-4">
                            <div class="text">
                                <strong class="number" data-number="10">0</strong>
                                <span>Coaches</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center py-3 bg-light mb-4">
                            <div class="text">
                                <strong class="number" data-number="20">0</strong>
                                <span>Trophies</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center py-3 bg-light mb-4">
                            <div class="text">
                                <strong class="number" data-number="80">0</strong>
                                <span>Members</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section testimony-section" style="background-image: url('assets/index/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-4">Happy Viewers</h2>
            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-7">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap text-center py-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url('assets/index/images/person_1.jpg');">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Arthur Browner</p>
                                <span class="position">Viewer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center py-4 pb-5">
                            <div class="user-img mb-4" style="background-image:url('assets/index/images/person_2.jpg')">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Arthur Browner</p>
                                <span class="position">Viewer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center py-4 pb-5">
                            <div class="user-img mb-4" style="background-image:url('assets/index/images/person_3.jpg')">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Arthur Browner</p>
                                <span class="position">Viewer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center py-4 pb-5">
                            <div class="user-img mb-4" style="background-image:url('assets/index/images/person_4.jpg');">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Arthur Browner</p>
                                <span class="position">Viewer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center py-4 pb-5">
                            <div class="user-img mb-4" style="background-image:url('assets/index/images/person_3.jpg');">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Arthur Browner</p>
                                <span class="position">Viewer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Blog</span>
                <h2>Recent News</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="blog-single.html" class="block-20" style="background-image: url('assets/index/images/image_1.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center p-2 pr-3 mb-4 topp">
                            <div class="one">
                                <span class="day mr-1">08</span>
                            </div>
                            <div class="two">
                                <span class="yr">2019</span>
                                <span class="mos">March</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="blog-single.html" class="block-20" style="background-image: url('assets/index/images/image_2.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center p-2 pr-3 mb-4 topp">
                            <div class="one">
                                <span class="day mr-1">07</span>
                            </div>
                            <div class="two">
                                <span class="yr">2019</span>
                                <span class="mos">March</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('assets/index/images/image_3.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center p-2 mb-4 topp">
                            <div class="one">
                                <span class="day mr-1">07</span>
                            </div>
                            <div class="two">
                                <span class="yr">2019</span>
                                <span class="mos">March</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('assets/index/images/image_4.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center p-2 pr-3 mb-4 topp">
                            <div class="one">
                                <span class="day mr-1">06</span>
                            </div>
                            <div class="two">
                                <span class="yr">2019</span>
                                <span class="mos">March</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-subscribe img" style="background-image: url('assets/index/images/bg_1.jpg');">
    <div class="overlay">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 text-wrap text-center heading-section heading-section-white ftco-animate">
                    <h2>Subcribe to our upcoming match</h2>
                    <div class="row d-flex justify-content-center mt-4 mb-4">
                        <div class="col-md-10">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                    <input type="submit" value="Subscribe" class="submit px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>