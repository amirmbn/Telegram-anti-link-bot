<?php

//------------------------- Welcome -----------------------------

if($data=="welcome"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$welcome = $settings2["information"]["welcome"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش خوش آمدگویی خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️از دکمه های زیر استفاده کنید🔻🔻
⁪",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$welcome",'callback_data'=>'pwelcome']
			],
			[
                ['text'=>"📄 متن خوش آمدگویی",'callback_data'=>'textwelcome']
			],
			[
			    ['text'=>"برگشت ≫",'callback_data'=>'groupe']
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
elseif($data=="textwelcome"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$textwelcome = $settings2["information"]["textwelcome"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"📄 متن خوش آمدگویی گروه :
$textwelcome",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	        [
                ['text'=>"⚙️ تنظیم متن خوش آمدگویی",'callback_data'=>'setwelcome']
			],
			[
			    ['text'=>"برگشت ≫",'callback_data'=>'welcome']
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
elseif($data=="setwelcome"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$textwelcome = $settings2["information"]["textwelcome"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"📄 متن خوش آمدگویی گروه رو وارد کنید :
         
✨میتوانید در متن خوش آمد و قوانین برای گرفتن مشخصات از پارامتر های زیر استفاده کنید
gpname = دریافت نام گروه
username = دریافت یوزرنیم فرد
time = دریافت ساعت وتاریخ",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
			[
				['text'=>"برگشت ≫",'callback_data'=>'welcome']
			],
            ]
        ])
        ]);
$settings2["information"]["step"]="setwelcome";
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
elseif($data=="pwelcome" && $settings2["information"]["welcome"] =="فعال ✅" ){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش خوش آمدگویی خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️خوش آمدگویی غیرفعال شد.
⁪",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
			[
                ['text'=>"غیرفعال✖️",'callback_data'=>'pwelcome']
			],
            [
                ['text'=>"📄 متن خوش آمدگویی",'callback_data'=>'textwelcome']
			],
			[
			    ['text'=>"برگشت ≫",'callback_data'=>'groupe']
			],
            ]
        ])
        ]);
$settings2["information"]["welcome"]="غیرفعال✖️";
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
elseif($data=="pwelcome" && $settings2["information"]["welcome"] == "غیرفعال✖️"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش خوش آمدگویی خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️خوش آمدگویی فعال شد.
⁪",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
			[
                ['text'=>"فعال ✅",'callback_data'=>'pwelcome']
			],
			[
                ['text'=>"📄 متن خوش آمدگویی",'callback_data'=>'textwelcome']
			],
			[
				['text'=>"برگشت ≫",'callback_data'=>'groupe']
			],
            ]
        ])
        ]);
$settings2["information"]["welcome"]="فعال ✅";
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
elseif ($textmassage == "/welcome enable"  or $textmassage == "welcome enable" or $textmassage == "خوش آمد فعال") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$text = $settings["information"]["textwelcome"];
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✅ خوش آمدگویی فعال شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
متن خوش آمد :
$text",
    'reply_to_message_id'=>$message_id,
]);
$settings["information"]["welcome"]="فعال ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
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
elseif ($textmassage == "/welcome disable"  or $textmassage == "welcome disable" or $textmassage == "خوش آمد غیرفعال") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✅ خوش آمدگویی غیرفعال شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
    'reply_to_message_id'=>$message_id,
]);
$settings["information"]["welcome"]="غیرفعال✖️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
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
elseif (strpos($textmassage , "/setwelcome ") !== false or strpos($textmassage , "تنظیم خوش آمدگویی ") !== false ) {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$we = str_replace(['/setwelcome ','تنظیم خوش آمد '],'',$textmassage);
$plus = mb_strlen("$we");
if($plus < 600) {
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✅ متن خوش آمدگویی با موفقیت تغییر کرد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
📄 متن جدید خوش آمد :
$we",
    'reply_to_message_id'=>$message_id,
]);
$settings["information"]["textwelcome"]="$we";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"#خطا ⚠️ تعداد کلمات وارد شد بیش از حد مجاز است حداکثر میتوانید 600 حرف را وارد کنید.",
    'reply_to_message_id'=>$message_id,
]);
}
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

//------------------------- Rules -----------------------------

