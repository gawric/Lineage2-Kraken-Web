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
                   // info("RusAcis >>>>>getAccountsExpansionByCharName isUserExistServerRusAcis access ");
                   return $this->templateReg->getAccountsExpansionByAccountLogin($login);
                   // info("RusAcis >>>>>getAccountsExpansionByCharName ". $accounts_expansion);
                  //  return $accounts_expansion;
                }
    
            }
           // info("RusAcis >>>>>getAccountsExpansionByCharName not found ");
            return [];
        }
    }
?>