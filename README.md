# little-chat-room
基于php+mysql+ajax+jquery实现的简单聊天室（a little chatroom based on php+mysql+ajax+jq）

 ``数据库结构：``
 <br>
 
  ``` sql
       CREATE TABLE IF NOT EXISTS `chat` (
          `id` bigint(20) NOT NULL AUTO_INCREMENT,
          `username` varchar(20) DEFAULT NULL,
          `chatdate` time DEFAULT NULL,
          `msg` varchar(500) DEFAULT NULL,
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=124 ;
  ```
