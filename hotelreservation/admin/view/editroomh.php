<!-- /public/index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Hotel Reservation — Payment Management</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <main class="container">
    <h1>Hotel Reservation</h1>

    <section class="card">
      <h2>Guest & Stay Details</h2>
      <form id="reservationForm">
        <div class="grid">
          <label>
            <span>Guest name</span>
            <input type="text" name="guest_name" required />
          </label>
          <label>
            <span>Guest email</span>
            <input type="email" name="guest_email" required />
          </label>
          <label>
            <span>Room type</span>
            <select name="room_type" required>
              <option value="Standard">Standard</option>
              <option value="Deluxe">Deluxe</option>
              <option value="Suite">Suite</option>
            </select>
          </label>
          <label>
            <span>Check-in</span>
            <input type="date" name="check_in" required />
          </label>
          <label>
            <span>Check-out</span>
            <input type="date" name="check_out" required />
          </label>
        </div>

        <h3>Payment</h3>
        <div class="grid">
          <label>
            <span>Method</span>
            <select name="method" required>
              <option value="Card">Card</option>
              <option value="Cash">Cash</option>
              <option value="Online Wallet">Online Wallet</option>
            </select>
          </label>
          <label>
            <span>Amount</span>
            <input type="number" name="amount" step="0.01" min="0" required />
          </label>
          <label>
            <span>Status</span>
            <select name="status" required>
              <option value="Pending">Pending</option>
              <option value="Completed">Completed</option>
              <option value="Failed">Failed</option>
              <option value="Refunded">Refunded</option>
            </select>
          </label>
        </div>

        <button type="submit">Create reservation & payment</button>
      </form>
    </section>

    <section class="card">
      <h2>Actions</h2>
      <div class="grid">
        <form id="statusForm">
          <label>
            <span>Payment ID</span>
            <input type="number" name="payment_id" required />
          </label>
          <label>
            <span>New status</span>
            <select name="new_status" required>
              <option value="Pending">Pending</option>
              <option value="Completed">Completed</option>
              <option value="Failed">Failed</option>
              <option value="Refunded">Refunded</option>
            </select>
          </label>
          <button type="submit">Update status</button>
        </form>

        <form id="invoiceForm" target="_blank" action="../api/invoice.php" method="get">
          <label>
            <span>Payment ID</span>
            <input type="number" name="payment_id" required />
          </label>
          <button type="submit">Open invoice</button>
        </form>

        <form action="../api/billing_report.php" method="get">
          <button type="submit">Download billing report (CSV)</button>
        </form>
      </div>

      <div id="messages" class="messages"></div>
    </section>
  </main>

  <script>
    const reservationForm = document.getElementById('reservationForm');
    const statusForm = document.getElementById('statusForm');
    const messages = document.getElementById('messages');

    function notify(type, text) {
      const div = document.createElement('div');
      div.className = `msg ${type}`;
      div.textContent = text;
      messages.appendChild(div);
      setTimeout(() => div.remove(), 5000);
    }

    reservationForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      const formData = new FormData(reservationForm);
      const payload = Object.fromEntries(formData.entries());

      try {
        const res = await fetch('../api/create_reservation.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(payload)
        });
        const data = await res.json();
        if (data.success) {
          notify('ok', `Reservation #${data.reservation_id} & Payment #${data.payment_id} created.`);
        } else {
          notify('err', data.error || 'Failed to create reservation.');
        }
      } catch (err) {
        notify('err', 'Network or server error.');
      }
    });

    statusForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      const formData = new FormData(statusForm);
      const payload = Object.fromEntries(formData.entries());

      try {
        const res = await fetch('../api/update_status.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(payload)
        });
        const data = await res.json();
        if (data.success) {
          notify('ok', `Payment #${payload.payment_id} updated to ${payload.new_status}.`);
        } else {
          notify('err', data.error || 'Failed to update status.');
        }
      } catch (err) {
        notify('err', 'Network or server error.');
      }
    });
  </script>
</body>
</html>
