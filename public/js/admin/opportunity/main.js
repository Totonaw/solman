$(document).ready(function(){
	var table = _initDtTable();
	_initError(table);
	_initData(table);
})

function _initDtTable(){
	return $("#claim-table").DataTable({
		"lengthChange":false,
		"searching":false,
		"info":false,
		"ajax":{
			"url":"opportunity/getData",
			"dataSrc":function(json){
				return json;
			}
		},
		"columns": [
	        { data: "date" },
	        { data: "client" },
	        { data: "projectId" },
	        { data: "time" },
	        { data: "totalTime" },
	        { data: "task" },
	        { data: "onSite" },
	        { data: function(data,t){
	        	if(data.status!="Approved")
	        		return "<a href='#'>Edit</a>";
	        	else
	        		return "-";
	        } }
	     ],
	     "columnDefs": [{
	    	"defaultContent": "-",
	    	"targets": "_all"
	     }]
	});
}

function _initData(table){
	var data = [];
	//table.on('xhr.dt',function(e,s,json,xhr){
		
	//});
}

function _initError(table){
	table.on('error.dt',function(e,s,note,msg){
		console.log(note);
		console.log(msg);
	})
	
}