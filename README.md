# Lekoi PHP Web Framework

Lekoi is a lightweight PHP web framework inspired by Rails, designed to simplify web development with elegant conventions and ease of use. It provides a clean and efficient way to build web applications with minimal boilerplate code.

## Features

* MVC Architecture: Follow the Model-View-Controller pattern to organize your application efficiently.
* Routing: Simplified routing system for handling HTTP requests and generating URLs.
* ORM (Object-Relational Mapping): Easy database interactions with built-in ORM for seamless data management.
* Built-in Tools: Includes tools for migrations, scaffolding, and more.
* Convention Over Configuration: Reduces the need for configuration with sensible defaults.
  
## Installation
  
To get started with Lekoi, follow these steps:

Download Lekoi:

```bash
git clone https://github.com/yourusername/lekoi.git
cd lekoi
```

## Install Dependencies:

Ensure you have Composer installed. Run the following command to install dependencies:

```bash
composer install
```

## Configure Your Environment:

Copy the .env.example file to .env and configure your environment variables:

```bash
cp .env.example .env

## Run the Development Server:

```bash
php -S localhost:8000 -t public
```

Your application will be available at http://localhost:8000.

Usage
Creating a New Project
To create a new project using Lekoi:

Create a New Application:

bash
Copy code
php lekoi new myapp
Navigate to Your Project Directory:

bash
Copy code
cd myapp
Start the Development Server:

bash
Copy code
php -S localhost:8000 -t public
Generating Components
Lekoi provides commands to generate various components of your application:

Generate a Model:

bash
Copy code
php lekoi make:model ModelName
Generate a Controller:

bash
Copy code
php lekoi make:controller ControllerName
Generate a Migration:

bash
Copy code
php lekoi make:migration create_table_name
Routing
Define your routes in routes/web.php. For example:


php
Copy code
Route::get('/', 'HomeController@index');
Route::get('/about', 'AboutController@show');
Models
Define your models in app/Models. Each model class should extend Lekoi\Model.

Example model:

php
Copy code

<?php

namespace App\Models;

use Lekoi\Model;

class User extends Model
{
    protected $table = 'users';
}
Controllers
Define your controllers in app/Controllers. Each controller should extend Lekoi\Controller.

Example controller:

php
Copy code
<?php

namespace App\Controllers;

use Lekoi\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
}
Contributing
We welcome contributions to Lekoi! To contribute:

Fork the Repository
Create a New Branch
bash
Copy code
git checkout -b feature/your-feature
Commit Your Changes
bash
Copy code
git commit -m "Add your feature"
Push to the Branch
bash
Copy code
git push origin feature/your-feature
Submit a Pull Request
License
Lekoi is licensed under the MIT License. See the LICENSE file for more information.

Contact
For questions or support, please contact us at your-email@example.com.
