<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://sandbox.doku.com/jokul-checkout-js/v1/jokul-checkout-1.0.0.js"></script>
</head>
<body>
    <button id="checkout-button">Checkout Now</button>

    <script type="text/javascript">
        var checkoutButton = document.getElementById('checkout-button');
        // Example: the payment page will show when the button is clicked
        checkoutButton.addEventListener('click', function () {
            loadJokulCheckout('https://sandbox.doku.com/checkout/link/cb646383fe004fdc812242a0d2d9e17920223607103620932'); // Replace it with the response.payment.url you retrieved from the response
        });
    </script>
</body>
</html>