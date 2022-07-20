<?php

/**
 * Utils functions 
 */

function isInside($str,$array)
{
    foreach($array as $value)
    {
        if($value===$str)
        {
            return true;
        }
    }
return false;
}
function currentUserIsLogged()
{
    if(!empty($_SESSION['user']['id']))
    {
        return True; 
    }
    else
    {
        return False;
    }
}

function redirect($time,$dest)
{
    //<body onLoad="redirection_temp()"> 
        $result = '<script type="text/javascript">
delay = "'.$time.'" ;
url = "'.$dest.'" ;
function redirection_temp() { self.setTimeout("self.location.href = url;",delay) ; }
</script>';

return $result;
    
}


?>
