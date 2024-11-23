<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportEquipment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'brand', 'description', 'equipment_status', 'image_path',];
}
