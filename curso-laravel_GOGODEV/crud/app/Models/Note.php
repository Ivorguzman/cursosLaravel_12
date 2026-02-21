<?php declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


//& php artisan make:model Note --migration
class Note extends Model
    {
    use HasFactory;
    protected $fillable = [
        "titulo",
        "descripcion",
    ];
    }
 