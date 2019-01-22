## Database: MariaDB
# Date: 1/22/2019

# Status: Accepted
# Decision makers: Alexander Schlesinger

#Contextual outline:

Using a Dockerfile an image of MariaDB is pulled and exposed @ port: 3306.
Then this file is called on by a docker-compose.yml file that then set some environment settings and also set the location of a datafile.

#Decision:

-Mysql VS mariaDB
The latest version of mariaDB is compatible with PHP while the mysql is slightly dated and less documented online.

-data

#consequence:
