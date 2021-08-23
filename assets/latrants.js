//Jquery
$(function(){
  //Looping Input nama penumpang sesuai jumlah penumpang
  $(".pesanTiket").click(function(){
    $(".data-penumpang").html("");

    for (let i = 1; i <= $(".jmlPenumpang").val() ; i++) {
      $(".data-penumpang").append(`
        <div class="form-floating mt-2">
          <input type="text" class="form-control namaPenumpang" id="floatingNama" name="namaPenumpang[]" placeholder="Nama Penumpang" required>
          <label for="floatingNama" >Nama Penumpang `+i+`</label>
        </div>`);
    }
  });

  //Send ke Telegram Bot & loading process
  $('form').submit(function(e) {
    e.preventDefault();
    $.ajax({
      url: 'post_telegram.php',
      method: 'POST',
      data: $("form").serialize(),
      beforeSend: function() {
        $(".nama, .alamat, .telp, .namaPenumpang").prop('disabled', true);
        $(".batal, .submit").hide();
        $(".loading").show();
      },
      success: function() {
        $(".nama, .alamat, .telp, .namaPenumpang").prop('disabled', false);
        $(".loading").hide();
        $(".batal, .submit").show();
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
        alert("Terjadi kesalahan");
      }
    });
  });

  //DropDown Kota Tujuan
  let dropdown = $('.tujuan');
  dropdown.empty();
  dropdown.append('<option selected disabled>Pilih Kota</option>');
  dropdown.prop('selectedIndex', 0);
  const url = 'assets/latrants.json';

  $.getJSON(url, function (data) {
    $.each(data, function (key, entry) {
      dropdown.append($('<option></option>').attr('value', entry.kota).text(entry.kota));
    })
  });
});