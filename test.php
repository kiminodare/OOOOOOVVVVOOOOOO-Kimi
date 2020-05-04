<?php
require 'vendor/autoload.php';
use Stelin\OVOID;
$mobilePhone = "089526975544";
$authToken = "eyJhbGciOiJSUzI1NiJ9.eyJleHBpcnlJbk1pbGxpU2Vjb25kcyI6NjA0ODAwMDAwLCJjcmVhdGVUaW1lIjoxNTg4NTMwNDQ4NzM5LCJzZWNyZXQiOiJvRmxreTZLRnFQWkFVRXhFUHIvRStCV2xjSVdvZjFnN09QY2o2QnlvWTFuM0pGbjV2ZG1OMHNPSzZ4a0dNeDdOU0J2eGxlVjZmZjA1WFNnYWk0ZmRlQitnT3Z5VCtRTjVSWGRYYTg3eTNSNEdleFFhYkFkZEg3VGtNWDBiVWpTVGhKRHB3cWJQTVRIM1BTZTh0UUZReWFTN04wS2xLZkZxVEQ0clNaWGVyWWQ4VGFGQzNOSkxFbmNQY1VEWXZRYTlHcjdjeE1sZUM3Q1Z0YXVYWEpLRTNjM2o4cmxGMTVRU0VkYVExWVp5Ums2RVNwUUxXR2pnUjB2dTZ6M0pwTE4xa2JmWG8yYXRJOUs4T2pUNnRDbWJtbDBTZU9JcTF5RTNaekt1cXhpOFdub2ZDMUphRUhoUTBQd2orMkM0RVQ2YnN2eTdYRHJkWFlDb2Ziand0bWUrMW5VRm9jRU9MeWVDM2NxQ1B0U0tWakk9In0.JveSDPW2JoeJhhgL3zeQPlUb8PnjMxpV_RznwOcjeLjyZMsgnJ_jSUmEtBg7AHRGz5NGhR-Pa-i-r4qARHmW_etK818niUBYaxPtHuqPTlYI6efAx6UPCh5LuNpqsOIrle8OmC_KKYtaKwoqbQ6XI_HSl67ChYJznHbA-6_V4QQH4sYj50BVwUYj6uTKspmsnH8wlAS6-RCOQyCPQxZ-5hfpkii3p3z6DF2ARMf2x2KPFFQROTQnNebpHXlqbDmcsi9F6PYGo_MiZXifHfWxr89LZPOPYHfRjfQ9ArdlTL7VOOKbODDdKqnKwnMfphJo4aqUIwBmwG15-9P_uhVhFg";
$page = "1";
// $ovoid = new OVOID();
// echo $ovoid->login2FA('089526975544')->getRefId();

// echo $ovoid->login2FAVerify('4de2d93c2e0943b3803dee642ab7f6f0', '9055', '089526975544')->getUpdateAccessToken();

// echo $ovoid->loginSecurityCode('085246', 'fcfd666f28344f72bee4180d9e940b20')->getAuthorizationToken();
$ovoid = new OVOID($authToken);
$notif = $ovoid->getWalletTransaction($page, $limit = 1);
foreach ($notif as $key => $value) {
    echo $value. PHP_EOL;
}
// $total = 


// if(strpos())
