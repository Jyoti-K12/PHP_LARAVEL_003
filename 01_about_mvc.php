<?php

/**
 * =================================================================================================================
 * 1. What is MVC?
 * =================================================================================================================
 */

/*
 MVC stands for Model-View-Controller, which is a software design pattern used to organize and structure code in a web application.
 
 
MVC (Model-View-Controller)
------------------------------

├── Model
│   ├── Represents the data and business logic
│   ├── Handles data manipulation and database interactions
│   └── Example: User Model, Product Model
│
├── View
│   ├── Represents the presentation layer
│   ├── Displays data to the user
│   └── Example: User View, Product View
│
└── Controller
    ├── Intermediary between Model and View
    ├── Handles user requests and application flow
    └── Example: User Controller, Product Controller

 */





/**
 * =================================================================================================================
 * 2. What is MVC Pattern Work Flow?
 * =================================================================================================================
 */
/*
=> Get Result From Database
--------------------------------
 ┌──────────────┐
 │ User Request │
 └──────┬───────┘
        │
        V 
 ┌──────────────┐
 │  Controller  │
 └──────┬───────┘
        │
        V 
 ┌──────────────┐
 │    Model     │
 └──────┬───────┘
        │
        V 
 ┌──────────────┐
 │     View     │
 └──────┬───────┘
        │
        V 
 ┌──────────────┐
 │   Response   │
 └──────┬───────┘
        │
        V 
 ┌──────────────┐
 │     User     │
 └──────────────┘
 
 


 => Get Result Without Database
----------------------------------
 ┌──────────────┐
 │ User Request │
 └──────┬───────┘
        │
        V
 ┌──────────────┐
 │  Controller  │
 └──────┬───────┘
        │
        V 
 ┌──────────────┐
 │     View     │
 └──────┬───────┘
        │
        V 
 ┌──────────────┐
 │   Response   │
 └──────┬───────┘
        │
        V 
 ┌──────────────┐
 │     User     │
 └──────-───────┘       
*/





/**
 * =================================================================================================================
 * 3. Benefits of MVC?
 * =================================================================================================================
 */
/*
    - Organized Code
    - independent block
    - easy to maintain
    - easy to modify
    - easy to reusable
*/




/**
 * =================================================================================================================
 * 4. What is Framework?
 * =================================================================================================================
 */
/*
 - Frameworks are set of pre-written code and library that provide a structure or foundation for developing software application.
 */
