# HiddenFounders Web Coding challenge

## Project type
The php web challenge
## Used Technologies
* laravel for the backend
* vuejs, jquey for the frontend
* a mysql db
## Features
* A user can register and login using his email and password
* A user can display the list of nearby shops
* A user can like or dislike a nearby shop
    * Disliked shops  won't be displayed for two ours in nearby shop list
    * Liked shops are shown in preferred list with a remove button
    * Removed shops will disappear from preferred shops
## Application Data 
> Application data is stored in a Mysql database, you can download it form this link [shops db](http://www.mediafire.com/file/iuuaq2z3x570er6/shops.rar)
_remember to import after download !!_
## After download
After you download and unzip the project in your htdocs folder assuming you are using xampp there is some steps to follow to fix some expected errors:
 * first run the `composer install` or `composer update`
 * you will have to create a `.env `file manualy, open `.env.example`, configure your database connection and save as `.env`
 * run `php artisan key:generate `
 * run `php artisan serve `and if everything goes well the application will work 
 
 ## Porject main files
* `/app/http/controllers/NBshopsController`
* `/app/resources/views/NBshops.blade.php`
* `/app/public/js/myapp.js`
 
***
This is all, thank you !!
“I am a developer. I’m one with the Code, and the Code will guide me.”
 

 


