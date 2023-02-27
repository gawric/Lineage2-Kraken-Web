<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
//use App\Service\Sheldure\Info\Clan\SupportFunc\SupportFunc;
use Illuminate\Support\Collection;


class StatisticsServerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    //поступающие данные 
    //arr_clan_data - 'clan_name' ,'clan_id' , 'ally_id' , 'ally_name', 'reputation_score', 'clan_level' , 'hasCastle'
    //resultArr - 'clanid','count';

    //тест создания модели ClanStatic из коллекции взятой из базы сервера или таблицы clan_data
    public function test_add_model_clan()
    {
        $sf = new \App\Service\Sheldure\Info\Clan\SupportFunc\SupportFunc();
        $server_id = 1;
        $arr_clan_data = collect([['clan_name'=> 'test_clan_name' ,'clan_id'=> 1 ,'ally_id'=> 0 , 'ally_name'=> null ,  'reputation_score'=> 100 , 'clan_level'=> 1 , 'hasCastle'=>0 ]]);
        $resultArr = [['clanid'=> 1  , 'count'=> 23]];
        $result = $sf->createModel($server_id , $resultArr , $arr_clan_data);
        $this->assertEquals(1, count($result));
    }

     //поступающие данные 
    //$resultArrPvp - ['obj_id', 'char_name' , 'classid' , 'clanid' , 'level' , 'pvpkills' , 'pkkills' , 'onlinetime' , 'online']
    //result_clan_pk - ['clan_name' ,'clan_id']
    public function test_add_model_character_static(){

        $sf_characters = new \App\Service\Sheldure\Info\Characters\Support\SupportFunc\SupportFunc();
        $server_id = 1;
        $list_class_id = [0 =>'Human Fighter', 1 =>'Human Warrior'];
        $resultArrCharacters = collect([['obj_id'=> 456768 ,'char_name'=>'test_name_char' ,'classid'=> 0 , 'clanid'=> 1 ,  'level'=> 35 , 'pvpkills'=>24 , 'pkkills'=>9 , 'onlinetime'=>918 ,  'online'=>1  ]]);
        $result_clan_pk = collect([['clan_name' => 'test_clan_name_1', 'clan_id' => 1]]);
        


        $all_characters_model = $sf_characters ->createModel($server_id , $resultArrCharacters , $list_class_id);
        $sf_characters->convertIdClanToNameClan($all_characters_model ,  $result_clan_pk);
       // dd($all_characters_model);
        $this->assertEquals('test_clan_name_1', $all_characters_model[0]['clan']);
    }
}
