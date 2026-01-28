<?php declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
	{
	use HasFactory;

	/* 
 protected $table='notes';
// campos que podran ser cumplimentados de forma masiva
 protected $fillable=['title', 'description','deadline','done'];
 // campos protegidos de asignacion masiva
 protected  $guarded=['id', 'created_at', 'updated_at'];

 // valores que  se esperan
 protected $casts=['done'=>'boolean','deadline'=>'date'];

 protected $hidden=['created_at','updated_at','password'];
*/

	}
