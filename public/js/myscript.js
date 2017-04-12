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