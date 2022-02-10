# PHP api

> Tips: This is a private learning warehouse, you can use it according to the rules of [LICENSE](/LICENSE).


### 地址

自己的语录接口：https://zigou-api.herokuapp.com/hitokoto/index.php

Bing每日一图：

- 302跳转 https://zigou-api.herokuapp.com/img/bing/index.php
  - 随机图 ?random=1
  - 指定图 ?value=(1-7) (注：默认value=0(~~知道有bug~~)
- 走服务器 ?server=1 (Notice:不建议使用
  
- 不会跳转 https://zigou-api.herokuapp.com/img/bing/2k.php
  - 一样(注：此链接走heroku服务器,不建议使用

### 接口地址

https://`your-domain`/xxx.php

`your-domain`: 

  - https://zigou-api.herokuapp.com  heroku服务器，部分运营商无法访问

  - https://api.qsim.top cf workers限次，您可以自己组件[workers](#cf-workers接入)


### cf workers接入
``` js
addEventListener('fetch', event => {
  const url = new URL(event.request.url);
  url.hostname = 'zigou-api.herokuapp.com';
  const request = new Request(url, event.request);
  event.respondWith(fetch(request));
});
```

> 注：我的网站由无服务器构成，所以均较慢 如果hitokoto.txt里有不好的语句，欢迎[联系我](https://www.qsim.top)

`由于本人未学习PHP,内容均为网络,如有问题,plz tell me`
