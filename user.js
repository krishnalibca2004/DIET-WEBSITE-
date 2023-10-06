document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("profile-form");
    const photoInput = document.getElementById("photo");
    const previewImage = document.getElementById("preview-image");

    // Preview the selected image
    photoInput.addEventListener("change", function () {
        const file = photoInput.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                previewImage.src = e.target.result;
                previewImage.style.display = "block";
            };
            reader.readAsDataURL(file);
        }
    });

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const photo = photoInput.files[0];

        const formData = new FormData();
        formData.append("name", name);
        formData.append("email", email);
        formData.append("photo", photo);

        // Send the form data to the backend for processing
        fetch("/update-profile", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
        })
        .catch(error => {
            console.error("Error:", error);
        });
    });
});
