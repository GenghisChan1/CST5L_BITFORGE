<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Item;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'username'      => 'Comshop',
            'email'         => 'ComShop@gmail.com',
            'password'      => Hash::make('comshop123'),
            'phone_number' => '09123456789',
            'role'          => 'admin',
            'street'        => 'Maa',
            'city'          => 'Davao City',
            'region'        => 'Davao',
            'postal_code'   => '8000',
        ]);

        $items = [
            // Item 1 - ASUS TUF Gaming Notebook
            [
                'image_url' => '/storage/items/ZRK4zPGfXnekH284bWTgvupLCf9IMDGnjMC94DzP.jpg',
                'item_name' => 'ASUS TUF Gaming Notebook FHD Grey i7-12700H',
                'tags' => 'gaming,laptop,notebook',
                'warehouse' => 'Ma-a, Davao City',
                'price' => 42000.00,
                'stocks' => 3,
                'processor' => [
                    'brand' => 'Intel',
                    'model' => null,
                    'cores' => '12',
                    'threads' => null,
                    'base_clock' => '2.5 GHz - 4.7 GHz (Max Turbo Frequency)',
                    'boost_clock' => null
                ],
                'graphics_card' => [
                    'brand' => null,
                    'model' => 'NVIDIA GeForce RTX 4050',
                    'vram' => null,
                    'clock_speed' => null
                ],
                'ram' => [
                    'type' => null,
                    'capacity' => '64 GB',
                    'speed' => null
                ],
                'storage' => [
                    'type' => 'SSD',
                    'capacity' => '512 GB - 16 TB'
                ],
                'motherboard' => [
                    'chipset' => null,
                    'form_factor' => null,
                    'socket' => null
                ],
                'display' => [
                    'size' => null,
                    'resolution' => '1920 x 1080',
                    'panel_type' => 'IPS',
                    'refresh_rate' => '144 Hz'
                ],
                'battery' => [
                    'capacity' => null,
                    'life' => null
                ],
                'keyboard' => [
                    'type' => null,
                    'backlit' => null
                ],
                'mouse' => [
                    'type' => null,
                    'dpi' => null
                ],
                'microphone' => [
                    'type' => null,
                    'pattern' => null
                ],
                'headset' => [
                    'driver_size' => null
                ],
                'ports' => 'HDMI, Headphone jack, USB-A, USB-C',
                'connectivity' => 'Wi-Fi 6E, Wireless LAN, Bluetooth 5.2',
                'operating_system' => 'Windows 11',
                'power_supply' => null,
                'cooling' => null,
                'dimensions' => '13.94 in x 9.88 in x 0.88 in - 0.98 in',
                'weight' => '2.2 kg (4.85 lbs)'
            ],

            // Item 2 - Dell PC Desktop
            [
                'image_url' => '/storage/items/w0BcIYRGsyvlzKn6xMBh2wyoaBbxrwFPAEDSUjGs.jpg',
                'item_name' => 'Dell PC Treasure Box RGB Desktop Computer Intel Quad Core I5 up to 3.6G',
                'tags' => 'desktop,pre-build desktop',
                'warehouse' => 'Ma-a, Davao City',
                'price' => 8300.00,
                'stocks' => 7,
                'processor' => [
                    'brand' => 'Intel CPU',
                    'model' => null,
                    'cores' => 'Quad Core',
                    'threads' => null,
                    'base_clock' => null,
                    'boost_clock' => null
                ],
                'graphics_card' => [
                    'brand' => 'Intel GPU',
                    'model' => null,
                    'vram' => null,
                    'clock_speed' => null
                ],
                'ram' => [
                    'type' => null,
                    'capacity' => '8 GB',
                    'speed' => null
                ],
                'storage' => [
                    'type' => 'SSD',
                    'capacity' => '512 GB'
                ],
                'motherboard' => [
                    'chipset' => null,
                    'form_factor' => null,
                    'socket' => null
                ],
                'display' => [
                    'size' => null,
                    'resolution' => null,
                    'panel_type' => null,
                    'refresh_rate' => null
                ],
                'battery' => [
                    'capacity' => null,
                    'life' => null
                ],
                'keyboard' => [
                    'type' => null,
                    'backlit' => null
                ],
                'mouse' => [
                    'type' => null,
                    'dpi' => null
                ],
                'microphone' => [
                    'type' => null,
                    'pattern' => null
                ],
                'headset' => [
                    'driver_size' => null
                ],
                'ports' => null,
                'connectivity' => null,
                'operating_system' => 'Windows',
                'power_supply' => null,
                'cooling' => null,
                'dimensions' => null,
                'weight' => null
            ],

            // Item 3 - PC SET AMD RYZEN
            [
                'image_url' => '/storage/items/DnEbNbbpSzMuWxvqbwGY4UxMOdTDOmTBRL7oJHiG.jpg',
                'item_name' => 'PC SET AMD RYZEN 5 5600G',
                'tags' => 'desktop,gaming,pre-build desktop,gaming desktop',
                'warehouse' => 'Ma-a, Davao City',
                'price' => 23500.00,
                'stocks' => 4,
                'processor' => [
                    'brand' => null,
                    'model' => null,
                    'cores' => null,
                    'threads' => null,
                    'base_clock' => '3.6 GHz processor',
                    'boost_clock' => null
                ],
                'graphics_card' => [
                    'brand' => 'AMD',
                    'model' => 'AMD GPU',
                    'vram' => null,
                    'clock_speed' => null
                ],
                'ram' => [
                    'type' => null,
                    'capacity' => '16 GB RAM',
                    'speed' => null
                ],
                'storage' => [
                    'type' => 'Solid State Drive, Mechanical Hard Drive',
                    'capacity' => '256 GB Storage'
                ],
                'motherboard' => [
                    'chipset' => null,
                    'form_factor' => null,
                    'socket' => null
                ],
                'display' => [
                    'size' => null,
                    'resolution' => null,
                    'panel_type' => null,
                    'refresh_rate' => null
                ],
                'battery' => [
                    'capacity' => null,
                    'life' => null
                ],
                'keyboard' => [
                    'type' => null,
                    'backlit' => null
                ],
                'mouse' => [
                    'type' => null,
                    'dpi' => null
                ],
                'microphone' => [
                    'type' => null,
                    'pattern' => null
                ],
                'headset' => [
                    'driver_size' => null
                ],
                'ports' => null,
                'connectivity' => null,
                'operating_system' => 'Chrome OS',
                'power_supply' => null,
                'cooling' => null,
                'dimensions' => null,
                'weight' => null
            ],

            // Item 4 - SteelSeries Keyboard
            [
                'image_url' => '/storage/items/PJRppYiCUKgBX8eSjV0lv0kYYv2iFgrYoBtXD7HX.jpg',
                'item_name' => 'SteelSeries Apex 3 RGB Gaming Keyboard 64798',
                'tags' => 'accessories,keyboard,gaming',
                'warehouse' => 'Ma-a, Davao City',
                'price' => 3089.00,
                'stocks' => 10,
                'processor' => [
                    'brand' => null,
                    'model' => null,
                    'cores' => null,
                    'threads' => null,
                    'base_clock' => null,
                    'boost_clock' => null
                ],
                'graphics_card' => [
                    'brand' => null,
                    'model' => null,
                    'vram' => null,
                    'clock_speed' => null
                ],
                'ram' => [
                    'type' => null,
                    'capacity' => null,
                    'speed' => null
                ],
                'storage' => [
                    'type' => null,
                    'capacity' => null
                ],
                'motherboard' => [
                    'chipset' => null,
                    'form_factor' => null,
                    'socket' => null
                ],
                'display' => [
                    'size' => null,
                    'resolution' => null,
                    'panel_type' => null,
                    'refresh_rate' => null
                ],
                'battery' => [
                    'capacity' => null,
                    'life' => null
                ],
                'keyboard' => [
                    'type' => null,
                    'backlit' => 'RGB'
                ],
                'mouse' => [
                    'type' => null,
                    'dpi' => null
                ],
                'microphone' => [
                    'type' => null,
                    'pattern' => null
                ],
                'headset' => [
                    'driver_size' => null
                ],
                'ports' => 'USB',
                'connectivity' => null,
                'operating_system' => null,
                'power_supply' => null,
                'cooling' => null,
                'dimensions' => null,
                'weight' => '1.8 lbs (816.4 g)'
            ],

            // Item 5 - GIGABYTE GPU
            [
                'image_url' => '/storage/items/xNTwL16rEIjmfu5m2ehYrP8BnrziTRH8v0N6uN1A.jpg',
                'item_name' => 'GIGABYTE GeForce RTX 3050',
                'tags' => 'accessories,gpu,rtx,gaming',
                'warehouse' => 'Ma-a, Davao City',
                'price' => 12499.00,
                'stocks' => 5,
                'processor' => [
                    'brand' => null,
                    'model' => null,
                    'cores' => null,
                    'threads' => null,
                    'base_clock' => null,
                    'boost_clock' => null
                ],
                'graphics_card' => [
                    'brand' => null,
                    'model' => 'GeForce RTX 3050',
                    'vram' => null,
                    'clock_speed' => '1477 MHz'
                ],
                'ram' => [
                    'type' => null,
                    'capacity' => null,
                    'speed' => null
                ],
                'storage' => [
                    'type' => null,
                    'capacity' => null
                ],
                'motherboard' => [
                    'chipset' => null,
                    'form_factor' => null,
                    'socket' => null
                ],
                'display' => [
                    'size' => null,
                    'resolution' => null,
                    'panel_type' => null,
                    'refresh_rate' => null
                ],
                'battery' => [
                    'capacity' => null,
                    'life' => null
                ],
                'keyboard' => [
                    'type' => null,
                    'backlit' => null
                ],
                'mouse' => [
                    'type' => null,
                    'dpi' => null
                ],
                'microphone' => [
                    'type' => null,
                    'pattern' => null
                ],
                'headset' => [
                    'driver_size' => null
                ],
                'ports' => 'DisplayPort, HDMI',
                'connectivity' => null,
                'operating_system' => null,
                'power_supply' => null,
                'cooling' => 'Air Cooling',
                'dimensions' => null,
                'weight' => null
            ]
        ];

        foreach ($items as $itemData) {
            // Convert array fields to JSON
            $arrayFields = ['processor', 'graphics_card', 'ram', 'storage', 'motherboard', 
                          'display', 'battery', 'keyboard', 'mouse', 'microphone', 'headset'];
            
            foreach ($arrayFields as $field) {
                if (isset($itemData[$field])) {
                    $itemData[$field] = json_encode($itemData[$field]);
                }
            }

            Item::create($itemData);
        }
    }
}
