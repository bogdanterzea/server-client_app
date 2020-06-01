# server-client_app
 In this app I will create a simple connection between a client and a server with php.
 
# Set-up
## First steps <br />
	You will need to install: <br />
	[Visual Studio](https://visualstudio.microsoft.com/) or any other editor. I also recoment [Sublime](https://www.sublimetext.com/) <br />
	[Wampserver](https://sourceforge.net/projects/wampserver/) <br />
	[phpmyadmin](https://sourceforge.net/projects/phpmyadmin/) <br />
	You need to download: <br />
	SOAP libraries from [here](https://sourceforge.net/projects/nusoap/) <br />
	
## After install dependencies <br />
	Inside "www" folder from wamp you will have to put "lib" file from soap. <br />
	Inside same folder ("www") create a file called WebServiceSOAP and copy and paste all files from this project except database. <br />
	Database soap should be coppied inside databases of wamp. <br />
	Take care at all references because won't correspond. <br />
	<br />
## Start project <br />
	Run wampserver  <br />
	Run localhost/WebServiceSOAP/server.php and localhost/WebServiceSOAP/service.php <br />
	There should the server display first student from local database
	
 
