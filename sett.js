$(document).ready(function(){
    $('#batal').click(function(){
        $('#batal').hide();
        $('#edit').hide();
    });
    
    $('#edit').click(function(){
        var data = $('#form').serialize();
        $.ajax({
            type : "POST",
            url : "edit.php",
            data : data,
            cache : false,
            success : function(data){
                $('#tampil').load('read.php');
            }
        });
    });

    $('#edit').click(function(){
        $('#batal').hide();
        $('#edit').hide();
    });

    $('#tampil_data').load("read.php");
    $('#tabeldata').click(function(){
        var data = $('#form').serialize();
        $.ajax({
            type : "POST",
            url : "delete.php",
            data : data,
            cache : false,
            success : function(data){
                $('#tampil').load('read.php');
            }
        });
    });
});