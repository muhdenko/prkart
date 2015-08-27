<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html class="" xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru"><head>
<?$APPLICATION->ShowHead();?>
<title><?$APPLICATION->ShowTitle();?></title>
<link rel="icon" href="/bitrix/templates/.default/images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/bitrix/templates/.default/images/favicon.ico" type="image/x-icon" />
<!--[if lt IE 7]>
<script type="text/javascript">
//<![CDATA[
    var BLANK_URL = 'http://can.sysint.net/js/blank.html';
    var BLANK_IMG = 'http://can.sysint.net/js/spacer.gif';
//]]>
</script>
<![endif]-->
<?$APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/template_styles.css");

?>
<link rel="stylesheet" type="text/css" href="/bitrix/templates/.default/css/brand.css" />
<link rel="stylesheet" type="text/css" href="/bitrix/templates/.default/css/default.css" />
<link rel="stylesheet" type="text/css" href="/bitrix/templates/.default/css/alphacube.css" />
<link rel="stylesheet" type="text/css" href="/bitrix/templates/.default/css/calendar-blue.css" />
<!--<link rel="stylesheet" type="text/css" href="http://can.sysint.net/skin/frontend/cann/v1/css/styles.css" media="all" />-->
<link rel="stylesheet" type="text/css" href="/bitrix/templates/.default/css/widgets.css" media="all" />
<link rel="stylesheet" type="text/css" href="/bitrix/templates/.default/css/ui.css" media="all" />
<link rel="stylesheet" type="text/css" href="/bitrix/templates/.default/css/form.css" media="all" />
<link rel="stylesheet" type="text/css" href="/bitrix/templates/.default/css/stars.css" media="all" />
<link rel="stylesheet" type="text/css" href="/bitrix/templates/.default/css/print.css" media="print" />

<?$APPLICATION->AddHeadScript("/bitrix/templates/.default/js/jquery-2.1.3.js");?>
<?$APPLICATION->AddHeadScript("/bitrix/templates/.default/js/jcarousel.js");?>

