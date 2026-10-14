const quantityOutput = document.querySelector('[data-quantity]');
const litersOutput = document.querySelector('[data-liters]');
const totalOutput = document.querySelector('[data-total]');
const cartOutput = document.querySelector('[data-cart-count]');
const announcement = document.querySelector('[data-announcement]');

if (quantityOutput && litersOutput && totalOutput) {
	let quantity = Number(quantityOutput.textContent);

	document.querySelectorAll('[data-quantity-change]').forEach((button) => {
		button.addEventListener('click', () => {
			quantity = Math.max(1, quantity + Number(button.dataset.quantityChange));
			quantityOutput.textContent = String(quantity);
			litersOutput.textContent = String(quantity * 20);
			totalOutput.textContent = String(quantity * 48);
		});
	});
}

document.querySelectorAll('[data-filter]').forEach((button) => {
	button.addEventListener('click', () => {
		const filter = button.dataset.filter;

		document.querySelectorAll('[data-filter]').forEach((filterButton) => {
			const isActive = filterButton === button;
			filterButton.classList.toggle('is-active', isActive);
			filterButton.setAttribute('aria-pressed', String(isActive));
		});

		document.querySelectorAll('[data-product-category]').forEach((product) => {
			product.hidden = filter !== 'todos' && product.dataset.productCategory !== filter;
		});
	});
});

let cartCount = 0;

document.querySelectorAll('[data-add-product]').forEach((button) => {
	button.addEventListener('click', () => {
		cartCount += 1;
		cartOutput.textContent = String(cartCount);
		announcement.textContent = 'Producto agregado al carrito.';
	});
});

document.querySelector('[data-order-button]')?.addEventListener('click', () => {
	announcement.textContent = 'Pedido de ejemplo listo. La compra aun no esta conectada.';
});

document.querySelectorAll('.bottom-nav__item').forEach((item) => {
	item.addEventListener('click', () => {
		document.querySelectorAll('.bottom-nav__item').forEach((navItem) => {
			navItem.classList.remove('is-current');
			navItem.removeAttribute('aria-current');
		});

		item.classList.add('is-current');
		item.setAttribute('aria-current', 'page');
	});
});
