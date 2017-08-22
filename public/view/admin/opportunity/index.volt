{% extends "main.volt" %}

{% block css%}
	<link href="../public/components/datatables.net-dt/css/jquery.dataTables.css" rel="stylesheet" />
	<style>
		a.no-style, a.no-style:hover{
			text-decoration:none;
			color:black;
		}
	</style>
{% endblock%}

{% block javascript %}
	 <script src = "{{url("public/js/admin/opportunity/main.js")}}"></script>
      
{% endblock%}

{% block title %}
	Opportunity
	<a href="{{url("admin/opportunity/new")}}" class="no-style" title="Create Claim">
		<span class="glyphicon glyphicon-plus"></span>
	</a>
{% endblock%}

{% block content %}
	<div class="article">
		<table id="claim-table">
			<thead>
				<tr>
					<td>Date</td>
					<td>Client</td>
					<td>Project ID</td>
					<td>Time</td>
					<td>Total Time</td>
					<td>Task</td>
					<td>On Site</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
			
			</tbody>
		</table>
	</div>
{% endblock%}