<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {
  
  //private $apiurl='http://localhost/wishing_ui1/prasanth/wmapi/';
  //private $apikey="/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS";
  public function __construct(){
    parent::__construct();
    self::logcheck(); //TO CHECK USER LOGIN OR NOT
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->helper('file');
    $this->load->helper('date');
    //$this->load->library('session');
    $this->load->helper('security');
    $this->load->library('encrypt');
    //$this->load->library('image_lib');
    $this->load->model('img_upload_model');
    $this->load->library('form_validation');
    $this->load->helper('Api_url');
    $this->load->helper('time');
    //$this->load->library('cart');



  }

	public function index(){ // TO GET LANDING PAGE
    //self::logcheck(); //TO CHECK USER LOGIN OR NOT
    $data['thispage']="c1";
    $data['title']="WishingMart || Chatting App Page.";

    $uid=$this->session->userdata('uid');

    $url_chat_all=base_api_url()."chat/all_chat/uid/".$uid.base_api_key();
    $data['chat_all'] = self::getapi($url_chat_all);
    //echo "<pre>";
    //print_r($data['chat_all']);
    //echo "</pre>";
    //exit();

    $this->load->view('chatapp/index', $data);
	}

  public function friendswithyou(){ // TO GET LANDING PAGE
    //self::logcheck(); //TO CHECK USER LOGIN OR NOT
    $data['thispage']="c2";
    $data['title']="WishingMart || Chatting App Page.";

    $uid=$this->session->userdata('uid');

    $url_chat_all=base_api_url()."chat/all_chat/uid/".$uid.base_api_key();
    $data['chat_all'] = self::getapi($url_chat_all);
    //echo "<pre>";
    //print_r($data['chat_all']);
    //echo "</pre>";
    //exit();

    $this->load->view('chatapp/index', $data);
  }

  public function youwithfriends(){ // TO GET LANDING PAGE
    //self::logcheck(); //TO CHECK USER LOGIN OR NOT
    $data['thispage']="c3";
    $data['title']="WishingMart || Chatting App Page.";

    $uid=$this->session->userdata('uid');

    $url_chat_all=base_api_url()."chat/all_chat/uid/".$uid.base_api_key();
    $data['chat_all'] = self::getapi($url_chat_all);
    //echo "<pre>";
    //print_r($data['chat_all']);
    //echo "</pre>";
    //exit();

    $this->load->view('chatapp/index', $data);
  }


  public function offline(){ // TO GET LANDING PAGE
    //self::logcheck(); //TO CHECK USER LOGIN OR NOT
    $data['thispage']="c4";
    $data['title']="WishingMart || Chatting With Offline Friends.";

    $uid=$this->session->userdata('uid');

    $url_friends_list=base_api_url()."chat/friends_list/uid/".$uid.base_api_key();
    $data['friends_list'] = self::getapi($url_friends_list);
    //echo "<pre>";
    //print_r($data['friends_list']);
    //echo "</pre>";
    //exit();

//echo time_dmtmi("2015-12-15 14:12:57");
    $this->load->view('chatapp/index', $data);
  }

  public function user_with(){
    $to_id=$this->uri->segment(3);
    $uid=$this->session->userdata('uid');

    $url_chat_both=base_api_url()."chat/both_chat/fid/".$uid."/tid/".$to_id.base_api_key();
    $data['chat_both'] = self::getapi($url_chat_both);
    $array_both=$data['chat_both'];
    asort($array_both);
    //echo "<pre>";
    //print_r($array_both);
    //echo "</pre>";
    //exit();

?>
        <div class="box box-success direct-chat direct-chat-success">
          <div class="box-header with-border">
            <h3 class="box-title">Chat</h3>
            <div class="box-tools pull-right">
              <a onclick="javascript:chatWith('<?php echo $to_id; ?>')" data-toggle="tooltip" title="Chat With User" class='badge bg-green'>Chat</a>
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button class="btn btn-box-tool" data-toggle="tooltip" title="Chat" data-widget="chat-pane-toggle" onclick="javascript:chatWith('<?php echo $to_id; ?>')"><i class="fa fa-comments"></i></button>
              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div><!-- /.box-header -->
          <div class="box-body">
      <!-- Conversations are loaded here -->
      <div class="direct-chat-messages">
<?php
$count=count($array_both)-1;
foreach($array_both as $k=>$v){
  if($v['from'] == $uid){
    echo "<div class='direct-chat-msg right'>";
    echo "<div class='direct-chat-info clearfix'>";
    echo "<span class='direct-chat-name pull-right'>".$v['from_fn']."</span>";
    echo "<span class='direct-chat-timestamp pull-left'>".time_dmtmi($v['sent'])."</span>";
    echo "</div>";
    echo "<img class='direct-chat-img' src=".base_url().'images/profile/'.$v['from_pimg']." alt='message user image' />";
  }else{
    echo "<div class='direct-chat-msg'>";
    echo "<div class='direct-chat-info clearfix'>";
    echo "<span class='direct-chat-name pull-left'>".$v['from_fn']."</span>";
    echo "<span class='direct-chat-timestamp pull-right'>".time_dmtmi($v['sent'])."</span>";
    echo "</div>";
    echo "<img class='direct-chat-img' src=".base_url().'images/profile/'.$v['from_pimg']." alt='message user image' />";
  }//ELSE COND END
  echo "<div class='direct-chat-text'>".$v['message']."</div>";
  echo "</div>";
 }//FOREACH LOOP END

?>
      </div><!--/.direct-chat-messages-->
    </div><!-- /.box-body -->
  </div><!--/.direct-chat -->
<?php

  }

  public function read(){
    self::logcheck(); //TO CHECK USER LOGIN OR NOT
    $from=$this->session->userdata('uid');
    $to=$this->session->userdata('wrid');
    if($to==""){
      $to=$this->session->userdata('from_id');
    }

    $url_chat_users=base_api_url()."chat/bothchat/from/".$from."/to/".$to.base_api_key();
    $data['from_to'] = self::getapi($url_chat_users);
    //$data['from_to']=array($data['from_to']);
    //echo "<pre>";
    //print_r($data['from_to']);

    $url_chat_users=base_api_url()."chat/bothchat/from/".$to."/to/".$from.base_api_key();
    $data['to_from'] = self::getapi($url_chat_users);
    //$data['to_from']=array($data['to_from']);
    //print_r($data['to_from']);
    
    if($data['from_to']==""){
      $array=$data['to_from'];
    }elseif($data['to_from']==""){
      $array=$data['from_to'];
    }else{
      $array=array_merge($data['from_to'],$data['to_from']);
      sort($array);
    }
  
    //$array=array_merge($data['from_to'],$data['to_from']);
    //sort($array);
    //print_r($array);
    //exit();

    foreach($array as $k=>$v){
      if($from==$v['from_id']){
        echo '<span class="align_text_right">';
        echo $v['message'] ." : ". $v['from_id'];
        echo "</span>";
        echo '<br>';
      }else{
        echo '<span class="align_text_left">';
        echo $v['from_id'] ." : ". $v['message'];
        echo "</span>";
        echo '<br>';

      }
    }
    //echo "</pre>";
  }

  public function insert(){
    self::logcheck(); //TO CHECK USER LOGIN OR NOT
    $from = $this->session->userdata('uid');
    $to   = $this->session->userdata('wrid');
    if($to==""){
      $to=$this->session->userdata('from_id');
    }elseif($to==""){
      $to=$this->uri->segment(3);
    }
    //echo $from="102";
    //echo $to="104";
    //echo $msg="hello world";
    $msg=$this->uri->segment(3);// for query string
    $msg=urldecode($msg);

    //exit();
    $url_chat_insert=base_api_url()."chat/chatinsert".base_api_key();
    if($url_chat_insert){
      $username = 'admin';
      $password = '1234';
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, $url_chat_insert);
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 1);
      curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
        'from' => $from,
        'to'   => $to,
        'msg'  => $msg,
      ));
       
      // Optional, delete this line if your API is open
      curl_setopt($curl_handle, CURLOPT_USERPWD, $username . ':' . $password);
       
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
       
      $result = json_decode($buffer);
      //print_r($result);exit();
      if(isset($result->status) && $result->status == 'success'){
        //echo 'success';
        redirect('chat/read');
      }else{
        echo 'Fails';
      }
    }
  }


  public function chatlist(){
    self::logcheck(); //TO CHECK USER LOGIN OR NOT
    $from=$this->session->userdata('uid');
    $to=$this->session->userdata('wrid');
    $url_chat_online=base_api_url()."chat/online_status/uid/".$from.base_api_key();
    $data['online_status'] = self::getapi($url_chat_online);
    //print_r($data['online_status']);
    
    $url_chat_from=base_api_url()."chat/bothchat/from/".$from."/to/".$to.base_api_key();
    $data['from_to'] = self::getapi($url_chat_from);
    //print_r($data['from_to']);

    $url_chat_to=base_api_url()."chat/bothchat/from/".$to."/to/".$from.base_api_key();
    $data['to_from'] = self::getapi($url_chat_to);
    //print_r($data['to_from']);
  
    //echo "<pre>";
    $array=array_merge($data['from_to'],$data['to_from']);
    sort($array);
    //print_r($array);

    foreach($array as $k=>$v){
      if($from==$v['from_id']){
        echo '<span class="align_text_right">';
        echo $v['from_id'] ." : ". $v['message'];
        echo "</span>";
        echo '<br>';
      }else{
        echo '<span class="align_text_left">';
        echo $v['from_id'] ." : ". $v['message'];
        echo "</span>";
        echo '<br>';

      }
    }
    //echo "</pre>";
  }

  public function allchat(){
    self::logcheck(); //TO CHECK USER LOGIN OR NOT
    $data['thispage']="c2";
    $data['title']="WishingMart || User Chat.";
    
    $uid=$this->session->userdata('uid');

    $url_chat_all=base_api_url()."chat/all_chat/uid/".$uid.base_api_key();
    $data['chat_all'] = self::getapi($url_chat_all);
    echo "<pre>";
    print_r($data['chat_all']);
    echo "</pre>";

    $this->load->view('chatapp/index',$data);


  }




  public static function getapi($url){
    //$url = "http://tapway.elasticbeanstalk.com/data/venue/".$mo->id."/summary?access_token=abcdef&start=".$start."&end=".$end;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $body = curl_exec($ch);
    $obj = json_decode($body,true);

    if(!isset($obj['status']))
    return $obj ;
    else
    return 0 ;

  } // getapi FUNCTION END  

  function logcheck(){
    if($this->session->userdata('logged_in') == '1'){ 
      return TRUE;
    }else{
      redirect("landing"); 
      return FALSE;
    }
  }


}
