<?php

if($data=="lockphoto" && $settings2["lock"]["photo"] == "فعال ✅" or $data=="lockvideo" && $settings2["lock"]["video"] =="فعال ✅" or $data=="lockgame" && $settings2["lock"]["game"] =="فعال ✅" or $data=="locksticker" && $settings2["lock"]["sticker"] =="فعال ✅" or $data=="lockvoice" && $settings2["lock"]["voice"] =="فعال ✅" or $data=="lockaudio" && $settings2["lock"]["audio"] =="فعال ✅"  or $data=="lockcontact" && $settings2["lock"]["contact"] =="فعال ✅" or $data=="locklocation" && $settings2["lock"]["location"] =="فعال ✅" or $data=="lockdocument" &&  $settings2["lock"]["document"] =="فعال ✅" or $data=="lockgif" && $settings2["lock"]["gif"] =="فعال ✅" or $data=="lockself" && $settings2["lock"]["video_msg"] =="فعال ✅" or $data=="locktext" && $settings2["lock"]["text"] =="فعال ✅" ){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$getlock = array("lockphoto","lockvideo","lockgame","locksticker","lockvoice","lockaudio","lockcontact","locklocation","lockdocument","lockgif","lockself","locktext");
$howlock = array("photo","video","game","sticker","voice","audio","contact","location","document","gif","video_msg","text");
$text = array("عکس","ویدیو","بازی","استیکر","ویس","اهنگ","مخاطب","مکان","فایل","گیف","پیام ویدیویی","متن");
$lock = str_replace($getlock,$howlock,$data);
$gettext = str_replace($getlock,$text,$data);
$settings2["lock"]["$lock"]="غیرفعال✖️";
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
    bot('editMessageReplyMarkup',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'reply_markup'=>json_encode([
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
    bot('answercallbackquery', [
	'callback_query_id' =>$membercall,
    'text' => "قفل ارسال $gettext غیر فعال شد 🔓",
    'show_alert' =>false
]);	
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
elseif($data=="lockphoto" && $settings2["lock"]["photo"] == "غیرفعال✖️" or $data=="lockvideo" && $settings2["lock"]["video"] =="غیرفعال✖️" or $data=="lockgame" && $settings2["lock"]["game"] =="غیرفعال✖️" or $data=="locksticker" && $settings2["lock"]["sticker"] =="غیرفعال✖️" or $data=="lockvoice" && $settings2["lock"]["voice"] =="غیرفعال✖️" or $data=="lockaudio" && $settings2["lock"]["audio"] =="غیرفعال✖️"  or $data=="lockcontact" && $settings2["lock"]["contact"] =="غیرفعال✖️" or $data=="locklocation" && $settings2["lock"]["location"] =="غیرفعال✖️" or $data=="lockdocument" &&  $settings2["lock"]["document"] =="غیرفعال✖️" or $data=="lockgif" && $settings2["lock"]["gif"] =="غیرفعال✖️" or $data=="lockself" && $settings2["lock"]["video_msg"] =="غیرفعال✖️" or $data=="locktext" && $settings2["lock"]["text"] =="غیرفعال✖️" ){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$getlock = array("lockphoto","lockvideo","lockgame","locksticker","lockvoice","lockaudio","lockcontact","locklocation","lockdocument","lockgif","lockself","locktext");
$howlock = array("photo","video","game","sticker","voice","audio","contact","location","document","gif","video_msg","text");
$text = array("عکس","ویدیو","بازی","استیکر","ویس","اهنگ","مخاطب","مکان","فایل","گیف","پیام ویدیویی","متن");
$lock = str_replace($getlock,$howlock,$data);
$gettext = str_replace($getlock,$text,$data);
$settings2["lock"]["$lock"]="فعال ✅";
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
    bot('editMessageReplyMarkup',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'reply_markup'=>json_encode([
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
    bot('answercallbackquery', [
	'callback_query_id' =>$membercall,
    'text' => "قفل ارسال $gettext فعال شد 🔐",
    'show_alert' =>false
]);	
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
elseif($data=="lockforward" && $settings2["lock"]["forward"] =="فعال ✅" or $data=="lockfosh" && $settings2["lock"]["fosh"] =="فعال ✅" or $data=="lockedit" && $settings2["lock"]["edit"] =="فعال ✅" or $data=="lockusername" && $settings2["lock"]["username"] =="فعال ✅" or $data=="locklink" && $settings2["lock"]["link"] == "فعال ✅" or $data=="lockbot" && $settings2["lock"]["bot"] =="فعال ✅"  or $data=="locktgservic" && $settings2["lock"]["tgservic"] =="فعال ✅" or $data=="lockreply" && $settings2["lock"]["reply"] =="فعال ✅" or $data=="lockcmd" && $settings2["lock"]["cmd"] =="فعال ✅" or $data=="locktag" && $settings2["lock"]["tag"] =="فعال ✅"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$getlock = array("lockforward","lockfosh","lockedit","lockusername","locklink","lockbot","locktgservic","lockreply","lockcmd","locktag");
$howlock = array("forward","fosh","edit","username","link","bot","tgservic","reply","cmd","tag");
$text = array("فوروارد","کلمات رکیک","ویرایش","یوزرنیم","لینک","ورود ربات","خدمت تلگرام","ریپلای","دستورات عمومی","هشتگ");
$lock = str_replace($getlock,$howlock,$data);
$gettext = str_replace($getlock,$text,$data);
$settings2["lock"]["$lock"]="غیرفعال✖️";
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
    bot('editMessageReplyMarkup',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'reply_markup'=>json_encode([
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
    bot('answercallbackquery', [
	'callback_query_id' =>$membercall,
    'text' => "قفل $gettext غیر فعال شد 🔓",
    'show_alert' =>false
]);	
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
elseif($data=="lockforward" && $settings2["lock"]["forward"] =="غیرفعال✖️" or $data=="lockfosh" && $settings2["lock"]["fosh"] =="غیرفعال✖️" or $data=="lockedit" && $settings2["lock"]["edit"] =="غیرفعال✖️" or $data=="lockusername" && $settings2["lock"]["username"] =="غیرفعال✖️" or $data=="locklink" && $settings2["lock"]["link"] == "غیرفعال✖️" or $data=="lockbot" && $settings2["lock"]["bot"] =="غیرفعال✖️"  or $data=="locktgservic" && $settings2["lock"]["tgservic"] =="غیرفعال✖️" or $data=="lockreply" && $settings2["lock"]["reply"] =="غیرفعال✖️" or $data=="lockcmd" && $settings2["lock"]["cmd"] =="غیرفعال✖️" or $data=="locktag" && $settings2["lock"]["tag"] =="غیرفعال✖️"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$getlock = array("lockforward","lockfosh","lockedit","lockusername","locklink","lockbot","locktgservic","lockreply","lockcmd","locktag");
$howlock = array("forward","fosh","edit","username","link","bot","tgservic","reply","cmd","tag");
$text = array("فوروارد","کلمات رکیک","ویرایش","یوزرنیم","لینک","ورود ربات","خدمت تلگرام","ریپلای","دستورات عمومی","هشتگ");
$lock = str_replace($getlock,$howlock,$data);
$gettext = str_replace($getlock,$text,$data);
$settings2["lock"]["$lock"]="فعال ✅";
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
    bot('editMessageReplyMarkup',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'reply_markup'=>json_encode([
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
    bot('answercallbackquery', [
	'callback_query_id' =>$membercall,
    'text' => "قفل $gettext فعال شد 🔒",
    'show_alert' =>false
]);	
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
elseif($textmassage=="/settings" or $textmassage=="settings" or $textmassage=="تنظیمات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
date_default_timezone_set('Asia/Tehran');
$locklink = $settings["lock"]["link"];
$lockusername = $settings["lock"]["username"];
$locktag = $settings["lock"]["tag"];
$lockedit = $settings["lock"]["edit"];
$lockfosh = $settings["lock"]["fosh"];
$lockbots = $settings["lock"]["bot"];
$lockforward = $settings["lock"]["forward"];
$locktg = $settings["lock"]["tgservic"];
$lockreply = $settings["lock"]["reply"];
$lockcmd = $settings["lock"]["cmd"];
$lockdocument = $settings["lock"]["document"];
$lockgif = $settings["lock"]["gif"];
$lockvideo_note = $settings["lock"]["video_msg"];
$locklocation = $settings["lock"]["location"];
$lockphoto = $settings["lock"]["photo"];
$lockcontact = $settings["lock"]["contact"];
$lockaudio = $settings["lock"]["audio"];
$lockvoice = $settings["lock"]["voice"];
$locksticker = $settings["lock"]["sticker"];
$lockgame = $settings["lock"]["game"];
$lockvideo = $settings["lock"]["video"];
$locktext = $settings["lock"]["text"];
$mute_all = $settings["lock"]["mute_all"];
$welcome = $settings["information"]["welcome"];
$add = $settings["information"]["add"];
$setwarn = $settings["information"]["setwarn"];
$charge = $settings["information"]["charge"];
$lockauto = $settings["lock"]["lockauto"];
$lockcharacter = $settings["lock"]["lockcharacter"];
$startlock = $settings["information"]["timelock"];
$endlock = $settings["information"]["timeunlock"];
$startlockcharacter = $settings["information"]["pluscharacter"];
$endlockcharacter = $settings["information"]["downcharacter"];
$date4 = date("H:i:s");
$date3 = date('Y-m-d');
$date2 = date('d');
$date1 = date('m');
$ndate = $settings["information"]["expire"];
$rdate = $settings["information"]["dataadded"];
$gettime2 = date('d', strtotime($ndate));
$gettime1 = date('m', strtotime($ndate));
$gettime = $gettime1 - $date1 ;
$gettime2 = $gettime2 - $date2 ;
$ingettime = $gettime * 30 ;
$endtime = $ingettime + $gettime2 ;
$text = str_replace("| فعال |","","💢 تنظیمات گروه
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
⚙️ قفل های اصلی :

🔒》لینک : $locklink
🔒》هشتگ : $locktag
🔒》یوزرنیم : $lockusername
🔒》ویرایش پیام : $lockedit
🔒》فحش : $lockfosh
🔒》ورود ربات : $lockbots
🔒》فوروارد : $lockforward
🔒》خدمات تلگرام : $locktg
🔒》ریپلای : $lockreply
🔒》دستورات عمومی : $lockcmd

━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
📂 قفل های رسانه :

🔒》فایل : $lockdocument
🔒》گیف : $lockgif
🔒》پیام ویدیویی : $lockvideo_note
🔒》ارسال مکان : $locklocation
🔒》تصویر : $lockphoto
🔒》ارسال شماره : $lockcontact
🔒》موسیقی : $lockaudio
🔒》صدا : $lockvoice
🔒》استیکر : $locksticker
🔒》بازی : $lockgame
🔒》فیلم : $lockvideo
🔒》متن : $locktext

━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
✨سایر قفل ها :

🔐 قفل گروه :  $mute_all
🌟 خوش آمدگویی : $welcome
💢 ادد اجباری : $add
⚠️ حداکثر اخطار : $setwarn
🔏 قفل خودکار : $lockauto
⏱ زمان الان : $date4
🔜 زمان شروع قفل خودکار : $startlock
🔚 زمان پایان قفل خودکار : $endlock
👾 ضد اسپم : $lockcharacter
🔺 حداکثر تعداد کاراکتر پیام : $startlockcharacter
🔻 حداقل تعداد کراکتر پیام : $endlockcharacter

━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
📌اطلاعات گروه :

▪️ نام گروه : $namegroup
▫️ ایدی گروه : [$chat_id]
🏷 یوزرنیم شما : @$username
📅 میزان شارژ گروه : $endtime
⁪");
$text2 = str_replace("| غیر فعال |","","$text");
    bot('sendmessage',[ 
    'chat_id'=>$chat_id,
    'text'=>"$text2",
    'reply_to_message_id'=>$message_id,
	'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"پنل شیشه ای",'callback_data'=>'back']
            ],
            ]
        ])
        ]);
}
}

?>