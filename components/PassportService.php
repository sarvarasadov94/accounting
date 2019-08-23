<?php
/**
 * Created by PhpStorm.
 * User: s_asadov
 * Date: 09.01.2019
 * Time: 17:15
 */

namespace app\components;

use DateTime;
use SimpleXMLElement;
use SoapClient;

class PassportService
{

    public static function getData($pinfl, $passport)
    {
        $wsdl = "https://ips.gov.uz/mediate/ips/PC/PersonDocInfoService?wsdl";


        $client = new SoapClient(
            $wsdl, [
                'cache_wsdl' => WSDL_CACHE_NONE,
            ]
        );

        $xml = "";

        self::formRequestStringForPassport($xml, $pinfl, $passport);
        $soapData = $client->soapMsg_Receive(['Data' => $xml]);

        if ($soapData->Result != "1") {
            return [];
        }


        $data = new SimpleXMLElement($soapData->Data);
        $data = (array)$data->row;
        $data['birth_date'] = isset($data['birth_date']) ? date("Y-m-d", strtotime($data['birth_date'])) : "";

        $data['date_begin_document'] = (array)DateTime::createFromFormat("Y-d-m", $data['date_begin_document']);
        $data['date_begin_document'] = $data['date_begin_document']['date'];
        $data['date_begin_document'] = date("Y-m-d", strtotime($data['date_begin_document']));

        $data['date_end_document'] = (array)DateTime::createFromFormat("Y-d-m", $data['date_end_document']);
        $data['date_end_document'] = $data['date_end_document']['date'];
        $data['date_end_document'] = date("Y-m-d", strtotime($data['date_end_document']));
        return $data;
    }

    public static function transliterate($textcyr = null, $textlat = null)
    {
        $cyr = array(
            'ж', 'ч', 'щ', 'ш', 'ю', 'а', 'б', 'в', 'г', 'д', 'е', 'з', 'и', 'ж', 'к', 'л', 'м', 'н', 'у', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'й', 'х', 'к',
            'Ж', 'Ч', 'Щ', 'Ш', 'Ю', 'А', 'Б', 'В', 'Г', 'Д', 'Е', 'З', 'И', 'Ж', 'К', 'Л', 'М', 'Н', 'У', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Й', 'Х', 'К');
        $lat = array(
            'zh', 'ch', 'sht', 'sh', 'yu', 'a', 'b', 'v', 'g', 'd', 'e', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o‘', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'y', 'x', 'q',
            'Zh', 'Ch', 'Sht', 'Sh', 'Yu', 'A', 'B', 'V', 'G', 'D', 'E', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O‘', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'c', 'Y', 'X', 'Q');
        if ($textcyr) return str_replace($cyr, $lat, $textcyr);
        else if ($textlat) return str_replace($lat, $cyr, $textlat);
        else return null;
    }

    private static function formRequestStringForPassport(&$xml, $pinfl, $passport)
    {
        $xml = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<DataCEPRequest>
     <pinpp>$pinfl</pinpp>
     <document>$passport</document>
     <langId>1</langId>
</DataCEPRequest>
XML;
    }


}