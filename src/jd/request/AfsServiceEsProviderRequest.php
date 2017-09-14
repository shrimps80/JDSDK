<?php
class AfsServiceEsProviderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.AfsServiceEsProvider";
	}
	
	public function getApiParas(){
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
                                                        		                                                        		                                    	                   			private $operatorPin;
    	                        
	public function setOperatorPin($operatorPin){
		$this->operatorPin = $operatorPin;
         $this->apiParas["operatorPin"] = $operatorPin;
	}

	public function getOperatorPin(){
	  return $this->operatorPin;
	}

                        	                   			private $operatorNick;
    	                        
	public function setOperatorNick($operatorNick){
		$this->operatorNick = $operatorNick;
         $this->apiParas["operatorNick"] = $operatorNick;
	}

	public function getOperatorNick(){
	  return $this->operatorNick;
	}

                        	                   			private $operatorRemark;
    	                        
	public function setOperatorRemark($operatorRemark){
		$this->operatorRemark = $operatorRemark;
         $this->apiParas["operatorRemark"] = $operatorRemark;
	}

	public function getOperatorRemark(){
	  return $this->operatorRemark;
	}

                        	                   			private $operatorDate;
    	                        
	public function setOperatorDate($operatorDate){
		$this->operatorDate = $operatorDate;
         $this->apiParas["operatorDate"] = $operatorDate;
	}

	public function getOperatorDate(){
	  return $this->operatorDate;
	}

                        	                   			private $platformSrc;
    	                        
	public function setPlatformSrc($platformSrc){
		$this->platformSrc = $platformSrc;
         $this->apiParas["platformSrc"] = $platformSrc;
	}

	public function getPlatformSrc(){
	  return $this->platformSrc;
	}

                                                    	                   			private $afsServiceId;
    	                        
	public function setAfsServiceId($afsServiceId){
		$this->afsServiceId = $afsServiceId;
         $this->apiParas["afsServiceId"] = $afsServiceId;
	}

	public function getAfsServiceId(){
	  return $this->afsServiceId;
	}

                        	                   			private $afsApplyId;
    	                        
	public function setAfsApplyId($afsApplyId){
		$this->afsApplyId = $afsApplyId;
         $this->apiParas["afsApplyId"] = $afsApplyId;
	}

	public function getAfsApplyId(){
	  return $this->afsApplyId;
	}

                        	                   			private $afsServiceStep;
    	                        
	public function setAfsServiceStep($afsServiceStep){
		$this->afsServiceStep = $afsServiceStep;
         $this->apiParas["afsServiceStep"] = $afsServiceStep;
	}

	public function getAfsServiceStep(){
	  return $this->afsServiceStep;
	}

                        	                   			private $afsServiceState;
    	                        
	public function setAfsServiceState($afsServiceState){
		$this->afsServiceState = $afsServiceState;
         $this->apiParas["afsServiceState"] = $afsServiceState;
	}

	public function getAfsServiceState(){
	  return $this->afsServiceState;
	}

                        	                   			private $caseId;
    	                        
	public function setCaseId($caseId){
		$this->caseId = $caseId;
         $this->apiParas["caseId"] = $caseId;
	}

	public function getCaseId(){
	  return $this->caseId;
	}

                        	                   			private $buId;
    	                        
	public function setBuId($buId){
		$this->buId = $buId;
         $this->apiParas["buId"] = $buId;
	}

	public function getBuId(){
	  return $this->buId;
	}

                        	                   			private $buName;
    	                        
	public function setBuName($buName){
		$this->buName = $buName;
         $this->apiParas["buName"] = $buName;
	}

	public function getBuName(){
	  return $this->buName;
	}

                        	                   			private $afsCategoryId;
    	                        
	public function setAfsCategoryId($afsCategoryId){
		$this->afsCategoryId = $afsCategoryId;
         $this->apiParas["afsCategoryId"] = $afsCategoryId;
	}

	public function getAfsCategoryId(){
	  return $this->afsCategoryId;
	}

                        	                   			private $categorySource;
    	                        
	public function setCategorySource($categorySource){
		$this->categorySource = $categorySource;
         $this->apiParas["categorySource"] = $categorySource;
	}

	public function getCategorySource(){
	  return $this->categorySource;
	}

                        	                   			private $dataSourceType;
    	                        
	public function setDataSourceType($dataSourceType){
		$this->dataSourceType = $dataSourceType;
         $this->apiParas["dataSourceType"] = $dataSourceType;
	}

	public function getDataSourceType(){
	  return $this->dataSourceType;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $newOrderId;
    	                        
	public function setNewOrderId($newOrderId){
		$this->newOrderId = $newOrderId;
         $this->apiParas["newOrderId"] = $newOrderId;
	}

	public function getNewOrderId(){
	  return $this->newOrderId;
	}

                        	                   			private $wareId;
    	                        
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["wareId"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                   			private $wareName;
    	                        
	public function setWareName($wareName){
		$this->wareName = $wareName;
         $this->apiParas["wareName"] = $wareName;
	}

	public function getWareName(){
	  return $this->wareName;
	}

                        	                   			private $afsApplyTime;
    	                        
	public function setAfsApplyTime($afsApplyTime){
		$this->afsApplyTime = $afsApplyTime;
         $this->apiParas["afsApplyTime"] = $afsApplyTime;
	}

	public function getAfsApplyTime(){
	  return $this->afsApplyTime;
	}

                        	                   			private $companyId;
    	                        
	public function setCompanyId($companyId){
		$this->companyId = $companyId;
         $this->apiParas["companyId"] = $companyId;
	}

	public function getCompanyId(){
	  return $this->companyId;
	}

                        	                   			private $customerExpect;
    	                        
	public function setCustomerExpect($customerExpect){
		$this->customerExpect = $customerExpect;
         $this->apiParas["customerExpect"] = $customerExpect;
	}

	public function getCustomerExpect(){
	  return $this->customerExpect;
	}

                        	                   			private $customerPin;
    	                        
	public function setCustomerPin($customerPin){
		$this->customerPin = $customerPin;
         $this->apiParas["customerPin"] = $customerPin;
	}

	public function getCustomerPin(){
	  return $this->customerPin;
	}

                        	                   			private $customerGrade;
    	                        
	public function setCustomerGrade($customerGrade){
		$this->customerGrade = $customerGrade;
         $this->apiParas["customerGrade"] = $customerGrade;
	}

	public function getCustomerGrade(){
	  return $this->customerGrade;
	}

                        	                   			private $customerMobilePhone;
    	                        
	public function setCustomerMobilePhone($customerMobilePhone){
		$this->customerMobilePhone = $customerMobilePhone;
         $this->apiParas["customerMobilePhone"] = $customerMobilePhone;
	}

	public function getCustomerMobilePhone(){
	  return $this->customerMobilePhone;
	}

                        	                   			private $customerContactName;
    	                        
	public function setCustomerContactName($customerContactName){
		$this->customerContactName = $customerContactName;
         $this->apiParas["customerContactName"] = $customerContactName;
	}

	public function getCustomerContactName(){
	  return $this->customerContactName;
	}

                        	                   			private $approveResult;
    	                        
	public function setApproveResult($approveResult){
		$this->approveResult = $approveResult;
         $this->apiParas["approveResult"] = $approveResult;
	}

	public function getApproveResult(){
	  return $this->approveResult;
	}

                        	                   			private $processResult;
    	                        
	public function setProcessResult($processResult){
		$this->processResult = $processResult;
         $this->apiParas["processResult"] = $processResult;
	}

	public function getProcessResult(){
	  return $this->processResult;
	}

                        	                   			private $approvedDate;
    	                        
	public function setApprovedDate($approvedDate){
		$this->approvedDate = $approvedDate;
         $this->apiParas["approvedDate"] = $approvedDate;
	}

	public function getApprovedDate(){
	  return $this->approvedDate;
	}

                        	                   			private $processDate;
    	                        
	public function setProcessDate($processDate){
		$this->processDate = $processDate;
         $this->apiParas["processDate"] = $processDate;
	}

	public function getProcessDate(){
	  return $this->processDate;
	}

                        	                   			private $receiveDate;
    	                        
	public function setReceiveDate($receiveDate){
		$this->receiveDate = $receiveDate;
         $this->apiParas["receiveDate"] = $receiveDate;
	}

	public function getReceiveDate(){
	  return $this->receiveDate;
	}

                        	                   			private $approvePin;
    	                        
	public function setApprovePin($approvePin){
		$this->approvePin = $approvePin;
         $this->apiParas["approvePin"] = $approvePin;
	}

	public function getApprovePin(){
	  return $this->approvePin;
	}

                        	                   			private $processPin;
    	                        
	public function setProcessPin($processPin){
		$this->processPin = $processPin;
         $this->apiParas["processPin"] = $processPin;
	}

	public function getProcessPin(){
	  return $this->processPin;
	}

                        	                   			private $pickwareAddress;
    	                        
	public function setPickwareAddress($pickwareAddress){
		$this->pickwareAddress = $pickwareAddress;
         $this->apiParas["pickwareAddress"] = $pickwareAddress;
	}

	public function getPickwareAddress(){
	  return $this->pickwareAddress;
	}

                        	                   			private $platformSrc;
    	                        
	public function setPlatformSrc($platformSrc){
		$this->platformSrc = $platformSrc;
         $this->apiParas["platformSrc"] = $platformSrc;
	}

	public function getPlatformSrc(){
	  return $this->platformSrc;
	}

                        	                   			private $questionTypeCid1;
    	                        
	public function setQuestionTypeCid1($questionTypeCid1){
		$this->questionTypeCid1 = $questionTypeCid1;
         $this->apiParas["questionTypeCid1"] = $questionTypeCid1;
	}

	public function getQuestionTypeCid1(){
	  return $this->questionTypeCid1;
	}

                        	                   			private $partCode;
    	                        
	public function setPartCode($partCode){
		$this->partCode = $partCode;
         $this->apiParas["partCode"] = $partCode;
	}

	public function getPartCode(){
	  return $this->partCode;
	}

                        	                   			private $pickwareCode;
    	                        
	public function setPickwareCode($pickwareCode){
		$this->pickwareCode = $pickwareCode;
         $this->apiParas["pickwareCode"] = $pickwareCode;
	}

	public function getPickwareCode(){
	  return $this->pickwareCode;
	}

                        	                   			private $verificationCode;
    	                        
	public function setVerificationCode($verificationCode){
		$this->verificationCode = $verificationCode;
         $this->apiParas["verificationCode"] = $verificationCode;
	}

	public function getVerificationCode(){
	  return $this->verificationCode;
	}

                        	                   			private $afsApplyTimeBegin;
    	                        
	public function setAfsApplyTimeBegin($afsApplyTimeBegin){
		$this->afsApplyTimeBegin = $afsApplyTimeBegin;
         $this->apiParas["afsApplyTimeBegin"] = $afsApplyTimeBegin;
	}

	public function getAfsApplyTimeBegin(){
	  return $this->afsApplyTimeBegin;
	}

                        	                   			private $afsApplyTimeEnd;
    	                        
	public function setAfsApplyTimeEnd($afsApplyTimeEnd){
		$this->afsApplyTimeEnd = $afsApplyTimeEnd;
         $this->apiParas["afsApplyTimeEnd"] = $afsApplyTimeEnd;
	}

	public function getAfsApplyTimeEnd(){
	  return $this->afsApplyTimeEnd;
	}

                        	                   			private $approvedDateBegin;
    	                        
	public function setApprovedDateBegin($approvedDateBegin){
		$this->approvedDateBegin = $approvedDateBegin;
         $this->apiParas["approvedDateBegin"] = $approvedDateBegin;
	}

	public function getApprovedDateBegin(){
	  return $this->approvedDateBegin;
	}

                        	                   			private $approvedDateEnd;
    	                        
	public function setApprovedDateEnd($approvedDateEnd){
		$this->approvedDateEnd = $approvedDateEnd;
         $this->apiParas["approvedDateEnd"] = $approvedDateEnd;
	}

	public function getApprovedDateEnd(){
	  return $this->approvedDateEnd;
	}

                        	                   			private $processDateBegin;
    	                        
	public function setProcessDateBegin($processDateBegin){
		$this->processDateBegin = $processDateBegin;
         $this->apiParas["processDateBegin"] = $processDateBegin;
	}

	public function getProcessDateBegin(){
	  return $this->processDateBegin;
	}

                        	                   			private $processDateEnd;
    	                        
	public function setProcessDateEnd($processDateEnd){
		$this->processDateEnd = $processDateEnd;
         $this->apiParas["processDateEnd"] = $processDateEnd;
	}

	public function getProcessDateEnd(){
	  return $this->processDateEnd;
	}

                        	                   			private $receiveDateBegin;
    	                        
	public function setReceiveDateBegin($receiveDateBegin){
		$this->receiveDateBegin = $receiveDateBegin;
         $this->apiParas["receiveDateBegin"] = $receiveDateBegin;
	}

	public function getReceiveDateBegin(){
	  return $this->receiveDateBegin;
	}

                        	                   			private $receiveDateEnd;
    	                        
	public function setReceiveDateEnd($receiveDateEnd){
		$this->receiveDateEnd = $receiveDateEnd;
         $this->apiParas["receiveDateEnd"] = $receiveDateEnd;
	}

	public function getReceiveDateEnd(){
	  return $this->receiveDateEnd;
	}

                        	                   			private $lasFlag;
    	                        
	public function setLasFlag($lasFlag){
		$this->lasFlag = $lasFlag;
         $this->apiParas["lasFlag"] = $lasFlag;
	}

	public function getLasFlag(){
	  return $this->lasFlag;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $v1;
                              public function setV1($v1 ){
                 $this->v1=$v1;
                 $this->apiParas["v1"] = $v1;
              }

              public function getV1(){
              	return $this->v1;
              }
                                                                                                                                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $startIndex;
    	                        
	public function setStartIndex($startIndex){
		$this->startIndex = $startIndex;
         $this->apiParas["startIndex"] = $startIndex;
	}

	public function getStartIndex(){
	  return $this->startIndex;
	}

                        	                   			private $pageRows;
    	                        
	public function setPageRows($pageRows){
		$this->pageRows = $pageRows;
         $this->apiParas["pageRows"] = $pageRows;
	}

	public function getPageRows(){
	  return $this->pageRows;
	}

                            }





        
 

