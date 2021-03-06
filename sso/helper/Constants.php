<?php

namespace Miniorange\helper;

class Constants
{
    //SAML Constants
    const SAML 	 			= 'SAML';
    const AUTHN_REQUEST 	= 'AuthnRequest';
    const SAML_RESPONSE 	= 'SamlResponse';
    const HTTP_REDIRECT 	= 'HttpRedirect';
    const LOGOUT_REQUEST 	= 'LogoutRequest';

    //Names
    const SP_CERT           = 'sp-certificate.crt';
    const SP_KEY            = 'sp-key.key';
    const RESOURCE_FOLDER   = 'resources';
    const TEST_RELAYSTATE   = 'testconfig';
    const SP_ALTERNATE_CERT = 'miniorange_sp_cert.crt';
    const SP_ALTERNATE_KEY  = 'miniorange_sp_priv_key.key';
    //images
    const IMAGE_RIGHT 		= 'right.png';
    const IMAGE_WRONG 		= 'wrong.png';
  	const HOSTNAME        = "https://login.xecurify.com";
	  const HASH            = 'aec500ad83a2aaaa7d676c56d8015509d439d56e0e1726b847197f7f089dd8ed';

// DATABASE COLUMNS IN CUSTOMER TABLE

	 const CUSTOMER_EMAIL = "cust_email";
	 const CUSTOMER_KEY = "cust_key";
	 const CUSTOMER_API_KEY = "cust_api_key";
	 const CUSTOMER_TOKEN = "cust_token";
	 const REG_STATUS = "cust_reg_status";

	 const AREA_OF_INTEREST = "TYPO3 miniOrange SAML SP";

}