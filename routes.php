<?php

const ROUTES = [
    "/" => [
        "CONTROLLER" => "HomeController",
        "METHOD" => "index",
        "HTTP_METHODS" => "GET",
    ],
    "/create" => [
        "CONTROLLER" => "HomeController",
        "METHOD" => "create",
        "HTTP_METHODS" => "POST",
        'AUTH' => ['ROLE_USER', 'ROLE_ADMIN']
    ],
    "/roleuser" => [
        "CONTROLLER" => "RoleUserController",
        "METHOD" => "index",
        "HTTP_METHODS" => "GET",
        'AUTH' => ['ROLE_USER']
    ],
    "/roleadmin" => [
        "CONTROLLER" => "RoleAdminController",
        "METHOD" => "index",
        "HTTP_METHODS" => "GET",
        'AUTH' => ['ROLE_ADMIN']
    ],
    "/login" => [
        "CONTROLLER" => "AuthController",
        "METHOD" => "login",
        "HTTP_METHODS" => ["GET", "POST"],
    ],
    "/logout" => [
        "CONTROLLER" => "AuthController",
        "METHOD" => "logout",
        "HTTP_METHODS" => ["GET"],
    ],
    "/register" => [
        "CONTROLLER" => "AuthController",
        "METHOD" => "register",
        "HTTP_METHODS" => ["GET", "POST"],
    ],

    "/users" => [
        "CONTROLLER" => "UsersController",
        "METHOD" => "index",
        "HTTP_METHODS" => "GET",
    ],
    "/api/users" => [
        "CONTROLLER" => "UsersController",
        "METHOD" => "getApiUsers",
        "HTTP_METHODS" => "GET",
    ],
    "/api/delete/user/{userId}" => [
        "CONTROLLER" => "UsersController",
        "METHOD" => "deleteApiUser",
        "HTTP_METHODS" => "DELETE",
    ],
    "/api/add/user" => [
        "CONTROLLER" => "UsersController",
        "METHOD" => "addApiUser",
        "HTTP_METHODS" => "POST",
    ],
    "/api/edit/user/{userId}" => [
        "CONTROLLER" => "UsersController",
        "METHOD" => "editApiUser",
        "HTTP_METHODS" => "PATCH",
    ],
    "/api/user/{userId}" => [
        "CONTROLLER" => "UsersController",
        "METHOD" => "getApiUser",
        "HTTP_METHODS" => "GET",
    ],

];
