<?php
require_once('./conf.php');
?>
<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>留言显示</title>
    <link href="css/logindo.css" type="text/css" rel="stylesheet"> 
</head>
<body>
<div class="main">
    <h2>所有留言</h2>
    <a href="./add.php" style="float: right;">添加留言</a>
    &nbsp;&nbsp;
    <a href="./index1.php" style="float: right;">聊天室</a>
    <table class="table-integral">
        <thead>
            <tr>
                <td style="width:10%;">用户账户</td>
                <td style="width:10%;">用户头像</td>
                <td style="width:10%;">留言标题</td>
                <td style="width:10%;">留言内容</td>
                <td style="width:10%;">留言时间</td>
                <td style="width:10%;">操作</td>
            </tr>
        </thead>
        <tbody id="content_page">
            <?php
                $content = $mysql->select('select * from ly_content');#
                //$contents = $mysql->select("select headimg from ly_user where username=".$_SESSION['username']."");
                $i = 0;
                while (isset($content[$i])) {
                    ?>
                    <tr>
                    <td><?php echo $content[$i]['usernameid'] ?></td>
                    <td><?php echo '<img src="'.$content[$i]['headimg'].'" height="84px" width="70px" />' ?></td>    
                    <td><?php echo $content[$i]['title'] ?></td>
                    <td><?php echo $content[$i]['content'] ?></td>
                    <td><?php echo date('Y-m-d H:i:s', $content[$i]['time']) ?></td>
                    <td><a href="./up.php?  id=<?php echo $content[$i]['id'] ?>">编辑 | </a><a href="./del.php? id=<?php echo $content[$i]['id'] ?>">删除</a></td>
                    </tr>
                    <?php
                    $i++;
                }
            ?>
        </tbody>
    </table>
    <div id="wrap" class="page_btn clear"></div>
</div><!--main-->

<div id="info_modal" class="tips_info"></div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
    function Pagination($content, $wrap, options) {
        this.$wrap = $wrap;
        this.$content = $content;
        this.options = $.extend({}, Pagination.defaultOptions, options);
        this.init();
    }
    Pagination.defaultOptions = {
        size: 4
    };
    Pagination.prototype.init = function () {
        var totalItemNum = this.$content.children().length;
        var totalPageNum = this.totalPageNum = Math.ceil(totalItemNum / this.options.size);
        this.currentPage = 1;
        this.$wrap.empty();
        this.$content.children(':gt(' + (this.options.size - 1) + ')').hide();
        this.$wrap.append([
            '<span class="page_box">',
            '<a class="prev">上一页</a>',
            '<span class="num">',
            '</span>',
            '<a class="next">下一页</a>',
            '</span>'
        ].join(''));
        for (var i = 0; i < totalPageNum; i++) {
            var $btn = $('<span class="page-item">' + (i + 1) + '</span>');
            $btn.data('page', i + 1);
            this.$wrap.find('.num').append($btn);
        }
        this.$wrap.find('.num').children().eq(0).addClass('current');
        this.initEvents();
    };
    Pagination.prototype.initEvents = function () {
        var _this = this;
        var $prev = this.$wrap.find('.prev');
        var $next = this.$wrap.find('.next');
        var $num = this.$wrap.find('.num');

        $prev.on('click', function () {
            _this.prev();
        });
        $next.on('click', function () {
            _this.next();
        });
        $num.on('click', '.page-item', function () {
            var page = $(this).data('page');
            _this.goTo(page);
        });
    };
    Pagination.prototype.prev = function () {
        this.goTo(this.currentPage - 1);
    };
    Pagination.prototype.next = function () {
        this.goTo(this.currentPage + 1);
    };
    Pagination.prototype.goTo = function (num) {
        if (typeof num !== 'number') {
            throw new Error('e');
        }
        if(num > this.totalPageNum || num <= 0) {
            return false;
        }

        this.currentPage = num;

        this.$wrap.find('.num')
            .children().eq(this.currentPage - 1)
            .addClass('current').siblings('.current')
            .removeClass('current');

        var left = (this.currentPage - 1) * this.options.size;
        var right = left + this.options.size;

        var $shouldShow = this.$content.children().filter(function (index) {
            return left <= index && index < right;
        });
        this.$content.children().hide();
        $shouldShow.show();
    };

    var pagi = new Pagination($('#content_page'), $('#wrap'));


</script>

</body>
</html>
