document.addEventListener("DOMContentLoaded", function () {
    const setAlarmButton = document.getElementById("setAlarm");
    const alarmPurposeInput = document.getElementById("alarmPurpose");
    const alarmTimeInput = document.getElementById("alarmTime");
    const alarmsList = document.getElementById("alarmsList");
    const alarmSound = document.getElementById("alarmSound");

    setAlarmButton.addEventListener("click", function () {
        const purpose = alarmPurposeInput.value.trim();
        const alarmTime = alarmTimeInput.value;

        if (!purpose) {
            alert("Please enter an alarm purpose.");
            return;
        }

        if (!alarmTime) {
            alert("Please select an alarm time.");
            return;
        }

        const [hours, minutes] = alarmTime.split(":");
        const currentTime = new Date();
        const alarmDateTime = new Date(
            currentTime.getFullYear(),
            currentTime.getMonth(),
            currentTime.getDate(),
            parseInt(hours),
            parseInt(minutes),
            0
        );

        if (alarmDateTime <= currentTime) {
            alert("Please select a future alarm time.");
            return;
        }

        // Create a list item for the alarm
        const listItem = document.createElement("li");
        listItem.innerHTML = `
            <span>Alarm Purpose: ${purpose}</span>
            <span>Alarm Time: ${alarmTime}</span>
        `;
        alarmsList.appendChild(listItem);

        // Set a timeout to trigger the alarm
        const timeRemaining = alarmDateTime - currentTime;
        setTimeout(function () {
            // Play the ringtone after popup the notification
            alarmSound.play();
            // Display a popup notification when the alarm goes off
            alert(`Alarm for "${purpose}" - It's time!`);
            // Stop the ringtone after notification off (adjust the duration)
            setTimeout(function () {
                alarmSound.pause();
                alarmSound.currentTime = 0;
            }, 1000); // seconds
            // Remove the alarm from the list
            alarmsList.removeChild(listItem);
        }, timeRemaining);

        // Clear input fields
        alarmPurposeInput.value = "";
        alarmTimeInput.value = "";
    });
});
