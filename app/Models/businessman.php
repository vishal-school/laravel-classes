<?php
namespace App;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class businessman extends Model
{
  
      protected $table="businessman";
      protected $primaryKey = 'b_id';
      public $timestamps = true;
     

  // use HasFactory;
}
