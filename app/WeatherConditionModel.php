<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeatherConditionModel extends Model
{
  protected $fillable = ['name'];

  public function entries()
  {
      return $this->belongsToMany(DataEntryLineModel::class, 'data_entry_line_weather');
  }
}
