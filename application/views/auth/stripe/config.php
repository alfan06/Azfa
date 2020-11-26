<?php
require_once('vendor/autoload.php');

$stripe = [
  "secret_key"      => "sk_test_51HpasrLAVhtd4sLMLh4zRBIWQ48IJoJjaSnTzuQQ0TBsJ7TbLBaESPYtHjUzINPcKzMVxmiA7bNp5BQ57wCSiHhd00A7tEJh6e",
  "publishable_key" => "pk_test_51HpasrLAVhtd4sLMvfOKGCi8nz7Wn0KPuJimqDV8IAd7Q03yklb9jQy34i6TA8acvtAeGpj0zPnHmggvWCDzeW8l00NrVRi1wM",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);

?>