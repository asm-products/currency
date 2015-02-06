<?php
namespace Craft;

class CurrencyPlugin extends BasePlugin
{

	function getName()
	{
		return Craft::t('Currency');
	}

	function getVersion()
	{
		return '0.1';
	}

	function getDeveloper()
	{
		return 'Craft Currency';
	}

	function getDeveloperUrl()
	{
		return 'http://craftcurrency.com';
	}

	function hasCpSection()
    {
        return true;
    }
    
    public function registerCpRoutes()
    {
        return array(

    	//user this area for custom CP routes

        );

	}	

    // Thanks Page - Feel free to remove.
    public function onAfterInstall()
    {
        craft()->request->redirect(UrlHelper::getCpUrl('/currency/admin/thanks/'));
    }

}
