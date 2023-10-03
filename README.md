# COMP4039-DIS Docker

## author: Stuart Reeves

Docker files for COMP4039-DIS (Databases, Interfaces and Software Design Principles) L4 module.

Contains the principal components of the standard LAMP (Linux, Apache, MySQL, PHP) stack:
- apache2 (web server)
- mariadb v10 (OSS MySQL server)
- php v8

The Docker compose file describing this (docker-compose.yml) also builds phpmyadmin, which provides a web-based GUI for the SQL database.

In order to start the container you will need to download Docker. This could either be the desktop app (https://www.docker.com/products/docker-desktop/) or, depending on your OS, some other method e.g., via homebrew for macOS or via a packaging system if you run Linux.

Once Docker is installed, run

	docker compose up

at your command line. The relevant images will be pulled down (php-apache, mariadb, phpmyadmin), then the containers will be started. This should all be visible in the Docker desktop app.

You can now point a browser at the following locations:

	http://localhost/index.php - index to the example code included
	http://localhost:8081 - phpmyadmin interface


## Contents description

html/ - all your HTML, PHP, CSS, JS etc. files go here (note that this dir includes example code from the module which you can use without citation in your coursework)

mariadb/ - SQL files that are used to build the database when Docker starts; this includes the initial database for Coursework 2 which you will probably want to modify, as well as the database for the example code (phpdemos); also contains instructions to build the mariadb image

mariadb-data/ - this is where the mariadb Docker container's database stores its files; if you want to rebuild your databases from scratch, see below for instructions

php-apache/ - contains the instructions to build the php-apache image


## Deleting the database and rebuilding

If for whatever reason you want to delete your database and rebuild from the SQL source included in mariadb/ then simply delete the contents of mariadb-data and run 
	
	docker compose up

again.


## Specific OS-related notes

### Windows 

If you are installing Docker for Windows, you may need to install the Windows Subsystem for Linux (WSL). You will either be told to do so or you might encounter an error related to "WSL kernel version too low" or similar. In either case you will need to run cmd.exe and the following commands:

	wsl --install
	wsl --update

If you receive an "Unexpected WSL error" from Docker Desktop you may be able to resolve it by checking that virtualisation is enabled in your system BIOS. This can usually be accessed at startup via a specific key (e.g., F2) - depending on your machine.


### macOS

If you are installing Docker for macOS, some have encountered errors where Docker Desktop won't start. In which case try some of the following:

	https://mattsimpson.ca/2022/12/27/docker-desktop-for-mac-wont-start