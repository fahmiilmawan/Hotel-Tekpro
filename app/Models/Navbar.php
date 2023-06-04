<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    use HasFactory;

    protected $table = 'navbar';

    protected $fillable = [
      'icon', 'title', 'menu','m_about','m_reservation','m_facility','m_room','login_color', 'nav_color'
    ];
}
