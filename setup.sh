if [ ! -d public/wp ]
then
    # Install WordPress
    git clone https://github.com/WordPress/WordPress.git public/wp
fi

# Change to project
cp setup/wp-config.php public/wp/wp-config.php