<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = [
        [
            'name' => 'Recarga de garrafón 20 L',
            'description' => 'Agua purificada con minerales y electrolitos',
            'category' => 'garrafones',
            'category_label' => 'AGUA PURIFICADA',
            'price' => 58,
            'unit' => 'por recarga',
            'badge' => 'Mas pedido',
            'rating' => '4.9',
            'image' => 'https://images.unsplash.com/photo-1602143407151-7111542de6e8?auto=format&fit=crop&w=900&q=85',
            'image_alt' => 'Botellas de agua purificada',
        ],
        [
            'name' => 'Garrafón nuevo PET 20 L',
            'description' => 'Garrafón retornable listo para usar',
            'category' => 'garrafones',
            'category_label' => 'GARRAFONES',
            'price' => 140,
            'unit' => 'garrafon + agua',
            'badge' => 'Nuevo',
            'rating' => null,
            'image' => 'https://images.unsplash.com/photo-1548839140-29a749e1cf4d?auto=format&fit=crop&w=900&q=85',
            'image_alt' => 'Agua fresca lista para servir',
        ],
        [
            'name' => 'Bomba dispensadora recargable',
            'description' => 'Batería para hasta 6 garrafones',
            'category' => 'dispensadores',
            'category_label' => 'DISPENSADORES',
            'price' => 180,
            'unit' => 'pieza',
            'badge' => null,
            'rating' => null,
            'image' => 'https://images.unsplash.com/photo-1608270586620-248524c67de9?auto=format&fit=crop&w=900&q=85',
            'image_alt' => 'Botellas para dispensador de agua',
        ],
        [
            'name' => 'Dispensador de cerámica',
            'description' => 'Cerámica vitrificada y base de madera',
            'category' => 'dispensadores',
            'category_label' => 'DISPENSADORES',
            'price' => 320,
            'unit' => 'pieza',
            'badge' => 'Artesanal',
            'rating' => null,
            'image' => 'https://images.unsplash.com/photo-1572635196237-14b3f281503f?auto=format&fit=crop&w=900&q=85',
            'image_alt' => 'Dispensador de sobremesa para bebidas',
        ],
        [
            'name' => 'Pack 12 botellas de 1 L',
            'description' => 'Agua ligera para oficina o deporte',
            'category' => 'botellas',
            'category_label' => 'AGUA EN BOTELLA',
            'price' => 108,
            'unit' => 'paquete',
            'badge' => null,
            'rating' => '4.8',
            'image' => 'https://images.unsplash.com/photo-1523362628745-0c100150b504?auto=format&fit=crop&w=900&q=85',
            'image_alt' => 'Botellas de agua para llevar',
        ],
    ];

    return view('home', compact('products'));
})->name('home');
