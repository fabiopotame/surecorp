<?php
namespace App\View\Helper;

use Cake\View\Helper;


class DefaultHelper extends Helper
{
    public function checkStatus($status)
    {
        if($status > 0) {
        	return '<span style="color:green;"><strong>Ativo</strong></span>';
        } else {
        	return '<span style="color:red;"><strong>Inativo</strong></span>';
        }
    }
}