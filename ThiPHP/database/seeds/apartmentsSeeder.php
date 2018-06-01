<?php

use Illuminate\Database\Seeder;

class apartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $table->increments('id');
//        $table->string('name');
//        $table->string('address');
//        $table->bigInteger('price');
//        $table->string('info');
//        $table->string('detail');
//        $table->string('avatar');
//        $table->integer('status');
//        $table->timestamps();
        DB::table('apartments')-> insert([[
            'name' => 'CT12A',
            'address' => 'KĐT-Kim Văn - Kim Lũ',
            'price' => 20000000,
            'info' => 'Căn 1040',
            'detail' => 'Diện tích 50m2. Hai phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/04/0I4XNtd4/20160304093133-3c28.jpg',
            'status' => 1,
            'created_at' => '2018/05/31'
        ], [
            'name' => 'CT12A',
            'address' => 'KĐT-Kim Văn - Kim Lũ',
            'price' => 20000000,
            'info' => 'Căn 1041',
            'detail' => 'Diện tích 50m2. Hai phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/04/0I4XNtd4/20160304093133-3c28.jpg',
            'status' => 1,
            'created_at' => '2018/05/30'
        ],[
            'name' => 'CT12A',
            'address' => 'KĐT-Kim Văn - Kim Lũ',
            'price' => 20000000,
            'info' => 'Căn 1042',
            'detail' => 'Diện tích 50m2. Hai phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/04/0I4XNtd4/20160304093133-3c28.jpg',
            'status' => 1,
            'created_at' => '2018/05/26'
        ],[
            'name' => 'CT12B',
            'address' => 'KĐT-Kim Văn - Kim Lũ',
            'price' => 20000000,
            'info' => 'Căn 1043',
            'detail' => 'Diện tích 50m2. Hai phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/04/0I4XNtd4/20160304093133-3c28.jpg',
            'status' => 1,
            'created_at' => '2018/05/25'
        ],[
            'name' => 'CT12B',
            'address' => 'KĐT-Kim Văn - Kim Lũ',
            'price' => 20000000,
            'info' => 'Căn 1140',
            'detail' => 'Diện tích 50m2. Hai phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/04/0I4XNtd4/20160304093133-3c28.jpg',
            'status' => 1,
            'created_at' => '2018/05/19'
        ],[
            'name' => 'CT12B',
            'address' => 'KĐT-Kim Văn - Kim Lũ',
            'price' => 20000000,
            'info' => 'Căn 1340',
            'detail' => 'Diện tích 50m2. Hai phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/04/0I4XNtd4/20160304093133-3c28.jpg',
            'status' => 1,
            'created_at' => '2018/05/17'
        ],[
            'name' => 'CT12B',
            'address' => 'KĐT-Kim Văn - Kim Lũ',
            'price' => 20000000,
            'info' => 'Căn 4040',
            'detail' => 'Diện tích 50m2. Hai phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/04/0I4XNtd4/20160304093133-3c28.jpg',
            'status' => 1,
            'created_at' => '2018/05/03'
        ],[
            'name' => 'CT12C',
            'address' => 'KĐT-Kim Văn - Kim Lũ',
            'price' => 23000000,
            'info' => 'Căn 3040',
            'detail' => 'Diện tích 50m2. Hai phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/04/0I4XNtd4/20160304093133-3c28.jpg',
            'status' => 1,
            'created_at' => '2018/05/30'
        ],[
            'name' => 'CT12A',
            'address' => 'KĐT-Kim Văn - Kim Lũ',
            'price' => 20000000,
            'info' => 'Căn 2140',
            'detail' => 'Diện tích 50m2. Hai phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/04/0I4XNtd4/20160304093133-3c28.jpg',
            'status' => 1,
            'created_at' => '2018/05/11'
        ],[
            'name' => 'CT12A',
            'address' => 'KĐT-Kim Văn - Kim Lũ',
            'price' => 20000000,
            'info' => 'Căn 1240',
            'detail' => 'Diện tích 50m2. Hai phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/04/0I4XNtd4/20160304093133-3c28.jpg',
            'status' => 1,
            'created_at' => '2018/05/10'
        ],[
            'name' => 'CT12A',
            'address' => 'KĐT-Kim Văn - Kim Lũ',
            'price' => 20000000,
            'info' => 'Căn 3240',
            'detail' => 'Diện tích 50m2. Hai phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/04/0I4XNtd4/20160304093133-3c28.jpg',
            'status' => 1,
            'created_at' => '2018/05/05'
        ],[
            'name' => 'CT12B',
            'address' => 'KĐT-Kim Văn - Kim Lũ',
            'price' => 20000000,
            'info' => 'Căn 3340',
            'detail' => 'Diện tích 50m2. Hai phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/15/0I4XNtd4/20160315105721-db61.jpg',
            'status' => 1,
            'created_at' => '2018/05/12'
        ],[
            'name' => 'CT-B',
            'address' => 'KĐT - Đại Kim',
            'price' => 21000000,
            'info' => 'Căn 0940',
            'detail' => 'Diện tích 50m2. Hai phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/15/0I4XNtd4/20160315105721-db61.jpg',
            'status' => 1,
            'created_at' => '2018/05/14'
        ],[
            'name' => 'CT-A',
            'address' => 'KĐT - Đại Kim',
            'price' => 23000000,
            'info' => 'Căn 0840',
            'detail' => 'Diện tích 50m2. Hai phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/15/0I4XNtd4/20160315105721-db61.jpg',
            'status' => 1,
            'created_at' => '2018/05/20'
        ],[
            'name' => 'CT-B',
            'address' => 'KĐT - Đại Kim',
            'price' => 20000000,
            'info' => 'Căn 1040',
            'detail' => 'Diện tích 50m2. Hai phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/15/0I4XNtd4/20160315105721-db61.jpg',
            'status' => 1,
            'created_at' => '2018/05/16'
        ],[
            'name' => 'CT-A',
            'address' => 'KĐT - Đại Kim',
            'price' => 20000000,
            'info' => 'Căn 1240',
            'detail' => 'Diện tích 50m2. Hai phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/15/0I4XNtd4/20160315105721-db61.jpg',
            'status' => 1,
            'created_at' => '2018/05/25'
        ],[
            'name' => 'CT-A',
            'address' => 'KĐT - Đại Kim',
            'price' => 20000000,
            'info' => 'Căn 1540',
            'detail' => 'Diện tích 50m2. Hai phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/15/0I4XNtd4/20160315105721-db61.jpg',
            'status' => 1,
            'created_at' => '2018/06/01'
        ],[
            'name' => 'CT-A',
            'address' => 'KĐT - Đại Kim',
            'price' => 20000000,
            'info' => 'Căn 1140',
            'detail' => 'Diện tích 50m2. Hai phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/15/0I4XNtd4/20160315105721-db61.jpg',
            'status' => 1,
            'created_at' => '2018/05/30'
        ],[
            'name' => 'CT-A',
            'address' => 'KĐT - Đại Kim',
            'price' => 20000000,
            'info' => 'Căn 1440',
            'detail' => 'Diện tích 50m2. Hai phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/15/0I4XNtd4/20160315105721-db61.jpg',
            'status' => 1,
            'created_at' => '2018/05/29'
        ],
            [
            'name' => 'CT-A',
            'address' => 'KĐT - Đại Kim',
            'price' => 24000000,
            'info' => 'Căn 2030',
            'detail' => 'Diện tích 100m2. Ba phòng ngủ có wc riêng, phòng khách, phòng bếp',
            'avatar' => 'http://file4.batdongsan.com.vn/2016/03/15/0I4XNtd4/20160315105721-db61.jpg',
            'status' => 1,
                'created_at' => '2018/05/28'
        ]]);
    }
}
