<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceApplicationRecord extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // 未承認
    public const APPROVAL_STATUS_UNAPPROVED = 'Unapproved';
    // 承認済
    public const APPROVAL_STATUS_APPROVED = 'Approved';
    // 否認
    public const APPROVAL_STATUS_DENIAL = 'Denial';
}
