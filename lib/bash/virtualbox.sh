# http://vaibhavbajpai.com/blog/2012/12/05/installing-vagrant-on-a-headless-debian-server/

sudo apt-get install linux-headers-$(uname -r)
sudo apt-get install virtualbox-ose-dkms
sudo apt-get install virtualbox-ose
sudo service virtualbox start