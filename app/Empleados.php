<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'empleados';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NombreEmpleado', 'ApellidoEmpleado', 'Edad', 'Correo', 'Foto'];
}
