<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Image;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\Publication;
use App\Models\Size;
use App\Models\Status;
use App\Models\SubCategory;
use App\Models\Unit;
use App\Models\Vendor;
use App\Models\Writer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        MainCategory::truncate();
        Category::truncate();
        SubCategory::truncate();
        Brand::truncate();
        Writer::truncate();
        Publication::truncate();
        Color::truncate();
        Size::truncate();
        Unit::truncate();
        Vendor::truncate();
        Product::truncate();
        Image::truncate();
        Status::truncate();

        $category = [
            'main_category' => [
                "wristwatch" => [
                    "Men" => [
                        'Rolex',
                        'Tissot',
                        'Rado',
                        "Hublot",
                        "Logines"
                    ],
                    "Women" => [
                        "Claude-Bernard",
                        "Baby-G",
                        "Anne Klein",
                        "Cartier",
                        "Mido"
                    ],
                    "Sport" => [
                        "G-SHOCK",
                        "Seiko",
                        "Casio Edifice"
                    ],
                ],
                "Clock" => [
                    "Clock Watcher" => [
                        'Citizen',
                        'Rhythm',
                        'Rilife'

                    ],
                    "Alarm Clock" => [
                        "Guten",
                        "Maple",
                        "Diling"
                    ],
                ],
            ]
        ];

        foreach ($category['main_category'] as $key => $value) {
            // dd($key, $value);
            $main_id = MainCategory::insertGetId([
                'name' => $key,
                'creator' => 1,
                'slug' => Str::slug(strtolower($key)),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);

            foreach ($value as $key2 => $value2) {
                $category_id = Category::insertGetId([
                    'name' => $key2,
                    'main_category_id' => $main_id,
                    'creator' => 1,
                    'slug' => Str::slug(strtolower($key2)),
                    'created_at' => Carbon::now()->toDateTimeString(),
                ]);

                foreach ($value2 as $key3 => $value3) {
                    SubCategory::insert([
                        'name' => $value3,
                        'main_category_id' => $main_id,
                        'category_id' => $category_id,
                        'creator' => 1,
                        'slug' => Str::slug(strtolower($value3)),
                        'created_at' => Carbon::now()->toDateTimeString(),
                    ]);
                }
            }
        }

    //     // brand
        $data = [
            [
                'name' => 'Claude Bernard',
                'logo' => '/img/brand/1.jpg',
                'creator' => 1,
                'slug' => 'claude-bernard',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Baby-G',
                'logo' => '/img/brand/2.jpg',
                'creator' => 1,
                'slug' => 'baby-g',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'RADO',
                'logo' => '/img/brand/3.jpg',
                'creator' => 1,
                'slug' => 'rado',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Rolex',
                'logo' => '/img/brand/4.jpg',
                'creator' => 1,
                'slug' => 'rolex',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Tissot',
                'logo' => '/img/brand/5.jpg',
                'creator' => 1,
                'slug' => 'tissot',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
        ];
        Brand::insert($data);
        
        // writer
        $data = [
            [
                'name' => strtolower('LONG PHAM'),
                'image' => 'images/avatars/avatar-1.png',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('LONG PHAM')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('HOANG NGUYEN'),
                'image' => 'images/avatars/avatar-2.png',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('HOANG NGUYEN')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('CUNG LE'),
                'image' => 'images/avatars/avatar-3.png',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('CUNG LE')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('LONG PHAN'),
                'image' => 'images/avatars/avatar-4.png',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('LONG PHAN')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('DUNG NGUYEN'),
                'image' => 'images/avatars/avatar-5.png',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('DUNG NGUYEN')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
        ];
        Writer::insert($data);

        // publication
        $data = [
            [
                'name' => strtolower('GOODWORD'),
                'image' => 'images/avatars/avatar-6.png',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('GOODWORD')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('Onnesha Prokashon'),
                'image' => 'images/avatars/avatar-7.png',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('Onnesha Prokashon')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('Adiyat Prokashoni'),
                'image' => 'images/avatars/avatar-8.png',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('Adiyat Prokashoni')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('Anowar Library'),
                'image' => 'images/avatars/avatar-9.png',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('Anowar Library')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('Art Publication'),
                'image' => 'images/avatars/avatar-10.png',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('Art Publication')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
        ];
        Publication::insert($data);

        // color
        $data = [
            [
                'name' => strtolower('red'),
                'creator' => 1,
                'slug' => str::slug(strtolower('red')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('sayan'),
                'creator' => 1,
                'slug' => str::slug(strtolower('sayan')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('pink'),
                'creator' => 1,
                'slug' => str::slug(strtolower('pink')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('green'),
                'creator' => 1,
                'slug' => str::slug(strtolower('green')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('skyblue'),
                'creator' => 1,
                'slug' => str::slug(strtolower('skyblue')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('gray'),
                'creator' => 1,
                'slug' => str::slug(strtolower('gray')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('white'),
                'creator' => 1,
                'slug' => str::slug(strtolower('white')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('black'),
                'creator' => 1,
                'slug' => str::slug(strtolower('black')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('yellow'),
                'creator' => 1,
                'slug' => str::slug(strtolower('yellow')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
        ];
        Color::insert($data);

        // size
        $data = [
            [
                'name' => strtolower('MINI'),
                'creator' => 1,
                'slug' => str::slug(strtolower('mini')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('REGULAR'),
                'creator' => 1,
                'slug' => str::slug(strtolower('regular')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('UNISEX'),
                'creator' => 1,
                'slug' => str::slug(strtolower('unisex')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('SPORT'),
                'creator' => 1,
                'slug' => str::slug(strtolower('sport')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('XL'),
                'creator' => 1,
                'slug' => str::slug(strtolower('XL')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
        ];
        Size::insert($data);

        // unit
        $data = [
            [
                'name' => strtolower('item'),
                'creator' => 1,
                'slug' => str::slug(strtolower('item')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
        ];
        Unit::insert($data);

        // status
        $data = [
            [
                'name' => strtolower('Active'),
                'serial' => 1,
                'creator' => 1,
                'slug' => str::slug(strtolower('active')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('Pending'),
                'serial' => 2,
                'creator' => 1,
                'slug' => str::slug(strtolower('Pending')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('processing'),
                'serial' => 3,
                'creator' => 1,
                'slug' => str::slug(strtolower('processing')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('shipping'),
                'serial' => 4,
                'creator' => 1,
                'slug' => str::slug(strtolower('shipping')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('delivered'),
                'serial' => 5,
                'creator' => 1,
                'slug' => str::slug(strtolower('delivered')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('canceled'),
                'serial' => 6,
                'creator' => 1,
                'slug' => str::slug(strtolower('canceled')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('draft'),
                'serial' => 7,
                'creator' => 1,
                'slug' => str::slug(strtolower('draft')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],

        ];
        Status::insert($data);

        // Vendor
        $data = [
            [
                'name' => strtolower('Mr.A'),
                'email' => 'A@gmail.com',
                'address' => 'HaNoi',
                'creator' => 1,
                'slug' => str::slug(strtolower('tutul')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('Mr.B'),
                'email' => 'B@gmail.com',
                'address' => 'DaNang',
                'creator' => 1,
                'slug' => str::slug(strtolower('B')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('Mr.C'),
                'email' => 'sajid@gmail.com',
                'address' => 'SaiGon',
                'creator' => 1,
                'slug' => str::slug(strtolower('C')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
        ];
        Vendor::insert($data);

        // images
        for ($i = 1; $i <= 18; $i++) {
            Image::insert([
                'name' => 'dummy_products/' . $i . ".jpg",
                'creator' => 1,
                'created_at' => Carbon::now()->toDateTimeString()
            ]);
        }

        // Products
        DB::table('main_category_product')->truncate();
        DB::table('category_product')->truncate();
        DB::table('product_sub_category')->truncate();
        DB::table('color_product')->truncate();
        DB::table('product_size')->truncate();
        DB::table('product_unit')->truncate();
        DB::table('product_vendor')->truncate();
        DB::table('product_writer')->truncate();
        DB::table('product_publication')->truncate();
        DB::table('image_product')->truncate();

        // insert 20 product
        $product_names = [
            "Men's Wash Denim Pant - Ad003 - 7arnf",
            "CUSTOM MADE FASHION SNEAKERS",
            "Cotton Panjabi (Yellow)",
            "China Cotton Fabric Formal Shirt",
            "Karchupi One Piece",
            "Gold Plated Color Beats Locket Pendant",
            "Women's Fashionable Shirt",
            "Kids toys collection1",
            "Plastic Remote Control World Racing",
            "kodomo bath (gentle soft)",
            "Nokshipitha",
            "Teer sugar",
            "Radhuni biryani masala",
            "Shrimp shutki",
            "Pran Tomato Ketchup",
            "Black Seed",
            "Kheshari Dal",
            "Pran Mustard Oil",
            "Maggi Coconut Milk Powder",
            "Ruchi Mixed Fruit Jam",
        ];
        for ($i = 0; $i < 20; $i++) {

            $product = new Product();
            $product->name = $product_names[$i];
            // $product->name="Men's Wash Denim Pant - Ad003 - 7arnf";
            $product->brand_id = rand(1, Brand::count());
            $product->tax = 15;
            $product->price = rand(200, 600);
            $product->sku = 'SKU' . rand(500, 5000);
            $product->stock = rand(700, 1000);
            $product->discount = rand(0, 20);
            $product->expiration_date = Carbon::now()->year . '-12-12';
            $product->minimum_amount = rand(10, 20);
            $product->free_delivery = rand(0, 1);
            $product->total_view = rand(50, 200);
            $product->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, molestias!";
            $product->features = "<ul><li>Lorem ipsum dolor</li><li>Lorem ipsum dolor</li><li>Lorem ipsum dolor</li><li>Lorem ipsum dolor</li></ul>";
            $product->thumb_image = "dummy_products/" . rand(1, 18) . ".jpg";
            $product->creator = 1;
            $product->created_at = Carbon::now()->toDateTimeString();
            $product->save();
            $product->code = 'PRO-' . Carbon::now()->year . Carbon::now()->month . $product->id;
            $product->slug = Str::slug($product->name) . '-' . Carbon::now()->year . Carbon::now()->month . $product->id;
            $product->save();

            DB::table('main_category_product')->insert(
                ['main_category_id' => 1, 'product_id' => $product->id]
            );

            DB::table('category_product')->insert([
                ['category_id' => 1, 'product_id' => $product->id],
                ['category_id' => 2, 'product_id' => $product->id],
                ['category_id' => 3, 'product_id' => $product->id]
            ]);

            DB::table('product_sub_category')->insert([
                ['sub_category_id' => 1, 'product_id' => $product->id],
                ['sub_category_id' => 2, 'product_id' => $product->id],
                ['sub_category_id' => 3, 'product_id' => $product->id]
            ]);

            DB::table('color_product')->insert(
                ['color_id' => 1, 'product_id' => $product->id],
                ['color_id' => 2, 'product_id' => $product->id],
                ['color_id' => 3, 'product_id' => $product->id]
            );

            DB::table('product_size')->insert([
                ['size_id' => 1, 'product_id' => $product->id],
                ['size_id' => 2, 'product_id' => $product->id],
                ['size_id' => 3, 'product_id' => $product->id]
            ]);

            DB::table('product_unit')->insert([
                ['unit_id' => 1, 'product_id' => $product->id],
                ['unit_id' => 2, 'product_id' => $product->id],
                ['unit_id' => 3, 'product_id' => $product->id]
            ]);

            DB::table('product_vendor')->insert([
                ['vendor_id' => 1, 'product_id' => $product->id],
                ['vendor_id' => 2, 'product_id' => $product->id],
            ]);

            DB::table('product_writer')->insert([
                ['writer_id' => 1, 'product_id' => $product->id],
                ['writer_id' => 2, 'product_id' => $product->id],
            ]);

            DB::table('product_publication')->insert([
                ['publication_id' => 1, 'product_id' => $product->id],
                ['publication_id' => 2, 'product_id' => $product->id],
            ]);

            DB::table('image_product')->insert([
                ['image_id' => rand(1, 5), 'product_id' => $product->id],
                ['image_id' => rand(6, 10), 'product_id' => $product->id],
                ['image_id' => rand(11, 15), 'product_id' => $product->id],
                ['image_id' => rand(16, 18), 'product_id' => $product->id],
            ]);
        }
    }
}
