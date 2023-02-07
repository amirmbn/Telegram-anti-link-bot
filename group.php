<?php

//------------------------- Lock Main -----------------------------

if($data=="other" ){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$locklink = $settings2["lock"]["link"];
$lockusername = $settings2["lock"]["username"];
$locktag = $settings2["lock"]["tag"];
$lockedit = $settings2["lock"]["edit"];
$lockfosh = $settings2["lock"]["fosh"];
$lockbots = $settings2["lock"]["bot"];
$lockforward = $settings2["lock"]["forward"];
$locktg = $settings2["lock"]["tgservic"];
$lockreply = $settings2["lock"]["reply"];
$lockcmd = $settings2["lock"]["cmd"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"⚙️ تنظیمات قفل اصلی
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
فعال ✅ = حذف پیام
غیرفعال✖️ = حذف نشدن پیام
⁪⁪",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
            [
                ['text'=>"$locklink    : لينک",'callback_data'=>'locklink']
            ],
            [
                ['text'=>"$lockfosh    : فحش",'callback_data'=>'lockfosh']
            ],
            [
                ['text'=>"$lockreply    : ریپلای️",'callback_data'=>'lockreply']
            ],
            [
                ['text'=>"$lockforward    : فوروارد",'callback_data'=>'lockforward']
            ],
            [
                ['text'=>"$locktag    : هشتگ #",'callback_data'=>'locktag']
            ],
            [
                ['text'=>"$lockusername    : یوزرنیم @",'callback_data'=>'lockusername']
            ],
            [
                ['text'=>"$lockedit    : ویرایش پیام",'callback_data'=>'lockedit']
            ],
            [
                ['text'=>"$lockbots    : ورود ربات ها",'callback_data'=>'lockbot']
            ],
            [
                ['text'=>"$locktg    : خدمات تلگرام",'callback_data'=>'locktgservic']
            ],
            [
                ['text'=>"$lockcmd    : دستورات عمومی",'callback_data'=>'lockcmd']
            ],
            [
                ['text'=>"🔁 رفتن به قفل رسانه",'callback_data'=>'media']
            ],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'settings']
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
elseif($textmassage=="/lock link" or $textmassage=="قفل لینک"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #لینک در گروه ممنوع شد🔒\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️قفل لینک فعال شد از این پس تمام پیام های حاوی لینک پاک خواهند شد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["link"]="فعال ✅";
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
elseif($textmassage=="/unlock link" or $textmassage=="بازکردن لینک"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #لینک در گروه  ازاد شد🔓\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️ارسال لینک در گروه ازاد شد و پیام های حاوی لینک پاک نخواهند شد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["link"]="غیرفعال✖️️";
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
elseif($textmassage=="/lock fosh" or $textmassage=="قفل فحش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #کلمات رکیک در گروه ممنوع شد🔒\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️قفل کلمات رکیک (فحش) فعال شد از این پس تمامی پیام های حاوی کلمات رکیک (فحش) پاک خواهند شد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["fosh"]="فعال ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"#خطا ⚠️ ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید. 

💢 با دستور ⧼ نصب رایگان ⧽ میتوانید ربات را 7 روز رایگان فعال کنید ",
	'reply_to_message_id'=>$message_id,
]);
}
}
}
elseif($textmassage=="/unlock fosh" or $textmassage=="بازکردن فحش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #کلمات رکیک در گروه آزاد شد🔓\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️ارسال کلمات رکیک (فحش) در گروه ازاد شد و پیام های حاوی کلمات رکیک (فحش) پاک نخواهند شد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["fosh"]="غیرفعال✖️";
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
elseif($textmassage=="/lock reply" or $textmassage=="قفل ریپلای"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》#ریپلای کردن بر روی پیام [ارسال پاسخ] در گروه ممنوع شد🔒\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️قفل ریپلای کردن بر روی پیام [ارسال پاسخ]  فعال شد از این پس  ریپلای کردن بر روی پیام [ارسال پاسخ]  پاک خواهند شد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["reply"]="فعال ✅";
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
elseif($textmassage=="/unlock reply" or $textmassage=="بازکردن ریپلای"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》#ریپلای کردن بر روی پیام [ارسال پاسخ] در گروه  ازاد شد🔓\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️ریپلای کردن بر روی پیام [ارسال پاسخ] در گروه ازاد شد و ریپلای کردن بر روی پیام [ارسال پاسخ] پاک نخواهند شد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["reply"]="غیرفعال✖️";
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
elseif($textmassage=="/lock forward" or $textmassage=="قفل فوروارد"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #فوروارد فعال شد🔇\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن پیام فوروارد شده فعال شد و از این پس  ممنوع میباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["forward"]="فعال ✅";
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
elseif($textmassage=="/unlock forward" or $textmassage=="بازکردن فوروارد"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #فوروارد غیر فعال شد🔊\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن فوروارد غیر فعال شد و ارسال پیام فوروارد شده ممنوع نمیباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["forward"]="غیرفعال✖️";
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
elseif($textmassage=="/lock tag" or $textmassage=="قفل تگ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #تگ  در گروه ممنوع شد🔒\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️قفل تگ [#] فعال شد از این پس تمام پیام های حاوی ان پاک خواهند شد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["tag"]="فعال ✅";
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
elseif($textmassage=="/unlock tag" or $textmassage=="بازکردن تگ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #تگ در گروه  ازاد شد🔓\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️ارسال تگ [#] در گروه ازاد شد و پیام های حاوی ان پاک نخواهند شد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["tag"]="غیرفعال✖️️";
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
elseif($textmassage=="/lock username" or $textmassage=="قفل یوزرنیم"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #یوزرنیم  در گروه ممنوع شد🔒\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️قفل تگ [@] فعال شد از این پس تمام پیام های حاوی ان پاک خواهند شد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["username"]="فعال ✅";
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
elseif($textmassage=="/unlock username" or $textmassage=="بازکردن یوزرنیم"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #یوزرنیم در گروه  ازاد شد🔓\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️ارسال تگ [@] در گروه ازاد شد و پیام های حاوی ان پاک نخواهند شد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["username"]="غیرفعال✖️️";
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
elseif($textmassage=="/lock edit" or $textmassage=="قفل ویرایش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》#ویرایش پیام در گروه ممنوع شد🔒\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️قفل ویرایش فعال شد از این پس تمام پیام های ویرایش شده پاک خواهند شد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["edit"]="فعال ✅";
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
elseif($textmassage=="/unlock edit" or $textmassage=="بازکردن ویرایش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》#ویرایش پیام در گروه ازاد است🔓\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️ویرایش پیام در گروه ازاد شد و پیام های ویرایش شده پاک نخواهند شد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["edit"]="غیرفعال✖️️";
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
elseif($textmassage == "/lock bots" or $textmassage == "lock bots" or $textmassage == "قفل ربات") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》#محافظت از گروه در برابر ربات ها  فعال شد🔒\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️قفل ربات های مخرب فعال شد از این پس تمامی ربات های مخرب پاک خواهند شد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["bot"]="فعال ✅";
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
elseif($textmassage == "/unlock bots" or $textmassage == "unlock bots"  or $textmassage == "بازکردن ربات") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》#محافظت از گروه در برابر ربات ها  ازاد است🔒\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️تحریم ربات های مخرب در گروه ازاد شد و ربات های مخرب پاک نخواهند شد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["bot"]="غیرفعال✖️";
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
elseif($textmassage=="/lock tgservic" or $textmassage=="قفل خدمات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #خدمات تلگرام  فعال شد🔇\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن خدمات تلگرام فعال شد و از این پس  ممنوع میباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["tgservic"]="فعال ✅";
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
elseif($textmassage=="/unlock tgservic" or $textmassage=="بازکردن خدمات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #خدمات تلگرام  غیرفعال شد🔊\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن خدمات تلگرام غیر فعال شد و خدمات تلگرام ممنوع نمیباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["tgservic"]="غیرفعال✖️";
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
elseif($textmassage=="/lock cmd" or $textmassage=="قفل دستورات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》قفل #دستورات عمومی در گروه ممنوع شد🔒\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️قفل دستورات عمومی فعال شد از این پس  دستورات عمومی در گروه کار نخواهند کرد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["cmd"]="فعال ✅";
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
elseif($textmassage=="/unlock cmd" or $textmassage=="بازکردن دستورات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》قفل دستورات عمومی در گروه  ازاد شد🔓\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️ و دستورات عمومی در گروه کار خواهند کرد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["cmd"]="غیرفعال✖️";
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

//------------------------- Lock Media -----------------------------

if($data=="media"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockdocument = $settings2["lock"]["document"];
$lockgif = $settings2["lock"]["gif"];
$lockvideo_note = $settings2["lock"]["video_msg"];
$locklocation = $settings2["lock"]["location"];
$lockphoto = $settings2["lock"]["photo"];
$lockcontact = $settings2["lock"]["contact"];
$lockaudio = $settings2["lock"]["audio"];
$lockvoice = $settings2["lock"]["voice"];
$locksticker = $settings2["lock"]["sticker"];
$lockgame = $settings2["lock"]["game"];
$lockvideo = $settings2["lock"]["video"];
$locktext = $settings2["lock"]["text"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"📂 تنظیمات قفل رسانه
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
فعال ✅ = حذف پیام
غیرفعال✖️ = حذف نشدن پیام
⁪⁪",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
            [
                ['text'=>"$locktext    : متن",'callback_data'=>'locktext']
            ],
            [
                ['text'=>"$lockdocument    : فایل",'callback_data'=>'lockdocument']
            ],
            [
                ['text'=>"$lockgif    : گیف",'callback_data'=>'lockgif']
            ],
            [
                ['text'=>"$lockvoice    : صدا",'callback_data'=>'lockvoice']
            ],
            [
                ['text'=>"$lockvideo    : فیلم",'callback_data'=>'lockvideo']
            ],
            [
                ['text'=>"$lockgame    : بازی",'callback_data'=>'lockgame']
            ],
            [
                ['text'=>"$lockphoto    : تصویر",'callback_data'=>'lockphoto']
            ],
            [
                ['text'=>"$locksticker    : استیکر",'callback_data'=>'locksticker']
            ],
            [
                ['text'=>"$lockaudio    : موسیقی",'callback_data'=>'lockaudio']
            ],
            [
                ['text'=>"$locklocation    : ارسال مکان",'callback_data'=>'locklocation']
            ],
            [
                ['text'=>"$lockcontact    : ارسال شماره",'callback_data'=>'lockcontact']
            ],
            [
                ['text'=>"$lockvideo_note    : پیام ویدیویی",'callback_data'=>'lockself']
            ],
            [
                ['text'=>"🔁 رفتن به قفل اصلی",'callback_data'=>'other']
            ],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'settings']
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
elseif($textmassage=="/lock text" or $textmassage=="قفل متن"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #متن در گروه ممنوع شد🔒\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️قفل متن فعال شد از این پس تمام پیام های حاوی متن پاک خواهند شد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["text"]="فعال ✅";
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
elseif($textmassage=="/unlock text" or $textmassage=="بازکردن متن"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #متن در گروه  ازاد شد🔓\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️ارسال متن در گروه ازاد شد و پیام های حاوی ان پاک نخواهند شد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["text"]="غیرفعال✖️";
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
elseif($textmassage=="/lock document" or $textmassage=="قفل فایل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #فایل  فعال شد🔇\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\nپاک کردن ارسال فایل فعال شد و از این پس  ممنوع میباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["document"]="فعال ✅";
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
elseif($textmassage=="/unlock document" or $textmassage=="بازکردن فایل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #فایل غیر فعال شد🔊\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن ارسال فایل غیر فعال شد و ارسال فایل ممنوع نمیباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["document"]="غیرفعال✖️️";
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
elseif($textmassage=="/lock gif" or $textmassage=="قفل گیف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #تصاویر متحرک فعال شد🔇\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن تصاویر متحرک [گیف] فعال شد از این پس ارسال تصاویر متحرک [گیف] ممنوع میباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["gif"]="فعال ✅";
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
elseif($textmassage=="/unlock gif" or $textmassage=="بازکردن گیف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن # تصاویر متحرک غیر فعال شد🔊\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن تصاویر متحرک [گیف] غیر فعال شد و  ارسال صاویر متحرک [گیف] ممنوع نمیباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["gif"]="غیرفعال✖️️️";
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
elseif($textmassage=="/lock voice" or $textmassage=="قفل ویس"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #صدا (وویس)  فعال شد🔇\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️ارسال ویس [صدا] فعال شد از این پس ارسال ویس [صدا] ممنوع میباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["voice"]="فعال ✅";
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
elseif($textmassage=="/unlock voice" or $textmassage=="بازکردن ویس"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #صدا (وویس) غیر فعال شد🔊\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️ارسال ویس [صدا] غیر فعال شد و  ممنوع نمیباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["voice"]="غیرفعال✖️";
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
elseif($textmassage=="/lock video" or $textmassage=="قفل ویدیو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #ویدیو فعال شد🔇\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن فیلم فعال شد از این پس ارسال فیلم ممنوع میباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["video"]="فعال ✅";
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
elseif($textmassage=="/unlock video" or $textmassage=="بازکردن ویدیو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #ویدیو غیر فعال شد🔊\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن فیلم غیر فعال شد و  ارسال فیلم ممنوع نمیباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["video"]="غیرفعال✖️️";
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
elseif($textmassage=="/lock game" or $textmassage=="قفل بازی"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #بازی های تحت وب   فعال شد🔇\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن بازی های تحت وب فعال شد از این پس ارسال بازی تحت وب ممنوع میباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["game"]="فعال ✅";
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
elseif($textmassage=="/unlock game" or $textmassage=="بازکردن بازی"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #بازی های تحت وب  غیر فعال شد🔊\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن بازی های تحت وب غیر فعال شد و  ارسال بازی تحت وب ممنوع نمیباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["game"]="غیرفعال✖️️";
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
elseif($textmassage=="/lock photo" or $textmassage=="قفل عکس"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #عکس فعال شد🔇\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن عکس فعال شد از این پس ارسال عکس ممنوع میباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["photo"]="فعال ✅";
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
elseif($textmassage=="/unlock photo" or $textmassage=="بازکردن عکس"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #عکس غیر فعال شد🔊\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن عکس غیر فعال شد و  ارسال عکس ممنوع نمیباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["photo"]="غیرفعال✖️️";
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
elseif($textmassage=="/lock sticker" or $textmassage=="قفل استیکر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #استیکر فعال شد🔇\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️ارسال استیکر فعال شد از این پس ارسال استیکر ممنوع میباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["sticker"]="فعال ✅";
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
elseif($textmassage=="/unlock sticker" or $textmassage=="بازکردن استیکر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #استیکر غیر فعال شد🔊\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن استیکر غیر فعال شد و ارسال استیکر ممنوع نمیباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["sticker"]="غیرفعال✖️";
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
elseif($textmassage=="/lock audio" or $textmassage=="قفل اهنگ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #اهنگ فعال شد🔇\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن آهنگ فعال شد از این پس ارسال آهنگ ممنوع میباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["audio"]="فعال ✅";
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
elseif($textmassage=="/unlock audio" or $textmassage=="بازکردن اهنگ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #اهنگ غیر فعال شد🔊\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن آهنگ غیر فعال شد و  ارسال آهنگ ممنوع نمیباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["audio"]="غیرفعال✖️️";
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
elseif($textmassage=="/lock location" or $textmassage=="قفل مکان"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #موقعیت فعال شد🔇\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن ارسال مکان فعال شد و از این پس  ممنوع میباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["location"]="فعال ✅";
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
elseif($textmassage=="/unlock location" or $textmassage=="بازکردن مکان"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #موقعیت غیر فعال شد🔊\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن ارسال مکان غیر فعال شد و ارسال مکان ممنوع نمیباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["location"]="غیرفعال✖️️";
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
elseif($textmassage=="/lock contact" or $textmassage=="قفل مخاطب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #ارسال مخاطب فعال شد🔇\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️ارسال مخاطب [شماره] فعال شد از این پس  ممنوع میباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["contact"]="فعال ✅";
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
elseif($textmassage=="/unlock contact" or $textmassage=="بازکردن مخاطب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #ارسال مخاطب غیر فعال شد🔊\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن مخاطب [شماره] غیر فعال شد و ارسال مخاطب [شماره] ممنوع نمیباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["contact"]="غیرفعال✖️️";
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
elseif($textmassage=="/lock videonote" or $textmassage=="قفل پیام ویدیویی"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #پیام ویدیویی فعال شد🔇\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن پیام ویدیویی شد و از این پس  ممنوع میباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["video_msg"]="فعال ✅";
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
elseif($textmassage=="/unlock videonote" or $textmassage=="بازکردن پیام ویدیویی"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #پیام ویدیویی  غیرفعال شد🔊\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن پیام ویدیویی غیر فعال شد و خدمات تلگرام ممنوع نمیباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["video_msg"]="غیرفعال✖️";
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
elseif($textmassage=="/lock stickeranimated" or $textmassage=="قفل استیکرمتحرک"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #تصاویر متحرک فعال شد🔇\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن تصاویر متحرک [استیکرمتحرک] فعال شد از این پس ارسال تصاویر متحرک [استیکرمتحرک] ممنوع میباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["stickeranimated"]="| فعال | ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📣 برای استفاده از امکانات رایگان ربات شما باید ابتدا عضو کانال اطلاع رسانی ربات شوید
	
📍 سپس به  برگشته و مجدد امتحان کنید تا از امکانات فوق العاده ربات بهر مند شوید

📌 ادرس کانال : @$channel",
	'reply_markup'=>json_encode([
    'inline_keyboard'=>[
			[
				['text'=>"📢 عضویت در کانال",'url'=>"https://telegram.me/$channel"]
			],
			]
		])
		]);
}
}
else{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"#خطا ⚠️ ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید. 

▫️ با دستور  `نصب ` یا  `/add ` میتوانید ربات را  رایگان فعال کنید ",
	'reply_to_message_id'=>$message_id,
]);
}
}
}
elseif($textmassage=="/unlock stickeranimated" or $textmassage=="بازکردن استیکرمتحرک"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن # تصاویر متحرک غیر فعال شد🔊\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄\n▫️پاک کردن تصاویر متحرک [استیکرمتحرک] غیر فعال شد و  ارسال صاویر متحرک [استیکرمتحرک] ممنوع نمیباشد\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["stickeranimated"]="| غیر فعال | ❌";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📣 برای استفاده از امکانات رایگان ربات شما باید ابتدا عضو کانال اطلاع رسانی ربات شوید
	
📍 سپس به  برگشته و مجدد امتحان کنید تا از امکانات فوق العاده ربات بهر مند شوید

📌 ادرس کانال : @$channel",
	'reply_markup'=>json_encode([
    'inline_keyboard'=>[
			[
				['text'=>"📢 عضویت در کانال",'url'=>"https://telegram.me/$channel"]
			],
			]
		])
        ]);
}
}
else{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"#خطا ⚠️ ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید. 

▫️ با دستور  `نصب ` یا  `/add ` میتوانید ربات را  رایگان فعال کنید ",
	'reply_to_message_id'=>$message_id,
]);
}
}
}

//------------------------- Lock Group -----------------------------

elseif($data=="lockall" && $settings2["lock"]["mute_all"] =="فعال ✅"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"⚙️ تنظیمات گروه :
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️قفل گروه غیرفعال شد.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"⧼ قفل رسانه ⧽",'callback_data'=>'media'],['text'=>"⧼ قفل اصلی ⧽",'callback_data'=>'other']
            ],
            [
                ['text'=>"قفل گروه : غیرفعال✖",'callback_data'=>'lockall']
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
$settings2["lock"]["mute_all"]="غیرفعال✖️";
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
elseif($data=="lockall" && $settings2["lock"]["mute_all"] =="غیرفعال✖️"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"⚙️ تنظیمات گروه :
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️قفل گروه فعال شد.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"⧼ قفل رسانه ⧽",'callback_data'=>'media'],['text'=>"⧼ قفل اصلی ⧽",'callback_data'=>'other']
            ],
            [
                ['text'=>"قفل گروه : فعال ✅",'callback_data'=>'lockall']
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
$settings2["lock"]["mute_all"]="فعال ✅";
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
elseif($textmassage=="/mute all"  or $textmassage=="mute all" or $textmassage=="قفل گروه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💥قفل گروه #فعال شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
از این لحظه به بعد تمام پیام های گروه توسط ربات هوشمند پاک میشود‼️
⚠️لطفاً از ارسال پیام خودداری کنید.",
    'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["mute_all"]="فعال ✅";
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
elseif($textmassage=="/unmute all"  or $textmassage=="unmute all" or $textmassage=="بازکردن گروه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💥قفل گروه #غیرفعال شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💢از این لحظه به بعد کاربران قادر به ارسال پیام در گروه هستند.",
	'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["mute_all"]="غیرفعال✖️";
$settings["lock"]["mute_all_time"]="غیرفعال✖️";
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
elseif(strpos($textmassage , "/muteall ") !== false or strpos($textmassage , "قفل گروه") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$num = str_replace(['/muteall ','بیصدا همه '],'',$textmassage);
$add = $settings["information"]["added"];
if ($add == true) {
if ($num <= 100000 && $num >= 1){
date_default_timezone_set('Asia/Tehran');
$date1 = date("h:i:s");
$date2 = isset($_GET['date']) ? $_GET['date'] : date("h:i:s");
$next_date = date('h:i:s', strtotime($date2 ."+$num Minutes"));
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #همه فعال شد🔇\n━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️گروه به مدت $num دقیقه بیصدا شد

⏲زمان الان : $date1
⏰زمان پایان سکوت گروه : $next_date\n➖➖➖➖\n🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
$settings["information"]["mute_all_time"]="$next_date";
$settings["lock"]["mute_all_time"]="فعال ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings); 
}
else{
	bot('sendmessage',[
	'chat_id' => $chat_id,
	'text'=>"خطا ⚠️
➖➖➖➖➖➖
💭عدد وارد شده باید بین 1 تا 1000 باشد
$date1
$nextdata",
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

//------------------------- Lock BOT -----------------------------

if($data=="hardmode"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$hardmodebot = $settings2["information"]["hardmodebot"];
$hardmodewarn = $settings2["information"]["hardmodewarn"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش مدیریت اضافه کننده ربات خوش آمدید.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$hardmodebot",'callback_data'=>'hardmodebot']
			],
			[
                ['text'=>"برگشت ≫",'callback_data'=>'settings']
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
elseif($data=="hardmodebot" && $settings2["information"]["hardmodebot"] == "اخراج کاربر 🚫"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$hardmodewarn = $settings2["information"]["hardmodewarn"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش مدیریت اضافه کننده ربات خوش آمدید.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"غیرفعال✖",'callback_data'=>'hardmodebot']
			],
			[
			    ['text'=>"برگشت ≫",'callback_data'=>'settings']
			],
            ]
        ])
        ]);
$settings2["information"]["hardmodebot"]="غیرفعال✖️";
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
elseif($data=="hardmodebot" && $settings2["information"]["hardmodebot"] == "غیرفعال✖️"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$hardmodewarn = $settings2["information"]["hardmodewarn"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش مدیریت اضافه کننده ربات خوش آمدید.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"اخراج کاربر 🚫",'callback_data'=>'hardmodebot']
			],
			[
			    ['text'=>"برگشت ≫",'callback_data'=>'settings']
			],
            ]
        ])
        ]);
$settings2["information"]["hardmodebot"]="اخراج کاربر 🚫";
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
elseif($textmassage=="/modebot on" or $textmassage=="سختگیرانه ربات فعال"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✅ حالت سخت گیرانه اضافه کننده #ربات در گروه فعال شد.
💥از این پس کاربر اضافه کننده ربات حذف #خواهد شد
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
    'reply_to_message_id'=>$message_id,
]);
$settings["information"]["hardmodebot"]="اخراج کاربر 🚫";
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
elseif($textmassage=="/modebot off" or $textmassage=="سختگیرانه ربات غیرفعال"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✅ حالت سخت گیرانه اضافه کننده #ربات در گروه غیرفعال شد.
💥از این پس کاربر اضافه کننده ربات حذف #نخواهد شد
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
    'reply_to_message_id'=>$message_id,
]);
$settings["information"]["hardmodebot"]="غیرفعال✖️";
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

//------------------------- Reset Factory -----------------------------

elseif($data=="restart"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨درصورتی که میخواهید تنظیمات گروه به حالت اولیه بازگردد.
▫️تایید را انتخاب کنید.️",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
			[
				['text'=>"تایید ✅",'callback_data'=>'yes']
			],
			[
				['text'=>"برگشت ≫",'callback_data'=>'settings']
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
elseif($data=="yes"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✅ تنظیمات گروه با موفقیت ریستارت شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🏷اطلاعات فرد :

▪️نام شما : [$firstname]
▫️ایدی شما : [$fromid]
▫️یوزرنیم  شما : [@$usernames]
⁪",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
			[
			    ['text'=>"برگشت ≫",'callback_data'=>'back']
			],
            ]
        ])
        ]);
$ndate = $settings2["information"]["expire"];
$dateadd = $settings2["information"]["dataadded"];
$settings2 = '{"lock": {
                "text": "غیرفعال✖️",
                "photo": "غیرفعال✖️",
                "link": "غیرفعال✖️",
                "tag": "غیرفعال✖️",
				"username": "غیرفعال✖️",
                "sticker": "غیرفعال✖️",
                "video": "غیرفعال✖️",
                "voice": "غیرفعال✖️",
                "audio": "غیرفعال✖️",
                "gif": "غیرفعال✖️",
                "bot": "غیرفعال✖️",
                "forward": "غیرفعال✖️",
                "document": "غیرفعال✖️",
                "tgservic": "غیرفعال✖️",
				"edit": "غیرفعال✖️",
				"reply": "غیرفعال✖️",
				"contact": "غیرفعال✖️",
				"location": "غیرفعال✖️",
				"game": "غیرفعال✖️",
				"cmd": "غیرفعال✖️",
				"mute_all": "غیرفعال✖️",
				"mute_all_time": "غیرفعال✖️",
				"fosh": "غیرفعال✖️",
				"lockauto": "غیرفعال✖️",
				"lockcharacter": "غیرفعال✖️",
				"video_msg": "غیرفعال✖️"
			},
			"information": {
            "added": "true",
			"welcome": "غیرفعال✖️",
			"add": "غیرفعال✖️",
			"lockchannel": "غیرفعال✖️",
			"hardmodebot": "غیرفعال✖️",
			"hardmodewarn": "سکوت کاربر 📵",
			"charge": "7 روز",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"textwelcome": "خوش آمدید",
			"rules": "ثبت نشده",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"setwarn": "3"
			}
}';
$settings2 = json_decode($settings2,true);
$settings2["information"]["expire"]="$ndate";
$settings2["information"]["dataadded"]="$dateadd";
$settings2["information"]["msg_id"]="$messageid";
$settings2 = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings2);
}
else{
	bot('answerCallbackQuery',[
    'callback_query_id'=>$membercall,
    'text'=>"شما مدیر ربات نیستید ⚠️",
]);
}
}
elseif($textmassage=="/restart settings" or $textmassage=="restart settings" or $textmassage=="ریستارت تنظیمات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
    bot('sendmessage',[
    'reply_to_message_id'=>$message_id,
    'chat_id'=>$chat_id,
    'text'=>"📍 مدیر عزیز در صورت رضایت شما برای ریستارت تنظیمات بله را ارسال کنید
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
در غیر این صورت میتوانید با ارسال خیر از درخواست خود صرف نظر کنید ✅",
]);
$settings["information"]["step"]="reset";
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

?>