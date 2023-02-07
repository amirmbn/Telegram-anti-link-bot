<?php

//------------------------- Anti Spam -----------------------------

if($data=="character"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$downcharacter = $settings2["information"]["downcharacter"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیم تعداد کارکتر یا حروف پیام خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️شما در این قسمت میتوانید حداکثر یا حداقل تعداد حروف پیام را تایین کنید

▫️از دکمه های زیر استفاده کنید🔻🔻",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$lockcharacter",'callback_data'=>'lockcharacter']
			],
			[
                ['text'=>"حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacter",'callback_data'=>'text']
			],
			[
                ['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter'],['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter']
			],
			[
                ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacter",'callback_data'=>'text']
			   ],
			[
                ['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter'],['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter']
			],
			[
				 ['text'=>"برگشت ≫",'callback_data'=>'bans']
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
elseif($data=="lockcharacter" &&  $settings2["lock"]["lockcharacter"] == "غیرفعال✖️"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$downcharacter = $settings2["information"]["downcharacter"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیم تعداد کارکتر یا حروف پیام خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️شما در این قسمت میتوانید حداکثر یا حداقل تعداد حروف پیام را تایین کنید

▫️قفل اسپم فعال شد.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"فعال ✅",'callback_data'=>'lockcharacter']
			],
			[
                ['text'=>"حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacter",'callback_data'=>'text']
			],
			[
                ['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter'],['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter']
			],
			[
                ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacter",'callback_data'=>'text']
			],
			[
                ['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter'],['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter']
			],
			[
				 ['text'=>"برگشت ≫",'callback_data'=>'bans']
			],
            ]
        ])
        ]);
$settings2["lock"]["lockcharacter"]="فعال ✅";
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
elseif($data=="lockcharacter" &&  $settings2["lock"]["lockcharacter"] == "فعال ✅"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$downcharacter = $settings2["information"]["downcharacter"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیم تعداد کارکتر یا حروف پیام خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️شما در این قسمت میتوانید حداکثر یا حداقل تعداد حروف پیام را تایین کنید

▫️قفل اسپم غیرفعال شد.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"غیرفعال✖️",'callback_data'=>'lockcharacter']
			],
			[
                ['text'=>"حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacter",'callback_data'=>'text']
			],
			[
                ['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter'],['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter']
			],
			[
                ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacter",'callback_data'=>'text']
			],
			[
                ['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter'],['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter']
			],
			[
				 ['text'=>"برگشت ≫",'callback_data'=>'bans']
			],
            ]
        ])
        ]);
$settings2["lock"]["lockcharacter"]="غیرفعال✖️";
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
elseif($data=="uppluscharacter"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$pluscharacterplus = $pluscharacter + 10 ;
$downcharacter = $settings2["information"]["downcharacter"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیم تعداد کارکتر یا حروف پیام خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️شما در این قسمت میتوانید حداکثر یا حداقل تعداد حروف پیام را تایین کنید

🔺حداکثر تعداد کاراکتر 10 عدد افزایش یافت.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$lockcharacter",'callback_data'=>'lockcharacter']
			],
			[
                ['text'=>"حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacterplus",'callback_data'=>'text']
			],
			[
                ['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter'],['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter']
			],
			[
                ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacter",'callback_data'=>'text']
			],
			[
                ['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter'],['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter']
			],
			[
				 ['text'=>"برگشت ≫",'callback_data'=>'bans']
			],
            ]
        ])
        ]);
$settings2["information"]["pluscharacter"]="$pluscharacterplus";
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
elseif($data=="dempluscharacter"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$pluscharacterplus = $pluscharacter - 10 ;
if($pluscharacterplus >= 0){
$downcharacter = $settings2["information"]["downcharacter"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیم تعداد کارکتر یا حروف پیام خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️شما در این قسمت میتوانید حداکثر یا حداقل تعداد حروف پیام را تایین کنید

🔻حداکثر تعداد کاراکتر 10 عدد کاهش یافت.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$lockcharacter",'callback_data'=>'lockcharacter']
			],
			[
                ['text'=>"حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacterplus",'callback_data'=>'text']
			],
			[
                ['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter'],['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter']
			],
			[
                ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacter",'callback_data'=>'text']
			],
			[
                ['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter'],['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter']
			],
			[
				 ['text'=>"برگشت ≫",'callback_data'=>'bans']
			],
            ]
        ])
        ]);
