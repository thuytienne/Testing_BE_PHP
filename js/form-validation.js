$(document).ready(function() {
    $("#contactForm").on("submit", function(e) {
        // e.preventDefault(); 
        
        $(".form-control").removeClass("error-border");
        $(".error-message").hide();

        var name = $("#name").val().trim();
        var phone = $("#phone").val().trim();
        var email = $("#email").val().trim();
        var message = $("#message").val().trim();
        var valid = true;

        // Kiểm tra trường "name"
        if (!name) {
            $("#name").addClass("error-border");
            $("#nameError").show();
            valid = false;
        }

        // Kiểm tra trường "phone"
        if (!phone) {
            $("#phone").addClass("error-border");
            $("#phoneError").show();
            valid = false;
        }

        // Kiểm tra trường "email"
        if (!email || !validateEmail(email)) {
            $("#email").addClass("error-border");
            $("#emailError").show();
            valid = false;
        }

        // Kiểm tra trường "message"
        if (!message) {
            $("#message").addClass("error-border");
            $("#messageError").show();
            valid = false;
        }

         // Nếu có lỗi, ngăn gửi form và hiển thị modal lỗi
         if (!valid) {
            e.preventDefault();
            showErrorModal();
        } else {
            // Form hợp lệ, cho phép gửi form
            $(this).unbind('submit').submit();  // Loại bỏ preventDefault và submit form
        }
    });

    // Hàm để hiển thị modal lỗi
    function showErrorModal() {
        $("#overlay").show();
        $("#errorModal").show();
    }

    // Đóng modal khi nhấn "Try again"
    $("#tryAgain").click(function () {
        $("#overlay").hide();
        $("#errorModal").hide();
    });

    // Hàm để kiểm tra định dạng email
    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@(([^<>()[\]\.,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,})$/i;
        return re.test(String(email).toLowerCase());
    }
});