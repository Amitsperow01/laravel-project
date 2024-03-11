<?php

use App\Models\Page;
use App\Models\Enquiry;
function getMenuPages(){
    $pages = Page::orderBy("ordering")->where("status",1)->get();

	return $pages;
}
function getEnquiry() {
    $enquiry = Enquiry::where("status",1)->count();
    return $enquiry;
}

?>