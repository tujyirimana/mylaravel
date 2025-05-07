<?php
// app/Models/Product.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'PCode';
    protected $fillable = ['PName', 'PCode']; // Add 'PCode' to fillable array
}