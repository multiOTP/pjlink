<?php

  /* This test can be used against the test projector emulator */
  /* http://pjlink.jbmia.or.jp/english/data_cl2/PJLink_5-2.zip */
  
  require_once('pjlink.class.php');
  
  $host = "127.0.0.1";
  $password = "JBMIAProjectorLink":
  $wait = 10;
  $input = 22;
  

  $pjlink = new PJLink();

  $pjlink->setDevice($host, $password);
  
  if (false === ($result = $pjlink->powerOn())) {
    echo $pjlink->getError();
  } else {
  	echo "Device is powered on<br />";
  }

  echo "Waiting $wait seconds...<br />";
  flush();
  sleep($wait);

  if (false === ($result = $pjlink->getPowerState())) {
    echo $pjlink->getError();
  } else {
    echo "Device power status: $result<br />";
  }

  if (false === ($class = $pjlink->getClass())) {
    echo $pjlink->getError();
  } else {
    echo "Device class: $class<br />";
  }

  if (false === ($result = $pjlink->getInputList())) {
    echo $pjlink->getError();
  } else {
    echo "Get input list: $result<br />";
  }
  if (false === ($result = $pjlink->setInput($input))) {
    echo $pjlink->getError();
  } else {
    echo "Set input to $input: $result<br />";
  }
  if (false === ($result = $pjlink->getInput())) {
    echo $pjlink->getError();
  } else {
    echo "Get input: $result<br />";
  }
  if (false === ($result = $pjlink->getOtherInfo())) {
    echo $pjlink->getError();
  } else {
    echo "Other info: $result<br />";
  }
  if (false === ($result = $pjlink->getLampState())) {
    echo $pjlink->getError();
  } else {
    echo "Lamp state: $result (".$pjlink->getResponseText().")<br />";
  }
  if (false === ($result = $pjlink->getManufactureName())) {
    echo $pjlink->getError();
  } else {
    echo "Manufacture name: $result<br />";
  }
  if (false === ($result = $pjlink->getProductName())) {
    echo $pjlink->getError();
  } else {
    echo "Product name: $result<br />";
  }
  if (false === ($result = $pjlink->getOtherInfo())) {
    echo $pjlink->getError();
  } else {
    echo "Other info: $result<br />";
  }
  if (false === ($result = $pjlink->muteVideoAudioOff())) {
    echo $pjlink->getError();
  } else {
    echo "Unmute Video and Audio: $result<br />";
  }
  if (false === ($result = $pjlink->muteVideoAudioOn())) {
    echo $pjlink->getError();
  } else {
    echo "Mute Video and Audio: $result<br />";
  }
  if (false === ($result = $pjlink->muteVideoOff())) {
    echo $pjlink->getError();
  } else {
    echo "Unmute Video: $result<br />";
  }
  if (false === ($result = $pjlink->muteVideoOn())) {
    echo $pjlink->getError();
  } else {
    echo "Mute Video: $result<br />";
  }
  if (false === ($result = $pjlink->muteAudioOff())) {
    echo $pjlink->getError();
  } else {
    echo "Unmute Audio: $result<br />";
  }
  if (false === ($result = $pjlink->muteAudioOn())) {
    echo $pjlink->getError();
  } else {
    echo "Mute Audio: $result<br />";
  }
  if (false === ($result = $pjlink->getMuteState())) {
    echo $pjlink->getError();
  } else {
    echo "Mute state: $result (".$pjlink->getResponseText().")<br />";
  }

  if ("2" == $class) {
    if (false === ($result = $pjlink->getSerialNumber())) {
      echo $pjlink->getError();
    } else {
      echo "Serial number: $result<br />";
    }
    if (false === ($result = $pjlink->getSoftwareVersion())) {
      echo $pjlink->getError();
    } else {
      echo "Software version: $result<br />";
    }
    if (false === ($result = $pjlink->getInputTerminalName($input))) {
      echo $pjlink->getError();
    } else {
      echo "Terminal name for input $input: $result<br />";
    }
    if (false === ($result = $pjlink->getInputResolution())) {
      echo $pjlink->getError();
    } else {
      echo "Input resolution: $result<br />";
    }
    if (false === ($result = $pjlink->getRecommendedResolution())) {
      echo $pjlink->getError();
    } else {
      echo "Recommended resolution: $result<br />";
    }
    if (false === ($result = $pjlink->getFilterUsage())) {
      echo $pjlink->getError();
    } else {
      echo "Filter usage: $result<br />";
    }
    if (false === ($result = $pjlink->getLampReplacementModel())) {
      echo $pjlink->getError();
    } else {
      echo "Lamp replacement Model: $result<br />";
    }
    if (false === ($result = $pjlink->getFilterReplacementModel())) {
      echo $pjlink->getError();
    } else {
      echo "Filter replacement Model: $result<br />";
    }
    if (false === ($result = $pjlink->setSpeakerVolume(1))) {
      echo $pjlink->getError();
    } else {
      echo "Set speaker volume +1: $result<br />";
    }
    if (false === ($result = $pjlink->setSpeakerVolume(1))) {
      echo $pjlink->getError();
    } else {
      echo "Set speaker volume +1: $result<br />";
    }
    if (false === ($result = $pjlink->setSpeakerVolume(0))) {
      echo $pjlink->getError();
    } else {
      echo "Set speaker volume -1: $result<br />";
    }
    if (false === ($result = $pjlink->setMicrophoneVolume(1))) {
      echo $pjlink->getError();
    } else {
      echo "Set microphone volume +1: $result<br />";
    }
    if (false === ($result = $pjlink->setMicrophoneVolume(1))) {
      echo $pjlink->getError();
    } else {
      echo "Set microphone volume +1: $result<br />";
    }
    if (false === ($result = $pjlink->setMicrophoneVolume(0))) {
      echo $pjlink->getError();
    } else {
      echo "Set microphone volume -1: $result<br />";
    }
    if (false === ($result = $pjlink->freezeOn())) {
      echo $pjlink->getError();
    } else {
      echo "Freeze display: $result<br />";
    }
    if (false === ($result = $pjlink->getFreezeState())) {
      echo $pjlink->getError();
    } else {
      echo "Freeze state: $result (".$pjlink->getResponseText().")<br />";
    }
    if (false === ($result = $pjlink->freezeOff())) {
      echo $pjlink->getError();
    } else {
      echo "Unfreeze display: $result<br />";
    }
  }

  if (false === ($result = $pjlink->powerOff())) {
    echo $pjlink->getError();
  } else {
    echo "Device is powered off<br />";
  }
?>