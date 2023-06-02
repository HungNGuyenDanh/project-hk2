// Tải header
var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
  if (xhr.readyState === 4 && xhr.status === 200) {
    document.getElementById("header").innerHTML = xhr.responseText;
  }
};
xhr.open("GET", "./header/header.html", true);
xhr.send();

// Tải footer
var xhr2 = new XMLHttpRequest();
xhr2.onreadystatechange = function () {
  if (xhr2.readyState === 4 && xhr2.status === 200) {
    document.getElementById("footer").innerHTML = xhr2.responseText;
  }
};
xhr2.open("GET", "./footer/footer.html", true);
xhr2.send();
