{% extends "main.volt"%}

{% block css %}
	<style>
	.profile{
		width:75%;
	}
	
	.profile-title{
		font-size:20px;
		font-family:sans-serif;
	}
	
	.profile-img{
		width:20%;
	}
	
	.profile-img img{
		width:150px;
		height:150px;
	}
	
	.article section::after{
		clear:both;
	}
	
	.btn a{
		color:white;
	}
	</style>
{% endblock %}

{% block title %}Profile{% endblock %}
{% block content %}
    <div class="article">
    	<div class="profile-title">Username</div>
    	<section>
			<div class="left profile-img form-horizontal">
				<img src="test" />
			</div>
    		<div class="left profile form-horizontal">
    			<div class="form-group">
	    			<label class="col-sm-2">Employee Id :</label> 
	    			<label class="col-sm-3">123456</label>
	    		</div>
	    		<div class="form-group">
	    			<label class="col-sm-2">Fullname :</label> 
	    			<label class="col-sm-3">Username</label>
	    		</div>
	    		<div class="form-group">
	    			<label class="col-sm-2">Nickname:</label> 
	    			<label class="col-sm-3">Name</label>
	    		</div>
	    		<div class="form-group">
	    			<label class="col-sm-2">Email :</label> 
	    			<label class="col-sm-3">user@name</label>
	    		</div>
	    		<div class="form-group">
	    			<label class="col-sm-2">Birthdate :</label> 
	    			<label class="col-sm-3">01/01/01</label>
	    		</div>
	    		<div class="form-group">
	    			<label class="col-sm-2">Bank Account :</label> 
	    			<label class="col-sm-3">1234567</label>
	    		</div>
	    		<a class="btn btn-primary" href="{{url("admin/profile/edit")}}">Edit</a>
    		</div>
    	</section>
    	<div style="clear:both"></div>
    </div>
{% endblock %}