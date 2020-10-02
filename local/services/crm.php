<?
// require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
//
// use Bitrix\Main\Web\HttpClient;
//
// $httpClientContact = new HttpClient();
// $result = $httpClientContact->post('https://malinkacapital.bitrix24.ru/rest/1/d2yohf060p1zcikh/crm.contact.add', [
//     'fields' => [
//         'NAME'  => 'Иван Петрович',
//         'PHONE' => [
//           [
//             "VALUE" => "79097203040",
//             "VALUE_TYPE" => "OTHER"
//           ]
//         ],
//         'EMAIL' => [
//           [
//             "VALUE" => "asdasd@sad.ru",
//             "VALUE_TYPE" => "OTHER"
//           ]
//         ]
//     ],
// ]);
// $contactData = json_decode($result,1);
// print_r($contactData['result']);
//
//
// $httpClientDeal = new HttpClient();
// $result = $httpClientDeal->post('https://malinkacapital.bitrix24.ru/rest/1/d2yohf060p1zcikh/crm.deal.add', [
//     'fields' => [
//         //'CATEGORY_ID'           => 1,
//         'TITLE'                 => 'Lead from malinkacapital.com - Иван Петрович',
//         'SOURCE_ID'             => 'WEB',
//         'SOURCE_DESCRIPTION'    => 'https://malinkacapital.com/',
//         'CONTACT_ID'            => $contactData['result'],
//         //'STAGE_ID'              => 'NEW'
//     ],
// ] );
// print_r($result);

?>
