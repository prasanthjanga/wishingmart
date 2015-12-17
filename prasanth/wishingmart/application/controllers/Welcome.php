<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//private $apiurl='http://localhost/wishing_ui1/prasanth/wmapi/';
	//private $apikey="/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS";

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('startChat');
	}
	
	function chat($me, $you)
    {
        $data['me'] = $me;
        $data['you'] = $you;
        $this->load->view('chatty', $data);
    }

    public function action(){

    	if ($this->uri->segment('3') == "chatheartbeat"){
		    redirect('welcome/chatHeartbeat');
		    //chatHeartbeat();
		}elseif ($this->uri->segment('3') == "sendchat")
		{
		    redirect('welcome/sendChat');
		    //sendChat();
		}elseif ($this->uri->segment('3') == "closechat")
		{
		    redirect('welcome/closeChat');
		    //closeChat();
		}elseif ($this->uri->segment('3') == "startchatsession")
		{
		    redirect('welcome/startChatSession');
		    //startChatSession();
		}elseif (!isset($_SESSION['chatHistory']))
		{
			$_SESSION['chatHistory'] = array();	
		}elseif (!isset($_SESSION['openChatBoxes']))
		{
			$_SESSION['openChatBoxes'] = array();	
		}
    }// ACTION() FUNCTION END


function chatHeartbeat()
{
	//echo $_SESSION['username'];
    $url_chat_get=base_api_url()."chat/chatto/uname/".$_SESSION['uid'].base_api_key();
    $data['get_chat'] = self::getapi($url_chat_get);
    //print_r($data['get_chat']);exit();

	//$sql = "select * from chat where (chat.to = '".mysql_real_escape_string($_SESSION['username'])."' AND recd = 0) order by id ASC";
	//$query = mysql_query($sql);
	$items = '';

	$chatBoxes = array();
	//echo $data['get_chat'][0]['message'];exit();

	//while ($chat = mysql_fetch_array($query))
	for($i=0;$i<=count($data['get_chat'])-1;$i++)
    {

		if (!isset($_SESSION['openChatBoxes'][$data['get_chat'][$i]['from']]) && isset($_SESSION['chatHistory'][$data['get_chat'][$i]['from']]))
        {
			$items = $_SESSION['chatHistory'][$data['get_chat'][$i]['from']];
		}

		$data['get_chat'][$i]['message'] = $this->sanitize($data['get_chat'][$i]['message']);

		$items .= <<<EOD
		{
			"s": "0",
			"f": "{$data['get_chat'][$i]['from']}",
			"m": "{$data['get_chat'][$i]['message']}"
        },
EOD;

        if (!isset($_SESSION['chatHistory'][$data['get_chat'][$i]['from']]))
        {
            $_SESSION['chatHistory'][$data['get_chat'][$i]['from']] = '';
        }
    
        $_SESSION['chatHistory'][$data['get_chat'][$i]['from']] .= <<<EOD
        {
                "s": "0",
                "f": "{$data['get_chat'][$i]['from']}",
                "m": "{$data['get_chat'][$i]['message']}"
        },
EOD;
            
            unset($_SESSION['tsChatBoxes'][$data['get_chat'][$i]['from']]);
            $_SESSION['openChatBoxes'][$data['get_chat'][$i]['from']] = $data['get_chat'][$i]['sent'];
	}//WHILE END

	if (!empty($_SESSION['openChatBoxes']))
    {
        foreach ($_SESSION['openChatBoxes'] as $chatbox => $time)
        {
            if (!isset($_SESSION['tsChatBoxes'][$chatbox]))
            {
                $now = time()-strtotime($time);
                $time = date('g:iA M dS', strtotime($time));

                $message = "Sent at $time";
                if ($now > 180)
                {
                    $items .= <<<EOD
                    {
                        "s": "2",
                        "f": "$chatbox",
                        "m": "{$message}"
                    },
EOD;
    
                    if (!isset($_SESSION['chatHistory'][$chatbox]))
                    {
                        $_SESSION['chatHistory'][$chatbox] = '';
                    }
    
                    $_SESSION['chatHistory'][$chatbox] .= <<<EOD
                    {
                        "s": "2",
                        "f": "$chatbox",
                        "m": "{$message}"
                    },
EOD;
                    $_SESSION['tsChatBoxes'][$chatbox] = 1;
                }
            }
        }
    }

	//$sql = "update chat set recd = 1 where chat.to = '".mysql_real_escape_string($_SESSION['username'])."' and recd = 0";
	//$query = mysql_query($sql);
	$this->session->userdata('uid');
	$data['to']=array('to' => $this->session->userdata('uid') );

	$url_chat_read=base_api_url()."chat/recd/".base_api_key();
	if($url_chat_read){
		$username = 'admin';
		$password = '1234';
		$curl_handle = curl_init();
		curl_setopt($curl_handle, CURLOPT_URL, $url_chat_read);
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl_handle, CURLOPT_POST, 1);
		curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data["to"]);
		 
		// Optional, delete this line if your API is open
		curl_setopt($curl_handle, CURLOPT_USERPWD, $username . ':' . $password);
		 
		$buffer = curl_exec($curl_handle);
		curl_close($curl_handle);
		 
		$result = json_decode($buffer);
		//print_r($result);exit();
	}//IF END

	if ($items != '')
    {
		$items = substr($items, 0, -1);
	}
    header('Content-type: application/json');
