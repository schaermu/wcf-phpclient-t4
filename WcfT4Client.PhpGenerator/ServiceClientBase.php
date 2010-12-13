<?php

class ServiceClientBase
{
	protected $_soapClient;

	public $hasError;
	public $errorMessage;
	
	private $endpointUrl = "http://localhost:9999";
	
	function ServiceClientBase()
	{
		
	}
	
	public function InitSoapClient($endpointName)
	{
		$wsdlUrl = $this->endpointUrl . "/" . $endpointName . "?wsdl";
		$serviceUrl = str_replace("?wsdl", "", $wsdlUrl);
		$this->_soapClient = new SoapClient($wsdlUrl, array(
			'location' => $serviceUrl,
			'trace' => true,
			'soap_version' => SOAP_1_1
			'cache_wsdl' => WSDL_CACHE_MEMORY));
	}
			
	public function ExceptionHandler($ex) {
		$this->hasError = true;
		$this->errorMessage = $ex->getMessage();
	}

	public function GetLastRequest() {
		return $this->_soapClient->__getLastRequest();
	}
		
	public function GetLastResponse() {
		return $this->_soapClient->__getLastResponse();
	}
}

?>