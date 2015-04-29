#!/bin/bash

# Install WordPress
/bin/bash lib/bash/wordpress.sh

# Install Host Updater
vagrant plugin install vagrant-hostsupdater

# Vagrant Up
vagrant up
