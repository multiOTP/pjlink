Pure PHP PJLink Class1 library
==============================

The PJLink PHP class is the lightest pure PHP package available for
operating and controlling data projectors using the PJLink Class1 standard.

PJLink Class1 specifications are available here:
  http://pjlink.jbmia.or.jp/english/data/5-1_PJLink_eng_20131210.pdf

(c) 2017 SysCo systemes de communication sa
http://developer.sysco.ch/php/

Current build: 1.0.0.1 (2017-04-24)

No external file is needed (no PEAR, no PECL, no cURL).


# Licence

  Copyright (c) 2017 SysCo systemes de communication sa
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
   setDevice($host, [[[$password], $timeout], $port])
   powerOn([[[[$host], $password], $timeout], $port])
   powerOff([[[[$host], $password], $timeout], $port])
   getPowerState([[[[$host], $password], $timeout], $port])
   setInput($input, [[[[$host], $password], $timeout], $port])
   getInput([[[[$host], $password], $timeout], $port])
   getErrorState([[[[$host], $password], $timeout], $port])
   getLampState([[[[$host], $password], $timeout], $port])
   getName([[[[$host], $password], $timeout], $port])
   getManufactureName([[[[$host], $password], $timeout], $port])
   getProductName([[[[$host], $password], $timeout], $port])
   getOtherInfo([[[[$host], $password], $timeout], $port])
   getClass([[[[$host], $password], $timeout], $port])
   getError()
   getErrorNumber()
   getResponseRaw()
   getResponseText()


# Examples

  // Example 1
  require_once('pjlink.class.php');
  $pjlink = new PJLink();
  if (false === $pjlink->powerOn("192.168.0.1")) {
    echo $pjlink->getError();
  } elseif (false === $pjlink->setInput(11, "192.168.0.1")) {
    echo $pjlink->getError();
  }

  // Example 2
  require_once('pjlink.class.php');
  $pjlink = new PJLink();
  $pjlink->setDevice("192.168.0.1", "my_pjlink_pass", 10, 4352);
  if (false === $pjlink->powerOn()) {
    echo $pjlink->getError();
  } elseif (false === $pjlink->setInput(11)) {
    echo $pjlink->getError();
  }
  echo "Device: ".$pjlink->getManufactureName().", ".$pjlink->getProductName()."<br />\n";


You can support our open source projects with donations and sponsoring.
Sponsorships are crucial for ongoing and future development!
If you'd like to support our work, then consider making a donation, any support
is always welcome even if it's as low as $1!
You can also sponsor the development of a specific feature. Please contact
us in order to discuss the detail of the implementation.

**[Donate via PayPal by clicking here][1].** [![Donate via PayPal][2]][1]
[1]: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=N56M9E2SEAUD4
[2]: https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_37x23.jpg


And for more PHP classes, have a look on [PHPclasses.org](http://syscoal.users.phpclasses.org/browse/), where a lot of authors are sharing their classes for free.