#Openstack Monitoring Tool

An Openstack ecosystem monitoring tool which gives you basic understanding of the running services through a dashboard.


##Introduction

This tool facilitates the monitoring of various Openstack services deployed on the nodes in an
Openstack environment. This tool can monitor the status of the OpenStack services and it can also provide
a simple dashboard.

##Requirements

The packages required can be installed by the following.

```sh
$ sudo apt-get -y install apache2 mysql-server php5 php5-mysql libgd-graph-perl libapache2-mod-php5 cpanminus openssh-server
$ sudo cpan install DBI
$ sudo cpan install Net::OpenSSH
```

##Getting Started

Before proceeding to installation, please change the login credentials in "db.conf" file.

```perl
$hostname = ""; # Enter your ip address 
$username = ""; # username for mysql database
$password = ""; # password of your mysql database
$database = "Oceans11";
$host = "$username\@$hostname";
$passphrase = "";
$user=""; #username and password for tool
$pass="";
```

If the Apache server is configured in a different directory other than ````var/www/html````
the change the default working directory assigned to the variable "def1_path" to the custom 
path in which the Apache server is configured

##Installation:

To automatically install the tool along with all the pre-requisites, Just run the ````install.sh```` script using the following command from your tool directory
```sh
./install.sh
```
To just Run the backend ("Pre-requisites need to be already installed") use "run.sh" by using the following command from your tool directory
```sh
./run.sh
```
To open the dashboard, just open the following [link](`https://localhost/frontend/index.php).
````https://localhost/frontend/index.php ````

##Troubleshooting

**What If SSH connection fails to establish?**
 Please check for the SSH keys and valid permissions and verify if Net::OpenSSH perl module is installed correctly.
**Failed to create database ?**
`Please check for the credentials in "db.conf" file and verify if DBI perl module is installed correctly.`
**Failed to open the Dashboard?**
A. Verify the port on which the apache2 server is configured and also grant the required permissions to the frontend files.

##FAQ

Q. Will this tool work on both i386 and amd64 platforms?
A. Yes, this tool is independent of the system architecture but 
currently supports linux based platforms. Development for other
platforms will be provided in the future.

Q. I don't want my frontend files to be in "/var/www/html/" directory, 
what to do?
A. Please change the directory assigned to the variable 
````$def1_path````. 

