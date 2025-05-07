<?php

// app/Models/ProductOut.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOut extends Model
{
    protected $primaryKey = 'ProductOut_id';
    protected $fillable = ['PCode', 'prOut_Date', 'prOut_Quantity', 'prOut_unit_Price', 'prOut_TotalPrice'];
}