<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Israel
 * Date: 6/07/13
 * Time: 8:10
 * To change this template use File | Settings | File Templates.
 */

class Register_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

    //guardamos la nueva api key en la tabla keys
    public function new_api_key($level,$ignore_limits,$is_private_key,$ip_addresses)
    {
        //generamos la key
        $key = $this->generate_token();
        //comprobamos si existe
        $check_exists_key = $this->db->get_where("keys", array("key"   =>   $key));

        //mientras exista la clave en la base de datos buscamos otra
        while($check_exists_key->num_rows() > 0){
            $key = "";
            $key = $this->generate_token();
        }
        //creamos el array con los datos
        $data = array(
            "key"           =>      $key,
            "level"         =>      $level,
            "ignore_limits" =>      $ignore_limits,
            "is_private_key"=>      $is_private_key,
            "ip_addresses"  =>      $ip_addresses
        );

        $this->db->insert("keys", $data);
        return $key;
    }

    //función que genera una clave segura de 40 carácteres, este será nuestro generador de keys para la api
    //https://gist.github.com/jeffreybarke/5347572
    //autor jeffreybarke
    private function generate_token($len = 40)
    {
        //un array perfecto para crear claves
        $chars = array(
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
            'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
            'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
            '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'
        );
        //desordenamos el array chars
        shuffle($chars);
        $num_chars = count($chars) - 1;
        $token = '';

        //creamos una key de 40 carácteres
        for ($i = 0; $i < $len; $i++)
        {
            $token .= $chars[mt_rand(0, $num_chars)];
        }
        return $token;
    }
}