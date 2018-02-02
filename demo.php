<?php
/**
 * Created by PhpStorm.
 * User: 85210755@qq.com
 * NickName: 柏宇娜
 * Date: 2018/2/2 13:45
 */
$sms = new Aliyun\Sms(APP_KEY, APP_SECRET);//初始化时给出app_key及secret
$response = $sms->sendSms(
    '温泉酒店',   //短信签名
    'SMS_124800108',  //短信模板
    '13007686112',        //手机号码
    $smsParam,      // 短信模板变量的值 例如:$smsParam=array('code'=>123456,'order_sn'=>'p201802021846001');
    '20180202001'        //流水号，可不传
);

if ($response->Code == 'OK') {
    $data = ['status' => 1, 'msg' => $response->Message];
} else {
    $data = ['status' => 0, 'msg' => $response->Message];
}

exit(json_encode($data));