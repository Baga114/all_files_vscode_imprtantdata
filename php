
sudo update-alternatives --config php

if the default php version is 7.3 ok but the page loading is 7.3 you have to check the fpm for that is it install or not

sudo apt install php7.3 libapache2-mod-php7.3 php7.3-common php7.3-gmp php7.3-curl php7.3-soap php7.3-bcmath php7.3-intl php7.3-mbstring php7.3-xmlrpc php7.3-mcrypt php7.3-mysql php7.3-gd php7.3-xml php7.3-cli php7.3-zip
sudo apt install php8.2 libapache2-mod-php8.2 php8.2-common php8.2-gmp php8.2-curl php8.2-soap php8.2-bcmath php8.2-intl php8.2-mbstring php8.2-xmlrpc php8.2-mcrypt php8.2-mysql php8.2-gd php8.2-xml php8.2-cli php8.2-zip
sudo apt install php8.2 libapache2-mod-php8.2 php8.2-common php8.2-gmp php8.2-curl php8.2-soap php8.2-bcmath php8.2-intl php8.2-mbstring php8.2-xmlrpc php8.2-mcrypt php8.2-mysql php8.2-gd php8.2-xml php8.2-cli php8.2-zip
sudo apt install php8.2 libapache2-mod-php8.2 php8.2-common php8.2-gmp php8.2-curl php8.2-soap php8.2-bcmath php8.2-intl php8.2-mbstring php8.2-xmlrpc php8.2-mcrypt php8.2-mysql php8.2-gd php8.2-xml php8.2-cli php8.2-fpm php8.2-zip
sudo apt install php8.2 libapache2-mod-php8.2 php8.2-common php8.2-gmp php8.2-curl php8.2-soap php8.2-bcmath php8.2-intl php8.2-mbstring php8.2-xmlrpc php8.2-mcrypt php8.2-mysql php8.2-gd php8.2-xml php8.2-cli php8.2-fpm php8.2-zip
sudo apt install libapache2-mod-php8.2
sudo apt install libapache2-mod-php8.2
sudo service php8.2-fpm status

<VirtualHost *:80>
     ServerAdmin admin@site1.your_domain
     ServerName site1.your_domain
     DocumentRoot /var/www/site1.your_domain
     DirectoryIndex info.php

     <Directory /var/www/site1.your_domain>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Order allow,deny
        allow from all
     </Directory>

    <FilesMatch \.php$>
        # From the Apache version 2.4.10 and above, use the SetHandler to run PHP as a fastCGI process server
         SetHandler "proxy:unix:/run/php/php8.2-fpm.sock|fcgi://localhost"
    </FilesMatch>

     ErrorLog ${APACHE_LOG_DIR}/site1.your_domain_error.log
     CustomLog ${APACHE_LOG_DIR}/site1.your_domain_access.log combined
</VirtualHost>

 