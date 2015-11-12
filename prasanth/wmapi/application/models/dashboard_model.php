<?php defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_model extends CI_Model
{

    function get_wishlistid($uid){

        $query = $this->db->query("SELECT * FROM wishing WHERE rid=$uid ORDER BY wpdate ASC");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }
    function get_wishdetails($wid){

        $query = $this->db->query("SELECT * FROM wishing WHERE wid=$wid");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function get_grantlistid($uid){

        $query = $this->db->query("SELECT * FROM granting WHERE gtuid=$uid ORDER BY gtdate ASC");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function get_grantdetails($gid){

        $query = $this->db->query("SELECT * FROM granting WHERE gid=$gid");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function get_profile($uid){

        $CI = &get_instance();
        $this->user = $CI->load->database('user', TRUE);
       $query = $this->user->query("SELECT
r.fn,r.ln,r.gender,r.dob,ct.cname r_country,u.uname,
p.enotice,p.prof_img,p.contact,p.hcontact,
y.card_no,y.issued_bank,cy.cname p_country,y.card_type,
a.a_add1,a.a_add2,ca.cname a_country,a.a_pincode,
s.s_add1,s.s_add2,s.s_add3,s.s_pincode,s.s_contact
FROM registration r
INNER JOIN user u on u.uid=r.rid 
INNER JOIN country ct on ct.cnid=r.cnid
left outer join profile p on p.pid=r.rid 
left outer join address a on a.paid=p.paid
left outer JOIN country ca on ca.cnid=a.a_add3
left outer join payment y on y.payid=r.rid
left outer JOIN country cy on cy.cnid=y.country
LEFT OUTER JOIN shipping_add s ON r.rid = s.uid
WHERE r.rid=$uid
");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function post_shipping_add($address){
        //print_r($address);
        // Loading second db and running query.
        $CI = &get_instance();
        $this->user = $CI->load->database('user', TRUE);
        $query = $this->user->query('SELECT MAX(said) FROM shipping_add');
        if($query->num_rows() > 0){
            $row = $query->result_array();
        }
        $max = $row[0]['MAX(said)'];

        if($max==0){
            $said = $max+101; 
        }else{
            $said = $max+1; 
        }

        $addres_data = array(
            'said'      => $said,
            'uid'       => $address["uid"],
            's_add1'    => $address["add1"],
            's_add2'    => $address["add2"],
            's_add3'    => $address["add3"],
            's_pincode' => $address["pincode"],
            's_contact' => $address["contact"],
        );
        $add_update = array(
            'a_add1'    => $address["add1"],
            'a_add2'    => $address["add2"],
            'a_add3'    => $address["add3"],
            'a_pincode' => $address["pincode"],
            'contact'   => $address["contact"],
        );
        
        if(isset($addres_data)){
            //$query=$user->select('uid')->from('shipping_add')->where('uid',$address['uid']);
            $query = $this->user->get_where('shipping_add', array('uid' => $address['uid']));

            if($query->num_rows() > 0){
                $ship_update= $this->user->where('uid', $address["uid"]);
                $ship_update= $this->user->update('shipping_add', $add_update);
                //$ship_update = $this->user->update("shipping_add", $add_update);
                return $ship_update;
            }else{
                $ship_insert = $this->user->insert("shipping_add", $addres_data);
                return $ship_insert;
            }
        }
    }

    function post_profile_pic($p_pic){
        $CI = &get_instance(); //To Load 2nd DB
        $this->user = $CI->load->database('user', TRUE); //To Load 2nd DB
        $data = array(
           'prof_img'   => $p_pic['pro_pic']
        );

        $prof_pic=$this->user->where('pid', $p_pic['pid']);
        $prof_pic=$this->user->update('profile', $data); 
        return $prof_pic;
    }

    function post_about_me($update_me){
        $CI = &get_instance(); //To Load 2nd DB
        $this->user = $CI->load->database('user', TRUE); //To Load 2nd DB

        //print_r($reg_data);exit();
        if($update_me['fn']){
            $prof_fn=$this->user->where('rid', $update_me['uid']);
            $prof_fn=$this->user->update('registration', array('fn'=>$update_me['fn']));
            //return $prof_fn;
        }
        if($update_me['ln']){
            //print_r($reg_data);exit();
            $prof_ln=$this->user->where('rid', $update_me['uid']);
            $prof_ln=$this->user->update('registration', array('ln'=>$update_me['ln']));
            //return $prof_ln;
        }
        if($update_me['dob']){
            $prof_dob=$this->user->where('rid', $update_me['uid']);
            $prof_dob=$this->user->update('registration', array('dob'=>$update_me['dob']));
            //return $prof_dob;
        }
        if($update_me['gender']){
            $prof_gender=$this->user->where('rid', $update_me['uid']);
            $prof_gender=$this->user->update('registration', array('gender'=>$update_me['gender']));
            //return $prof_gender;
        }
        if($update_me['country'] != "00"){
            $prof_country=$this->user->where('rid', $update_me['uid']);
            $prof_country=$this->user->update('registration', array('cnid'=>$update_me['country']));
            //return $prof_country;
        }
        if($update_me['contact']){
            $prof_contact=$this->user->where('pid', $update_me['uid']);
            $prof_contact=$this->user->update('profile', array('contact'=>$update_me['contact']));
            //return $prof_contact;
        }
        if($update_me['hcontact']){
            $prof_hcontact=$this->user->where('pid', $update_me['uid']);
            $prof_hcontact=$this->user->update('profile', array('hcontact'=>$update_me['hcontact']));
            //return $prof_hcontact;
        }
            //return $prof_fn,$prof_ln,$prof_dob,$prof_country,$prof_contact,$prof_hcontact;
    }

    function post_bank_ac($bank_ac){
        $CI = &get_instance(); //To Load 2nd DB
        $this->user = $CI->load->database('user', TRUE); //To Load 2nd DB

        $bank_ac=array(
            'card_no'     => $bank_ac['cno'],
            'issued_bank' => $bank_ac['ib'],
            'card_type'   => $bank_ac['ct'],
            'country'     => $bank_ac['country'],
        );

        print_r($bank_ac);exit();
        if($bank_ac['cno']){
            $this->user->where('payid', $bank_ac['uid']);
            $this->user->update('payment', array('card_no'=>$bank_ac['cno']));
        }
        if($bank_ac['ib']){
            $this->user->where('payid', $bank_ac['uid']);
            $this->user->update('payment', array('issued_bank'=>$bank_ac['ib']));
        }
        if($bank_ac['ct']){
            $this->user->where('payid', $bank_ac['uid']);
            $this->user->update('payment', array('card_type'=>$bank_ac['ct']));
        }
        if($bank_ac['country'] != "00"){
            $this->user->where('payid', $bank_ac['uid']);
            $this->user->update('payment', array('country'=>$bank_ac['country']));
        }
    }

    function post_postal_address($p_address){
        $CI = &get_instance(); //To Load 2nd DB
        $this->user = $CI->load->database('user', TRUE); //To Load 2nd DB

        $uid=$p_address['uid'];
        $query = $this->user->query('SELECT MAX(paid) FROM address');
        if($query->num_rows() > 0){
            $row = $query->result_array();
        }
        $max = $row[0]['MAX(paid)'];

        if($max==0){
            $paid = $max+101; 
        }else{
            $paid = $max+1; 
        }

        $p_addr=array(
            'paid'     => $paid,
            'a_add1'   => $p_address['a_add1'],
            'a_add2'   => $p_address['a_add2'],
            'a_add3'   => $p_address['a_add3'],
            'a_pincode'=> $p_address['a_pincode'],
        );

        //print_r($p_addr);exit();
        $query=$this->user->query("select paid from profile where pid=$uid");
        if($query->num_rows() > 0){
            $row = $query->result_array();
        }
        $paid = $row[0]['paid'];//exit();
        if($paid){
            if($p_address['a_add1']){
                $this->user->where('paid', $paid);
                $this->user->update('address', array('a_add1'=>$p_address['a_add1']));
            }
            if($p_address['a_add2']){
                $this->user->where('paid', $paid);
                $this->user->update('address', array('a_add2'=>$p_address['a_add2']));
            }
            if($p_address['a_add3'] != "00"){
                $this->user->where('paid', $paid);
                $this->user->update('address', array('a_add3'=>$p_address['a_add3']));
            }
            if($p_address['a_pincode']){
                $this->user->where('paid', $paid);
                $this->user->update('address', array('a_pincode'=>$p_address['a_pincode']));
            }
        }else{

            $this->user->where('pid', $uid);
            $this->user->update('profile', array('paid' => $p_addr['paid'])); 

            $query=$this->user->insert('address', $p_addr);
        }
    }

    function post_change_password($change_pwd){
        print_r($change_pwd);  //exit();

        $CI = &get_instance(); //To Load 2nd DB
        $this->user = $CI->load->database('user', TRUE); //To Load 2nd DB
        
        $this->user->where('uid', $change_pwd['uid']);
        //$this->user->where('pwd', $change_pwd['old_pwd']);
        $this->user->update('user', array('pwd'=>$change_pwd['new_pwd']));
    }



}