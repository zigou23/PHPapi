api test

hitokoto
```js
<script type="text/javascript">setTimeout(function(){var hjs=document.createElement('script');hjs.setAttribute('src','https://v1.hitokoto.cn/?c=a&encode=json&charset=utf-8&callback=save_hitokoto');document.body.appendChild(hjs);},200);function save_hitokoto(response){var rsp=JSON.parse(response)
console.log(response);credit=$('#credit').html();credit+=' | <span title="From: '+rsp.from;credit+='">'+rsp.hitokoto+'</span>';$('#credit').html(credit);}</script>
```
