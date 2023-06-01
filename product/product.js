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
