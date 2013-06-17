<?php

/*
class which decide webservices depend upon form type

*/

class NanoModel extends AppModel{

  
  private $input_array = array();//input field array 
  private $output_array = array();//output field array 
  private $form_type; //This variable take decision of webservices call
  //private $post_action; //This variable will give action type
  private $UserKey;
  public $url;
  public $XPost; 
  public $headers;
  public $ArtifactKey;   
  private $To;
  private $From="tatanano@tata.com";
  private $Text;
  private $Header;
  private $Cc;
  private $Bcc;
  private $Subject;
  
  //$ArtifactKey = "MDFn+8e5dRDaRMRIwMY7nI84eEccbx+lIiVbbUaNp3AUFQJ5sptmjsrg+"; 
 
  

  
  public function select_webservice($input_array)
   {  
	    $form_type=$input_array['form_type'];	 

	    if($form_type =='register_user')
				{
				$data = /*array('input_array' => array('form_type' => $input_array['form_type'], 'firstname' => $input_array['firstname'], 'lastname' => $input_array['lastname'], 'gender' => $input_array['gender'], 'contactno' => $input_array['contactno'], 'password' => $input_array['password'], 'emailid' => $input_array['emailid']), 'firstname' => $input_array['firstname'], 'lastname' => $input_array['lastname'], 'gender' => $input_array['gender'], 'contactno' => $input_array['contactno'], 'password' => $input_array['password'], 'emailid' => $input_array['emailid'], 'form_type' => $input_array['form_type']);	*/			array('$this->data');
				echo $data;
				}
				elseif($form_type =='authenticate_user')
				{
				$data = /*array('input_array' => array('auth_emailid' => $input_array['auth_emailid'], 'auth_user_pwd' => $input_array['auth_user_pwd']), 'auth_emailid' => $input_array['auth_emailid'], 'auth_user_pwd' => $input_array['auth_user_pwd']);*/
				array('$this->data');
				echo $data;
				}
		$this->load->view('nano/files/'.$form_type,$data);
	}
   public function get_details($input_array)
	   {  
		  $form_type=$input_array['form_type'];	 
		  /*taking data in array to pass in view*/
		  $data = array("input_array" => array("userid" => $input_array['userid'], "form_type" => $input_array['form_type']), "userid" => $input_array['userid'], "form_type" => $input_array['form_type']);
	      $path= base_url().'nano/files/'.$form_type;
		  $this->include->view($path,$data);
		  return $response;
		}
   
   public function createSAMLArtiFact($input_array)
   {
   	$data = array('input_array' => array('form_type' => $input_array['form_type'], 'firstname' => $input_array['firstname'], 'lastname' => $input_array['lastname'], 'gender' => $input_array['gender'], 'contactno' => $input_array['contactno'], 'password' => $input_array['password']));
   	$this->load->view('nano/files/createartifact_key',$data);
   }

    public function getTestDriveDtls($UserKey)
	   {  
	   		$data = array("input_array" => array("user" => $UserKey['user']), "UserKey" => $UserKey['user']);
		  $path= base_url().'nano/files/gettestdrivedtls';
		  $this->load->view($path,$data);
		  return $response;
		}

	   public function getTestDriveFeedback($UserKey)
	   {  
		$data = array("input_array" => array("UserKey" => $UserKey['user']), "UserKey" => $UserKey['user']);
		  $path= base_url().'nano/files/getfeedback_td';
		  $this->load->view($path,$data);
		  return $response;		     
		}

	   public function getShopCartList($UserKey)
	   {  
		  $data = array("input_array" => array("UserKey" => $UserKey['user']), "UserKey" => $UserKey['user']);
		  $path= base_url().'nano/files/getshoppingcart';
		  $this->load->view($path,$data);
		  return $response;	
		}

