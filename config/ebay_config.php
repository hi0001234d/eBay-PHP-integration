<?php

//*************************************************** eBay configuration ********************************//


/**
 * @abstract eBay API version
 */
function geteBayConfigurations() 
{
	$res = array(); 
	// these keys can be obtained by registering at http://developer.ebay.com
	$production         = true;   // toggle to true if going against production
	
	//eBay API version
	$res['CompatabilityLevel'] = 551;
	
	//SiteID must also be set in the Request's XML
	//SiteID = 0  (US) - UK = 3, Canada = 2, Australia = 15, ....
	//SiteID Indicates the eBay site to associate the call with
	$res['siteID'] = 0;
			
	if ($production)
	{
		// production environment
		$res['devID'] = 'get-it-from-ebay-seller-account';   // these prod keys are different from sandbox keys
		$res['appID'] = 'get-it-from-ebay-seller-account';
		$res['certID'] = 'get-it-from-ebay-seller-account';
		
		//set the Server to use (Sandbox or Production)
		$res['serverUrl'] = 'https://api.ebay.com/ws/api.dll';      // server URL different for prod and sandbox
		
		//the token representing the eBay user to assign the call with
		$res['userToken'] = 'get-it-from-ebay-seller-account';   
		       
	}
	else
	{  
		// sandbox (test) environment
		$res['devID'] = 'get-it-from-ebay-seller-account';         // insert your devID for sandbox
		$res['appID'] = 'get-it-from-ebay-seller-account';   // different from prod keys
		$res['certID'] = 'get-it-from-ebay-seller-account';  // need three 'keys' and one token
		
		//set the Server to use (Sandbox or Production)
		$res['serverUrl'] = 'https://api.sandbox.ebay.com/ws/api.dll';
		
		// the token representing the eBay user to assign the call with
		// this token is a long string - don't insert new lines - different from prod token
		$res['userToken'] = 'get-it-from-ebay-seller-account';     
		            
	}
	
	return $res; 
}

//*************************************************** eBay configuration end ********************************// 





//*************************************************** store/listing configuration ********************************// 

/**
 * @abstract returns store config
 */
function getStoreConfig() 
{
	// url
	$res['store_url'] = "http://stores.ebay.com/perrianjewels";
	return $res;
}

/**
 * @abstract returns listing config
 */
function getListingConfig() 
{
	//listing SEO config 
	$listing['EBAY_TITLE_LENGTH'] = 80; 
	$listing['title_prefix'] = ''; 
	$listing['title_suffix'] = ''; 
	
	//other listing config 
	$listing['duration'] = 'Days_7'; 
	$listing['type'] = 'FixedPriceItem'; 
	$listing['quantity'] = 1; 
	
	//location
	$listing['location'] = 'SURAT, GUJARAT'; 
	
	//DispatchTimeMax
	$listing['DispatchTimeMax'] = 12;
	
	//payment config 
	$listing['payment_method'] = 'PayPal'; 
	$listing['paypal_id'] = 'contact@perrian.com'; 
	
	//refund policy
	$listing['option'] = 'MoneyBack'; 
	$listing['within'] = 'Days_30'; 
	$listing['returns'] = 'ReturnsAccepted'; 
	$listing['description'] = 'If you are not satisfied, return the item for refund.'; 
	$listing['paidby'] = 'Buyer'; 
	
	//shipping config
	$listing['ShippingService_LOCAL'] = 'StandardShippingFromOutsideUS'; 
	$listing['ShippingService'] = 'StandardInternational'; 
	$listing['ShippingType'] = 'Flat'; 
	$listing['SellerExcludeShipToLocationsPreference'] = 'true';
	$listing['ShipToLocations'] = 'Worldwide';
	
	//site where to list product
	$listing['site'] = "US"; 

	return $listing;	
}

//*************************************************** store/listing configuration end ****************************//

?>