$settings2["information"]["pluscharacter"]="$pluscharacterplus";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
}
else{
    bot('answerCallbackQuery',[
    'callback_query_id'=>$membercall,
    'text'=>"امکان تغییر به پایین تر از عدد 0 وجود ندارد ⚠️",
]); 
}
}
else{
    bot('answerCallbackQuery',[
    'callback_query_id'=>$membercall,
    'text'=>"شما مدیر ربات نیستید ⚠️",
]);
}
}
elseif($data=="demdowncharacter"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$downcharacter = $settings2["information"]["downcharacter"];
$downcharacterplus = $downcharacter - 10 ;
if($downcharacterplus >= 0){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیم تعداد کارکتر یا حروف پیام خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️شما در این قسمت میتوانید حداکثر یا حداقل تعداد حروف پیام را تایین کنید

🔻حداقل تعداد کاراکتر 10 عدد کاهش یافت.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$lockcharacter",'callback_data'=>'lockcharacter']
			],
			[
                ['text'=>"حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacter",'callback_data'=>'text']
			],
			[
                ['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter'],['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter']
			],
			[
                ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacterplus",'callback_data'=>'text']
			],
			[
                ['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter'],['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter']
			],
			[
				 ['text'=>"برگشت ≫",'callback_data'=>'bans']
			],
            ]
        ])
        ]);
$settings2["information"]["downcharacter"]="$downcharacterplus";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
}
else{
	bot('answerCallbackQuery',[
    'callback_query_id'=>$membercall,
    'text'=>"امکان تغییر به پایین تر از عدد 0 وجود ندارد ⚠️",
]); 
}
}
else{
	bot('answerCallbackQuery',[
    'callback_query_id'=>$membercall,
    'text'=>"شما مدیر ربات نیستید ⚠️",
]);
}
}
elseif($data=="updowncharacter"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$downcharacter = $settings2["information"]["downcharacter"];
$downcharacterplus = $downcharacter + 10 ;
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیم تعداد کارکتر یا حروف پیام خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️شما در این قسمت میتوانید حداکثر یا حداقل تعداد حروف پیام را تایین کنید

🔺حداقل تعداد کاراکتر 10 عدد افزایش یافت.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$lockcharacter",'callback_data'=>'lockcharacter']
			],
			[
                ['text'=>"حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacter",'callback_data'=>'text']
			],
			[
                ['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter'],['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter']
			],
			[
                ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacterplus",'callback_data'=>'text']
			],
			[
                ['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter'],['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter']
			],
			[
			    ['text'=>"برگشت ≫",'callback_data'=>'bans']
			],
            ]
        ])
        ]);
$settings2["information"]["downcharacter"]="$downcharacterplus";
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
elseif($textmassage=="/lock character" or $textmassage=="قفل کاراکتر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {	
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》قفل کاراکتر #پیام فعال شد🔇\n➖➖➖➖➖➖➖\nℹ️قفل کاراکتر فعال شد  از این پس متن ارسال توسط کاربران باید بیش تر از $pluscharacter و کم تر از $downcharacter باشد\nتوسط ☆> [ @$username ]",
    'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["lockcharacter"]="فعال ✅";
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
elseif($textmassage=="/unlock character" or $textmassage=="بازکردن کاراکتر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》قفل کاراکتر #پیام غیر فعال شد🔊\n➖➖➖➖➖➖➖\nℹ️پاک کردن کاراکتر غیر فعال شد و  محدودیتی دیگر در پیام ارسالی وجود ندارد\nتوسط ☆> [ @$username ]",
    'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["lockcharacter"]="غیرفعال✖️";
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
elseif (strpos($textmassage , "/setlockcharacter ") !== false or strpos($textmassage , "تنظیم کاراکتر ") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$num = str_replace(['/setlockcharacter ','تنظیم کاراکتر '],'',$textmassage);
$add = $settings["information"]["added"];
if ($add == true) {
$te = explode(" ",$num);
$startlock = $te[0];
$endlock = $te[1];
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"☆》قفل کاراکتر پیام تنظیم شد🔇\n➖➖➖➖➖➖➖
ℹ️محدودیت در پیام های ارسالی به شکل زیر است :

🖍حداقل تعداد کاراکتر پیام : $startlock
🖌حداکثر تعداد کراکتر پیام : $endlock\n➖➖➖➖\nتوسط ☆> [ @$username ]",
    'reply_to_message_id'=>$message_id,
]);
$settings["information"]["downcharacter"]="$startlock";
$settings["information"]["pluscharacter"]="$endlock";
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

//------------------------- Auto Lock -----------------------------

if($data=="lockauto"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
date_default_timezone_set('Asia/Tehran');
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش قفل خودکار گروه خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️در این قسمت میتوانید قفل گروه را به صورت خودکار تعیین کنید تا در آن زمان گروه قفل و یا باز شود 

▫️از دکمه های زیر استفاده کنید🔻🔻",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$lockauto",'callback_data'=>'lockautostats']
            ],
			[
                ['text'=>"⏱ زمان شروع : $timelockauto",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
			],
			[
                ['text'=>"⏱ زمان پایان : $timeunlockauto",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
			],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'bans']
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
elseif($data=="lockautostats" &&  $settings2["lock"]["lockauto"] == "غیرفعال✖️"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
date_default_timezone_set('Asia/Tehran');
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش قفل خودکار گروه خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️در این قسمت میتوانید قفل گروه را به صورت خودکار تعیین کنید تا در آن زمان گروه قفل و یا باز شود 

▫️قفل خودکار گروه فعال شد.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"فعال ✅",'callback_data'=>'lockautostats']
			],
			[
                ['text'=>"⏱ زمان شروع : $timelockauto",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
			],
			[
                ['text'=>"⏱ زمان پایان : $timeunlockauto",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
			],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'bans']
            ],
            ]
        ])
        ]);
