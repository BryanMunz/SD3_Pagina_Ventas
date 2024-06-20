<?php
$total = 0;
$total_iva = 0;
$subtotal = 0;
$subtotal1 = 0;
if (isset($_SESSION['arrCarrito']) and count($_SESSION['arrCarrito']) > 0) {
?>
	<ul class="header-cart-wrapitem w-full">
		<?php
		foreach ($_SESSION['arrCarrito'] as $producto) {
			$totalProducto = $producto['precio'] * $producto['cantidad'];
			$total_iva += $totalProducto * IVA;
			//$total_mas_iva = $totalProducto + $total_iva;
			$subtotal += $totalProducto + ($totalProducto * IVA);
			$subtotal1 += $totalProducto;
			$total += $producto['cantidad'] * $producto['precio'];
			$idProducto = openssl_encrypt($producto['idproducto'], METHODENCRIPT, KEY);
		?>
			<li class="header-cart-item flex-w flex-t m-b-12">
				<div class="header-cart-item-img" idpr="<?= $idProducto ?>" op="1" onclick="fntdelItem(this)">
					<img src="<?= $producto['imagen'] ?>" alt="<?= $producto['producto'] ?>">
				</div>
				<div class="header-cart-item-txt p-t-8">
					<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
						<?= $producto['producto'] ?>
					</a>
					<span class="header-cart-item-info">
						<?= $producto['cantidad'] . ' x ' . SMONEY . formatMoney($producto['precio']) ?>
					</span>
				</div>
			</li>
		<?php } ?>
	</ul>
	<div class="w-full">

		<div class="header-cart-total w-full p-tb-10">
			Iva 16%: <?= SMONEY . formatMoney($total_iva) ?>
		</div>

		<div class="header-cart-total w-full">
			Envío: <?php
					if ($subtotal < 399) {
						echo SMONEY . formatMoney(COSTOENVIO);
					} elseif ($subtotal >= 399) {
						echo SMONEY . formatMoney(ENVIOGRATIS);
					}
					?>
		</div>

		<div class="header-cart-total w-full p-tb-40">
			Total: <?php if ($subtotal < 399) {
						echo SMONEY . formatMoney($subtotal + COSTOENVIO);
					} elseif ($subtotal >= 399) {
						echo SMONEY . formatMoney($subtotal);
					} ?>
		</div>

		<div class="header-cart-buttons flex-w w-full">
			<a href="<?= base_url() ?>/carrito" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
				Ver carrito
			</a>

			<a href="<?= base_url() ?>/carrito/procesarpago" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
				Procesar pago
			</a>
		</div>
	</div>
<?php
}
?>