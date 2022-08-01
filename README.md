
# PHPBSDRelay

### Welcome to PHPBSDRelay

PHPSBDRelay is a simple PHP wrapper for OpenBSD smtpd service to use it as smtp relay for your web app

To install the PHPBSDRelay proceed with the following steps:

1. Create the user _PHPBSDRelay by running the script Private/shell/create_user.sh  
2. Configure your PHPBSDRelay web app appropriately to use PHP-FPM  
3. Use the sample Private/conf/PHPBSDRelay.conf for PHP-FPM at your discrection,  
    adding it in /etc/php-fpm.d/ or any cons repo in your system   
  
Attention:  
>> Remember to change the logic by which you generate the variable $SALT in index.php <<
