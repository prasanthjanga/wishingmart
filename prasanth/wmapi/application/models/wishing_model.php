<?php

class Wishing_model extends CI_Model
{

    public function create_wish($array){
        //print_r($array);
        $query = $this->db->query('SELECT MAX(wid) FROM wishing');
        if($query->num_rows() > 0){
            $row = $query->result_array();
        }
        $max = $row[0]['MAX(wid)'];

        if($max==0){
            $wid = $max+101; 
        }else{
            $wid = $max+1; 
        }
        $datetime = mdate('%Y-%m-%d %h:%i:%s',time());
        //exit();
        $wish_array=array(
            'wid'       => $wid,
            'wpn'       => $array['pname'],
            'wpcolour'  => $array['colour'],
            'brand'     => $array['brand'],
            'wpdec'     => $array['desc'],
            'wpimg'     => $array['userfile'],
            'wpdate'    => $datetime,
            'rid'       => $array['rid'],
            'status'    => '0',
            'scid'      => $array['scategory'],
            'cname'      => $array['country'],
        );
        //print_r($array);
        
        $wishing_data = $this->db->insert("wishing", $wish_array);
        //$user = $this->user->insert("user",$user_data);
        //print_r($wishing_data);exit();
        return $wishing_data;
    }

    public function grant_wish($array){
        //print_r($array);
        $query = $this->db->query('SELECT MAX(gid) FROM granting');
        if($query->num_rows() > 0){
            $row = $query->result_array();
        }
        $max = $row[0]['MAX(gid)'];

        if($max==0){
            $gid = $max+101; 
        }else{
            $gid = $max+1; 
        }
        $datetime = mdate('%Y-%m-%d %h:%i:%s',time());
        //exit();
        $grant_array=array(
            'gid'       =>$gid,
            'wpid'      =>$array["wid"],
            'gtuid'     =>$array["gtuid"],
            'gtprice'   =>$array["gtprice"],
            'gtdesc'    =>$array["gtdesc"],
            'gtdate'    =>$datetime,
            'gtimg'     =>$array["gtimg"],
            'gtcname'   =>$array["gtcname"],
            'status'    =>'0',
        );
        $est_array=array(
            'esid'      =>$gid,
            'escompany' =>$array["scompany"],
            'escost'    =>$array["scost"],
            'esdays'    =>$array["sedays"],
            'esweight'  =>$array["bweight"],
            'eswidth'   =>$array["bwsize"],
            'esheight'  =>$array["bhsize"],
        );

        //print_r($array);exit();
        if(isset($array)){
            $granting_data = $this->db->insert("granting", $grant_array);
            $est_shipping_data = $this->db->insert("est_shipping", $est_array);
            
            return $granting_data.$est_shipping_data;
        }
        //$user = $this->user->insert("user",$user_data);
        //print_r($wishing_data);exit();
    }

    function get_all_wishes(){
        $query = $this->db->query("SELECT w.wid,w.rid,w.wpn,c.cname,w.wpdec,w.wpimg
FROM vr_wishing.wishing w
LEFT JOIN vr_users.country c ON c.cnid = w.cname
ORDER BY wpdate ASC ");

        //$query = $this->cms_db->select("users");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function get_country(){
        // Loading second db and running query.
        $CI = &get_instance();
        //setting the second parameter to TRUE (Boolean) the function will return the database object.
        $this->user = $CI->load->database('user', TRUE);
        $query = $this->user->query("SELECT * FROM country ORDER BY cname ASC");

        //$query = $this->cms_db->select("users");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }
    function get_countryid($id){
        // Loading second db and running query.
        $CI = &get_instance();
        //setting the second parameter to TRUE (Boolean) the function will return the database object.
        $this->user = $CI->load->database('user', TRUE);
        $this->user->select("*");
        $query = $this->user->get_where("country", array("cnid" => $id));
        if($query->num_rows() == 1){
            return $query->row();
        }
    }

    function get_category(){
        $query = $this->db->query("SELECT * FROM category");

        //$query = $this->cms_db->select("users");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }
    function get_subcategory(){
        $query = $this->db->query("SELECT * FROM subcategory");

        //$query = $this->cms_db->select("users");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function get_subcategoryid($id){
        $query = $this->db->query("SELECT c.cname, s.scname FROM category c, subcategory s WHERE c.cid=s.cid and s.scid=".$id);

        //$query = $this->cms_db->select("users");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function get_mail(){
        // Loading second db and running query.
        $CI = &get_instance();
        //setting the second parameter to TRUE (Boolean) the function will return the database object.
        $this->user = $CI->load->database('user', TRUE);
        $query = $this->user->query("SELECT uname FROM user");

        //$query = $this->cms_db->select("users");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }
    public function checkmail($username){
        $CI = &get_instance();
        $this->user = $CI->load->database('user', TRUE);
        
        $query = $this->user->get_where("user", array("uname" => $username));
        if($query->num_rows() == 1){
            return $query->row();
        }
    }


    function get_wishuser($wrid){
        // Loading second db and running query.
        $CI = &get_instance();
        //setting the second parameter to TRUE (Boolean) the function will return the database object.
        $this->user = $CI->load->database('user', TRUE);
        //$this->user->select("*");
        //$query = $this->user->get_where("country", array("cnid" => $id));

        $query = $this->user->query("SELECT r.rid,r.fn,r.ln,c.cname,p.prof_img FROM registration r
LEFT OUTER JOIN profile p ON p.pid=r.rid
LEFT OUTER JOIN country c ON c.cnid=r.cnid
WHERE rid='$wrid'");
        if($query->num_rows() == 1){
            return $query->row();
        }
    }

    function get_wishbyid($wpid){
        $query = $this->db->query("SELECT w.*,p.prof_img,r.fn,r.ln,c.cname wp_country,cc.cname wu_country,wc.cname category,s.scname subcategory  FROM wishing w
LEFT OUTER JOIN vr_users.profile p ON p.pid=w.rid
LEFT OUTER JOIN vr_users.registration r ON r.rid=w.rid
LEFT OUTER JOIN vr_users.country c ON c.cnid=r.cnid
LEFT OUTER JOIN vr_users.country cc ON cc.cnid=w.cname
LEFT OUTER JOIN vr_wishing.subcategory s ON s.scid=w.scid
LEFT OUTER JOIN vr_wishing.category wc ON wc.cid=s.cid
WHERE wid=$wpid");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }


}