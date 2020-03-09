<?php

function get_vpn_link($input) {
    $folder_name = 'vpn';
    $list = glob("**/*.ovpn");
    $ovpn = $folder_name.'/'.$input.'.ovpn';

    $link = 'null';

    if (in_array($ovpn, $list)) {
        $link = 'http://ovpn.net/dl/'.$ovpn;
    }

    return $link;
}

$link = get_vpn_link($_GET['ldap']);
echo $link;

?>
