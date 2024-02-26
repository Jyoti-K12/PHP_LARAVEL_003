<?php

/**
 * =================================================================================================================
 * 1. What is Laravel?
 * =================================================================================================================
 */
/*
- Laravel is a server-side PHP framework that makes web app development easier with follows Eloquent ORM.
- It provides a set of tools and resources for building modern web applications
- The framework also comes with built-in features like native authentication for a smooth programming experience.
*/




/**
 * =================================================================================================================
 * 2. What is ORM?
 * =================================================================================================================
 */
/*
- ORM stands for Object-Relational Mapping. It's a technique used in software development to bridge the gap between the object-oriented programming (OOP) paradigm and relational databases.

- In simpler words, ORM allows you to interact with databases using objects in your programming language, rather than writing raw SQL queries.


ORM in Laravel
------------------
- Models: In Laravel, each database table has a corresponding "Model" class. Models represent the data stored in the database and define the structure and behavior of that data. They typically reside in the app/Models directory.

- Eloquent Relationships: Eloquent allows you to define relationships between different models. For example, a User model may have a "one-to-many" relationship with a Post model, meaning a user can have multiple posts.

- CRUD Operations: Eloquent simplifies CRUD (Create, Read, Update, Delete) operations. You can create new records by instantiating a model object, read records using methods like find() or all(), update records using the save() method, and delete records using the delete() method.

- Query Builder: Eloquent provides a fluent query builder interface for constructing database queries. This allows you to perform complex queries without writing raw SQL. For example, you can use methods like where(), orderBy(), groupBy(), etc., to build queries dynamically.
*/




/**
 * =================================================================================================================
 * 2. What is Eloquent ORM?
 * =================================================================================================================
 */
/*
 - 'Eloquent' and 'ORM' are two different words with different meanings.
 
 
┌───────────────────────┐      ┌───────────────────────┐      ┌───────────────────────┐
│       Eloquent        │      │          ORM          │      │                       │
|     (Type of ORM/     │  +   │     (A Technique/     │  =   │     Eloquent ORM      │
| Coding Pattern Type)  │      | Coding Pattern Style) │      |                       │
└───────────────────────┘      └───────────────────────┘      └───────────────────────┘


- Eloquent: It is a 'Coding Pattern' and type of ORM that are used in 'Laravel' and 'Codeigniter'. 

- ORM: It's a technique used in software development or a unique style of coding pattern.

- Different types of ORMs:
---------------------------
    - Eloquent
    - Doctrine
    - Redbean
    - Spot
    - propel

*/
