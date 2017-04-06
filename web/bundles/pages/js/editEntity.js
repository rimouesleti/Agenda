$('#icgm2_pagesbundle_entities_sort').on('change', function() {
    if ($(this).val() === "Entreprise") {
        $("#employeesLabel").fadeIn("slow");
        $("#faxLabel").fadeIn("slow");
    } else {
        $("#employeesLabel").fadeOut("slow");
        $("#faxLabel").fadeOut("slow");
    }
});
//*************************************************************
$("#uploadBTN").bind("click", function(event) {
    event.stopPropagation();
    event.preventDefault();
    $("#icgm2_pagesbundle_entities_file").click();
});

//*************************************************************
var $note = $(".summernote");
$note.summernote({
    oninit: function() {
        if ($note.code() == "" || $note.code().replace(/(<([^>]+)>)/ig, "") == "") {
            $note.code($note.attr("placeholder"));
        }
    }, onfocus: function(e) {
        if ($note.code() == $note.attr("placeholder")) {
            $note.code("");
        }
    }, onblur: function(e) {
        if ($note.code() == "" || $note.code().replace(/(<([^>]+)>)/ig, "") == "") {
            $note.code($note.attr("placeholder"));
        }
    }, onkeyup: function(e) {
        $("span[for='noteEditor']").remove();
    },
    toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['insert', ['link', 'table']]
    ]
});

//*************************************************************

$("#icgm2_pagesbundle_entities_speciality").select2();

//************************************************************
$("#icgm2_pagesbundle_entities_country").change(function() {
    if ($(this).val() !== "" && $("#getPositionBTN").css("display","none")) {
        $("#getPositionBTN").show();
    }else{
        $("#getPositionBTN").hide();
    }
});

$("#icgm2_pagesbundle_entities_city").change(function() {
    if ($(this).val() !== "" && $("#getPositionBTN").css("display","none") && $("#icgm2_pagesbundle_entities_country").val()!=="") {
        $("#getPositionBTN").show();
    }else{
        $("#getPositionBTN").hide();
    }
});