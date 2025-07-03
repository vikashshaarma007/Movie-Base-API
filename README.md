<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>




<h1 align="center">🎬 MovieBase API — Laravel RESTful Movies & Reviews System 🧮🚀</h1>
<p align="left"><i>MovieBase API is a backend RESTful web service built with Laravel and PostgreSQL that allows users to manage a collection of movies and user-submitted reviews. The application follows RESTful architecture principles and provides full CRUD operations for both entities. It’s suitable for powering a movie listing site, review platform, or learning projects.</i></p>
<br>

<p align="center"><i>CRUD Operations</i> 👨🏽‍💻 
  <br>

<p align="left"><i>MovieBase API is a Laravel-based RESTful API application designed to manage a database of movies and user reviews. It provides a complete suite of CRUD operations (Create, Read, Update, Delete) for both movies and their associated reviews, making it ideal for use in movie listing or review platforms.<br>
This backend system is built using Laravel 10, follows REST API best practices, and is designed to be tested using tools like Postman.</i></p>

 ## ✅ Features
```sh
      •  Full CRUD API for managing:
	      🎬 Movies
	      📝 Movie-specific Reviews
      •  Nested review routes under each movie
      •  Validated input using Laravel Form Requests
      •  Built-in data relationships with Eloquent
      •  Bulk movie insert support via JSON
      •  Structured according to REST standards

```

<!-- TABLE OF CONTENTS -->
<details>
  <summary>📚 Table of Contents (Click to expand)</summary>
  <ol>
    <li><a href="#about-the-project">📌 About the Project</a></li>
    <li><a href="#built-with">🛠️ Built With</a></li>
    <li><a href="#demo">📸 Demo</a></li>
    <li>
      <a href="#getting-started">🚀 Getting Started</a>
      <ul>
        <li><a href="#prerequisites">📌 Prerequisites</a></li>
        <li><a href="#installation">⚙️ Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">🧪 Usage</a></li>
    <li><a href="#roadmap">📈 Roadmap</a></li>
  </ol>
</details>



 ## Built With :
  # Technology Stack:
  * Php
  * Laravel
  * Blade
  * PostgreSQL Database
  * RestFull API
  

<!-- GETTING STARTED -->
## Demo:
* API endpoint to return all movies with their nested reviews:
 ![image](https://github.com/user-attachments/assets/53703703-8dd6-4d72-9713-adb114298714)
 ![image](https://github.com/user-attachments/assets/9375e39b-a716-4986-875e-ff277712696c)

* API endpoint to create movie with their nested reviews
  ![image](https://github.com/user-attachments/assets/3b6c77fd-2b86-4a5d-9f9b-32094603b8f2)
  
* Database Table
   1. Movies
    ![image](https://github.com/user-attachments/assets/faae628f-4d61-4fee-944a-c7c14c821bc1)
   2. Review
    ![image](https://github.com/user-attachments/assets/3f8f4706-4afa-4e61-a817-a884e70d2fe2)



## Getting Started
### Prerequisites
```sh
       PHP >= 8.1
       Composer
       PostgreSQL
       Laravel CLI
       Web server (Apache/Nginx for production)
  ```
### Installation 
   Follow these simple steps to get the server up and running 👾🧮🚀✅.
  1. Clone the repo

```sh
     https://github.com/vikashshaarma007/Movie-Base-API.git
      cd Movie-Base-API
```
2. Run the Project
   ```sh
    1. Create a Database -> MovieRestApi_DB using pgAdmin 4 or any PostgreSQL client.
    2. Open the project in your preferred IDE (e.g., VS Code, PHPStorm, Sublime Text).
    3. Install project dependencies:
       composer install
    4. Copy the example environment config and update it:
       cp .env.example .env
    5. Edit the `.env` file and update database settings:
       DB_CONNECTION=pgsql
       DB_HOST=127.0.0.1
       DB_PORT=5432
       DB_DATABASE=MovieRestApi_DB
       DB_USERNAME=postgresql
       DB_PASSWORD=root
    6. Generate the application key:
       php artisan key:generate
    7. Run migrations to create tables:
       php artisan migrate
    # Tables created: employee
    8. (Optional) Add sample data using seeders or via pgAdmin 4.
    9. Start the Laravel development server:
       php artisan serve
    10. Open the web browser at: http://localhost:8000/
    11. Use the web app to Add, Fetch, Update, and Delete records.
   ```
## Usage
```sh
     Add new movies using the API.
     Submit, edit, or delete reviews for any movie.
     Retrieve all movies with their associated reviews.
     Bulk upload multiple movies via JSON.
     All actions use Laravel's built-in validation, routing, and Eloquent ORM.

```
## Roadmap
```sh
      Add authentication using Laravel Sanctum.
      Implement role-based access (Admin, Reviewer).
      Add support for movie poster/image uploads.
      Export movie and review data to CSV or PDF.
      Introduce pagination and filtering for movies and reviews.
      Create an OpenAPI (Swagger) documentation for all endpoints.
```
