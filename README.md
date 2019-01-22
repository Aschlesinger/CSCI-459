# Assignment 1 - Alexander Schlesinger

## STARTING UP
- To start up the three Docker container that make up this application simply  follow these few steps:
1) cd into the docker directory
2) execute the following command: docker-compose up
3) If the database crashes on the first build simply close the containers and rerun: docker-compose up

## Directories

### docker/adr

-This directory contains the of my decision making during the process of building
 this app as well as my reasons for using MariaDB, PHP, and nginx.
 With in this Directory there will be .md that elaborate on each image
 used.  
### docker/database

This directory contains the files necessary to build the Docker container for the MariaDB and also a .sql file that holds the commands to build and populate
a database.

### docker/nginx (add more)

This directory contains the files necessary to build the Dockerfile for pulling the webserver nginx.conf. also within this dirctory .....

###docker/php-fpm
This directory contains the Dockerfile that pulls php and installs a driver to connect with the mariaDB database

##src/
This directory contains all of the code that builds the webpage. Including an index.php, css file, and a directory with two php files to further build the webpage. 
