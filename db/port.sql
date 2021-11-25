create table port(
  num int not null auto_increment,
  title char(100) not null,
  content text not null,
  regist_day char(20),
  link char(100) not null,
  file_name char(40),
  file_type char(40),
  file_copied char(40),
  primary key(num)
) charset=utf8;