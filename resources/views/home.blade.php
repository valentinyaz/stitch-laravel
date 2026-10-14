<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f4f8f8">
    <title>AquaFlow | Agua confiable, todos los dias</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#f4f8f8] font-sans text-[#102e3b] antialiased">
    <svg class="pointer-events-none absolute h-0 w-0 overflow-hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
        <symbol id="icon-drop" viewBox="0 0 24 24"><path d="M12 2.75S5.5 10 5.5 14.5a6.5 6.5 0 1 0 13 0C18.5 10 12 2.75 12 2.75Z"/><path d="M9 15.25a3 3 0 0 0 3 3"/></symbol>
        <symbol id="icon-bell" viewBox="0 0 24 24"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9M10 21h4"/></symbol>
        <symbol id="icon-chevron" viewBox="0 0 24 24"><path d="m9 18 6-6-6-6"/></symbol>
        <symbol id="icon-chevron-down" viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"/></symbol>
        <symbol id="icon-pin" viewBox="0 0 24 24"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></symbol>
        <symbol id="icon-clock" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></symbol>
        <symbol id="icon-check" viewBox="0 0 24 24"><path d="m5 12 4 4L19 6"/></symbol>
        <symbol id="icon-plus" viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></symbol>
        <symbol id="icon-minus" viewBox="0 0 24 24"><path d="M5 12h14"/></symbol>
        <symbol id="icon-home" viewBox="0 0 24 24"><path d="m3 10 9-7 9 7v10a1 1 0 0 1-1 1h-6v-7h-4v7H4a1 1 0 0 1-1-1Z"/></symbol>
        <symbol id="icon-calendar" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 10h18"/></symbol>
        <symbol id="icon-bag" viewBox="0 0 24 24"><path d="M5 8h14l1 13H4L5 8Z"/><path d="M9 8V6a3 3 0 0 1 6 0v2"/></symbol>
        <symbol id="icon-user" viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0 1 16 0"/></symbol>
        <symbol id="icon-arrow" viewBox="0 0 24 24"><path d="M5 12h14m-6-6 6 6-6 6"/></symbol>
        <symbol id="icon-sparkle" viewBox="0 0 24 24"><path d="m12 3 1.8 5.2L19 10l-5.2 1.8L12 17l-1.8-5.2L5 10l5.2-1.8L12 3ZM19 16l.8 2.2L22 19l-2.2.8L19 22l-.8-2.2L16 19l2.2-.8L19 16Z"/></symbol>
        <symbol id="icon-leaf" viewBox="0 0 24 24"><path d="M20 4c-8 0-14 3-14 10a6 6 0 0 0 6 6c7 0 10-6 8-16Z"/><path d="M4 21c3-5 7-8 12-11"/></symbol>
        <symbol id="icon-shield" viewBox="0 0 24 24"><path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/><path d="m9 12 2 2 4-4"/></symbol>
    </svg>

    <div class="mx-auto min-h-screen max-w-[1120px] px-4 pb-28 sm:px-6 lg:px-8">
        <header class="flex items-center justify-between border-b border-[#dce8e8] py-4 sm:py-5">
            <a href="#inicio" class="flex items-center gap-2.5" aria-label="AquaFlow, inicio">
                <span class="grid size-10 place-items-center rounded-[14px] bg-[#d9f3f1] text-[#087e83]">
                    <svg class="size-6 fill-none stroke-current stroke-[1.7]" aria-hidden="true"><use href="#icon-drop"/></svg>
                </span>
                <span>
                    <span class="block text-[17px] font-extrabold leading-5 tracking-tight text-[#103444]">Aqua<span class="text-[#07858a]">Flow</span></span>
                    <span class="hidden text-[10px] font-semibold uppercase tracking-[0.14em] text-[#718990] sm:block">Agua confiable, todos los dias</span>
                </span>
            </a>
            <div class="flex items-center gap-3">
                <button type="button" class="relative grid size-10 place-items-center rounded-full border border-[#dce8e8] bg-white text-[#3d5c67] transition hover:border-[#79c9c8]" aria-label="Notificaciones">
                    <svg class="size-[18px] fill-none stroke-current stroke-[1.7]" aria-hidden="true"><use href="#icon-bell"/></svg>
                    <span class="absolute right-[8px] top-[7px] size-1.5 rounded-full bg-[#f28b68]"></span>
                </button>
                <button id="perfil" type="button" class="flex items-center gap-2 rounded-full sm:pl-1" aria-label="Abrir perfil de Valentina">
                    <span class="grid size-9 place-items-center rounded-full bg-[#f5d7c7] text-xs font-bold text-[#75432e]">VG</span>
                    <span class="hidden text-left sm:block"><span class="block text-xs font-bold text-[#193c4a]">Valentina</span><span class="block text-[10px] text-[#789097]">Cuenta hogar</span></span>
                </button>
            </div>
        </header>

        <main id="inicio" class="space-y-5 pt-5 sm:space-y-6 sm:pt-7">
            <section class="flex flex-wrap items-end justify-between gap-3" aria-labelledby="welcome-title">
                <div>
                    <p class="text-xs font-semibold text-[#6b858c]">Martes, 13 de octubre</p>
                    <h1 id="welcome-title" class="mt-1 text-[25px] font-extrabold leading-tight tracking-tight text-[#123746] sm:text-[30px]">Hola, Valentina <span aria-hidden="true">👋</span></h1>
                    <p class="mt-1 text-sm text-[#688087]">Todo listo para que tu hogar siga hidratado.</p>
                </div>
                <button type="button" class="hidden items-center gap-2 rounded-full border border-[#dce8e8] bg-white px-3 py-2 text-xs font-semibold text-[#496771] sm:inline-flex">
                    <svg class="size-4 fill-none stroke-current stroke-[1.7]" aria-hidden="true"><use href="#icon-pin"/></svg>
                    Casa · Av. Insurgentes Sur 420
                    <svg class="size-3 fill-none stroke-current stroke-[1.8]" aria-hidden="true"><use href="#icon-chevron-down"/></svg>
                </button>
            </section>

            <section class="grid gap-4 lg:grid-cols-[1.12fr_.88fr]" aria-label="Entrega y pedido rapido">
                <article id="pedidos" class="overflow-hidden rounded-[22px] border border-[#d8e9e9] bg-white">
                    <div class="flex flex-wrap items-start justify-between gap-3 px-4 pt-4 sm:px-5 sm:pt-5">
                        <div>
                            <div class="flex items-center gap-2">
                                <span class="grid size-8 place-items-center rounded-xl bg-[#e7f7f5] text-[#07858a]"><svg class="size-4 fill-none stroke-current stroke-[1.8]" aria-hidden="true"><use href="#icon-calendar"/></svg></span>
                                <p class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#6c858b]">Tu próxima entrega</p>
                            </div>
                            <h2 class="mt-3 text-[19px] font-extrabold leading-tight text-[#123746] sm:text-[21px]">Manana, 9:00–11:00 AM</h2>
                            <p class="mt-1 text-xs text-[#718990]">2 garrafones · 40 litros · Ruta Centro</p>
                        </div>
                        <span class="rounded-full bg-[#e6f5e9] px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide text-[#347b50]">Programada</span>
                    </div>
                    <div class="mx-4 mt-4 rounded-[16px] bg-[#f2f8f7] px-3 py-3 sm:mx-5 sm:px-4">
                        <div class="grid grid-cols-3 gap-2">
                            <div class="relative pr-1">
                                <span class="absolute left-5 right-[-8px] top-[10px] h-px bg-[#84c8bd]"></span>
                                <span class="relative grid size-[21px] place-items-center rounded-full bg-[#0d8b88] text-white"><svg class="size-3 fill-none stroke-current stroke-[2.4]" aria-hidden="true"><use href="#icon-check"/></svg></span>
                                <p class="mt-2 text-[10px] font-bold text-[#275861]">Pedido envasado</p>
                            </div>
                            <div class="relative pr-1">
                                <span class="absolute left-5 right-[-8px] top-[10px] h-px bg-[#d2e2e1]"></span>
                                <span class="relative grid size-[21px] place-items-center rounded-full border border-[#99c7c4] bg-white text-[#489b95]"><span class="size-1.5 rounded-full bg-current"></span></span>
                                <p class="mt-2 text-[10px] font-semibold text-[#648088]">Carga matutina</p>
                            </div>
                            <div>
                                <span class="grid size-[21px] place-items-center rounded-full border border-[#d4e3e2] bg-white text-[#8ba0a4]"><svg class="size-3.5 fill-none stroke-current stroke-[1.7]" aria-hidden="true"><use href="#icon-home"/></svg></span>
                                <p class="mt-2 text-[10px] font-semibold text-[#648088]">En tu puerta</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-3 px-4 py-3 sm:px-5">
                        <span class="flex items-center gap-1.5 text-[11px] text-[#738b91]"><svg class="size-3.5 fill-none stroke-current stroke-[1.7]" aria-hidden="true"><use href="#icon-clock"/></svg>Chofer asignado · Ruta Centro</span>
                        <button type="button" class="text-[11px] font-bold text-[#087e83] hover:text-[#075f64]">Cambiar</button>
                    </div>
                </article>

                <article class="relative overflow-hidden rounded-[22px] bg-[#087f88] p-4 text-white sm:p-5">
                    <div class="absolute -right-8 -top-10 size-40 rounded-full border-[26px] border-white/5"></div>
                    <div class="relative flex items-start justify-between gap-2">
                        <div>
                            <span class="inline-flex items-center gap-1 rounded-full bg-white/15 px-2 py-1 text-[9px] font-bold uppercase tracking-[0.14em] text-[#d3fffa]"><svg class="size-3 fill-none stroke-current stroke-[1.8]" aria-hidden="true"><use href="#icon-sparkle"/></svg>Pedido Express</span>
                            <h2 class="mt-3 text-[18px] font-extrabold leading-tight sm:text-[20px]">Recarga en 1 toque</h2>
                            <p class="mt-1 text-xs text-[#d1f1ef]">Garrafon 20 L · $48 MXN c/u</p>
                        </div>
                        <span class="grid size-11 shrink-0 place-items-center rounded-[15px] bg-white/15"><svg class="size-7 fill-none stroke-current stroke-[1.4]" aria-hidden="true"><use href="#icon-drop"/></svg></span>
                    </div>
                    <div class="relative mt-4 flex items-center justify-between gap-3 rounded-[15px] bg-white/10 px-3 py-2.5">
                        <div><p class="text-[10px] font-semibold text-[#c2e9e7]">Cantidad</p><p class="mt-0.5 text-xs font-bold"><span data-liters>40</span> litros</p></div>
                        <div class="flex items-center gap-3 rounded-full bg-white px-1 py-1 text-[#17616a]">
                            <button type="button" class="grid size-7 place-items-center rounded-full hover:bg-[#e9f5f4]" data-quantity-change="-1" aria-label="Quitar un garrafon"><svg class="size-3.5 fill-none stroke-current stroke-[2]" aria-hidden="true"><use href="#icon-minus"/></svg></button>
                            <output class="min-w-4 text-center text-xs font-extrabold" data-quantity>2</output>
                            <button type="button" class="grid size-7 place-items-center rounded-full bg-[#d9f2ef] hover:bg-[#c3e8e4]" data-quantity-change="1" aria-label="Agregar un garrafon"><svg class="size-3.5 fill-none stroke-current stroke-[2]" aria-hidden="true"><use href="#icon-plus"/></svg></button>
                        </div>
                    </div>
                    <label class="relative mt-3 flex cursor-pointer items-center justify-between gap-3 text-[10px] text-[#d9f3f1]">
                        <span>Devuelvo mis envases <span class="text-white/60">(sin deposito)</span></span>
                        <input class="peer sr-only" type="checkbox" checked data-return-bottles>
                        <span class="relative h-[21px] w-10 rounded-full bg-white/25 transition peer-checked:bg-[#a6e3d7] peer-focus-visible:outline peer-focus-visible:outline-2 peer-focus-visible:outline-offset-2 peer-focus-visible:outline-white after:absolute after:left-[3px] after:top-[3px] after:size-[15px] after:rounded-full after:bg-white after:transition peer-checked:after:translate-x-[19px]"></span>
                    </label>
                    <button type="button" data-order-button class="relative mt-4 flex w-full items-center justify-between rounded-[13px] bg-white px-4 py-3 text-left text-[#075f68] transition hover:bg-[#edfffc]">
                        <span><span class="block text-xs font-extrabold">Pedir ahora</span><span class="mt-0.5 block text-[9px] text-[#66858a]">Llega en aproximadamente 45 min</span></span>
                        <span class="flex items-center gap-2 text-sm font-extrabold">$<span data-total>96</span><svg class="size-4 fill-none stroke-current stroke-[2]" aria-hidden="true"><use href="#icon-arrow"/></svg></span>
                    </button>
                </article>
            </section>

            <section class="grid gap-3 sm:grid-cols-2" aria-label="Suscripcion y consumo">
                <article id="suscripcion" class="flex items-center justify-between gap-3 overflow-hidden rounded-[20px] bg-[#f3eadd] px-4 py-3.5 sm:px-5">
                    <div class="min-w-0">
                        <span class="text-[9px] font-extrabold uppercase tracking-[0.16em] text-[#9a633c]">Plan Smart</span>
                        <h2 class="mt-1 text-[16px] font-extrabold leading-tight text-[#553d2e]">30% de descuento</h2>
                        <p class="mt-1 max-w-[245px] text-[10px] leading-relaxed text-[#826a58]">Ahorra con una suscripcion mensual programada.</p>
                        <a href="#suscripcion" class="mt-2 inline-flex items-center gap-1 text-[10px] font-bold text-[#87512e]">Conocer el plan <svg class="size-3 fill-none stroke-current stroke-[2]" aria-hidden="true"><use href="#icon-chevron"/></svg></a>
                    </div>
                    <span class="grid size-[54px] shrink-0 place-items-center rounded-[17px] bg-[#e6d2b8] text-[#88603f]"><svg class="size-7 fill-none stroke-current stroke-[1.4]" aria-hidden="true"><use href="#icon-calendar"/></svg></span>
                </article>

                <article class="flex items-center gap-3 rounded-[20px] border border-[#dce8e8] bg-white px-4 py-3.5 sm:px-5">
                    <div class="relative grid size-[58px] shrink-0 place-items-center rounded-full" style="background: conic-gradient(#078b88 0 75%, #e3efee 75% 100%)">
                        <span class="grid size-[46px] place-items-center rounded-full bg-white text-center"><span><strong class="block text-[13px] leading-none text-[#173f4d]">75%</strong><small class="text-[7px] font-semibold text-[#789097]">META</small></span></span>
                    </div>
                    <div class="min-w-0 flex-1">
                        <p class="text-[9px] font-extrabold uppercase tracking-[0.13em] text-[#789097]">Consumo del hogar</p>
                        <h2 class="mt-1 text-[13px] font-extrabold text-[#173f4d]">Meta de hidratacion</h2>
                        <p class="mt-1 text-[10px] text-[#718990]">Llevas <strong class="text-[#087e83]">15 L de 20 L</strong> esta semana</p>
                        <div class="mt-2 h-1.5 overflow-hidden rounded-full bg-[#e7efee]"><span class="block h-full w-3/4 rounded-full bg-[#078b88]"></span></div>
                    </div>
                </article>
            </section>

            <section id="catalogo" aria-labelledby="catalog-title">
                <div class="flex items-end justify-between gap-3">
                    <div>
                        <p class="text-[9px] font-extrabold uppercase tracking-[0.15em] text-[#07858a]">Agua para cada momento</p>
                        <h2 id="catalog-title" class="mt-1 text-[19px] font-extrabold tracking-tight text-[#123746] sm:text-[22px]">Productos y accesorios</h2>
                        <p class="mt-1 text-[11px] text-[#718990]">Purificacion certificada para tu hogar.</p>
                    </div>
                    <a href="#productos" class="mb-0.5 hidden items-center gap-1 text-[11px] font-bold text-[#087e83] sm:inline-flex">Ver todos <svg class="size-3.5 fill-none stroke-current stroke-[2]" aria-hidden="true"><use href="#icon-chevron"/></svg></a>
                </div>
                <div class="mt-4 flex gap-2 overflow-x-auto pb-1 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden" role="group" aria-label="Filtrar productos">
                    <button type="button" data-filter="todos" aria-pressed="true" class="filter-chip is-active">Todos</button>
                    <button type="button" data-filter="garrafones" aria-pressed="false" class="filter-chip">Garrafones 20 L</button>
                    <button type="button" data-filter="dispensadores" aria-pressed="false" class="filter-chip">Dispensadores</button>
                    <button type="button" data-filter="botellas" aria-pressed="false" class="filter-chip">Botellas</button>
                </div>

                <div id="productos" class="mt-3 grid grid-cols-2 gap-3 sm:grid-cols-3 sm:gap-4 lg:grid-cols-4">
                    @foreach ($products as $product)
                        <article class="product-card" data-product-category="{{ $product['category'] }}">
                            <div class="product-image-wrap">
                                <img src="{{ $product['image'] }}" alt="{{ $product['image_alt'] }}" class="product-image" loading="lazy">
                                @if ($product['badge'])
                                    <span class="product-badge">{{ $product['badge'] }}</span>
                                @endif
                                @if ($product['rating'])
                                    <span class="product-rating"><span aria-hidden="true">★</span> {{ $product['rating'] }}</span>
                                @endif
                                <button type="button" class="product-add" data-add-product aria-label="Agregar {{ $product['name'] }} al carrito"><svg class="size-4 fill-none stroke-current stroke-[2]" aria-hidden="true"><use href="#icon-plus"/></svg></button>
                            </div>
                            <div class="px-3 pb-3 pt-3">
                                <p class="text-[8px] font-extrabold uppercase tracking-[0.12em] text-[#07858a]">{{ $product['category_label'] }}</p>
                                <h3 class="mt-1.5 min-h-[34px] text-[11px] font-extrabold leading-[1.45] text-[#173b49] sm:text-xs">{{ $product['name'] }}</h3>
                                <p class="mt-1 line-clamp-2 min-h-[28px] text-[9px] leading-[1.5] text-[#799096]">{{ $product['description'] }}</p>
                                <div class="mt-3 flex items-end justify-between gap-1 border-t border-[#edf2f1] pt-2.5">
                                    <span><strong class="block text-[13px] font-extrabold text-[#153e4d]">${{ $product['price'] }} <small class="text-[8px] font-semibold text-[#728990]">MXN</small></strong><small class="text-[8px] text-[#879a9e]">{{ $product['unit'] }}</small></span>
                                    <button type="button" data-add-product class="rounded-full border border-[#b8deda] px-2.5 py-1.5 text-[9px] font-extrabold text-[#087e83] transition hover:bg-[#e5f5f3]" aria-label="Agregar {{ $product['name'] }}">Agregar</button>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>

            <section class="grid grid-cols-3 gap-2 rounded-[18px] border border-[#dce8e8] bg-white px-2 py-3 sm:px-4" aria-label="Calidad AquaFlow">
                <div class="flex flex-col items-center gap-1 text-center sm:flex-row sm:justify-center sm:gap-2"><svg class="size-4 shrink-0 fill-none stroke-[#07858a] stroke-[1.7]" aria-hidden="true"><use href="#icon-shield"/></svg><span><strong class="block text-[8px] text-[#365963] sm:text-[10px]">Lavado con ozono</strong><small class="hidden text-[8px] text-[#82979b] sm:block">Grado hospitalario</small></span></div>
                <div class="flex flex-col items-center gap-1 text-center sm:flex-row sm:justify-center sm:gap-2"><svg class="size-4 shrink-0 fill-none stroke-[#07858a] stroke-[1.7]" aria-hidden="true"><use href="#icon-drop"/></svg><span><strong class="block text-[8px] text-[#365963] sm:text-[10px]">TDS optimo</strong><small class="hidden text-[8px] text-[#82979b] sm:block">Pureza certificada</small></span></div>
                <div class="flex flex-col items-center gap-1 text-center sm:flex-row sm:justify-center sm:gap-2"><svg class="size-4 shrink-0 fill-none stroke-[#07858a] stroke-[1.7]" aria-hidden="true"><use href="#icon-leaf"/></svg><span><strong class="block text-[8px] text-[#365963] sm:text-[10px]">Eco retorno</strong><small class="hidden text-[8px] text-[#82979b] sm:block">Menos residuos</small></span></div>
            </section>
        </main>
    </div>

    <nav class="bottom-nav" aria-label="Navegacion principal">
        <a href="#inicio" class="bottom-nav__item is-current" aria-current="page"><svg class="size-[18px] fill-none stroke-current stroke-[1.8]" aria-hidden="true"><use href="#icon-home"/></svg><span>Inicio</span></a>
        <a href="#suscripcion" class="bottom-nav__item"><svg class="size-[18px] fill-none stroke-current stroke-[1.8]" aria-hidden="true"><use href="#icon-calendar"/></svg><span>Suscripcion</span></a>
        <a href="#pedidos" class="bottom-nav__item"><span class="relative"><svg class="size-[18px] fill-none stroke-current stroke-[1.8]" aria-hidden="true"><use href="#icon-bag"/></svg><span class="cart-count" data-cart-count>0</span></span><span>Pedidos</span></a>
        <a href="#perfil" class="bottom-nav__item"><svg class="size-[18px] fill-none stroke-current stroke-[1.8]" aria-hidden="true"><use href="#icon-user"/></svg><span>Perfil</span></a>
    </nav>
    <div class="sr-only" aria-live="polite" data-announcement></div>
</body>
</html>