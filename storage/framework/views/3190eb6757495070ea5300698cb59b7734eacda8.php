<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Announcement</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <script type="text/javascript" src="js/jquery.1.10.1.js"></script>

  <script src="js/bootstrap.min.js"></script>
  <style>
    /*
	===============================
			@Import		Function
	===============================
*/
    /*
	===============================
			@Import		Mixins
	===============================
*/
    html {
      height: 100%;
    }

    body {
      height: 100%;
      overflow: auto;
      margin: 0;
      padding: 0;
      background: #fff;
    }

    .form-container {
      display: flex;
    }


    .form-form .form-form-wrap {
      max-width: 480px;
      margin: 0 auto;
      min-width: 311px;
      min-height: 100%;
      height: 100vh;
      align-items: center;
      justify-content: center;
    }

    .form-form .form-container {
      align-items: center;
      display: flex;
      width: 100%;
      min-height: 100%;
    }

    .form-form .form-container .form-content {
      display: block;
      width: 100%;
    }

    .form-form .form-form-wrap .user-meta {
      margin-bottom: 35px;
    }

    .form-form .form-form-wrap .user-meta img {
      width: 52px;
      height: 52px;
      border-radius: 50%;
      margin-right: 15px;
      border: 4px solid #e0e6ed;
    }

    .form-form .form-form-wrap .user-meta div {
      align-self: center;
    }

    .form-form .form-form-wrap .user-meta p {
      font-size: 31px;
      color: #3b3f5c;
      margin-bottom: 0;
    }

    .form-form .form-form-wrap h1 .brand-name {
      color: #4361ee;
      font-weight: 600;
    }

    .form-form .form-form-wrap p.signup-link {
      font-size: 14px;
      color: #3b3f5c;
      font-weight: 700;
      margin-bottom: 50px;
    }

    .form-form .form-form-wrap p.signup-link a {
      color: #4361ee;
      border-bottom: 1px solid;
    }

    .form-form .form-form-wrap form .field-wrapper.input {
      position: relative;
      padding: 11px 0 25px 0;
      border-bottom: none;
    }

    .form-form .form-form-wrap form .field-wrapper.input:focus {
      border: 1px solid #000;
    }

    .form-form .form-form-wrap form .field-wrapper.toggle-pass p {
      font-weight: 600;
      color: #3b3f5c;
      margin-bottom: 0;
    }

    .form-form .form-form-wrap form .field-wrapper .logged-in-user-name {
      font-size: 37px;
      color: #3b3f5c;
    }

    .form-form .form-form-wrap form .field-wrapper svg {
      position: absolute;
      top: 16px;
      color: #4361ee;
      fill: rgba(27, 85, 226, 0.239216);
    }

    .form-form .form-form-wrap form .field-wrapper.terms_condition {
      margin-bottom: 20px;
    }

    .form-form .form-form-wrap form .field-wrapper.terms_condition label {
      font-size: 14px;
      color: #888ea8;
      padding-left: 31px;
      font-weight: 100;
    }

    .form-form .form-form-wrap form .field-wrapper.terms_condition a {
      color: #4361ee;
    }

    .form-form .form-form-wrap form .field-wrapper input {
      display: inline-block;
      vertical-align: middle;
      border-radius: 0;
      min-width: 50px;
      max-width: 635px;
      width: 100%;
      min-height: 36px;
      background-color: #ffffff;
      border: none;
      -ms-transition: all 0.2s ease-in-out 0s;
      transition: all 0.2s ease-in-out 0s;
      color: #3b3f5c;
      font-weight: 600;
      font-size: 16px;
      border-bottom: 1px solid #e0e6ed;
      padding: 0px 0 10px 35px;
    }

    .form-form .form-form-wrap form .field-wrapper input::-webkit-input-placeholder,
    .form-form .form-form-wrap form .field-wrapper input::-ms-input-placeholder,
    .form-form .form-form-wrap form .field-wrapper input::-moz-placeholder {
      color: #bfc9d4;
      font-size: 14px;
    }

    .form-form .form-form-wrap form .field-wrapper input:focus {
      border-bottom: 1px solid #4361ee;
      box-shadow: none;
    }

    .form-form .form-form-wrap form .field-wrapper.toggle-pass {
      align-self: center;
      text-align: left;
    }

    .form-form .form-form-wrap form .field-wrapper.toggle-pass .switch {
      margin-bottom: 0;
      vertical-align: sub;
      margin-left: 7px;
    }

    .form-form .form-form-wrap form .field-wrapper button.btn {
      align-self: center;
    }

    .form-form .form-form-wrap form .field-wrapper a.forgot-pass-link {
      width: 100%;
      font-weight: 700;
      color: #4361ee;
      text-align: center;
      display: block;
      letter-spacing: 2px;
      font-size: 15px;
      margin-top: 15px;
    }

    .form-form .form-form-wrap form .field-wrapper .n-chk .new-control-indicator {
      top: 1px;
      border: 1px solid #bfc9d4;
      background-color: #f1f2f3;
    }

    .form-form .form-form-wrap form .field-wrapper .n-chk .new-control-indicator:after {
      top: 52%;
    }

    .form-form .form-form-wrap form .field-wrapper.keep-logged-in {
      margin-top: 60px;
    }

    .form-form .form-form-wrap form .field-wrapper.keep-logged-in label {
      font-size: 14px;
      color: #888ea8;
      padding-left: 31px;
      font-weight: 100;
    }

    .form-form .terms-conditions {
      max-width: 480px;
      margin: 0 auto;
      color: #3b3f5c;
      font-weight: 600;
      margin-top: 90px;
    }

    .form-form .terms-conditions a {
      color: #4361ee;
      font-weight: 700;
    }


    .h5Font {
      font-size: 30px;
      line-height: 55px;
      text-align: justify;
    }


    .form-image {
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      background-image: url("announce/announce.png");
      background-repeat: no-repeat, no-repeat;
      background-size: 100% 100%;
      background-position: left top, right top;
    }

    .form-image .l-image {
      background-image: url('announce/announce.png"');
      position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #060818;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: 75%;
        background-position-x: center;
        background-position-y: center;
    }

    
    .titleHead{
      font-size: 60px;
    }

    .titleDivider{
      width: 30%;
      height: 8px;
      background: <?php echo $announce->color ?>;
      border-radius: 50px;
      display:block;
      margin: auto;
    }
  </style>
  <?php echo $__env->yieldContent('css'); ?>
</head>


<?php echo $__env->yieldContent('content'); ?>

</html><?php /**PATH C:\xampp\htdocs\CloudAppLaravel\CloudAppLaravel\resources\views/layouts/templates.blade.php ENDPATH**/ ?>