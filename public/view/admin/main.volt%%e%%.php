a:9:{i:0;s:396:"<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Solman Administration</title>
	<link rel="icon" type="image/png" sizes="16x16" href="<?= $this->url->get('public/images/favicon.ico') ?>">
	<!-- js here -->
	
	<?= $this->assetsGlobal->outputJs('js') ?>
	
	<!-- css here -->
	<?= $this->assetsGlobal->outputCss('css') ?>
	";s:3:"css";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:2:"
	";s:4:"file";s:43:"/var/www/solman/public/view/admin/main.volt";s:4:"line";i:14;}}i:1;s:3481:"
	
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
	<!-- 8/22/2017 -->
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
					<li <?php if (($routes) == 'home') { ?> class="active" <?php } ?>><a href=<?= $this->url->get('admin/home') ?>>Home</a></li>
					<li <?php if (($routes) == 'profile') { ?> class="active" <?php } ?>><a href=<?= $this->url->get('admin/profile') ?>>Profile</a></li>
					<li <?php if (($routes) == 'claim') { ?> class="active" <?php } ?>><a href=<?= $this->url->get('admin/claim') ?> >Claim</a></li>
					<li <?php if (($routes) == 'opt') { ?> class="active" <?php } ?>><a href="<?= $this->url->get('admin/opportunity') ?>">Opportunity</a></li>
				</ul>
			</div>
	</aside>	 
	<section class="main-content wrapper">
		<div class="content">
			<div class="panel panel-default">
				<div class="panel-heading title">
				";s:5:"title";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:1:" ";s:4:"file";s:43:"/var/www/solman/public/view/admin/main.volt";s:4:"line";i:187;}}i:2;s:50:"
				</div>
				<div class="panel-body">
				
				";s:7:"content";N;i:3;s:156:"
				</div>
			</div>
			
		</div>
	</section>
	
	<footer class="wrapper">
		<!-- Copyright &copy; Solman Manunggal Informatika -->
	</footer>
	</div>
	
	
	";s:10:"javascript";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:2:"
	";s:4:"file";s:43:"/var/www/solman/public/view/admin/main.volt";s:4:"line";i:205;}}i:4;s:18:"
</body>

</html>
";}