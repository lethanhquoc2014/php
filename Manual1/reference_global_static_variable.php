<?php
function testGlobalRef()
{
    global $obj;
    $obj = &new stdclass;
}

function testGlobalNoRef()
{
    global $obj;
    $obj = new stdclass;
}

testGlobalRef();
testGlobalNoRef();