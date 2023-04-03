<?php

    namespace App\Service\PersonalArea\AccessIp;

    use App\Service\PersonalArea\Dashboard\Support\SqlSupport;
    use Config;
    use Auth;
    use App\Service\PersonalArea\Dashboard\Ajax\DashboardAjax;
    use App\Service\Utils\FunctionAuthUser;
    use App\Service\Utils\FunctionSupport;
    use App\Models\Temp\InfoDashboard;
  
    
    class DetectedIp implements IDetectedIp
    {

        public function __construct() {


        }


        public function getAllowAccess($allow_ip , $user_ip){
            return FunctionAuthUser::isFindByAccounts_ipAndNull($user_ip);
        }

        public function blockedAccess($denied_id){

            FunctionAuthUser::resetActivateEmailUser();
            FunctionAuthUser::setActivateEmail(true);
            FunctionAuthUser::setUnknowAuthIp($denied_id);
            
            if(!FunctionAuthUser::isFindByAccounts_ip($denied_id)){
                $this->saveModelEmpty($denied_id);
                FunctionAuthUser::sendActivateEmail();
            }
           
        }

        public function saveAccess($ip_address_access){
            if(!FunctionAuthUser::isFindByAccounts_ip($ip_address_access)){
                info("Detected->>> Create model");
                $modelAccess = $this->createAccessModel($ip_address_access);
                $modelAccess->save();
            }
            else{
                info("Detected->>>Update model");
                $model = FunctionAuthUser::getFindByAccounts_ip($ip_address_access);
                $model->first()->email_verified_at  = now();
                $model->first()->save();
            }
            
        }

        private function saveModelEmpty($denied_id){
            $model = $this->createdEmptyModel($denied_id);
            $model->save(); 
        }

        private function createAccessModel($ip_address_access){
           return FunctionSupport::createModelAccounts_ip(Request::ip() , FunctionAuthUser::getAuthUserId() , now());
        }
        private function createdEmptyModel($denied_id){
            return FunctionSupport::createModelAccounts_ip($denied_id , FunctionAuthUser::getAuthUserId() , null);
        }

      
    
    }
?>