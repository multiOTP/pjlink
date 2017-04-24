<?php
  require_once('pjlink.class.php');

  $pjlink = new PJLink();

  $pjlink->setDevice("192.168.0.1", "my_pjlink_pass", 10, 4352);

  if (false === $pjlink->powerOn()) {
    echo $pjlink->getError();
  } elseif (false === $pjlink->setInput(11)) {
    echo $pjlink->getError();
  }

  echo "Device: ".$pjlink->getManufactureName().", ".$pjlink->getProductName()."<br />\n";
?>