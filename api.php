<?php

class API
{
    public function __construct($method)
    {
        switch ($method) {
            case "postXML":
                $this->_saveXML($this->_getXML());
                break;
            default:
                header('HTTP/1.1 405 Method Not Allowed');
        }
    }

    protected function _saveXML($xml)
    {
        if (!empty($xml)) {
            $doc = new DOMDocument('1.0');
            $doc->loadXML($xml);
            $doc->formatOutput = true;
            if ($doc->save("data/file.xml")) {
                header('HTTP/1.1 201 Created');
                header('Location: data/file.xml');
            } else {
                header('HTTP/1.1 500 Internal Server Error');
            }
        } else {
            header('HTTP/1.1 400 Bad Request');
        }
    }

    protected function _getXML()
    {
        return $xml = file_get_contents('php://input');
    }

}