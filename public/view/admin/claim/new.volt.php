<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Solman Administration</title>
	<link rel="icon" type="image/png" sizes="16x16" href="<?= $this->url->get('public/images/favicon.ico') ?>">
	<!-- js here -->
	
	<?= $this->assetsGlobal->outputJs('js') ?>
	
	<!-- css here -->
	<?= $this->assetsGlobal->outputCss('css') ?>
	
	<style>
		.thick-line{
			background:black;
			height:2px;
		}
		
		.form-left{
			margin-left:80px;
			margin-bottom:15px;
		}
		
		.btn-pointer{
			cursor:pointer;
		}
	</style>

	
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
				
	Create Claim

				</div>
				<div class="panel-body">
				
				
	<div class="article">
		<form method="POST" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label"> Project ID</label>
				<span class="col-sm-6"> 
					<select class="form-control">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</span>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Claim Type</label>
				<span  class="col-sm-6"><input class="form-control" type="text" disabled/></span>
			</div>
			
			<div class="form-group">
					<h3 class="col-sm-2 control-label" >Detail</h3>
					<div class="col-sm-12"><hr class="thick-line" /></div>
			</div>
			<div class="form-inline form-left" id="detail-1">
				<span class="">
					<select class="form-control">
						<option value="type1">Type 1</option>
						<option value="type2">Type 2</option>
						<option value="type3">Type 3</option>
					</select>
				</span>
				
				<span class="input-group">
					<span class="input-group-addon">Rp</span>
					<input type="text" class="form-control" placeholder="Amount" />
				</span>
				
				<span class="">
					<input type="file" class="form-control" />
				</span>
				
			</div>
			
			<div class="form-inline form-left" id="detail-2">
				<span class="">
					<select class="form-control">
						<option value="type1">Type 1</option>
						<option value="type2">Type 2</option>
						<option value="type3">Type 3</option>
					</select>
				</span>
				
				<span class="input-group">
					<span class="input-group-addon">Rp</span>
					<input type="text" class="form-control" placeholder="Amount" />
				</span>
				
				<span class="">
					<input type="file" class="form-control" />
				</span>
				
				<span class="">
					<span id="remove-2" class="btn-pointer glyphicon glyphicon-remove"></span>
				</span>
			</div>
			
			<div class="form-inline form-left" id="add-detail">
				<div class="input-group btn-pointer">
				<span class="glyphicon glyphicon-plus-sign"></span>
				<label>Add Detail</label>
				</div>
			</div>
			
			<div class="form-group">
				<span class="col-sm-2 control-label">
				<input type="submit" class="btn btn-primary" value="Submit" id="submit">
				</span>
			</div>
		</form>
	</div>

				</div>
			</div>
			
		</div>
	</section>
	
	<footer class="wrapper">
		<!-- Copyright &copy; Solman Manunggal Informatika -->
	</footer>
	</div>
	
	
	
	
</body>

</html>
