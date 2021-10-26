$(document).ready(function () {
  // ajax chart

  $.ajax({
    url: "core/chart.php",
    type: "POST",
    dataType: "json",

    success: function (data) {
      var value = [];
      for (var i = 1; i < data.length; i++) {
        value.push(Object.values(data[i])[0]);
        console.log(value);
      }

      var chartdata = {
        labels: [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
        ],
        datasets: [
          {
            label: "Số sách",
            fill: false,
            lineTension: 0.3,
            backgroundColor: chartColors.green,
            borderColor: chartColors.green,
            pointHoverBackgroundColor: chartColors.green,
            pointHoverBorderColor: chartColors.green,
            hoverBackgroundColor: chartColors.gold,
            data: value,
            yAxisID: "y-axis-1",
          },
        ],
      };

      var ctx = $("#myChart");

      var LineGraph = new Chart(ctx, {
        type: "line",
        data: chartdata,
        options: {
          title: {
            display: true,
            text: "",
            maintainAspectRatio: false,
            fontColor: chartColors.green,
          },
          responsive: true,
          scales: {
            xAxes: [
              {
                display: true,
                scaleLabel: {
                  display: true,
                  labelString: "",
                },
              },
            ],
          },
        },
      });
    },
    error: function (data) {},
  });
  window.chartColors = {
    red: "rgb(255, 99, 132)",
    orange: "rgb(255, 159, 64)",
    yellow: "rgb(255, 205, 86)",
    green: "rgb(75, 192, 192)",
    blue: "rgb(54, 162, 235)",
    purple: "rgb(153, 102, 255)",
    gold: "rgb(248,193,28)",
    grey: "rgb(201, 203, 207)",
  };

  // ajax filter category
  $("#select_category").change(function () {
    var value = $("#select_category").find(":selected")[0].value;
    $.ajax({
      url: "core/filter_cate.php",
      type: "POST",
      data: { id: value },
      success: function (data) {
        $("#body-table").html(data);
      },
    });
  });
  //ajax select num row
  $("#select_num_row").change(function () {
    var value = $("#select_num_row").find(":selected")[0].value;
    $.ajax({
      url: "core/select_row.php",
      type: "POST",
      data: { id: value },
      success: function (data) {
        $("#body-table").html(data);
      },
    });
  });

  //ajax select status
  $("#select_status").change(function () {
    var value = $("#select_status").find(":selected")[0].value;
    $.ajax({
      url: "core/select_status.php",
      type: "POST",
      data: { id: value },
      success: function (data) {
        $("#body-table").html(data);
      },
    });
  });

  // ----------------------- Ajax thêm sản phẩm
  $("#add-product").click(function () {
    var dataform = new FormData();

    var pr_name = $("#pr_name").val();
    var pr_code = $("#pr_code").val();
    var auth_name = $("#auth_name").val();
    var pub_name = $("#pub_name").val();
    var pr_number = $("#pr_number").val();
    var pr_desc = $(".pr_desc").val();
    var pr_category = $("#pr_category").val();
    var pr_price = $("#pr_price").val();
    var pr_discount = $("#pr_discount").val();
    var pr_images = $("#pr_images")[0].files;
    var check_file = false;
    for (var i = 0; i < pr_images.length; i++) {
      var type = pr_images[i] != null ? pr_images[i].type : null;
      console.log(type);
      //Xét kiểu file được upload
      var match = ["image/gif", "image/png", "image/jpeg"];
      if (type == match[0] || type == match[1] || type == match[2]) {
        dataform.append("pr_images[]", pr_images[i]);
        check_file = true;
      }
    }

    //var type = pr_images != null ? pr_images.type : null;
    //Xét kiểu file được upload

    if (check_file == true) {
      dataform.append("pr_name", pr_name);
      dataform.append("pr_code", pr_code);
      dataform.append("auth_name", auth_name);
      dataform.append("pub_name", pub_name);
      dataform.append("pr_number", pr_number);
      dataform.append("pr_desc", pr_desc);
      dataform.append("pr_category", pr_category);
      dataform.append("pr_price", pr_price);
      dataform.append("pr_discount", pr_discount);
      dataform.append("pr_images", pr_images);
      $.ajax({
        url: "core/add-product.php",
        type: "POST",
        data: dataform,
        dataType: "text",
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
          if ((data = "errors")) {
            $(".modal-success__title").text("Thêm sản phẩm thất bại");

            $(".modal-success__icon").attr(
              "src",
              "img/content/checked-fail.png"
            );
          }
        },
      });
    } else {
      $(".modal-success__title").text("Vui lòng chọn file PNG, JPEG, JPG");
      $(".modal-success__icon").attr("src", "img/content/checked-fail.png");
    }
  });
});
