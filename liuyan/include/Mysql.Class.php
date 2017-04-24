 <?php
 /*
* filename：mysql数据库连接类
* Author：夏日博客
* qq：2366439636
* email： smiling998@163.com
* 微笑：可不可以有一个人。可以看穿我的逞强。可以保护我的脆弱。
*/
class mysql {
    private $db_host; //数据库主机
    private $db_user; //数据库用户名
    private $db_pwd; //数据库用户名密码
    private $db_database; //数据库名
    private $conn; //数据库连接标识;
    private $result; //执行query命令的结果资源标识
    private $sql; //sql执行语句
    private $row; //返回的条目数
    private $coding; //数据库编码，GBK,UTF8,gb2312
    private $bulletin = true; //是否开启错误记录
    private $show_error = true; //测试阶段，显示所有错误,具有安全隐患,默认关闭
    private $is_error = false; //发现错误是否立即终止,默认true,建议不启用，因为当有问题时用户什么也看不到是很苦恼的

    //构造函数
    public function __construct($db_host, $db_user, $db_pwd, $db_database, $conn, $coding) {
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pwd = $db_pwd;
        $this->db_database = $db_database;
        $this->conn = $conn;
        $this->coding = $coding;
        $this->connect();
    }

    //数据库连接
    public function connect() {
        if ($this->conn == "pconn") {
            //永久链接
            $this->conn = mysql_pconnect($this->db_host, $this->db_user, $this->db_pwd);
        } else {
            //即使链接
            $this->conn = mysql_connect($this->db_host, $this->db_user, $this->db_pwd);
        }

        if (!mysql_select_db($this->db_database, $this->conn)) {
            if ($this->show_error) {
                $this->show_error("数据库不可用：", $this->db_database);
            }
        }
        mysql_query("SET NAMES $this->coding");
    }
     
    //数据库执行语句，可执行查询添加修改删除等任何sql语句
    public function query($sql) {
        if ($sql == "") {
            $this->show_error("SQL语句错误：", "SQL查询语句为空");
        }
        $this->sql = $sql;

        $result = mysql_query($this->sql, $this->conn);

        if (!$result) {
            //调试中使用，sql语句出错时会自动打印出来
            if ($this->show_error) {
                $this->show_error("错误SQL语句：", $this->sql);
            }
        } else {
            $this->result = $result;
        }
        return $this->result;
    }

    //弹出对话框提示
	public function show_msg($url,$show="操作已成功"){
		$msg='<script>alert("'.$show.'");window.location="'.$url.'"</script>;
	如果浏览器无法跳转，<a href="'.$url.'">请点击此处</a>';
	echo $msg;
	exit();
	}
	
	//创建添加新的数据库
	public function create_database($database_name) {
        $database = $database_name;
        $sqlDatabase = 'create database ' . $database;
        $this->query($sqlDatabase);
    }

    
    //将系统数据库与用户数据库分开，更直观的显示？
    public function show_databases() {
        $this->query("show databases");
        echo "现有数据库：" . $amount = $this->db_num_rows($rs);
        echo "<br />";
        $i = 1;
        while ($row = $this->fetch_array($rs)) {
            echo "$i $row[Database]";
            echo "<br />";
            $i++;
        }
    }

    //以数组形式返回主机中所有数据库名
    public function databases() {
        $rsPtr = mysql_list_dbs($this->conn);
        $i = 0;
        $cnt = mysql_num_rows($rsPtr);
        while ($i < $cnt) {
            $rs[] = mysql_db_name($rsPtr, $i);
            $i++;
        }
        return $rs;
    }

    // 查询数据库下所有的表
    public function show_tables($database_name) {
        $this->query("show tables");
        echo "现有数据库：" . $amount = $this->db_num_rows($rs);
        echo "<br />";
        $i = 1;
        while ($row = $this->fetch_array($rs)) {
            $columnName = "Tables_in_" . $database_name;
            echo "$i $row[$columnName]";
            echo "<br />";
            $i++;
        }
    }

    //取得结果数据
    public function mysql_result_li() {
        return mysql_result($str);
    }

    /*取得记录集,获取数组-索引和关联,使用$row['content'] */
    public function fetch_array() {
        return mysql_fetch_array($this->result);
    }

    //获取关联数组,使用$row['字段名']
    public function fetch_assoc() {
        return mysql_fetch_assoc($this->result);
    }

    //获取数字索引数组,使用$row[0],$row[1],$row[2]
    public function fetch_row() {
        return mysql_fetch_row($this->result);
    }

    //获取对象数组,使用$row->content
    public function fetch_Object() {
        return mysql_fetch_object($this->result);
    }

    //简化查询select
    public function findall($table) {
        $this->query("SELECT * FROM $table");
    }

