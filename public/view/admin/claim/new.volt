{% extends "main.volt" %}

{% block css %}
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
{% endblock %}

{% block title %}
	Create Claim
{% endblock %}

{% block content %}
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
{% endblock %}