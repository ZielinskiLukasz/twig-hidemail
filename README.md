# twig-hidemail
Twig extension for obfuscating e-mails

This Twig extension adds a new 'hidemail' filter.
 
The filter converts given string into a link difficult to read by spam bots using a method of your choice.
 
First declare this extension as service and set the conversion method passing te correct class to the DI container
