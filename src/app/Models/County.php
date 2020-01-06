<?php

namespace LaravelEnso\RoAddresses\App\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Helpers\App\Contracts\Activatable;
use LaravelEnso\Helpers\App\Traits\ActiveState;

class County extends Model implements Activatable
{
    use ActiveState;

    protected $fillable = ['abbreviation', 'name'];

    public function localities()
    {
        return $this->hasMany(Locality::class);
    }
}
