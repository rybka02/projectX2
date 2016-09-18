$(document).ready(function() {

  ////////////////////////////////////////////////////
  // Dictates which genders may be selected.
  var genders = ["female", "male", "transsexual"];
  ////////////////////////////////////////////////////


  // displays genders to screen
  displayGender(genders);

  /*
   *  This function fills a combobox with the appropriate genders
   *  @var genders array | array which determines which genders are to be displayed
   *  @var Template obj | a cloned object which lists all the appropriate genders
   *  @var g string | stores each gender momentarily
   *  @var i int | index of function which will be the value for each option
   */
  function displayGender(genders){
    _.each(genders, function(g, i){
      var Template = $("#gender-opt").clone().text(g).val(i);
      Template.removeAttr("id");
      $("#gender-select").append(Template);
    });
    // removes the first option in select box (which is blank)
    $("#gender-select option:selected").remove();
  }



});