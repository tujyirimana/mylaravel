<?php

// app/Models/ProductIn.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductIn extends Model
{
    protected $primaryKey = 'ProductIn_id';
    protected $fillable = ['PCode', 'prIn_Date', 'prIn_Quantity', 'prIn_Unit_Price', 'prIn_TotalPrice'];
}