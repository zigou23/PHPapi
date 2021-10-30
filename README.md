# PHP api

### 地址

https://zigou-api.herokuapp.com/api.php

https://zigou-api.herokuapp.com/img/bing/daily/index.php



### 接口地址

https://`your-domain`/api.php?*type*=hitokoto.txt&*encode*=js

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

> 注：我的网站由无服务器构成，所以均较慢

本页 `api.php` 参考[来源](https://blog.imvann.com/6.html) 部分语录参考自[名言通](https://www.mingyantong.com/)
