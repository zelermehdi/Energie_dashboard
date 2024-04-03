<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnergyProduction extends Model
{
    use HasFactory;

   
        // Installation : La production d'énergie appartient à une installation
        public function installation()
        {
            return $this->belongsTo(Installation::class);
        }
   



}
