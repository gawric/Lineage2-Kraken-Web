<?php

namespace App\Service\ProxySqlL2Server\Support\CommonFunction;

 use Log;
 use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
 use App\Service\ProxySqlL2Server\Template\Acis\AcisTemplateCharactersSql;
 use App\Service\ProxySqlL2Server\Template\Acis\AcisTemplateRegSql;


    class CommonSql  {
        
        private AcisTemplateCharactersSql $templateCharacters;
        private AcisTemplateRegSql $templateReg;

        public function __construct() {
             $this->templateCharacters = new AcisTemplateCharactersSql();
             $this->templateReg = new AcisTemplateRegSql();
        }

     
        public function getAccountsExpansionByCharNameCommon($modelAccountDb , $modelCharactersDb , $char_name){
            $characterModel =  $this->templateCharacters->getLoginByCharname($modelCharactersDb , $char_name);
           // info("RusAcis >>>>>getAccountsExpansionByCharName characterModel ". $characterModel);
            if(isset($characterModel)){
               
                $login = $characterModel->account_name;
               // info("RusAcis >>>>>getAccountsExpansionByCharName isset access " . $login);
                if($this->templateReg->isUserExistServer($modelAccountDb , $login)){

                    $account_expansion_id = $this->templateReg->getIdAccountExpansionByAccountName($login);
                    if(isset($account_expansion_id)){
                        return  $this->templateReg->getIdAccountExpansionById($account_expansion_id->accounts_expansion_id);
                    }

                }
    
            }
           // info("RusAcis >>>>>getAccountsExpansionByCharName not found ");
            return [];
        }

     
        public function getObjIdByCharName($charactersDb , $char_name){
            return $this->templateCharacters->getObjIdByCharName($charactersDb , $char_name);
        }
    }
?>