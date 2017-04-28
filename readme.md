# About the Attraction Manager API
This API is built to allow developers to create a working web application and integrate with databases easily. This API uses a RESTful interface with standard HTTP methods (GET, POST, PUT, DELETE). All responses are returned as JSON. It manages calls to a single database. It was built completely with PHP Laravel framework (https://laravel.com/) and VueJS(https://vuejs.org/).

It can make calls to authenticate users, retrieve their favorited places, comments, and ratings. Basic information about each public attraction is also provided. This ideally could be used by the city government for applications for visitors and tourists to get comfortable with the town of Chapel Hill.

## Installation Instructions
1. Download MAMP at https://www.mamp.info/en/.
2. Download Composer at https://getcomposer.org/download/.
2. Open MAMP preferences and change web server to file location of this project locally.
3. Still in preferences, change Apache port and Nginx port to 8888. Change MySQL port to 8889.
4. Go to .env folder and change DB_DATABASE, DB_USERNAME, DB_PASSWORD to personal database name, db username, and db password.
5. In terminal, go into project folder and run 'php artisan migrate' to create tables in database.
6. Open query toolbox in PHP MyAdmin and copy content of attractions.sql file and run to import attractions data. 
7. Run 'npm install' in command line to install necessary node modules. 
8. Run 'npm run dev' to build project.
8. Project will be running on localhost:8888.

For more info on using the API visit https://www.gitbook.com/book/akoruth95/ch-attractions-manager-api/details

### Credits
Credit for loading animation: https://connoratherton.com/loaders
