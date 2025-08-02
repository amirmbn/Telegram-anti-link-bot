<?php

ob_start();
error_reporting(0);
define('API_KEY','API Token'); //Enter the APT Token of the Telegram bot here
function bot($method,$data) {
  $url = "https://api.telegram.org/bot".API_KEY."/".$method;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, count($data));
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
}
$Dev = array("XXXXXXX"); //Enter the details of the Telegram bot here
@$sudo = "Enter Admin Username"; //Without @
@$usernamebot = "Enter BOT Username"; //Without @
@$channel = "Enter Channel Username";
@$token = API_KEY;
$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$textmassage = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
@$text = $update->inline_qurey->qurey;
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$you = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
@$filterget = $settings["filterlist"];
function SendMessage($chat_id, $text) {
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$text,
    'parse_mode'=>'MarkDown']);
}
function EditMessageText($chat_id, $message_id, $text, $mode = null, $keyboard = null, $disable_web_page_preview = null){
    bot('EditMessageText',[
	'chat_id'=>$chat_id,
	'message_id'=>$message_id,
	'text'=>$text,
	'parse_mode'=>$mode,
	'reply_markup'=>$keyboard,
	'disable_web_page_preview'=>$disable_web_page_preview
    ]);
}
function Forward($berekoja,$azchejaei,$kodompayam) {
    bot('ForwardMessage',[
    'chat_id'=>$berekoja,
    'from_chat_id'=>$azchejaei,
    'message_id'=>$kodompayam
]);
}
function getUserProfilePhotos($token,$from_id) {
@$url = 'https://api.telegram.org/bot'.$token.'/getUserProfilePhotos?user_id='.$from_id;
@$result = file_get_contents($url);
@$result = json_decode ($result);
@$result = $result->result;
    return $result;
}
function check_filter($str) {
global $filterget;
foreach($filterget as $d){
if (mb_strpos($str, $d) !== false) {
    return true;
}
}
}
function pingDomain($domain){
$starttime = microtime(true);
$file = fsockopen($domain, 80, $errno, $errstr, 10);
$stoptime = microtime(true);
$status = 0;
if($file){
fclose($file);
$status = ($stoptime - $starttime) * 1000;
$status = floor($status);
}
else{
$status = -1;
}
return $status;
}
function msleep($time)
{
    usleep($time * 1000000);
}
include "command.php";
include "group.php";
include "help.php";
include "information.php";
include "limited.php";
include "messagecheck.php";
include "private.php";
include "settings.php";
include "tools.php";
if ($tc == 'private'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($from_id, $user["userlist"])) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif ($tc == 'group' | $tc == 'supergroup'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
if($textmassage=="/panel" or $textmassage=="panel" or $textmassage=="پنل" or $textmassage=="/panel@$usernamebot"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"به تنظیمات پنل مدیریتی ربات خوش آمدید لطفا بخش مورد نظر جهت تنظیم کردن را انتخاب کنید🔻🔻",
    'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'inline_keyboard'=>[
            [
                ['text'=>"🎛 تنظیمات گروه",'callback_data'=>'settings']
            ],
            [
                ['text'=>"📄 اطلاعات گروه",'callback_data'=>'groupe']
        	],
            [
                ['text'=>"🚫 تنظیمات محدودیتی",'callback_data'=>'bans']
            ],
            [
                ['text'=>"خروج",'callback_data'=>'exit']
            ],
            ]
        ])
        ]);
}
else{
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"#خطا ⚠️ ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید. 

💢 با دستور ⧼ نصب رایگان ⧽ میتوانید ربات را 7 روز رایگان فعال کنید ",
    'reply_to_message_id'=>$message_id,
]);
}	
}
}
}
elseif($data=="back"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"به تنظیمات پنل مدیریتی ربات خوش آمدید لطفا بخش مورد نظر جهت تنظیم کردن را انتخاب کنید🔻🔻",
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'inline_keyboard'=>[
            [
                ['text'=>"🎛 تنظیمات گروه",'callback_data'=>'settings']
            ],
            [
                ['text'=>"📄 اطلاعات گروه",'callback_data'=>'groupe']
        	],
            [
                ['text'=>"🚫 تنظیمات محدودیتی",'callback_data'=>'bans']
            ],
            [
                ['text'=>"خروج",'callback_data'=>'exit']
            ],
            ]
        ])
        ]);
}
else{
	bot('answerCallbackQuery',[
    'callback_query_id'=>$membercall,
    'text'=>"شما مدیر ربات نیستید ⚠️",
]);
}
}
elseif($data=="settings" ){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$mute_all = $settings2["lock"]["mute_all"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"⚙️ تنظیمات گروه :
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
لطفا بخش مورد نظر خود را انتخاب کنید🔻🔻",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
            [
                ['text'=>"⧼ قفل رسانه ⧽",'callback_data'=>'media'],['text'=>"⧼ قفل اصلی ⧽",'callback_data'=>'other']
            ],
            [
                ['text'=>"قفل گروه : $mute_all",'callback_data'=>'lockall']
            ],
            [
                ['text'=>"تنظیمات کارخانه",'callback_data'=>'restart'],['text'=>"اضافه کننده ربات",'callback_data'=>'hardmode']
            ],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'back']
            ],
        	]
    	])
    	]);
}
else{
	bot('answerCallbackQuery',[
    'callback_query_id'=>$membercall,
    'text'=>"شما مدیر ربات نیستید ⚠️",
]);
}
}
elseif($data=="groupe"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$url = file_get_contents("https://api.telegram.org/bot$token/getChatMembersCount?chat_id=$chatid");
$getchat = json_decode($url, true);
$howmember = $getchat["result"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش اطلاعت گروه خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️نام گروه ≫ $gpname
▫️ایدی گروه ≫ $chatid
▫️تعداد پیام ها ≫ $messageid
🎗تعداد کل اعضای گروه ≫ $howmember
⁪",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"⧼ خوش آمدگویی ⧽",'callback_data'=>'welcome']
            ],
            [
                ['text'=>"⧼ لینک گروه ⧽",'callback_data'=>"link"],['text'=>"⧼ قوانین گروه ⧽",'callback_data'=>'rules']
            ],
            [
                ['text'=>"⧼ لیست سکوت ⧽",'callback_data'=>'silentlist'],['text'=>"⧼ لیست فیلتر ⧽",'callback_data'=>'filterword']
            ],
            [
                ['text'=>"⧼ پشتیبانی ⧽",'callback_data'=>'support'],['text'=>"⧼ لیست ادمین ها ⧽",'callback_data'=>'adminlist']
            ],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'back']
            ],
            ]
        ])
        ]);
