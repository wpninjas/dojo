#!/bin/bash -e
cd /var/www/public/wp
chmod -R 777 /var/www/public/wp
chown -R www-data:www-data /var/www/public/wp
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
php wp-cli.phar core install --url="dojo/wp" --title="WordPress Dev Env" --admin_user="admin" --admin_password="1111" --admin_email="test@test.com" --allow-root
echo "|============================|"
echo "| Installation is complete.  |"
echo "| Type 'wp/' in your browser |"
echo "| to access your new site.   |"
echo "|     Username:Password      |"
echo "|        admin:1111          |"
echo "|============================|"
exit