<?php
$uri = 'http://api.football-data.org/v2/competitions/2021/standings';
$uri2 = 'http://api.football-data.org/v2/teams/66';
$uri3 = 'https://api.football-data.org/v2/teams/66/matches?status=FINISHED';
$uri4 = 'https://api.football-data.org/v2/teams/66/matches?status=SCHEDULED';
$opts = array(
    'http' => array(
        'method' => "GET",
        'header' => "X-Auth-Token: 12dd0633a47645b98bf5db455c7ed2bc"
    )
);
// $reqPrefs['http']['method'] = 'GET';
// $reqPrefs['http']['header'] = 'X-Auth-Token: 12dd0633a47645b98bf5db455c7ed2bc';
$stream_context = stream_context_create($opts);
$response = file_get_contents($uri, false, $stream_context);
$response2 = file_get_contents($uri2, false, $stream_context);
$response3 = file_get_contents($uri3, false, $stream_context);
$response4 = file_get_contents($uri4, false, $stream_context);
// $matches = var_dump($response);
$json = json_decode($response, true);
$json2 = json_decode($response2, true);
$json3 = json_decode($response3, true);
$json4 = json_decode($response4, true);

$standing = $json['standings'][0]['table'];
$teams = $json2['squad'];
$match = $json4['matches'];
$recent = $json3['matches'];

