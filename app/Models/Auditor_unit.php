<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Auditor_Unit extends Model
{
    use HasFactory;

    protected $table = 'auditor_unit';

    protected $primarykey = 'id_auditor';

    protected $fillable = [
        'id_user',
        'id_unit_audit',
        'nama_auditor',
        'nip_auditor'
    ];

    protected $hidden = [
        'created_at',
        'update_at'
    ];

    //Relation with Users
    public function user ()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    //Relation with Unit_Audit
    public function unit_audit()
    {
        return $this->belongsTo(Unit_Audit::class, 'id_unit_audit');
    }
}
