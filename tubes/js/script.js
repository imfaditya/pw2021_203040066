const keyword = document.querySelector('.keyword');
const container = document.querySelector('.data');
var slider = document.getElementsByClassName('splide');

keyword.addEventListener('keyup', function () {

  fetch('php/ajax.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (container.innerHTML = response));

});

// Preview Image untuk Tambah dan Ubah
function previewImage() {
  const gambar = document.querySelector('.gambar');
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  }
}