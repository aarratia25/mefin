<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as SpatieRole;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Scopes\isAdmin;

class Role extends SpatieRole
{
    use SoftDeletes;

    public function scopeList($query)
    {
        return $query->where('name', '!=', 'admin')->orderBy('id', 'desc')->get();
    }
}
