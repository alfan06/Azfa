<?php
$uri = 'https://api.football-data.org/v2/teams/66/matches?status=SCHEDULED';
$opts = array(
  'http' => array(
    'method' => "GET",
    'header' => "X-Auth-Token: 12dd0633a47645b98bf5db455c7ed2bc"
  )
);
$stream_context = stream_context_create($opts);
$response = file_get_contents($uri, false, $stream_context);
$json = json_decode($response, true);
$match = $json['matches'];
?>
<div class="container">
  <br><br><br><br>
  <div class="text text-center">
    <div class="team-name pl-3 mt-2">
      <?php $i = 0;
      foreach ($match as $value) :
        if ($i == 1) {
          break;
        } else { ?>
          <h3><span><?php echo $value['homeTeam']['name'] ?></span> VS <span><?php echo $value['awayTeam']['name'] ?></span></h3>
      <?php }
        $i++;
      endforeach; ?>
    </div>
  </div>
  <form action="" method="POST">
    <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $_SESSION['id_user'] ?>">
    <?php $i = 0;
    foreach ($match as $value) :
      if ($i == 1) {
        break;
      } else { ?>
        <input type="hidden" name="pertandingan" id="pertandingan" class="form-control" value="<?php echo $value['homeTeam']['name'] ?> VS <?php echo $value['awayTeam']['name'] ?>">
    <?php }
      $i++;
    endforeach; ?>
    <div class="control-group form-group">
      <div class="controls">
        <label>Jenis Tiket : </label>
        <select class="form-control" name="id_tiket" id="id_tiket">
          <option></option>
          <?php foreach ($jenisTiket as $value) : ?>
            <option>
              <?= $value->id_tiket ?> -- <?= $value->jenis_tiket ?> (Rp. <?= $value->harga ?>)
            </option>
          <?php endforeach ?>
        </select>
        <p class="help-block"></p>
      </div>
    </div>
    <div class="control-group form-group">
      <div class="controls">
        <label>Jumlah:</label>
        <input type="number" class="form-control" id="jumlah" name="jumlah" required data-validation-required-message="Please enter your phone number.">
      </div>
    </div>
    <div class="control-group form-group">
      <div class="controls">
        <label>Phone Number:</label>
        <input type="tel" class="form-control" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
      </div>
    </div>
    <div id="success"></div>
    <!-- For success/fail messages -->
    <button type="submit" class="btn btn-primary btn-block mb-4" id="sendMessageButton">Send Message</button>
  </form>
  <?php if ($this->session->flashdata('flash-data')) : ?>
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
      Ticket Buyed <?= $this->session->flashdata('flash-data'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>
  <form id="frmStripePayment" action="" method="post">
    <div class="field-row">
      <label>Card Holder Name</label> <span id="card-holder-name-info" class="info"></span><br>
      <input type="text" id="name" name="name" class="demoInputBox">
    </div>
    <div class="field-row">
      <label>Email</label> <span id="email-info" class="info"></span><br> <input type="text" id="email" name="email" class="demoInputBox">
    </div>
    <div class="field-row">
      <label>Card Number</label> <span id="card-number-info" class="info"></span><br> <input type="text" id="card-number" name="card-number" class="demoInputBox">
    </div>
    <div class="field-row">
      <div class="contact-row column-right">
        <label>Expiry Month / Year</label> <span id="userEmail-info" class="info"></span><br>
        <select name="month" id="month" class="demoSelectBox">
          <option value="08">08</option>
          <option value="09">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select> <select name="year" id="year" class="demoSelectBox">
          <option value="18">2018</option>
          <option value="19">2019</option>
          <option value="20">2020</option>
          <option value="21">2021</option>
          <option value="22">2022</option>
          <option value="23">2023</option>
          <option value="24">2024</option>
          <option value="25">2025</option>
          <option value="26">2026</option>
          <option value="27">2027</option>
          <option value="28">2028</option>
          <option value="29">2029</option>
          <option value="30">2030</option>
        </select>
      </div>
      <div class="contact-row cvv-box">
        <label>CVC</label> <span id="cvv-info" class="info"></span><br> <input type="text" name="cvc" id="cvc" class="demoInputBox cvv-input">
      </div>
    </div>
    <div>
      <input type="submit" name="pay_now" value="Submit" id="submit-btn" class="btnAction" onClick="stripePay(event);">

      <div id="loader">
        <img alt="loader" src="LoaderIcon.gif">
      </div>
    </div>
    <input type='hidden' name='amount' value='0.5'> <input type='hidden' name='currency_code' value='USD'> <input type='hidden' name='item_name' value='Test Product'>
    <input type='hidden' name='item_number' value='PHPPOTEG#1'>
  </form>
</div>