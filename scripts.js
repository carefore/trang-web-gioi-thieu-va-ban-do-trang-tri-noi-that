// Sử dụng jQuery để thực hiện các chức năng tương tác

$(document).ready(function() {
  // Xử lý khi Form được submit
  $('#productForm').submit(function(e) {
    e.preventDefault(); // Ngăn chặn hành động mặc định của Form

    // Gửi dữ liệu Form đến process.php bằng phương thức POST
    $.post('process.php', $(this).serialize(), function(response) {
      alert(response); // Hiển thị thông báo từ server
      // Có thể thực hiện các hành động khác sau khi dữ liệu được gửi và xử lý xong
    });
  });
});
