# Bypass to ngrok from free hosting
A PHP script to redirect from a free hosting to your local website with ngrok.
# Dependencies
- Local machine with ngrok and website hosted on port 80
# Configuration
- Clone the project using "git clone https://github.com/claudi0-udev/ngrok-hosting-bypass.git".
- Modify the file keys.php
  - Change the value of ngrok_token="XXXX-your-authtoken-XXXX" to the one granted by ngrok.
- Upload index.php and keys.php to your free hosting.