$settings2["lock"]["lockauto"]="فعال ✅";
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
elseif($data=="lockautostats" &&  $settings2["lock"]["lockauto"] == "فعال ✅"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
date_default_timezone_set('Asia/Tehran');
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش قفل خودکار گروه خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️در این قسمت میتوانید قفل گروه را به صورت خودکار تعیین کنید تا در آن زمان گروه قفل و یا باز شود 

▫️قفل خودکار گروه غیرفعال شد.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"غیرفعال✖️",'callback_data'=>'lockautostats']
			],
			[
                ['text'=>"⏱ زمان شروع : $timelockauto",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
			],
			[
                ['text'=>"⏱ زمان پایان : $timeunlockauto",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
			],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'bans']
            ],
            ]
        ])
        ]);
$settings2["lock"]["lockauto"]="غیرفعال✖️";
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
elseif($data=="hourlockautoplus"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
date_default_timezone_set('Asia/Tehran');
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timelockauto ."+60 Minutes"));
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش قفل خودکار گروه خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️در این قسمت میتوانید قفل گروه را به صورت خودکار تعیین کنید تا در آن زمان گروه قفل و یا باز شود 

🔺زمان فعال سازی قفل یک ساعت افزایش یافت.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$lockauto",'callback_data'=>'lockautostats']
			],
			[
                ['text'=>"⏱ زمان شروع : $next_date",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
			],
			[
                ['text'=>"⏱ زمان پایان : $timeunlockauto",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
			],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'bans']
            ],
            ]
        ])
        ]);
$settings2["information"]["timelock"]="$next_date";
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
elseif($data=="hourlockautodown"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
date_default_timezone_set('Asia/Tehran');
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timelockauto ."-60 Minutes"));
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش قفل خودکار گروه خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️در این قسمت میتوانید قفل گروه را به صورت خودکار تعیین کنید تا در آن زمان گروه قفل و یا باز شود 

🔻زمان فعال سازی قفل یک ساعت کاهش یافت.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$lockauto",'callback_data'=>'lockautostats']
			],
			[
                ['text'=>"⏱ زمان شروع : $next_date",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
			],
			[
                ['text'=>"⏱ زمان پایان : $timeunlockauto",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
			],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'bans']
            ],
            ]
        ])
        ]);
$settings2["information"]["timelock"]="$next_date";
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
elseif($data=="minlockautoplus"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
date_default_timezone_set('Asia/Tehran');
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timelockauto ."+5 Minutes"));
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش قفل خودکار گروه خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️در این قسمت میتوانید قفل گروه را به صورت خودکار تعیین کنید تا در آن زمان گروه قفل و یا باز شود 

🔺زمان فعال سازی قفل پنج دقیقه افزایش یافت.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$lockauto",'callback_data'=>'lockautostats']
			],
			[
                ['text'=>"⏱ زمان شروع : $next_date",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
			],
			[
                ['text'=>"⏱ زمان پایان : $timeunlockauto",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
			],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'bans']
            ],
            ]
        ])
        ]);
$settings2["information"]["timelock"]="$next_date";
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
elseif($data=="minlockautodown"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
date_default_timezone_set('Asia/Tehran');
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timelockauto ."-5 Minutes"));
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش قفل خودکار گروه خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️در این قسمت میتوانید قفل گروه را به صورت خودکار تعیین کنید تا در آن زمان گروه قفل و یا باز شود 

🔻زمان فعال سازی قفل پنج دقیقه کاهش یافت.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$lockauto",'callback_data'=>'lockautostats']
			],
			[
                ['text'=>"⏱ زمان شروع : $next_date",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
			],
			[
                ['text'=>"⏱ زمان پایان : $timeunlockauto",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
			],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'bans']
            ],
            ]
        ])
        ]);