    //简化查询select
    public function select($table, $columnName = "*", $condition = '',$limit,$debug = '',$substr,$date) {
        $condition = $condition ? ' Where newstypeid=' . $condition : NULL;
        if ($debug) {
            $sql = "SELECT $columnName FROM $table $condition order by newsid desc limit 0,".$limit;
			$rs = $this->query($sql);
			while($rows=mysql_fetch_assoc($rs))
			{
			echo "<tr class='line'>
              <td width='20' height='25' align='center'>
                <img src='image/xxcms_icon.jpg' width='4' height='4'/></td>
              <td align='left'>
			  <a href='news/".$rows["newspath"]."' title=".$rows["newstitle"]." target='_blank'>".substr($rows["newstitle"],0,$substr)."</a></td>";
			  if($date){
              echo "<td width='91' align='center'>".substr($rows["newstime"],0,10)."</td></tr>";
				}
			}
        } else {
            $this->query("SELECT $columnName FROM $table $condition");
        }
    }
    //网站设置
    public function ly_system($table,$sort){
            $sql = "SELECT * FROM $table";
			$rs = $this->query($sql);
			while($rows=mysql_fetch_assoc($rs))
			{
			
			switch($sort){
			case 1:
				echo $rows["name"];  //网站名称
				break;
			case 2:
				echo $rows["title"];  //网站标题
				break;
			case 3:
				echo $rows["keywords"];  //关键词
				break;
			case 4:
				echo $rows["smalltext"];  //网站描述
				break;	
			case 5:
				echo $rows["url"];  //网站URL
				break;	
			case 6:
				return $rows["page"];  //页码
				break;
			case 7:
				return $rows["is_audit"];  //留言审核
				break;
			case 8:
				return $rows["is_html"];  //过滤html
				break;
			default :
				echo $rows["copyright"];  //版权信息
		}
			}
    }
    //简化删除del
    public function delete($table, $condition, $url = '') {
        if ($this->query("DELETE FROM $table WHERE $condition")) {

            if (!empty ($url))
                $this->show_msg($url, '删除成功！');
        }
    }

    //简化插入insert
    public function insert($table, $columnName, $value, $url = '') {
        if ($this->query("INSERT INTO $table ($columnName) VALUES ($value)")) {
            if (!empty ($url))
                $this->show_msg($url, '添加成功！');
        }
    }

    //简化修改update
    public function update($table, $mod_content, $condition, $url = '') {
        
        if ($this->query("UPDATE $table SET $mod_content WHERE $condition")) {
            if (!empty ($url))
                $this->show_msg($url);
        }
    }

    //取得上一步 INSERT 操作产生的 ID
    public function insert_id() {
        return mysql_insert_id();
    }

    //指向确定的一条数据记录
    public function db_data_seek($id) {
        if ($id > 0) {
            $id = $id -1;
        }
        if (!@ mysql_data_seek($this->result, $id)) {
            $this->show_error("SQL语句有误：", "指定的数据为空");
        }
        return $this->result;
    }

    // 根据select查询结果计算结果集条数
    public function db_num_rows() {
        if ($this->result == null) {
            if ($this->show_error) {
                $this->show_error("SQL语句错误", "暂时为空，没有任何内容！");
            }
        } else {
            return mysql_num_rows($this->result);
        }
    }

    // 根据insert,update,delete执行结果取得影响行数
    public function db_affected_rows() {
        return mysql_affected_rows();
    }

    //释放结果集
    public function free() {
        @ mysql_free_result($this->result);
    }

    //数据库选择
    public function select_db($db_database) {
        return mysql_select_db($db_database);
    }

    //查询字段数量
    public function num_fields($table_name) {
        //return mysql_num_fields($this->result);
        $this->query("select * from $table_name");
        echo "<br />";
        echo "字段数：" . $total = mysql_num_fields($this->result);
        echo "<pre>";
        for ($i = 0; $i < $total; $i++) {
            print_r(mysql_fetch_field($this->result, $i));
        }
        echo "</pre>";
        echo "<br />";
    }

    //取得 MySQL 服务器信息
    public function mysql_server($num = '') {
        switch ($num) {
            case 1 :
                return mysql_get_server_info(); //MySQL 服务器信息
                break;

            case 2 :
                return mysql_get_host_info(); //取得 MySQL 主机信息
                break;

            case 3 :
                return mysql_get_client_info(); //取得 MySQL 客户端信息
                break;

            case 4 :
                return mysql_get_proto_info(); //取得 MySQL 协议信息
                break;

            default :
                return mysql_get_client_info(); //默认取得mysql版本信息
        }
    }

    //析构函数，自动关闭数据库,垃圾回收机制
    public function __destruct() {
        if (!empty ($this->result)) {
            $this->free();
        }
        mysql_close($this->conn);
    } //function __destruct();

}?>