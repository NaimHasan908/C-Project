<?php
function Login($username,$password)
{
    $crdata=file_get_contents('../Model/Infor.json');
    $ar_data=json_decode($crdata,true);
    for($a=0; $a<=sizeof($ar_data);$a++)
    {
        foreach($ar_data[$a] as $key =>$val)
        {
            if($ar_data[$a]['user']==$username && $ar_data[$a]['pw']==$password)
            return true;
        }
    }
}
?>