/*
 Template Name: Urora - Bootstrap 4 Admin Dashboard
 Author: Mannatthemes
 Website: www.mannatthemes.com
 File:Dashboard init js
 */

!(function ($) {
  "use strict";

  var Dashboard = function () {};

  //creates Bar chart
  (Dashboard.prototype.createBarChart = function (element, data, xkey, ykeys, labels, lineColors) {
    Morris.Bar({
      element: element,
      data: data,
      xkey: xkey,
      ykeys: ykeys,
      labels: labels,
      gridLineColor: "#eef0f2",
      barSizeRatio: 0.4,
      resize: true,
      hideHover: "auto",
      barColors: lineColors,
      fillOpacity: 0.1,
      grid: false,
      axes: false,
    });
  }),
    //creates area chart
    (Dashboard.prototype.createAreaChart = function (element, pointSize, lineWidth, data, xkey, ykeys, labels, lineColors) {
      Morris.Area({
        element: element,
        pointSize: 3,
        lineWidth: 2,
        data: data,
        xkey: xkey,
        ykeys: ykeys,
        labels: labels,
        resize: true,
        hideHover: "auto",
        gridLineColor: "#eef0f2",
        lineColors: lineColors,
        fillOpacity: 0.1,
        xLabelMargin: 10,
        yLabelMargin: 10,
        pointSize: 3,
        parseTime: false, // Tambahkan ini
      });
    }),
    (Dashboard.prototype.init = function () {
      //creating bar chart
      var $barData = [
        { y: "January", a: 100, b: 90 },
        { y: "February", a: 75, b: 65 },
        { y: "March", a: 50, b: 40 },
        { y: "April", a: 75, b: 65 },
        { y: "May", a: 50, b: 40 },
        { y: "June", a: 75, b: 65 },
        { y: "July", a: 100, b: 90 },
        { y: "August", a: 90, b: 75 },
      ];
      this.createBarChart("morris-bar-example", $barData, "y", ["a", "b"], ["$", "Sales"], ["#009688 ", "#3f51b5"]);

      //creating area chart
      var $areaData = [
        { y: "Event A", a: 100, b: 10 },
        { y: "Event B", a: 300, b: 35 },
        { y: "Event C", a: 100, b: 25 },
        { y: "Event D", a: 550, b: 45 },
        { y: "Event E", a: 200, b: 20 },
        { y: "Event F", a: 400, b: 35 },
        { y: "Event G", a: 100, b: 25 },
        { y: "Event H", a: 250, b: 20 },
      ];
      this.createAreaChart("morris-area-chart", 0, 0, $areaData, "y", ["a"], ["Tiket Terjual"], ["#009688 ", "#3f51b5"]);

      $(".bar").peity("bar", {
        width: "200",
        height: "50",
      });

      $(".live-tile, .flip-list").not(".exclude").liveTile();

      var owl = $(".owl-carousel");
      owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
      });
    }),
    ($.Dashboard = new Dashboard()),
    ($.Dashboard.Constructor = Dashboard);
})(window.jQuery),
  //initializing
  (function ($) {
    "use strict";
    $.Dashboard.init();
  })(window.jQuery);
