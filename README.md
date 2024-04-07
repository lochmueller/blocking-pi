# blocking-pi

Raspberry Pi Zero based on Pi-hole.

## Installation

1. Raspberry Pi OS without GUI -> https://www.raspberrypi.com/software/
   1. Hostname: blocking-pi (.local)
   2. Create user: e.g. blocking-pi with default password
2. https://github.com/pi-hole/pi-hole/#one-step-automated-install
   1. Use a static IP address -> e.g. 192.168.178.56
   2. Use default configuration (Google upstream, admin interface and first block lists)
3. Configure FritzBox to use Pi-hole: https://docs.pi-hole.net/routers/fritzbox-de/
4. Integration into openHAB -> https://360friends.de/pi-hole-integration-in-openhab/
5. Update blocking lists
   1. ...
   2. ...

## Block list generatione

1. Create files for different apps incl. Domains in the "Apps" folder
2. Execute "php generate.php" before commit