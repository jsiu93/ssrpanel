<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 配置信息
 * Class SsNode
 * @package App\Http\Models
 */
class SsConfig extends Model
{
    protected $table = 'ss_config';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'type',
        'is_default',
        'sort'
    ];

}