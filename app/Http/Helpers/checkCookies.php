<?php

// Make sure you're receiving the Request object if necessary.
use Illuminate\Http\Request;

function checkCookies(Request $request)
{
    return $request;
    // Check if the required cookies are present
    if ($request->hasCookie('connect.sid')) {
        return true;
    }
    
    return false;
}
