$(document).ready(function() {
  $("#myCarousel").carousel({
    interval: 10000
  });

  $("#myCarousel").on("slid.bs.carousel", function() {
    //alert("slid");
  });

  $("#expeditionCarousel").carousel({
    interval: 10000
  });

  $("#expeditionCarousel").on("slid.bs.carousel", function() {
    //alert("slid");
  });

  function overlay() {
    $(function() {
      $("#signup").dialog({
        width: 250,
        height: 180,
        modal: true
      });
    });
  }
});