$settings2["information"]["timelock"]="$next_date";
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
elseif($data=="hourunlockautoplus"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
date_default_timezone_set('Asia/Tehran');
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timeunlockauto ."+60 Minutes"));
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش قفل خودکار گروه خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️در این قسمت میتوانید قفل گروه را به صورت خودکار تعیین کنید تا در آن زمان گروه قفل و یا باز شود 

🔺زمان غیرفعال شدن قفل یک ساعت افزایش یافت.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$lockauto",'callback_data'=>'lockautostats']
			],
			[
                ['text'=>"⏱ زمان شروع : $timelockauto",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
			],
			[
                ['text'=>"⏱ زمان پایان : $next_date",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
			],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'bans']
            ],
            ]
        ])
        ]);
$settings2["information"]["timeunlock"]="$next_date";
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
elseif($data=="hourunlockautodown"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
date_default_timezone_set('Asia/Tehran');
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timeunlockauto ."-60 Minutes"));
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش قفل خودکار گروه خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️در این قسمت میتوانید قفل گروه را به صورت خودکار تعیین کنید تا در آن زمان گروه قفل و یا باز شود 

🔻زمان غیرفعال شدن قفل یک ساعت کاهش یافت.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$lockauto",'callback_data'=>'lockautostats']
			],
			[
                ['text'=>"⏱ زمان شروع : $timelockauto",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
			],
			[
                ['text'=>"⏱ زمان پایان : $next_date",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
			],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'bans']
            ],
            ]
        ])
        ]);
$settings2["information"]["timeunlock"]="$next_date";
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
elseif($data=="minunlockautoplus"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
date_default_timezone_set('Asia/Tehran');
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timeunlockauto ."+5 Minutes"));
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش قفل خودکار گروه خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️در این قسمت میتوانید قفل گروه را به صورت خودکار تعیین کنید تا در آن زمان گروه قفل و یا باز شود 

🔺زمان غیرفعال شدن قفل پنج دقیقه افزایش یافت.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$lockauto",'callback_data'=>'lockautostats']
			],
			[
                ['text'=>"⏱ زمان شروع : $timelockauto",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
			],
			[
                ['text'=>"⏱ زمان پایان : $next_date",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
			],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'bans']
            ],
            ]
        ])
        ]);
$settings2["information"]["timeunlock"]="$next_date";
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
elseif($data=="minunlockautodown"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
date_default_timezone_set('Asia/Tehran');
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timeunlockauto ."-5 Minutes"));
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش قفل خودکار گروه خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️در این قسمت میتوانید قفل گروه را به صورت خودکار تعیین کنید تا در آن زمان گروه قفل و یا باز شود 

🔻زمان غیرفعال شدن قفل پنج دقیقه کاهش یافت.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$lockauto",'callback_data'=>'lockautostats']
			],
			[
                ['text'=>"⏱ زمان شروع : $timelockauto",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
			],
			[
                ['text'=>"⏱ زمان پایان : $next_date",'callback_data'=>'text']
			],
			[
                ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
			],
			[
                ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
			],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'bans']
            ],
            ]
        ])
        ]);
$settings2["information"]["timeunlock"]="$next_date";
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
elseif($textmassage=="/lock auto" or $textmassage=="قفل خودکار فعال"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
date_default_timezone_set('Asia/Tehran');
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✅ قفل #خودکار فعال شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
قفل خودکار رو میتوانید با دستور :
تنظیم قفل خودکار شروع پایان استفاده کنید",
    'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["lockauto"]="فعال ✅";
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
elseif($textmassage=="/unlock auto" or $textmassage=="قفل خودکار غیرفعال"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
date_default_timezone_set('Asia/Tehran');
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✅ قفل #خودکار غیرفعال شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
قفل خودکار دیگر عمل نخواهد کرد و گروه خودکار قفل نمیشود",
    'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["lockauto"]="غیرفعال✖️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else{
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"#خطا ⚠️ ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید. 

💢 با دستور ⧼ نصب رایگان ⧽ میتوانید ربات را 7 روز رایگان فعال کنید ",
'   reply_to_message_id'=>$message_id,
    
]);
}
}
}
elseif (strpos($textmassage , "/setlockauto ") !== false or strpos($textmassage , "تنظیم قفل خودکار ") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$num = str_replace(['/setlockauto ','تنظیم قفل خودکار '],'',$textmassage);
$add = $settings["information"]["added"];
if ($add == true) {
$te = explode(" ",$num);
date_default_timezone_set('Asia/Tehran');
$date1 = date("H:i:s");
$startlock = $te[0];
$endlock = $te[1];
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ قفل خودکار تنظیم شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
زمان قفل خودکار گروه :

⏱زمان الان : $date1
▫️زمان شروع : $startlock
▫️زمان پایان : $endlock
⁪",
    'reply_to_message_id'=>$message_id,
]);
$settings["information"]["timelock"]="$startlock";
$settings["information"]["timeunlock"]="$endlock";
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

