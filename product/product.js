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

// Chọn phần tử <div>

const myDiv = document.getElementById("product");

// Tạo một đối tượng XMLHttpRequest
const xhttp = new XMLHttpRequest();

// Xử lý sự kiện khi yêu cầu đã hoàn thành
xhttp.onreadystatechange = function () {
  if (this.readyState === 4 && this.status === 200) {
    // Đặt nội dung HTML vào phần tử <div>
    myDiv.innerHTML = this.responseText;
  }
};

// Gửi yêu cầu để tải trang HTML có mã
xhttp.open("GET", "./product/productsrc.html", true);
xhttp.send();