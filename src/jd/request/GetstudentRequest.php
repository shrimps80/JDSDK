<?php
class GetstudentRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.getstudent";
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
                                    	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

                                            		                                    	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $age;
    	                        
	public function setAge($age){
		$this->age = $age;
         $this->apiParas["age"] = $age;
	}

	public function getAge(){
	  return $this->age;
	}

                        	                   			private $ages;
    	                        
	public function setAges($ages){
		$this->ages = $ages;
         $this->apiParas["ages"] = $ages;
	}

	public function getAges(){
	  return $this->ages;
	}

                            }





        
 

