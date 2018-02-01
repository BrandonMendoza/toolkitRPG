<script>

$(document).ready(function(){

	$(document).on('change','#races', function () {
		$.ajaxSetup({
		  headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});

		 var race_id=$(this).val();
		 //console.log(race_id);
		 var div = $(this).parent();
		 console.log(div);
		 var op=" ";
		$.ajax({
			type:'get',
			url:'{!! URL::to('racesFilter') !!}',
			data:{'id':race_id},
			success:function(data) {
				console.log(data);
				op+='<option class="form-control" value="0" selected disabled>chose product</option>';
                for(var i=0;i<data.length;i++){

                	op+='<option class="form-control" value="'+data[i].id+'">'+data[i].name+'</option>';
                }
                div.find('#classes').html(" ");
                div.find('#classes').append(op);
			},
			error:function() {

			}
		});

	});




	$(document).on('change','#classes', function () {
		$.ajaxSetup({
		  headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});

		 var class_id=$(this).val();
		 //console.log(race_id);
		 var div = $(this).parent();
		 console.log(div);
		 var op=" ";
		$.ajax({
			type:'get',
			url:'{!! URL::to('classFilter') !!}',
			data:{'id':class_id},
			success:function(data) {
				console.log(data);
				op+='<option class="form-control" value="0" selected disabled>chose product</option>';
                for(var i=0;i<data.length;i++){

                	op+='<option class="form-control" value="'+data[i].id+'">'+data[i].name+'</option>';
                }
                div.find('#weapons').html(" ");
                div.find('#weapons').append(op);
			},
			error:function() {

			}
		});

	});
});

</script>