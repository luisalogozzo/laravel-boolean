require('./bootstrap');
const Handlebars = require("handlebars");

const $ = require('jquery');

$(document).ready(function () {

  $(document).on('click', '#submit', function () {
    $('.container').html('');
    var name = $('#name').val();
    var age = $('#age').val();
    var gender = $('#gender').val();

    var data = {};
    if (name.length > 0 ) {
      data.name = name;
    }
    if (age.length > 0 ) {
      data.age = age;
    }
    if (gender.length > 0 ) {
      data.gender = gender;
    }



    $.ajax(
      {
        'url': 'http://127.0.0.1:8000/api/students/filter',
        'method': 'POST',
        'data': data,
        'success': function(response) {
          Print(response);
        },
        'error': function() {
          console.log('error');
        }

      }
    );
  });

});

function Print(array) {
  var source = $("#student-template").html();
  var template = Handlebars.compile(source);
  for (var index in array) {
    var context = array[index];
    var html = template(context);
    $(".container").append(html);
  }
}
