Configure virtual host
C:\xampp\apache\conf\extra

<VirtualHost *>
  DocumentRoot "C:\xampp\htdocs\cuarto"
  ServerName company.com
  <Directory "C:\xampp\htdocs\cuarto">
    Require all granted
  </Directory>
</VirtualHost>

Configure host on windows
C:\Windows\System32\drivers\etc
# localhost name resolution is handled within DNS itself.
#	127.0.0.1       localhost
#	::1             localhost
127.0.0.1       localhost	company.com
