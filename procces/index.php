<?

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Main\Web\HttpClient;
\Bitrix\Main\Loader::includeModule('iblock');
$el = new CIBlockElement;

$PROP = array();
$PROP['NAME'] = $_POST['Name'];
$PROP['EMAIL'] = $_POST['Email'];
$PROP['PHONE'] = $_POST['Phone'];

$arLoadProductArray = Array(
  "IBLOCK_ID"      => 4,
  "PROPERTY_VALUES"=> $PROP,
  "NAME"           => $_POST['Name'],
  "ACTIVE"         => "Y"
  );

if($PRODUCT_ID = $el->Add($arLoadProductArray)) {
  $PROP["DEFAULT_EMAIL_FROM"] = "info@malinkacapital.com";
  $PROP["SERVER_NAME"] = "malinkacapital.com";
  CEvent::SendImmediate("SEND_REQUEST", 's1', $PROP);


  $httpClientContact = new HttpClient();
  $result = $httpClientContact->post('https://malinkacapital.bitrix24.ru/rest/1/d2yohf060p1zcikh/crm.contact.add', [
      'fields' => [
          'NAME'  => $PROP['NAME'],
          'PHONE' => [
            [
              "VALUE" => $PROP['PHONE'],
              "VALUE_TYPE" => "OTHER"
            ]
          ],
          'EMAIL' => [
            [
              "VALUE" => $PROP['EMAIL'],
              "VALUE_TYPE" => "OTHER"
            ]
          ]
      ],
  ]);
  $contactData = json_decode($result,1);

  $httpClientDeal = new HttpClient();
  $result = $httpClientDeal->post('https://malinkacapital.bitrix24.ru/rest/1/d2yohf060p1zcikh/crm.deal.add', [
      'fields' => [
          //'CATEGORY_ID'           => 1,
          'TITLE'                 => 'Lead from malinkacapital.com - ' . $PROP['NAME'],
          'SOURCE_ID'             => 'WEB',
          'SOURCE_DESCRIPTION'    => 'https://malinkacapital.com/',
          'CONTACT_ID'            => $contactData['result'],
          //'STAGE_ID'              => 'NEW'
      ],
  ] );


} else {
  $message['error'] = 'Ошибка';
}


echo json_encode($message);

?>
