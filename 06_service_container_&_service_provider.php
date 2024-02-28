<?php

/**
 * =================================================================================================================
 * 1. What is Service Container?
 * =================================================================================================================
 */
/*
In Laravel, the service container is like a magical box that manages all the different parts of your application. Imagine it as a big container that holds all the tools (services) your application needs to work properly.
Here's a breakdown in easy words:

What is it?
------------------------
It's a place where Laravel keeps all the tools and functionalities your web application needs to run. you'll find things like database connections, mail services, file systems, and many other tools that your application might need everything is neatly organized in one central location.

It is allow us to use class without using create its object. It is allow us use static functions and non static functions both with scope resolution (::).

Example:
------------------------
Let's say you want to send an email. Instead of manually configuring everything needed to send an email, you can just ask the service container for the mail service. The container will then provide you with everything required to send emails, like SMTP settings or API keys, without you having to worry about the nitty-gritty details.
*/




/**
 * =================================================================================================================
 * 2. What is Service Provider?
 * =================================================================================================================
 */
/*
In Laravel, a service provider acts as a bridge between your application and the Laravel service container.
Here's a simple explanation:

What is it?
--------------
A service provider is like a supplier that tells Laravel how to set up and configure specific tools or services. It's responsible for registering various components and services that your application relies on, providing instructions on how to create or access them.

Example:
--------------
If your application needs to send emails, you'd have a Mail Service Provider that tells Laravel how to set up the mail service. This provider registers this service with the service container, making it available throughout the application.
*/




/**
 * =================================================================================================================
 * 3. Difference between Service Container and Service Provider?
 * =================================================================================================================
 */
/*
 Service Container:
------------------------
    Role:
    -----------
    - The service container is responsible for resolving dependencies, including those required for dependency injection.
    Function:
    -----------
    - It automatically resolves dependencies by injecting the required objects or values into the classes that need them.
    Example:
    -----------
    - If a class requires a database connection, you can type-hint the database connection in its constructor, and the service container will automatically inject the database connection when creating an instance of that class.

Service Provider:
------------------------
    Role:
    -----------
    - While service providers are involved in the dependency injection process indirectly, their primary role is to register bindings within the service container.
    Function:
    -----------
    - Service providers register classes or interfaces with their implementations in the service container, allowing for dependency injection to occur seamlessly.
    Example:
    -----------
    - If you have an interface PaymentGateway and its implementation StripePaymentGateway, the service provider would register a binding between the interface and its implementation in the service container. When a class requests an instance of PaymentGateway, the service container resolves it to an instance of StripePaymentGateway based on the registered binding.
*/




/**
 * =================================================================================================================
 * 4. What is Facades?
 * =================================================================================================================
 */
/*
Facades in Laravel provide a convenient way to access classes bound in the service container without needing to instantiate them directly. They act as static proxies to underlying classes managed by Laravel's service container. Here's a breakdown:
Purpose:
---------------
 Facades provide a static interface to classes that are available in the service container, allowing for simplified syntax and improved readability. Facades are typically used to access core Laravel services and components such as the database, cache, session, and mail.

Usage: 
----------------
Instead of directly instantiating and using classes, you can use facades to access their methods in a more concise and expressive manner.


Example:
----------------
 Let's consider the Cache facade in Laravel:

 // Without Facade
$value = app('cache')->get('key');

// With Facade
$value = Cache::get('key');

*/




/**
 * =================================================================================================================
 * 5. How to create a Custom Facade?
 * =================================================================================================================
 */
/*

a). Create a Simple Class:
----------------------------------

namespace App\Services;

class CustomService
{
    public function doSomething()
    {
        return 'Doing something...';
    }
}

b). Create a Facade Class:
----------------------------------
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class CustomFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'customservice';
    }
}

c). Register in the Service Container:
-----------------------------------------
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CustomService;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('customservice', function () {
            return new CustomService();
        });
    }
}


d). Create Alias the facade:
-----------------------------------------
'aliases' => [
    // Other aliases...
    'CustomFacade' => App\Facades\CustomFacade::class,
],


e). Use the Facade:
-----------------------------------------
use App\Facades\CustomFacade;

// Using the custom facade
CustomFacade::doSomething();
*/
