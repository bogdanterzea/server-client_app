# server-client_app
 In this app I will create a simple connection between a client and a server with php.
 
# Set-up
 ##First steps
	You will need to install:
	[Visual Studio](https://visualstudio.microsoft.com/) or any other editor. I also recoment [Sublime](https://www.sublimetext.com/)
	[Wampserver](https://sourceforge.net/projects/wampserver/)
	[phpmyadmin](https://sourceforge.net/projects/phpmyadmin/)
	You need to download:
	SOAP libraries from [here](https://sourceforge.net/projects/nusoap/)
	
 ##After install dependencies
	Inside "www" folder from wamp you will have to put "lib" file from soap.
	Inside same folder ("www") create a file called WebServiceSOAP and copy and paste all files from this project except database.
	Database soap should be coppied inside databases of wamp.
	Take care at all references because won't correspond.
	
 ##Start project
	Run wampserver 
	Run localhost/WebServiceSOAP/server.php and localhost/WebServiceSOAP/service.php
	There should the server display first student from local database
	
 
