<?php
require_once __DIR__ . '/../autoload.php'; use Qiniu\Auth; use Qiniu\Processing\PersistentFop; $accessKey = 'Access_Key'; $secretKey = 'Secret_Key'; $auth = new Auth($accessKey, $secretKey); $bucket = 'Bucket_Name'; $pipeline = 'pipeline_name'; $notifyUrl = 'http://375dec79.ngrok.com/notify.php'; $pfop = new PersistentFop($auth, $bucket, $pipeline, $notifyUrl); $id = "z2.5955c739e3d0041bf80c9baa"; list($ret, $err) = $pfop->status($id); echo "\n====> pfop avthumb status: \n"; if ($err != null) { var_dump($err); } else { var_dump($ret); } 