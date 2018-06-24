<?php
/*
copyright @ medantechno.com
2017

*/

require_once('./line_class.php');

$channelAccessToken = 'BQoSjXlWMIZxSINqLyoY70KA6zfxrMmywl28UyBm2j2lpQagP2jLdHsai1JNzA64wU3TeFGJ2xrstCFCW0BP3k2lBl6OcX/QFKQaZJ0IjdtVzcpY5PphK0AWLwZprwGs8acKvkDODSiiyPTBSmIGCwdB04t89/1O/w1cDnyilFU='; //sesuaikan 
$channelSecret = '668c2a2ef557cbafe43e5729a3402177';//sesuaikan

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
$userId 	= $client->parseEvents()[0]['source']['userId'];
$replyToken = $client->parseEvents()[0]['replyToken'];
$timestamp	= $client->parseEvents()[0]['timestamp'];
$message 	= $client->parseEvents()[0]['message'];
$messageid 	= $client->parseEvents()[0]['message']['id'];
$profil = $client->profil($userId);
$pesan_datang = $message['text'];

//pesan bergambar
if($message['type']=='text')
{
	if($pesan_datang=='Hi')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => 'Halo'
									)
							)
						);
				
	}
	if($pesan_datang=='Done5')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
array (
  'type' => 'template',
  'altText' => 'YES / NO',
  'template' => 
  array (
    'type' => 'confirm',
    'text' => 'Terima Kasih & Selamat Datang kaka..Selamat Bergabung Menjadi Bagian Dari Keluarga FIS (*Admin silahkan berikan penilaian)',
    'actions' => 
    array (
      0 => 
      array (
        'type' => 'message',
        'label' => 'Yes',
        'text' => 'yes',
      ),
      1 => 
      array (
        'type' => 'message',
        'label' => 'No',
        'text' => 'no',
      ),
    ),
  ),
)
							)
						);
//pesan bergambar
if($message['type']=='text')
	if ($command == 'admin' || $command == 'Admin' )
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
array (
  'type' => 'template',
  'altText' => 'FIS MANAGEMENT',
  'template' => 
  array (
    'type' => 'carousel',
    'columns' => 
    array (
      0 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/gDpnMb/20180108_110257.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'FOUNDER',
        'text' => 'Group Owner -- Name : FahreziLee   Location : Malaysia',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'uri',
            'label' => 'CHAT',
            'uri' => 'http://tiny.cc/FIS_Lee',
          ),
          1 => 
          array (
            'type' => 'uri',
            'label' => 'SMULE',
            'uri' => 'https://www.smule.com/FIS_FahreziLee',
          ),		  
          2 => 
          array (
            'type' => 'message',
            'label' => 'view detail',
            'text' => 'FIS_LEE',
          ),
        ),
      ),
      1 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/gUFu1b/20180108_110910.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'SECRETARY',
        'text' => 'Admin -- Name : DeeAna       Location : Borneo',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'uri',
            'label' => 'CHAT',
            'uri' => 'http://tiny.cc/FIS_DEE',
          ),
          1 => 
          array (
            'type' => 'uri',
            'label' => 'SMULE',
            'uri' => 'https://www.smule.com/FIS_Dee',
          ),		  
          2 => 
          array (
            'type' => 'message',
            'label' => 'view detail',
            'text' => 'FIS_Dee',
          ),
        ),
      ),
      2 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/njD3uw/20180108_111546.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'CREATIVE',
        'text' => 'Admin -- Name : ALS                 Location : West Java',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'uri',
            'label' => 'CHAT',
            'uri' => 'http://tiny.cc/FIS_ALS',
          ),
          1 => 
          array (
            'type' => 'uri',
            'label' => 'SMULE',
            'uri' => 'https://www.smule.com/FIS_ALS',
          ),		  
          2 => 
          array (
            'type' => 'message',
            'label' => 'view detail',
            'text' => 'FIS_ALS',
          ),
        ),
      ),
      3 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/nxZySG/20180108_111027.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'RESOURCE',
        'text' => 'Admin -- Name : Lala              Location : Hongkong',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'uri',
            'label' => 'CHAT',
            'uri' => 'http://tiny.cc/FIS_LALA',
          ),
          1 => 
          array (
            'type' => 'uri',
            'label' => 'SMULE',
            'uri' => 'https://www.smule.com/FIS_LALA',
          ),		  
          2 => 
          array (
            'type' => 'message',
            'label' => 'view detail',
            'text' => 'FIS_LALA',
          ),
        ),
      ),
      4 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/gRYKZw/20180108_111446.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'HOME AS.',
        'text' => 'Admin -- Name : Alfariz              Location : Jakarta',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'uri',
            'label' => 'CHAT',
            'uri' => 'http://tiny.cc/FIS_ALFARIZ',
          ),
          1 => 
          array (
            'type' => 'uri',
            'label' => 'SMULE',
            'uri' => 'https://www.smule.com/FIS_Alfariz',
          ),		  
          2 => 
          array (
            'type' => 'message',
            'label' => 'view detail',
            'text' => 'FIS_Alfariz',
          ),
        ),
      ),
      5 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/npK41b/20180108_111333.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'HOME AS.',
        'text' => 'Admin -- Name : Juna Hermanza   Location : West Java',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'uri',
            'label' => 'CHAT',
            'uri' => 'http://tiny.cc/FIS_JUNA',
          ),
          1 => 
          array (
            'type' => 'uri',
            'label' => 'SMULE',
            'uri' => 'https://www.smule.com/FIS_Juna',
          ),		  
          2 => 
          array (
            'type' => 'message',
            'label' => 'view detail',
            'text' => 'FIS_Juna',
          ),
        ),
      ),
      6 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/edtxMb/20180108_111247.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'HOME AS.',
        'text' => 'Admin -- Name : Anissa              Location : West Java',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'uri',
            'label' => 'CHAT',
            'uri' => 'http://tiny.cc/FIS_NISA',
          ),
          1 => 
          array (
            'type' => 'uri',
            'label' => 'SMULE',
            'uri' => 'https://www.smule.com/FIS_Nisa',
          ),		  
          2 => 
          array (
            'type' => 'message',
            'label' => 'view detail',
            'text' => 'FIS_Nisa',
          ),
        ),
      ),
    ),
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
  ),
)
							)
						);
				
	}
//pesan bergambar
if($message['type']=='text') {
	    if ($command == 'Welcome' || $command == 'wc' ) {
        $balas = array(
            'replyToken' => $replyToken,
            'messages' => array(
                array (
  'type' => 'imagemap',
  'baseUrl' => 'https://res.cloudinary.com/tes5566/image/upload/v1524552956/line/Bot/Example',
  'altText' => 'WELCOME TO FIS FAMILY',
  'baseSize' => 
  array (
    'height' => 1040,
    'width' => 1040,
  ),
  'actions' => 
  array (
    0 => 
    array (
      'type' => 'uri',
      'linkUri' => 'https://www.smule.com/FIS_OFFICIAL',
      'area' => 
      array (
        'x' => 0,
        'y' => 0,
        'width' => 520,
        'height' => 1040,
      ),
    ),
    1 => 
    array (
      'type' => 'message',
      'text' => 'Admin',
      'area' => 
      array (
        'x' => 520,
        'y' => 0,
        'width' => 520,
        'height' => 1040,
      ),
    ),
  ),
)
            )
        );
    }
}
}
 
$result =  json_encode($balas);
//$result = ob_get_clean();

file_put_contents('./balasan.json',$result);


$client->replyMessage($balas);

?>
