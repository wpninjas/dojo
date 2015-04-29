cd ~/../../var/www

# Permissions
chmod -R 777 .
chown -R www-data:www-data .

# WordPress Directory
if [ ! -d public/wp ]
then
    # Download WordPress
    git clone https://github.com/WordPress/WordPress.git public/wp
fi

# Copy over wp-config
cp lib/config/wp-config.php public/wp/wp-config.php

# WP CLI
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar

# Install
php wp-cli.phar core install --url="wp" --title="DOJO Dev" --admin_user="admin" --admin_password="password" --admin_email="test@test.test" --allow-root