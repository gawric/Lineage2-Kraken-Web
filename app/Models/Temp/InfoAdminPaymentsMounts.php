<?php

namespace App\Models\Temp;

use Lang;



 class InfoAdminPaymentsMounts
 {
    public $id;
    public int $sum;
    //только месяц и год
    public string $data;
    
    
    public function convertData(){
        switch ($this->data) {
            case "2023-01":
                    return Lang::get('messages.lk_admin_panel_payments_date_mount_01');
                break;
            case "2023-02":
                    return Lang::get('messages.lk_admin_panel_payments_date_mount_02');
                break;
            case "2023-03":
                    return Lang::get('messages.lk_admin_panel_payments_date_mount_03');
                break;
            case "2023-04":
                    return Lang::get('messages.lk_admin_panel_payments_date_mount_04');
                break;
            case "2023-05":
                    return Lang::get('messages.lk_admin_panel_payments_date_mount_05');
                break;
            case "2023-06":
                    return Lang::get('messages.lk_admin_panel_payments_date_mount_06');
                break;
            case "2023-07":
                    return Lang::get('messages.lk_admin_panel_payments_date_mount_07');
                break;
            case "2023-08":
                    return Lang::get('messages.lk_admin_panel_payments_date_mount_08');
                break;
            case "2023-09":
                    return Lang::get('messages.lk_admin_panel_payments_date_mount_09');
                break;
            case "2023-10":
                    return Lang::get('messages.lk_admin_panel_payments_date_mount_10');
                break;
            case "2023-11":
                    return Lang::get('messages.lk_admin_panel_payments_date_mount_11');
                break;
            case "2023-12":
                    return Lang::get('messages.lk_admin_panel_payments_date_mount_12');
                break;
        }
    }

    public function __toString()
    {
      return "infoAdminPaymentsMounts содержит: " . " id " .  $this->id . " " . " сумма за месяц ". $this->sum . " выбранный месяц " . $this->data;
    }
 }