<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompactdiskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //dummy data compactdisk
        DB::table('compactdisks')->insert([
            [
                'id' =>'8f81124a-9d7d-11ee-8c90-0242ac120002',
                'artist'=>'Oasis',
                'album' =>'What’s Story morning Glory',
                'deskripsi'=>'CD Original [Tidak ada lecet]' ,
                'harga'=>'200000',
                'gambar'=>'',
                'spotify'=>'https://open.spotify.com/album/1VW1MFNstaJuygaoTPkdCk?si=YKeMTPLbRcmCn56iqpIhVg',
            ],
            [
                'id' =>'8f8117b8-9d7d-11ee-8c90-0242ac120002',
                'artist'=>'Oasis',
                'album' =>'Be Here Now',
                'deskripsi'=>'CD Original [Tidak ada lecet]',
                'harga'=>'60000',
                'gambar'=>'',
                'spotify'=>'https://open.spotify.com/album/4v3p8Xcv94Z7YAtlurC9Zi?si=y-1tPb6BR92x2KiGUEta4w',
            ],
            [
                'id' =>'8f81195c-9d7d-11ee-8c90-0242ac120002',
                'artist'=>'Oasis',
                'album' =>'Definitely Maybe',
                'deskripsi'=>'CD Original [Tidak ada lecet]',
                'harga'=>'200000',
                'gambar'=>'',
                'spotify'=>'https://open.spotify.com/album/50xG9YujTzMGaLHfJTskBy?si=sctyDKJpR2ilioGBRZCmAQ',
            ],
            [
                'id' =>'8f811b0a-9d7d-11ee-8c90-0242ac120002',
                'artist'=>'Oasis',
                'album' =>'Don’t Believe the Truth',
                'deskripsi'=>'CD Original [Tidak ada lecet]',
                'harga'=>'80000',
                'gambar'=>'',
                'spotify'=>'https://open.spotify.com/album/56VuARmradZgJcSaVucTWn?si=zR9lGkUFQ2a1tBIZiV9vKw',
            ],
            [
                'id' =>'8f811c4a-9d7d-11ee-8c90-0242ac120002',
                'artist'=>'Blur',
                'album' =>'Selftitled',
                'deskripsi'=>'CD Original [Tidak ada lecet]',
                'harga'=>'80000',
                'gambar'=>'',
                'spotify'=>'https://open.spotify.com/album/7HvIrSkKGJCzd8AKyjTJ6Q?si=UiISn-JYSP2lbEE2z5UZ0Q',
            ],
            [
                'id' =>'8f811d9e-9d7d-11ee-8c90-0242ac120002',
                'artist'=>'Blur',
                'album' =>'Modern Life Is Rubbish',
                'deskripsi'=>'CD Original [Tidak ada lecet]',
                'harga'=>'180000',
                'gambar'=>'',
                'spotify'=>'https://open.spotify.com/album/7BiMMjtvTX0OiB8Yi7CFB1?si=Z886WOVRR1GGgMEt0H7yPw',
            ],
            [
                'id' =>'8f811f1a-9d7d-11ee-8c90-0242ac120002',
                'artist'=>'Blur',
                'album' =>'The Great Escape',
                'deskripsi'=>'CD Original [Tidak ada lecet]',
                'harga'=>'200000',
                'gambar'=>'',
                'spotify'=>'https://open.spotify.com/album/7BiMMjtvTX0OiB8Yi7CFB1?si=c6hszAXCQfSjuD01ieoyxA',
            ],
            [
                'id' =>'8f81205a-9d7d-11ee-8c90-0242ac120002',
                'artist'=>'Blur',
                'album' =>'Parklife',
                'deskripsi'=>'CD Original [Tidak ada lecet]',
                'harga'=>'200000',
                'gambar'=>'',
                'spotify'=>'https://open.spotify.com/album/0DBkFC6739trhCoVreZyds?si=86eFq4TDTNuU9WpAMM27NA',
            ],
            [
                'id' =>'8f81260e-9d7d-11ee-8c90-0242ac120002',
                'artist'=>'Blur',
                'album' =>'13',
                'deskripsi'=>'CD Original [Tidak ada lecet]',
                'harga'=>'50000',
                'gambar'=>'',
                'spotify'=>'https://open.spotify.com/album/5YuZ4DjvtZBywtIbHIqtGJ?si=m6B8aW6RQUGjoh2TmpO6Gw',
            ],
            [
                'id' =>'8f812758-9d7d-11ee-8c90-0242ac120002',
                'artist'=>'Radiohead',
                'album' =>'Pablo Honey',
                'deskripsi'=>'CD Original [Tidak ada lecet]',
                'harga'=>'95000',
                'gambar'=>'',
                'spotify'=>'https://open.spotify.com/album/3gBVdu4a1MMJVMy6vwPEb8?si=6gNNl3HBRl678XCzHTrW2A',
            ],
            [
                'id' =>'8f812884-9d7d-11ee-8c90-0242ac120002',
                'artist'=>'Radiohead',
                'album' =>'OK COMPUTER',
                'deskripsi'=>'CD Original [Tidak ada lecet]',
                'harga'=>'350000',
                'gambar'=>'',
                'spotify'=>'https://open.spotify.com/album/6dVIqQ8qmQ5GBnJ9shOYGE?si=mLj8DSY0T8ic-FWHNssiKA',
            ],
            [
                'id' =>'8f81299c-9d7d-11ee-8c90-0242ac120002',
                'artist'=>'The Beatles',
                'album' =>'Abbey Road',
                'deskripsi'=>'CD Original [Tidak ada lecet]',
                'harga'=>'200000',
                'gambar'=>'',
                'spotify'=>'https://open.spotify.com/album/0ETFjACtuP2ADo6LFhL6HN?si=w1stnb_lQkW-2wtgze1EEA',
            ],
            [
                'id' =>'8f812abe-9d7d-11ee-8c90-0242ac120002',
                'artist'=>'The Beatles',
                'album' =>'Help!',
                'deskripsi'=>'CD Original [Tidak ada lecet]',
                'harga'=>'80000',
                'gambar'=>'',
                'spotify'=>'https://open.spotify.com/album/19K3IHYeVkUTjcBHGfbCOi?si=PFKG3gsBTvOAhBz2ZwKQow',
            ],
            [
                'id' =>'8f812bd6-9d7d-11ee-8c90-0242ac120002',
                'artist'=>'Rage Againts The Machine',
                'album' =>'Self titiled',
                'deskripsi'=>'CD Original [Tidak ada lecet]',
                'harga'=>'200000',
                'gambar'=>'',
                'spotify'=>'https://open.spotify.com/album/4Io5vWtmV1rFj4yirKb4y4?si=0TXHHvt8STqyCtVrTZEYVA',
            ],
            [
                'id' =>'8f812cee-9d7d-11ee-8c90-0242ac120002',
                'artist'=>'Rage Againts The Machine',
                'album' =>'Evil Vampire',
                'deskripsi'=>'CD Original, tidak ada lecet',
                'harga'=>'70000',
                'gambar'=>'',
                'spotify'=>'https://open.spotify.com/album/24E6rDvGDuYFjlGewp4ntF?si=cQLO9Q2kTAGVUnGS66HKuw',
            ],
            [
                'id' =>'8f812e10-9d7d-11ee-8c90-0242ac120002',
                'artist'=>'Rage Againts The Machine',
                'album' =>'The Battles Of Los Angeles',
                'deskripsi'=>'CD Original [Tidak ada lecet]',
                'harga'=>'200000',
                'gambar'=>'',
                'spotify'=>'https://open.spotify.com/album/2eia0myWFgoHuttJytCxgX?si=JHwEVoNTReOt2uOdi7d7hw',
            ],
            [
                'id' =>'8f8130f4-9d7d-11ee-8c90-0242ac120002',
                'artist'=>'Sonic Youth',
                'album' =>'Goo',
                'deskripsi'=>'CD Original [Tidak ada lecet]',
                'harga'=>'300000',
                'gambar'=>'',
                'spotify'=>'https://open.spotify.com/album/5iYYQwB0oH9FVyVlaOXZdr?si=so7lJ03GS6Cmb5codnnqRg',
            ],
            [
                'id' =>'8f81322a-9d7d-11ee-8c90-0242ac120002',
                'artist'=>'Beastie Boys',
                'album' =>'Hello Nasty',
                'deskripsi'=>'CD Original [Tidak ada lecet]',
                'harga'=>'75000',
                'gambar'=>'',
                'spotify'=>'https://open.spotify.com/album/6eGYLONkDMja0MNtZWnRRB?si=oHiAtgdlSvu9_nTZ1Q0o7g',
            ],

        ]);
    }
}
