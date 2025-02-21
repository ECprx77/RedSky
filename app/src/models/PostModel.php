<?php

namespace App\Models;

use App\Models\SqlConnect;
use \PDO;

class PostModel extends SqlConnect {
    private $table = "posts";
    private $primaryKey = "id";
    private $bodyFill = [];
}