<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/my_css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/my_css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/my_css/colorpicker.css')}}" />
    <link rel="stylesheet" href="{{asset('css/my_css/datepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('css/my_css/uniform.css')}}" />
    <link rel="stylesheet" href="{{asset('css/my_css/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('css/my_css/matrix-style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/my_css/matrix-media.css')}}" />
    <link rel="stylesheet" href="{{asset('css/my_css/bootstrap-wysihtml5.css')}}" />
    <link href="{{asset('')}}font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
    <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part-->

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                <li class="divider"></li>
                <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
            </ul>
        </li>
        <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
                <li class="divider"></li>
                <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
                <li class="divider"></li>
                <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
                <li class="divider"></li>
                <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
            </ul>
        </li>
        <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
        <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
    </ul>
</div>


<div id="content">
    <div class="container-fluid">
        <hr>
        <div class="row-fluid" style="align-content: center;">
            <div class="span6">
                <div class="widget-box" >
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-center"></i> </span>
                        <h5>Recharge-info</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="{{url('/recharge')}}" method="post" class="form-horizontal">{{csrf_field()}}
                            <div class="control-group">
                                <label class="control-label">Input Amount :</label>
                                <div class="controls">
                                    <input type="number"  name="amount" class="span11" placeholder="Amount" />
                                </div>
                            </div>
                            <div class="control-group">
                                <input   type="hidden" name="currency_code" class="span11" value="KES" />
                            </div>
                            <div class="control-group">
                                <label class="control-label">Number To Pay :</label>
                                <div class="controls">
                                    <input type="text"  name="phoneNumber" class="span11" placeholder="07 xxx xxx" />
                                </div>
                            </div>
                            <!-- <div class="control-group">
                                <label class="control-label">Number To Recharge</label>
                                <div class="controls">
                                    <input type="text"   name="phone1" class="span11" placeholder="07 xxx xxx"  />
                                </div>
                            </div> -->

                            <div class="form-actions">
                                <button type="submit" id="airtime" class="btn btn-success">Send</button>
                            </div>
                        </form>
                        <!-- {{--<form action="index.php" method="POST" class="col-md-6">--}}
                            {{--<div class="col-sm-6 col-offset-sm-3">--}}
                                {{--<input name="phone" type="text" class="form-control" placeholder="Your phone number">--}}
                            {{--</div>--}}
                            {{--<br>--}}
                            {{--<div class="col-sm-6 col-offset-sm-3">--}}
                                {{--<input name="amount" type="text" class="form-control" placeholder="Amount e.g. KES 250">--}}
                            {{--</div>--}}
                            {{--<br>--}}
                            {{--<div class="col-sm-6 col-offset-sm-3">--}}
                                {{--<input class="btn btn-success btn-sm" role="button" type ="submit" id="airtime" value="Send"/>--}}
                            {{--</div>--}}
                        {{--</form>--}} -->
                    </div>
                </div>


            </div>

        </div>

    </div></div>
<!--Footer-part-->
<div class="row-fluid">
    <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="{{asset('js/my_js/jquery.min.js')}}js/"></script>
<script src="{{asset('js/my_js/jquery.ui.custom.js')}}"></script>
<script src="{{asset('js/my_js/bootstrap.min.js')}}"></script>
<script src="js/bootstrap-colorpicker.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.toggle.buttons.js"></script>
<script src="js/masked.js"></script>
<script src="js/jquery.uniform.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/matrix.js"></script>
<script src="js/matrix.form_common.js"></script>
<script src="js/wysihtml5-0.3.0.js"></script>
<script src="js/jquery.peity.min.js"></script>
<script src="js/bootstrap-wysihtml5.js"></script>

</body>
</html>

