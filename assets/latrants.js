$(function(){
    let datap = `
    <div class="form-floating mt-2">
        <input type="text" class="form-control" id="floatingNama"  name="namaPenumpang" placeholder="Nama Penumpang">
        <label for="floatingNama">Nama Penumpang </label>
    </div>`;

    $(".pesanTiket").click(function(){
        $(".data-penumpang").html("");
        for (let i = 1; i <= $(".jmlPenumpang").val() ; i++) {
            $(".data-penumpang").append(datap);
        }
    });

});