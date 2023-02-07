<?php

if($textmassage == "/addfree" or $textmassage == "addfree" or $textmassage == "نصب رایگان" or $textmassage == "/start@$usernamebot addfree" or $textmassage == "/addfree@$usernamebot") {
if ($status == 'creator'){
$url = file_get_contents("https://api.telegram.org/bot$token/getChatMembersCount?chat_id=$chat_id");
$getchat = json_decode($url, true);
$howmember = $getchat["result"];
$add = $settings["information"]["added"];
$dataadd = $settings["information"]["dataadded"];
if ($add == true) {
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ گروه قبلا در لیست گروه های پشتیبانی ربات بوده است.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
اطلاعات گروه :
▪️نام گروه : $namegroup
▫️ایدی گروه : $chat_id

📅 تاریخ اضافه شدن گروه : $dataadd",
    'reply_to_message_id'=>$message_id,
	'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"کانال ما",'url'=>"https://telegram.me/$channel"],['text'=>"$dataadd",'callback_data'=>"text"]
            ],
            ]
        ])
        ]); 
}
else{
if($howmember >= 10){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ گروه با موفقیت به لیست پشتیبانی ربات اضافه شد
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
اطلاعات گروه شما :
▪️نام گروه : $namegroup
▫️ایدی گروه : $chat_id

📌برای دریافت پنل تنظیمات و راهنما دستور :
پنل و یا راهنما را ارسال کنید

✅ نصب رایگان انجام شد گروه 7 روز شارژ شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
گروه توسط: @$username",
    'reply_to_message_id'=>$message_id,
	'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
			    ['text'=>"⚙️ مدیریت گروه",'callback_data'=>"back"],['text'=>"📄 راهنما",'callback_data'=>"help"]
            ],
            [
                ['text'=>"کانال ما",'url'=>"https://telegram.me/$channel"]
            ],
            ],
        ])
        ]); 
	bot('sendmessage',[
    'chat_id'=>$Dev[0],
    'text'=>"✅ یک گروه توسط: @$username رایگان فعال شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
اطلاعات گروه :
▪️نام گروه : $namegroup
▫️ایدی گروه : $chat_id
⁪", 
]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +7 day"));
$settings = '{"lock": {
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
			"hardmodewarn": "سکوت کاربر 📵️",
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
$settings = json_decode($settings,true);
$settings["information"]["expire"]="$next_date";
$settings["information"]["dataadded"]="$dateadd";
$settings["information"]["msg_id"]="$message_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "نام گروه : $namegroup \n آیدی گروه : $chat_id\n⁪\n");
fclose($gpadd);
}
else{
if ($add != true) {
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"💢تعداد اعضا کافی نمیباشد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💥برای استفاده از ربات گروه شما باید حداقل 10 عضو داشته باشد

⁉️اگر نیاز به تست ربات و دیدن امکانات ربات دارید به کانال ما مراجعه کنید",
    'reply_to_message_id'=>$message_id,
	'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"کانال ما",'url'=>"https://telegram.me/$channel"]
            ],
            ]
        ])
        ]); 
}
}
}
}
}
elseif ($textmassage == "/add"  or $textmassage == "add" or $textmassage == "نصب") {
if (in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add != true) {
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ گروه با موفقیت به لیست پشتیبانی ربات اضافه شد
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
اطلاعات گروه شما :
▪️نام گروه : $namegroup
▫️ایدی گروه : $chat_id

📌برای دریافت پنل تنظیمات و راهنما دستور :
پنل و یا راهنما را ارسال کنید
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
گروه توسط: @$username اضافه شد و 10 روز شارژ شد.",
    'reply_to_message_id'=>$message_id,
	'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
			    ['text'=>"⚙️ مدیریت گروه",'callback_data'=>"back"],['text'=>"📄 راهنما",'callback_data'=>"help"]
            ],
            [
                ['text'=>"کانال ما",'url'=>"https://telegram.me/$channel"]
            ],
            ],
        ])
        ]);
    bot('sendmessage',[
    'chat_id'=>$Dev[0],
    'text'=>"✅ یک گروه توسط: @$username اضافه شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
اطلاعات گروه :
▪️نام گروه : $namegroup
▫️ایدی گروه : $chat_id
⁪",
]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +10 day"));
$settings = '{"lock": {
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
			"hardmodewarn": "سکوت کاربر 📵️",
			"charge": "7 روز",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"textwelcome": "خوش آمدید",
			"rules": "ثبت نشده",
			"setwarn": "3"
			}
}';
$settings = json_decode($settings,true);
$settings["information"]["expire"]="$next_date";
$settings["information"]["dataadded"]="$dateadd";
$settings["information"]["msg_id"]="$message_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "نام گروه : $namegroup \n آیدی گروه : $chat_id\n⁪\n");
fclose($gpadd);
}
else{
$dataadd = $settings["information"]["dataadded"];
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ گروه قبلا در لیست گروه های پشتیبانی ربات بوده است.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
اطلاعات گروه :
▪️نام گروه : $namegroup
▫️ایدی گروه : $chat_id

📅 تاریخ اضافه شدن گروه : $dataadd",
    'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"کانال ما",'url'=>"https://telegram.me/$channel"],['text'=>"$dataadd",'callback_data'=>"text"]
            ],
            ]
        ])
        ]); 
}
}
}
}
elseif($textmassage == '/rem' or $textmassage == 'rem'  or  $textmassage == 'حذف' ){
if (in_array($from_id,$Dev)){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ گروه توسط: @$username  از لیست گروه های پشتیبانی ربات حذف شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
اطلاعات گروه شما :
▪️نام گروه : $namegroup
▫️ایدی گروه : $chat_id

دیگر پیام های این گروه برسی نمیشود
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
    'reply_to_message_id'=>$message_id,
]);
unlink("data/$chat_id.json");
}  
}
elseif($textmassage == '/leave'  or $textmassage == 'leave'  or $textmassage == 'ترک'){
if (in_array($from_id,$Dev)){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🤖 ربات از گروه با اطلاعات :
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️نام گروه : $namegroup
▫️ایدی گروه : $chat_id
▫️ارسال کننده دستور : @$username
در حال خروج است...",
    'reply_to_message_id'=>$message_id,
]);
    bot('LeaveChat',[
    'chat_id'=>$chat_id,
]);
}
}
elseif($rt && $textmassage=="/kick"  or $rt && $textmassage=="kick" or $rt && $textmassage== "اخراج"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
]);
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💥کاربر ⧼ $re_name ⧽
به دلیل رعایت نکردن قوانین #اخراج شد‼️
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
    'reply_to_message_id'=>$message_id,
]);
} 
else{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 من نمیتوانم ادمین ها , صاحبان و مدیران گروه و خود را اخراج کنم",
    'reply_to_message_id'=>$message_id,
]);
}
}
}
elseif($textmassage == "/delall" or $textmassage=="پاکسازی"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
$msg_id = $settings["information"]["msg_id"];	
$manha = $message_id - $msg_id ;
if($manha < 10000){
for($i=$update->message->message_id; $i>= $msg_id; $i--){
    bot('deletemessage',[
    'chat_id' =>$update->message->chat->id,
    'message_id' =>$i,
]);
}
    bot('sendmessage',[
    'chat_id' =>$update->message->chat->id,
    'text' =>"تمامی پیام های گروه پاکسازی شدند❕
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
♻️ تعداد پیام های پاک شده : $manha",
]);
$settings["information"]["msg_id"]="$message_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
else{
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"#خطا ⚠️ ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید. ",
	'reply_to_message_id'=>$message_id,
]);
}
}
elseif ( strpos($textmassage , '/rmsg ') !== false or strpos($textmassage , 'پاکسازی ') !== false  ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$num = str_replace(['/rmsg ','پاکسازی '],'',$textmassage);
if ($num <= 200 && $num >= 1){
$add = $settings["information"]["added"];
if ($add == true) {
for($i=$message_id; $i>=$message_id-$num; $i--){
    bot('deletemessage',[
    'chat_id' => $chat_id,
    'message_id' =>$i,
]);
}
	bot('sendmessage',[
    'chat_id' => $chat_id,
    'text' =>"♻️ $num پیام اخیر با موفقیت پاکسازی شد.",
]);
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
    'chat_id' => $chat_id,
    'text'=>"#خطا ⚠️ عدد وارد شده باید بین 1 تا 200 باشد.",
]);
}
}
}
elseif($rt && $textmassage == "/del" or $rt && $textmassage == "del" or $rt && $textmassage == "حذف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	bot('deletemessage',[
	'chat_id'=>$chat_id,
	'message_id'=>$re_msgid
]);
	bot('deletemessage',[
	'chat_id'=>$chat_id,
	'message_id'=>$message_id
]);
}
}
elseif($rt && $textmassage=="/pin"  or $rt && $textmassage=="pin" or $rt && $textmassage=="سنجاق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✅ پیام با موفقیت #سنجاق شد.",
	'reply_to_message_id'=>$message_id,
]);
}
}
elseif($textmassage=="/unpin"  or  $textmassage=="unpin"  or  $textmassage=="حذف سنجاق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	bot('unpinChatMessage',[
	'chat_id'=>$chat_id,
	'message_id'=>$replyid
]);
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✅ پیام با موفقیت از حالت #سنجاق برداشته شد.",
	'reply_to_message_id'=>$message_id,
]);
}
}
elseif ($textmassage == "/automatic"  or $textmassage == "automatic" or $textmassage == "اتوماتیک فعال") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ قفل ها برای مدیریت خودکار گروه فعال شدند.
      
