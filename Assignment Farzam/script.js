$(document).ready(function () {


    $(".choosefile").click(function () {
       $("#Image").trigger('click');
    })

    $("#VisibleImage").click(function () {
        $("#Image").trigger('click');
    })


    $("#Image").change(function () {
        if (this.files && this.files[0]) {
            var fileReader = new FileReader();
            fileReader.readAsDataURL(this.files[0]);
            fileReader.onload = function (x) {

                $("#VisibleImage").attr('src', x.target.result);
            }
        }
    })
})
