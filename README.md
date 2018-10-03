# Ansible Roles for 'Getting into Docker' Videos

## Initial Setup
You'll need two VMs, running a minimal Ubuntu 18.04 Server. You have
to setup your SSH Configuration in a way, so that you can reach 
both machines by simply entering:

```shell
ssh docker-development
ssh docker-production
```
Usually this can be achived by adding the following to your ssh config at `~/.ssh/config`.

```shell
Host docker-development
    Hostname REAL_IP_OF_SYSTEM
    User root

Host docker-production
    Hostname REAL_IP_OF_SYSTEM
    User root
```

```shell
cd ./ansible
ansible-playbook -u root -e '_password=<password_of_bens_account>' -e '_sshkeyfile=/home/youruser/.ssh/id_rsa.pub' p_basicsetup.yml
```
