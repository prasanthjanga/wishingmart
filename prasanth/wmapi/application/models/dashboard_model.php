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

        $query = $this->db->query("SELECT w.*,ct.cname country,c.cname category,sc.scname subcategory
FROM wishing w
LEFT JOIN vr_users.country ct ON ct.cnid = w.cname
LEFT JOIN vr_wishing.subcategory sc ON sc.scid = w.scid
LEFT JOIN vr_wishing.category c ON sc.cid = c.cid
WHERE wid=$wid");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }


    function post_updatewish($update){
        $last_update = date("Y-m-d G:i:s",time());

        $update=array(
            'wid'      => $update["wid"],      // WISHING PRODUCT ID
            'wpn'      => $update["wpn"],      // WISHING PRODUCT NAME
            'wpcolour' => $update["wpcolour"], // WISHING PRODUCT COLOUR
            'brand'    => $update["brand"],    // WISHING PRODUCT BRAND
            'wpimg'    => $update["wpimg"],    // WISHING PRODUCT IMAGE
            'scid'     => $update["scid"],     //SUB CATUGERY ID
            'cname'    => $update["cname"],    //COUNTRY NAME
            'wpdec'    => $update["wpdec"],    //WISHING PRODUCT DESCRIPTION
        );

        $wid=$update['wid'];

        $query=$this->db->query("select wid from wishing where wid = $wid");
        if($query->num_rows() > 0){
            if($update["wpn"]){
                //echo "wpn innnnn"; exit();
                $this->db->where('wid', $wid);
                $this->db->update('wishing', array('wpn'=>$update["wpn"],'wpdate' => $last_update));
            }
            if($update["wpcolour"]){
                $this->db->where('wid', $wid);
                $this->db->update('wishing', array('wpcolour'=>$update["wpcolour"],'wpdate' => $last_update));
            }
            if($update["brand"]){
                $this->db->where('wid', $wid);
                $this->db->update('wishing', array('brand'=>$update["brand"],'wpdate' => $last_update));
            }
            if($update["wpimg"]){
                $this->db->where('wid', $wid);
                $this->db->update('wishing', array('wpimg'=>$update["wpimg"],'wpdate' => $last_update));
            }
            if($update["scid"]){
                $this->db->where('wid', $wid);
                $this->db->update('wishing', array('scid'=>$update["scid"],'wpdate' => $last_update));
            }
            if($update["cname"]){
                $this->db->where('wid', $wid);
                $this->db->update('wishing', array('cname'=>$update["cname"],'wpdate' => $last_update));
            }
            if($update["wpdec"]){
                $this->db->where('wid', $wid);
                $this->db->update('wishing', array('wpdec'=>$update["wpdec"],'wpdate' => $last_update));
            }
        }
    }



    function get_grantlistid($uid){

        //$query = $this->db->query("SELECT * FROM granting WHERE gtuid=$uid ORDER BY gtdate ASC");
        $query = $this->db->query("SELECT * , g.status gstatus, w.status wstatus,c.cname country
FROM vr_wishing.granting g
LEFT JOIN vr_wishing.wishing w ON g.wpid = w.wid
LEFT JOIN vr_users.country c ON g.gtcname = c.cnid
WHERE w.rid =$uid
ORDER BY gtdate ASC ");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function get_grantdetails($gid){

        //$query = $this->db->query("SELECT * FROM granting WHERE gid=$gid");
        $query = $this->db->query("SELECT g.gid,g.wpid,g.gtuid,g.gtprice,g.gtimg,c.cname gtcname,g.gtdesc,g.gtdate,g.status gstatus,
w.wid,w.wpn,w.wpcolour,w.brand,w.wpimg,w.rid,cty.cname wcategory,sc.scname wscname,w.status wstatus,w.wpdec,cc.cname wpcname,w.wpdate,r.fn gtfn,r.ln gtln,ad.a_add1,ad.a_add2,ct.cname a_add3,ad.a_add3 a_add3_id,ad.a_pincode,p.contact,est.escompany,est.escost,est.esdays
FROM vr_wishing.granting g
LEFT JOIN vr_wishing.wishing w ON g.wpid = w.wid
LEFT JOIN vr_users.country c ON c.cnid = g.gtcname
LEFT JOIN vr_users.country cc ON cc.cnid=w.cname
LEFT JOIN vr_wishing.subcategory sc ON sc.scid=w.scid
LEFT JOIN vr_wishing.category cty ON cty.cid=sc.cid
LEFT JOIN vr_users.registration r ON r.rid=g.gtuid
LEFT JOIN vr_users.address ad ON r.rid=ad.paid
LEFT JOIN vr_users.country ct ON ct.cnid=ad.a_add3
LEFT JOIN vr_users.profile p ON r.rid=p.pid
LEFT JOIN vr_wishing.est_shipping est ON g.gid=est.esid
WHERE g.gid =$gid
ORDER BY gtdate ASC ");
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
left outer join address a on a.paid=p.pid
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

        $last_update = date("Y-m-d G:i:s",time());

        $addres_data = array(
            'said'       => $said,
            'uid'        => $address["uid"],
            's_add1'     => $address["add1"],
            's_add2'     => $address["add2"],
            's_add3'     => $address["add3"],
            's_pincode'  => $address["pincode"],
            's_contact'  => $address["contact"],
            'last_update'=> $last_update,
        );
        
        $query = $this->db->query('SELECT MAX(aid) FROM approval');
        if($query->num_rows() > 0){
            $row = $query->result_array();
        }
        $max_aid = $row[0]['MAX(aid)'];

        if($max_aid==0){
            $aid = $max_aid+101; 
        }else{
            $aid = $max_aid+1; 
        }

        $approvel_data = array(
            'aid'        => $aid,
            'gid'        => $address["gid"],//grant id from grant table
            'quantity'   => $address["quantity"],
            'shipping_id'=> $said,
            'last_update'=> $last_update,
            'pay_status' => '0',
        );
        
        if(isset($addres_data)){
            $ship_insert = $this->user->insert("shipping_add", $addres_data);
            $approvel_insert = $this->db->insert("approval", $approvel_data);
            $this->db->where('gid', $address["gid"]);
            $this->db->update('granting', array('status'=>'1')); 
            return $ship_insert.$approvel_insert;
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

        //print_r($update_me);exit();
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
        
        $last_update = date("Y-m-d G:i:s",time());

        $bank_ac=array(
            'payid'       => $bank_ac['uid'],
            'card_no'     => $bank_ac['cno'],
            'issued_bank' => $bank_ac['ib'],
            'card_type'   => $bank_ac['ct'],
            'country'     => $bank_ac['country'],
            'last_update' => $last_update,
        );

        //print_r($bank_ac);exit();
        $paid=$bank_ac['payid'];

        $query=$this->user->query("select payid from payment where payid = $paid");
        
        if($query->num_rows() > 0){
            if($bank_ac['card_no']){
                $this->user->where('payid', $paid);
                $this->user->update('payment', array('card_no'=>$bank_ac['card_no'],'last_update' => $last_update));
            }
            if($bank_ac['issued_bank']){
                $this->user->where('payid', $paid);
                $this->user->update('payment', array('issued_bank'=>$bank_ac['issued_bank'],'last_update' => $last_update));
            }
            if($bank_ac['card_type']){
                $this->user->where('payid', $paid);
                $this->user->update('payment', array('card_type'=>$bank_ac['card_type'],'last_update' => $last_update));
            }
            if($bank_ac['country'] != "00"){
                $this->user->where('payid', $paid);
                $this->user->update('payment', array('country'=>$bank_ac['country'],'last_update' => $last_update));
            }
        }else{
            $query_bank_ac=$this->user->insert('payment', $bank_ac);
            return $query_bank_ac;
        }
    }

    function post_postal_address($p_address){
        $CI = &get_instance(); //To Load 2nd DB
        $this->user = $CI->load->database('user', TRUE); //To Load 2nd DB
        $last_update = date("Y-m-d G:i:s",time());

        $p_addr=array(
            'paid'        => $p_address['uid'],
            'a_add1'      => $p_address['a_add1'],
            'a_add2'      => $p_address['a_add2'],
            'a_add3'      => $p_address['a_add3'],
            'a_pincode'   => $p_address['a_pincode'],
            'last_update' => $last_update,
        );

        $paid=$p_address['uid'];

        $query=$this->user->query("select paid from address where paid = $paid");
        if($query->num_rows() > 0){
            if($p_address['a_add1']){
                $this->user->where('paid', $paid);
                $this->user->update('address', array('a_add1'=>$p_address['a_add1'],'last_update' => $last_update));
            }
            if($p_address['a_add2']){
                $this->user->where('paid', $paid);
                $this->user->update('address', array('a_add2'=>$p_address['a_add2'],'last_update' => $last_update));
            }
            if($p_address['a_add3'] != "00"){
                $this->user->where('paid', $paid);
                $this->user->update('address', array('a_add3'=>$p_address['a_add3'],'last_update' => $last_update));
            }
            if($p_address['a_pincode']){
                $this->user->where('paid', $paid);
                $this->user->update('address', array('a_pincode'=>$p_address['a_pincode'],'last_update' => $last_update));
            }
        }else{
            $query_add=$this->user->insert('address', $p_addr);
            return $query_add;
        }
    }

    function post_change_password($change_pwd){
        //print_r($change_pwd);  //exit();

        $CI = &get_instance(); //To Load 2nd DB
        $this->user = $CI->load->database('user', TRUE); //To Load 2nd DB
        
        $this->user->where('uid', $change_pwd['uid']);
        //$this->user->where('pwd', $change_pwd['old_pwd']);
        $this->user->update('user', array('pwd'=>$change_pwd['new_pwd']));
    }


    function get_mygrantlist($uid){
        $query = $this->db->query("SELECT g . * , c.cname country, r.fn fname, r.ln lname
FROM granting g
LEFT JOIN vr_users.country c ON c.cnid = g.gtcname
LEFT JOIN vr_wishing.wishing w ON w.wid = g.wpid
LEFT JOIN vr_users.registration r ON r.rid = w.rid
WHERE gtuid =$uid
ORDER BY gtdate ASC ");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function get_orderslist($uid){
        $query = $this->db->query("SELECT w.wid, a.aid, r.fn, r.ln, c.cname gtcountry, a.last_update, a.pay_status
FROM vr_wishing.wishing w
LEFT JOIN vr_wishing.granting g ON g.wpid = w.wid
LEFT JOIN vr_wishing.approval a ON a.gid = g.gid
LEFT JOIN vr_users.registration r ON r.rid = g.gtuid
LEFT JOIN vr_users.country c ON c.cnid = g.gtcname
WHERE w.rid =$uid ");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function get_orderview($aid){
        $query = $this->db->query("SELECT a.*,w.wid,w.wpn,g.gtprice,est.escost,est.escompany,afrom.*,sto.*,r.fn wishfn,r.ln wishln,rr.fn grantfn,rr.ln grantln,p.hcontact a_contact,c.cname a_country,cc.cname s_country
FROM vr_wishing.approval a
LEFT JOIN vr_wishing.granting g ON g.gid = a.gid
LEFT JOIN vr_wishing.wishing w ON w.wid = g.wpid
LEFT JOIN vr_wishing.est_shipping est ON est.esid = g.gid
LEFT JOIN vr_users.address afrom ON afrom.paid = g.gtuid
LEFT JOIN vr_users.shipping_add sto ON sto.said = a.shipping_id
LEFT JOIN vr_users.registration r ON r.rid = w.rid
LEFT JOIN vr_users.registration rr ON rr.rid = g.gtuid
LEFT JOIN vr_users.profile p ON p.pid = w.wid
LEFT JOIN vr_users.country c ON c.cnid = afrom.a_add3
LEFT JOIN vr_users.country cc ON cc.cnid = sto.s_add3
WHERE a.aid = $aid");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function get_invoicelist($uid){
        $query = $this->db->query("SELECT i.*,a.aid approval_id,est.escompany,a.pay_status,w.wpn
FROM vr_wishing.invoice i
LEFT JOIN vr_wishing.approval a ON a.aid = i.aid
LEFT JOIN vr_wishing.granting g ON g.gid = a.gid
LEFT JOIN vr_wishing.wishing w ON w.wid = g.wpid
LEFT JOIN vr_wishing.est_shipping est ON est.esid = g.gid
WHERE w.rid = $uid and a.pay_status!=0");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

function get_invoiceview($iid){
        $query = $this->db->query("SELECT inv.*,w.wid,g.gid,w.rid,afrom.*,g.gtuid,sto.*,a.quantity,w.wpn,g.gtprice,est.escompany,est.escost,c.cname a_country,cc.cname s_country,r.fn w_fn,r.ln w_ln,rr.fn g_fn,rr.ln g_ln
FROM vr_wishing.invoice inv
LEFT JOIN vr_wishing.approval a ON a.aid = inv.aid
LEFT JOIN vr_wishing.granting g ON g.gid = a.gid
LEFT JOIN vr_wishing.wishing w ON w.wid = g.wpid
LEFT JOIN vr_users.address afrom ON afrom.paid = g.gtuid
LEFT JOIN vr_users.shipping_add sto ON sto.said = a.shipping_id
LEFT JOIN vr_wishing.est_shipping est ON est.esid = g.gid
LEFT JOIN vr_users.country c ON c.cnid = afrom.a_add3
LEFT JOIN vr_users.country cc ON cc.cnid = sto.s_add3
LEFT JOIN vr_users.registration r ON r.rid = w.rid
LEFT JOIN vr_users.registration rr ON rr.rid = g.gtuid
WHERE inv.iid = $iid ");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }



}