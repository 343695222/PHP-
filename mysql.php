<?php
//面向对象
class MysqlObj extends mysqli{
    public $err = false;
    public function __construct($dhost, $duser, $dpass, $dname, $dcharacter) {
        parent::__construct($dhost, $duser, $dpass, $dname);#parent:: 可用于调用父类中定义的成员方法。
        if (mysqli_connect_error()) {
           $this->err = ['code' => mysqli_connect_errno(), 'msg' => '错误信息：' . mysqli_connect_error()];#关联数组
        }
        if ($this->character_set_name() != $dcharacter) {
            if (!$this->set_charset("utf8")) {
                $this->err = ['code' => mysqli_connect_errno(), 'msg' => '错误信息：' . mysqli_connect_error()];
            }
        }
    }
    public function select($sql, $find = false) {
        if ($result = $this->query($sql)) {
            $data = [];
            while ($re = mysqli_fetch_array($result, MYSQLI_ASSOC)) {//结果集中取得一行作为数字数组或关联数组： MYSQLI_ASSOC以字段为健
                $data[] = $re;
            }
            if ($find) {
                $data = current($data);#输出数组中的当前元素的值：
            }
            return $data;
        } else {
            $this->err = ['code' => $this->errno, 'msg' => '错误信息：' . $this->error];
            return false;
        }
    }
    public function insert($sql) {
        if ($this->query($sql)) {
            return $this->insert_id;
        } else {
            echo $sql;
            $this->err = ['code' => $this->errno, 'msg' => '错误信息：' . $this->error];
            return false;
        }
    }
    public function deldata($sql) {
        if ($stmt = $this->prepare($sql)) {
            $stmt->execute();
            $res = $stmt->affected_rows;
            return $res;
        } else {
            $this->err = ['code' => $this->errno, 'msg' => '错误信息：' . $this->error];
            return false;
        }
    }
    public function updata($sql) {
        if ($stmt = $this->prepare($sql)) {
            $stmt->execute();
            $res = $stmt->affected_rows;
            return $res;
        } else {
            $this->err = ['code' => $this->errno, 'msg' => '错误信息：' . $this->error];
            return false;
        }
    }
    public function __destruct() {
        $this->close();
    }
}