<?php
class QueryQuoteItemDetailOutRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.queryQuoteItemDetailOut";
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

                        	                   			private $operatorName;
    	                        
	public function setOperatorName($operatorName){
		$this->operatorName = $operatorName;
         $this->apiParas["operatorName"] = $operatorName;
	}

	public function getOperatorName(){
	  return $this->operatorName;
	}

                        	                   			private $wareCid1;
    	                        
	public function setWareCid1($wareCid1){
		$this->wareCid1 = $wareCid1;
         $this->apiParas["wareCid1"] = $wareCid1;
	}

	public function getWareCid1(){
	  return $this->wareCid1;
	}

                        	                   			private $wareCid2;
    	                        
	public function setWareCid2($wareCid2){
		$this->wareCid2 = $wareCid2;
         $this->apiParas["wareCid2"] = $wareCid2;
	}

	public function getWareCid2(){
	  return $this->wareCid2;
	}

                        	                   			private $wareCid3;
    	                        
	public function setWareCid3($wareCid3){
		$this->wareCid3 = $wareCid3;
         $this->apiParas["wareCid3"] = $wareCid3;
	}

	public function getWareCid3(){
	  return $this->wareCid3;
	}

                        	                   			private $brand;
    	                        
	public function setBrand($brand){
		$this->brand = $brand;
         $this->apiParas["brand"] = $brand;
	}

	public function getBrand(){
	  return $this->brand;
	}

                            }





        
 