$settings2["information"]["step"]="none";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
}
else{
	bot('answerCallbackQuery',[
    'callback_query_id'=>$membercall,
    'text'=>"شما مدیر ربات نیستید ⚠️",
]);
}
}
elseif($data=="bans" ){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"⚙️ تنظیمات محدودیتی :
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
لطفا بخش مورد نظر خود را انتخاب کنید🔻🔻",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
            [	
                ['text'=>"⧼ ضد اسپم ⧽",'callback_data'=>'character']
            ],
            [
                ['text'=>"⧼ قفل خودکار ⧽",'callback_data'=>'lockauto']
            ],
            [
                ['text'=>"⧼ تنظیم اخطار ⧽",'callback_data'=>'warn']
            ],
            [
                ['text'=>"💢 جوین کانال",'callback_data'=>'lockchannel'],['text'=>"💢 ادد اجباری",'callback_data'=>'addbzn']
            ],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'back']
            ],
            ]
        ])
        ]);
}
else{
	bot('answerCallbackQuery',[
    'callback_query_id'=>$membercall,
    'text'=>"شما مدیر ربات نیستید ⚠️",
]);
}
}
elseif($data=="exit" ){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
    bot('deletemessage',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
]);
}
else{
	bot('answerCallbackQuery',[
    'callback_query_id'=>$membercall,
    'text'=>"شما مدیر ربات نیستید ⚠️",
]);
}
}
elseif ($data == 'text'){
bot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"امکان تغییر این بخش وجود ندارد ⚠️",
]);
}
?>
