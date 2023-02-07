<?php

if($textmassage=="/start" && $tc == "private" or $textmassage=="/panel" && $tc == "private"){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"▪️سلام ⧼ $first_name ⧽
▫️به #برترین ربات ضدلینک تلگرام خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️برای استفاده از ربات ، ربات را به گروه خودتون برده و ادمین کنید سپس دستور :

⧼ نصب رایگان ⧽ را در گروه  خودارسال کنید !

▫️بعد دستور پنل را بفرستید و گروه خود را مدیریت کنید !

💥برای دریافت رایگان ربات
💥دستور⧼ دریافت رایگان ⧽ را در پیوی ربات ارسال کنید.  
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️برای کسب #اطلاعات بیشتر از دکمه های زیر استفاده کنید.⁪",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"افزودن ربات به گروه",'url'=>"https://t.me/$usernamebot?startgroup=add"]
            ],
            [
                ['text'=>"کانال ربات",'url'=>"https://telegram.me/$channel"]
            ],
            [
                ['text'=>"پشتیبانی ربات",'url'=>"https://telegram.me/$sudo"]
            ],
			],
        ])
        ]);
}
elseif($textmassage=="برگشت ≫" && $tc == "private"){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'chat_id'=>$chat_id,
	'text'=>"💢 به بخش دریافت ربات رایگان خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💥شما با استفاده از این بخش میتوانید ربات را برای گروه خودتان به صورت رایگان دریافت کنید",
    'reply_markup'=>json_encode([
    'keyboard'=>[
			[
				['text'=>"📅 هفت روز رایگان"],['text'=>"👥 زیر مجموعه گیری"]
			],
			],
	'resize_keyboard'=>true
])
]);
$user["userjop"]["$from_id"]["file"]="none";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
}
elseif($textmassage=="دریافت رایگان" && $tc == "private"){
if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💢 به بخش دریافت ربات رایگان خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💥شما با استفاده از این بخش میتوانید ربات را برای گروه خودتان به صورت رایگان دریافت کنید",
    'reply_markup'=>json_encode([
    'keyboard'=>[
			[
				['text'=>"📅 هفت روز رایگان"],['text'=>"👥 زیر مجموعه گیری"]
			],
			],
	'resize_keyboard'=>true
])
]);
}
else{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💥برای استفاده از امکانات رایگان ربات شما باید ابتدا عضو کانال اطلاع رسانی ربات شوید
  
💢 سپس به ربات برگشته و مجدد امتحان کنید تا از امکانات فوق العاده ربات بهر مند شوید

▫️ادرس کانال : @$channel",
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
elseif($textmassage=="👥 زیر مجموعه گیری" && $tc == "private"){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💢 شما با استفاده از این بخش میتوانید با دعوت دیگران ربات رو به زمان بیش تری رایگان دریافت کنید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️از دکمه های زیر استفاده کنید🔻🔻",
    'reply_markup'=>json_encode([
    'keyboard'=>[
			[
			    ['text'=>"🔗 لینک دعوت من"],['text'=>"👤 اطلاعات حساب"]
			],
	        [
                ['text'=>"دریافت ربات [30 روز]"],['text'=>"دریافت ربات [15 روز]"]
	        ],
		    [
                ['text'=>"برگشت ≫"],['text'=>"دریافت ربات [60 روز]"]
	        ],
 	        ],
    'resize_keyboard'=>true
])
]);
}
elseif($textmassage=="🔗 لینک دعوت من" && $tc == "private"){
	bot('sendphoto',[
	'chat_id'=>$chat_id,
	'photo'=>new CURLFile("other/logo.jpg"),
	'caption'=>"💢 دوست داری گروهت رو 24 ساعته مدیریت کنی؟

💥از ربات های بی کیفیت خسته شدی؟

ربات رایگان ولی خوب برای مدیریت گروهت میخوای؟

🤖 کافیه بری ربات زیر :
https://telegram.me/$usernamebot?start=$from_id",
]);
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💢 بنر بالا حاوی لینک شخصی شماست بنر را برای دوستان و گروه های خود ارسال کنید و با دریافت زیر مجموعه ربات رایگان دریافت کنید
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
📄 برای اطلاع از تعداد حساب و میزان دعوت شما از دکمه حساب کاربری استفاده کنید",
]);
}
elseif($textmassage=="👤 اطلاعات حساب" && $tc == "private"){
$invite = $user["userjop"]["$from_id"]["invite"];
if($invite != false){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💢 اطلاعات حساب شما :
━┅┄┄┄┄┄┄┄┄┄

▪️نام : $first_name
▫️یوزرنیم : @$username
▫️ایدی : $from_id
▫️تعداد زیر مجموعه : $invite
⁪",
]);
}
else{
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💢 اطلاعات حساب شما :
━┅┄┄┄┄┄┄┄┄┄

▪️نام : $first_name
▫️یوزرنیم : @$username
▫️ایدی : $from_id
▫️تعداد زیر مجموعه : 0
⁪",
]);
}
}
elseif($textmassage=="دریافت ربات [15 روز]" && $tc == "private"){
$invite = $user["userjop"]["$from_id"]["invite"];
if($invite > 20){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💢 تبریک شما میتوانید رباترا برای 15 روز دریافت کنید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️لینک گروه خود را ارسال کنید",
            ]);
    bot('sendmessage',[
	'chat_id'=>$Dev[0],
	'text'=>"💢 یک کاربر توانست ربات رایگان دریافت کند به پشتیبانی متصل شد
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
📄 اطلاعات وی :

▪️نام : $first_name
▫️یوزرنیم : $username
▫️ایدی : $from_id
▫️تعداد زیر مجموعه : $invite
⁪",
]);
$plusinvite = $invite - 20;
$user["userjop"]["$from_id"]["invite"]=$plusinvite;
$user["userjop"]["$from_id"]["file"]="sup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
}
else{
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💢 شما هنوز زیر مجموعه کافی برای دریافت ربات ندارید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️باید 20 نفر را به ربات دعوت کنید",
]);
}
}
elseif($textmassage=="دریافت ربات [30 روز]" && $tc == "private"){
$invite = $user["userjop"]["$from_id"]["invite"];
if($invite > 40){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💢 تبریک شما میتوانید رباترا برای 30 روز دریافت کنید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️لینک گروه خود را ارسال کنید",
]);
	bot('sendmessage',[
	'chat_id'=>$Dev[0],
	'text'=>"💢 یک کاربر توانست ربات رایگان دریافت کند به پشتیبانی متصل شد
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
📄 اطلاعات وی :

▪️نام : $first_name
▫️یوزرنیم : $username
▫️ایدی : $from_id
▫️تعداد زیر مجموعه : $invite
⁪",
            ]);
