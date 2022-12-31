<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateStudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'prefix_name' => 'เด็กชาย',
            'first_name' => 'กัมพล',
            'last_name' => 'ตาลรักษา',
            'birthdays' => '7-สิงหาคม-2017',
            'symbol' => 'ร่ม',
            'id_tags' => '21154',
            'parents1' => 'นายรัฐนันท์ ตาลรักษา',
            'parents2' => 'นางอรอนงค์ ตาลรักษา',
            'telephone_number_parents1' => '0934519498',
            'telephone_number_parents2' => '',
            'telephone_number_bus' => '',
            'habitations' => '5 ถ.ค้อใหญ่ ต.ตลาด อ.เมือง  จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กชาย',
            'first_name' => 'กรวีร์',
            'last_name' => 'แก้วดวงดี',
            'birthdays' => '16-สิงหาคม-2017',
            'symbol' => 'บ้าน',
            'id_tags' => '21155',
            'parents1' => 'นายจตุพล แก้วดวงดี',
            'parents2' => 'นางเพชรรัตน์ เหล่าเทิบ',
            'telephone_number_parents1' => '0934423696',
            'telephone_number_parents2' => '',
            'telephone_number_bus' => '',
            'habitations' => '19/10 ถ.เทศบาลอาชา ต.ตลาด อ.เมือง จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กชาย',
            'first_name' => 'ชินโชติ',
            'last_name' => 'สุ่มมาตย์',
            'birthdays' => '16-มีนาคม-2018',
            'symbol' => 'ทุเรียน',
            'id_tags' => '21156',
            'parents1' => 'นายคมกริช แสนวงษ์',
            'parents2' => 'นางสาววันวิสา สุ่มมาตย์',
            'telephone_number_parents1' => '0953052557',
            'telephone_number_parents2' => '',
            'telephone_number_bus' => '',
            'habitations' => '77 หมู่ 2 ต.มะค่า อ.กันทรวิชัย จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กชาย',
            'first_name' => 'ณัฐชนน',
            'last_name' => 'สืบสุนทร',
            'birthdays' => '11-กันยายน-2017',
            'symbol' => 'ลูกบอล',
            'id_tags' => '21157',
            'parents1' => 'นายอำพล สืบสุนทร',
            'parents2' => 'นางสาวอรพรรณ สืบสุนทร',
            'telephone_number_parents1' => '0816619318',
            'telephone_number_parents2' => '',
            'telephone_number_bus' => '',
            'habitations' => '153 หมู่ 6 ต.แวงน่าง อ.เมือง จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กชาย',
            'first_name' => 'เด็กชายธนัตถ์',
            'last_name' => 'ราชมุลตรี',
            'birthdays' => '12-ธันวาคม-2017',
            'symbol' => 'โทรศัพท์',
            'id_tags' => '21158',
            'parents1' => 'นายสรวิชญ์ ราชมุลตรี',
            'parents2' => 'นางสาพิจิตรา ราชมุลตรี',
            'telephone_number_parents1' => '0630127732',
            'telephone_number_parents2' => '',
            'telephone_number_bus' => '',
            'habitations' => '142 หมู่ 5 ต.แก่งเลิงจาน อ.เมือง จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กชาย',
            'first_name' => 'ธฤต',
            'last_name' => 'พฤฒามาตย์',
            'birthdays' => '10-กรกฎาคม-2017',
            'symbol' => 'แมลงปอ',
            'id_tags' => '21159',
            'parents1' => 'นายธีระ พฤฒามาตย์',
            'parents2' => 'นางสาวณัฏฐณิชา โคตรชาดี',
            'telephone_number_parents1' => '',
            'telephone_number_parents2' => '0854572024',
            'telephone_number_bus' => '',
            'habitations' => '664 หมู่ 8 ต.แวงน่าง อ.เมือง จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กชาย',
            'first_name' => 'ปรเมศวร์',
            'last_name' => 'ภูถาดงา',
            'birthdays' => '11-มกราคม-2017',
            'symbol' => 'ทับทิม',
            'id_tags' => '21160',
            'parents1' => 'นายนายวิศรุต ภูถาดงา',
            'parents2' => 'นางสาวประภาศรี รัตนพร',
            'telephone_number_parents1' => '0934151575 ',
            'telephone_number_parents2' => '',
            'telephone_number_bus' => '',
            'habitations' => '177/2 ถ.นาควิชัย ต.ตลาด อ.เมือง  จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กชาย',
            'first_name' => 'พีรพัฒน์',
            'last_name' => 'ไกยะมัง',
            'birthdays' => '3-มกราคม-2018',
            'symbol' =>  'ส้ม',
            'id_tags' => '21161',
            'parents1' => 'นายชัชวาล ไกยะมัง',
            'parents2' => 'นางสาวเพชรรัตน์ แก้วโยธา',
            'telephone_number_parents1' => '',
            'telephone_number_parents2' => '0970406342',
            'telephone_number_bus' => '',
            'habitations' => '238 หมู่ 9 ต.ท่าตูม อ.เมือง  จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กชาย',
            'first_name' => 'วัฒนพล ',
            'last_name' => 'คงอยู่',
            'birthdays' => '18-กรกฎาคม-2017',
            'symbol' => 'กระต่าย',
            'id_tags' => '21162',
            'parents1' => 'นายวัฒนา คงอยู่',
            'parents2' => 'นางสาวสุรีพร แพงวิเศษ',
            'telephone_number_parents1' => '',
            'telephone_number_parents2' => '0812626265',
            'telephone_number_bus' => '',
            'habitations' => '3 ถ.มหาชัยดำริห์ ต.ตลาด อ.เมือง จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กชาย',
            'first_name' => 'ศิรวงษ์',
            'last_name' => 'นาสมตรึก',
            'birthdays' => '14-เมษายน-2018',
            'symbol' => 'รองเท้า',
            'id_tags' => '21163',
            'parents1' => 'นายทองคำ นาสมตรึก',
            'parents2' => 'นางเสาวนีย์ นาสมตรึก',
            'telephone_number_parents1' => '0872321679',
            'telephone_number_parents2' => '',
            'telephone_number_bus' => '',
            'habitations' => '82/9 ถ.นครสวรรค์ ต.ตลาด อ.เมือง จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กชาย',
            'first_name' => 'อัครศิลป์',
            'last_name' => 'แก้วบุดดา',
            'birthdays' => '31-มีนาคม-2018',
            'symbol' => 'หมู',
            'id_tags' => '21164',
            'parents1' => 'นายอัษฎาวุธ แก้วบุดดา',
            'parents2' => 'นางสาวสุธิมา หินซุย',
            'telephone_number_parents1' => '',
            'telephone_number_parents2' => '0836011826',
            'telephone_number_bus' => '',
            'habitations' => '272/3 ถ.ศูนย์ร่วมจิตร ต.ตลาด อ.เมือง จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' =>  'เด็กชาย',
            'first_name' => 'อนาวินทร์',
            'last_name' => 'จาดพันธ์',
            'birthdays' => '11-เมษายน-2017',
            'symbol' => 'เป็ด',
            'id_tags' => '21165',
            'parents1' => 'นายสามารถ จาดพันธ์',
            'parents2' => 'นางพรพิศ ศรีมังคละ',
            'telephone_number_parents1' => '',
            'telephone_number_parents2' => '0991671667',
            'telephone_number_bus' => '',
            'habitations' => '29 หมู่ 9 อ.กันทรวิชัย ต.ขามเรียง จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กหญิง',
            'first_name' => 'กัญญภัทร',
            'last_name' => 'ศรีบุดดา',
            'birthdays' => '23-เมษายน-2018',
            'symbol' => 'แตงโม',
            'id_tags' => '21166',
            'parents1' => 'นายศุภชัย ศรีบุดดา',
            'parents2' => 'นางสาวสุนันท์ ศรีบุดดา',
            'telephone_number_parents1' => '',
            'telephone_number_parents2' => '0835619790',
            'telephone_number_bus' => '',
            'habitations' => '109 ต.หนองจิก อ.บรบือ อ.เมือง จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กหญิง',
            'first_name' => 'กัญญพัชร',
            'last_name' => 'นันทะเสน',
            'birthdays' => '26-กุมภาพันธ์-2018',
            'symbol' => 'ปลา',
            'id_tags' => '21167',
            'parents1' => 'นายภัทราช นันทะเสน',
            'parents2' => 'นางสาพรรณภา จำนงนิตย์',
            'telephone_number_parents1' => '',
            'telephone_number_parents2' => '0910646866',
            'telephone_number_bus' => '',
            'habitations' => '6 ถ.วรบุตร ต.ตลาด อ.เมือง จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กหญิง',
            'first_name' => 'กุลระวี',
            'last_name' => 'สิงทอง',
            'birthdays' => '30-ธันวาคม-2017',
            'symbol' => 'ไอศครีม',
            'id_tags' => '21168',
            'parents1' => 'นายธรรมปพณ สิงทอง',
            'parents2' => 'นางสาวอรณัฐ สิงทอง',
            'telephone_number_parents1' => '',
            'telephone_number_parents2' => '0838283886',
            'telephone_number_bus' => '',
            'habitations' => '260 หมู่ 12 ต.ท่าสองคอน อ.เมือง จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กหญิง',
            'first_name' => 'ชรินทร์ทิพย์',
            'last_name' => 'พุทธเสน',
            'birthdays' => '11-ตุลาคม-2017',
            'symbol' => 'ปู',
            'id_tags' => '21169',
            'parents1' => 'นายรัฐศักดิ๋ พุทธเสน',
            'parents2' => 'นางสาวพนิดา ประสีระเก',
            'telephone_number_parents1' => '',
            'telephone_number_parents2' => '0949929851',
            'telephone_number_bus' => '',
            'habitations' => '66 ม.5 ต.แวงน่าง อ.เมือง จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กหญิง',
            'first_name' => 'ณัฏฐธิดา',
            'last_name' => 'ยิ่งหาญ',
            'birthdays' => '20-มิถุนายน-2017',
            'symbol' => 'พัด',
            'id_tags' => '21170',
            'parents1' => 'นายสุริยา ยิ่งหาญ',
            'parents2' => 'นางสาววารุณี ยศพล',
            'telephone_number_parents1' => '0945078039',
            'telephone_number_parents2' => '',
            'telephone_number_bus' => '',
            'habitations' => '2 ม.5 ต.ลาดพัฒนา อ.เมือง จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กหญิง',
            'first_name' => 'ณิชานันท์',
            'last_name' => 'คำนาค',
            'birthdays' => '25-กุมภาพันธ์-2018',
            'symbol' => 'ปลาหมึก',
            'id_tags' => '21171',
            'parents1' => 'นายสุพันธ์ คำนาค',
            'parents2' => 'นางสาวพิสมัย สมบัติหอม',
            'telephone_number_parents1' => '',
            'telephone_number_parents2' => '0622705434',
            'telephone_number_bus' => '',
            'habitations' => '79 ม.10 ต.เขวา อ.เมือง จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กหญิง',
            'first_name' => 'ธัญญาพร',
            'last_name' => 'รัตนวงษ์วิบูลย์',
            'birthdays' =>  '14-กุมภาพันธ์-2018',
            'symbol' => 'ผีเสื้อ',
            'id_tags' => '21172',
            'parents1' => 'นายวศิน รัตนวงษ์วิบูลย์',
            'parents2' => 'นางสาวสิรินาถ ทับธานี',
            'telephone_number_parents1' => '',
            'telephone_number_parents2' => '0945534253',
            'telephone_number_bus' => '',
            'habitations' => '79 ม.13 ต.เขวา อ.เมือง จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กหญิง',
            'first_name' => ' ปิยดา',
            'last_name' => 'อภินิจ',
            'birthdays' => '9-เมษายน-2018',
            'symbol' => 'กุหลาบ',
            'id_tags' => '21173',
            'parents1' => 'นายบวร อภินิจ',
            'parents2' => 'นางสาวจิตราภรณ์ อภินิจ',
            'telephone_number_parents1' => '0818264214',
            'telephone_number_parents2' => '',
            'telephone_number_bus' => '',
            'habitations' => '74/452 ต.ตลาด อ.เมือง  จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กหญิง',
            'first_name' => 'ปิยะพร',
            'last_name' => 'พลศรี',
            'birthdays' => '23-ตุลาคม-2017',
            'symbol' => 'มังคุด',
            'id_tags' => '21174',
            'parents1' => 'นายเอกพงษ์ พลศรี',
            'parents2' => 'นางสุพรรษา การนา',
            'telephone_number_parents1' => '0814531163',
            'telephone_number_parents2' => '',
            'telephone_number_bus' => '',
            'habitations' => '201 บ้านมะกอก ม.19 ต.ขามเรียง อ.กันทรวิชัย จ.มหาสารคาม',
        ]);

        DB::table('students')->insert([
            'prefix_name' => 'เด็กหญิง',
            'first_name' => 'พรลภัส',
            'last_name' => 'พรมศิริ',
            'birthdays' => '6-ธันวาคม-2017',
            'symbol' => 'พระอาทิตย์',
            'id_tags' => '21175',
            'parents1' => 'นายนิวัฒ พรมศิริ',
            'parents2' => 'นางสาวอรอุมา  ทับพิมแสน',
            'telephone_number_parents1' => '',
            'telephone_number_parents2' => '0835632833',
            'telephone_number_bus' => '',
            'habitations' => '110 หมู่ 8 ต.มิตรภาพ อ.แกดำ จ.มหาสารคาม',
        ]);

       
    }
}
