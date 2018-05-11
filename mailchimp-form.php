<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
#mc_embed_signup {
    background: #f1ead1;
    clear: left;
	max-width:588px;
	margin:0 auto;
	border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
}

#mc_embed_signup_scroll label {
    color: #fff;
}

#mc_embed_signup input.email {
    display: block;
    padding: 8px 0;
    margin: 12px auto 15px;
    text-indent: 5px;
    width: 58%;
    min-width: 130px;
    font-size: 16px !important;
	text-align:center;
	border:1px solid #ddd2ac;
}

#mc_embed_signup form {
    display: block;
    position: relative;
    text-align: center;
    padding: 20px;
}

#mc_embed_signup input.button {
    display: block;
    width: 35%;
    margin: 0 auto;
    min-width: 90px;
    font-size: 20px;
    padding: 8px 0px;
    height: inherit;
	cursor:pointer;
	cursor:hand;
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
}

#mc_embed_signup .button {
    background-color: #06c;
	color:#fff;
}

#mc_embed_signup .button:hover {
    background-color: #83B6FF;
}
</style>
<div id="mc_embed_signup">
    <form action="//lagoonspaseminyak.us9.list-manage.com/subscribe/post?u=5dd3c1a90ed448d24c22880f0&amp;id=4c3c13cdd0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
    	<label for="mce-EMAIL" style="font-size:21px; color:#330;">Don't miss any member-only specials!</label>
    	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email" required>
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5dd3c1a90ed448d24c22880f0_4c3c13cdd0" tabindex="-1" value=""></div>
        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
        </div>
    </form>
</div>
<!--End mc_embed_signup-->

<!-- MODAL -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/basicModal/3.3.1/basicModal.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/basicModal/3.3.1/basicModal.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Cookies.js/1.2.1/cookies.min.js"></script>
<style>
p.bold-s {
    font-weight: 600;
    font-size: 16px;
    margin-bottom: 0px;
}
label.label-s {
    display: block;
    text-align: center;
    margin-bottom: 15px;
}
input.control-s {
    display: block;
    border: 1px #aaa solid;
    padding: 10px;
    margin: 0 auto;
    width: 80%;
	text-align:center;
}
button.btn-s {
    background-color: #2E75ED;
    display: block;
    padding: 10px 25px;
    color: #fff;
    font-weight: bold;
    margin: 6px auto 0;
    font-size: 18px;
	cursor:pointer;
	cursor:hand;
}
a#basicModal__action.basicModal__button { font-style:normal !important; text-decoration:underline !important;}
</style>
<div id="modal-subscribe" style="display: none;">
    <div class="inner-modal">
        <form action="//lagoonspaseminyak.us9.list-manage.com/subscribe/post?u=5dd3c1a90ed448d24c22880f0&amp;id=4c3c13cdd0" method="post" class="validate" target="_blank">
            <p class="bold-s">Don't miss any special offer!</p>
            <label class="label-s">It's just an email address away.</label>
            <input type="email" value="" name="EMAIL" placeholder="Enter your email" required class="control-s">
            <button type="submit" class="btn-s" onclick="setSubscribe();">Subscribe</button>
        </form>
    </div>
</div>

<script>
var modalObj = {
    body: document.getElementById('modal-subscribe').innerHTML,
    closable: true,
    buttons: {
        action: {
            title: "I don't want any discounts",
            fn: basicModal.close
        }
    }
};

var showModal = function(){
    if(Cookies('isSubscribe') != '1'){
        basicModal.show(modalObj)
        setSubscribe()
    }
}

var setSubscribe = function(){
    Cookies.set('isSubscribe', 1, {
        /* expires: 604800 */
        expires: 86400
    });
}

var docCookie = function(){
    document.onmouseleave = function(){
        showModal();
    };
}

docCookie();

window.setTimeout(function(){
    showModal();
}, 30000);

</script>
<!-- MODAL -->
