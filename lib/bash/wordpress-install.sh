chmod -R 777 /var/www/public
chown -R www-data:www-data /var/www/public
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
php wp-cli.phar core install --url="wp" --title="DOJO Dev" --admin_user="admin" --admin_password="password" --admin_email="test@test.test" --allow-root
