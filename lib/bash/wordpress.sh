# Download Wordpress
if [ ! -d public/wp ]
then
    git clone https://github.com/WordPress/WordPress.git public/wp
fi

# Copy over wp-config
cp lib/config/wp-config.php public/wp/wp-config.php
