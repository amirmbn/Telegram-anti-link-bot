<?php

//------------------------- Charge -----------------------------

if(strpos($textmassage , "/charge ") !== false && in_array($from_id,$Dev) or strpos($textmassage , "شارژ ") !== false && in_array($from_id,$Dev)) {
$num = str_replace(['/charge ','شارژ '],'',$textmassage);
if ($num <= 1000 && $num >= 1){
date_default_timezone_set('Asia/Tehran');
$date1 = date('Y-m-d', time());
$date2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($date2 ." +$num day"));
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ شارژ گروه با موفقیت به $num روز دیگر تنظیم شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
📅 تاریخ امروز : $date1

📆 تاریخ اتمام شارژ : $next_date
━┅┄┄┄┄┄┄┄┄┄
💥اطلاعات گروه :

💭نام گروه : $namegroup

🔍ایدی گروه : $chat_id

━┅┄┄┄┄┄┄┄┄┄
🎗توسط : @$username",
    'reply_to_message_id'=>$message_id,
]);
$settings["information"]["expire"]="$next_date";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else{
    bot('sendmessage',[
    'chat_id' => $chat_id,
    'text'=>"خطا ⚠️
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💭عدد وارد شده باید بین 1 تا 1000 باشد",
    'reply_to_message_id'=>$message_id,
]);
}
}
elseif($textmassage == "اعتبار" or $textmassage == "check"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
date_default_timezone_set('Asia/Tehran');
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
    bot('sendmessage', [
    "chat_id" => $chat_id,
    "text" => "💢به بخش میزان شارژ گروه خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
📄اطلاعات گروه شما :

▪️نام گروه : $namegroup

▫️ایدی گروه : $chat_id

▪️تاریخ امروز : $date3
━┅┄┄┄┄┄┄┄┄┄
▫️اطلاعات تاریخ انقضای گروه🔻🔻
⁪",
    'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'inline_keyboard'=>[
	[
		['text'=>"شارژ گروه : $endtime روز",'callback_data'=>'text']
	],
	[
		['text'=>"تاریخ اتمام شارژ : $ndate",'callback_data'=>'text']
	],
	[
		['text'=>"خروج",'callback_data'=>'exit']
	],
	]
        ])
        ]);
}
}
elseif($data=="charge"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
date_default_timezone_set('Asia/Tehran');
$date3 = date('Y-m-d');
$date2 = date('d');
$date1 = date('m');
$ndate = $settings2["information"]["expire"];
$rdate = $settings2["information"]["dataadded"];
$gettime2 = date('d', strtotime($ndate));
$gettime1 = date('m', strtotime($ndate));
$gettime = $gettime1 - $date1 ;
$gettime2 = $gettime2 - $date2 ;
$ingettime = $gettime * 30 ;
$endtime = $ingettime + $gettime2 ;
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"💢به بخش میزان شارژ گروه خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
📄اطلاعات گروه شما :

▪️نام گروه : $namegroup

▫️ایدی گروه : $chat_id

▪️تاریخ امروز : $date3
━┅┄┄┄┄┄┄┄┄┄
▫️اطلاعات تاریخ انقضای گروه🔻🔻
⁪",
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'inline_keyboard'=>[
	[
		['text'=>"شارژ گروه : $endtime روز",'callback_data'=>'text']
	],
	[
		['text'=>"تاریخ اتمام شارژ : $ndate",'callback_data'=>'text']
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
elseif(strpos($textmassage , "/sendcharge ") !== false && in_array($from_id,$Dev) or strpos($textmassage , "ارسال شارژ ") !== false && in_array($from_id,$Dev)) {
$panels = str_replace(['/sendcharge ','ارسال شارژ '],'',$textmassage);
$modified = ltrim($panels);
$jam = "$modified";
date_default_timezone_set('Asia/Tehran');
$date1 = date('Y-m-d', time());
$date2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($date2 ." +30 day"));
	bot('sendmessage',[
	'chat_id'=>$panels,
	'text'=>"✅ گروه با موفقیت 30 روز شارژ شد."
]);
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✅ گروه مورد نظر با موفقیت 30 روز شارژ شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️ایدی گروه : [$panels]

▫️تاریخ امروز : [$date1]

▫️تاریخ انقضای شارژ گروه : [$next_date]
━┅┄┄┄┄┄┄┄┄┄
🎗توسط : [ @$username ]",
	'reply_to_message_id'=>$message_id,
]);
@$getsettings = file_get_contents("data/$jam.json");
@$settings = json_decode($getsettings,true);
$settings["information"]["expire"]="$next_date";
$settings = json_encode($settings,true);
file_put_contents("data/$jam.json",$settings);
}
elseif($textmassage == "/request" or $textmassage == "درخواست شارژ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$ndate = $settings["information"]["expire"];
$rdate = $settings["information"]["dataadded"];
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'reply_to_message_id'=>$message_id,
    'text'=>"✅ درخواست شما برای شارژ گروه ارسال شد لطفا با پشتیبانی در ارتباط باشید.",
]);
    bot('sendmessage',[
    'chat_id'=>$Dev[0],
    'text'=>"💢 گروه ⧼ $namegroup ⧽ تقاظایی شارژ گروه کرده اند.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️تاریخ ثبت ربات : $rdate
▫️تاریخ اتمام شارژ گروه : $ndate
━┅┄┄┄┄┄┄┄┄┄
💥مشخصات فرد ارسال کننده :
▫️نام : $first_name
▫️یوزرنیم : @$username
▪️ایدی : $from_id
━┅┄┄┄┄┄┄┄┄┄
💥مشخصات گروه :
▫️ایدی گروه : $chat_id
▫️لینک گروه : $getlinkde",
]);
}
}
elseif(file_exists("data/$from_id.txt") && $tc == "private"){
date_default_timezone_set('Asia/Tehran');
$date1 = date('Y-m-d', time());
$date2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($date2 ." +30 day"));
	bot('sendmessage',[
    "chat_id"=>$chat_id,
    "text"=>"✅ گروه شما با موفقیت شارژ شد"
]);
	bot('sendmessage',[
    "chat_id"=>$textmassage,
    "text"=>"✅ شارژ با موفقیت برای این گروه خریداری شد"
]);
$settings = json_decode(file_get_contents("data/$textmassage.json"),true);
$settings["information"]["expire"]="$next_date";
$settings["information"]["charge"]="30 روز";
$settings = json_encode($settings,true);
file_put_contents("data/$textmassage.json",$settings);
unlink("data/$from_id.txt");
}
date_default_timezone_set('Asia/Tehran');
$date4 = date('Y-m-d', time());
if ($tc == 'group' | $tc == 'supergroup'){ 
if($settings["information"]["expire"] != false){
if($date4 > $settings["information"]["expire"]){
	bot('sendmessage',[
    'chat_id'=>$Dev[0],
    'text'=>"💢 شارژ یک گروه به پایان رسید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💭ربات این گروه را ترک کرد
━┅┄┄┄┄┄┄┄┄┄
📄اطلاعات گروه :

▪️نام گروه : [$namegroup]

▫️ایدی گروه : [$chat_id]
⁪",
]); 
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"💢 شارژ این گروه به پایان رسید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💭ربات این گروه را ترک میکند
━┅┄┄┄┄┄┄┄┄┄
📄اطلاعات گروه شما :

▪️نام گروه : [$namegroup]

▫️ایدی گروه : [$chat_id]

🔍دیگر پیام های این گروه بررسی نمیشود
⁪",
]);
    bot('LeaveChat', [
    'chat_id' =>$chat_id,
]);
}
}
}
elseif($data=="requstcheck"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chatid");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$ndate = $settings2["information"]["expire"];
$charge = $settings2["information"]["charge"];
$rdate = $settings2["information"]["dataadded"];
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
    'text'=>"✅ درخواست شما برای پشتیبانی ارسال شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
به زودی پشتیبان درخواست شمارا برسی میکند.",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
		['text'=>"برگشت ≫",'callback_data'=>'groupe']
	],
	]
        ])
        ]);
    bot('sendmessage',[
    'chat_id'=>$Dev[0],
    'text'=>"💢 گروه ⧼ $namegroup ⧽ تقاظایی شارژ گروه کرده اند.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️تاریخ ثبت ربات : $rdate
▫️تاریخ اتمام شارژ گروه : $ndate
━┅┄┄┄┄┄┄┄┄┄
💥مشخصات فرد ارسال کننده :
▫️نام : $first_name
▫️یوزرنیم : @$username
▪️ایدی : $from_id
━┅┄┄┄┄┄┄┄┄┄
💥مشخصات گروه :
▫️ایدی گروه : $chat_id
▫️لینک گروه : $getlinkde",
]);		   
}
else{
	bot('answerCallbackQuery',[
	'callback_query_id'=>$membercall,
	'text'=>"شما مدیر ربات نیستید ⚠️",
]);
}
}

