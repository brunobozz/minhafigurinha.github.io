// function getFileName(elm) {
//     var fn = $(elm).val();
//     var filename = fn.match(/[^\\/]*$/)[0]; // remove C:\fakename
//     //$('.figurinha__foto').css('background-image', 'url(' + filename + ')');
//     $('.figurinha__foto').attr('src', filename);

//     //$('#fileName').attr('value', filename);
// }

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.figurinha__foto').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(document).ready(function () {

    var element = $(".a3"); // global variable
    var elementF = $(".figurinha"); // global variable
    var getCanvas; // global variable

    $("#btn-Preview-Image").on('click', function () {

        var nome = $('#nome').val();
        var tipo = $('#tipo').val();

        html2canvas(elementF, {
            onrendered: function (canvas) {
                //$("#previewImage").append(canvas);

                // var w = window.open();
                // $(w.document.body).html(getCanvas);

                var imgData = canvas.toDataURL("image/jpeg", 1.0);
                var pdf = new jsPDF();

                pdf.addImage(imgData, 'JPEG', 0, 0);
                // imgData.save("figu.jpg");
                pdf.save(tipo+"_"+nome+".pdf");
            }
        });
    });

    $("#pdfDown1").on('click', function () {

        var nome = $('#nome').val();
        var tipo = $('#tipo').val();

        kendo.drawing
            .drawDOM(".figurinha",
                {
                    paperSize: "A5",
                    margin: { top: "0.5cm", left: "0.5cm", bottom: "0.5cm", right: "0.5cm" },
                    scale: 1,
                    height: 500,
                    landscape: false,
                    //template: $(".a3").html(),
                })
            .then(function (group) {
                kendo.drawing.pdf.saveAs(group, "fig_" + tipo + "_" + nome + ".pdf")
            });
    });

    $('#save_image_locally').click(function(){
        var nome = $('#nome').val();
        var tipo = $('#tipo').val();
        html2canvas($('.figurinha1'), {
            onrendered: function (canvas) {
                
                $('#download').attr('href', canvas.toDataURL("image/png"))
                $('#download').attr('download',"fig_" + tipo + "_" + nome + ".png");
                $('#download')[0].click();
                // a.href = canvas.toDataURL("image/jpeg").replace("image/jpeg", "image/octet-stream");
                // a.download = 'somefilename.jpg';
                // a.click();
            }
        });
    });

    $(".draggable").draggable({
        drag: function () {
            var top = $(this).css('top');
            $('.draggable_copy').css('top', top);
            var left = $(this).css('left');
            $('.draggable_copy').css('left', left);
        }
    });

    $("#pdfDown").on('click', function () {

        var nome = $('#nome').val();
        var tipo = $('#tipo').val();

        html2canvas(element, {
            onrendered: function (canvas) {
                //$("#previewImage").append(canvas);
                getCanvas = canvas;
            }
        });
        kendo.drawing
            .drawDOM(".a3",
                {
                    paperSize: "A3",
                    margin: { top: "0.5cm", left: "0.5cm", bottom: "0.5cm", right: "0.5cm" },
                    scale: 0.38,
                    height: 500,
                    landscape: true,
                    //template: $(".a3").html(),
                })
            .then(function (group) {
                kendo.drawing.pdf.saveAs(group, "fig_" + tipo + "_" + nome + ".pdf")
            });
    });


    $('.action').hide();

    $(".bottomItem").click(function(){

        if ($(this).hasClass("clicked")) {
            $(this).removeClass('clicked');
            $('.action').hide();
        }else{
            $(".bottomItem").removeClass('clicked');
            $(this).addClass('clicked');
            $('.action').hide();

            if ($(this).hasClass("itemText")) {
                $('.actText').show();
            }

            if ($(this).hasClass("itemTeam")) {
                $('.actTeam').show();
            }

            if ($(this).hasClass("itemSize")) {
                $('.actSize').show();
            }

            if ($(this).hasClass("itemMove")) {
                $('.actMove').show();
            }

            if ($(this).hasClass("itemRotate")) {
                $('.actRotate').show();
            }

            if ($(this).hasClass("itemPhoto")) {
                $('#file').trigger('click'); 
                $(this).removeClass('clicked');
            }
        }

    })

});



