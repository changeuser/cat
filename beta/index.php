<?php
define('BOT_USERNAME', 'coinquestbot'); // place username of your bot here
function getTelegramUserData() {
  if (isset($_COOKIE['tg_user'])) {
    $auth_data_json = urldecode($_COOKIE['tg_user']);
    $auth_data = json_decode($auth_data_json, true);
    return $auth_data;
  }
  return false;
}
if ($_GET['logout']) {
  setcookie('tg_user', '');
  header('Location: index.php');
}
$tg_user = getTelegramUserData();
if ($tg_user !== false) {
  $siteUserExternalId = htmlspecialchars($tg_user['id']);
  $first_name = htmlspecialchars($tg_user['first_name']);
  $last_name = htmlspecialchars($tg_user['last_name']);
  if (isset($tg_user['username'])) {
    $username = htmlspecialchars($tg_user['username']);
    $html = "<h1>Hello, <a href=\"https://t.me/{$username}\">{$first_name} {$last_name}</a>!</h1>";
  } else {
    $html = "<h1>Hello, {$first_name} {$last_name}!</h1>";
  }
  if (isset($tg_user['photo_url'])) {
    $photo_url = htmlspecialchars($tg_user['photo_url']);
  }
  $html .= "<p><a href=\"?logout=1\">Log out</a></p>";
} else {
  $bot_username = BOT_USERNAME;
  $html = <<<HTML
<h1>Hello, anonymous!</h1>
<script async src="https://telegram.org/js/telegram-widget.js?2" data-telegram-login="{$bot_username}" data-size="large" data-auth-url="check_authorization.php"></script>
HTML;
}
  echo <<<HTML



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#ffffff" />


    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
      
      #nav {
width:750px;
margin:0 auto;
list-style:none;
}
#nav li {
float:left;
}
#nav a {
display:block;
text-align:center;
width:150px; /* fixed width */
text-decoration:none; 
}
    </style>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">

<center>{$html} {$siteUserExternalId}</center>
    <br>

<script id="chatBroEmbedCode">
    /* Chatbro Widget Embed Code Start */
    function ChatbroLoader(chats, async) {
        async = !1 !== async;
        var params = {
            embedChatsParameters: chats instanceof Array ? chats : [chats],
            lang: navigator.language || navigator.userLanguage,
            needLoadCode: 'undefined' == typeof Chatbro,
            embedParamsVersion: localStorage.embedParamsVersion,
            chatbroScriptVersion: localStorage.chatbroScriptVersion
        },
        xhr = new XMLHttpRequest;
        xhr.withCredentials = !0;
        xhr.onload = function() {
            eval(xhr.responseText);
        };
        xhr.onerror = function() {
            console.error('Chatbro loading error')
        };
        xhr.open('GET', '//www.chatbro.com/embed.js?' +
            btoa(unescape(encodeURIComponent(JSON.stringify(params)))), async);
        xhr.send();
    }
    /* Chatbro Widget Embed Code End */
    ChatbroLoader({
        encodedChatId: '22K71',
        containerDivId: 'roz',
        siteDomain: 'coinquest.me',
        siteUserExternalId: '{$siteUserExternalId}',
        siteUserFullName: '{$first_name}',
        siteUserAvatarUrl: '{$photo_url}',
        siteUserProfileUrl: 'https://t.me/{$username}'

    });
</script>

<script id="chatBroEmbedCode">
    /* Chatbro Widget Embed Code Start */
    function ChatbroLoader(chats, async) {
        async = !1 !== async;
        var params = {
            embedChatsParameters: chats instanceof Array ? chats : [chats],
            lang: navigator.language || navigator.userLanguage,
            needLoadCode: 'undefined' == typeof Chatbro,
            embedParamsVersion: localStorage.embedParamsVersion,
            chatbroScriptVersion: localStorage.chatbroScriptVersion
        },
        xhr = new XMLHttpRequest;
        xhr.withCredentials = !0;
        xhr.onload = function() {
            eval(xhr.responseText);
        };
        xhr.onerror = function() {
            console.error('Chatbro loading error')
        };
        xhr.open('GET', '//www.chatbro.com/embed.js?' +
            btoa(unescape(encodeURIComponent(JSON.stringify(params)))), async);
        xhr.send();
    }
    /* Chatbro Widget Embed Code End */
    ChatbroLoader({
        encodedChatId: '328oS',
        containerDivId: 'red',
        siteDomain: 'coinquest.me',
        siteUserExternalId: '{$siteUserExternalId}',
        siteUserFullName: '{$first_name}',
        siteUserAvatarUrl: '{$photo_url}',
        siteUserProfileUrl: 'https://t.me/{$username}'

    });
</script>

<script id="chatBroEmbedCode1">
    /* Chatbro Widget Embed Code Start */
    function ChatbroLoader(chats, async) {
        async = !1 !== async;
        var params = {
            embedChatsParameters: chats instanceof Array ? chats : [chats],
            lang: navigator.language || navigator.userLanguage,
            needLoadCode: 'undefined' == typeof Chatbro,
            embedParamsVersion: localStorage.embedParamsVersion,
            chatbroScriptVersion: localStorage.chatbroScriptVersion
        },
        xhr = new XMLHttpRequest;
        xhr.withCredentials = !0;
        xhr.onload = function() {
            eval(xhr.responseText);
        };
        xhr.onerror = function() {
            console.error('Chatbro loading error')
        };
        xhr.open('GET', '//www.chatbro.com/embed.js?' +
            btoa(unescape(encodeURIComponent(JSON.stringify(params)))), async);
        xhr.send();
    }
    /* Chatbro Widget Embed Code End */
    ChatbroLoader({
        encodedChatId: '22K71',
        containerDivId: 'roz',
        siteDomain: 'coinquest.me',
        siteUserExternalId: '{$siteUserExternalId}',
        siteUserFullName: '{$first_name}',
        siteUserAvatarUrl: '{$photo_url}',
        siteUserProfileUrl: 'https://t.me/{$username}'

    });
</script>


  <div class="tab-content ">
    <div id="bootstrap" class="container tab-pane fade"><br>
      <h3>Bootstrap</h3>
      <p>Hello Bootstrap</p>
      <div id="lista"></div>

    </div>
    <div id="laravel" class="container tab-pane active"><br>
      <div id="red"></div>     

    </div>
    <div id="angular" class="container tab-pane fade"><br>
      <h3>Angular</h3>
      <p>Hello Angular</p>
      <div id="roz"></div>
    </div>
  </div>



  <nav class="navbar nav nav-pills fixed-bottom navbar-dark bg-dark navbar-light bg-light">
    <a class="nav-item nav-link" data-toggle="tab" href="#bootstrap">SEND</a>
    <a class="nav-item nav-link active" data-toggle="tab" href="#laravel">DISCUSS</a>
    <a class="nav-item nav-link" data-toggle="tab" href="#angular">RECEIVE</a>
  </nav>



        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>


HTML;
?>
