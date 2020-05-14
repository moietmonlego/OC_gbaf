<?php
//debug des variables globales
?>
<h3>Debug</h3>
<table class ="tabledebug">
        <tr>
                <td>Session :</td>
                <td><?=var_dump($_SESSION)?></td>
        </tr>
        <tr>
                <td>Cookie :</td>
                <td><?=var_dump($_COOKIE)?></td>
        </tr>
        <tr>
                <td>GET :</td>
                <td><?=var_dump($_GET)?></td>
        </tr>
        <tr>
                <td>POST :</td>
                <td><?=var_dump($_POST)?></td>
        </tr>
        <tr>
                <td>Server :</td>
                <td><?=var_dump($_SERVER)?></td>
        </tr>
</table>