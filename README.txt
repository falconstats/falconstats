README

Falconstats is provided without any waranty. Installing and running it on your computer or webserver is at your own risk. We tried to write secure and stable software, but could not give any waranties.

Falconstats is distributed unter the Creative Commons Licence. You may copy, distribute and share Falconstats. You may change the PHP scripts and the template/language files. If you do distribute Falconstats or parts of Falconstats or your improvements to Falconstats you have to attatch this README file and have to do it under same terms than we did.
Check back: http://creativecommons.org/licenses/by-sa/2.0/de/deed.en

Falconstats is NOT public domain. Falconstats is based on german copyright laws and the "Urheberrecht" stays by the authors. We just want to give you the freedom to distribute share and improove Falconstats as you like with the restrictions of the Creative Commons.

Installation:

Falconstats Deamon:

Blank for Scimi text.

Server Front-/Backend:
Create a new subdirectory on your machine and give a new FTP user the right to write into that directory. (It is recommended that you use the directory "falconstats" shipped into the ZIP file.)
Spread the logindata to your Squadmembers, so they can setup their clients. Make shure that the folderpermissions doesn't grant them read but only write access on the server.

In order to integrate Falconstats into your webpage, write the following line in your sourcecode:

<? include("falconstats/index.php?id=$callsign"); ?>

What should that mean? Simple!
<? ?> indicates that the line is PHP code.
include(); does grab the index.php from Falconstats with the Argument $callsign and puts the HTML produced by the tool into exactly that position.

Instead of $callsign you can use callsign which means the correct name of the logbook you want to display.
The layout of the HTML is produced by a template file (HTML with CSS and some PHP code snippets) located in inc/templates.
You can define the template in the config.php. Just name one of the shipped templates or your own template in the file and everything would work fine!


If you have any trouble, setting up Falconstats on your server, or have ideas for improvement, or want to help us, you can contact us in the development blog. (http://falconstats.23-media.com)
