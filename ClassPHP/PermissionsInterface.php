<?php

interface PermissionsInterface {
    
    const READ_POST = 1;
    const WRITE_POST = 2;
    const DELETE_POST = 4;
    const DELETE_USER = 8;
    
    function getPermission();
    function isPermitted($permission);
    function writePost($postToWrite, $postPlace);
//    function readPost($postID);
}



