<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
  use HasFactory;
  protected $guarded = [];

  public function getRouteKeyName()
  {
    return 'slug';
  }

  protected static function booted()
  {
    self::creating(function ($model) {
      $model->overall_score = $model->calculateScore($model);
    });
    self::updating(function ($model) {
      $model->overall_score = $model->calculateScore($model);
    });
  }

  private function calculateScore($place)
  {
    $huntingScores = [
      $place->whitetail_score,
      $place->turkey_score,
      $place->elk_score,
      $place->mule_deer_score,
      $place->fishing_score
    ];
    rsort($huntingScores);
    $huntingScore1 = $huntingScores[0];
    $huntingScore2 = $huntingScores[1];
    $hospitalScore = 0;
    if ($place->nearest_hospital_distance <= 20)
      $hospitalScore = 10;
    else if ($place->nearest_hospital_distance <= 40)
      $hospitalScore = 7.5;
    else if ($place->nearest_hospital_distance <= 60)
      $hospitalScore = 5;
    else if ($place->nearest_hospital_distance <= 90)
      $hospitalScore = 2.5;
    else
      $hospitalScore = 1;

    $scores = [
      $huntingScore1, // Weigh hunting slightly higher than other scores
      $huntingScore2,
      $hospitalScore,
      $place->cell_coverage_score,
      $place->dangerous_animal_score,
      $place->weather_score
    ];
    return round(array_sum($scores) / count($scores), 2);
  }
}