<?/*?>
<script type="text/javascript" src="/bitrix/templates/.default/js/prototype.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/validation.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/builder.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/effects.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/dragdrop.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/controls.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/slider.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/js.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/form.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/menu.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/translate.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/cookies.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/jquery-lib.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/jquery-ui.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/jcarousel.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/noconflict.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/jquery-migrate-1.0.0.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/underscore.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/backbone.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/app.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/area.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/base.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/maskedinput.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/typeahead.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/stars.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/tiny_mce.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/calendar.js"></script>
<script type="text/javascript" src="/bitrix/templates/.default/js/calendar-setup.js"></script>
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="http://can.sysint.net/skin/frontend/cann/v1/css/styles-ie.css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="http://can.sysint.net/js/lib/ds-sleight.js"></script>
<script type="text/javascript" src="http://can.sysint.net/skin/frontend/base/default/js/ie6.js"></script>
<![endif]-->

<script type="text/javascript">
//<![CDATA[
Mage.Cookies.path     = '/';
Mage.Cookies.domain   = '.can.sysint.net';
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
optionalZipCountries = ["AU","AT","AZ","AX","AL","DZ","VI","AS","AO","AI","AD","AQ","AG","AR","AM","AW","AF","BS","BD","BB","BH","BY","BZ","BE","BJ","BM","BG","BO","BA","BW","BR","IO","VG","BN","BF","BI","BT","VU","VA","GB","HU","VE","UM","TL","VN","GA","HT","GY","GM","GH","GP","GT","GN","GW","DE","GG","GI","HN","HK","GD","GL","GR","GE","GU","DK","CD","JE","DJ","DO","EG","ZM","EH","ZW","IL","IN","ID","JO","IQ","IR","IE","IS","ES","IT","YE","KZ","KY","KH","CM","CA","QA","KE","CY","KI","CN","CC","CO","KM","CG","KP","CR","CI","CU","KW","KG","LA","LV","LS","LR","LB","LY","LT","LI","LU","MU","MR","MG","YT","MO","MK","MW","MY","ML","MV","MT","MA","MQ","MH","MX","MZ","MD","MC","MN","MS","MM","NA","NR","NP","NE","NG","AN","NL","NI","NU","NZ","NC","NO","AE","OM","BV","DM","IM","NF","CX","BL","MF","SH","CV","CK","TC","HM","PK","PW","PS","PA","PG","PY","PE","PN","PL","PT","PR","KR","RE","RU","RW","RO","US","SV","WS","SM","ST","SA","SZ","SJ","MP","SC","PM","SN","VC","KN","LC","RS","SG","SY","SK","SI","SB","SO","SD","SR","SL","TJ","TH","TW","TZ","TG","TK","TO","TT","TV","TN","TM","TR","UG","UZ","UA","WF","UY","FO","FM","FJ","PH","FI","FK","FR","GF","PF","TF","HR","CF","TD","ME","CZ","CL","CH","SE","LK","EC","GQ","ER","EE","ET","ZA","GS","JM","JP"];
//]]>
</script>
<script type="text/javascript">//<![CDATA[
        var Translator = new Translate({"Please select an option.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u044b\u0431\u0435\u0440\u0438\u0442\u0435 \u043e\u0434\u0438\u043d \u0432\u0430\u0440\u0438\u0430\u043d\u0442.","This is a required field.":"\u042d\u0442\u043e \u043f\u043e\u043b\u0435 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u043e \u0434\u043b\u044f \u0437\u0430\u043f\u043e\u043b\u043d\u0435\u043d\u0438\u044f.","Please enter a valid number in this field.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u0432 \u044d\u0442\u043e \u043f\u043e\u043b\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u043e\u0435 \u0447\u0438\u0441\u043b\u043e.","The value is not within the specified range.":"\u0417\u043d\u0430\u0447\u0435\u043d\u0438\u0435 \u043d\u0435 \u0432\u0445\u043e\u0434\u0438\u0442 \u0432 \u0443\u043a\u0430\u0437\u0430\u043d\u043d\u044b\u0439 \u0434\u0438\u0430\u043f\u0430\u0437\u043e\u043d.","Please use numbers only in this field. Please avoid spaces or other characters such as dots or commas.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0438\u0441\u043f\u043e\u043b\u044c\u0437\u0443\u0439\u0442\u0435 \u0432 \u044d\u0442\u043e\u043c \u043f\u043e\u043b\u0435 \u0442\u043e\u043b\u044c\u043a\u043e \u0446\u0438\u0444\u0440\u044b. \u0418\u0437\u0431\u0435\u0433\u0430\u0439\u0442\u0435 \u043f\u0440\u043e\u0431\u0435\u043b\u043e\u0432 \u0438\u043b\u0438 \u0434\u0440\u0443\u0433\u0438\u0445 \u0441\u0438\u043c\u0432\u043e\u043b\u043e\u0432, \u043d\u0430\u043f\u043e\u0434\u043e\u0431\u0438\u0435 \u0442\u043e\u0447\u0435\u043a \u0438 \u0437\u0430\u043f\u044f\u0442\u044b\u0445.","Please use letters only (a-z or A-Z) in this field.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0438\u0441\u043f\u043e\u043b\u044c\u0437\u0443\u0439\u0442\u0435 \u0432 \u044d\u0442\u043e\u043c \u043f\u043e\u043b\u0435 \u0442\u043e\u043b\u044c\u043a\u043e \u0431\u0443\u043a\u0432\u044b (a-z \u0438\u043b\u0438 A-Z).","Please use only letters (a-z), numbers (0-9) or underscore(_) in this field, first character should be a letter.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0438\u0441\u043f\u043e\u043b\u044c\u0437\u0443\u0439\u0442\u0435 \u0432 \u044d\u0442\u043e\u043c \u043f\u043e\u043b\u0435 \u0442\u043e\u043b\u044c\u043a\u043e \u0431\u0443\u043a\u0432\u044b (a-z), \u0446\u0438\u0444\u0440\u044b (0-9) \u0438\u043b\u0438 \u043f\u043e\u0434\u0447\u0451\u0440\u043a\u0438\u0432\u0430\u043d\u0438\u044f(_). \u041f\u0435\u0440\u0432\u044b\u0439 \u0441\u0438\u043c\u0432\u043e\u043b \u0434\u043e\u043b\u0436\u0435\u043d \u0431\u044b\u0442\u044c \u0431\u0443\u043a\u0432\u043e\u0439.","Please use only letters (a-z or A-Z) or numbers (0-9) only in this field. No spaces or other characters are allowed.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0438\u0441\u043f\u043e\u043b\u044c\u0437\u0443\u0439\u0442\u0435 \u0432 \u044d\u0442\u043e\u043c \u043f\u043e\u043b\u0435 \u0442\u043e\u043b\u044c\u043a\u043e \u0431\u0443\u043a\u0432\u044b (a-z \u0438\u043b\u0438 A-Z) \u0438\u043b\u0438 \u0446\u0438\u0444\u0440\u044b (0-9). \u041f\u0440\u043e\u0431\u0435\u043b\u044b \u0438 \u0434\u0440\u0443\u0433\u0438\u0435 \u0441\u0438\u043c\u0432\u043e\u043b\u044b \u0437\u0430\u043f\u0440\u0435\u0449\u0435\u043d\u044b.","Please use only letters (a-z or A-Z) or numbers (0-9) or spaces and # only in this field.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0438\u0441\u043f\u043e\u043b\u044c\u0437\u0443\u0439\u0442\u0435 \u0432 \u044d\u0442\u043e\u043c \u043f\u043e\u043b\u0435 \u0442\u043e\u043b\u044c\u043a\u043e \u0431\u0443\u043a\u0432\u044b (a-z \u0438\u043b\u0438 A-Z), \u0446\u0438\u0444\u0440\u044b (0-9), \u043f\u0440\u043e\u0431\u0435\u043b\u044b \u0438\u043b\u0438 #.","Please enter a valid phone number. For example (123) 456-7890 or 123-456-7890.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u044b\u0439 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u043d\u044b\u0439 \u043d\u043e\u043c\u0435\u0440. \u041d\u0430\u043f\u0440\u0438\u043c\u0435\u0440, (123) 456-7890 \u0438\u043b\u0438 123-456-7890.","Please enter a valid fax number. For example (123) 456-7890 or 123-456-7890.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u044b\u0439 \u043d\u043e\u043c\u0435\u0440 \u0444\u0430\u043a\u0441\u0430. \u041d\u0430\u043f\u0440\u0438\u043c\u0435\u0440, (123) 456-7890 \u0438\u043b\u0438 123-456-7890.","Please enter a valid date.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u0443\u044e \u0434\u0430\u0442\u0443.","Please enter a valid email address. For example johndoe@domain.com.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u044b\u0439 \u0430\u0434\u0440\u0435\u0441 \u044d\u043b\u0435\u043a\u0442\u0440\u043e\u043d\u043d\u043e\u0439 \u043f\u043e\u0447\u0442\u044b (email). \u041d\u0430\u043f\u0440\u0438\u043c\u0435\u0440, ivanivanov@domain.com.","Please use only visible characters and spaces.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0438\u0441\u043f\u043e\u043b\u044c\u0437\u0443\u0439\u0442\u0435 \u0442\u043e\u043b\u044c\u043a\u043e \u0432\u0438\u0434\u0438\u043c\u044b\u0435 \u0441\u0438\u043c\u0432\u043e\u043b\u044b \u0438 \u043f\u0440\u043e\u0431\u0435\u043b\u044b.","Please enter 6 or more characters. Leading or trailing spaces will be ignored.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 6 \u0438\u043b\u0438 \u0431\u043e\u043b\u0435\u0435 \u0441\u0438\u043c\u0432\u043e\u043b\u043e\u0432. \u041f\u0440\u043e\u0431\u0435\u043b\u044b \u043f\u0435\u0440\u0435\u0434 \u0438 \u043f\u043e\u0441\u043b\u0435 \u0441\u0438\u043c\u0432\u043e\u043b\u043e\u0432 \u0431\u0443\u0434\u0443\u0442 \u043f\u0440\u043e\u0438\u0433\u043d\u043e\u0440\u0438\u0440\u043e\u0432\u0430\u043d\u044b.","Please enter 7 or more characters. Password should contain both numeric and alphabetic characters.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 6 \u0438\u043b\u0438 \u0431\u043e\u043b\u0435\u0435 \u0441\u0438\u043c\u0432\u043e\u043b\u043e\u0432. \u041f\u0430\u0440\u043e\u043b\u044c \u0434\u043e\u043b\u0436\u0435\u043d \u0441\u043e\u0434\u0435\u0440\u0436\u0430\u0442\u044c \u043a\u0430\u043a \u0431\u0443\u043a\u0432\u044b, \u0442\u0430\u043a \u0438 \u0446\u0438\u0444\u0440\u044b.","Please make sure your passwords match.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430 \u0443\u0431\u0435\u0434\u0438\u0442\u0435\u0441\u044c, \u0447\u0442\u043e \u0432\u0430\u0448\u0438 \u043f\u0430\u0440\u043e\u043b\u0438 \u0441\u043e\u0432\u043f\u0430\u0434\u0430\u044e\u0442.","Please enter a valid URL. Protocol is required (http:\/\/, https:\/\/ or ftp:\/\/)":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u044b\u0439 \u0430\u0434\u0440\u0435\u0441. \u041d\u0435 \u0437\u0430\u0431\u0443\u0434\u044c\u0442\u0435 \u0443\u043a\u0430\u0437\u0430\u0442\u044c \u043f\u0440\u043e\u0442\u043e\u043a\u043e\u043b (http:\/\/, https:\/\/ \u0438\u043b\u0438 ftp:\/\/)","Please enter a valid URL. For example http:\/\/www.example.com or www.example.com":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u044b\u0439 \u0430\u0434\u0440\u0435\u0441. \u041d\u0430\u043f\u0440\u0438\u043c\u0435\u0440, http:\/\/www.example.com \u0438\u043b\u0438 www.example.com","Please enter a valid URL Key. For example \"example-page\", \"example-page.html\" or \"anotherlevel\/example-page\".":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u044b URL Key. \u041d\u0430\u043f\u0440\u0438\u043c\u0435\u0440, \"example-page\", \"example-page.html\" \u0438\u043b\u0438 \"anotherlevel\/example-page\".","Please enter a valid XML-identifier. For example something_1, block5, id-4.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u044b\u0439 XML-\u0438\u0434\u0435\u043d\u0442\u0438\u0444\u0438\u043a\u0430\u0442\u043e\u0440. \u041d\u0430\u043f\u0440\u0438\u043c\u0435\u0440, something_1, block5, id-4.","Please enter a valid social security number. For example 123-45-6789.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u044b\u0439 \u043d\u043e\u043c\u0435\u0440 \u0441\u043e\u0446\u0438\u0430\u043b\u044c\u043d\u043e\u0433\u043e \u0441\u0442\u0440\u0430\u0445\u043e\u0432\u0430\u043d\u0438\u044f. \u041d\u0430\u043f\u0440\u0438\u043c\u0435\u0440, 123-45-6789.","Please enter a valid zip code. For example 90602 or 90602-1234.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u044b\u0439 \u043f\u043e\u0447\u0442\u043e\u0432\u044b\u0439 \u0438\u043d\u0434\u0435\u043a\u0441. \u041d\u0430\u043f\u0440\u0438\u043c\u0435\u0440, 9060 \u0438\u043b\u0438 90602-1234.","Please enter a valid zip code.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u044b\u0439 \u043f\u043e\u0447\u0442\u043e\u0432\u044b\u0439 \u0438\u043d\u0434\u0435\u043a\u0441.","Please use this date format: dd\/mm\/yyyy. For example 17\/03\/2006 for the 17th of March, 2006.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0438\u0441\u043f\u043e\u043b\u044c\u0437\u0443\u0439\u0442\u0435 \u0434\u043b\u044f \u0434\u0430\u0442\u044b \u0444\u043e\u0440\u043c\u0430\u0442: dd\/mm\/yyyy. \u041d\u0430\u043f\u0440\u0438\u043c\u0435\u0440, 17\/03\/2006 \u0434\u043b\u044f 17-\u0433\u043e \u043c\u0430\u0440\u0442\u0430 2006 \u0433\u043e\u0434\u0430.","Please enter a valid $ amount. For example $100.00.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u0443\u044e \u0434\u0435\u043d\u0435\u0436\u043d\u0443\u044e \u0432\u0435\u043b\u0438\u0447\u0438\u043d\u0443. \u041d\u0430\u043f\u0440\u0438\u043c\u0435\u0440, $100.00.","Please select one of the above options.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u044b\u0431\u0435\u0440\u0438\u0442\u0435 \u043e\u0434\u0438\u043d \u0438\u0437 \u0432\u044b\u0448\u0435\u0443\u043a\u0430\u0437\u0430\u043d\u043d\u044b\u0445 \u0432\u0430\u0440\u0438\u0430\u043d\u0442\u043e\u0432.","Please select one of the options.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u044b\u0431\u0435\u0440\u0438\u0442\u0435 \u043e\u0434\u0438\u043d \u0438\u0437 \u0432\u0430\u0440\u0438\u0430\u043d\u0442\u043e\u0432.","Please select State\/Province.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u044b\u0431\u0435\u0440\u0438\u0442\u0435 \u0448\u0442\u0430\u0442\/\u043f\u0440\u043e\u0432\u0438\u043d\u0446\u0438\u044e.","Please enter a number greater than 0 in this field.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u0432 \u044d\u0442\u043e \u043f\u043e\u043b\u0435 \u0447\u0438\u0441\u043b\u043e \u0431\u043e\u043b\u044c\u0448\u0435 0.","Please enter a number 0 or greater in this field.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u0432 \u044d\u0442\u043e \u043f\u043e\u043b\u0435 \u0447\u0438\u0441\u043b\u043e \u0431\u043e\u043b\u044c\u0448\u0435 0 \u0438\u043b\u0438 0.","Please enter a valid credit card number.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u044b\u0439 \u043d\u043e\u043c\u0435\u0440 \u043a\u0440\u0435\u0434\u0438\u0442\u043d\u043e\u0439 \u043a\u0430\u0440\u0442\u044b.","Credit card number does not match credit card type.":"\u041d\u043e\u043c\u0435\u0440 \u043a\u0440\u0435\u0434\u0438\u0442\u043d\u043e\u0439 \u043a\u0430\u0440\u0442\u044b \u043d\u0435 \u0441\u043e\u0432\u043f\u0430\u0434\u0430\u0435\u0442 \u0441 \u0442\u0438\u043f\u043e\u043c \u043a\u0430\u0440\u0442\u044b","Card type does not match credit card number.":"\u0422\u0438\u043f \u043a\u0430\u0440\u0442\u044b \u043d\u0435 \u0441\u043e\u0432\u043f\u0430\u0434\u0430\u0435\u0442 \u0441 \u043d\u043e\u043c\u0435\u0440\u043e\u043c \u043a\u0440\u0435\u0434\u0438\u0442\u043d\u043e\u0439 \u043a\u0430\u0440\u0442\u044b.","Incorrect credit card expiration date.":"\u041d\u0435\u0432\u0435\u0440\u043d\u0430\u044f \u0434\u0430\u0442\u0430 \u0438\u0441\u0442\u0435\u0447\u0435\u043d\u0438\u044f \u0441\u0440\u043e\u043a\u0430 \u0434\u0435\u0439\u0441\u0442\u0432\u0438\u044f \u0440\u0430\u0441\u0447\u0451\u0442\u043d\u043e\u0439 \u043a\u0430\u0440\u0442\u044b","Please enter a valid credit card verification number.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u044b\u0439 \u043f\u0440\u043e\u0432\u0435\u0440\u043e\u0447\u043d\u044b\u0439 \u043d\u043e\u043c\u0435\u0440 \u043a\u0440\u0435\u0434\u0438\u0442\u043d\u043e\u0439 \u043a\u0430\u0440\u0442\u044b.","Please input a valid CSS-length. For example 100px or 77pt or 20em or .5ex or 50%.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u0443\u044e CSS - \u0434\u043b\u0438\u043d\u0443. \u041d\u0430\u043f\u0440\u0438\u043c\u0435\u0440, 100px \u0438\u043b\u0438 77pt \u0438\u043b\u0438 20em \u0438\u043b\u0438 .5ex \u0438\u043b\u0438 50%.","Text length does not satisfy specified text range.":"\u0414\u043b\u0438\u043d\u043d\u0430 \u0442\u0435\u043a\u0441\u0442\u0430 \u043d\u0435 \u0443\u0434\u043e\u0432\u043b\u0435\u0442\u0432\u043e\u0440\u044f\u0435\u0442 \u0443\u043a\u0430\u0437\u0430\u043d\u043d\u043e\u043c\u0443 \u0434\u0438\u0430\u043f\u0430\u0437\u043e\u043d\u0443 \u0442\u0435\u043a\u0441\u0442\u0430.","Please enter a number lower than 100.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u0447\u0438\u0441\u043b\u043e \u043c\u0435\u043d\u044c\u0448\u0435 100.","Please enter issue number or start date for switch\/solo card type.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0432\u043e\u043f\u0440\u043e\u0441\u0430 \u0438\u043b\u0438 \u0434\u0430\u0442\u0443 \u043d\u0430\u0447\u0430\u043b\u0430 \u0434\u043b\u044f \u0442\u0438\u043f\u0430 \u043a\u0430\u0440\u0442\u044b switch\/solo.","Please wait, loading...":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u043f\u043e\u0434\u043e\u0436\u0434\u0438\u0442\u0435, \u0438\u0434\u0435\u0442 \u0437\u0430\u0433\u0440\u0443\u0437\u043a\u0430...","This date is a required value.":"\u042d\u0442\u0430 \u0434\u0430\u0442\u0430 - \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u043e\u0435 \u0437\u043d\u0430\u0447\u0435\u043d\u0438\u0435.","Please enter a valid day (1-%d).":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u044b\u0439 \u0434\u0435\u043d\u044c (1-%d).","Please enter a valid month (1-12).":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u044b\u0439 \u043c\u0435\u0441\u044f\u0446 (1-12).","Please enter a valid year (1900-%d).":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u044b\u0439 \u0433\u043e\u0434 (1900-%d).","Please enter a valid full date":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u0443\u044e \u043f\u043e\u043b\u043d\u0443\u044e \u0434\u0430\u0442\u0443.","Please enter a valid date between %s and %s":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u0443\u044e \u0434\u0430\u0442\u0443 \u043c\u0435\u0436\u0434\u0443 %s \u0438 %s","Please enter a valid date equal to or greater than %s":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u0443\u044e \u0434\u0430\u0442\u0443 \u0440\u0430\u0432\u043d\u0443\u044e \u0438\u043b\u0438 \u0431\u043e\u043b\u044c\u0448\u0435 \u0447\u0435\u043c %s","Please enter a valid date less than or equal to %s":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u0443\u044e \u0434\u0430\u0442\u0443 \u0440\u0430\u0432\u043d\u0443\u044e \u0438\u043b\u0438 \u043c\u0435\u043d\u044c\u0448\u0435 \u0447\u0435\u043c %s","Complete":"\u0417\u0430\u0432\u0435\u0440\u0448\u0451\u043d","Add Products":"\u0414\u043e\u0431\u0430\u0432\u0438\u0442\u044c \u0442\u043e\u0432\u0430\u0440\u044b","Please choose to register or to checkout as a guest":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0441\u0434\u0435\u043b\u0430\u0439\u0442\u0435 \u0432\u044b\u0431\u043e\u0440: \u0437\u0430\u0440\u0435\u0433\u0438\u0441\u0442\u0440\u0438\u0440\u043e\u0432\u0430\u0442\u044c\u0441\u044f \u0438\u043b\u0438 \u043e\u0444\u043e\u0440\u043c\u0438\u0442\u044c \u0437\u0430\u043a\u0430\u0437 \u0431\u0435\u0437 \u0440\u0435\u0433\u0438\u0441\u0442\u0440\u0430\u0446\u0438\u0438 \u043d\u0430 \u0441\u0430\u0439\u0442\u0435","Your order cannot be completed at this time as there is no shipping methods available for it. Please make necessary changes in your shipping address.":"\u0412\u0430\u0448 \u0437\u0430\u043a\u0430\u0437 \u043d\u0435 \u043c\u043e\u0436\u0435\u0442 \u0431\u044b\u0442\u044c \u0437\u0430\u0432\u0435\u0440\u0448\u0451\u043d \u0432 \u0434\u0430\u043d\u043d\u044b\u0439 \u043c\u043e\u043c\u0435\u043d\u0442, \u043f\u043e\u0441\u043a\u043e\u043b\u044c\u043a\u0443 \u0434\u043b\u044f \u043d\u0435\u0433\u043e \u043d\u0435\u0442 \u0434\u043e\u0441\u0442\u0443\u043f\u043d\u044b\u0445 \u043c\u0435\u0442\u043e\u0434\u043e\u0432 \u0434\u043e\u0441\u0442\u0430\u0432\u043a\u0438. \u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0432\u043d\u0435\u0441\u0438\u0442\u0435 \u043d\u0435\u043e\u0431\u0445\u043e\u0434\u0438\u043c\u044b\u0435 \u0438\u0437\u043c\u0435\u043d\u0435\u043d\u0438\u044f \u0432 \u0430\u0434\u0440\u0435\u0441 \u0434\u043e\u0441\u0442\u0430\u0432\u043a\u0438.","Please specify payment method.":"\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0443\u043a\u0430\u0436\u0438\u0442\u0435 \u043c\u0435\u0442\u043e\u0434 \u043e\u043f\u043b\u0430\u0442\u044b.","Your order cannot be completed at this time as there is no payment methods available for it.":"\u0412\u0430\u0448 \u0437\u0430\u043a\u0430\u0437 \u043d\u0435 \u043c\u043e\u0436\u0435\u0442 \u0431\u044b\u0442\u044c \u0437\u0430\u0432\u0435\u0440\u0448\u0451\u043d \u0432 \u0434\u0430\u043d\u043d\u044b\u0439 \u043c\u043e\u043c\u0435\u043d\u0442, \u043f\u043e\u0441\u043a\u043e\u043b\u044c\u043a\u0443 \u0434\u043b\u044f \u043d\u0435\u0433\u043e \u043d\u0435\u0442 \u0434\u043e\u0441\u0442\u0443\u043f\u043d\u044b\u0445 \u043c\u0435\u0442\u043e\u0434\u043e\u0432 \u043e\u043f\u043b\u0430\u0442\u044b."});
        //]]></script><script>
        var currentHandle = "cms_index_index";
</script>
<?*/?>
<style type="text/css">.fancybox-margin{margin-right:17px;}</style></head>
<body class=" cms-index-index cms-home">
	<?$APPLICATION->ShowPanel();?>
	<!--<script>
	var currentHandle = 'cms_index_index'
	</script>-->
	<div class="wrapper">

