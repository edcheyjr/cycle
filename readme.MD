# Cycle

It is a bicycle e-commerce site written with vanilla javascript and php

## Remember to configure your server xampp or any other cross platform server to allow **file upload** and **GDimage** extension to be active

- At xampp it is at **php.ini** look for this `file_uploads=On` of file upload turn it on
- At **Dynamic Extensions** add `extension=gd`
- Change the connect default configuration for connecting to db here is an example of [connect.php](./connect.php)

```
$host = "localhost";
$user = "root";
$password =;
$db =;
```

## To run locally the file ensure you have run config.php file once to create the db and the relevant tables the start the project with your prefered php server and sql server

this are some of the servers

- [apache](https://apache.org)
- [mysql community server](https://dev.mysql.com)
  This can also be found in user friendly software such as [Xampp](https://www.apachefriends.org) by pacha friends and this contain all of the servers you might need. They are many other

## **expected out if the configuration was successful is as follows**

- on first run of config file creating the database
  <img src="./readme-images/first.png"/>

- on second run creates all the table
  <img src="./readme-images/second.png"/>

- on third run status changes to OK connected
  <img src="./readme-images/third.png"/>

- if any of this does not go through you will get an error message on the screen looks something like the image below
  <img src="./readme-images/error.png"/>

## Have Fun😁!!!
