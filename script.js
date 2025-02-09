<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script>
    (function() {
        emailjs.init("YOUR_USER_ID"); // Replace with your EmailJS User ID
    })();

    document.querySelector("form").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission

        let formData = {
            name: document.querySelector('input[name="Name"]').value,
            father_name: document.querySelector('input[name=" father Name"]').value,
            cnic: document.querySelector('input[name="CNIC"]').value,
            age: document.querySelector('input[name="Age"]').value,
            address: document.querySelector('input[name="Address"]').value,
            email: document.querySelector('input[name="Email"]').value,
            phone: document.querySelector('input[name="Phone number"]').value,
            gender: document.querySelector('input[name="Gender"]:checked')?.id || "Not specified",
            dob: document.querySelector('input[name="DOF"]').value,
            matric_marks: document.querySelector('input[name="Matric marks"]').value,
            inter_marks: document.querySelector('input[name=" intermediate marks"]').value,
            inter_roll_no: document.querySelector('input[name="roll number"]').value,
            college_name: document.querySelector('input[name="college name"]').value,
            subject: document.querySelector('input[name="Subject"]').value,
            program: document.querySelector('select[name="Program"]').value
        };

        emailjs.send("YOUR_SERVICE_ID", "YOUR_TEMPLATE_ID", formData)
            .then(response => {
                alert("Form submitted successfully!");
            })
            .catch(error => {
                alert("Failed to submit the form. Try again.");
                console.error("Error:", error);
            });
    });
</script>
