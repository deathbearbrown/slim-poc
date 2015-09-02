# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "ubuntu/trusty64"
  config.vm.network "private_network", ip: "192.168.13.65"
  config.vm.synced_folder ".", "/mnt/"
  config.ssh.forward_agent = true
  config.ssh.insert_key = false
  config.hostsupdater.aliases = [
    "auth.dev"
  ]
  config.vm.provision "ansible" do |ansible|
    ansible.limit = "vagrant"
    ansible.inventory_path = "ansible/inventory/development"
    ansible.playbook = "ansible/provision.yml"
  end
  config.vm.provider :virtualbox do |v|
	  v.customize ["modifyvm", :id, "--memory", 1024]
	end
end
