<?php
class AnonAccountsModule extends HWebModule{
    
    /**
     * Inits the Module
     */
    public function init()
    {

        $this->setImport(array(
            'email_whitelist.models.*',
        ));
        
    }
    
    
}