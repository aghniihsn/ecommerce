<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('products')->count() == 0) {

            DB::table('products')->insert([[
                'name' => 'ROG Strix SCAR 16 (2024) G634JZR-I948M6G-O',
                'image' => 'product-1.png',
                'description' => <<<XML
                STEP UP TO THE POWER OF 2ND GENERATION RTX WITH GEFORCE RTX 3050 LAPTOP FAMILY \n\n

                GPU : NVIDIA GeForce RTX 3050 Ti Laptop GPU 4GB GDDR6 MUX Switch + Optimus
                ROG Boost: 1745MHz* at 125W (1695MHz Boost Clock+50MHz OC, 100W+25W Dynamic Boost)
                CPU : AMD Ryzen 7 6800HS Mobile Processor (8-core/16-thread, 20MB cache, up to 4.7 GHz max boost)
                Memory : 16GB (8GB DDR5-4800 SO-DIMM *2)
                Storage : 512GB PCIe 4.0 NVMe M.2 SSD
                Display : 16-inch QHD+ 16:10 (2560 x 1600, WQXGA) IPS Touch Screen, DCI-P3 % 100%, Brightness 500nits, Refresh Rate 165Hz
                Keyboard : Backlit Chiclet Keyboard 1-Zone RGB
                Operating System : Windows 11 Home
                Office : Office Home and Student 2021
                Speaker : 4-speaker system with Smart Amplifier Technology\n\n
                
                Audio Tech :
                AI noise-canceling technology
                Dolby Atmos
                Hi-Res certification
                Smart Amp Technology
                Support Microsoft Cortana near field/Far field\n\n
                
                Wifi : Wi-Fi 6E(802.11ax) (Dual band) 2*2 + Bluetooth 5.2 (*BT version may change with OS upgrades.)\n\n
                
                I/O Port :
                1x ROG XG Mobile Interface
                1x USB 3.2 Gen 2 Type-C support DisplayPort / power delivery
                1x USB 3.2 Gen 2 Type-C support DisplayPort / power delivery / G-SYNC
                2x USB 3.2 Gen 2 Type-A
                1x card reader (microSD) (UHS-II, 312MB/s)\n\n
                
                Webcam : 720P HD IR Camera for Windows Hello
                Battery : 90WHrs, 4S1P, 4-cell Li-ion\n\n
                
                Bundle :
                ROG backpack
                Stylus (ASUS Pen SA201-MPP2.0 support)
            XML,
                'price' => 16000000,
                'discount' => 0,
                'sku' => 'Product1',
                'id_category' => 1,
                'color' => 'hitam',
                'stock' => 5,
            ], [
                'name' => 'ROG Strix SCAR 18 (2024) G834JYR-I949M6G-O',
                'id_category' => 1,
                'image' => 'product-2.png',
                'description' => <<<XML
                STEP UP TO THE POWER OF 2ND GENERATION RTX WITH GEFORCE RTX 3050 LAPTOP FAMILY \n\n

                GPU : NVIDIA GeForce RTX 3050 Ti Laptop GPU 4GB GDDR6 MUX Switch + Optimus
                ROG Boost: 1745MHz* at 125W (1695MHz Boost Clock+50MHz OC, 100W+25W Dynamic Boost)
                CPU : AMD Ryzen 7 6800HS Mobile Processor (8-core/16-thread, 20MB cache, up to 4.7 GHz max boost)
                Memory : 16GB (8GB DDR5-4800 SO-DIMM *2)
                Storage : 512GB PCIe 4.0 NVMe M.2 SSD
                Display : 16-inch QHD+ 16:10 (2560 x 1600, WQXGA) IPS Touch Screen, DCI-P3 % 100%, Brightness 500nits, Refresh Rate 165Hz
                Keyboard : Backlit Chiclet Keyboard 1-Zone RGB
                Operating System : Windows 11 Home
                Office : Office Home and Student 2021
                Speaker : 4-speaker system with Smart Amplifier Technology\n\n
                
                Audio Tech :
                AI noise-canceling technology
                Dolby Atmos
                Hi-Res certification
                Smart Amp Technology
                Support Microsoft Cortana near field/Far field\n\n
                
                Wifi : Wi-Fi 6E(802.11ax) (Dual band) 2*2 + Bluetooth 5.2 (*BT version may change with OS upgrades.)\n\n
                
                I/O Port :
                1x ROG XG Mobile Interface
                1x USB 3.2 Gen 2 Type-C support DisplayPort / power delivery
                1x USB 3.2 Gen 2 Type-C support DisplayPort / power delivery / G-SYNC
                2x USB 3.2 Gen 2 Type-A
                1x card reader (microSD) (UHS-II, 312MB/s)\n\n
                
                Webcam : 720P HD IR Camera for Windows Hello
                Battery : 90WHrs, 4S1P, 4-cell Li-ion\n\n
                
                Bundle :
                ROG backpack
                Stylus (ASUS Pen SA201-MPP2.0 support)
            XML,
                'price' => 20000000,
                'discount' => 0,
                'sku' => 'Product2',
                'color' => 'hitam',
                'stock' => 5,
            ], [
                'name' => 'ROG Strix SCAR 18 (2024) ABCD09',
                'id_category' => 2,
                'image' => 'product-3.png',
                'description' => <<<XML
                STEP UP TO THE POWER OF 2ND GENERATION RTX WITH GEFORCE RTX 3050 LAPTOP FAMILY \n\n

                GPU : NVIDIA GeForce RTX 3050 Ti Laptop GPU 4GB GDDR6 MUX Switch + Optimus
                ROG Boost: 1745MHz* at 125W (1695MHz Boost Clock+50MHz OC, 100W+25W Dynamic Boost)
                CPU : AMD Ryzen 7 6800HS Mobile Processor (8-core/16-thread, 20MB cache, up to 4.7 GHz max boost)
                Memory : 16GB (8GB DDR5-4800 SO-DIMM *2)
                Storage : 512GB PCIe 4.0 NVMe M.2 SSD
                Display : 16-inch QHD+ 16:10 (2560 x 1600, WQXGA) IPS Touch Screen, DCI-P3 % 100%, Brightness 500nits, Refresh Rate 165Hz
                Keyboard : Backlit Chiclet Keyboard 1-Zone RGB
                Operating System : Windows 11 Home
                Office : Office Home and Student 2021
                Speaker : 4-speaker system with Smart Amplifier Technology\n\n
                
                Audio Tech :
                AI noise-canceling technology
                Dolby Atmos
                Hi-Res certification
                Smart Amp Technology
                Support Microsoft Cortana near field/Far field\n\n
                
                Wifi : Wi-Fi 6E(802.11ax) (Dual band) 2*2 + Bluetooth 5.2 (*BT version may change with OS upgrades.)\n\n
                
                I/O Port :
                1x ROG XG Mobile Interface
                1x USB 3.2 Gen 2 Type-C support DisplayPort / power delivery
                1x USB 3.2 Gen 2 Type-C support DisplayPort / power delivery / G-SYNC
                2x USB 3.2 Gen 2 Type-A
                1x card reader (microSD) (UHS-II, 312MB/s)\n\n
                
                Webcam : 720P HD IR Camera for Windows Hello
                Battery : 90WHrs, 4S1P, 4-cell Li-ion\n\n
                
                Bundle :
                ROG backpack
                Stylus (ASUS Pen SA201-MPP2.0 support)
            XML,
                'price' => 19000000,
                'discount' => 0,
                'sku' => 'Product3',
                'color' => 'hitam',
                'stock' => 5,
            ], [
                'name' => 'ROG Strix G16 (2024) G614JZR-I948C6G-O',
                'id_category' => 3,
                'image' => 'product-4.png',
                'description' =><<<XML
                STEP UP TO THE POWER OF 2ND GENERATION RTX WITH GEFORCE RTX 3050 LAPTOP FAMILY \n\n

                GPU : NVIDIA GeForce RTX 3050 Ti Laptop GPU 4GB GDDR6 MUX Switch + Optimus
                ROG Boost: 1745MHz* at 125W (1695MHz Boost Clock+50MHz OC, 100W+25W Dynamic Boost)
                CPU : AMD Ryzen 7 6800HS Mobile Processor (8-core/16-thread, 20MB cache, up to 4.7 GHz max boost)
                Memory : 16GB (8GB DDR5-4800 SO-DIMM *2)
                Storage : 512GB PCIe 4.0 NVMe M.2 SSD
                Display : 16-inch QHD+ 16:10 (2560 x 1600, WQXGA) IPS Touch Screen, DCI-P3 % 100%, Brightness 500nits, Refresh Rate 165Hz
                Keyboard : Backlit Chiclet Keyboard 1-Zone RGB
                Operating System : Windows 11 Home
                Office : Office Home and Student 2021
                Speaker : 4-speaker system with Smart Amplifier Technology\n\n
                
                Audio Tech :
                AI noise-canceling technology
                Dolby Atmos
                Hi-Res certification
                Smart Amp Technology
                Support Microsoft Cortana near field/Far field\n\n
                
                Wifi : Wi-Fi 6E(802.11ax) (Dual band) 2*2 + Bluetooth 5.2 (*BT version may change with OS upgrades.)\n\n
                
                I/O Port :
                1x ROG XG Mobile Interface
                1x USB 3.2 Gen 2 Type-C support DisplayPort / power delivery
                1x USB 3.2 Gen 2 Type-C support DisplayPort / power delivery / G-SYNC
                2x USB 3.2 Gen 2 Type-A
                1x card reader (microSD) (UHS-II, 312MB/s)\n\n
                
                Webcam : 720P HD IR Camera for Windows Hello
                Battery : 90WHrs, 4S1P, 4-cell Li-ion\n\n
                
                Bundle :
                ROG backpack
                Stylus (ASUS Pen SA201-MPP2.0 support)
            XML,
                'price' => 18000000,
                'discount' => 0,
                'sku' => 'Product4',
                'color' => 'hitam',
                'stock' => 5,
            ]]);
        }
    }
}
