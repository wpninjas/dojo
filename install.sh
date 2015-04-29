#!/bin/bash

# Install VirtualBox
/bin/bash lib/bash/virtualbox.sh
wait

# Install Vagrant
/bin/bash lib/bash/vagrant.sh
wait

# Install WordPress
/bin/bash lib/bash/wordpress.sh