//------------------------- Warnes -----------------------------

if($data=="warn"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$hardmodewarn = $settings2["information"]["hardmodewarn"];
$setwarn = $settings2["information"]["setwarn"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیم اخطار خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️در این بخش شما میتوانید حداکثر اخطار برای کاربر را تایین کنید

▫️توجه داشته باشید عدد باید بین 1 تا 20 باشد‼️",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"حداکثر اخطار: $hardmodewarn",'callback_data'=>'hardmodewarn']
			],
			[
		        ['text'=>"⧼ $setwarn ⧽",'callback_data'=>'text'],['text'=>"⚠️ تعداد اخطار",'callback_data'=>'text']
			],
			[
			    ['text'=>"➖ کاهش ",'callback_data'=>'warn-'],['text'=>"➕ افزایش ",'callback_data'=>'warn+']
			],
			[
			    ['text'=>"برگشت ≫",'callback_data'=>'bans']
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
elseif($data=="warn+"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$hardmodewarn = $settings2["information"]["hardmodewarn"];
$setwarn = $settings2["information"]["setwarn"];
$manfi = $setwarn + 1;
if ($manfi <= 20 && $manfi >= 1){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیم اخطار خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️در این بخش شما میتوانید حداکثر اخطار برای کاربر را تایین کنید

🔺افزایش یافت.️",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"حداکثر اخطار: $hardmodewarn",'callback_data'=>'hardmodewarn']
			],
            [
			    ['text'=>"⧼ $manfi ⧽",'callback_data'=>'text'],['text'=>"⚠️ تعداد اخطار",'callback_data'=>'text']
			],
			[
			    ['text'=>"➖ کاهش ",'callback_data'=>'warn-'],['text'=>"➕ افزایش ",'callback_data'=>'warn+']
			],
			[
			    ['text'=>"برگشت ≫",'callback_data'=>'bans']
			],
            ]
        ])
        ]);
$settings2["information"]["setwarn"]="$manfi";
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
}
elseif($data=="warn-"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$hardmodewarn = $settings2["information"]["hardmodewarn"];
$setwarn = $settings2["information"]["setwarn"];
$manfi = $setwarn - 1;
if ($manfi <= 20 && $manfi >= 1){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیم اخطار خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️در این بخش شما میتوانید حداکثر اخطار برای کاربر را تایین کنید

🔻کاهش یافت.️",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"حداکثر اخطار: $hardmodewarn",'callback_data'=>'hardmodewarn']
			],
            [
				['text'=>"⧼ $manfi ⧽",'callback_data'=>'text'],['text'=>"⚠️ تعداد اخطار",'callback_data'=>'text']
			],
			[
			    ['text'=>"➖ کاهش ",'callback_data'=>'warn-'],['text'=>"➕ افزایش ",'callback_data'=>'warn+']
			],
			[
		    	['text'=>"برگشت ≫",'callback_data'=>'bans']
			],
            ]
        ])
	    ]);
$settings2["information"]["setwarn"]="$manfi";
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
}
elseif($data=="hardmodewarn" && $settings2["information"]["hardmodewarn"] == "اخراج کاربر 🚫"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$hardmodebot = $settings2["information"]["hardmodebot"];
$setwarn = $settings2["information"]["setwarn"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیم اخطار خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️در این بخش شما میتوانید حداکثر اخطار برای کاربر را تایین کنید

▫️سکوت📵کاربر بعد از رسیدن به حداکثر تعداد اخطار‼️",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"حداکثر اخطار: سکوت کاربر 📵",'callback_data'=>'hardmodewarn']
			],
			[
		        ['text'=>"⧼ $setwarn ⧽",'callback_data'=>'text'],['text'=>"⚠️ تعداد اخطار",'callback_data'=>'text']
			],
			[
			    ['text'=>"➖ کاهش ",'callback_data'=>'warn-'],['text'=>"➕ افزایش ",'callback_data'=>'warn+']
			],
			[
			    ['text'=>"برگشت ≫",'callback_data'=>'bans']
			],
            ]
        ])
        ]);