?>
    {
		"items": [
			<?php echo $items;?>
        ]
    }

<?php
			exit(0);
}

public static function chatBoxSession($chatbox)
{
	
	$items = '';
	
	if (isset($_SESSION['chatHistory'][$chatbox])) {
		$items = $_SESSION['chatHistory'][$chatbox];
	}

	return $items;
}

function startChatSession()
{
	$items = '';
	if (!empty($_SESSION['openChatBoxes']))
    {
    	//print_r($_SESSION['openChatBoxes']);
    	//exit();
		foreach ($_SESSION['openChatBoxes'] as $chatbox => $void)
        {
			$items .= self::chatBoxSession($chatbox);
		}
	}


	if ($items != '')
    {
		$items = substr($items, 0, -1);
	}

header('Content-type: application/json');
?>
{
		"username": "<?php echo $_SESSION['uid'];?>",
		"items": [
			<?php echo $items;?>
        ]
}

<?php

	exit(0);
}

function sendChat()
{
	echo $from = $_SESSION['uid'];
	//echo "view1111111";
	//$to = $_POST['to'];
	//$message = $_POST['message'];

	//echo $to = '101';
	//echo $message = 'sample txt for test';

    // $to = $this->input->get('to');
    //echo $message = $this->input->get('message');


	//echo $to = $this->get("to"); 
	//echo $message = $this->get('message'); 

	$this->load->helper('form'); 
	$to = $this->input->post('to'); 
	$message = $this->input->post('message');
	//exit();

	$_SESSION['openChatBoxes'][$to] = date('Y-m-d H:i:s', time());
	
	$messagesan = $this->sanitize($message);

	if (!isset($_SESSION['chatHistory'][$to]))
    {
		$_SESSION['chatHistory'][$to] = '';
	}

	$_SESSION['chatHistory'][$to] .= <<<EOD
	{
        "s": "1",
        "f": "{$to}",
        "m": "{$messagesan}"
	},
EOD;


	unset($_SESSION['tsChatBoxes'][$to]);

	//$sql = "insert into chat (chat.from,chat.to,message,sent) values ('".mysql_real_escape_string($from)."', '".mysql_real_escape_string($to)."','".mysql_real_escape_string($message)."',NOW())";
	//$query = mysql_query($sql);
	$data['chat_insrt']=array(
		'from'    => $this->session->userdata('uid'),
		'to'      => $to,
		'message' => $message,
	);

	$url_chat_insert=base_api_url()."chat/chatinsert/".base_api_key();
	if($url_chat_insert){
		$username = 'admin';
		$password = '1234';
		$curl_handle = curl_init();
		curl_setopt($curl_handle, CURLOPT_URL, $url_chat_insert);
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl_handle, CURLOPT_POST, 1);
		curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data["chat_insrt"]);
		 
		// Optional, delete this line if your API is open
		curl_setopt($curl_handle, CURLOPT_USERPWD, $username . ':' . $password);
		 
		$buffer = curl_exec($curl_handle);
		curl_close($curl_handle);
		 
		$result = json_decode($buffer);
		//print_r($result);exit();
	}//IF END

	echo "1";
	exit(0);
}

function closeChat()
{

	unset($_SESSION['openChatBoxes'][$_POST['chatbox']]);
	//$this->session->sess_destroy('openChatBoxes');
	//$this->session->unset_userdata('openChatBoxes');
	
	echo "1";
	exit(0);
}

function sanitize($text)
{
	$text = htmlspecialchars($text, ENT_QUOTES);
	$text = str_replace("\n\r","\n",$text);
	$text = str_replace("\r\n","\n",$text);
	$text = str_replace("\n","<br>",$text);
	return $text;
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







}
