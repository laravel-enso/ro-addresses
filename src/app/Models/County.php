<?php

namespace LaravelEnso\RoAddresses\App\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Helpers\App\Traits\ActiveState;
use LaravelEnso\Helpers\App\Contracts\Activatable;

class County extends Model implements Activatable
{
    use ActiveState;

    protected $fillable = ['abbreviation', 'name'];

    public function localities()
    {
        return $this->hasMany(Locality::class);
    }
}
