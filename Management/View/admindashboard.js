function goPage(page) {
    const pages = {
        rooms: "rooms.php",
        booking: "booking.php",
        housekeeping: "housekeeping.php",
        payment: "payment.php",
        guestpayment: "guestpayment.php",
        reviews: "reviews.php",
        reports: "reports.php",
        guest: "guest.php"
    };

    if (pages[page]) {
        window.location.href = pages[page];
    } else {
        alert("Page not found!");
    }
}

function logout() {
    window.location.href = "landingh.php";
}
