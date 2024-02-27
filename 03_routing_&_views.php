<?php

/**
 * =================================================================================================================
 * 1. What is Routing?
 * =================================================================================================================
 */
/*
Routing in Laravel is the process of directing incoming web requests to the appropriate controller actions or closures based on defined URL patterns.
In Laravel, routes are used to define URLs and map them to specific controller actions or closures.
*/





/**
 * =================================================================================================================
 * 2. Types of Routes?
 * =================================================================================================================
 */
/*
Web Routes:

    - Web routes are used for handling HTTP requests in traditional web applications.
    - They are typically associated with routes that serve HTML views, handle form submissions, and manage user authentication using sessions and cookies.
    - Web routes are defined in the routes/web.php file by default.


API Routes:
----------------
    - API routes are used for building RESTful APIs or other stateless API services.
    - They are designed for handling HTTP requests from clients such as mobile apps or single-page applications (SPAs) and typically return JSON or XML responses.
    - API routes are defined in the routes/api.php file by default.

Named Routes:
----------------
    - Named routes allow you to assign a unique name to a route, making it easier to reference in your application's code.
    - This can be particularly useful when generating URLs or redirects within your application.
    - Named routes are defined using the name() method when defining routes.

Route Parameters:
------------------
    - Route parameters allow you to capture segments of the URI within your routes.
    - These parameters are enclosed within curly braces {} in the route definition.
    - They allow you to dynamically handle different URIs and pass the captured values to your controller or closure.

Route Groups:
----------------
    - Route groups allow you to apply common attributes, such as middleware, prefixes, or namespaces, to a group of routes.
    - This helps in organizing and centralizing the configuration of routes that share similar characteristics.
    - Route groups are defined using the Route::group() method.

Route Prefixes:

    - Route prefixes allow you to define a common URI prefix for a group of routes.
    - This is useful for grouping related routes under a common URL segment, such as /admin for administrative routes.
    - Route prefixes are specified using the prefix() method within a route group.
*/




/**
 * =================================================================================================================
 * 3. Difference between Web Routes and Api Routes?
 * =================================================================================================================
 */
/*
Web Routes
----------------
    - Purpose: handle HTTP requests in traditional web applications.
    - Session & Cookies: do session management and cookies for user authentication and state maintenance.
    - Middleware: Web middleware is applied, which includes features like CSRF protection, session handling, and other web-specific functionalities.
    - Response: These routes often return HTML views or redirect responses for web pages.
    - File: Defined in routes/web.php.


api Routes
----------------
    - Purpose: handle HTTP requests in RESTful APIs or other stateless API services.
    - Stateless Communication: Designed for stateless communication where each request is independent and doesn't rely on sessions or cookies for authentication or state maintenance.
    - Middleware: API middleware is applied, which typically includes request validation, rate limiting, and other middleware specific to API functionalities.
    - Response: These routes usually return JSON or XML responses representing data rather than HTML views.
    - File: Defined in routes/api.php.
*/




/**
 * =================================================================================================================
 * 4. What is Reverse Routing?
 * =================================================================================================================
 */
/*
 - Reverse routing, also known as route naming or named routes, that allows you to generate URLs based on route names rather than hardcoding them directly into your application code. When you define routes in your application, you can assign each route a unique name.

 Benefits of Reverse routing:
 ------------------------------
    - Reverse routing allows you to generate URLs for routes with dynamic parameters easily. You can pass parameters to the route function, and Laravel will automatically generate the correct URL with the appropriate parameters inserted.

    - Minimizes the risk of broken links or errors when modifying URL structures or routes.

    - Makes it easier for developers to understand the purpose of URL generation calls by simply looking at the route names.

    - Enhances code readability by providing a clear and centralized way to generate URLs based on route names.
 */



/**
 * =================================================================================================================
 * 5. Define HTTP methods of routing?
 * =================================================================================================================
 */
/*

GET:
------------
    - Used to retrieve data from the server. Typically used for fetching web pages or resources.
    - Example: Route::get('/profile', 'ProfileController@show');

POST:
------------
   - Used to submit data to the server to create or update a resource. Commonly used for form submissions.
   - Example: Route::post('/profile', 'ProfileController@update');


PUT:
------------
    - Used to update a resource on the server. Although traditional HTML forms don't support PUT directly, it's often used in RESTful APIs.
    - Example: Route::put('/profile/{id}', 'ProfileController@update');


PATCH:
------------
    - Similar to PUT, used to update a resource on the server, typically for partial updates.
    - Example: Route::patch('/profile/{id}', 'ProfileController@update');


DELETE:
------------
    - Used to delete a resource on the server.
    - Example: Route::delete('/profile/{id}', 'ProfileController@destroy');


ANY:
------------
    - Matches any HTTP method. This is useful when you want to match a route regardless of the HTTP method used. 
    - Example: Route::any('/profile', 'ProfileController@show');

MATCH:
------------
    - Matches one or more specified HTTP methods. This allows you to define a route that responds to multiple HTTP methods.
    - Example: Route::match(['get', 'post'], '/profile', 'ProfileController@show');
*/




/**
 * =================================================================================================================
 * 6. Define utility methods of routing?
 * =================================================================================================================
 */
/*
group():
-------------
     - Groups related routes together and allows you to apply common attributes such as middleware, prefixes, namespaces, and route naming conventions to the group.
     - Example:

fallback():
-------------
     - Defines a fallback route that is executed when no other routes match the incoming request. This is often used to handle 404 errors or serve custom error pages.
     - Example: Route::fallback(function () { abort(404, 'Page Not Found'); });

redirect():
-------------
     - Performs URL redirection within route definitions. It's handy for redirecting requests from one URL to another.
     - Example: Route::redirect('/old-url', '/new-url');

middleware():
-------------
     - Assigns middleware to routes or route groups. Middleware is used to filter HTTP requests entering your application and can perform tasks like authentication, authorization, logging, etc.
    - Example:Route::middleware('auth')->group(function () { // Routes requiring authentication });

name():
-------------
     - Assigns a unique name to a route, allowing you to reference the route by its name instead of its URL. Named routes are useful for generating URLs dynamically and improving code readability.
     - Example: Route::get('/profile', 'ProfileController@show')->name('profile');

prefix():
-------------
    - Adds a prefix to all routes within a group. It's useful for grouping related routes under a common URL segment.
    - Example: Route::prefix('admin')->group(function () { // Admin routes });


namespace():
-------------
    - Sets the namespace for controllers within a group of routes. This is helpful when you have controllers organized into different namespaces.
    - Example: Route::namespace('Admin')->group(function () { // Controllers in the Admin namespace });

domain(): 
-------------
    - Defines a route group with a specific domain. It allows you to define routes that should be accessible only on specific subdomains.
    - Example: Route::domain('api.example.com')->group(function () { // Routes for a specific subdomain });
*/


/**
 * =================================================================================================================
 * 6. What is route caching?
 * =================================================================================================================
 */
/*
- Laravel comes with route caching out of the box. By default all routes are cached, which means that the application will only load the routes once. This is great if your routes are static.

- Here's an example of how to use route caching in Laravel:
    * Define Your Routes:
        Route::get('/hello', function () {
            return 'Hello, world!';
        });

        Route::get('/profile/{id}', function ($id) {
            return 'User ID: ' . $id;
        });

    * Cache Routes:
        php artisan route:cache
        (This command will generate a cached version of your routes in the bootstrap/cache/routes.php file.)

    * Clear Route Caches:
        php artisan route:clear

*/