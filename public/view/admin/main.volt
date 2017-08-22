<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Solman Administration</title>
	<link rel="icon" type="image/png" sizes="16x16" href="{{ url('public/images/favicon.ico') }}">
	<!-- js here -->
	
	{{ assetsGlobal.outputJs('js') }}
	
	<!-- css here -->
	{{ assetsGlobal.outputCss('css') }}
	{% block css %}
	{% endblock%}
	
	<style>
		html,body,#main{
			height:100%;
		}
		body{
			background: #dacafb;
		}
		
		.center{
			padding-top: 15px;
			padding-left: 10px;
		}
		
		header{
    		position: relative;
    		max-height: 50px;
    		z-index: 1000;
    		background:#A6B7C8;
    		color:white;
		}
		
		header a{
			color:white;
		}
		
		header .title{
			float: left;
    		text-align: center;
    		width: 220px;
		}
		
		nav .main-nav{
			margin-left:220px;
		}
		
		.sidebar-toggle:before{
			text-shadow: 1px 1px 1px #ccc;
    		-webkit-transition: all 1s ease-in-out;
    		-moz-transition: all 1s ease-in-out;
    		-o-transition: all 1s ease-in-out;
		}
		
		section{
			height:100%;
		}
		.left{
			float:left;
		}
		
		.right{
			float:right;
		}
		
		.main{
			margin:auto;
			background:white;
		}
		
		.active, .active a:hover{
			background: slategrey !important;
    		font-weight: 700;
		}
		
		.menu{
			background:darkslategray;
			width:230px;
			color:white;
			min-height:100%;
			position:absolute;
			left:0;
			z-index:900;
		}
		
		.sidebar-menu{
			list-style:none;
			padding:0;
			margin:0;
		}
		
		.sidebar-menu>li>a{
			display:block;
			padding:10px 0px 5px 15px;
			color:white;
		}
		
		.sidebar-menu li a:hover{
			background:#304242;
			text-decoration:none;
		}
		
		.sidebar-menu li a:active{
			text-decoration:none;
		}
		
		.user-menu{
			padding:10px;
		}
		
		.wrapper{
			margin-left:230px;
			transition: -webkit-transform .3s ease-in-out, margin .3s ease-in-out;
    		transition: transform .3s ease-in-out, margin .3s ease-in-out;
		}
		
		.content{
			padding: 10px 20px 0px 20px;
		}
		
		.article{
    		text-align: justify;
    		padding: 10px;
    		border: antiquewhite 2px solid;
        }
        
        .cols-half{
        	max-width: 40%;
        }
        
        .panel .title{
        	font-size: 24px;
    		font-family: cursive;
    		font-weight: 600;
        }
	</style>
	
</head>

<body>
	<div class="main-wrapper">
	<header class="main-header">
		<nav class="title center">
		{# header banner/image#}
		Administration Page
		</nav>
		<nav class="nav main-nav">
			<div class="top-nav left center">
				<a href="#" class="sidebar-toggle">
					<span class="glyphicon glyphicon-menu-hamburger"></span>
				</a>
			</div>
			<div class="top-nav right">
				<ul class="nav navbar-nav">
					<li><a href="#">News</a></li>
					<li><a href="#">Article</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<aside class="left menu">
			<div class="sidebar">
				<div class="user-menu">
					<div class="image left">
						<img/><span class="glyphicon glyphicon-user"></span>
					</div>
					<div class="info">
						<span>Welcome, <a href="profile">User</a></span>
					</div>
				</div>
				<ul class="sidebar-menu">
					<li {% if(routes) =="home" %} class="active" {% endif %}><a href={{url("admin/home")}}>Home</a></li>
					<li {% if(routes) =="profile" %} class="active" {% endif %}><a href={{url("admin/profile")}}>Profile</a></li>
					<li {% if(routes) =="claim" %} class="active" {% endif %}><a href={{url("admin/claim")}} >Claim</a></li>
					<li {% if(routes) =="opt" %} class="active" {% endif %}><a href="{{url("admin/opportunity")}}">Opportunity</a></li>
				</ul>
			</div>
	</aside>	 
	<section class="main-content wrapper">
		<div class="content">
			<div class="panel panel-default">
				<div class="panel-heading title">
				{% block title %} {% endblock%}
				</div>
				<div class="panel-body">
				
				{% block content %}{% endblock%}
				</div>
			</div>
			
		</div>
	</section>
	
	<footer class="wrapper">
		<!-- Copyright &copy; Solman Manunggal Informatika -->
	</footer>
	</div>
	
	
	{% block javascript %}
	{% endblock %}
</body>

</html>
