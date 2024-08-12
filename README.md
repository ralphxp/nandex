# Codizium Micro Framework

## Overview
Codizium Micro Framework is a lightweight PHP framework designed for secure routing and API development. With an intuitive and straightforward syntax, it facilitates rapid development while adhering to best practices in security and performance. The framework supports the MVC architecture, making it easy to maintain and scale your applications.

Developed by Codizium Innovative Technologies in Jos, Nigeria, the framework embodies the innovative spirit of its founder, Rapha Panchi.

## Features

- **Secure Routing:** Define routes using a clear and concise syntax.
- **API Development:** Create robust APIs with minimal effort.
- **MVC Support:** Separate your code into models, views, and controllers for better organization.
- **Lightweight:** Minimal overhead to ensure fast performance.
- **Easy to Use:** Simplified syntax to get you started quickly.

## Getting Started

### Prerequisites

- PHP 7.4 or higher
- Composer

### Installation

1. **Start project:**

   ```bash
   composer create-project codx/codx
   cd comic
   ```

2. **Install dependencies:**

   ```bash
   composer install
   ```
3. **Run:**

   ```bash
   php ralph serve
   ```

### Basic Usage

#### Defining Routes

Define routes in your `routes.blade.php` file using the framework's syntax:

```php
@get('/')
@controller('HomeController@index')
@end
```

#### Creating Controllers

Controllers should be placed in the `app/Controllers` directory. Here's an example of a simple controller:

```php
namespace Codx\Comic\Controller;

use Codx\Ralph\Engine as View;
use \Codx\Comic\Model\User;


class HomeController extends Controller{

    public function index()
    {
       
        return View::view('welcome');
    }

    public function auth()
    {
        echo("logged");
    }
}
```

#### Creating Views

Views should be placed in the `views` directory. Here's an example of a simple view file `welcome.blade.php`:

```php
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome to Comic Micro Framework</h1>
</body>
</html>
```

### Directory Structure

```
/comic
├── app
│   ├── Controllers
│   │   └── HomeController.php
│   └── Models
|       |__ User.php
├── config
│   └── app.php
├── public
│   └── index.php
├── views
│   └── welcome.blade.php
├── routes
│   └── router.blade.php
├── composer.json
└── README.md
```

### Running the Application

To start the development server, navigate to the `public` directory and use PHP's built-in server:

```bash
php ralph serve
```

Visit `http://localhost:8000` in your browser to see your application in action.

## Contributing

We welcome contributions from the community! If you would like to contribute, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes and commit them (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.

## License

This project is licensed under the MIT License. See the `LICENSE` file for more details.

## Contact

For any inquiries or support, please contact Codizium Innovative Technologies at [raphapanchi@gmail.com].

---

Developed with ❤️ by Codizium Innovative Technologies, Jos, Nigeria. Founded by Rapha Panchi.