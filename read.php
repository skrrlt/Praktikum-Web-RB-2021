<table id="tabeldata">
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Angkatan</th>
            <th>CRUD</th>
        </tr>

        <?php
        include "connect.php";
        $query = "select * from tabeldata order by ID asc";
        $hasil=mysqli_query($connect,$query);

        while($data = mysqli_fetch_array($hasil)):
        ?>

        <tr>
            <td><?php echo $data['ID']; ?></td>
            <td><?php echo $data['NIM']; ?></td>
            <td><?php echo $data['Nama']; ?></td>
            <td><?php echo $data['Prodi']; ?></td>
            <td><?php echo $data['Angkatan']; ?></td>
            <td><input id="btn_edit" type="button" value="Edit">
            <input id="btn_hapus" type="button" value="Hapus"></td>
        </tr>

        <?php endwhile; ?>
</table>

<script>
    $(document).ready(function(){

        $('#tabeldata').on('click','#btn_edit',function(){
            $('html, body').animate({scrollTop: 0});
            var baris = $(this).closest('tr').find("td:first").html();
            $('#ID').val(baris);
            $('#edit').show();
            $('#batal').show();
            $('#ID').show();
            
            $.ajax({
                type : "POST",
                url : "edit.php",
                data : data,
                cache : false,
                success : function(data){
                    $('#tampil').load("read.php");
                }
            });
        });

        $('#tabeldata').on('click','#btn_hapus', function(){
            var id = $(this).closest('tr').find("td:first").html();
            var data = {ID:baris};
            $.ajax({
                type : "POST",
                url : "delete.php",
                data : data,
                cache : false,
                success : function(data){
                    $('#tampil').load("read.php");
                }
            });
        });      
    });
</script>