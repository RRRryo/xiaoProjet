$("#length, #width, #height, #weightreal").keyup(function() {
    var len = $("#length");
    var wid = $("#width");
    var hei = $("#height");
    if(len.val() && wid.val() && hei.val()) {
        var weightdim = len.val()*wid.val()*hei.val()/5000;
        $('#weightdim').val(weightdim.toFixed(2));
        var weightbuy = Math.ceil(weightdim);
        if($('#weightreal').val()>weightbuy) weightbuy = $('#weightreal').val(); // get the biggest
        if(weightbuy>10 && weightbuy<=15) weightbuy = 15;
        else if(weightbuy>15 && weightbuy<=20) weightbuy = 20;
        else if(weightbuy>20 && weightbuy<=25) weightbuy = 25;
        else if(weightbuy>25 && weightbuy<=30) weightbuy = 30;
        $('#weightbuy').val(weightbuy);
    }else {
        $('#weightdim').val(0);
        $('#weightbuy').val(0);
    }
});


// etape3 colis
$('#add_unit_coli').click(function() {
    if($('#tb_colis tr').length>=11) { alert('可添加的物品最多为10行'); }
    else {
        $('#tb_colis').append('<tr>\
    				<td><div class="has-feedback"><input name="addobjname[]" class="form-control" required/><span class="glyphicon form-control-feedback" aria-hidden="true"></span></div></td>\
    				<td><div class="has-feedback"><input name="addobjpoid[]" class="form-control" required/><span class="glyphicon form-control-feedback" aria-hidden="true"></span></div></td>\
    				<td><div class="has-feedback"><input name="addobjnum[]" class="form-control" required/><span class="glyphicon form-control-feedback" aria-hidden="true"></span></div></td>\
    				<td><div class="has-feedback"><input name="addobjval[]" class="form-control" required/><span class="glyphicon form-control-feedback" aria-hidden="true"></span></div></td>\
    				<td><div class="has-feedback"><select class="form-control" name="addobjpays[]" required>'+$('#objpays').html()+'</select></td>\
    				<td><button type="button" class="btn btn-danger btn-sm btn_dl">删除</button></td>\
				</tr>');
    }
});
$('#tb_colis').on('click', '.btn_dl', function(){
    $(this).parent().parent().remove();
});