$plusinvite = $invite - 40;
$user["userjop"]["$from_id"]["invite"]=$plusinvite;
$user["userjop"]["$from_id"]["file"]="sup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
}
else{
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💢 شما هنوز زیر مجموعه کافی برای دریافت ربات ندارید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️باید 40 نفر را به ربات دعوت کنید",
]);
}
}
elseif($textmassage=="دریافت ربات [60 روز]" && $tc == "private"){
$invite = $user["userjop"]["$from_id"]["invite"];
if($invite > 60){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💢 تبریک شما میتوانید رباترا برای 60 روز دریافت کنید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️لینک گروه خود را ارسال کنید",
]);
	bot('sendmessage',[
	'chat_id'=>$Dev[0],
	'text'=>"💢 یک کاربر توانست ربات رایگان دریافت کند به پشتیبانی متصل شد
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
📄 اطلاعات وی :

▪️نام : $first_name
▫️یوزرنیم : $username
▫️ایدی : $from_id
▫️تعداد زیر مجموعه : $invite
⁪",
]);
$plusinvite = $invite - 60;
$user["userjop"]["$from_id"]["invite"]=$plusinvite;
$user["userjop"]["$from_id"]["file"]="sup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
}
else{
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💢 شما هنوز زیر مجموعه کافی برای دریافت ربات ندارید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️باید 60 نفر را به ربات دعوت کنید",
]);
}
}
elseif(strpos($textmassage , '/start ') !== false && $tc == "private") {
$from = str_replace("/start ","",$textmassage);
@$user = json_decode(file_get_contents("data/user.json"),true);
if(in_array($from_id, $user["userlist"])) {
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💢 شما قبلا عضو ربات شده اید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️از دکمه های زیر استفاده کن🔻🔻",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"افزودن ربات به گروه",'url'=>"https://t.me/$usernamebot?startgroup=add"]
            ],
            [
                ['text'=>"کانال ربات",'url'=>"https://telegram.me/$channel"]
            ],
            [
                ['text'=>"پشتیبانی ربات",'url'=>"https://telegram.me/$sudo"]
            ],
			],
        ])
        ]);
}
else{
$invite = $user["userjop"]["$from"]["invite"];
$plusinvite = $invite + 1;	
	bot('sendmessage',[
	'chat_id'=>$from,
	'text'=>"💢 یک کابر با لینک دعوت شما وارد ربات شد.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
تعداد افرادی که دعوت کرده اید : $plusinvite",
]);
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"▪️سلام ⧼ $first_name ⧽
▫️به #برترین ربات ضدلینک تلگرام خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️برای استفاده از ربات ، ربات را به گروه خودتون برده و ادمین کنید سپس دستور :

⧼ نصب رایگان ⧽ را در گروه  خودارسال کنید !

▫️بعد دستور پنل را بفرستید و گروه خود را مدیریت کنید !

💥برای دریافت رایگان ربات
💥دستور⧼ دریافت رایگان ⧽ را در پیوی ربات ارسال کنید.  
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️برای کسب #اطلاعات بیشتر از دکمه های زیر استفاده کنید.⁪",
    'reply_markup'=>json_encode([
    'keyboard'=>[
			[
                ['text'=>"دریافت رایگان"]
			],
            [
                ['text'=>"📄 راهنما"],['text'=>"پشتیبانی"]
			],
			],
    'resize_keyboard'=>true
])
]);
$user["userjop"]["$from"]["invite"]=$plusinvite;
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif($textmassage=="📅 هفت روز رایگان" && $tc == "private"){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✨شما با استفاده از این بخش میتوانید برای گروه خودت ربات مدیریت گروه با تمام امکانات دریافت کنید

💢 قبل از دریافت ربات به نکات زیر توجه داشته باشید
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▪️تنها مدیران اجازه اضافه کردن ربات به گروه رو دارند

▫️دریافت ربات با تمام امکانات به صورت رایگان  برای 7 روز است

▫️ربات باید حتما در گروه ادمین باشد تا بتواند به صورت کامل عمل کند

▫️تعداد اعضا باید بیش تر از 10 نفر باشد

⚠️ تمام دسترسی ها یک ادمین را به ربات بدهید
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
💢 اموزش افزودن ربات به گروه به صورت متنی :

▪️ابتدا با استفاده از دکمه زیر ربات را به گروه خود اضافه کنید

▫️سپس ربات را ادمین با دسترسی کامل کنید

▫️با ارسال دستور نصب رایگان

ربات برای شما برای 7 روز فعال میشود

▫️سپس با ارسال دستور پنل و یا راهنما
اقدام به انجام تنظیمات ربات کنید.
⁪",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
            [
                ['text'=>"افزودن ربات به گروه",'url'=>"https://t.me/$usernamebot?startgroup=add"]
            ],
            ]
])
]);
}
elseif($textmassage=="پشتیبانی" && $tc == "private"){
		bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"💢 نظرات شما باعث دلگرمی ماست.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
📄 انتفادات پیشنهادات و نظرات خود را برای ما ارسال کنید
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️پیام خود را وارد کنید",
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
            [
                ['text'=>"برگشت ≫"]
	        ],
	        ]
])
]);
$user["userjop"]["{$from_id}"]["file"]="sup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
}
elseif($update->message && $rt && in_array($from_id,$Dev) && $tc == "private"){
	bot('sendmessage',[
    "chat_id"=>$chat_id,
    "text"=>"✅ پیام شما برای فرد ارسال شد."
]);
	bot('sendmessage',[
    "chat_id"=>$reply,
    "text"=>"👤پاسخ پشتیبان برای شما :
    
`$textmassage`",
'parse_mode'=>'MarkDown'
]);
}

