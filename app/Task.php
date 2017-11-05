<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = [
        'name',
        'done',
        'intro',
        'expire_at',
    ];
    protected $dates = ['expire_at'];

    public function setExpireAtAttibute($date)
    {
        $this->attributes['expire_at'] = Carbon::createFromFormat('Y-m-d H:i:s', $date);
    }

    public function leftTimeToExpire()
    {
//        $leftTime = strtotime($this->expire_at) - (Carbon::now()->timestamp);
        $leftTime = $this->expire_at->timestamp - Carbon::now()->timestamp;
        if ($leftTime > 0) {
//            return (int)($leftTime / 60) . '分钟后过期';
            return $this->expire_at->diffForHumans();
        } else {
            return '已经过期';
        }

    }
}
