# PHP api 人生语录

test

[参考](https://blog.imvann.com/6.html)

[链接1](https://zigou-api.herokuapp.com)  heroku服务器，部分运营商无法访问
[链接2](https://api.qsim.top) cf workers限次，您可以自己组件workers
``` cf workers
addEventListener('fetch', event => {
  const url = new URL(event.request.url);
  url.hostname = 'zigou-api.herokuapp.com';
  const request = new Request(url, event.request);
  event.respondWith(fetch(request));
});
```
```
`type`：指定文本库文件名，无参数时默认为'hitokoto.txt'
`encode`：赋值为'js'时返回js代码，否则返回文本

参考
/api.php 人生语录（正在收录
/api.php?encode=js js格式
```

html接入

1. encode=js
```
<script type="text/javascript" src="https://api.qsim.top/api.php?encode=js"></script>
<p class="content"><script>zigouapi1()</script></p>
```
2. encode=js2 api加载不影响页面
```
<span id="zigouapi1">:D 一言获取中...</span>
<script src="https://api.qsim.top/api.php?encode=js2" defer></script>
```

