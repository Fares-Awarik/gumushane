<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name'        => 'Karakovan Petek Balı',
                'subtitle'    => 'Organik Petek Balı',
                'description' => "Gümüşhane'nin 1750 rakımlı yaylalarında, arıların kendi ürettikleri balmumu ile tamamen doğal yollarla ördükleri, insan eli değmeden hazırlanan eşsiz karakovan petek balı. Yoğun aroması ve yüksek besin değeriyle en özel gurme lezzetimiz.",
                'price'       => 1850.00,
                'unit'        => 'kg',
                'quantity'    => 50,
                'image'       => null,
                'active'      => true,
            ],
            [
                'name'        => 'Petek Çiçek Balı',
                'subtitle'    => 'Klasik Petek Balı',
                'description' => 'Yüksek rakımlı yaylalarımızın zengin bitki florasından elde edilen, ahşap çerçevelerde özenle üretilen klasik petek balımız. Kahvaltılarınızın vazgeçilmez doğal tatlandırıcısı ve sofralarınızın baş tacı.',
                'price'       => 1500.00,
                'unit'        => 'kg',
                'quantity'    => 80,
                'image'       => null,
                'active'      => true,
            ],
            [
                'name'        => 'Süzme Bal',
                'subtitle'    => 'Sıvı Bal',
                'description' => 'Peteklerinden özenle süzülerek elde edilen, altın sarısı rengi ve ipeksi kıvamıyla öne çıkan süzme çiçek balımız. Doğal ve saf yapısıyla hem kahvaltılarda hem de en özel tariflerinizde güvenle tüketebilirsiniz.',
                'price'       => 1550.00,
                'unit'        => 'kg',
                'quantity'    => 100,
                'image'       => null,
                'active'      => true,
            ],
            [
                'name'        => 'Ham Propolis',
                'subtitle'    => 'Sağlık & Takviye',
                'description' => 'Arıların kovanlarını dış etkenlerden korumak için ürettikleri, antioksidan bakımından zengin doğal bir mucize. Bağışıklık sistemini destekleyici özelliğiyle bilinen saf ham propolis ekstraktı.',
                'price'       => 850.00,
                'unit'        => '100g',
                'quantity'    => 30,
                'image'       => null,
                'active'      => true,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
