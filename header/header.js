function createHeader() {
  var header = document.createElement("header");
  // Thiết lập nội dung và kiểu dáng cho header ở đây

  // Gắn header vào phần tử cha trên mỗi trang
  var parentElement = document.querySelector("#headerContainer");
  parentElement.appendChild(header);
}

// Gọi hàm tạo header trên mỗi trang
createHeader();

// Tải nội dung header từ file HTML
fetch("../header/header.html")
  .then((response) => response.text())
  .then((data) => {
    var headerContainer = document.querySelector("#headerContainer");
    headerContainer.innerHTML = data;
  });

// search for
let navbar = document.querySelector(".navbar");
document.querySelector("#menu-bar").onclick = () => {
  navbar.classList.toggle("active");
};

let search = document.querySelector(".search");
document.querySelector("#search").onclick = () => {
  search.classList.toggle("active");
};
