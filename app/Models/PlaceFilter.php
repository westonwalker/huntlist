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
      'name' => 'Whitetail Hunting',
      'type' => 'filter',
      'slug' => '',
      'emoji' => '🦌',
    ],
    [
      'id' => 'big_whitetails',
      'name' => 'Big Whitetails',
      'type' => 'filter',
      'slug' => '',
      'emoji' => '🦌',
    ],
    [
      'id' => 'ice_fishing',
      'name' => 'Ice Fishing',
      'type' => 'filter',
      'slug' => '',
      'emoji' => '🦌',
    ]
  ];
}