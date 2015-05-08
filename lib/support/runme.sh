#!/bin/bash -e

vagrant plugin install vagrant-hostsupdater

cd ~
git clone git@github.com:wpninjas/dojo.git

mkdir -p ~/dojo/public/wp-content/plugins
cd ~/dojo/public/wp-content/plugins

git clone git@github.com:wpninjas/ninja-forms.git
git clone git@github.com:wpninjas/ninja-forms-front-end-editor.git
git clone git@github.com:wpninjas/ninja-forms-multi-part.git
git clone git@github.com:wpninjas/ninja-forms-layout-styles.git
git clone git@github.com:wpninjas/ninja-forms-save-progress.git
git clone git@github.com:wpninjas/ninja-forms-stripe.git
git clone git@github.com:wpninjas/ninja-forms-conditional-logic.git
git clone git@github.com:wpninjas/ninja-forms-post-creation.git
git clone git@github.com:wpninjas/ninja-forms-file-uploads.git
git clone git@github.com:wpninjas/ninja-forms-authorize.git
git clone git@github.com:wpninjas/ninja-forms-signature.git
git clone git@github.com:wpninjas/ninja-forms-modal.git
git clone git@github.com:wpninjas/ninja-forms-views.git
git clone git@github.com:wpninjas/ninja-forms-paypal-express.git

#set dir
cd ~/dojo
clear

echo "============================================"
echo "WordPress Install Script"
echo "============================================"

dbname=scotchbox
dbuser=root
dbpass=root

echo "============================================"
echo "A ninja is now installing WordPress for you."
echo "============================================"

#download wordpress
curl -O https://wordpress.org/latest.tar.gz

#unzip wordpress
tar -zxvf latest.tar.gz

#change dir to wordpress
cd wordpress

#copy file to parent dir
cp -rf . ../public/wp

#remove files from wordpress folder
rm -R wordpress

#move back to parent dir
cd ../public/wp

#create wp config
cp ../../lib/support/wp-config.php wp-config.php

#set database details with perl find and replace
perl -pi -e "s/database_name_here/$dbname/g" wp-config.php
perl -pi -e "s/username_here/$dbuser/g" wp-config.php
perl -pi -e "s/password_here/$dbpass/g" wp-config.php

#create uploads folder and set permissions
mkdir -p wp-content/uploads
chmod 777 wp-content/uploads

#remove zip file
rm latest.tar.gz

#remove bash script

echo "========================="
echo "Installation is complete."
echo "========================="

cd ~
cd dojo
vagrant up support