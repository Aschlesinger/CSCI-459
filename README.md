# Assignment 2 - Alexander Schlesinger
#CSCI 459
#2/5/2019

## STARTING UP
- To start up the three Docker container that make up this application simply  follow these few steps:
1) cd into the docker directory
2) execute the following command: docker-compose up
3) If the database crashes on the first build simply close the containers and rerun: docker-compose up

## CRUD in this application
- C.R.U.D stands for Create, Read, Update, and Delete.
- In this scope of this application this simply means that the MariaDB database can have:
      Values Added to the Database
      Delete Data points
      Display the Database
      Update pre-existing data points one at a time
- For the USERS all this is done through the web app
- The software does this with PHP - This PHP code is stored within the /src/ directory.
- The intention to support CRUD for this application is to allow an individual or in this case an Admin
    to manage a database for a school or class that holds basic information over it's students

## RESTful
- This application is RESTful.
- A RESTful application is one that uses GETs, POSTs, and PUTs to communicate data from separated
    services - in this case a webserver and a database.
- The importance of this the isolation of the two services.

##  ACID or BASE
- MariaDB does support ACID-style data processing.
- This application also supports ACID however I don't think its necessary in the scope of this assignment.
    ACID integrity is implemented to ensure that a database can handle multiple queries at a time,
    especially if this database is being used by multiple webservers.
    This application is only used by one user at a time and this user (through the GUI) can only really execute one quere at a time.

## MCV
- Yes, this application does use the Model-veiw-controler architecture.
    This is mainly seen within the /src/ directory. Here the webpage is built.

## Directories
### docker/adr

-This directory contains the of my decision making during the process of building
 this app as well as my reasons for using MariaDB, PHP, and nginx.
 With in this Directory there will be .md that elaborate on each image
 used.  
### docker/database

This directory contains the files necessary to build the Docker container for the MariaDB and also a .sql file that holds the commands to build and populate
a database.

### docker/nginx

This directory contains the files necessary to build the Dockerfile for pulling the webserver nginx.conf. also within this dirctory .....

### docker/php-fpm
This directory contains the Dockerfile that pulls php and installs a driver to connect with the mariaDB database

### src/
This directory contains all of the code that builds the webpage. Including an index.php, css file, and a directory with two php files to further build the webpage.