elseif($data=="rules"){
$text = $settings2["information"]["rules"];
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"💭قوانین گروه شما :
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
$text",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
		    [
			    ['text'=>"⚙️ تنظیم قوانین",'callback_data'=>'setrules']
			],
			[
			    ['text'=>"برگشت ≫",'callback_data'=>'groupe']
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
elseif($data=="setrules"){
$text = $settings2["information"]["rules"];
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"💭قوانین گروه خود را ارسال کنید",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
			[
				['text'=>"برگشت ≫",'callback_data'=>'groupe']
			],
            ]
        ])
        ]);
$settings2["information"]["step"]="setrules";
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
elseif($textmassage=="/rules" or $textmassage=="rules" or $textmassage=="قوانین"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
if ($tc == 'group' | $tc == 'supergroup'){  
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "غیرفعال✖️") {
$text1 = $settings["information"]["rules"];
$text = str_replace(["gpname","username","time"],["$namegroup","@$username","$date | $date2"],"$text1");
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"💭قوانین گروه شما :
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
$text",
    'reply_to_message_id'=>$message_id,
]);
}
}
}
else{
date_default_timezone_set('Asia/Tehran');
$date = date('Y-m-d');
$date2 = date("H:i");
$text1 = $settings["information"]["rules"];
$text = str_replace(["gpname","username","time"],["$namegroup","@$username","$date | $date2"],"$text1");
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"💭قوانین گروه شما :
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
$text",
    'reply_to_message_id'=>$message_id,
]);
}
}
elseif (strpos($textmassage , '/setrules ') !== false or strpos($textmassage , 'تنظیم قوانین ') !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['/setrules ','تنظیم قوانین '],'',$textmassage);
$plus = mb_strlen("$code");
if($plus < 600) {
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ قوانین جدید گروه با موفقیت ثبت شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
    'reply_to_message_id'=>$message_id,
]);
$settings["information"]["rules"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"#خطا ⚠️ تعداد کلمات وارد شد بیش از حد مجاز است حداکثر میتوانید 600 حرف را وارد کنید.",
    'reply_to_message_id'=>$message_id,
]);
}
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

//------------------------- Link -----------------------------

elseif($data=="link"){
if($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chatid");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"🔗لینک گروه شما :
$getlinkde ",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
			[
				['text'=>"برگشت ≫",'callback_data'=>'groupe']
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
elseif($textmassage=="/link" or $textmassage=="link" or $textmassage=="لینک"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔗لینک گروه شما :
$getlinkde ",
    'reply_to_message_id'=>$message_id,
]);
}
}
}

//------------------------- Filter -----------------------------

elseif($data=="filterword"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$filter = $settings2["filterlist"];
for($z = 0;$z <= count($filter)-1;$z++){
$result = $result.$filter[$z]."\n";
}
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"📄 لیست کلمات فیلتر گروه :
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
$result",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
			[
			    ['text'=>"🗑 پاک کردن لیست فیلتر",'callback_data'=>'cleanfilterlist']
			],
			[
			    ['text'=>"برگشت ≫",'callback_data'=>'groupe']
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
elseif($data=="cleanfilterlist"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✅ لیست کلمات فیلتر گروه با موفقیت پاکسازی شد.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
			[
			    ['text'=>"برگشت ≫",'callback_data'=>'groupe']
			],
            ]
        ])
        ]);
