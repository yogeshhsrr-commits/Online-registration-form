$(document).ready(function () {
    $("#registrationForm").on("submit", function (e) {
        let isValid = true;

        // Clear previous errors
        $(".error").text("");
        $("input, select, textarea").removeClass("input-error");

        // Full name
        const fullname = $("#fullname").val().trim();
        if (fullname === "") {
            isValid = false;
            $("#err-fullname").text("Full name is required.");
            $("#fullname").addClass("input-error");
        }

        // Email
        const email = $("#email").val().trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === "") {
            isValid = false;
            $("#err-email").text("Email is required.");
            $("#email").addClass("input-error");
        } else if (!emailRegex.test(email)) {
            isValid = false;
            $("#err-email").text("Enter a valid email address.");
            $("#email").addClass("input-error");
        }

        // Phone
        const phone = $("#phone").val().trim();
        const phoneRegex = /^[0-9]{10}$/;
        if (phone === "") {
            isValid = false;
            $("#err-phone").text("Phone number is required.");
            $("#phone").addClass("input-error");
        } else if (!phoneRegex.test(phone)) {
            isValid = false;
            $("#err-phone").text("Enter a valid 10-digit number.");
            $("#phone").addClass("input-error");
        }

        // DOB
        const dob = $("#dob").val().trim();
        if (dob === "") {
            isValid = false;
            $("#err-dob").text("Date of Birth is required.");
            $("#dob").addClass("input-error");
        }

        // Gender
        const gender = $("input[name='gender']:checked").val();
        if (!gender) {
            isValid = false;
            $("#err-gender").text("Please select a gender.");
        }

        // Course
        const course = $("#course").val();
        if (course === "") {
            isValid = false;
            $("#err-course").text("Please select a course.");
            $("#course").addClass("input-error");
        }

        // Address
        const address = $("#address").val().trim();
        if (address === "") {
            isValid = false;
            $("#err-address").text("Address is required.");
            $("#address").addClass("input-error");
        }

        // If not valid, stop form submission
        if (!isValid) {
            e.preventDefault();
        }
    });
});
