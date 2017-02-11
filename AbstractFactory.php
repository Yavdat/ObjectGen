<?php
abstract class CommsManager {
    abstract function getHeaderText();
    abstract function getApptEncoder();
    abstract function getTtdEncoder();
    abstract function getContactEncoder();
    abstract function getFooterText();
}

abstract class ApptEncoder {
    abstract function encode();
}

class BloggsApptEncoder  extends ApptEncoder {
    function encode()
    {
        return "The data encoded in format BloggsCall\n";
    }
}

abstract class TtdEncoder {
    abstract function encode();
}

class BloggsTtdEncoder  extends TtdEncoder {
    function encode()
    {
        return "The data encoded in format BloggsCall\n";
    }
}

abstract class ContactEncoder {
    abstract function encode();
}

class BloggsContactEncoder  extends ContactEncoder {
    function encode()
    {
        return "The data encoded in format BloggsCall\n";
    }
}

class BloggsCommsManager extends CommsManager {

    function getHeaderText() {
        return "BloggsCal UpperCase\n";
    }

    function getApptEncoder() {
        return new BloggsApptEncoder();
    }

    function getTtdEncoder(){
        return new BloggsTtdEncoder();
    }

    function getContactEncoder() {
        return new BloggsContactEncoder();
    }

    function getFooterText(){
        return "BloggsCal Lower";
    }
}