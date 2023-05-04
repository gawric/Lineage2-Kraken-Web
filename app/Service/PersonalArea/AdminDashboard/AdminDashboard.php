<?php

 namespace App\Service\PersonalArea\AdminDashboard;

   
 use Config;
 use Auth;
 use App\Service\PersonalArea\Dashboard\Support\SqlSupport;
 use App\Models\Temp\InfoAdminDashboard;
 use App\Models\Temp\InfoDashboard;
 use App\Service\PersonalArea\AdminDashboard\Support\AdminSqlSupport;
 use App\Service\PersonalArea\AdminDashboard\Support\AdminAllInfoUsers;
 use Lang;  
 use Illuminate\Database\Eloquent\ModelNotFoundException;

    class AdminDashboard implements IAdminDashboard
    {

        private SqlSupport $sql_support;
        private AdminSqlSupport $admin_sql_support;
        private AdminAllInfoUsers $admin_support;

        public function __construct() {
            $this->sql_support = new SqlSupport();
            $this->admin_sql_support = new AdminSqlSupport();
            $this->admin_support = new AdminAllInfoUsers();
            $this->list_server = Config::get('lineage2.server.list_server');
        }

        public function getListAllInfoAdminDashboard($all_users):array{
                return $this->admin_support->forEach($all_users);
        }

        public function blockAccountExpansionAndAllAccounts($account_expansion_id){
            $model = $this->admin_sql_support->isExistAccountExpansion($account_expansion_id);
            if(isset($model)){
                info("blockAccountExpansionAndAllAccounts>>> model found: $model");
                return "{status:success}";
            }
            info("blockAccountExpansionAndAllAccounts>>> model NOT found:");

            throw new ModelNotFoundException(Lang::get('validation.not_fount_account') . " " . $account_expansion_id);
        }





      

    }
?>