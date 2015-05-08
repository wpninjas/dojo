# WP Ninjas DOJO

♫ Welcome to the DOJO, We got PHP,
  We got all the versions you want
  Vagrant is it's name ♫

## Getting Started

### Install Prerequisites

1. [Git](http://git-scm.com/book/en/v2/Getting-Started-Installing-Git).
1. [VirtualBox](https://www.virtualbox.org/).
1. [Vagrant](http://www.vagrantup.com/).
1. [GitHub SSH keys](https://help.github.com/articles/generating-ssh-keys/).

### WP Ninjas Support Team

Note: Running the installer file will automatically setup the vagrant box and install WordPress following team conventions.

1. Download the [runme](https://raw.githubusercontent.com/wpninjas/dojo/master/lib/support/runme.sh) installer file.
   
### Download the DOJO Repository

* Using the Command Line, run the following commands:
    1. `git clone https://github.com/wpninjas/dojo.git dojo`
    1.. `cd dojo`
    
### Start the Box

1. Using the Command Line, run the following commands:
    * `vagrant up [box]`

Note: Without naming a box, just the `php52` box will be started.
      Specify `php53`, `php54`, or `php55` (or `support`) to start up either one instead.
      
### Update your host file

Note: With the [Host Updater Plugin](https://github.com/cogitatio/vagrant-hostsupdater) installed, your host file will be updated automatically.

1. Add the following to your hosts file:
    * `192.168.167.9  php52.dev`
    * `192.168.167.10 php53.dev`
    * `192.168.167.11 php54.dev`
    * `192.168.167.12 php55.dev`
    * `192.168.33.10  support`
      
### WordPress Setup
1. Using the Command Line, run:
    * `bash setup.sh`

This command will clone WordPress and copy over the `wp-config.php`

## Using the DOJO Environment

### Browser Access

With any of the boxes started, you can reach them at these locations:

* http://php52.dev/
    * 192.168.167.9
* http://php53.dev/
    * 192.168.167.10
* http://php54.dev/
    * 192.168.167.11
* http://php55.dev/
    * 192.168.167.12
* (Support) http://dojo/
    * 192.168.33.10

### MySQL Configuration

The MySQL root password is "wordpress", and all boxes
come with two pre-configured databases:

* `wordpress` (this is meant for a regular installation)
* `wordpress-tests` (this is meant for use with PHPUnit tests)

A single account with rights all databases for convenience:

* Username: `wordpress`
* Password: `wordpress`

## Configurations Provided

***php52***

* Debian 6.0 (squeeze)
* Apache 2.2 (suPHP, port 80 only)
* PHP 5.2.17 (painstakingly pulled from Dotdeb Lenny repos)
* PHP Extensions: curl, gd, imagick, mcrypt, mysql, xdebug
* PHPUnit 3.6.12
* MySQL 5.1.73
* Subversion 1.6.12, Git 1.7.2.5
* Node.js 0.10.29, Grunt

***php53***

* Ubuntu 12.04 (precise)
* Apache 2.2 (suPHP, port 80 and 443)
* PHP 5.3.10
* PHP Extensions: curl, gd, imagick, mcrypt, mysql, xdebug
* PHPUnit 4.4.2
* MySQL 5.5.38
* Subversion 1.6.17, Git 1.7.9.5
* Node.js 0.10.29, Grunt

***php54***

* Debian 7.6 (wheezy)
* Apache 2.2 (suPHP, port 80 and 443)
* PHP 5.4.36
* PHP Extensions: curl, gd, imagick, mcrypt, mysql, xdebug
* PHPUnit 4.4.2
* MySQL 5.5.40
* Subversion 1.6.17, Git 1.7.10.4
* Node.js 0.10.29, Grunt

***php55***

* Ubuntu 14.04 (trusty)
* Apache 2.4 (suPHP, port 80 and 443)
* PHP 5.5.9
* PHP Extensions: curl, gd, imagick, mcrypt, mysql, xdebug
* PHPUnit 4.4.2
* MySQL 5.5.40
* Subversion 1.8.8, Git 1.9.1
* Node.js 0.10.33, Grunt

***support***

Support uses the pre-configured [ScotchBox](https://github.com/scotch-io/scotch-box) setup.

## TODO

1. Process for clearing the database
1. Sync database tables between boxes
