global.$ = global.jQuery = require('jquery');

var bootstrap = require('bootstrap');

global.moment = require('./lib/moment.min');

moment().format();

var tempus = require('./lib/tempusdominus-bootstrap-4.min.js');


var $dateFormat = moment();

$('#datetimepickerStart').datetimepicker({ format: "YYYY-MM-DD HH:mm:ss" });
$('#datetimepickerFinish').datetimepicker({ format: "YYYY-MM-DD HH:mm:ss" });
$('#datetimepickerStartUpdate').datetimepicker({ format: "YYYY-MM-DD HH:mm:ss" });
$('#datetimepickerFinishUpdate').datetimepicker({ format: "YYYY-MM-DD HH:mm:ss" });


$('#myTab a').on('click', function (e) {
    e.preventDefault()
    $(this).tab('show')
});

global.validateUpdateForm = function() {
    var id = document.forms["projectForm"]["id"].value;
    if (id == "") {
        alert("Id must be filled out");
    }
    var name = document.forms["projectForm"]["projectName"].value;
    if (name == "") {
        alert("Name must be filled out");
    }
    var executor = document.forms["projectForm"]["projectExecutor"].value;
    if (executor == "") {
        alert("Executor must be filled out");
    }
    var price = document.forms["projectForm"]["projectPrice"].value;
    if (price == "") {
        alert("Price must be filled out");
    }
}

global.validateCreateForm = function() {
    var name = document.forms["projectForm"]["projectName"].value;
    if (name == "") {
        alert("Name must be filled out");
    }
    var executor = document.forms["projectForm"]["projectExecutor"].value;
    if (executor == "") {
        alert("Executor must be filled out");
    }
    var price = document.forms["projectForm"]["projectPrice"].value;
    if (price == "") {
        alert("Price must be filled out");
    }
}

function readURL(input) {
    switch (input.name) {
        case 'managerPhoto':
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
            break;
        case 'managerPhotoUpd':
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#previewUpd').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
            break;
    }
}

$("#managerPhoto").change(function() {
    readURL(this);
});

$("#managerPhotoUpd").change(function() {
    readURL(this);
});

$('.ajax-projects').click(function (e) {

    var id = this.id;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/getManagers',
        method: 'POST',
        data: { id:id },
        datatype: 'html',
        success: function(response){
            $('#'+id + ' .project-manager').html(response.html);
        },
        error: function(textStatus, errorThrown) {
            console.log("Error: " + textStatus + ' : ' + errorThrown);
        }
    });
});

$('.ajax-managers').click(function (e) {

    var id = this.id;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/getProjects',
        method: 'POST',
        data: { id:id },
        datatype: 'html',
        success: function(response){
            $('#'+id + ' .manager-project').html(response.html);
        },
        error: function(textStatus, errorThrown) {
            console.log("Error: " + textStatus + ' : ' + errorThrown);
        }
    });
});
