Pure PHP PJLink library
=======================

The PJLink PHP class is the lightest pure PHP package available for operating
and controlling data projectors using the PJLink Class1 and Class 2 standard.

PJLink Class1 specifications are available here:
  http://pjlink.jbmia.or.jp/english/data/5-1_PJLink_eng_20131210.pdf

PJLink Class2 specifications are available here:
  http://pjlink.jbmia.or.jp/english/data_cl2/PJLink_5-1.pdf

PJLink test software is available gere:
  http://pjlink.jbmia.or.jp/english/data_cl2/PJLink_5-2.zip

(c) 2017-2019 SysCo systemes de communication sa
http://developer.sysco.ch/php/

Current build: 2.0.0.2 (2019-03-13)

No external file is needed (no PEAR, no PECL, no cURL).


# Change Log
```
2019-03-13 2.0.0.2 tomatow Lower case response are now accepted
2017-09-05 2.0.0.0 SysCo/al First public Class2 support
2017-04-24 1.0.0.1 SysCo/al First public version
2017-04-23 1.0.0.0 SysCo/al Initial implementation
```
 
 
# Licence

  Copyright (c) 2017-2019 SysCo systemes de communication sa
  SysCo (tm) is a trademark of SysCo systemes de communication sa
  (http://www.sysco.ch/)
  All rights reserved.

  PJLink PHP class is free software; you can redistribute it and/or
  modify it under the terms of the GNU Lesser General Public License as
  published by the Free Software Foundation, either version 3 of the License,
  or (at your option) any later version.

  PJLink PHP class is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
  GNU Lesser General Public License for more details.

  You should have received a copy of the GNU Lesser General Public
  License along with PJLink PHP class.
  If not, see <http://www.gnu.org/licenses/>.


# Usage

  Every command send to the projector return false is something is wrong.
  The error message can be detailed by calling the getError() method.

  Public methods available:
```
  # Class1/2 functions
   setClassLevel([$class_level])
   getClassLevel()
   getError()
   getErrorNumber()
   getResponseRaw()
   getResponseText()
   setDevice($host, [[[$password], $timeout], $port])
   powerOn([[[[$host], $password], $timeout], $port])
   powerOff([[[[$host], $password], $timeout], $port])
   getPowerState([[[[$host], $password], $timeout], $port])
   setInput($input, [[[[$host], $password], $timeout], $port])
   getInput([[[[$host], $password], $timeout], $port])
   muteVideoOn([[[[$host], $password], $timeout], $port])
   muteVideoOff([[[[$host], $password], $timeout], $port])
   muteAudioOn([[[[$host], $password], $timeout], $port])
   muteAudioOff([[[[$host], $password], $timeout], $port])
   muteVideoAudioOn([[[[$host], $password], $timeout], $port])
   muteVideoAudioOff([[[[$host], $password], $timeout], $port])
   getMuteState([[[[$host], $password], $timeout], $port])
   getErrorState([[[[$host], $password], $timeout], $port])
   getLampState([[[[$host], $password], $timeout], $port])
   getInputList([[[[$host], $password], $timeout], $port])
   getName([[[[$host], $password], $timeout], $port])
   getManufactureName([[[[$host], $password], $timeout], $port])
   getProductName([[[[$host], $password], $timeout], $port])
   getOtherInfo([[[[$host], $password], $timeout], $port])
   getClass([[[[$host], $password], $timeout], $port])
  # Class2 only functions
   getSerialNumber([[[[$host], $password], $timeout], $port])
   getSoftwareVersion([[[[$host], $password], $timeout], $port])
   getInputTerminalName($input, [[[[$host], $password], $timeout], $port])
   getInputResolution([[[[$host], $password], $timeout], $port])
   getRecommendedResolution([[[[$host], $password], $timeout], $port])
   getFilterUsage([[[[$host], $password], $timeout], $port])
   getLampReplacementModel([[[[$host], $password], $timeout], $port])
   getFilterReplacementModel([[[[$host], $password], $timeout], $port])
   setSpeakerVolume($volume, [[[[$host], $password], $timeout], $port])
   setMicrophoneVolume($volume, [[[[$host], $password], $timeout], $port])
   freezeOn([[[[$host], $password], $timeout], $port])
   freezeOff([[[[$host], $password], $timeout], $port])
   getFreezeState([[[[$host], $password], $timeout], $port])
```

# Examples

  // Example 1
```
  require_once('pjlink.class.php');
  $pjlink = new PJLink();
  if (false === $pjlink->powerOn("192.168.0.1")) {
    echo $pjlink->getError();
  } elseif (false === $pjlink->setInput(11, "192.168.0.1")) {
    echo $pjlink->getError();
  }
```

  // Example 2
```
  require_once('pjlink.class.php');
  $pjlink = new PJLink(1);
  $pjlink->setDevice("192.168.0.1", "my_pjlink_pass", 10, 4352);
  if (false === $pjlink->powerOn()) {
    echo $pjlink->getError();
  } elseif (false === $pjlink->setInput(11)) {
    echo $pjlink->getError();
  }
  echo "Device: ".$pjlink->getManufactureName().", ".$pjlink->getProductName()."<br />\n";
```

  // Example 3
```
  require_once('pjlink.class.php');
  $pjlink = new PJLink(2);
  $pjlink->setDevice("192.168.0.2", "my_pjlink_pass", 10, 4352);
  if (false === $pjlink->powerOn()) {
    echo $pjlink->getError();
  } elseif (false === $pjlink->setInput(11)) {
    echo $pjlink->getError();
  }
  echo "Device: ".$pjlink->getManufactureName().", ".$pjlink->getProductName()."<br />\n";
  $pjlink->setClassLevel(1);
  $pjlink->powerOn("192.168.0.1");
```

The test.class.php file will test all methods of the class.
It can be used with the PJLink test software.

You can support our open source projects with donations and sponsoring.
Sponsorships are crucial for ongoing and future development!
If you'd like to support our work, then consider making a donation, any support
is always welcome even if it's as low as $1!
You can also sponsor the development of a specific feature. Please contact
us in order to discuss the detail of the implementation.

[Donate via PayPal by clicking here ![Donate via PayPal](https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_37x23.jpg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=N56M9E2SEAUD4)

And for more PHP classes, have a look on [PHPclasses.org](http://syscoal.users.phpclasses.org/browse/), where a lot of authors are sharing their classes for free.
