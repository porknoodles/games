<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ReturnofwarriorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $category = ['Quest', 'Leveling Map', 'Head Equipment', 'Body Equipment', 'Foot Equipment', 'Hand Equipment', 'Potions'];
        $level_range = ['0 - 10','11 - 20','21 - 30','31 - 40','41 - 50','51 - 60','61 - 70','71 - 80','81 - 90','91 - 100','101 - 110','111 - 120','121 - 130'];

        $data = [['Quest','0_10','1-10','Advice for Newbies','Parish','2714 x 585','Aldia Harbor','N/A', ''],
            ['Quest','0_10','1-10','Asmund’s Advice','Asmund','2779 x 622','Aldia Harbor','Must Complete Advice for Newbies to access this quest.', ''],
            ['Quest','0_10','1-10','Immoderate Request','Parish','2714 x 585','Aldia Harbor','N/A', ''],
            ['Quest','0_10','1-10','Supply Ichman Scales','Parish','2714 x 585','Aldia Harbor','Must Complete Immoderate Request to access this quest.', ''],
            ['Quest','0_10','1-10','Kartelant History','Bremer','2721 x 577','Aldia Harbor','N/A', ''],
            ['Quest','0_10','1-10','Merchant Meeting','Levady','2711 x 612','Aldia Harbor','Must Complete To Build Trust to access this quest.', ''],
            ['Quest','0_10','1-10','To Build Trust','Asmund','2779 x 622','Aldia Harbor','Must Complete Asmund’s Advice to access this quest.', ''],
            ['Quest','0_10','3-10','Hunt Down Ichman Warriors','Bremer','2721 x 577','Aldia Harbor','Must Complete Immoderate Request to access this quest.', ''],
            ['Quest','0_10','5-15','Levady’s Request','Levady','2711 x 612','Aldia Harbor','Must Complete Merchant Meeting to access this quest.', ''],
            ['Quest','0_10','7-15','Lost Talisman','Paivine','2766 x 719','Aldia Harbor','N/A', ''],
            ['Quest','0_10','7-15','Gift Delivery','Paivine','2766 x 720','Aldia Harbor','Must Complete Lost Talisman to access this quest.', ''],
            ['Quest','0_10','9-100','Class Upgrade Certificate (Acolyte)','Kleary','2760 x 644','Aldia Harbor','N/A', ''],
            ['Quest','0_10','9-100','Class Upgrade Certificate (Fighter)','Willen','2782 x 646','Aldia Harbor','N/A', ''],
            ['Quest','0_10','9-100','Class Upgrade Certificate (Mage)','Chesloan','2760 x 644','Aldia Harbor','N/A', ''],
            ['Quest','0_10','9-100','Class Upgrade Certificate (Rogue)','Deveres','2760 x 644','Aldia Harbor','N/A', ''],
            ['Quest','0_10','10-20','Ichman Chief','Bremer','2721 x 577','Aldia Harbor','Must Complete Hunt Down Ichman Warriors to access this quest.', ''],
            ['Quest','11_20','12-20','Delivery to Tessetio','Duffy','2730 x 624','Aldia Harbor','N/A', ''],
            ['Quest','11_20','12-20','Rare Materials','Akcard','2782 x 574','Aldia Harbor','N/A', ''],
            ['Quest','11_20','12-20','Rare Materials','Akcard','2782 x 574','Aldia Harbor','N/A', ''],
            ['Quest','11_20','15-150','Blacksmith’s Suggestion','Conelly','1949 x 971','First Camp','N/A (Note: this quest enables you to enhance/fuse equips, need Zombie Dog Bone x 10 and Zombie Dog Chain x 3)', ''],
            ['Quest','11_20','15-18','Pesticide Research','Swanson','1966 x 997','First Camp','N/A', ''],
            ['Quest','11_20','15-18','Proof of Courage I','Simon','1970 x 1004','First Camp','N/A', ''],
            ['Quest','11_20','15-23','Hunting Contract','Clancy','1910 x 1011','First Camp','N/A', ''],
            ['Quest','11_20','15-30','Zombie Parasites','Broas','1932 x 986','First Camp','Must Complete Rare Materials to access this quest.', ''],
            ['Quest','11_20','16-19','Proof of Courage II','Simon','1970 x 1004','First Camp','Must Complete Proof of Courage I to access this quest.', ''],
            ['Quest','11_20','17-25','Blacksmith’s Shield','Conelly','1949 x 971','First Camp','Must Complete Blacksmith’s Suggestion to access this quest.', ''],
            ['Quest','11_20','20-25','Guard’s Request','Slason','1415 x 2144','Tessetio','Killer Beetle Princer x10', ''],
            ['Quest','11_20','20-25','Ronnia with Injured Leg','Ronnia','1513 x 2063','Tessetio','Killer Beetle Husk x7', ''],
            ['Quest','11_20','20-30','Goblin Movement','Harnelson','2004 x 1429','Old Forest Tower','N/A', ''],
            ['Quest','21_30','22-27','Endless Hatred','Ibenia','1544 x 2019','Tessetio','Must Complete Ibenia’s Anger to access this quest. (Kurmin Strap 20 pieces)', ''],
            ['Quest','21_30','22-27','Ibenia’s Anger','Ibenia','1544 x 2019','Tessetio','Kurmin Strap 20 pieces', ''],
            ['Quest','21_30','24-28','Request from Toni','Toni','1395 x 1957','Tessetio','15 Raged Dire Wolf Claws', ''],
            ['Quest','21_30','24-28','Support West Sentry Post','Mosley','1301 x 2025','Tessetio','N/A', ''],
            ['Quest','21_30','24-28','Weiss’s Request','Weiss','1428 x 1978','Tessetio','10 pieces of dire boar meats', ''],
            ['Quest','21_30','25-150','Path of the Leader','Wagner','1409 x 2049','Tessetio','N/A (Note: this quest enables you to create guild, need 500 fames and Forgotten Knight Blood x 20)', ''],
            ['Quest','21_30','26-30','Roshin’s Call','Roshin','1409 x 2144','Tessetio','N/A', ''],
            ['Quest','21_30','26-30','Supply Goods','Jaitz','1490 x 2121','Tessetio','N/A', ''],
            ['Quest','21_30','26-30','Wandering Knights','Ares','1446 x 2607','(Near) Eranshia Tower','Must Complete Roshin’s Call to access this quest.', ''],
            ['Quest','21_30','26-30','Wipe Poison Spiders Out','Kruger','2157 x 2322','Watcher Camp','N/A', ''],
            ['Quest','21_30','28-30','Migration of Monks','Ares','1446 x 2607','(Near) Eranshia Tower','Must Complete Wandering Knights to access this quest.', ''],
            ['Quest','21_30','30-37','Recon Orcs','Kruger','2157 x 2322','Watcher Camp','N/A', ''],
            ['Quest','21_30','30-40','Raid on Goblin Territory','Harnelson','2004 x 1429','Old Forest Tower','Must Complete Goblin Movement to access this quest.', ''],
            ['Quest','21_30','28-31','Lining Made of Feathers','Schiller','2026 x 992','New Belin Harbor','N/A', ''],
            ['Quest','21_30','29-32','Sharp Talon','Taver','2011 x 1005','New Belin Harbor','N/A', ''],
            ['Quest','21_30','29-32','Soft Fur','Schiller','2026 x 992','New Belin Harbor','N/A', ''],
            ['Quest','21_30','29-33','Amber Bulte Control','Ryon','1946 x 1034','New Belin Harbor','N/A', ''],
            ['Quest','21_30','29-33','Orc Scouts','Levinut','2002 x 1007','Belin Harbor','N/A', ''],
            ['Quest','21_30','30-36','Provocation of Orcs','Levinut','2002 x 1007','Belin Harbor','Must Complete Orc Scouts to access this quest.', ''],
            ['Quest','31_40','40-100','Precious Life','Niles','1429 x 2017','Tessetio','N/A (Note: this quest is for going to Map 3)', ''],
            ['Quest','31_40','31-38','Scent of the Battle','Kruger','2157 x 2322','Watcher Camp','Must Complete Recon Orcs to access this quest.', ''],
            ['Quest','31_40','32-42','Monk King with Rage','Ares','1446 x 2607','(Near) Eranshia Tower','Must Complete Migration of Monks to access this quest.', ''],
            ['Quest','31_40','32-42','Orcs Battle Cry','Kruger','2157 x 2322','Watcher Camp','Must Complete Scent of the Battle to access this quest.', ''],
            ['Quest','31_40','35-45','Dark Hands for Revenge','Kruger','2157 x 2322','Watcher Camp','Must Complete Orcs Battle Cry to access this quest.', ''],
            ['Quest','31_40','35-45','Ak’kans Counterattack','Stephane','2943 x 2580','(Near) Orc Encampment','Must Complete Dark Hands for Revenge to access this quest.', ''],
            ['Quest','31_40','32-36','A Road to Paoulin','Levinut','2002 x 1007','New Belin Harbor','N/A', ''],
            ['Quest','31_40','32-36','Rozen’s Request','Rozen','2003 x 995','New Belin Harbor','N/A', ''],
            ['Quest','31_40','32-36','Secure a Road','Levinut','2002 x 1007','New Belin Harbor','N/A', ''],
            ['Quest','31_40','34-37','A Blacksmith Collection','Volkan','1907 x 1635','Paoulin','N/A', ''],
            ['Quest','31_40','34-37','A Pack of Wolves','Perdo','1357 x 1445','High Lake','N/A', ''],
            ['Quest','31_40','34-37','Tiger Talons','Everly','1317 x 1437','High Lake','N/A', ''],
            ['Quest','31_40','35-38','Durable Pelts','Villanu','1333 x 1461','High Lake','N/A', ''],
            ['Quest','31_40','35-39','Perdo’s Request I','Perdo','1357 x 1445','High Lake','N/A', ''],
            ['Quest','31_40','35-38','Materials for Magic I','Moreberg','1885 x 1599','Paoulin','N/A', ''],
            ['Quest','31_40','35-38','Raid a Camp','Alfred','1851 x 1604','Paoulin','N/A', ''],
            ['Quest','31_40','35-45','Subdue Orcs','Levinut','2002 x 1007','New Belin Harbor','Must Complete Provocation of Orcs to access this quest.', ''],
            ['Quest','31_40','36-39','Perdo’s Request II','Perdo','1357 x 1445','High Lake','Must Complete Perdo’s Request I to access this quest.', ''],
            ['Quest','31_40','36-40','Bloody Revenge','Alfred','1851 x 1604','Paoulin','Must Complete Raid a Camp to access this quest.', ''],
            ['Quest','31_40','37-40','Lenner’s Request','Lenner','1343 x 1467','High Lake','Mumakil Tusk 10 Pieces', ''],
            ['Quest','31_40','37-41','Rocha’s Request','Rocha','1363 x 1461','High Lake','N/A', ''],
            ['Quest','31_40','38-42','Materials for Magic II','Moreberg','1885 x 1599','Paoulin','Must Complete Materials for Magic I to access this quest.[leokin heart 10 pieces]', ''],
            ['Quest','31_40','39-42','Hearts of Golems','Moreberg','1885 x 1599','Paoulin','N/A', ''],
            ['Quest','31_40','40-43','Break Great Golems','Alfred','1851 x 1604','Paoulin','N/A', ''],
            ['Quest','31_40','40-50','Ark’al','Alfred','1851 x 1604','Paoulin','Must Complete Bloody Revenge to access this quest.', ''],
            ['Quest','31_40','40-43','Subdue Leokins','Perdo','1357 x 1445','High Lake','N/A', ''],
            ['Quest','31_40','40-44','A Shaken Forest','Perdo','1357 x 1445','High Lake','N/A', ''],
            ['Quest','41_50','41-45','Temple Keepers','Alfred','1851 x 1604','Paoulin','N/A', ''],
            ['Quest','41_50','43-53','Leokin King at the South','Perdo','1357 x 1445','High Lake','Must Complete Subdue Leokins to access this quest.', ''],
            ['Quest','41_50','44-48','Clean the Valley','Rocha','1363 x 1461','High Lake','N/A', ''],
            ['Quest','41_50','45-55','An Evil in the Forest','Kerin','963 x 1885','Most west of the map','Must Complete A Shaken Forest to access this quest.', ''],
            ['Quest','41_50','46-49','Everly’s Request','Everly','1317 x 1437','High Lake','N/A', ''],
            ['Quest','41_50','45-100','Pirate Town','Mafuto','2796 x 2313','Pirate Town','N/A', ''],
            ['Quest','41_50','47-50','Stop Being Stumps','Mafuto','2796 x 2313','Pirate Town','N/A', ''],
            ['Quest','41_50','47-50','Wolf Hunting','Mafuto','2796 x 2313','Pirate Town','N/A', ''],
            ['Quest','41_50','48-51','Shadow Wolf','Mafuto','2796 x 2313','Pirate Town','Must Complete Wolf Hunting to access this quest.', ''],
            ['Quest','41_50','48-51','Threatening Tigers','Mulligan','3645 x 2900','Righties Camp','N/A', ''],
            ['Quest','41_50','49-52','Exterminate Beetles','Mafuto','2796 x 2313','Pirate Town','N/A', ''],
            ['Quest','41_50','49-52','Get Rid of Coctopods','Mafuto','2796 x 2313','Pirate Town','N/A', ''],
            ['Quest','41_50','50-53','Hate Burnt Stuff','Mafuto','2796 x 2313','Pirate Town','N/A', ''],
            ['Quest','41_50','50-53','Hometown Flavor','Okoanon','3612 x 2896','Righties Camp','N/A', ''],
            ['Quest','51_60','51-54','Mutated Mushroom','Junoves','2888 x 2372','Pirate Town','N/A', ''],
            ['Quest','51_60','51-55','Dread Tigers','Boeba','3554 x 2487','Eastern Plain','Must Complete Threatening Tigers to access this quest.', ''],
            ['Quest','51_60','52-100','First Made','Junoves','2888 x 2372','Pirate Town','Must Complete Mutated Mushroom to access this quest.', ''],
            ['Quest','51_60','52-54','Loss of Land','Mafuto','2796 x 2313','Pirate Town','N/A', ''],
            ['Quest','51_60','52-55','Secret Request','Mafuto','2796 x 2313','Pirate Town','N/A', ''],
            ['Quest','51_60','52-55','Crackdown on Traitors','Mihael','2590 x 2291','Pirate Town','Must Complete Secret Request to access this quest.', ''],
            ['Quest','51_60','52-55','Crackdown on Traitors II','Mihael','2590 x 2291','Pirate Town','Must Complete Crackdown on Traitors to access this quest.', ''],
            ['Quest','51_60','52-55','Tentacle Fungi','Mafuto','2796 x 2313','Pirate Town','N/A', ''],
            ['Quest','51_60','53-100','Strike Flynds','Mafuto','2796 x 2313','Pirate Town','Must Complete Loss of Land to access this quest.', ''],
            ['Quest','51_60','54-57','Angler in Fungus Forest','Mafuto','2796 x 2313','Pirate Town','N/A', ''],
            ['Quest','51_60','54-57','Angler in Fungus Forest II','Wignor','3624 x 1845','Southern Fungus Forest','Must Complete Angler in Fungus Forest to access this quest.', ''],
            ['Quest','51_60','54-57','New & Improved','Verudia','2806 x 2371','Pirate Town','N/A', ''],
            ['Quest','51_60','54-57','One-Eyed Giant','Arcshi','2889 x 2376','Pirate Town','N/A', ''],
            ['Quest','51_60','55-58','Creepy Spiders','Saykin','2289 x 1679','Southern Gavial Swamp','N/A', ''],
            ['Quest','51_60','55-58','Dangerous Curiosity','Willy','2885 x 2364','Pirate Town','N/A', ''],
            ['Quest','51_60','55-58','Luxurious Leathers','Saykin','2289 x 1679','Southern Gavial Swamp','N/A', ''],
            ['Quest','51_60','55-58','More Luxurious Leathers','Saykin','2289 x 1679','Southern Gavial Swamp','Must Complete Luxurious Leathers to access this quest.', ''],
            ['Quest','51_60','55-59','Souvenir','Astidia','1728 x 3348','Northern Gavial Swamp','Must Complete Dangerous Curiosity to access this quest.', ''],
            ['Quest','51_60','55-59','Tribal Test','Omar','2378 x 3381','Tribal Village','N/A', ''],
            ['Quest','51_60','56-100','Grak’auk','Broys','2683 x 1738','Nohnutt Field','Must Complete Strike Flynds to access this quest.', ''],
            ['Quest','51_60','56-59','Crocodile Vagabonds','Saykin','2289 x 1679','Southern Gavial Swamp','N/A', ''],
            ['Quest','51_60','56-59','Something Rogue Needs','Saykin','2289 x 1679','Southern Gavial Swamp','N/A', ''],
            ['Quest','51_60','56-60','Venomous Phibios','Swessia','2886 x 2368','Pirate Town','Must Complete Something Rogue Needs to access this quest.', ''],
            ['Quest','51_60','57-60','Missing Searcher','Mafuto','2796 x 2313','Pirate Town','N/A', ''],
            ['Quest','51_60','57-67','Crackdown on Traitors III','Mihael','2590 x 2291','Pirate Town','Must Complete Crackdown on Traitors II to access this quest.', ''],
            ['Quest','51_60','57-67','Polluted Overmind','Wignor','3624 x 1845','Southern Fungus Forest','Must Complete Angler in Fungus Forest II to access this quest.', ''],
            ['Quest','51_60','58-62','People on Frozen Plain','Mafuto','2796 x 2313','Pirate Town','N/A', ''],
            ['Quest','51_60','58-62','Wolf Hunting in Snow','Trarael','1081 x 2886','Snomrimp Village','Must Complete People on Frozen Plain to access this quest.', ''],
            ['Quest','51_60','58-67','Lighting War','Mihael','2590 x 2291','Pirate Town','Must Complete Crackdown on Traitors III to access this quest.', ''],
            ['Quest','51_60','59-63','Bittersweet Wolf Hunts','Trarael','1081 x 2886','Snomrimp Village','N/A', ''],
            ['Quest','51_60','59-69','Tribal Test II','Omar','2378 x 3381','Tribal Village','Must Complete Tribal Test to access this quest.', ''],
            ['Quest','51_60','59-69','Vicrodile','Saykin','2289 x 1679','Southern Gavial Swamp','N/A', ''],
            ['Quest','51_60','60-64','Savage’s Request I','Goma','1002 x 1920','Savage Camp','N/A', ''],
            ['Quest','51_60','60-64','Snowrimps Attacked!','Trarael','1081 x 2886','Snomrimp Village','N/A', ''],
            ['Quest','51_60','60-70','The Big Eye!','Ruan','1749 x 2632','Mid of Gavial Swamp','N/A', ''],
            ['Quest','61_70','61-65','Savage’s Request II','Goma','1002 x 1920','Savage Camp','N/A', ''],
            ['Quest','61_70','62-66','Warm and Fuzzy Fur','Hanemo','1057 x 1945','Savage Camp','N/A', ''],
            ['Quest','61_70','63-67','Wild Beasts in Snow','Goma','1002 x 1920','Savage Camp','N/A', ''],
            ['Quest','61_70','64-68','Punish Traitors','Goma','1002 x 1920','Savage Camp','N/A', ''],
            ['Quest','61_70','65-69','Frozen Hearts','Arcshi','2889 x 2376','Pirate Town','N/A', ''],
            ['Quest','61_70','66-70','Loud Nianshou','Karoleon','1064 x 2956','Snomrimp Village','N/A', ''],
            ['Quest','61_70','68-72','Lost Souls','Mafuto','2796 x 2313','Pirate Town','N/A', ''],
            ['Quest','61_70','68-78','Savage Berserk','Goma','1002 x 1920','Savage Camp','Must Complete Punish Traitors to access this quest.', ''],
            ['Quest','61_70','69-73','Bone Wings','Duncan','1423 x 1523','Death Woods Entrance','N/A', ''],
            ['Quest','61_70','69-79','Frosty Golem King','Arcshi','2889 x 2376','Pirate Town','Must Complete Frozen Hearts to access this quest.', ''],
            ['Quest','61_70','70-74','The Evil of Death','Mafuto','2796 x 2313','Pirate Town','Must Complete Lost Souls to access this quest.', ''],
            ['Quest','61_70','70-80','Louder Nianshou','Karoleon','1064 x 2956','Snomrimp Village','Must Complete Loud Nianshou to access this quest.', ''],
            ['Quest','71_80','71-75','Assault from Dark Skies','Duncan','1423 x 1523','Death Woods Entrance','N/A', ''],
            ['Quest','71_80','72-75','Greedy Blacksmith','Gid','2747 x 2346','Pirate Town','N/A', ''],
            ['Quest','71_80','73-77','Unflinching Spirit','Verudia','2806 x 2371','Pirate Town','N/A', ''],
            ['Quest','71_80','74-79','Temple of Death','Swessia','2886 x 2368','Pirate Town','N/A', ''],
            ['Quest','71_80','75-79','Soulless Warriors','Ibokish','2885 x 2364','Pirate Town','N/A', ''],
            ['Quest','71_80','76-79','Evil Heads','Duncan','1423 x 1523','Death Woods Entrance','N/A', ''],
            ['Quest','71_80','76-79','Myserious Temple','Ibokish','2885 x 2364','Pirate Town','N/A', '']];

    foreach ($data as $key => $value){
        DB::table('returnofwarrior')->insert([
            'category' => $value[0],
            'level_range' => $value[1],
            'level' => $value[2],
            'quest_name' => $value[3],
            'npc' => $value[4],
            'coordinate' => $value[5],
            'town' => $value[6],
            'prerequisites' => $value[7],
            'remarks' => $value[8]
        ]);
    }
        /*DB::table('returnofwarrior')->insert([
            'category' => $category[rand(0,6)],
            'level_range' => $level_range[rand(0,13)],
            'level' => Str::random(9),
            'quest_name' => Str::random(20),
            'npc' => Str::random(9),
            'coordinate' => Str::random(9),
            'town' => Str::random(9),
            'prerequisites' => Str::random(9),
            'remarks' => Str::random(9)
        ]);*/
    }
}
