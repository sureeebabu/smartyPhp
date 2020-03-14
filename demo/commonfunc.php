<?php

function cmodeFn($mode) {
    if($mode == "add") {
        return "Add";
    } elseif($mode == "edit"){
        return "Edit";
    }
}

function isActiveFn($active) {
    if($active == 1) {
        return "Yes";
    } else {
        return "No";
    }
}



?>