$settings2["information"]["hardmodewarn"]="سکوت کاربر 📵️";
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
elseif($data=="hardmodewarn" && $settings2["information"]["hardmodewarn"] == "سکوت کاربر 📵️"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$hardmodebot = $settings2["information"]["hardmodebot"];
$setwarn = $settings2["information"]["setwarn"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیم اخطار خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️در این بخش شما میتوانید حداکثر اخطار برای کاربر را تایین کنید

▫️اخراج🚫کاربر بعد از رسیدن به حداکثر تعداد اخطار‼️",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"حداکثر اخطار: اخراج کاربر 🚫",'callback_data'=>'hardmodewarn']
			],
			[
			    ['text'=>"⧼ $setwarn ⧽",'callback_data'=>'text'],['text'=>"⚠️ تعداد اخطار",'callback_data'=>'text']
			],
			[
			    ['text'=>"➖ کاهش ",'callback_data'=>'warn-'],['text'=>"➕ افزایش ",'callback_data'=>'warn+']
			],
			[
			    ['text'=>"برگشت ≫",'callback_data'=>'bans']
			],
            ]
        ])
        ]);
$settings2["information"]["hardmodewarn"]="اخراج کاربر 🚫";
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
elseif($textmassage=="/warn" && $rt or $textmassage=="warn" && $rt or $textmassage=="اخطار" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
$warnplus = $warn + 1;	
if ($warnplus >= $setwarn) {
$hardmodewarn = $settings["information"]["hardmodewarn"];
if($hardmodewarn == "اخراج کاربر 🚫"){
    bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
]);
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💥کاربر ⧼ $re_name ⧽
به دلیل رسیدن به حداکثر اخطار #اخراج شد‼️
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
]);
}
else{
   bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
]);
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💥کاربر ⧼ $re_name ⧽
به دلیل رسیدن به حداکثر اخطار #سایلنت شد‼️
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
else{
    bot('sendmessage',[
	'chat_id'=>$chat_id,
    'text'=>"💥کاربر ⧼ $re_name ⧽
شما به دلیل رعایت نکردن قوانین #اخطار گرفتید‼️
⚠️ تعداد #اخطارهای شما $warnplus از $setwarn
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
    'reply_to_message_id'=>$message_id,
]);
$settings["warnlist"]["{$re_id}"]=$warnplus;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
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
	'text'=>"📍 من نمیتوانم ادمین ها , صاحبان و مدیران گروه و خود را اخطار بدهم",
    'reply_to_message_id'=>$message_id,
]);
}
}
}
}
elseif($textmassage=="/unwarn" && $rt or $textmassage=="unwarn" && $rt or $textmassage=="حذف اخطار"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
$warnplus = $warn * 0;	
    bot('sendmessage',[
	'chat_id'=>$chat_id,
    'text'=>"💥کاربر ⧼ $re_name ⧽
تمام #اخطارهای شما حذف شد. لطفاً به قوانین گروه احترام بزارید‼️
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
    'reply_to_message_id'=>$message_id,
]);
$settings["warnlist"]["{$re_id}"]=$warnplus;
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
}
elseif ( strpos($textmassage , '/setwarn ') !== false or strpos($textmassage , 'تنظیم اخطار ') !== false  ) {
$newdec = str_replace(['/setwarn ','تنظیم اخطار '],'',$textmassage);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
if ($newdec <= 20 && $newdec >= 1){
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"💢 تعداد اخطار ها به $newdec عدد تغییر کرد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
    'reply_to_message_id'=>$message_id,
]);
$settings["information"]["setwarn"]="$newdec";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else{
    bot('sendmessage',[
    'chat_id' => $chat_id,
    'text'=>"#خطا ⚠️ عدد وارد شده باید بین 1 تا 20 باشد.",
    
]);
}
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
elseif($textmassage=="/warn info" or $textmassage=="warn info" or $textmassage=="اطلاعات اخطار"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
if ($tc == 'group' | $tc == 'supergroup'){  
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"کاربر ⧼ $re_name ⧽ تعداد $warn اخطار از $setwarn اخطار رو دریافت کرده
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
	'reply_to_message_id'=>$message_id,
]);
}
}
}
elseif($textmassage=="/modewarn on" or $textmassage=="حالت اخطار اخراج"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✅ حالت سخت گیرانه 🚫اخراج کاربر در گروه فعال شد.
از این پس کاربر پس از رسیدن به حداکثر اخطار #اخراج میشود
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
    'reply_to_message_id'=>$message_id,
]);
$settings["information"]["hardmodewarn"]="🚷 اخراج کاربر";
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
elseif($textmassage=="/modewarn off" or $textmassage=="حالت اخطار سکوت"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✅ حالت سخت گیرانه 📵سکوت کاربر در گروه فعال شد.
از این پس کاربر پس از رسیدن به حداکثر اخطار #سکوت میشود
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
    'reply_to_message_id'=>$message_id,
]);
$settings["information"]["hardmodewarn"]="سکوت کاربر 📵️";
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

//------------------------- Add -----------------------------

