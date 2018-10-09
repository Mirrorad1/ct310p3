# ct310p3
CT 310 Project #3: The Federation

Explore the States

Due: Friday May 4th, 2018 - 11:55pm

MILESTONES
Friday May 4, 2018 - PROJECT DUE    
Overview: The Federation of Nation States
Our site needs to share attraction information with the Federation. The functionality to do this will be developed in Javascript utilizing JSON and jQuery. The JSON response is formatted as the following:

[{"team":"20","nameShort":"TAD","nameLong":"TourAdvisor","eid":"eid"}]
The controller and actions must reside at the URL provided

/federation/status
/federation/allstatus
/federation/listing
/federation/attraction[id]
/federation/attrimage[id]
STATUS
The page provides a mechanism for indicating if your site is open for business. It must return a JSON object. Two status returns:

{"status":"open"}
and

{"status":"closed"}
ALLSTATUS
The page provides immediate visual feedback regarding the status of every site in the MasterList. Not just one status per team. How you format this is up to you, provided you work into your display the following:

The short name of each site
The long name of each site
A prominent color encoded status indicator for each site
Green - site is open
Red - site is closed
Yellow - site has not responded to an AJAX call Customers can see this too, not restricted to admin
LISTING
The results should return a listing of available attractions using JSON

[{"id:":"1","name":"Attraction1","state":"CA"},{"id:":"2","name":"Attraction2","state":"IN"}]
ATTRACTION/ID
Returns specific attraction information based on the ID.

For example
/federation/attraction/2 returns the following

{"id":"2","name":"Mt. Rushmore","desc":"Look at those rocks!","state":"SD"}
Pay attention to escape characters in the formatting of strings

ATTRIMAGE/ID
Returns the images "I think?"


