
# PHPBSDRelay

### Welcome to PHPBSDRelay

PHPSBDRelay is a simple PHP wrapper for OpenBSD smtpd service to use it as smtp relay for your web apps

To install the PHPBSDRelay proceed with the following steps:

1. Create the user _PHPBSDRelay by running the script Private/shell/create_user.sh  
2. Configure your PHPBSDRelay web app appropriately to use PHP-FPM  
3. Use the sample Private/conf/PHPBSDRelay.conf for PHP-FPM at your discrection,  
    adding it in /etc/php-fpm.d/ or any cons repo in your system   
  
Attention:  
&gt;&gt; Remember to change the logic by which you generate the variable $SALT in index.php &lt;&lt;

Consume it (from PHP) like that:

yourhostname.com/?bsdha=<your_hash>&bsdto=posta@elettronica.lol&bsdsu=hello&bsdbo=Hello%20from%20Github!

For any need of software additions, plugins and improvements please write to <a href="mailto:info@5mode.com">info@5mode.com</a>  

To help please donate by clicking <a href="https://gaox.io/l/dona1">https://gaox.io/l/dona1</a> and filling the form.   

Feedback: <a href="mailto:code@gaox.io">code@gaox.io</a>
