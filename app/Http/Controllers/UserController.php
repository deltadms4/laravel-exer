<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public $result = Array();

    // list() - Все польщователи
    // one() - Личный кабинет
    // edit() - Редактируем данные
    // add() - Регистрация
    // recovery() - Восстановление пароля
    // change() - Изменение пароля по ссылке из письма
    // enter() - Авторизация (вход)
    // check() - Проверка на авторизованного
    // exit() - Выход

    public function list()
    {
        // /user/list

        $_DATA = file_get_contents('php://input');
        $_POST = json_decode($_DATA, true);

        // data

        $current_page = 1;
        $current_operation = "";
        $current_all = PAGINATION;
        $current_start = 0;
        $current_end = PAGINATION;
        $category_id = 0;
        $filters = Array();

        if($_POST['current_page'] != "")
        {
            if(!$current_page = $this->validation($_POST['current_page'],"int",false))
            {
                $this->error .= "- Некорректное current_page!<br>";
            }
        }

        if($_POST['current_operation'] != "")
        {
            if(!$current_operation = $this->validation($_POST['current_operation'],"int",false))
            {
                if(!$current_operation = $this->validation($_POST['current_operation'],"text",false))
                {
                    $this->error .= "- Некорректное current_operation!<br>";
                }
            }
        }

        if($_POST['current_start'] != "")
        {
            if(!$current_start = $this->validation($_POST['current_start'],"int",false))
            {
                $this->error .= "- Некорректное current_start!<br>";
            }
        }

        if($_POST['current_end'] != "")
        {
            if(!$current_end = $this->validation($_POST['current_end'],"int",false))
            {
                $this->error .= "- Некорректное current_end!<br>";
            }
        }

        if($_POST['category_id'] != "")
        {
            if(!$category_id = $this->validation($_POST['category_id'],"int",false))
            {
                $this->error .= "- Некорректное category_id!<br>";
            }
        }

        if(count($_POST['filters']) > 0)
        {
            for ($i = 0; $i < count($_POST['filters']); $i++) {
                if (!$filters[$i] = $this->validation($_POST['filters'][$i], "int", false)) {
                    $this->error .= "- Некорректное filters!<br>";
                }
            }
        }

        // get

        if($this->error == "")
        {
            $mas = Array();
            $where = "";

            if($category_id > 0)
            {
                $where .= " AND c.category_id='".$category_id."' ";
            }

            if(count($filters) > 0)
            {
                for($i=0;$i<count($filters);$i++)
                {
                    $mas[] = " pf.filter_id='".$filters[$i]."' ";
                }

                $_where = implode(" OR ",$mas);

                $where .= " AND (".$_where.") ";
            }

            $max = $this->db->super_query("SELECT COUNT(*) as count
            FROM ".PREFIX."_".$this->table." p
            LEFT JOIN ".PREFIX."_product_description d ON d.product_id=p.product_id
            LEFT JOIN ".PREFIX."_product_filter pf ON pf.product_id=p.product_id
            LEFT JOIN ".PREFIX."_product_to_category c ON c.product_id=p.product_id
            WHERE p.".$this->table."_id>0
            ".$where."
            LIMIT 1000000");
            $current_all = ceil($max['count'] / PAGINATION);

            if($current_operation != "")
            {
                switch ($current_operation)
                {
                    case "back" :
                        if($current_page > 1)
                        {
                            $current_page--;
                        }
                        else
                        {
                            return false;
                        }
                        break;
                    case "next" :
                        if($current_page < $current_all)
                        {
                            $current_page++;
                        }
                        else
                        {
                            return false;
                        }
                        break;
                    default :
                        $current_page = $current_operation;
                        break;
                }
            }

            $current_start = $current_page * PAGINATION - PAGINATION;

            $current_end = $current_page * PAGINATION;

            $query = $this->db->query( "SELECT p.*,
            c.category_id,
            d.name,
            d.description
            FROM ".PREFIX."_".$this->table." p
            LEFT JOIN ".PREFIX."_product_description d ON d.product_id=p.product_id
            LEFT JOIN ".PREFIX."_product_filter pf ON pf.product_id=p.product_id
            LEFT JOIN ".PREFIX."_product_to_category c ON c.product_id=p.product_id
            WHERE p.".$this->table."_id>0
            ".$where."
            GROUP BY p.product_id DESC
            ORDER BY p.product_id ASC
            LIMIT ".$current_start.",".$current_end );
            while($row = $this->db->get_row( $query )) {

                $row['title'] = $this->deleteSpec($row['title'],0);
                $row['description'] = $this->deleteSpec($row['description'],0);
                $row['description_no_html'] = $this->deleteSpec($row['description'],1);

                $row['image'] = "cache/" . str_replace(".jpg", "", $row['image']) . "-1140x380.jpg";

                $row['url'] = $this->getUrl('product_id='.$row["product_id"]);

                $this->content[$row["product_id"]] = $row;
            }

            return $this->content;
        }

        print json_encode($this->result);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function one($id)
    {
        // /user/one

        $_DATA = file_get_contents('php://input');
        $_POST = json_decode($_DATA, true);

        // data

        if(!$data['id'] = $this->validation($_POST['id'],"int",true)) {
            $this->error .= "- Некорректное id!<br>";
        }

        // images

        if($this->error == "") {

            $query = $this->db->query( "SELECT p.*,
            c.category_id,
            d.name,
            d.description
            FROM ".PREFIX."_".$this->table." p
            LEFT JOIN ".PREFIX."_product_description d ON d.product_id=p.product_id
            LEFT JOIN ".PREFIX."_product_to_category c ON c.product_id=p.product_id
            WHERE p.".$this->table."_id>0
            AND p.product_id='".$data['id']."'
            LIMIT 1" );
            while ($row = $this->db->get_row($query)) {

                $row['title'] = $this->deleteSpec($row['title'],0);
                $row['description'] = $this->deleteSpec($row['description'],0);
                $row['description_no_html'] = $this->deleteSpec($row['description'],1);

                $row['image'] = "cache/" . str_replace(".jpg", "", $row['image']) . "-1140x380.jpg";

                $this->content[$row["product_image_id"]] = $row;
            }

            return $this->content;
        }

        print json_encode($this->result);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function edit($id)
    {
        // /user/edit

        $_DATA = file_get_contents('php://input');
        $_POST = json_decode($_DATA, true);

        // data

        if(!$data['customer_id'] = $this->validation($_POST['customer_id'],"int",true))
        {
            $this->error .= "- Некорректный customer_id!<br>";
        }

        if(!$data['firstname'] = $this->validation($_POST['firstname'],"text",true))
        {
            $this->error .= "- Некорректный firstname!<br>";
        }

        if(!$data['lastname'] = $this->validation($_POST['lastname'],"text",true))
        {
            $this->error .= "- Некорректный lastname!<br>";
        }

        if(!$data['telephone'] = $this->validation($_POST['telephone'],"text",true))
        {
            $this->error .= "- Некорректный telephone!<br>";
        }

        // avatar

        $data['avatar'] = "";

        if($_FILES['avatar']['size'] > 0)
        {
            $info = new SplFileInfo($_FILES['avatar']['name']);
            $exe = $info->getExtension();
            $exe = strtolower($exe);

            if($_FILES['avatar']['size'] > 5000000)
            {
                $this->error .= "- Максимальный размер файла 5Мб!<br>";
                $this->error_inputs['avatar'] = 'error';
            }
            elseif($exe != 'png' AND $exe != 'jpg' AND $exe != 'jpeg')
            {
                $this->error .= "- Файл может быть только в формате PNG или JPG!<br>";
                $this->error_inputs['avatar'] = 'error';
            }
            else
            {
                $data['avatar'] = $this->upload($_FILES['avatar']);

                if($data['avatar'] === false)
                {
                    $this->error .= "- Ошибка загрузки файла! Попробуйте позднее.<br>";
                    $this->error_inputs['avatar'] = 'error';
                }
            }
        }

        // edit

        if($this->error == "") {

            $avatar = "";
            if ($data['avatar'] != "")
            {
                $avatar = " avatar='".$data['avatar']."', ";
            }

            $this->db->query("UPDATE ".PREFIX."_".$this->table." SET

            ".$avatar."
            firstname='".$data['firstname']."',
            lastname='".$data['lastname']."',
            telephone='".$data['telephone']."'

            WHERE customer_id='".$data['customer_id']."'

            ");

            return $this->db->super_query( "SELECT * FROM ".PREFIX."_customer WHERE customer_id='".$data['customer_id']."'" );
        }

        print json_encode($this->result);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function add()
    {
        // /user/add

        $_DATA = file_get_contents('php://input');
        $_POST = json_decode($_DATA, true);

        if(!$data['email'] = $this->validation($_POST['email'],"email",true)) {
            $this->error .= "- Некорректное E-mail!<br>";
        }

        if($this->getCustomerByEmail($data['email'])) {
            $this->error .= "- Этот E-mail уже зарегистрирован. Войдите, используя пароль или восстановите доступ если забыли пароль!<br>";
        }

        if(!$data['password'] = $this->validation($_POST['password'],"password",true)) {
            $this->error .= "- Пароль введен неверно!<br>";
        }

        if($this->error == "") {

            $this->db->query("INSERT INTO " . PREFIX . "_" . $this->table . "

                (

                `customer_group_id`,
                `store_id`,
                `firstname`,
                `lastname`,
                `email`,
                `telephone`,
                `fax`,
                `password`,
                `salt`,
                `cart`,
                `wishlist`,
                `newsletter`,
                `address_id`,
                `custom_field`,
                `ip`,
                `status`,
                `approved`,
                `safe`,
                `token`,
                `date_added`

                ) VALUES (

                1,
                0,
                '',
                '',
                '" . $data['email'] . "',
                '',
                '',
                '" . $data['password'] . "',
                '5903783fd',
                'a:0:{}',
                '',
                0,
                1,
                '',
                '" . $_SERVER['REMOTE_ADDR'] . "',
                1,
                1,
                0,
                '',
                '" . date("Y-m-d H:i:s", time()) . "'

                )

            ");

            $_SESSION['user']['id'] = $this->db->insert_id();
            $_SESSION['user']['token'] = md5($data['email'] . $data['password']);
        }

        print json_encode($this->result);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function recovery()
    {
        // /user/recovery

        $_DATA = file_get_contents('php://input');
        $_POST = json_decode($_DATA, true);

        if (!$data['email'] = $this->validation($_POST['email'], "email", true)) {$this->error .= "-Данные не являются электронным адресом!<br>";
        }

        $customerEmail = $this->db->super_query('SELECT email FROM ' . PREFIX . "_" . $this->module. "
        WHERE email = '" . $data['email'] . "'
        ");

        $token = md5(rand(1, 99999999));

        if($customerEmail['email'] == "") {
            $this->error .= "-Данный электронный адрес не зарегестрован!<br>";
        }

        if ($this->error = "")
        {
            $this->db->query("UPDATE " . PREFIX . "_" . $this->module .
                "SET recovery = '". $token ."'
                WHERE email = '" . $customerEmail['email'] . "'"
            );

            $message = "Для восстановления пароля перейдите по ссылке:<br><br>
            <a href='".SITE."recovery/change/".$token."'>".SITE."recovery/change/".$token."</a><br><br>
            Если Вы не пытаетесь восстановить доступ к Btpeel.ru просто удалить данное письмо.";

            $this->mail($customerEmail['email'],'','Востоновление пароля',$message);

            return  true;
        }

        print json_encode($this->result);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function change()
    {
        // /user/change Страница в письме: ДОМЕН/user/change/12345

        $_DATA = file_get_contents('php://input');
        $_POST = json_decode($_DATA, true);

        if (!$data['token'] = $this->validation($_POST['token'], "text", true)) {
            $this->error .= "-Данные не являются электронным адресом!<br>";
        }

        if (!$data['password'] = $this->validation($_POST['password'], "password", true)) {
            $this->error .= "-Данные не являются электронным адресом!<br>";
        }

        if (!$data['password2'] = $this->validation($_POST['password2'], "password", true)) {
            $this->error .= "-Данные не являются электронным адресом!<br>";
        }

        if ($data['password'] != $data['password2']) {
            $this->error .= "-Пароли не совпадают.<br>";
        }

        $tokenDb = $this->db->super_query('SELECT recovery FROM ' . PREFIX . "_" . $this->module. "
        WHERE recovery = '" . $data['token'] . "'
        ");

        if ($data['token'] != $tokenDb) {
            $this->error .= "-Ссылка не действительна.<br>";
        }

        if ($this->error == "") {
            $this->db->query("UPDATE " . PREFIX . "_" . $this->module ."
                SET password = '". md5($data['password']) ."',
                recovery = ''
                WHERE recovery = '" . $data['token'] . "'"
            );
            return true;
        }

        print json_encode($this->result);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function enter()
    {
        // /user/enter

        $_DATA = file_get_contents('php://input');
        $_POST = json_decode($_DATA, true);

        if(!$data['email'] = $this->validation($_POST['email'],"email",true))
        {
            $this->error .= "- Некорректное E-mail!<br>";
        }

        if(!$data['password'] = $this->validation($_POST['password'],"password",true))
        {
            $this->error .= "- Пароль введен неверно!<br>";
        }

        if($this->error == "")
        {
            $this->user = $this->db->super_query( "SELECT *
            FROM " . PREFIX . "_customer
            WHERE LOWER(email) = '" . strtolower($data['email']) . "'
            AND (password = SHA1(CONCAT(salt, SHA1(CONCAT(salt, SHA1('" . $data['password'] . "')))))
                OR password = '" . $data['password'] . "')
            AND status = '1'
            AND approved = '1'" );

            if($this->user['customer_id'] > 0) {

                $_SESSION['user']['id'] = $this->user['customer_id'];
                $_SESSION['user']['token'] = md5($data['email'].$data['password']);

                return $_SESSION['user'];
            }
        }

        print json_encode($this->result);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function check()
    {
        // /user/check

        $_DATA = file_get_contents('php://input');
        $_POST = json_decode($_DATA, true);

        //$_SESSION['user']['id'] = $this->validation($_SESSION['user']['id'],"int",true);

        if(!$data['id'] = $this->validation($_POST['id'],"int",true))
        {
            $this->error .= "- Некорректное Id!<br>";
        }

        if(!$data['token'] = $this->validation($_POST['token'],"text",true))
        {
            $this->error .= "- Некорректное Text!<br>";
        }

        //if($_SESSION['user']['id'] > 0)
        if($this->error == "")
        {
            $this->user = $this->db->super_query( "SELECT *
            FROM " . PREFIX . "_customer
            WHERE customer_id='".$data['id']."'
            AND status = '1'
            AND approved = '1'" );

            $token = md5($this->user['email'].$this->user['password']);

            if($data['token'] == $token)
            {
                $this->user['password'] = '';

                return $this->user;
            }
            else
            {
                $this->user = Array();

                return false;
            }
        }

        print json_encode($this->result);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function exit()
    {
        // /user/exit

        $this->user = Array();
        $_SESSION['user']['id'] = 0;
        $_SESSION['user']['token'] = "";

        print json_encode($this->result);
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////// END
}
