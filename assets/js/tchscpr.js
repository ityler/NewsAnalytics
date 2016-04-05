$(document).ready(function () {
  $('#modalLoad').modal('show');
  $('#inpSrch.typeahead').typeahead({
        name: 'Tags',
        hint: 'true',
        highlight: 'true',
        source: 'sys/tags.json',
        minLength: 1
    });
  $('.tt-query').css('background-color','#fff');  
});