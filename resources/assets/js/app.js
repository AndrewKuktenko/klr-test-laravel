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
