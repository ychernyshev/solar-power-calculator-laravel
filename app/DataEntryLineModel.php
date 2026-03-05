<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataEntryLineModel extends Model
{
    const POWER_OPTIONS = ['200', '400', '600', '800'];

    protected $fillable = [
        'date', 'power', 'morning_data_charge', 'morning_data_price',
        'afternoon_data_charge', 'afternoon_data_price',
        'evening_data_charge', 'evening_data_price',
        'default_day_energy_formula', 'full_day_power', 'full_day_cost', 'power_tariff'
    ];

    public function weather()
    {
        return $this->belongsToMany(WeatherCondition::class, 'data_entry_line_weather');
    }
}