<?include_once($_SERVER['DOCUMENT_ROOT']."/bitrix/templates/.default/include/header.php");?>
<div class="main-container col1-layout">
	<div class="main">
		<div class="col-main">

			<script type="text/javascript">
// 				jQuery(function() {
// 				   jQuery('.carousel').carousel({
// 					  interval: 5000
// 					});
// 				});
			</script>

			<div class="page-home-brands-wp">
				<div class="brands-header">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/include/brands-header.php",
							"EDIT_TEMPLATE" => ""
						)
					);?>
				</div>
				<div class="brands-containter">
<?$APPLICATION->IncludeComponent(
	"bitrix:sale.bestsellers",
	"template4",
	array(
		"LINE_ELEMENT_COUNT" => "4",
		"TEMPLATE_THEME" => "site",
		"BY" => "AMOUNT",
		"PERIOD" => "0",
		"FILTER" => array(
			0 => "CANCELED",
			1 => "ALLOW_DELIVERY",
			2 => "PAYED",
			3 => "DEDUCTED",
			4 => "N",
			5 => "P",
			6 => "F",
		),
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "86400",
		"AJAX_MODE" => "N",
		"DETAIL_URL" => "",
		"BASKET_URL" => "/personal/basket.php",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"DISPLAY_COMPARE" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"SHOW_PRICE_COUNT" => "1",
		"PRODUCT_SUBSCRIPTION" => "N",
		"PRICE_VAT_INCLUDE" => "Y",
		"USE_PRODUCT_QUANTITY" => "N",
		"SHOW_NAME" => "Y",
		"SHOW_IMAGE" => "Y",
		"MESS_BTN_BUY" => "",
		"MESS_BTN_DETAIL" => "",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"PAGE_ELEMENT_COUNT" => "4",
		"SHOW_PRODUCTS_3" => "Y",
		"PROPERTY_CODE_3" => array(
			0 => "",
			1 => "MANUFACTURER",
			2 => "MATERIAL",
			3 => "",
		),
		"CART_PROPERTIES_3" => array(
			0 => "",
			1 => "CORNER",
			2 => "",
		),
		"ADDITIONAL_PICT_PROP_3" => "MORE_PHOTO",
		"LABEL_PROP_3" => "SPECIALOFFER",
		"PROPERTY_CODE_4" => array(
			0 => "",
			1 => "COLOR",
			2 => "",
		),
		"CART_PROPERTIES_4" => array(
			0 => "",
			1 => "",
		),
		"OFFER_TREE_PROPS_4" => array(
			0 => "-",
		),
		"HIDE_NOT_AVAILABLE" => "N",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"SHOW_PRODUCTS_2" => "N",
		"SHOW_PRODUCTS_4" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"PROPERTY_CODE_2" => array(
			0 => "",
			1 => "",
		),
		"CART_PROPERTIES_2" => array(
			0 => "",
			1 => "",
		),
		"ADDITIONAL_PICT_PROP_2" => "MORE_PHOTO",
		"LABEL_PROP_2" => "-",
		"OFFER_TREE_PROPS_3" => array(
			0 => "-",
		),
		"ADDITIONAL_PICT_PROP_4" => "MORE_PHOTO",
		"LABEL_PROP_4" => "-",
		"PROPERTY_CODE_5" => array(
			0 => "",
			1 => "",
		),
		"CART_PROPERTIES_5" => array(
			0 => "",
			1 => "",
		),
		"ADDITIONAL_PICT_PROP_5" => "MORE_PHOTO",
		"OFFER_TREE_PROPS_5" => array(
			0 => "-",
		)
	),
	false
);?>
<!--
					<div style="position: relative; display: block;" class="jcarousel-container jcarousel-container-horizontal"><div style="position: relative;" class="jcarousel-clip jcarousel-clip-horizontal"><ul style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 670px;" class="jcarousel-list jcarousel-list-horizontal" id="brands-carousel">
												<li jcarouselindex="1" style="float: left; list-style: outside none none;" class="newproduct-container promotion jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal">
							<a title="Barney's Farm" href="http://can.sysint.net/brands/show/me/b/2/">
								<img alt="Barney's Farm" title="Barney's Farm" src="/bitrix/templates/.default/images/Manufacturer1cf719a268b949ba4a87a36a975c1c60.jpg">
							</a>
						</li>
											<li jcarouselindex="2" style="float: left; list-style: outside none none;" class="newproduct-container promotion jcarousel-item jcarousel-item-horizontal jcarousel-item-2 jcarousel-item-2-horizontal">
							<a title="Blimburn Seeds" href="http://can.sysint.net/brands/show/me/b/3/">
								<img alt="Blimburn Seeds" title="Blimburn Seeds" src="/bitrix/templates/.default/images/Manufacturer22648e40069946660acf615f9a44b208.jpg">
							</a>
						</li>
											<li jcarouselindex="3" style="float: left; list-style: outside none none;" class="newproduct-container promotion jcarousel-item jcarousel-item-horizontal jcarousel-item-3 jcarousel-item-3-horizontal">
							<a title="Delicious Seeds" href="http://can.sysint.net/brands/show/me/b/4/">
								<img alt="Delicious Seeds" title="Delicious Seeds" src="/bitrix/templates/.default/images/Manufacturer918f9974db698a2f2a6dd1739acc8081.jpg">
							</a>
						</li>
											<li jcarouselindex="4" style="float: left; list-style: outside none none;" class="newproduct-container promotion jcarousel-item jcarousel-item-horizontal jcarousel-item-4 jcarousel-item-4-horizontal">
							<a title="Dinafem Seeds" href="http://can.sysint.net/brands/show/me/b/5/">
								<img alt="Dinafem Seeds" title="Dinafem Seeds" src="/bitrix/templates/.default/images/Manufacturera01ddca9e46d20180957589644753630.jpg">
							</a>
						</li>
											<li jcarouselindex="5" style="float: left; list-style: outside none none;" class="newproduct-container promotion jcarousel-item jcarousel-item-horizontal jcarousel-item-5 jcarousel-item-5-horizontal">
							<a title="Dutch Passion" href="http://can.sysint.net/brands/show/me/b/7/">
								<img alt="Dutch Passion" title="Dutch Passion" src="/bitrix/templates/.default/images/Manufacturer86a4f921270052abbcf43efae1b72c19.jpg">
							</a>
						</li>
											<li jcarouselindex="6" style="float: left; list-style: outside none none;" class="newproduct-container promotion jcarousel-item jcarousel-item-horizontal jcarousel-item-6 jcarousel-item-6-horizontal">
							<a title="Eva Seeds" href="http://can.sysint.net/brands/show/me/b/8/">
								<img alt="Eva Seeds" title="Eva Seeds" src="/bitrix/templates/.default/images/Manufacturerc30485596ed42ee9bb4cfdf1e77ad399.jpg">
							</a>
						</li>
							</ul></div><div disabled="disabled" style="display: block;" class="jcarousel-prev jcarousel-prev-horizontal jcarousel-prev-disabled jcarousel-prev-disabled-horizontal"></div><div disabled="disabled" style="display: block;" class="jcarousel-next jcarousel-next-horizontal jcarousel-next-disabled jcarousel-next-disabled-horizontal"></div></div>
				</div>-->
			</div>

