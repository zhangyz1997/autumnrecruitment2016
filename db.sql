CREATE TABLE profile (
id int(11) NOT NULL PRIMARY KEY auto_increment, // id
author char(50) not null , // 账户名
usrname char(50) not null, // 姓名
phone char(50) not null, // 手机号码
grade char(20) not null, // 年级
class char(20) not null, // 班级
email text not null, // 邮箱
location char(100) not null, // 地址
eng_4 int(11) not null, // 4级
eng_6 int(11) not null, // 6级
computer text not null, // 计算机水平
jingli text not null, // 在校经历、社会实践经历、基础实验室/meta学习经历
jiangli text not null, // 获奖情况
zhuanye text not null, // 专业课掌握程度及其他能力
selfintro text not null, // 自我推荐理由
dateline int(11) not null default 0 //日期
);
