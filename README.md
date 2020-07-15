# Portfolio
Portfolio Template PHP

To Do :
* Installer
* Admin Panel for Customisation

Install:
* Import the sql file into your database
* Edit config.ini
* Edit .htaccess
```
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^([^\.]+)$ $1.php [NC,L]
```
