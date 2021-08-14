$(document).ready(function(){
    var datap = `
    <div class="form-floating">
        <input type="text" class="form-control" id="floatingNama" placeholder="Nama Penumpang">
        <label for="floatingNama">Nama Penumpang</label>
    </div>
    `

    $(".pesanTiket").click(function(){
        $(".data-penumpang").html("");
        if ($("#jmlPenumpang").val() == 1){
            $(".data-penumpang").append(datap);
        } 
        
        if ($("#jmlPenumpang").val() == 2){
            $(".data-penumpang").append(datap + "<br>");
            $(".data-penumpang").append(datap);
        } 
        
        if ($("#jmlPenumpang").val() == 3){
            $(".data-penumpang").append(datap + "<br>");
            $(".data-penumpang").append(datap + "<br>");
            $(".data-penumpang").append(datap);
        } 

        if ($("#jmlPenumpang").val() == 4){
            $(".data-penumpang").append(datap + "<br>");
            $(".data-penumpang").append(datap + "<br>");
            $(".data-penumpang").append(datap + "<br>");
            $(".data-penumpang").append(datap);
        }

        if ($("#jmlPenumpang").val() == 5){
            $(".data-penumpang").append(datap + "<br>");
            $(".data-penumpang").append(datap + "<br>");
            $(".data-penumpang").append(datap + "<br>");
            $(".data-penumpang").append(datap + "<br>");
            $(".data-penumpang").append(datap);
        }
    });
});