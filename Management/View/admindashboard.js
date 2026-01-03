function goPage(page) {
    switch (page) {
        case 'rooms':
            window.location.href = 'rooms.php';
            break;
        case 'booking':
            window.location.href = 'booking.php';
            break;
        case 'housekeeping':
            window.location.href = 'housekeeping.php';
            break;
        case 'payment':
            window.location.href = 'payment.php';
            break;
        case 'guestpayment':
            window.location.href = 'guestpayment.php';
            break;
        case 'reviews':
            window.location.href = 'reviews.php';
            break;
        case 'reports':
            window.location.href = 'reports.php';
            break;
        case 'guest':
            window.location.href = 'guest.php';
            break;
        default:
            alert("Page not found!");
    }
}
