<?php
abstract class ApptEncoder {
    abstract function encode();
}

class BloggsApptEncoder  extends ApptEncoder {
    function encode()
    {
        return "The data encoded in format BloggsCall\n";
    }
}

class MegaApptEncoder extends ApptEncoder {
    function encode()
    {
        return "The data ecoded in format MegaCall\n";
    }
}

abstract class CommsManager {
    abstract function getHeaderText();
    abstract function getApptEncoder();
    abstract function getFooterText();
}

class BloggsCommmsManager extends CommsManager {

    function getHeaderText()
    {
        return "BloggsCal UpperCase\n";
    }

    function getApptEncoder()
    {
        return new BloggsApptEncoder();
    }

    function getFooterText()
    {
        return "BloggsCall LowerCase\n";
    }
}

class MegaCommsManager extends CommsManager {

    function getHeaderText()
    {
        return "Mega Call in UpperCase\n";
    }

    function getApptEncoder()
    {
        return new MegaApptEncoder();
    }

    function getFooterText()
    {
        return "Mega Call in LowerCase\n";
    }
}

$mgr = new BloggsCommmsManager();
print $mgr->getHeaderText();
print $mgr->getApptEncoder()->encode();
print $mgr->getFooterText();

$mgr = new MegaCommsManager();
print $mgr->getHeaderText();
print $mgr->getApptEncoder()->encode();
print $mgr->getFooterText();

