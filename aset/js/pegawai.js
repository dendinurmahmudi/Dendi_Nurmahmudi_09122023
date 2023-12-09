var host = window.location.origin + "/";

$(document).ready(function () {
    console.log('masuk')
    $('.table').DataTable();
});

function tambah(){
    $('[name = method]').val('add')
    $("#exampleModal").modal('show');
}

function ubah(id){
    $('[name = method]').val('edit')
    $("#exampleModal").modal('show');
    $("#exampleModal input").val('');
    $.ajax({
        url: host+"Dendi_Nurmahmudi_09122023/Admin/get_data/"+id,
        method: 'POST',
        success: function(response) {
            data = JSON.parse(response);
            dt = data.list_data
            console.log(dt)
            $('[name = id]').val(dt.Pegawai_Id)
            $('[name = nama]').val(dt.Pegawai_nama)
            $('[name = umur]').val(dt.Pegawai_umur)
            $('[name = alamat]').val(dt.Pegawai_alamat)
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
        }
      });
}