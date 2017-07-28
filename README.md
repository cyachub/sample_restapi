copy marketplace directory to the /var/www/html

check following steps

a2enmod rewrite
/etc/apache2/sites-enabled/000-default.conf

<Directory /var/www/>
    Options Indexes FollowSymLinks MultiViews
    AllowOverride None
    Order allow,deny
    allow from all
</Directory>

---------------------
get  the rest client application or enable as chrom extension

rowheaders must be

Content-Type: application/json

body as json

{"username":"ach","extension":"1000","pwd":"1234","voicemail":"2000","voivemailpwd":"121212"}

select the post method and send
//
