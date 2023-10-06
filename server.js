const express = require("express");
const bodyParser = require("body-parser");
const multer = require("multer");
const fs = require("fs").promises;

const app = express();
const port = 3000;

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

// Serve static files (HTML, CSS, JavaScript)
app.use(express.static("public"));

// Set up multer to handle file uploads
const storage = multer.diskStorage({
    destination: function (req, file, cb) {
        cb(null, "uploads/");
    },
    filename: function (req, file, cb) {
        cb(null, Date.now() + "-" + file.originalname);
    }
});

const upload = multer({ storage });

app.post("/update-profile", upload.single("photo"), async (req, res) => {
    try {
        const name = req.body.name;
        const email = req.body.email;
        const photo = req.file; // The uploaded photo file

        // Simulate updating user data in a JSON file (replace with a real database)
        const userData = {
            name,
            email,
            photoPath: photo ? photo.path : null // Store the file path in the user data
        };

        // Update the JSON file
        await fs.writeFile("user.json", JSON.stringify(userData, null, 2));

        res.json({ message: "Profile updated successfully!" });
    } catch (error) {
        console.error("Error:", error);
        res.status(500).json({ message: "Internal server error" });
    }
});

app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});