if($data=="addbzn"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$add = $settings2["information"]["add"];
$setadd = $settings2["information"]["setadd"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیمات ادد اجباری خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️از دکمه های زیر استفاده کنید🔻🔻",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$add",'callback_data'=>'lockadd']
			],
			[
                ['text'=>"⧼ $setadd ⧽",'callback_data'=>'text'],['text'=>"👥 تعداد دعوت",'callback_data'=>'text']
			],
			[
			    ['text'=>"➖ کاهش ",'callback_data'=>'add-'],['text'=>"➕ افزایش ",'callback_data'=>'add+']
			],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'bans']
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
elseif($data=="lockadd" && $settings2["information"]["add"] == "فعال ✅"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$setadd = $settings2["information"]["setadd"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیمات ادد اجباری خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️ادد اجباری غیرفعال شد.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"غیرفعال✖️",'callback_data'=>'lockadd']
			],
			[
			    ['text'=>"⧼ $setadd ⧽",'callback_data'=>'text'],['text'=>"👥 تعداد دعوت",'callback_data'=>'text']
			],
			[
			    ['text'=>"➖ کاهش ",'callback_data'=>'add-'],['text'=>"➕ افزایش ",'callback_data'=>'add+']
			],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'bans']
            ],
            ]
        ])
        ]);
$settings2["information"]["add"]="غیرفعال✖️";
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
elseif($data=="lockadd" && $settings2["information"]["add"] == "غیرفعال✖️"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$setadd = $settings2["information"]["setadd"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیمات ادد اجباری خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️ادد اجباری فعال شد.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"فعال ✅",'callback_data'=>'lockadd']
			],
			[
			    ['text'=>"⧼ $setadd ⧽",'callback_data'=>'text'],['text'=>"👥 تعداد دعوت",'callback_data'=>'text']
			],
			[
			    ['text'=>"➖ کاهش ",'callback_data'=>'add-'],['text'=>"➕ افزایش ",'callback_data'=>'add+']
			],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'bans']
            ],
            ]
        ])
        ]);
$settings2["information"]["add"]="فعال ✅";
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
elseif($data=="add+"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$setadd = $settings2["information"]["setadd"];
$add = $settings2["information"]["add"];
$manfi = $setadd + 1;
if($manfi <= 20 && $manfi >= 1){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیمات ادد اجباری خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🔺افزایش یافت.️",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$add",'callback_data'=>'lockadd']
			],
			[
			    ['text'=>"⧼ $manfi ⧽",'callback_data'=>'text'],['text'=>"👥 تعداد دعوت",'callback_data'=>'text']
			],
			[
				['text'=>"➖ کاهش ",'callback_data'=>'add-'],['text'=>"➕ افزایش ",'callback_data'=>'add+']
			],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'bans']
            ],
            ]
        ])
        ]);
$settings2["information"]["setadd"]="$manfi";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
}
else{
	bot('answerCallbackQuery',[
    'callback_query_id'=>$membercall,
    'text'=>"امکان تغییر دیگر وجود ندارد ⚠️",
]);
}
}
else{
	bot('answerCallbackQuery',[
    'callback_query_id'=>$membercall,
    'text'=>"شما مدیر ربات نیستید ⚠️",
]);
}
}
elseif($data=="add-"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$setadd = $settings2["information"]["setadd"];
$add = $settings2["information"]["add"];
$manfi = $setadd - 1;
if ($manfi <= 20 && $manfi >= 1){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیمات ادد اجباری خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🔻کاهش یافت.️",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$add",'callback_data'=>'lockadd']
			],
			[
			    ['text'=>"⧼ $manfi ⧽",'callback_data'=>'text'],['text'=>"👥 تعداد دعوت",'callback_data'=>'text']
			],
			[
				['text'=>"➖ کاهش ",'callback_data'=>'add-'],['text'=>"➕ افزایش ",'callback_data'=>'add+']
			],
            [
                ['text'=>"برگشت ≫",'callback_data'=>'bans']
            ],
            ]
        ])
        ]);
