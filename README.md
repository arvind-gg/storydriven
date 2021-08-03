# Storydriven skill test

## Models

Three models have been created for this mini application with self-explanatory names:

* Album
* Photo (Many-to-one with Album)

The respective model classes have relationships defined within.

Database migrations have been defined for each of the tables corresponding to the three models.

## Controllers

Given the simplicity of the application, there are just two controllers - an ApiController for REST endpoints and Controller for HTTP endpoints.  Routes are defined in the standard `routes/api.php` and `routes/web.php` files contained in the `routes` folder.  If a more robust set of CRUD operations were required for the various models, we could create Resource controllers to automatically generate stub classes with predefined CRUD methods.

### A Note about the album API route

The `getAlbum` method in the API controller custom builds an array that is then JSON encoded so as to exactly match the requirements of the front end JS that calls the route.

## Views

Blade templates for layouts and individual pages are in the standard `resources/views` folder.

## Asset bundling

Laravel Mix is used to bundle CSS/SCSS and Javascript assets.  The main JS for loading and manipulating the individual album pages is contained in `resources/js/album.js`.

Given the relative simplicity of the application, SCSS files are stored in a flat file structure in `resources/sass`.  With a large scale project, we could employ a formal structure such as one using the ITCSS approach, and separate out scss files into folders based on the specificity of the styles defined.

## Development Process

Github URL: https://github.com/arvind-gg/storydriven

1. Install Laravel: I installed the Laravel framework using composer.
1. Define Data Model: I created migrations using the Artisan CLI, defining foreign keys as part of the migration class.
1. Fill out Model relationships: I defined the requisite Eloquent relationships in the models along with some baseline class properties.
1. Define Routes: Defined both API and HTTP routes.
1. Create Controllers: Created the controllers corresponding to the API and HTTP routes.
1. Create view templates: Created layouts and blade templates for individual pages.

### Tools Used

The development tools used were as follows:

*	Composer for PHP package and dependency management.  It is the de facto standard for PHP package management.
*	NPM for JavaScript package management as it is the default for a Laravel install and there were not too many packages that were needed.  Yarn is another JS package manager that I use for some larger projects.
*	Laravel Mix (Webpack-based) for asset bundling.  Webpack is an extremely powerful and highly configurable assets bundler and Laravel Mix provides a straightforward interface to its features.
*	Artisan for command line tasks such as migrations, model, and controller scaffolding.
*	Visual Studio Code as the code editor.  This is a personal preference.
