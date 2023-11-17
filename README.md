# Assignment-VCC3

## Task::
### Create 3 containers on docker and name them CONRollNumber_1, CONRollNumber_2, and CONRollNUmber_3 respectively. 

#### CONRollNumber_1: Install any webserver. 
#### CONRollNumber_2: Install any database.

- Create a dummy web application to insert a data record in the database and display it. 
- Demonstrate that the web application is accessible from CONRollNumber_3 and the host system web browser.


#### Commands used:

#### Network Name: sukitha
- container1 IP address:  172.21.0.2
- container2 IP address: 172.21.0.3
- container3 IP address: 172.21.0.4
     
### Commands used: 
    $ docker ps
    $ docker start d22cs001_01
    $ docker stop d22cs001_01
    $ docker rm d22cs001_01
    $ docker build -t D22CS001_01 D22CS001_01 (for other containers as well)
    $ docker run -p 8080:80 --name d22cs001_01 --network sukitha -d d22cs001_01    (Commands used to connect to network [--network network_name] )
    $  docker run --name d22cs001_02 --network sukitha -d d22cs001_02
    $  docker run -it --name d22cs001_03 --network sukitha d22cs001_03
    $  docker exec -it d22cs001_03 /bin/bash
    $  lynx http://d22cs001_01
### Network check commands:
    $  docker network ls
    $  docker network inspect sukitha
