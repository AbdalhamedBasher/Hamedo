$(function(){

  //add row
  $(document).on('click', '#add-new', function () {
    console.log('etrw');
    e.preventDefault();
      var tr = '<tr><td>' +
      '<td><input class="form-control" type="text" name="lesson_name[]" value=""></td>' +
      '<td><input class="form-control" type="number" name="lesson_hours[]" value=""></td>' +
      '<td><a href="#" class="remove btn btn-xs btn-danger">delete</a></td></tr>';
      $('.body').append(tr);
      return false;
  });
  // remove row
  $(document).on('click', '.remove', function () {
    e.preventDefault();
      var row = $(this).parentsUntil('tr').parent();
      row.remove();
      totalamount();
      return false;
  });
});