//------------------------- Management -----------------------------

if($textmassage=="panel admin" or $textmassage=="مدیریت"){
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"💢 ادمین عزیز به پنل مدریت ربات خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️لطفا از دکمه های زیر برای مدیریت گروه ها  استفاده کنید🔻🔻",
    'reply_to_message_id'=>$message_id,
	'reply_markup'=>json_encode([
    'keyboard'=>[
            [
                ['text'=>"مدیریت گروه ها"],['text'=>"امار ربات"]
            ],
            [
                ['text'=>"فوروارد به گروه"],['text'=>"فوروارد به کاربران"]
            ],
            [
                ['text'=>"ارسال به گروه ها"],['text'=>"ارسال به کابران"]  
            ],
            ],
    'resize_keyboard'=>true
])
]);
}
}
}
elseif($textmassage=="panel admin" or $textmassage=="برگشت به مدیریت ≫"){
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"💢 ادمین عزیز به پنل مدریت ربات خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️لطفا از دکمه های زیر برای مدیریت گروه ها  استفاده کنید🔻🔻",
    'reply_to_message_id'=>$message_id,
	'reply_markup'=>json_encode([
    'keyboard'=>[
            [
                ['text'=>"مدیریت گروه ها"],['text'=>"امار ربات"]
            ],
            [
                ['text'=>"فوروارد به گروه"],['text'=>"فوروارد به کاربران"]
            ],
            [
                ['text'=>"ارسال به گروه ها"],['text'=>"ارسال به کابران"]  
            ],
            ],
    'resize_keyboard'=>true
])
]);
}
}
}
elseif($textmassage=="panel group" or $textmassage=="مدیریت گروه ها"){
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"💢 ادمین عزیز به پنل مدریت گروه ها خوش آمدید.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
▫️لطفا از دکمه های زیر برای مدیریت گروه ها  استفاده کنید🔻🔻",
    'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
    'keyboard'=>[
            [
                ['text'=>"لیست گروه ها"],['text'=>"خروج ربات از گروه"]
            ],
            [
                ['text'=>"برگشت به مدیریت ≫"] 
            ]
            ],
    'resize_keyboard'=>true
])
]);
}
}
}
elseif($textmassage=="لیست گروه ها" ){
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
	bot('senddocument',[
	'chat_id'=>$chat_id,
	'document'=>new CURLFile("data/group.txt"),
	'caption'=>"💢 لیست گروه های ربات",
	'reply_to_message_id'=>$message_id,
]);
}
}
}
elseif($textmassage=="خروج ربات از گروه" ){
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"💢 ادمین عزیز جهت خروج ربات ار گروه مورد نظر میتوانید از دستور :
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
left ایدی گروه
یا
ترک ایدی گروه

استفاده کنید ✅
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
مثال : left -1041062087444",
    'reply_to_message_id'=>$message_id,
]);
}
}
}
elseif(strpos($textmassage , "ترک " ) !== false or strpos($textmassage , "leave " ) !== false) {
$text = str_replace(['/left ','ترک '],'',$textmassage);
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"🤖 ربات از گروه با ایدی :

$text

خارج شد ✅",
]);
    bot('LeaveChat',[
    'chat_id'=>$text,
]);
unlink("data/$text.json");
}
}
}
elseif($textmassage=="امار ربات"){
$users = count($user["userlist"]);
$group = count($user["grouplist"]);
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🤖 آمار ربات شما :

👥 تعداد گروه ها : $group

👤 تعداد کاربران : $users
",
    'hide_keyboard'=>true,
]);
}
elseif ($textmassage == 'ارسال به کابران' && in_array($from_id,$Dev)) {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"📄 لطفا متن خود را ارسال کنید.",
	'reply_to_message_id'=>$message_id,
	'reply_markup'=>json_encode([
    'keyboard'=>[
            [
                ['text'=>"برگشت به مدیریت ≫"] 
            ]
            ],
    'resize_keyboard'=>true
])
]);
$user["userjop"]["$from_id"]["file"]="senduser";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($textmassage == 'ارسال به گروه ها' && in_array($from_id,$Dev)) {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"📄 لطفا متن خود را ارسال کنید.",
	'reply_to_message_id'=>$message_id,
	'reply_markup'=>json_encode([
    'keyboard'=>[
            [
                ['text'=>"برگشت به مدیریت ≫"] 
            ]
            ],
    'resize_keyboard'=>true
])
]);
$user["userjop"]["$from_id"]["file"]="sendgroup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($textmassage == 'فوروارد به گروه' && in_array($from_id,$Dev)) {
     bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"📄 لطفا متن خود را ارسال کنید.",
	'reply_to_message_id'=>$message_id,
	'reply_markup'=>json_encode([
    'keyboard'=>[
            [
                ['text'=>"برگشت به مدیریت ≫"] 
            ]
            ],
    'resize_keyboard'=>true
])
]);
$user["userjop"]["$from_id"]["file"]="forwardgroup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($textmassage == 'فوروارد به کاربران' && in_array($from_id,$Dev)) {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"📄 لطفا متن خود را فوروارد کنید.",
	'reply_to_message_id'=>$message_id,
	'reply_markup'=>json_encode([
    'keyboard'=>[
            [
                ['text'=>"برگشت به مدیریت ≫"] 
            ]
            ],
    'resize_keyboard'=>true
])
]);
$user["userjop"]["$from_id"]["file"]="forwarduser";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif (strpos($textmassage , "/banall ") !== false or strpos($textmassage , "مسدود همگانی ") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['/banall ','مسدود همگانی '],'',$textmassage);
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ فرد مسدود همگانی شد.
      
