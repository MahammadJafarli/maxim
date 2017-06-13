<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato', sans-serif;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
        <div class="container" style="display: block;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin">Maxim</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">About<span class="sr-only">(current)</span></a></li>
                    <li ><a href="#">Services<span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Works <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">All</a></li>
                            <li><a href="#">Web</a></li>
                            <li><a href="#">Print</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Photography</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#">Inbox</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
        <div class="content">
            <div class="title">Maxim</div>
        </div>
    </div>

    {{--<div class="panel panel-default">--}}
        {{--<div class="panel-heading">--}}
            {{--<h3 class="panel-title text-center">Maxim</h3>--}}
        {{--</div>--}}
        {{--<div class="panel-body">--}}
            {{--<table class="table">--}}
                {{--<tr>--}}
                    {{--<td>About</td>--}}
                    {{--<td>--}}
                        {{--<a href="show"><button class="btn btn-primary">View</button></a>--}}

                    {{--</td>--}}

                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>Services</td>--}}
                    {{--<td>--}}
                        {{--<a href="#"><button class="btn btn-primary">View</button></a>--}}
                        {{--<form action="/admin" method="POST">--}}
                            {{--{{csrf_field()}}--}}
                            {{--<input type="text" name="add_category">--}}
                            {{--<button class="btn btn-success">Add Category</button>--}}
                        {{--</form>--}}
                    {{--</td>--}}

                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>Works</td>--}}
                    {{--<td><a href="#"><button class="btn btn-primary">View</button></a></td>--}}
                {{--</tr><tr>--}}
                    {{--<td>Blogs</td>--}}
                    {{--<td><a href="#"><button class="btn btn-primary">View</button></a></td>--}}
                {{--</tr>--}}
            {{--</table>--}}
        {{--</div>--}}
    {{--</div>--}}

    <script>
        !function($,n,e){var o=$();$.fn.dropdownHover=function(e){return"ontouchstart"in document?this:(o=o.add(this.parent()),this.each(function(){function t(e){o.find(":focus").blur(),h.instantlyCloseOthers===!0&&o.removeClass("open"),n.clearTimeout(c),i.addClass("open"),r.trigger(a)}var r=$(this),i=r.parent(),d={delay:500,instantlyCloseOthers:!0},s={delay:$(this).data("delay"),instantlyCloseOthers:$(this).data("close-others")},a="show.bs.dropdown",u="hide.bs.dropdown",h=$.extend(!0,{},d,e,s),c;i.hover(function(n){return i.hasClass("open")||r.is(n.target)?void t(n):!0},function(){c=n.setTimeout(function(){i.removeClass("open"),r.trigger(u)},h.delay)}),r.hover(function(n){return i.hasClass("open")||i.is(n.target)?void t(n):!0}),i.find(".dropdown-submenu").each(function(){var e=$(this),o;e.hover(function(){n.clearTimeout(o),e.children(".dropdown-menu").show(),e.siblings().children(".dropdown-menu").hide()},function(){var t=e.children(".dropdown-menu");o=n.setTimeout(function(){t.hide()},h.delay)})})}))},$(document).ready(function(){$('[data-hover="dropdown"]').dropdownHover()})}(jQuery,this);
    </script>
</body>
</html>
