# little-chat-room
基于php+mysql+ajax+jquery实现的简单聊天室（a little chatroom based on php+mysql+ajax+jq）

 ``数据库结构：``
 <br>
 
  ``` sql
      DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `chatdate` time DEFAULT NULL,
  `msg` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```
``` sql
DROP TABLE IF EXISTS `ly_content`;
CREATE TABLE IF NOT EXISTS `ly_content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usernameid` int(10) NOT NULL,
  `headimg` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `content` text,
  `time` bigint(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;
```

  ``` sql
DROP TABLE IF EXISTS `ly_user`;
CREATE TABLE IF NOT EXISTS `ly_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `headimg` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `tel` bigint(11) DEFAULT NULL,
  `emai` varchar(255) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
```
``` sql
DROP TABLE IF EXISTS `logined`;
CREATE TABLE IF NOT EXISTS `logined` (
  `usr` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ```

