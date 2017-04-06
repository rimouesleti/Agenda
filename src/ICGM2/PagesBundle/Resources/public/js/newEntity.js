$('#add_entity_sort').on('change', function() {
    if ($(this).val() === "company") {
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
    $("#add_entity_file").click();
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

$("#add_entity_speciality").select2();

//************************************************************
$("#add_entity_country").change(function() {
    if ($(this).val() !== "" && $("#getPositionBTN").css("display","none")) {
        $("#getPositionBTN").show();
    }else{
        $("#getPositionBTN").hide();
    }
});

$("#add_entity_city").change(function() {
    if ($(this).val() !== "" && $("#getPositionBTN").css("display","none") && $("#add_entity_country").val()!=="") {
        $("#getPositionBTN").show();
    }else{
        $("#getPositionBTN").hide();
    }
});