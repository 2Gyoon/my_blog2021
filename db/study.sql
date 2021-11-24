create table study(
  num int not null auto_increment,
  title char(100) not null,
  content text not null,
  regist_day char(20),
  link char(100) not null,
  primary key(num)
) charset=utf8;