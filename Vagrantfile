Vagrant.configure("2") do |config|
  config.vm.box = "jems/php-dev"

  config.vm.define "apps-bkt-bicipublica#{ENV['VAGRANT_MACHINE_SUFFIX']}" do |config|
    config.vm.hostname = "apps-bkt-bicipublica"
    config.vm.network "private_network", ip: "192.168.33.66"

    config.vm.provision "shell", path: "bootstrap.sh"

    config.vm.provider "virtualbox" do |v|
      v.cpus = 3
      # v.memory = 3072
    end
  end
end