💢 اطلاعات کاربر :
▪️نام : $name
▫️یوزرنیم : @$username
▫️ایدی : $id
⁪",
    'reply_to_message_id'=>$message_id,
]);
$user["banlist"][]="$text";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif (strpos($textmassage , "/unbanall ") !== false or strpos($textmassage , "ازاد همگانی ") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['/unbanall ','ازاد همگانی '],'',$textmassage);
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ فرد از مسدودیت همگانی آزاد شد.
      
💢 اطلاعات کاربر :
▪️نام : $name
▫️یوزرنیم : @$username
▫️ایدی : $id
⁪",
    'reply_to_message_id'=>$message_id,
]);
$key = array_search($text,$user["banlist"]);
unset($user["banlist"][$key]);
$user["banlist"] = array_values($user["banlist"]); 
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif($textmassage == "/banlist"  or $textmassage == "banlist" or $textmassage == "لیست مسدود همگانی") {
if ( in_array($from_id,$Dev)) {
$silent = $user["banlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result.$silent[$z]."\n";
}
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📄 لیست مسدود همگانی : 
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄

$result",
    'reply_to_message_id'=>$message_id,
]);
}
}
elseif ($tc == 'private'){ 
if(in_array($from_id, $user["banlist"])) {
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🚫شما به خاطر رعایت نکردن قوانین از ربات مسدود شدید.

▫️لطفا پیام دوباره ارسال نکنید",
    'reply_markup'=>json_encode(['KeyboardRemove'=>[
],
    'remove_keyboard'=>true
])
]);
}
}
elseif ($tc == 'group' | $tc == 'supergroup'){ 
if(in_array($from_id, $user["banlist"])) {
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
]);
}
}
if($user["userjop"]["$from_id"]["file"] == "sup"&& $tc == "private"){   
if ($textmassage != "برگشت به مدیریت ≫") {	
    bot('ForwardMessage',[
    'chat_id'=>$Dev[0],
    'from_chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
    bot('sendmessage',[       
	'chat_id'=>$chat_id,
	'text'=>"✅ نظر شما ارسال شد.
با تشکر از شما",
]);	
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'forwarduser') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($textmassage != "برگشت به مدیریت ≫") {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ پیام با موفقیت ارسال شد.️",
	'reply_to_message_id'=>$message_id,
]);
for($z = 0;$z <= count($numbers)-1;$z++){
Forward($numbers[$z], $chat_id,$message_id);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'forwardgroup') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["grouplist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($textmassage != "برگشت به مدیریت ≫") {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ پیام با موفقیت ارسال شد.️",
	'reply_to_message_id'=>$message_id,
]);
for($z = 0;$z <= count($numbers)-1;$z++){
Forward($numbers[$z], $chat_id,$message_id);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'sendgroup') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["grouplist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($textmassage != "برگشت به مدیریت ≫") {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ پیام با موفقیت ارسال شد.️",
	'reply_to_message_id'=>$message_id,
]);
for($z = 0;$z <= count($numbers)-1;$z++){
    bot('sendmessage',[
    'chat_id'=>$numbers[$z],        
	'text'=>"$textmassage",
]);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'senduser') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($textmassage != "برگشت به مدیریت ≫") {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ پیام با موفقیت ارسال شد.️",
	'reply_to_message_id'=>$message_id,
]);
for($z = 0;$z <= count($numbers)-1;$z++){
    bot('sendmessage',[
    'chat_id'=>$numbers[$z],        
	'text'=>"$textmassage",
]);
}
}
}

?>