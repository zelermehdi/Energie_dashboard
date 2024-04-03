<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installation extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // EnergyProduction : Une installation peut avoir plusieurs productions d'énergie
    public function energyProductions()
    {
        return $this->hasMany(EnergyProduction::class);
    }

    // Alert : Une installation peut avoir plusieurs alertes
    public function alerts()
    {
        return $this->hasMany(Alert::class);
    }

    // Maintenance : Une installation peut avoir plusieurs maintenances
    public function maintenanceRecords()
    {
        return $this->hasMany(Maintenance::class);
    }

}
