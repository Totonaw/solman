{% extends "main.volt"%}

{% block title %}Edit Profile{% endblock %}
{% block content %}
    <div class="article">
    	<form method="POST" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label"> Employee Id</label>
				<span  class="col-sm-6"><input class="form-control" type="text" disabled value="123456"/></span>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Fullname</label>
				<span  class="col-sm-6"><input class="form-control" type="text" disabled value="Username"/></span>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Email</label>
				<span  class="col-sm-6"><input class="form-control" type="text" disabled value="user@name"/></span>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Birthdate</label>
				<span  class="col-sm-6"><input class="form-control" type="text" value="01/01/0001" /></span>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Bank Account</label>
				<span  class="col-sm-6"><input class="form-control" type="text" value="1234567"/></span>
			</div>
			
			
			<div class="form-group">
				<span class="col-sm-2 control-label">
				<input type="submit" class="btn btn-primary" value="Edit" id="edit">
				</span>
			</div>
		</form>
    </div>
{% endblock %}