$(document).on('click', '#btn-edit', function() {

    $('.modal-body #id-nelayan'). val($(this). data('id'));
    $('.modal-body #no kk'). val($(this). data('no kk'));
    $('.modal-body #nik'). val($(this). data('nik'));
    $('.modal-body #nik'). val($(this). data('nik'));
    $('.modal-body #nama'). val($(this). data('nama'));
    $('.modal-body #tgl'). val($(this). data('tgl'));
    $('.modal-body #jenis kelamin'). val($(this). data('jenis kelamin'));
    $('.modal-body #alamat'). val($(this). data('alamat'));
    $('.modal-body #agama'). val($(this). data('agama'));
    $('.modal-body #status nelayan'). val($(this). data('status nelayan'));
    $('.modal-body #jenis nelayan'). val($(this). data('jenis nelayan'));
})

$(document).on('click', '#btn-edit', function() {

    $('.modal-body #id-bantuan'). val($(this). data('id'));
    $('.modal-body #tahun'). val($(this). data('tahun'));
    $('.modal-body #nama bantuan'). val($(this). data('nama bantuan'));
    $('.modal-body #jumlah bantuan'). val($(this). data('jumlah bantuan'));
    $('.modal-body #satuan'). val($(this). data('satuan'));
    $('.modal-body #jenis'). val($(this). data('jenis'));
    
})

$(document).on('click', '#btn-edit', function() {

    $('.modal-body #id-nelayan'). val($(this). data('id'));
    $('.modal-body #no kk'). val($(this). data('no kk'));
    $('.modal-body #nama kepala keluarga'). val($(this). data('nama kepala keluarga'));
    $('.modal-body #nik'). val($(this). data('nik'));
    $('.modal-body #no kn'). val($(this). data('no kn'));
    $('.modal-body #alamat'). val($(this). data('alamat'));
    $('.modal-body #status nelayan'). val($(this). data('status nelayan'));
    $('.modal-body #pekerjaan istri'). val($(this). data('pekerjaan istri'));
    $('.modal-body #jumlah anggota keluarga'). val($(this). data('jumlah anggota keluarga'));
    $('.modal-body #penghasilan perbulan/perhari'). val($(this). data('penghasilan perbulan/perhari'));
    $('.modal-body #jenis nelayan'). val($(this). data('jenis nelayan'));
})


// switaler//

const swal = $('.swal').data('swal');
if (swal) {
    swal.fire({
        title: 'Data Berhasil',
        text: swal,
        icon: 'success'
    })
}

$(document).on('click', '.btn-hapus', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Apakah anda yakin?',
      text: 'Data yang dihapus tidak bisa di kembalikan!',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yakin!'
    }).then((result) => {
      if (result.value) {
          document.location.href= href;
      }
    })
})