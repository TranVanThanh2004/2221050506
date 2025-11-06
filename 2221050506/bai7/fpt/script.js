// --- Danh sách phim ---
const danhSachPhim = [
  {
    id: 1,
    tenPhim: "Mưa đỏ",
    namPhatHanh: 2025,
    tuoi: 16,
    thoiLuong: 2,
    quocGia: "Việt Nam",
    poster: "./img/mua-do2-1122.jpeg",
    theLoai: "Phim chiếu rạp",
    moTa: "Máu xương đổ xuống - Đất trời lưu danh."
  },
  {
    id: 2,
    tenPhim: "Conan",
    namPhatHanh: 2023,
    tuoi: 10,
    thoiLuong: 2,
    quocGia: "Nhật Bản",
    poster: "./img/phim/conan.jpg",
    theLoai: "Phim hoạt hình",
    moTa: "Thám tử nhí phá án cùng những người bạn."
  },
  {
    id: 3,
    tenPhim: "Kung Fu Panda",
    namPhatHanh: 2023,
    tuoi: 10,
    thoiLuong: 2,
    quocGia: "Mỹ",
    poster: "./img/phim/kungfupanda.jpg",
    theLoai: "Phim hoạt hình",
    moTa: "Gấu Po trở lại luyện võ và bảo vệ hòa bình."
  },
  {
    id: 4,
    tenPhim: "Cám",
    namPhatHanh: 2024,
    tuoi: 13,
    thoiLuong: 2,
    quocGia: "Việt Nam",
    poster: "./img/phim/cam.jpg",
    theLoai: "Phim cổ tích",
    moTa: "Câu chuyện Cám - Tấm được kể lại với góc nhìn mới."
  },
  {
    id: 5,
    tenPhim: "Kẻ Ăn Hồn",
    namPhatHanh: 2024,
    tuoi: 18,
    thoiLuong: 2,
    quocGia: "Việt Nam",
    poster: "./img/phim/keanhon.jpg",
    theLoai: "Kinh dị",
    moTa: "Một thế lực đen tối ẩn hiện sau mỗi linh hồn."
  },
  {
    id: 6,
    tenPhim: "Toys",
    namPhatHanh: 2023,
    tuoi: 7,
    thoiLuong: 2,
    quocGia: "Mỹ",
    poster: "./img/phim/toys.jpg",
    theLoai: "Hoạt hình",
    moTa: "Những món đồ chơi trở lại với hành trình mới."
  },
  {
    id: 7,
    tenPhim: "Minions",
    namPhatHanh: 2022,
    tuoi: 6,
    thoiLuong: 1.5,
    quocGia: "Mỹ",
    poster: "./img/phim/minion.jpg",
    theLoai: "Phim hoạt hình",
    moTa: "Những chú Minion tinh nghịch bước vào hành trình mới đầy tiếng cười."
  }
];

// --- Lấy phần tử hiển thị banner ---
const bannerImg = document.querySelector(".phim-noi-bat img");
const bannerTitle = document.querySelector(".phim-noi-bat h2");
const bannerDesc = document.querySelector(".phim-noi-bat p");

// --- Hàm cập nhật banner ---
function capNhatBanner(phim) {
  bannerImg.classList.add("fade-out");

  setTimeout(() => {
    bannerImg.src = phim.poster;
    bannerTitle.textContent = phim.tenPhim.toUpperCase();
    bannerDesc.textContent = phim.moTa;
    bannerImg.classList.remove("fade-out");
  }, 300);
}

// --- Gắn sự kiện click cho tất cả phim ---
document.querySelectorAll(".phim-item img").forEach((img) => {
  img.addEventListener("click", () => {
    const tenPhim = img.dataset.tenphim || img.alt;
    const phim = danhSachPhim.find(
      (p) => p.tenPhim.toLowerCase() === tenPhim.toLowerCase()
    );

    // Nếu có phim trong danh sách thì đổi banner, nếu không vẫn đổi ảnh + tên từ alt
    if (phim) {
      capNhatBanner(phim);
    } else {
      bannerImg.classList.add("fade-out");
      setTimeout(() => {
        bannerImg.src = img.src;
        bannerTitle.textContent = tenPhim.toUpperCase();
        bannerDesc.textContent = "Thông tin phim đang được cập nhật...";
        bannerImg.classList.remove("fade-out");
      }, 300);
    }
  });
});