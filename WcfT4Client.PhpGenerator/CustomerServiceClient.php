<?php

class CustomerServiceClient extends ServiceClientBase {

	public function CustomerServiceClient() {
		parent::ServiceClientBase();
		$this->InitSoapClient("ICustomerService");
	}
	
	public function GetCustomer($customerId) {
		$soapMethod = "GetCustomer";
		$soapParameters = array(
			'customerId' => $customerId
		);
		try {
			$res = $this->_soapClient->__soapCall($soapMethod, array('request' => $soapParameters), null);
			return $res->GetCustomerResult;
		} catch (Exception $ex) {
			$this->ExceptionHandler($ex);
		}
	}	
	
	public function InsertCustomer($operation) {
		$soapMethod = "InsertCustomer";
		$soapParameters = array(
			'operation' => $operation
		);
		try {
			$res = $this->_soapClient->__soapCall($soapMethod, array('request' => $soapParameters), null);
			return $res->InsertCustomerResult;
		} catch (Exception $ex) {
			$this->ExceptionHandler($ex);
		}
	}	
	
	public function UpdateCustomer($operation) {
		$soapMethod = "UpdateCustomer";
		$soapParameters = array(
			'operation' => $operation
		);
		try {
			$res = $this->_soapClient->__soapCall($soapMethod, array('request' => $soapParameters), null);
			return $res->UpdateCustomerResult;
		} catch (Exception $ex) {
			$this->ExceptionHandler($ex);
		}
	}	
	
	public function DeleteCustomer($customerId) {
		$soapMethod = "DeleteCustomer";
		$soapParameters = array(
			'customerId' => $customerId
		);
		try {
			$res = $this->_soapClient->__soapCall($soapMethod, array('request' => $soapParameters), null);
			return $res->DeleteCustomerResult;
		} catch (Exception $ex) {
			$this->ExceptionHandler($ex);
		}
	}	
	
	public function SetAdress($customerId, $operation) {
		$soapMethod = "SetAdress";
		$soapParameters = array(
			'customerId' => $customerId,
			'operation' => $operation
		);
		try {
			$res = $this->_soapClient->__soapCall($soapMethod, array('request' => $soapParameters), null);
			return $res->SetAdressResult;
		} catch (Exception $ex) {
			$this->ExceptionHandler($ex);
		}
	}	
	}
?>