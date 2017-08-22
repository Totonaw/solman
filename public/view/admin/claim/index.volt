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
	 <script src = "../public/js/admin/claim/main.js"></script>
      
{% endblock%}

{% block title %}
	Claim
	<a href="{{url("admin/claim/new")}}" class="no-style" title="Create Claim">
		<span class="glyphicon glyphicon-plus"></span>
	</a>
{% endblock%}

{% block content %}
	<div class="article">
		<table id="claim-table">
			<thead>
				<tr>
					<td>Date</td>
					<td>Project ID</td>
					<td>Description</td>
					<td>Claim Type</td>
					<td>Status</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
			
			</tbody>
		</table>
	</div>
{% endblock%}