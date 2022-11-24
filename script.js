req1 = new XMLHttpRequest();
let data = [];
req1.onreadystatechange = function () {
  data = req1.response;
};
req1.open("GET", "test.php", true);
req1.responseType = "json";
req1.send();

var total = 0;
var result1;
function buy(i) {
  $.post("buy.php", { id: i }, function (result) {
    result1 = result;
    if (result1 == "done") {
      var x = document.getElementById("bill");
      var d = document.createElement("div");
      d.innerHTML =
        `<img src="` +
        data[i - 1].img +
        `" style="width: 90px; margin:10px; border-radius: 10%;">` +
        data[i - 1].name +
        " | price: " +
        data[i - 1].price +
        "$";
      x.appendChild(d);
      total += parseInt(data[i - 1].price);
      var t = document.getElementById("total");
      t.innerText = total + "$";
    } else if (result1 == "not enough qtyy") {
      alert(result1);
    }
  });
}

function toggle() {
  var b = document.querySelector(".cnt");
  b.style.display = "flex";
  var c = document.querySelector("#icon");
  c.style.display = "none";
}
function toggle0() {
  var b = document.querySelector(".cnt");
  b.style.display = "none";
  var c = document.querySelector("#icon");
  c.style.display = "grid";
}
function order() {
  alert(" Thank you for buying from us \n your order is confirmed");
}
function toggel() {
  var toggel = document.querySelector(".nav");
  toggel.style.display = "flex !important";
}
function toggel0() {
  var toggel = document.querySelector(".nav");
  toggel.style.display = "none !important";
}
