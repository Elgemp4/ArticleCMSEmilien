<?php

namespace App;

enum RolesEnum: string
{
    case ADMIN = "admin";
    case VIEWER = "viewer";
    case EDITOR = "editor";
}
