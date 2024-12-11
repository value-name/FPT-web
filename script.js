
// Chọn/tắt tất cả các sản phẩm  
const selectAllCheckbox = document.getElementById('selectAll');  
const itemCheckboxes = document.querySelectorAll('.item-checkbox');  

// Thêm sự kiện khi checkbox "Chọn tất cả" thay đổi  
selectAllCheckbox.addEventListener('change', () => {  
    itemCheckboxes.forEach(checkbox => {  
        checkbox.checked = selectAllCheckbox.checked; // Đặt trạng thái checked của từng checkbox theo trạng thái của checkbox "Chọn tất cả"  
    });  
});  

document.getElementById('addToCart').addEventListener('click', function() {  
    // Hiện thông báo thêm thành công  
    alert('Sản phẩm đã được thêm vào giỏ hàng!');  
});
function toggleLoginModal() {
  var modal = document.getElementById("loginModal");
  if (modal.style.display === "flex") {
      modal.style.display = "none";
  } else {
      modal.style.display = "flex";
  }
}

function toggleSelectAll() {
  const selectAll = document.getElementById('selectAll');
  const itemCheckboxes = document.querySelectorAll('.item-checkbox');

  itemCheckboxes.forEach((checkbox) => {
      checkbox.checked = selectAll.checked;
  });
}

// Kiểm tra trạng thái nút "Chọn tất cả"
function checkSelectAll() {
  const selectAll = document.getElementById('selectAll');
  const itemCheckboxes = document.querySelectorAll('.item-checkbox');

  // Nếu tất cả ô sản phẩm được chọn -> "Chọn tất cả" = true, ngược lại = false
  selectAll.checked = Array.from(itemCheckboxes).every((checkbox) => checkbox.checked);
}
// Function to calculate the total price of selected products  
function calculateTotal() {  
  let total = 0;  
  const itemCheckboxes = document.querySelectorAll('.item-checkbox:checked');  
  
  itemCheckboxes.forEach(checkbox => {  
      const price = parseInt(checkbox.getAttribute('data-price'), 10);  
      total += price ;  
  });  

  // Update the total amount display  
  document.getElementById('totalAmount').innerText = total.toLocaleString() + ' ₫';  
  // Update the final amount if necessary (this can include discounts, etc.)  
  const discount = 3500000; // Example discount  
  const finalAmount = total ; // Adjust as needed  
  document.getElementById('finalAmount').innerText = finalAmount.toLocaleString() + ' ₫';  
}  

function toggleSelectAll() {  
  const selectAllCheckbox = document.getElementById('selectAll');  
  const itemCheckboxes = document.querySelectorAll('.item-checkbox');  
  
  itemCheckboxes.forEach(checkbox => {  
      checkbox.checked = selectAllCheckbox.checked;  
  });  

  calculateTotal(); // Recalculate total when toggling select all  
}
