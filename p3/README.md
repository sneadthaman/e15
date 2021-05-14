# Project 3 - Dashboard Application for Sales Department

-   By: Sam Janvey
-   Production URL: <http://e15p3.samjanvey.com>

## Feature Summary

-   Authorized users can login
-   There is no way for a new user to register
-   Upon successful login, the user will see a snapshot of customers, organized by sales
-   Each customer can have a project added to the project list
-   Projects can be updated and/or deleted
-   Each customer can have many projects, but each project can only have one customer

## Database Summary

-   My application has 3 tables (`users`, `customers`, `projects`)
-   There's a one-to-many relationship between `customers` and `projects`

## Outside Resources

-   [Bootstrap 5](https://getbootstrap.com/)