// $image = array('assets/index/images/GGMU/Aaron_Wan-Bissaka.png', 'assets/index/images/GGMU/Alex_Telles.png');
$array = array(
    0 => 'assets/index/images/GGMU/David de Gea.png',
    1 => 'assets/index/images/GGMU/sergio romero.png',
    2 => 'assets/index/images/GGMU/Dean Henderson.png',
    3 => 'assets/index/images/GGMU/Joel  Pereira.png',
    4 => 'assets/index/images/GGMU/Lee grant.png',
    5 => 'assets/index/images/GGMU/marcos rojo.png',
    6 => 'assets/index/images/GGMU/Harry Maguire.png',
    7 => 'assets/index/images/GGMU/Victor Lindelof.png',
    8 => 'assets/index/images/GGMU/Axel Tuanzebe.png',
    9 => 'assets/index/images/GGMU/Phil Jones.png',
    10 => 'assets/index/images/GGMU/Luke Shaw.png',
    11 => 'assets/index/images/GGMU/Eric Bailly.png',
    12 => 'assets/index/images/GGMU/Timothy Fosu-Mensah.png',
    13 => 'assets/index/images/GGMU/Aaron Wan-Bissaka.png',
    14 => 'assets/index/images/GGMU/Alex Telles.png',
    15 => 'assets/index/images/GGMU/Brandon Williams.png',
    16 => 'assets/index/images/GGMU/teden mengi.png',
    17 => 'assets/index/images/GGMU/Fred.png',
    18 => 'assets/index/images/GGMU/Bruno Fernandes.png',
    19 => 'assets/index/images/GGMU/Jesse Lingard.png',
    20 => 'assets/index/images/GGMU/Paul  Pogba.png',
    21 => 'assets/index/images/GGMU/Nemanja Matic.png',
    22 => 'assets/index/images/GGMU/Donny van de Beek.png',
    23 => 'assets/index/images/GGMU/Scott McTominay.png',
    24 => 'assets/index/images/GGMU/Juan Mata.png',
    25 => 'assets/index/images/GGMU/Daniel James.png',
    26 => 'assets/index/images/GGMU/Tahith Chong.png',
    27 => 'assets/index/images/GGMU/Edinson Cavani.png',
    28 => 'assets/index/images/GGMU/Marcus Rashford.png',
    29 => 'assets/index/images/GGMU/Anthony Martial.png',
    30 => 'assets/index/images/GGMU/Odion Ighalo.png',
    31 => 'assets/index/images/GGMU/Mason Greenwood.png',
    32 => 'assets/index/images/GGMU/Facundo Pellistri.png',
    33 => 'assets/index/images/GGMU/OLE.png'
);
?>
<div class="hero-wrap js-fullheight" style="background-image: url('assets/index/images/aa.jpg');" data-stellar-background-ratio="1">
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Welcome to Azfa Tickets</h1>
                <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">You can buy Manchester United Tickets.</p>
                <p class="d-flex align-items-center">
                    <a href="https://www.youtube.com/watch?v=-jerCpS2GFM" class="icon-video popup-vimeo d-flex justify-content-center align-items-center mr-3">
                        <span class="ion-ios-play"></span>
                    </a>

                    <span class="watch">Watch Games</span>
                </p>
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
                        <div class="pb-4 pb-lg-0 col-md-4">
                            <div class="text d-flex">
                                <div class="team-logo d-flex">
                                    <img class="img" src="<?= base_url('assets/index/images/premierLeague.png'); ?>" alt="">
                                </div>
                                <div class="team-name pl-3 mt-2">
                                    <?php $i = 0;
                                    foreach ($match as $value) :
                                        if ($i == 1) {
                                            break;
                                        } else { ?>
                                            <h3><span><?php echo $value['homeTeam']['name'] ?></span> <span><?php echo $value['awayTeam']['name'] ?></span></h3>
                                        <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="pb-4 pb-lg-0 col-md-2 mt-2">
                            <div class="text">
                                <h3 class="league"><?php echo $value['competition']['name']; ?></h3>
                                <span>Matchday : <?php echo $value['matchday']; ?></span>
                            </div>
                        </div>
                    <?php $i++;
                                    endforeach; ?>
                    <div class="col-md-6 pb-4 pb-lg-0 col-lg-4 mt-2">
                        <div class="text">
                            <div id="timer" class="d-flex mb-0">
                                <div class="time" id="days"></div>
                                <div class="time pl-3" id="hours"></div>
                                <div class="time pl-3" id="minutes"></div>
                                <div class="time pl-3" id="seconds"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pb-4 pb-lg-0 col-lg-2 mt-2">
                        <?php if ($this->session->userdata('user')) { ?>
                            <?php require_once('stripe/config.php') ?>
                            <form action="<?= base_url(); ?>auth/stripePayment" method="post">
                                <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="<?php echo $stripe['publishable_key']; ?>" data-description="Access for a year" data-amount="5000" data-locale="auto"></script>
                            </form>
                        <?php } else { ?>
                            <div class="text">
                                <p class="mb-0"><a href="#" class="btn btn-primary py-3">Login to Buy</a></p>
                            </div>
                        <?php } ?>
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
                            <div class="img logo order-sm-last" style="background-image: url('assets/index/images/team-2.jpg');"></div>
                            <div class="text-center px-1 px-md-3 desc">
                                <h3 class="score lost"><span>1</span></h3>
                                <h4 class="team-name">Mighty Falcons</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch">
                <!-- <div class="img d-flex align-items-center justify-content-center py-5" style="background-image: url('assets/index/images/bg_2.jpg'); width: 100%;"> -->
                    <p class="text-center mb-0 py-5">
                        <!-- <a href="https://youtu.be/5wZzMyf6wLM" class="icon-video-2 popup-vimeo d-flex justify-content-center align-items-center mr-3"> -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/yX8f5bRYtXI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <span class="ion-ios-play"></span>
                        </a>
                        <small style="color: rgba(255,255,255,1); font-size: 16px;">Watch Highlights</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-game-schedule ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading-section ftco-animate mb-4">
                <span class="subheading text-center">Game Schedule</span>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12 carousel-game-schedule owl-carousel">
                <?php foreach ($match as $value) : ?>
                    <div class="item">
                        <div class="game-schedule">
                            <div class="sport-team d-flex align-items-center">
                                <?php if ($value['competition']['name'] == 'UEFA Champions League') { ?>
                                    <img class="img logo" src="<?= base_url('assets/index/images/UEFA_ChampionsLeague.png') ?>" alt="">
                                <?php } else { ?>
                                    <img class="img logo" src="<?= base_url('assets/index/images/PremierLeague.png'); ?>" alt="">
                                <?php } ?>
                                <div class="pl-4 desc">
                                    <span class="venue"><?php echo $value['competition']['name']; ?></span>
                                    <h4 class="team-name"><?php echo $value['homeTeam']['name']; ?> <br> <?php echo $value['awayTeam']['name']; ?></h4>
                                    <span class="date"><?php echo date("Y-m-d H:i", strtotime($value['utcDate'])); ?></span>
                                    <span class="date">Matchday : <?php echo $value['matchday']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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
                        <td><img src="<?= $value['team']['crestUrl'] ?>" alt="" style="width:50px;height:50px"><?php echo ' ' . $value['team']['name']; ?></td>
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
                    <div class="icon"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3"></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex">
                    <div class="icon"><span class="icon icon-phone"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3"><a href="<?= base_url(); ?>auth/contact">Phone</a></h3>
                        <p>If u have compliment,u can send call to our admin</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex">
                    <div class="icon"><span class="icon icon-envelope"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3"><a href="<?= base_url(); ?>auth/contact">Email</a></h3>
                        <p>If u have anything to ask,u can send email to our admin</p>
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
                    <?php $i = 0;
                    foreach ($teams as $value) : ?>
                        <div class="item">
                            <div class="team-wrap text-center">
                                <div class="img"><img class="img" src="<?= base_url($array[$i]); ?>" alt=""></div>
                                <div class="text">
                                    <h3 class="mb-0"><?php echo $value['name']; ?></h3>
                                    <span class="position"><?php echo $value['position']; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php $i++;
                    endforeach; ?>
                </div>
            </div>
        </div>
</section>

<section class="ftco-section testimony-section" style="background-image: url('assets/index/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Our Legend</span>
                <h2 class="mb-4">Theater of Dream</h2>
            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-7">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap text-center py-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url('assets/index/images/Sir-Alex.jpg');">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text p-3">
                                <p class="mb-4">"You can't always come in shouting and screaming. That doesn't work. No one likes to get criticised. But in the football dressing room, it's necessary that you point out your players' mistakes. I do it right after the game. I don't wait until Monday, i do it, and it's finished. I'm on to the next match. There is no point in criticising a player forever".</p>
                                <p class="name">Sir Alex Ferguson</p>
                                <span class="position">Ex-Coach</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center py-4 pb-5">
                            <div class="user-img mb-4" style="background-image:url('assets/index/images/OLE.png')">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text p-3">
                                <p class="mb-4">Whatever competition you face, the only goal is to win</p>
                                <p class="name">Ole Gunnar Solksjaer</p>
                                <span class="position">Coach</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-subscribe img" style="background-image: url('assets/index/images/aa.jpg');">
    <div class="overlay">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 text-wrap text-center heading-section heading-section-white ftco-animate">
                    <!-- <h2>Subcribe to our upcoming match</h2> -->
                    <h2 class="mb-4">THE <span>RED</span> DEVILS</h2>
                    <!-- <div class="row d-flex justify-content-center mt-4 mb-4">
                        <div class="col-md-10">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                    <input type="submit" value="Subscribe" class="submit px-3">
                                </div>
                            </form>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>