unset($settings2["filterlist"]);
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
elseif(strpos($textmassage , "/filter ") !== false or strpos($textmassage , "فیلترکردن ") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$text = str_replace(['/filter ','فیلترکردن '],'',$textmassage);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ کلمه $text فیلتر شد.\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️از این پس این کلمه پاک میشود",
    'reply_to_message_id'=>$message_id,
]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$settings["filterlist"][]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
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
elseif(strpos($textmassage , "/unfilter " ) !== false or strpos($textmassage , "حذف فیلتر ") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$text = str_replace(['/unfilter ','حذف فیلتر '],'',$textmassage);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ کلمه $text حذف فیلتر شد.\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️از این پس این کلمه پاک نمیشود",
    'reply_to_message_id'=>$message_id,
]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$key = array_search($text,$settings["filterlist"]);
unset($settings["filterlist"][$key]);
$settings["filterlist"] = array_values($settings["filterlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif($textmassage=="/filterlist" or $textmassage=="filterlist" or $textmassage=="لیست فیلتر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$filter = $settings["filterlist"];
for($z = 0;$z <= count($filter)-1;$z++){
$result = $result.$filter[$z]."\n";
}
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"📄لیست کلمات فیلتر گروه :
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
$result",
    'reply_to_message_id'=>$message_id,
]);
}
}
elseif($textmassage=="/clean filterlist" or $textmassage=="clean filterlist" or $textmassage=="پاکسازی لیست فیلتر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ لیست کلمات فیلتر گروه پاک شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🎗توسط : [ @$username ]
",
    'reply_to_message_id'=>$message_id,
]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
unset($settings["filterlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
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

//------------------------- Silent -----------------------------

elseif($data=="silentlist" ){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$silent = $settings2["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"📄 لیست افراد ساکت گروه :
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
$result ",
    'parse_mode'=>"MarkDown",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
		    [
			    ['text'=>"🗑 پاک کردن لیست سکوت",'callback_data'=>'cleansilentlist']
			],
			[
			    ['text'=>"برگشت ≫",'callback_data'=>'groupe']
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
elseif($data=="cleansilentlist"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$silent = $settings2["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
    bot('restrictChatMember',[
    'user_id'=>$silent[$z],   
    'chat_id'=>$chatid,
    'can_post_messages'=>true,
    'can_add_web_page_previews'=>false,
    'can_send_other_messages'=>true,
    'can_send_media_messages'=>true,
]);
}
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✅ لیست افراد سکوت گروه با موفقیت پاکسازی شد.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
			[
				['text'=>"برگشت ≫",'callback_data'=>'groupe']
			],
            ]
        ])
        ]);
unset($settings2["silentlist"]);
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
elseif($textmassage == "/silent"&& $rt or $textmassage == "silent" && $rt or $textmassage == "سکوت" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true){
	bot('restrictChatMember',[
	'user_id'=>$re_id,   
	'chat_id'=>$chat_id,
	'can_post_messages'=>false,
]);
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"💥کاربر ⧼ $re_name ⧽
به دلیل رعایت نکردن قوانین #سایلنت شد‼️
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
	'reply_to_message_id'=>$re_msgid,
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else{
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"#خطا ⚠️ ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید. 

💢 با دستور ⧼ نصب رایگان ⧽ میتوانید ربات را 7 روز رایگان فعال کنید",
    'reply_to_message_id'=>$message_id,
]);
}
}
else{
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 من نمیتوانم ادمین ها , صاحبان و مدیران گروه و خود را سکوت کنم",
    'reply_to_message_id'=>$message_id,
]);
}
}
}
elseif($textmassage == "/unsilent" && $rt or $textmassage == "unsilent" && $rt or $textmassage == "حذف سکوت" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
    bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
]);
    bot('sendMessage',[
    'chat_id'=>$chat_id,
'text'=>"💥کاربر ⧼ $re_name ⧽ از #سایلنت خارج شد‼️
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
    'reply_to_message_id'=>$re_msgid,
]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"#خطا ⚠️ ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید. 

💢 با دستور ⧼ نصب رایگان ⧽ میتوانید ربات را 7 روز رایگان فعال کنید",
	'reply_to_message_id'=>$message_id,
]);
}
}
}
elseif($textmassage == "/list silent"  or $textmassage == "list silent" or $textmassage == "لیست سکوت") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"📄 لیست کابران سکوت گروه :
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
$result",
	'parse_mode'=>"MarkDown",
	'reply_to_message_id'=>$message_id,
]);
}
}
elseif($textmassage == "/clean silentlist"  or $textmassage == "clean silentlist" or $textmassage == "پاکسازی لیست سکوت") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
	bot('restrictChatMember',[
	'user_id'=>$silent[$z],   
	'chat_id'=>$chat_id,
	'can_post_messages'=>true,
	'can_add_web_page_previews'=>false,
	'can_send_other_messages'=>true,
	'can_send_media_messages'=>true,
]);
}
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖 لیست کابران ساکت گروه با موفقیت پاکسازی شد",
	'reply_to_message_id'=>$message_id,
]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"#خطا ⚠️ ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید. 

💢 با دستور ⧼ نصب رایگان ⧽ میتوانید ربات را 7 روز رایگان فعال کنید",
	'reply_to_message_id'=>$message_id,
]);
}
}
}

//------------------------- Admin -----------------------------

