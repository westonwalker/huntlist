<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceFilter extends Model
{
  use \Sushi\Sushi;

  public $incrementing = false;

  protected $keyType = 'string';

  protected $rows = [
    [
      'id' => 'fishing',
      'name' => 'Fishing',
      'type' => 'filter',
      'slug' => '',
      'emoji' => '🐟',
    ],
    [
      'id' => 'whitetail_hunting',
      'name' => 'Whitetail Deer',
      'type' => 'filter',
      'slug' => '',
      'emoji' => '🦌',
    ],
    [
      'id' => 'mule_deer',
      'name' => 'Mule Deer',
      'type' => 'filter',
      'slug' => '',
      'emoji' => '🦌',
    ],
    [
      'id' => 'elk',
      'name' => 'Elk',
      'type' => 'filter',
      'slug' => '',
      'emoji' => '🦌',
    ],
    [
      'id' => 'turkey',
      'name' => 'Turkey',
      'type' => 'filter',
      'slug' => '',
      'emoji' => '🦃',
    ]
  ];
}