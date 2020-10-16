<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'articles';
}
