<?php

namespace App\Models\Temp;

use App\Models\Temp\InfoDashboardChars;


 class InfoDashboardCharsCoin extends InfoDashboardChars
 {
    public function __construct(InfoDashboardChars $model)
    {
        $this->id = $model->id;
        $this->char_name = $model->char_name;
        $this->account_name = $model->account_name;
        $this->lvl = $model->lvl;
        $this->clan_name = $model->clan_name;
        $this->pvp = $model->pvp;
        $this->pk = $model->pk;
        $this->last_data = $model->last_data;
        $this->server_name = $model->server_name;
        $this->online = $model->online;
    }

    public $col;
 }