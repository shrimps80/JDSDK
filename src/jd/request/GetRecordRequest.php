<?php
class GetRecordRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.getRecord";
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
                                    	                   			private $paramStrin;
    	                        
	public function setParamStrin($paramStrin){
		$this->paramStrin = $paramStrin;
         $this->apiParas["paramStrin"] = $paramStrin;
	}

	public function getParamStrin(){
	  return $this->paramStrin;
	}

}





        
 

