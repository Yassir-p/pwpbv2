document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.addToCart').forEach((form) => {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            const productId = form.getAttribute('data-id');
            const qtyInput = form.querySelector('input[name="qty"]');
            const qty = parseInt(qtyInput?.value || 0);

            if (!productId || qty <= 0) {
                alert('Jumlah produk harus lebih dari 0');
                return;
            }

            try {
                const response = await fetch('/cart/add', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        id: productId,
                        qty: qty
                    })
                });

                const result = await response.json();
                console.log(result); // debug

                if (result.success) {
                    const badge = document.getElementById('cart-count');
                    if (badge) badge.textContent = result.cartCount;
                } else {
                    alert('Gagal menambahkan ke keranjang');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat menambahkan ke keranjang');
            }
        });
    });
});
