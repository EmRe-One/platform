<?php

namespace Orchid\Foundation\Core\Models;

use Orchid\Access\RoleAccess;
use Orchid\Access\RoleInterface;
use Illuminate\Database\Eloquent\Model;

class Role extends Model implements RoleInterface
{
    use RoleAccess;

    /**
     * @var
     */
    protected static $usersModel = User::class;

    /**
     * @var string
     */
    protected $table = 'roles';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'slug',
        'permissions',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'permissions' => 'array',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
