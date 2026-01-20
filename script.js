// التحقق من أن الحقول مش فاضية
document.addEventListener("DOMContentLoaded", function() {
  const form = document.querySelector("form");
  const emailInput = document.querySelector("input[name='email']");
  const passwordInput = document.querySelector("input[name='password']");

  form.addEventListener("submit", function(event) {
    if (emailInput.value.trim() === "" || passwordInput.value.trim() === "") {
      alert("من فضلك املأ كل الحقول");
      event.preventDefault(); // يمنع إرسال الفورم لو فاضي
    }
  });

  toggleBtn.addEventListener("click", function() {
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
    } else {
      passwordInput.type = "password";
    }
  });
});

function toggleMenu() {
  var menu = document.getElementById("menu");
  if (menu) {
    menu.classList.toggle("show");
  }
}