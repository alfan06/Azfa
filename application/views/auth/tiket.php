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
</div>