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
});