elseif($data=="adminlist"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chatid),true);
$result = $up['result'];
$msg = "";
foreach($result as $key=>$value){
$found = $result[$key]['status'];
if($found == "creator"){
$owner = $result[$key]['user']['id'];
$owner2 = $result[$key]['user']['username'];
}
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg."\n"."🎗"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
}
}
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"💢 سازنده گروه : @$owner2
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
📄 لیست ادمین های گروه :
$msg",
    'parse_mode'=>"MarkDown",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
			[
				['text'=>"برگشت ≫",'callback_data'=>'groupe']
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
elseif($textmassage=="/promote" or $textmassage=="promote" or $textmassage=="ادمین"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"💥کاربر ⧼ $re_name ⧽ به مدیریت گروه #ارتقا مقام یافت‼️
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
    'reply_to_message_id'=>$message_id,
]);
    bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id,
    'can_change_info'=>True,
    'can_delete_messages'=>True,
    'can_invite_users'=>True,
    'can_restrict_members'=>True,
    'can_pin_messages'=>True,
    'can_promote_members'=>false
]);
}
}
elseif($textmassage=="/demote" or $textmassage=="demote" or $textmassage=="حذف ادمین"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"💥کاربر ⧼ $re_name ⧽ از مدیریت گروه #برکنار شد‼️
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
    'reply_to_message_id'=>$message_id,
]);
    bot('restrictChatMember',[
    'user_id'=>$re_id,   
    'chat_id'=>$chat_id,
    'can_post_messages'=>true,
    'can_add_web_page_previews'=>false,
    'can_send_other_messages'=>true,
    'can_send_media_messages'=>true,
]);
}
}
elseif($textmassage=="/admin list" or $textmassage=="admin list" or $textmassage=="لیست مدیران"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
$result = $up['result'];
foreach($result as $key=>$value){
$found = $result[$key]['status'];
if($found == "creator"){
$owner = $result[$key]['user']['id'];
$owner2 = $result[$key]['user']['username'];
}
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg."\n"."🎗"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
}
}
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💢 سازنده گروه : @$owner2
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
📄 لیست ادمین های گروه :
$msg",
	'reply_to_message_id'=>$message_id,
	'parse_mode'=>"MarkDown",
]);
}
}

//------------------------- Support -----------------------------

elseif($data=="support"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"💢 قبل از ارسال درخواست ورود پشتیبانی به گروه به نکات زیر توجه داشته باشید
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
1️⃣ قبل از ارسال درخواست حتما ربات را ادمین گروه کنید سپس به ارسال درخواست بپردازید

2️⃣ از ارسال درخواست بی مورد خودداری کنید و اول راهنمای ربات را به صورت کامل مطالعه کنید

3️⃣ پس از ارسال درخواست پشتیبانی از ارسال دوباره درخواست خودداری کنید و منتظر باشید تا پشتیبانی وارد گروه شما شود و به درخواست شما رسیدگی کند
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️برای ورود پشتیبان به گروه در صورت وجود مشکل در ربات یا ایراد برای گروه شما، درخواست پشتیبانی را لمس کنید🔻🔻",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
			[
                ['text'=>"↗️ درخواست پشتیبانی",'callback_data'=>'yessup']
		    ],
			[
			    ['text'=>"برگشت ≫",'callback_data'=>'groupe']
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
elseif($data=="yessup"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chatid");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
    bot('sendmessage', [
    'chat_id' =>$Dev[0],
    'text' => "💢 گروه با نام : [$gpname]
درخواست پشتیبانی کرده است.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💥مشخصات فرد ارسال کننده :

▪️ایدی : [ $fromid ]
▫️نام : [ $firstname ]
▫️یوزرنیم : [ @$usernames ]
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💥مشخصات گروه :

▪️ایدی گروه : [ $chatid ]
▫️لینک گروه : [ $getlinkde  ]
⁪",
]);
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✅ درخواست شما برای پشتیبانی ارسال شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🎗لطفا منتظر بمانید تا پشتیبان وارد گروه شود.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
			[
				['text'=>"برگشت ≫",'callback_data'=>'groupe']
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
elseif ($textmassage=="/support" or $textmassage=="support" or $textmassage=="درخواست پشتیبانی" ) {
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "غیرفعال✖️") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
    bot('sendmessage', [
    'chat_id' =>$Dev[0],
    'text' => "💢 گروه با نام : $namegroup
درخواست پشتیبانی کرده است.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
📄 مشخصات فرد ارسال کننده :

▪️نام : $first_name
▫️ایدی : $from_id
▫️یوزرنیم :@$username
━┅┄┄┄┄┄┄┄┄┄
💢 مشخصات گروه :

▪️ایدی گروه : $chat_id
▫️لینک گروه : $getlinkde
⁪",
]);
    bot('sendmessage', [
    'chat_id'=>$chat_id,
    'text'=>"✅ درخواست شما به پشتیبانی ارسال شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️به زودی پشتیبانی وارد گروه میشود",
    'reply_to_message_id'=>$message_id,
]);
}
}

?>