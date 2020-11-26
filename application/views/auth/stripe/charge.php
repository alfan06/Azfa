<?php
  require_once('config.php');

  $token  = $_POST['stripeToken'];
  $email  = $_POST['stripeEmail'];

  $customer = \Stripe\Customer::create([
      'email' => $email,
      'source'  => $token,
  ]);

  $charge = \Stripe\Charge::create([
      'customer' => $customer->id,
      'amount'   => 3000,
      'currency' => 'usd',
      'description' => 'Football Ticket',
  ]);

  redirect('auth', 'refresh');
?>