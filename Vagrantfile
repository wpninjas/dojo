# -*- mode: ruby -*-
# vi: set ft=ruby :

# Fork of tierra's wp-vagrants
# https://github.com/tierra/wp-vagrant

Vagrant.configure("2") do |config|

  config.vm.define 'php52', primary: true do |node|
    node.vm.box = 'tierra/wordpress-php52'
    node.vm.hostname = 'php52.dev'
    node.vm.network :private_network, ip: '192.168.167.9'

    config.vm.synced_folder "public/", "/var/www"

    node.vm.provider :virtualbox do |vb|
      vb.customize [
        'modifyvm', :id,
        '--memory', '512',
      ]
    end
  end

  config.vm.define 'php53', autostart: false do |node|
    node.vm.box = 'puppetlabs/ubuntu-12.04-64-puppet'
    node.vm.hostname = 'php53.dev'
    node.vm.network :private_network, ip: '192.168.167.10'

    config.vm.synced_folder "public/", "/var/www"

    node.vm.provider :virtualbox do |vb|
      vb.customize [
        'modifyvm', :id,
        '--memory', '512',
      ]
    end

    node.vm.provision :shell, :path => "lib/puppet/bootstrap.sh"
    node.vm.provision :puppet do |puppet|
      puppet.facter = { 'fqdn' => node.vm.hostname }
      puppet.manifests_path = "lib/puppet/manifests"
      puppet.manifest_file  = "wordpress-php53.pp"
    end
  end

  config.vm.define 'php54', autostart: false do |node|
    node.vm.box = 'tierra/wordpress-php54'
    node.vm.hostname = 'php54.dev'
    node.vm.network :private_network, ip: '192.168.167.11'

    config.vm.synced_folder "public/", "/var/www"

    node.vm.provider :virtualbox do |vb|
      vb.customize [
        'modifyvm', :id,
        '--memory', '512',
      ]
    end

    node.vm.provision :shell, :path => "lib/puppet/bootstrap.sh"
    node.vm.provision :puppet do |puppet|
      puppet.facter = { 'fqdn' => node.vm.hostname }
      puppet.manifests_path = "lib/puppet/manifests"
      puppet.manifest_file  = "wordpress-php54.pp"
    end
  end

  config.vm.define 'php55', autostart: false do |node|
    node.vm.box = 'puppetlabs/ubuntu-14.04-64-puppet'
    node.vm.hostname = 'php55.dev'
    node.vm.network :private_network, ip: '192.168.167.12'

    config.vm.synced_folder "public/", "/var/www"

    node.vm.provider :virtualbox do |vb|
      vb.customize [
        'modifyvm', :id,
        '--memory', '512',
      ]
    end

    node.vm.provision :shell, :path => "lib/puppet/bootstrap.sh"
    node.vm.provision :puppet do |puppet|
      puppet.facter = { 'fqdn' => node.vm.hostname }
      puppet.manifests_path = "lib/puppet/manifests"
      puppet.manifest_file  = "wordpress-php55.pp"
    end
  end

  config.vm.define 'support', autostart: false do |node|
    node.vm.box = "scotch/box"
    node.vm.network "private_network", ip: "192.168.33.10"
    node.vm.hostname = "dojo"
    node.vm.synced_folder "public/", "/var/www/public/", :mount_options => ["dmode=777", "fmode=666"]
    node.vm.provision :shell, path: "lib/support/bootstrap.sh"
  end

end
