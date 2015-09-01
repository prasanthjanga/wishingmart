<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class MY_Form_validation{
    /**
     * MY_Form_validation::alpha_extra().
     * Alpha-numeric with periods, underscores, spaces and dashes.
     */
    function alpha_extra($str) {
        $this->CI->form_validation->set_message('alpha_extra', 'The %s may only contain alpha-numeric characters, spaces, periods, underscores & dashes.');
        return ( ! preg_match("/^([\.\s-a-z0-9_-])+$/i", $str)) ? FALSE : TRUE;
    }
    // add more function to apply custom rules.
}