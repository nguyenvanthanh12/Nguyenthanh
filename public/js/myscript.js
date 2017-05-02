$(document).ready(function() {
    $('#dataTables-example').DataTable({
            responsive: true
    });
    $('div.alert').delay(3000).slideUp();
});
$(".select-multiple").select2();

$(document).ready(function(){
	$('#addImg').click(function(){
		$('#insert').append('<div class="form-group"><input type="file" name="feditdetail[]"></div>');
	});
});
$(document).ready(function(){
	$('a#del-imgdetail').on('click', function(){
		var url = "http://nguyenthanh.dev/thql_admin/sanpham/delImg/";
		var _token = $("form[name='frmEditPd']").find("input[name='_token']").val();
		var idHinh = $(this).parent().find("img").attr('idHinh');
		var img = $(this).parent().find("img").attr('src');
		var rid = $(this).parent().find("img").attr('id');
		$.ajax({
			url : url + idHinh,
			type : 'GET',
			cache: false,
			data : {"_token":_token,"idHinh":idHinh,"urlHinh":img},
			success : function(data){
				if(data == "OK"){
					$("#"+rid).remove();
				}else {
					alert(aaaa);
				}
			}
		});
	});
});

/*$(document).ready(function(){

	$('a#xem').on('click',function(){
		var url = "http://nguyenthanh.dev/thql_admin/lienhe/danhsach/setting/";
		var idTin
	});
});*/
$(document).ready(function () {

    $(function(){
		var color_footer = $('.colorpickerplus-embed .colorpickerplus-container');
        color_footer.colorpickerembed();
        color_footer.on('changeColor', function(e,color1){
			if(color1==null)
			$('#color_footer').val('transparent').css('background-color', '#fff');//tranparent
			else
        	$('#color_footer').val(color1).css('background-color', color1);
        });
		
		var demo1 = $('#demo1');
        demo1.colorpickerplus();
        demo1.on('changeColor', function(e,color){
			if(color==null)
			$(this).val('transparent').css('background-color', '#fff');//tranparent
			else{
        	$(this).val(color).css('background-color', color);
        }
        });
    });
});