<?php
//require_once('define.php');
//require_once('sodel.php');
class mysqldb {
//set up the class
var $dbhost;
var $db;
var $dbuser;
var $dbpassword;
var $sql;
var $result;
var $numberrows;
var $dbconnection = false;
var $insert_id;

function get_insert_id(){ $this->insert_id=mysqli_insert_id(); return $this->insert_id;}

function getdb(){return $this->db;}

function setdb($req_db){$this->db = $req_db;}

function setdbuser($req_user){$this->dbuser = $req_user;}

function setdbpassword($req_password){$this->dbpassword = $req_password;}

function getsql(){return $this->sql;}

function setsql($req_sql) {$this->sql = $req_sql;}

function getnumberrows() {return $this->numberrows;}

function setnumberrows($req_numberrows) {$this->numberrows = $req_numberrows;}

function setdbconnection($req_dbconnection){$this->dbconnection = $req_dbconnection;}

function closedbconnection(){
if($this->dbconnection=$TRUE) mysqli_close($this->dbconnection);
}

function real_escape($string) {
return mysqli_real_escape_string($this->dbconnection,$string);
}

function mysqldb(){
//$key = "sode1buy@nano";
//$cp = new crypto();
$HOST           =  "localhost";//$cp->decrypt(host, $key);
$DB             =   "buynano";//$cp->decrypt(dbname, $key);
$WEBUSER        =   "buynano";//$cp->decrypt(user_name, $key);
$WEBPASSWORD    =   "buynano";//$cp->decrypt(passwrd, $key);
$this->setdb($DB);
$this->setdbuser($WEBUSER);
$this->setdbpassword($WEBPASSWORD);
$this->opendbconnection();
}

function opendbconnection(){
$this->dbconnection=mysqli_connect("$this->dbhost","$this->dbuser","$this->dbpassword");
if ($this->dbconnection)//if we have connected select and return true
{
mysqli_select_db($this->dbconnection,$this->db) or die("Unable to select database");
}
else {$this->dbconnection=false;}

// unset the data so it couldn't be dumped
$this->dbhost='';
$this->db='';
$this->dbuser='';
$this->dbpassword='';
}

function selectquery(){
$this->qry=@mysqli_query($this->dbconnection,$this->sql);
if(!$this->qry){$this->numberrows=0; return false;}//query error
else{//query passed
$result=$this->qry;
$this->numberrows=@$result->num_rows;
//if we have any result fill in the result array
if($this->numberrows>=0) {
for($x=0;$x<$this->numberrows;$x++){$this->result[$x]=@mysqli_fetch_array($this->qry);} return true; }  else{$this->numberrows=0; return false;}//if we don't have results give error
}//end query passed
}
}//end of class mysqldb  
?>  