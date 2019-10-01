function ajax(url,type,data = '',button= null,self =null){
	if(button !=null){
		var l = Ladda.create(button);
		l.start();
	}
	if(self !=null){
		self.$Progress.start();
	}
	var processData;
	var contentType;
	if(typeof(data) !== 'string'){
		processData = false;
		contentType = false;
	}
	returndata = null;
	$.ajax({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
			'APP-TOKEN' : '1l23f134b1'
			},
		url: url,
		processData: processData,
        contentType: contentType,
		type: type,
		data: data,
	})
	.done(function(data) {
		if(data.hasOwnProperty('errors')){
			$("#errorsdiv").html(makeerrors(data.errors));
			$("#errorsdiv").css({
				display: 'block'
			});
			self.$Progress.fail();
		}
		if(data.hasOwnProperty('msg')){
			if(data.msg.type == 'success' && !data.hasOwnProperty('url')){
				self.data = data.data;				
			}
			showbtnflag = true;
			if(data.hasOwnProperty('refresh')){				
				showbtnflag = false;
			}
			swal({
				title : data.msg.type,
				type : data.msg.type,
				text : data.msg.msg,
				showConfirmButton: showbtnflag
			});
		}
		if (data.hasOwnProperty('url')) {
			location.assign(data.url);
		}
		if(data.hasOwnProperty('refresh')){
			if(data.refresh == true){
				window.reload();
			}
		}
	})
	.fail(function(error) {
		swal({
				title : 'error',
				type : 'error',
				text : error,
				showConfirmButton: true
			});
		self.$Progress.fail();
	})
	.always(function(){
		l.stop();
		self.$Progress.finish();
	});
}
function makeerrors(errors){
	html = '<div class="alert alert-dismissible alert-danger">'+
	'<div class="close" data-dismiss="alert">&times;</div>';
	$.each(errors, function(index, val) {
		html+=val+"<br>";	
	});
	html+='</div>';
	return html;
}