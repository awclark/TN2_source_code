# TN2_source_code
This is the final source code for capstone project TN2: NetHealth. It contains both the client and server side testing modules as well as the front end LAMP display scripts

To set up the server you need to run all server side scripts as daemons on the required server, we suggest using the linux program 'upstart'. Please note, this is already set up currently (1/6/2017) on the projects server, however in the coming months our cloud based server will expire and hence a new one will need to be set up.

The client side test modules can be run by running the main.py file. Note that on MAC or Linux distributions you must install iperf3 first (https://iperf.fr/iperf-download.php). If the code does not run successfully try again running it as the super user. Also note that if you change the server/ if the server instance has expired, you need to edit the code to point it at the new server.

To run the front end display the source code must be placed on the webserver portion of your server. If you use an apache server running on linux this will be in the directory /var/www/html/. 