//------------------------- Bot Chat -----------------------------

if($textmassage=="ping" or $textmassage=="پینگ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$ping = pingDomain($_SERVER['HTTP_HOST']);
$array = ["2.0","2.1","2.2","2.3","2.4","2.5","2.6","2.7","2.8","2.9","3.0","3.1","3.2","3.3","3.4","3.5","3.6","3.7","3.8"];
$rand = array_rand($array);
$teleping = $array[$rand] + $ping;
	bot('sendVideoNote',[
	'chat_id'=>$chat_id,
	'video_note'=>new CURLFile("other/ping.mp4"),
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
		[
			['text'=>"پینگ سرور : $ping میلی ثانیه",'callback_data'=>'text']
		],
		[
			['text'=>"پینگ به تلگرام : $teleping میلی ثانیه",'callback_data'=>'text']
		],
	]
        ])
]);
} 
}
elseif($textmassage=="robot" or $textmassage=="ربات"){
if (in_array($from_id,$Dev)){
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"☑️ Bot is Online...",
    'reply_to_message_id'=>$message_id,
]);
}
else{
if ($status == 'creator' or $status == 'administrator'){
$array = ["آنلاینم عـزیـزم ..‼️...","آنلاینم.!!.و حواسم به گروه هست","جوون 🥰 تو فقط صدام کن","انقد صدام نکن😐سر پستم.","بله..!.!!..کارم داشتی؟؟"];
$rand = array_rand($array);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"$array[$rand]",
    'reply_to_message_id'=>$message_id,
]);
}
}
}
elseif($textmassage=="clock" or $textmassage=="ساعت"){
date_default_timezone_set('Asia/Tehran');
$date1 = date("H:i:s");
$date2 = date('d-m-Y', time());
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"⏱ ساعت : $date1
📆 تاریـخ : $date2
━┅┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
    'reply_to_message_id'=>$message_id,
]);
}
elseif($textmassage=="bot"){
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"☑️ Bot is Online...",
    'reply_to_message_id'=>$message_id,
]);
}
elseif($rt && $textmassage =="/id" or $rt && $textmassage =="ایدی" or $rt && $textmassage =="id" or $rt && $textmassage =="آیدی"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "غیرفعال✖️") {
$getuserprofile = getUserProfilePhotos($token,$re_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[0][0]->file_id;
if ($getuserphoto != false) {
    bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>$getuserphoto,
    'caption'=>"💢 نام : $re_name

🎗یوزرنیم : @$re_user

▪️ایدی : $re_id

▫️ایدی گروه : $chat_id
⁪",
    'reply_to_message_id'=>$message_id,
]);
}
}
else{
    bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>new CURLFile("other/nophoto.png"),
    'caption'=>"💢 نام : $re_name

🎗یوزرنیم : @$re_user

▪️ایدی : $re_id

▫️ایدی گروه : $chat_id
⁪",
    'reply_to_message_id'=>$message_id,
]);
}
}
else{
$getuserprofile = getUserProfilePhotos($token,$re_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[0][0]->file_id;
    bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>$getuserphoto,
    'caption'=>"💢 نام : $re_name

🎗یوزرنیم : @$re_user

▪️ایدی : $re_id

▫️ایدی گروه : $chat_id
⁪⁪",
    'reply_to_message_id'=>$message_id,
]);
}
}
elseif($textmassage=="/id" or $textmassage=="ایدی" or $textmassage=="id" or $textmassage=="آیدی"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "غیرفعال✖️") {
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[0][0]->file_id;
if ($getuserphoto != false) {
    bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>$getuserphoto,
    'caption'=>"💢 نام شما : $first_name

🎗یوزرنیم : @$username

▪️ایدی : $from_id

▫️ایدی گروه : $chat_id
⁪",
    'reply_to_message_id'=>$message_id,
]);
}
}
else{
    bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>new CURLFile("other/nophoto.png"),
    'caption'=>"💢 نام شما : $first_name

🎗یوزرنیم : @$username

▪️ایدی : $from_id

▫️ایدی گروه : $chat_id
⁪",
    'reply_to_message_id'=>$message_id,
]);
}
}
else{
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[0][0]->file_id;
    bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>$getuserphoto,
    'caption'=>"💢 نام شما : $first_name

🎗یوزرنیم : @$username

▪️ایدی : $from_id

▫️ایدی گروه : $chat_id
⁪",
    'reply_to_message_id'=>$message_id,
]);
}
}
elseif(strpos($textmassage ,"/getpro ") !== false or strpos($textmassage ,"عکس پروفایل ") !== false) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "غیرفعال✖️") {
$text = str_replace(['/getpro ','عکس پروفایل '],'',$textmassage);
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[$text - 1][0]->file_id;
if ($getuserphoto != false) {
    bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>$getuserphoto,
    'caption'=>"💢 نام شما : $first_name
▫️یوزرنیم : @$username
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🌠 شماره عکس پروفایل : $text
🖼 تعداد عکس پروفایل : $cuphoto
⁪",
    'reply_to_message_id'=>$message_id,
]);
}
}
else{
	bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>new CURLFile("other/nophoto.png"),
    'caption'=>"ایدی : $from_id
یوزرنیم : @$username
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🖼 تعداد عکس پروفایل : $cuphoto
⁪",
    'reply_to_message_id'=>$message_id,
]);
}
}
else{
$text = str_replace(['/getpro ','عکس پروفایل '],'',$textmassage);
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[$text - 1][0]->file_id;
    bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>$getuserphoto,
    'caption'=>"💢 نام شما : $first_name
▫️یوزرنیم : @$username
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🌠 شماره عکس پروفایل : $text
🖼 تعداد عکس پروفایل : $cuphoto
⁪",
    'reply_to_message_id'=>$message_id,
]);
}
}
elseif($textmassage=="/info" && $rt or $textmassage=="اطلاعات" && $rt or $textmassage=="info" && $rt){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "غیرفعال✖️") {
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📄 اطلاعات :
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💢 نام : [$re_name]
▫️ایدی : [$re_id]
▫️یوزرنیم : [@$re_user]
🖼 تعداد عکس پروفایل : [$cuphoto]
━┅┄┄┄┄┄┄┄┄┄
🔗لینک : http://t.me/$re_user",
    'reply_to_message_id'=>$message_id,
]);
}
}
else{
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📄 اطلاعات :
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💢 نام : [$re_name]
▫️ایدی : [$re_id]
▫️یوزرنیم : [@$re_user]
🖼 تعداد عکس پروفایل : [$cuphoto]
━┅┄┄┄┄┄┄┄┄┄
🔗لینک : http://t.me/$re_user",
    'reply_to_message_id'=>$message_id,
]);
}
}
elseif($textmassage=="/info"  or $textmassage=="اطلاعات"  or $textmassage=="info" ){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "غیرفعال✖️") {
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📄 اطلاعات :
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💢 نام گروه : $namegroup
▫️ایدی گروه : $chat_id
▫️تعداد پیام ها : $tedadmsg
🏷نوع گروه : $tc
━┅┄┄┄┄┄┄┄┄┄
💢 نام شما : $first_name
▫️ایدی شما : $from_id
▫️یوزرنیم  شما : @$username
🖼 تعداد عکس پروفایل : $cuphoto
━┅┄┄┄┄┄┄┄┄┄
🔗لینک شما : http://t.me/$username",
	'reply_to_message_id'=>$message_id,
]);
}
}
else{
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📄 اطلاعات :
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💢 نام گروه : $namegroup
▫️ایدی گروه : $chat_id
▫️تعداد پیام ها : $tedadmsg
🏷نوع گروه : $tc
━┅┄┄┄┄┄┄┄┄┄
💢 نام شما : $first_name
▫️ایدی شما : $from_id
▫️یوزرنیم  شما : @$username
🖼 تعداد عکس پروفایل : $cuphoto
━┅┄┄┄┄┄┄┄┄┄
🔗لینک شما : http://t.me/$username",
    'reply_to_message_id'=>$message_id,
]);
}
}
elseif ( strpos($textmassage , '/setname ') !== false or strpos($textmassage , 'تنظیم نام ') !== false  ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$newname= str_replace(['/setname ','تنظیم نام '],'',$textmassage);
    bot('setChatTitle',[
    'chat_id'=>$chat_id,
    'title'=>$newname
]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ نام گروه تعویض شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💥نام جدید : $newname

🆔 @$channel",
    'reply_to_message_id'=>$message_id,
]);
}
}
elseif ( strpos($textmassage , '/setdescription ') !== false or strpos($textmassage , 'تنظیم اطلاعات ') !== false  ) {
$newdec= str_replace(['/setdescription ','تنظیم اطلاعات '],'',$textmassage);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
    bot('setChatDescription',[
    'chat_id'=>$chat_id,
    'description'=>$newdec
]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ اطلاعات جدید گروه با موفقیت تغییر کرد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
    'reply_to_message_id'=>$message_id,
]);
}
}
elseif($textmassage=="/delphoto" or $textmassage=="delphoto" or $textmassage=="حذف عکس"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
    bot('deleteChatPhoto',[
    'chat_id'=>$chat_id,
]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ عکس گروه با موفقیت حذف شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
    'reply_to_message_id'=>$message_id,
]);
}
}
elseif($textmassage=="/setphoto" or $textmassage=="setphoto" or $textmassage=="تنظیم عکس"){

if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$photo = $update->message->reply_to_message->photo;
$file = $photo[count($photo)-1]->file_id;
$get = bot('getfile',['file_id'=>$file]);
$getchat = json_decode($get, true);
$patch = $getchat["result"]["file_path"];
file_put_contents("data/photogp.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
    bot('setChatPhoto',[
    'chat_id'=>$chat_id,
    'photo'=>new CURLFile("data/photogp.png")
]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ عکس گروه با موفقیت تغییر کرد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
🆔 @$channel",
    'reply_to_message_id'=>$message_id,
]);
unlink("data/photogp.png");
}
}

?>
