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
		$res['devID'] = 'b23b151a-d121-489f-ac39-5ed255c7e225';   // these prod keys are different from sandbox keys
		$res['appID'] = 'perrianf3-9e62-4308-a6e9-fb4b76b624d';
		$res['certID'] = '749506ee-e8b2-4a20-9e4b-8bc2f8620e78';
		
		//set the Server to use (Sandbox or Production)
		$res['serverUrl'] = 'https://api.ebay.com/ws/api.dll';      // server URL different for prod and sandbox
		
		//the token representing the eBay user to assign the call with
		$res['userToken'] = 'AgAAAA**AQAAAA**aAAAAA**8fN6Uw**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6AGkoOlCJGHoA2dj6x9nY+seQ**nzICAA**AAMAAA**84QyOk04ouNDp+qMGgO238kf/P7WUmnObPG6B/Sn0hMxwEooSzACFj8gBQc3dtiRzw9zfADYjfRsCRvMVgkFYRLln8Xo2yKQ6QCocPWTQDbpj6SSXmEAqwMXhuM6BA/abVrP/nzl4cBvepwttq45sbOpbWMGACuMVtys1niGhjva5d8247OAzoH5ae4ddlvAI5Rxvtmm8PTxGvBUHghu7/094iass0O+A06Irq960OgVx9SmXOwSQqzVewM3GkbG7CoQCeS48b+SoJHK/rKk5+uIgmKH4ppiTJ1nMbW02+ngAZSnY0BIfQnZLMBsNrmkBziVioGQOyfNlVTgwst9tS0wAvvngxXH/3A2n9LDDaINb1AZfXRd8u9QSVmwGUBF5xB6ofh4vKy3A9v/ji8lBNYlx952bSVWDxvutVN04YnlLeiw+SEa/KjdPJYWd9LtSP/QY4rPYLNFiKnjJJ9Lq/AgVM2xL1mS2JxeMtX3Tu8igVvgAUodYUNZDwxh/NHjbjUSmoDyfVVnU+WSyKdejI3xNehhKDqcQazuEOEE6Nh/fhAPWjPYkOSWKXpjZurRyXN0oRepbQTTmdFgyxeg1QQuUB/dfRojlVH5qYxG73A4Jcoo9W3tfxadPqGn9hvdGRqWP1jEC0igO6Vj9GKa2jaQrRfdQ4BRkqlUgmGHw7tXaF0MxVikyNaZnkcCQPmfYN6ZEQ7a+6Upj/GGQ7t38X84vJ12K4ACWqH6b8CXJkS6IZVuA2Q4pG0PlvvjiX+I';   
		       
	}
	else
	{  
		// sandbox (test) environment
		$res['devID'] = 'b23b151a-d121-489f-ac39-5ed255c7e225';         // insert your devID for sandbox
		$res['appID'] = 'perriana7-8ddc-4213-9d3d-65a51abc61d';   // different from prod keys
		$res['certID'] = '994f8014-aae2-441c-ae1f-309fa7ff3bb8';  // need three 'keys' and one token
		
		//set the Server to use (Sandbox or Production)
		$res['serverUrl'] = 'https://api.sandbox.ebay.com/ws/api.dll';
		
		// the token representing the eBay user to assign the call with
		// this token is a long string - don't insert new lines - different from prod token
		$res['userToken'] = 'AgAAAA**AQAAAA**aAAAAA**d7c7Uw**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6wFk4GhDJGBoQidj6x9nY+seQ**EpwCAA**AAMAAA**DbbTVWG4ZHRkJit0h42TKeJEMIkddhB5QCw4qm6XFEvrYGg8aqsY2PQEm35Xb1M//M7Jc75P8QNuhtsuqPCIi0r5mdy1GjB8MDmFCNPLbOnSPsT1y3eXBsZ9om9lH66TbKz/ez6IRK+ieU+qsVdBSQCqVze+BA28kw8InbhSe0gFIdZIWfTTT9Cdlh+FcFnCR5Y9edxAxyIoC1VeTQX78JOzB58RmbERjUXJKnn9S1QjE31ecPIuBDh3jjCbw34gUfFUcV1N1FMUTIHHHG9hl5rnwBuKqlPh5cgafUyWqibFnBhW4a9AZVw5M0A0IS0YtQjZdy61MUTDgmbiJoJc9Iny5A51u5x2JG6aEKekQAplcVqcpTLoLsxzeu2V7M7DREGrTruJdWMW2lPM53VTUZvVnyOWQ60JvlSGlFVnHZJPT70xmNOueARyQ/O1fCBop6ePK1qrTBmsFTb6Oq4+I77tQbSLmdUZrA0Dvx4Ssjt2UJ9YSTe70OsnoeoQ92rQmW1tlA0yJnmnHILLMc6kk0tQi7EdJWnrz39P2kkpvDNchCn91Rh/f7pR7iTRlcQHSG0wWk1+o89kSllzPxeJvtqOc1bSuAJg9sZ6ut7hyZygRUJcbmWoZrviUouzTOT9GQ3pj9m9pP9zGfdTgDvTfik9OOxQzB5rOILD1JVNvO+iJeZBVF1pNHjOvKVqLNLPU9FoFiF+pIRp2/s1PK0ycwksQexDM8rsb+2WPWFxrTagLSyz3B/3+uTib92dCJ2B';     
		            
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