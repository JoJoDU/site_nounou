# site_nounou
The project created by YE&amp;DU using HTML/CSS,JavaScript,PHP,SQL.
## 项目介绍
这是网页设计开发的一项作业，我们实现了动态网站的设计，开发和测试，实现父母根据相关条件搜索保姆的项目。并根据需要建立数据库存储和调用数据。 父母可根据需要保姆的时间、类型进行筛选，完成筛选后并和保姆达成协议，在雇佣关系结束后可进行保姆评分。保姆可通过网站张贴自己的可工作时间以及工作类别，供父母选择。还有一个网站管理者角色，拥有最高权限，可对申请进行审核，决定是否张贴保姆资料在网站上。
## 数据库说明
A. 订单<br>
此表存入生成订单信息，保姆和父母都以邮箱作为身份标识。<br>
属性分别为：订单编号（主键），保姆邮箱，父母邮箱，工作时长，工作薪水，订单状态。<br>
B. 账户<br>
此表存入网站注册用户信息，有保姆或者父母。<br>
属性分别为：邮箱（主键），密码，用户状态，用户角色。<br>
C. 可工作时间<br>
此表存入保姆声明的自己可工作时间，之后用于匹配父母和保姆。<br>
属性分别为：工作时间编号（主键），工作日，开始日期，结束日期，开始时间，结束时间，保姆邮箱。<br>
D. 孩子<br>
此表存入孩子信息，因为孩子大小和孩子饮食习惯也是匹配保姆的重要因素。<br>
属性分别是：姓名，父母邮箱（复合主键），出生日期，饮食习惯。<br>
E. 保姆<br>
此表存入保姆所有信息。<br>
属性分别是：编号（主键），邮箱，姓，名，城市，电话，语言，年龄，经历，介绍，评分，工资。<br>
F. 父母<br>
此表存入父母所有信息。<br>
属性分别是：编号（主键），邮箱，姓，名，城市。<br>
G. 父母意向<br>
此表存入父母想寻找的保姆信息。<br>
属性分别是：邮箱（主键），保姆类型，时间，开始日期，结束日期，开始时间，结束时间，孩子数。<br>
## 角色介绍
* <b>父母主页</b>
![](https://github.com/JoJoDU/Site_Nounou/raw/master/image/父母主页.png)
A. 注册和登录

![](https://github.com/JoJoDU/Site_Nounou/raw/master/image/父母登录.png)
B. 修改身份和孩子信息

![](https://github.com/JoJoDU/Site_Nounou/raw/master/image/父母信息.png)
C. 根据条件查找保姆

![](https://github.com/JoJoDU/Site_Nounou/raw/master/image/查找保姆.png)
D. 预定保姆和做出评价

![](https://github.com/JoJoDU/Site_Nounou/raw/master/image/评价.png)
* <b>保姆主页</b>

![](https://github.com/JoJoDU/Site_Nounou/raw/master/image/保姆主页.png)
A. 注册和登录 

![](https://github.com/JoJoDU/Site_Nounou/raw/master/image/保姆注册.png)
B. 输入可工作时间信息

![](https://github.com/JoJoDU/Site_Nounou/raw/master/image/工作时间.png)
C. 个人工作信息，添加工作描述

![](https://github.com/JoJoDU/Site_Nounou/raw/master/image/工作信息.png)
D. 查看自己已预定的工作时间表

![](https://github.com/JoJoDU/Site_Nounou/raw/master/image/工作时间.png)
* <b>管理员主页</b>
![](https://github.com/JoJoDU/Site_Nounou/raw/master/image/管理员主页.png)
A. 审核保姆信息，可冻结或解锁账号

![](https://github.com/JoJoDU/Site_Nounou/raw/master/image/管理保姆.png)
B. 观察企业营业额数据

![](https://github.com/JoJoDU/Site_Nounou/raw/master/image/营业额.png)
