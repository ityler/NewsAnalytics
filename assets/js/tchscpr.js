$(document).ready(function () {
  $('#modalLoad').modal('show');
  $('#inpSrch.typeahead').typeahead({
        name: 'tags',
        prefetch: 'data/countries.json',
        limit: 10
    });
});