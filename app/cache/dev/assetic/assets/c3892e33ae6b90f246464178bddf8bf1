$(document).ready(function () {



    $("#icgm2_pagesbundle_events_startDate").datetimepicker({
        startDate: new Date()
    });

    $("#icgm2_pagesbundle_events_endDate").datetimepicker({
        startDate: new Date()
    });


    //*************************************************************
    var $note = $(".summernote");
    $note.summernote({
        oninit: function () {
            if ($note.code() == "" || $note.code().replace(/(<([^>]+)>)/ig, "") == "") {
                $note.code($note.attr("placeholder"));
            }
        }, onfocus: function (e) {
            if ($note.code() == $note.attr("placeholder")) {
                $note.code("");
            }
        }, onblur: function (e) {
            if ($note.code() == "" || $note.code().replace(/(<([^>]+)>)/ig, "") == "") {
                $note.code($note.attr("placeholder"));
            }
        }, onkeyup: function (e) {
            $("span[for='noteEditor']").remove();
        },
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link']]
        ]
    });

    //**************************************************************

});

$("#icgm2_pagesbundle_events_entity").select2();

