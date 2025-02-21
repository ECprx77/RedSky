<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\UserModel;
use App\Utils\Route;
use App\Utils\HttpException;
use App\Middlewares\AuthMiddleware;

Class Posts extends Controller {
    protected object $post;
    public function __construct(object $post) {
        $this->post = $post;
        parent::__construct($post);
    }
}