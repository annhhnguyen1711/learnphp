<?php
//FORM:Giao tiếp giữa client và server

if(isset($_REQUEST["userName"])){
    echo "<P>Hi,admin".$_REQUEST["userName"]."</P>";
}
//$_GET,$_POST,$_REQUEST