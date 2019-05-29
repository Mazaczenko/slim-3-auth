# Slim 3 Authentication
A very easy to use Slim 3 authentication system.

[![Latest Unstable Version](https://poser.pugx.org/devsavage/slim-3-authentication/v/unstable?format=flat-square)](https://packagist.org/packages/devsavage/slim-3-authentication)
[![License](https://poser.pugx.org/devsavage/slim-3-authentication/license?format=flat-square)](https://packagist.org/packages/devsavage/slim-3-authentication)

If you stumble upon any vulnerabilities within this package, more importantly with the role/permission system, please send your findings to: **savage@savagedev.io**.  

## Getting Started

### Prerequisites

You will need the following to get started:

* A web server with URL rewriting
 - PHP 5.5 or newer
 - A SSL certificate will be required in production environments! Check out [HTTPS Is Easy](https://httpsiseasy.com/) for help setting this up!  
* [Composer](https://getcomposer.org/)
* [Yarn](https://yarnpkg.com/) or [npm](https://www.npmjs.com/)

### Installing
#### Clone the project:
```
git clone https://github.com/devsavage/slim-3-authentication.git your-project-name
```

#### Install the composer dependencies:
```bash
$ cd your-project-name && composer install
```

#### Inside your project folder, install the node dependencies using yarn or npm:
```bash
$ yarn install
```

#### Rename *_.env-example_* to *_.env_*

#### Update *_.env_* to your project's configuration
```bash
APP_ENV=development
```
You will need to update the **APP_ENV** variable to "production" when serving your application outside of a local environment!

#### Build assets (prodution or development)
```bash
$ yarn prod
```

```bash
$ yarn dev
```
#### Database and Admin
1. Import auth.sql file to your database.
2. Open your site, register a new user and click on activation link sent to your email
3. Go to **phpMyAdmin**, select **user_roles** table and insert a new record. Select your user on **user_id** field, select "superadmin" on **role_id** field and confirm.
4. Login on site to see "Admin Dashboard" on header menu 

#### Migrations and Seeds
Create migration file
```bash
php phinx create MigrationName
```
Create seed file
```bash
php phinx seed:create SeedName
```
Run migrations
```bash
php phinx migrate
```
Run seeds
```bash
php phinx seed:run
```
Use `php phinx` on terminal to see all available command list.

#### You will also need Google reCAPTCHA API keys. Get them [here](https://www.google.com/recaptcha).

*If you would like to completely disable reCAPTCHA, see this [page](https://github.com/devsavage/slim-3-authentication/wiki/Completely-remove-reCAPTCHA)*

### Check out the [wiki](https://github.com/devsavage/slim-3-authentication/wiki/) for more information and details on how to add new controllers, routes and more.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details
