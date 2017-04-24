<?php
  require_once('pjlink.class.php');

  $pjlink = new PJLink();

  if (false === $pjlink->powerOn("192.168.0.1")) {
    echo $pjlink->getError();
  } elseif (false === $pjlink->setInput(11, "192.168.0.1")) {
    echo $pjlink->getError();
  }
?>