<script>
    jQuery(function() {

    });
</script>
<div class="page-home-promotions-wp">
    <div class="promotions-title">
        Акции и скидки    </div>

    <ul class="promotions-list">
                <li class="p-item">
            <div class="ribbon">
                                <span>-17%</span>
                            </div>
            <div class="p-wrapper">
                <a href="http://can.sysint.net/crimea-blue-feminised.html">
                    <img title="Crimea Blue Feminised" alt="Crimea Blue Feminised" src="/bitrix/templates/.default/images/471-1402-thickbox.jpg">
                </a>
                <div class="pw-title">
                    <span title="Crimea Blue Feminised">Crimea Blue Feminised</span>
                </div>
                <div class="pw-description">
                    <a href="http://can.sysint.net/crimea-blue-feminised.html">Crimea Blue - это крепкий сорт Indica/ Sativa, выращ...</a>
                    <a href="http://can.sysint.net/crimea-blue-feminised.html" class="btn-promo"></a>
                </div>
            </div>
        </li>
                <li class="p-item">
            <div class="ribbon">
                                <span>-33%</span>
                            </div>
            <div class="p-wrapper">
                <a href="http://can.sysint.net/acapulco-gold-feminised.html">
                    <img title="ACAPULCO GOLD FEMINISED" alt="ACAPULCO GOLD FEMINISED" src="/bitrix/templates/.default/images/468-1399-large.jpg">
                </a>
                <div class="pw-title">
                    <span title="ACAPULCO GOLD FEMINISED">ACAPULCO GOLD FEMI...</span>
                </div>
                <div class="pw-description">
                    <a href="http://can.sysint.net/acapulco-gold-feminised.html">Благодоря последним достежениям в генетике, специали...</a>
                    <a href="http://can.sysint.net/acapulco-gold-feminised.html" class="btn-promo"></a>
                </div>
            </div>
        </li>
                <li class="p-item">
            <div class="ribbon">
                                <span>-1%</span>
                            </div>
            <div class="p-wrapper">
                <a href="http://can.sysint.net/nabor-1.html">
                    <img title="Набор-1" alt="Набор-1" src="/bitrix/templates/.default/images/505-1488-thickbox_1_1.jpg">
                </a>
                <div class="pw-title">
                    <span title="Набор-1">Набор-1</span>
                </div>
                <div class="pw-description">
                    <a href="http://can.sysint.net/nabor-1.html">Набор-1</a>
                    <a href="http://can.sysint.net/nabor-1.html" class="btn-promo"></a>
                </div>
            </div>
        </li>
                <li class="p-item">
            <div class="ribbon">
                                <span>-46%</span>
                            </div>
            <div class="p-wrapper">
                <a href="http://can.sysint.net/8-ball-kush-feminised.html">
                    <img title="8 Ball Kush Feminised" alt="8 Ball Kush Feminised" src="/bitrix/templates/.default/images/467-1398-thickbox.jpg">
                </a>
                <div class="pw-title">
                    <span title="8 Ball Kush Feminised">8 Ball Kush Feminised</span>
                </div>
                <div class="pw-description">
                    <a href="http://can.sysint.net/8-ball-kush-feminised.html">8 Ball Kush происходит из горных районов Афганистана...</a>
                    <a href="http://can.sysint.net/8-ball-kush-feminised.html" class="btn-promo"></a>
                </div>
            </div>
        </li>
                <li class="p-item">
            <div class="ribbon">
                                <span>-11%</span>
                            </div>
            <div class="p-wrapper last">
                <a href="http://can.sysint.net/speed-auto-feminized.html">
                    <img title="+ SPEED AUTO FEMINIZED" alt="+ SPEED AUTO FEMINIZED" src="/bitrix/templates/.default/images/545.jpg">
                </a>
                <div class="pw-title">
                    <span title="+ SPEED AUTO FEMINIZED">+ SPEED AUTO FEMIN...</span>
                </div>
                <div class="pw-description">
                    <a href="http://can.sysint.net/speed-auto-feminized.html">Третье поколение автоцветущего гибрида, полученного ...</a>
                    <a href="http://can.sysint.net/speed-auto-feminized.html" class="btn-promo"></a>
                </div>
            </div>
        </li>
            </ul>
</div>

<div class="std">&nbsp;</div><div class="news-wrap">
        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"news",
	Array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "1",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);?>
        </div>

                </div>
            </div>
        </div>
            </div>