$settings2["information"]["setadd"]="$manfi";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
}
else{
    bot('answerCallbackQuery',[
    'callback_query_id'=>$membercall,
    'text'=>"امکان تغییر دیگر وجود ندارد ⚠️",
]);
}
}
else{
    bot('answerCallbackQuery',[
    'callback_query_id'=>$membercall,
    'text'=>"شما مدیر ربات نیستید ⚠️",
]);
}
}
elseif($textmassage == "/add on" or $textmassage == "add on" or $textmassage == "ادداجباری فعال"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ قفل ادد اجباری در گروه فعال شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💢 از این پس هر کابر برای چت کردن در گروه باید $setadd کابر را ادد کند",
    'reply_to_message_id'=>$message_id,
]);
$settings["information"]["add"]="فعال ✅";
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
}
elseif($textmassage == "/add off" or $textmassage == "add off" or $textmassage == "ادداجباری غیرفعال"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ قفل اد اجباری غیرفعال شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💢 از این پس لازم نیست کاربران برای چت کردن در گروه کاربر دیگری را ادد کنند",
    'reply_to_message_id'=>$message_id,
]);
$settings["information"]["add"]="غیرفعال✖️";
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
}
elseif (strpos($textmassage , '/setadd ') !== false or strpos($textmassage , 'تنظیم ادداجباری ') !== false ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['/setadd ','تنظیم ادداجباری '],'',$textmassage);
if($code <= 20 && $code >= 1){
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✅ تعداد افرادی که توسط اعضای گروه باید دعوت شوند تغییر کرد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💢 اعضای گروه برای چت کردن باید $code نفر رو به گروه دعوت کنند",
    'reply_to_message_id'=>$message_id,
]);
$settings["information"]["setadd"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else{
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 عدد وارد شده بین 1 تا 20 باید باشد",
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

//------------------------- Join -----------------------------

if($data=="lockchannel"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$add = $settings2["information"]["lockchannel"];
$setadd = $settings2["information"]["setchannel"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیمات جوین اجباری خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️از دکمه های زیر استفاده کنید🔻🔻",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"$add",'callback_data'=>'channellock']
			],
			[
				['text'=>"کانال تنظیم شده : $setadd",'callback_data'=>'text']
			],
			[
				['text'=>"⚙️ تنظیم کانال",'callback_data'=>'setchannel']
			],
			[
				['text'=>"برگشت ≫",'callback_data'=>'bans']
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
elseif($data=="channellock" && $settings2["information"]["lockchannel"] == "فعال ✅"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$setadd = $settings2["information"]["setchannel"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیمات جوین اجباری خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️جوین کانال غیرفعال شد.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"غیرفعال✖️",'callback_data'=>'channellock']
			],
			[
				['text'=>"کانال تنظیم شده : $setadd",'callback_data'=>'text']
			],
			[
				['text'=>"⚙️ تنظیم کانال",'callback_data'=>'setchannel']
			],
			[
				['text'=>"برگشت ≫",'callback_data'=>'bans']
			],
            ]
        ])
        ]);
$settings2["information"]["lockchannel"]="غیرفعال✖️";
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
elseif($data=="channellock" && $settings2["information"]["lockchannel"] == "غیرفعال✖️"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$setadd = $settings2["information"]["setchannel"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨به بخش تنظیمات جوین اجباری خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️جوین کانال فعال شد.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"فعال ✅",'callback_data'=>'channellock']
			],
            [
				['text'=>"کانال تنظیم شده : $setadd",'callback_data'=>'text']
			],
			[
				['text'=>"⚙️ تنظیم کانال",'callback_data'=>'setchannel']
			],
			[
				['text'=>"برگشت ≫",'callback_data'=>'bans']
			],
            ]
        ])
        ]);
$settings2["information"]["lockchannel"]="فعال ✅";
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
elseif($data=="setchannel"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✨یوزرنیم کانال خود را ارسال کنید 
💢 مثال : @$channel

⚠️ توجه ربات حتما باید در کانال تنظیم شده ادمین شود تا بتواند عمل کند.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
			[
                ['text'=>"برگشت ≫",'callback_data'=>'lockchannel']
			],
            ]
        ])
        ]);
$settings2["information"]["step"]="setchannel";
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
elseif($textmassage == "/channel on" or $textmassage == "channel on" or $textmassage == "جوین کانال فعال"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ قفل کانال فعال شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💢 از این پس کاربران باید در کانال تنظیم شده عضو شوند تا بتوانند پیام دهند",
	'reply_to_message_id'=>$message_id,
]);
$settings["information"]["lockchannel"]="فعال ✅";
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
}
elseif($textmassage == "/channel off" or $textmassage == "channel off" or $textmassage == "جوین کانال غیرفعال"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ قفل کانال غیرفعال شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💢 قفل کانال خاموش شد و دیگر عضویت اجباری فعال نیست",
	'reply_to_message_id'=>$message_id,
]);
$settings["information"]["lockchannel"]="غیرفعال✖️";
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
}
elseif ( strpos($textmassage , '/setchannel ') !== false or strpos($textmassage , 'تنظیم کانال ') !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
$code = $num = str_replace(['/setchannel ','تنظیم کانال '],'',$textmassage);
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✅ کانال جوین اجباری تنظیم شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💢از این پس افراد برای ارسال پیام باید عضو کانال $code باشند

💥توجه ربات حتما باید در کانال تنظیم شده ادمین شود تا بتواند عمل کند",
    'reply_to_message_id'=>$message_id,
]);
$settings["information"]["setchannel"]="$code";
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