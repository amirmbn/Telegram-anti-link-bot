<?php

if ($settings["lock"]["link"] == "فعال ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
if (strstr($textmassage,"t.me") == true or strstr($textmassage,"telegram.me") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}
if ($settings["lock"]["photo"] == "فعال ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
if ($update->message->photo){  
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}
if ($settings["lock"]["gif"] == "فعال ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
if ($update->message->document){  
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}
if ($settings["lock"]["document"] == "فعال ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
if ($update->message->document){  
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}
if ($settings["lock"]["video"] == "فعال ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
if ($update->message->video){  
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}
if ($editgetsettings["lock"]["edit"] == "فعال ✅"){
if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev){
if ($update->edited_message->text){  
    bot('deletemessage',[
    'chat_id'=>$chat_edit_id,
    'message_id'=>$message_edit_id
]);
}
}
}
if ($settings["lock"]["contact"] == "فعال ✅"){
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}
}
if ($settings["lock"]["tag"] == "فعال ✅"){
if (strstr($textmassage,"#") == true or strstr($caption,"#") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}
}
if ($settings["lock"]["username"] == "فعال ✅"){
if (strstr($textmassage,"@") == true or strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}
}
if ($settings["lock"]["audio"] == "فعال ✅"){
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}
}
if ($settings["lock"]["voice"] == "فعال ✅"){
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}
}
if ($settings["lock"]["bot"] == "فعال ✅"){
if ($message->new_chat_member->is_bot) {
$hardmodebot = $settings["information"]["hardmodebot"];
if($hardmodebot == "غیرفعال✖️"){
    bot('kickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$update->message->new_chat_member->id
]);
}
else{
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
    bot('kickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$update->message->new_chat_member->id
]);
    bot('kickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
]);
}
}
}
}
if ($settings["lock"]["sticker"] == "فعال ✅"){
if($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}
}
if ($settings["lock"]["forward"] == "فعال ✅"){
if($update->message->forward_from | $update->message->forward_from_chat){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
]);
}
}
}
}
if ($settings["lock"]["fosh"] == "فعال ✅"){
if (strstr($textmassage,"کسده") == true  or strstr($textmassage,"جنده") == true or strstr($textmassage,"کیر") == true  or  strstr($textmassage,"سکسی") == true   or strstr($textmassage,"ناموس") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}
}
if ($settings["lock"]["reply"] == "فعال ✅"){
if($update->message->reply_to_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
]);
}
}
}
}
if ($settings["lock"]["tgservic"] == "فعال ✅"){
if($update->message->new_chat_member | $update->message->new_chat_photo | $update->message->new_chat_title | $update->message->left_chat_member | $update->message->pinned_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
]);
}
}
}
}
if ($settings["lock"]["text"] == "فعال ✅"){
if($update->message->text){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
]);
}
}
}
}
if ($settings["lock"]["video_msg"] == "فعال ✅"){
if($update->message->video_note){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ) {
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
]);
}
}
}
}
if ($settings["lock"]["game"] == "فعال ✅"){
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}
}
if ($settings["lock"]["location"] == "فعال ✅"){
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}
}
if ($settings["lock"]["stickeranimated"] == "| فعال | ✅"){
    $parsa002=$update->message->sticker->is_animated;
if($parsa002 == true){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
]);
}
}
}
if ($settings["lock"]["mute_all"] == "فعال ✅"){
if($update->message){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
]);
}
}
}
if ($settings["lock"]["mute_all_time"] == "فعال ✅"){
$locktime = $settings["information"]["mute_all_time"];
date_default_timezone_set('Asia/Tehran');
$date1 = date("h:i:s");
if($date1 < $locktime){
if($update->message){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
]);
}
else{
$settings["lock"]["mute_all_time"]="غیرفعال✖️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
if ($settings["lock"]["lockcharacter"] == "فعال ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
$plus = mb_strlen("$textmassage");
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
if ($pluscharacter < $plus or $plus < $downcharacter) {   
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}
if ($settings["lock"]["lockauto"] == "فعال ✅"){
date_default_timezone_set('Asia/Tehran');
$date1 = date("H:i");
$timelockauto = $settings["information"]["timelock"];
$unlocktime = $settings["information"]["timeunlock"];
if ($unlocktime > $date1 && $date1 > $timelockauto){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ) {
$timeremmber = $settings["information"]["timeremmber"];
if($date1 < $timeremmber){
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
]);
}
else{
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
]);
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"💢 یادآوری :

🔒قفل خودکار در گروه #فعال است.
━┅┄┄┄┄┄┄┄┄┄┄┄┄┄
⏱زمان الان : $date1
⏳زمان شروع قفل : $timelockauto
⌛️زمان پایان قفل : $unlocktime
⁪",
]);
$next_date = date('H:i', strtotime($date1 ."+1 Minutes"));
$settings["information"]["timeremmber"]="$next_date";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
}
if ($settings["information"]["welcome"] == "فعال ✅"){
if($update->message->new_chat_member){
if ($tc == "group" | $tc == "supergroup"){
$text1 = $settings["information"]["textwelcome"];
$newmemberuser = $update->message->new_chat_member->username;
$name = $update->message->new_chat_member->first_name;
date_default_timezone_set('Asia/Tehran');
$date = date('Y-m-d');
$date2 = date("H:i");
$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],"$text1");
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"$text",
    'reply_to_message_id'=>$message_id,
]);
}
}
}
if ($settings["information"]["step"] == "reset"){
if($textmassage == "بله"){
    bot('sendmessage', [
    'chat_id' => $chat_id,
    'text'=>"تنظیمات گروه با موفقیت ریستارت شد✅
➖➖➖➖➖➖➖
🔖توسط :
➖➖➖➖
📮 نام : [$first_name]

🔹 یوزرنیم : [ @$username ]

🔸 ایدی : [$from_id]
➖➖ ",
    
]);
$ndate = $settings["information"]["expire"];
$dateadd = $settings["information"]["dataadded"];
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
$settings["information"]["expire"]="$ndate";
$settings["information"]["dataadded"]="$dateadd";
$settings["information"]["msg_id"]="$message_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else{
	bot('sendmessage',[
    'chat_id' => $chat_id,
    'text'=>"درخواست شما با موفقیت رد شد ✅",
]);
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
if ($settings["information"]["add"] == "فعال ✅") {
if($newchatmemberid == true){
$add = $settings["addlist"]["$from_id"]["add"];
$addplus = $add +1;
$settings["addlist"]["$from_id"]["add"]="$addplus";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
if ($settings["information"]["add"] == "فعال ✅"){
if ($status != "creator" && $status != "administrator" && !in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
$youadding = $settings["addlist"]["$from_id"]["add"];
$setadd = $settings["information"]["setadd"];
$addtext = $settings["addlist"]["$from_id"]["addtext"];
$msg = $settings["information"]["lastmsgadd"];
if($youadding < $setadd){
if($addtext == false){
    bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔖کاربر با اطلاعات :
➖➖➖➖
🔹نام : [$first_name]
🔸ایدی : [$from_id]
🔅یوزرنیم : [@$username]
➖➖➖
⚠️ تعداد افرادی که شما به گروه دعوت کرده اید برابر : 0

🚀 برای باز شدن چت شما باید $setadd نفر را به گروه دعوت کنید",
]);
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$msg
]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsgadd"]="$msgplus";
$settings["addlist"]["$from_id"]["addtext"]="true";
$settings["addlist"]["$from_id"]["add"]=0;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else{
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}
}
}
if ($settings["information"]["step"] == "setrules"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$textmassage");
if($plus < 600) {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"قوانین گروه شما ثبت شد ✅",
    'reply_to_message_id'=>$message_id,
]);
$settings["information"]["rules"]="$textmassage";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 تعداد کلمات وارد شد بیش از حد مجاز است حداکثر میتوانید 600 حرف را وارد کنید",
    'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if ($settings["information"]["lockchannel"] == "فعال ✅"){
if ($status != "creator" && $status != "administrator" && !in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
$usernamechannel = $settings["information"]["setchannel"];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$usernamechannel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
$msg = $settings["information"]["lastmsglockchannel"];
$channeltext = $settings["channellist"]["$from_id"]["channeltext"];
if($channeltext == false){
    bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔖کاربر با اطلاعات :
➖➖➖➖
🔹نام : [$first_name]
🔸ایدی : [$from_id]
🔅یوزرنیم : [@$username]
➖➖➖
🚀 برای فعالیت داشتن در گروه شما باید عضو کانال $usernamechannel ما بشوید",
]);
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$msg
]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsglockchannel"]="$msgplus";
$settings["channellist"]["$from_id"]["channeltext"]="true";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else{
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}
}
}
if ($settings["information"]["step"] == "setchannel"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
if ($tc == 'group' | $tc == 'supergroup'){
if(strpos($textmassage , '@') !== false) {
$plus = mb_strlen("$textmassage");
if($plus < 25) {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"کانال شما با موفقیت تنظیم شد ✅
 
📍 کانال تنظیم شد : $textmassage

📌 توجه ربات حتما باید در کانال تنظیم شده ادمین شود تا بتواند عمل کند",
    'reply_to_message_id'=>$message_id,
]);
$settings["information"]["setchannel"]="$textmassage";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 خطا ! یوزرنیم کانال وارد شد بیش از حد مجاز بلند است",
    'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
			[
		        ['text'=>"برگشت ≫",'callback_data'=>'lockchannel']
			],
            ]
        ])
        ]);
}
}
else{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 خطا در ابتدا یوزرنیم کانال حتما باید عبارت @ باشد 
🔘 ماننده : @$channel",
    'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
			[
			    ['text'=>"برگشت ≫",'callback_data'=>'lockchannel']
			],
            ]
        ])
        ]);
}
}
}
}
if ($settings["information"]["step"] == "setwelcome"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$textmassage");
if($plus < 200) {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"متن خوش آمدگویی گروه با موفقیت تنظیم شد ✅",
    'reply_to_message_id'=>$message_id,
]);
$settings["information"]["textwelcome"]="$textmassage";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 خطا ! متن وارد شده بیش از حد مجاز است",
    'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
			[
			    ['text'=>"برگشت ≫",'callback_data'=>'welcome']
			],
            ]
        ])
        ]);
}
}
}
}
if ($settings["filterlist"] != false){
if ($status != 'creator' && $status != 'administrator' ) {
$check = check_filter("$textmassage");
if ($check == true) {
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}

?>