	    public function getShopCartListacc($UserKey)
	   {  
		  $data = array("input_array" => array("UserKey" => $UserKey['user']), "UserKey" => $UserKey['user']);
		  $path= base_url().'nano/files/getshoppingcart_acc';
		  $this->load->view($path,$data);
		  return $response;
		}
	   /* public function get_orp_detail($UserKey)
	   {  
		     
		  $path= $_SERVER['DOCUMENT_ROOT'].'/bb/inc/files/getORP.php';
		  include($path);
		  return $response;
		  
	   }
	    public function shop_cart_crt($UserKey)
	   {  
		     
		  $path= $_SERVER['DOCUMENT_ROOT'].'/bb/inc/files/shopping_cart.php';
		  include($path);
		  return $response;
		  
	   }
	    public function deleteShoppingCart($UserKey)
	   {  
		     
		  $path= $_SERVER['DOCUMENT_ROOT'].'/bb/inc/files/delete_shopping_cart.php';
		  include($path);
		  return $response;
		  
	   }
	    public function deleteShoppingCartAcc($UserKey)
	   {  
		     
		  $path= $_SERVER['DOCUMENT_ROOT'].'/bb/inc/files/delete_shopping_cart_acc.php';
		  include($path);
		  return $response;
		  
	   }
	    public function getContactDetails($input_contact)
	   {  
		     
		  $path= $_SERVER['DOCUMENT_ROOT'].'/bb/inc/files/get_contact_dtls.php';
		  include($path);
		  return $response;
		  
	   }
	    public function getRegDetails($input_reg)
	   {  
		     
		  $path= $_SERVER['DOCUMENT_ROOT'].'/bb/inc/files/get_reg_dtls.php';
		  include($path);
		  return $response;
		  
	   }
	    */
	   public function getDealerInfo($UserKey)
	   {  
		  $data = array("input_array" => array("UserKey" => $UserKey['user']), "UserKey" => $UserKey['user']);
		  $path= base_url().'nano/files/get_dealer_info';
		  $this->load->view($path,$data);
		  return $response;
		}
		
   public function get_data($url,$XPost,$headers) {
		  $ch = curl_init();
		  $XPost=$XPost;
		  $headers=$headers;
		  $timeout = 5;
		  curl_setopt($ch, CURLOPT_URL, $url);  
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		   curl_setopt($ch, CURLOPT_POSTFIELDS, $XPost);
		  curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);  
		  //curl_setopt($ch, CURLOPT_HEADER, false);
		  $data = curl_exec($ch);
		  curl_close($ch);
		  return $data;
		}
		
		
	/*public function get_rand_id($length)
		{
		  if($length>0) 
		  { 
		  $rand_id="";
		   for($i=1; $i<=$length; $i++)
		   {
		   mt_srand((double)microtime() * 1000000);
		   $num = mt_rand(1,36);
		   $rand_id .= $this->assign_rand_value($num);
		   }
		  }
		return $rand_id;
		}
		
		
	public function send_mail($To,$Bcc,$Cc,$Text,$From,$Subject)
	 {
		$headers = "From: ".$From."\r\n";
	   if(mail($To,$Subject,$Text,$headers))
	   { echo "Mail send successfully"; }
	   else
	   { echo "Mail not send successfully"; }
		
	 }*/
	 public function getOrderDetails($orderid)
         {

         	$data = array("input_array" => array("UserKey" => $orderid['user']), "UserKey" => $orderid['user']);
		  $path= base_url().'nano/files/getOrderDetail';
		  $this->load->view($path,$data);
		  return $response;

         }
         /*
 	public function getOrderDtlsCartid($cartid)
         {  
              $path= $_SERVER['DOCUMENT_ROOT'].'/bb/inc/files/getorderdtls_cartid.php';
		  //echo $path= '../files/'.$form_type.'.php';
		  include($path);
              return $response;
         }
		 public function updateOrderAmt()
         {  
              $path= $_SERVER['DOCUMENT_ROOT'].'/bb/inc/files/update_order.php';
		  //echo $path= '../files/'.$form_type.'.php';
		  include($path);
              return $response;
         }*/
		 public function getOrderStatus($input_order_id)
         {  
          $data = array("input_array" => array("input_order_id" => $input_order_id['user']), "input_order_id" => $input_order_id['user']);
		  $path= base_url().'nano/files/get_order_status';
		  $this->load->view($path,$data);
		  return $response;
		 }
         /*
		  public function getChassisNo()
         {  
              $path= $_SERVER['DOCUMENT_ROOT'].'/bb/inc/files/get_chassis_details.php';
		  //echo $path= '../files/'.$form_type.'.php';
		  include($path);
              return $response;
         }
         public function UpdateOrder($input_array,$flag)
           {
		  
             if($flag=='Y')
               {
			     //echo "ok";
                $path= $_SERVER['DOCUMENT_ROOT'].'/bb/inc/files/order_success_process.php';
               }
             else{
			  //echo "done";
               $path= $_SERVER['DOCUMENT_ROOT'].'/bb/inc/files/order_failure_process.php';
              }
               include($path);
              return $response;
           }*/
	 
	 
 } // end of class 

?>
