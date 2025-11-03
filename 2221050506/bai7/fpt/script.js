let danhSachPhim = [
  { id : 1,
    tenPhim : "Mua do",
    namPhatHanh : 2025,
    tuoi : 16,
    thoiLuong : 2,
    quocGia : "Viet Nam",
    poster : "./img/mua-do2-1122.jpeg",
    theLoai : "phim chieu rap",
  },
  {
    id : 2,
    tenPhim : "Conan",
    namPhatHanh : 2023,
    tuoi : 10,
    thoiLuong : 2,
    quocGia : "Nhat Ban",
    poster : "./img/phim/conan.jpg",
    theLoai : "phim hoat hinh",
  },
  {
    id : 3,
    tenPhim : "Kung Fu Panda",
    namPhatHanh : 2023,
    tuoi : 10,
    thoiLuong : 2,
    quocGia : "My",
    poster : "./img/phim/kungfupanda.jpg",
    theLoai : "phim hoat hinh",
  }  
];

let phimHientai = danhSachphim[0];

let banner = document.getElementsByClassName("banner")[0];

function chonPhim(idPhim){
  for(let i = 0; i < danhSachPhim.length; i++){
    if(danhSachPhim[i].id == idPhim){
      phimHientai = danhSachPhim[i];
      break;
      banner.style.backgroundImage = "url('" + phimHientai.poster + "')";
    }
  }
}