💥اکنون گروه به صورت خودکار در حال مدیریت است
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
    'reply_to_message_id'=>$message_id,
]);
$settings["lock"]["link"]="فعال ✅";
$settings["lock"]["username"]="فعال ✅";
$settings["lock"]["bot"]="فعال ✅";
$settings["lock"]["forward"]="فعال ✅";
$settings["lock"]["tgservices"]="فعال ✅";
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
}
elseif ($rt && $textmassage=="/report" or $rt && $textmassage=="report" or $rt && $textmassage=="ارسال گزارش" ) {
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "غیرفعال✖️") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
$result = $up['result'];
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ گزارش شما برای سازنده گروه ارسال شد.",
    'reply_to_message_id'=>$message_id,
]);
foreach($result as $key=>$value){
$found = $result[$key]['status'];
if($found == "creator"){
$owner = $result[$key]['user']['id'];
}
    bot('sendmessage',[
    'chat_id'=>$owner,
    'text'=>"✅ یک گزارش برای شما ارسال شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💢متن پیام گزارش شده در پیام زیر برای شما فوروارد میشود🔻🔻
━┅┄┄┄┄┄┄┄┄┄
📄 اطلاعات کابر ارسال کننده گزارش :

▪️نام : $first_name
▫️ایدی : $from_id
▫️یوزرنیم : @$username
━┅┄┄┄┄┄┄┄
💢 مشخصات گروه :

▪️نام گروه : $namegroup
▫️ایدی گروه : $chat_id
▫️لینک گروه : $getlinkde
━┅┄┄┄┄┄┄┄
📄 اطلاعات کابر خاطی :

▪️نام : $re_name
▫️ایدی : $re_id
▫️یوزرنیم : @$re_user
⁪",
]);
    bot('forwardMessage',[
    'chat_id'=>$owner,
    'from_chat_id'=>$chat_id,
    'message_id'=>$replyid,
]);
}
}
}

?>