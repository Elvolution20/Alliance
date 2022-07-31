!function(){"use strict";function e(){return document.currentScript?document.currentScript:document.querySelector("script[jv-id]")||document.querySelector("script[data-jv-id]")}function t(e){return e&&e.match(/https?:\/\/(\S+(\.com|\.ru|\.tech))\/(widget\.js|widget\/[A-Za-z0-9]+)/)}function n(e){return e&&e.match(/^https?:\/\/(\S+)\/script\/widget\/([A-Za-z0-9]+)/)}function o(e){return e&&e.match(/https?:\/\/(\S+)\/script\/geo-widget\/([A-Za-z0-9]+)/)}function r(){var e=window.location&&window.location.protocol;return-1===["http","https"].indexOf(e||"")&&(e="https:"),e}function i(){return window.jivo_config&&window.jivo_config.shard_id||"main"}function a(e,t,n){var o;e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&(e.attachEvent("on"+t,(o=e,function(){n.call(o,window.event)})),e=null)}function d(e){try{a(window,"scroll",e),a(document.body,"mousemove",e)}catch(t){e&&e()}}function s(e,t,n){if(window.removeEventListener)e.removeEventListener(t,n,!1);else{if(!window.detachEvent)return!1;e.detachEvent("on"+t,(function(){n.call(e)}))}}function l(e){try{s(window,"scroll",e),s(document.body,"mousemove",e)}catch(e){console.warn(e)}}function c(){var e=navigator.userAgent.toLowerCase();return-1==e.search(/google/gi)&&-1==e.search(/\+http:\/\/yandex\.com\/bots/gi)&&-1==e.search(/\+http:\/\/www\.cloudflare\.com\/always-online/gi)&&-1==e.search(/linespider\//gi)}function u(e,t,n,o,r){r&&r.error&&(r=r.error),r&&r instanceof Error||(r={}),r.stack=r.stack||"empty",r.message="Bundle init error: "+e+" error.message: "+r.message,r.columnNumber=o,r.lineNumber=n,r.url=t,window.parent.__jivoOnError(r)}var g="loader_loaded",f="no_widget_id_or_confighost",m="error_code_1015",v="widget_deleted";window.__jivoOnError=function(e){if(c())try{var t="//err.jivosite.com/widget",n="POST",o={widget:"true",widget_version:window.jivo_version,level:2,url:(d=window.location,d.protocol+"//"+d.host+d.pathname),lineNumber:e&&e.lineNumber,fileName:e&&e.fileName,column:e&&e.columnNumber,full_message:e&&e.stack,short_message:e&&e.message,shard:i()},a=new XMLHttpRequest;"withCredentials"in a?a.open(n,r()+t,!0):"undefined"!=typeof XDomainRequest&&(a=new XDomainRequest).open(n,t),a.setRequestHeader("Content-Type","application/json"),a.send(JSON.stringify(o))}catch(e){}var d},function(){var s=.1;window.__hasStorage=!1;try{localStorage.setItem("testLocalStorage","ok"),localStorage.removeItem("testLocalStorage"),window.__hasStorage=!0}catch(e){}function p(s,p,h,w){var _=s.console;if(_||(_={log:function(){},error:function(){}}),function(){if(s.google&&s.google.translate&&0==s.location.href.search(/(http(s?)).+\.translate\.goog/gi))return!1;return!!s.WebSocket}()){if(void 0===s.jivo_magic_var){s.jivo_magic_var=!0;var b,y,S,j,C,I,E,L,T,N,O,A={hasStorage:s.__hasStorage,jivoLoaderVersion:h,loadScript:function(e,t){var n=t||p,o=n.getElementsByTagName("script")[0],r=n.createElement("script");ve(r),o.parentNode.insertBefore(r,o).src=e},currentLoaderVersionCache:w},B=navigator.userAgent.toLowerCase(),k=/iPhone|iPad|iPod|Android|Windows Phone/i.test(B),H=p.createElement("iframe"),W=p.createElement("div"),x=0,M=0,R=0,q=[],U=!1,J=re(),D=JSON.parse('["AF","CG","CF","GW","ER","IR","IQ","KP","LR","LB","LY","ML","CU","PS","SO","SD","SY","ZW","YE"]')||null,P=JSON.parse('["127-129-12k-12i-12c-12h","12e-12i-12e-124-12c-12h","131-12e-12l-12m-124-12b-12c","124-12g-12o-129-12m-124-12g-12c-12h","127-124-12s-12c-12s","12g-124-12k-12c-12p-12n-124-12h-124","3n-12j-124-12d-12l","12g-129-12o-129-128-12k-12i-12h"]')||null;_e("Initialization"),s.__jivoBundleOnLoad=function(e){clearTimeout(C),I=e;var t=((new Date).getTime()-E)/1e3;t>6&&ie("loadTime",t);ie("bundleLoaded",!0),ie("buildNumber",b.build_number),_e("Bundle is loaded"),function(){j=p.body.lastChild,W.style&&(W.style.opacity="0",W.style.visibility="hidden",W.style.width=0,W.style.height=0,W.style.overflow="hidden");W.setAttribute("id","jivo-iframe-container"),W.appendChild(H),j?j.parentNode.insertBefore(W,j.nextSibling):p.body.appendChild(W);oe()}()},s.__jivoBundleInit=function(e){e.loaderContext=A,function(){I=null;var e=function(e){if(e){var t=e.querySelectorAll&&e.querySelectorAll(".js-jivo-bundle");return t&&t.length>0?t:e.getElementsByClassName("js-jivo-bundle")}}(be());if(!e)throw _.error("Cannot get bundle script element"),new Error("Cannot get bundle script element");for(var t=0;t<e.length;t++)e[t].parentNode&&e[t].parentNode.removeChild(e[t]);e=null}()},s.jivo_init=function(){x=0;var e=p.createEvent("Event");e.initEvent("jBeforeunload",!0,!0),s.dispatchEvent(e),te()},s.jivo_destroy=function(){x=0;var e=p.createEvent("Event");e.initEvent("jBeforeunload",!0,!0),s.dispatchEvent(e),delete s.jivo_magic_var,setTimeout((function(){W.parentNode.removeChild(W)}),10)},A.getHostURL=we,A.store=J,A.setInStore=ie;var X,z=!1,G=function(e){try{e.blockedURI&&-1!==e.blockedURI.indexOf("jivosite")&&(z=!0,p.removeEventListener("securitypolicyviolation",G))}catch(e){}}.bind(this);try{a(p,"securitypolicyviolation",G)}catch(e){}le(),!(!(X=T)||!/^\d+$/.test(X)&&10!=X.length)||(T=null,L=null,_.error("Widget id is not valid.")),$(g,5),function(){(J=re()).geoWidgetInfo.widgetId&&(T=J.geoWidgetInfo.widgetId,J=re(),L=J.configHost);ie("isNewCode",U),A.store=J}();var V=null,F=!1;N&&(O=N.getAttribute("nonce"))&&(s.jivo_cspNonce=O),T&&L?(_e("widgetId:",T,"configHost:",L),Z(se())):T&&L||($(f,5),_.error("Failed to evaluate the widgetId or configHost"))}}else _.log("Not supported browser");function Z(e,t){if(q.push(e),++R>4){_e("Config load limit is exceeded"),A.hasStorage&&localStorage.removeItem("jv_loader_info_"+T);var n=new Error("Config load limit is exceeded"),o="Config urls: "+q.join(";\r\n");try{n.stack=o}catch(e){n=new Error("Config load limit is exceeded. "+o)}s.__jivoOnError(n)}else if(_e("Loading config from",e),J.deletedInfo.widgetId&&J.deletedInfo.widgetId===T&&J.deletedInfo.resolveTime&&parseInt(J.deletedInfo.resolveTime)>=(new Date).getTime())_.error("This widget is permanently removed");else{var i=new XMLHttpRequest;i.onreadystatechange=function(){if(4===i.readyState)if(200===i.status){var e=Ce(pe(i));e?(_e("Config is loaded",e),e.isDeleted?ge():t?(e.chat_mode=t.chat_mode,e.options=t.options,e.botmode=t.botmode,e.geoip=t.geoip,e.maintenance=!!t.maintenance,K(e,null)):function(e,t){var n=new XMLHttpRequest;function o(){return!1}n.onreadystatechange=function(){if(4===n.readyState)if(200===n.status){var o=Ce(pe(n));if(!o)throw new Error("Load widget status error");var r=n.getResponseHeader("X-BotMode"),i=n.getResponseHeader("X-GeoIP"),a=o.agents&&o.agents.length;_e("Status is loaded",o,r,i,a),e.lastStatus=o,e.botmode="yes"===r?"yes":null,e.geoip=i||";;;",e.chat_mode=a?"online":"offline",e.options=o.premium?888:0,o.bots&&o.bots.length&&(e.bots=o.bots),e.maintenance=!!o.maintenance,t(o.config_updated_ts)}else if(0!==n.status)throw e.botmode=null,e.geoip=";;;",e.chat_mode="offline",e.options=0,t(null),480==n.status&&_e("Site is under maintenance, try again later."),new Error("Load widget status error: "+n.status)};var i="/configs/development/status.json",a=e.chat_host||e.comet.host,d=o()?i:r()+"//"+a+"/widget/status/"+e.site_id+"/"+e.widget_id+"?rnd="+Math.random();n.open("GET",d,!0),n.send(null)}(e,(function(t){K(e,t)}))):fe(!0)}else 0!==i.status&&fe()},i.open("GET",e,!0),i.send(null)}}function Y(e){var t={event:e,widget_id:T,t:(new Date).getTime(),param1:"58.6.0",shard:i()};if(c()&&s.navigator&&s.navigator.sendBeacon)try{var n=r()+"//telemetry.jivosite.com/w";s.navigator.sendBeacon&&navigator.sendBeacon(n,JSON.stringify(t))}catch(e){}}function $(e,t){Math.random()<=.01*t&&Y(e)}function K(e,t){if(_e("checkConfig",e.config_updated_ts,t),e.isDeleted)ge();else if(function(){var e=navigator.userAgent.toLowerCase();return-1!==e.indexOf("msie")||-1!==e.indexOf("trident")}())_e("ie11 blocked");else{if(t&&e.config_updated_ts&&e.config_updated_ts!=t)return _e("update configUpdatedTs in store",t),ie("configUpdatedTs",t),Z(se(),e);if(e.regions&&!J.isChatStarted){var n=function(e){var t,n,o=e.regions,r=ue(e.geoip);if(o){for(var i=Object.keys(o),a=0;a<i.length;a++)for(var d=o[i[a]],s=0;s<d.length;s++)if(1!=d.length||"default"!==d[s]){var l=ue(d[s]);if(r.country===l.country){if(r.region===l.region)return ce(i[a],d[s],e.geoip);n||l.region||(n=ce(i[a],d[s],e.geoip))}}else t=i[a];if(n)return n;if(t)return ce(t,"default",e.geoip)}}(e);if(n.widgetId!==T)return _e("Wrong geo-widget widgetId",T),ie("geoWidgetInfo",n),T=n.widgetId,void Z(se())}if((V=e.ab_segment)&&V.name&&V.host&&V.staticHost&&1!==e.site_id)if(_e("AB-testing segmentation is enabled in config"),F=function(e,t){var n=J.abTesting,o=!1;o=n&&n.name===e.name?n.match:function(e,t){if(_e('Check for criteria match of test "'+e.name+'"'),e.device){if(!function(e){if("desktop"===e)return Se()&&!je();if("mobile"===e)return je();if("all"===e)return Se()||je();return!1}(e.device))return _e('Segment "'+e.name+'" is NOT matched. Criteria: device'),!1}if(e.locale){if(!(e.locale===t.locale))return _e('Segment "'+e.name+'" is NOT matched. Criteria: locale'),!1}if(e.percentage){if(!(n=e.percentage,Math.random()<=.01*n))return _e('Segment "'+e.name+'" is NOT matched. Criteria: percentage'),!1}var n;return _e('Segment "'+e.name+'" is matched!'),!0}(e,t);return ie("abTesting",{name:e.name,match:o}),o}(V,e),F){_e("Ab-testing segment match! Segment:",V.name);var o="//"+V.host;_e('Setting new base_url. Was: "'+e.base_url+'". New: "'+o+'".'),e.base_url=o}else _e("Ab-testing segment is NOT matched");else ie("abTesting",null),_e("AB-testing segmentation is NOT enabled in config"),ie("configHost",L);!function(e){if(ie("log",!!e.logs),s.jivo_config=b=e,function(){if(b.host_blacklist)for(var e=b.host_blacklist.split(","),t=0;t<e.length;t++)if(s.location.host.indexOf(e[t].replace(" ",""))>=0)return!0;return!1}())throw _e("Host is blacklisted",s.location.host),new Error("Placing widget is forbidden on "+s.top.location.host);if(t=b.geoip.split(";")[0],D.indexOf(t)>=0)return _.log("[Jivo]: Service unavailable for country");if(!e.disable_stop_words&&function(){var e=!1,t=(d=P,d.map((function(e){return e.split("-").map((function(e){return String.fromCharCode(parseInt(e,32)-20)})).join("")}))),n=p.querySelector('meta[name="description"]'),o=p.querySelector('meta[name="keywords"]'),r=p.title,i=n&&n.content?n.content:"",a=o&&o.content?o.content:"";var d;(he(r,t)||he(i,t)||he(a,t))&&(e=!0);return e}())return Y(m),void _e("Init error, code 1015.");if(k&&b.disable_mobile)return void _e("Mobile widget is disabled");var t;"complete"==p.readyState?Q():J.bundleLoaded&&J.buildNumber==b.build_number?"interactive"==p.readyState?Q():a(s,"DOMContentLoaded",Q):(ie("bundleLoaded",!1),a(s,"load",Q))}(e)}}function Q(){_e("Widget initialization"),function(){_e("Iframe initialization"),H.src="javascript:void(0)",H.role="presentation",H.allow="autoplay",H.title="Jivochat",H.setAttribute("name","jivo_container"),H.setAttribute("id","jivo_container"),H.setAttribute("frameborder","no"),O&&H.setAttribute("nonce",O);s.atob&&"complete"!==p.readyState?a(s,"load",te):te();a(s,"message",(function(e){if(e&&e.data&&"object"==typeof e.data){var t=e.data;"in_node_webkit"==t.name&&(s.jivo_cobrowse={source:e.source,origin:e.origin}),"iframe_url_changed"!=t.name&&"iframe_url_changed"!=t||oe()}else b&&1===b.logs&&_&&_.log&&_.log("Error receive postMessage, window message event is empty.")}))}()}function ee(){var e=we();_e("loadBundleAfterWait",e,A),l(ee),ne(e)}function te(){var e=we();if(!A.store.isChatStarted&&b.enable_bundle_wait){_e("addWaitActions");try{d(ee),setTimeout((function(){_e("5s load",A.store),s.jivo_api||ee()}),5e3)}catch(t){ne(e)}}else _e("startLoadBundle",e),ne(e)}function ne(e){_e("Insertion of bundle code from",e);var t=be(),n=p.createElement("script"),o=function(e){var t=b.bundle_folder?b.bundle_folder:"";return e+t+"/js/bundle_"+b.locale+".js?rand="+b.build_number}(e);E=(new Date).getTime(),ve(n),n.className="js-jivo-bundle",n.src=r()+o,A.bundleSrc=o,n.onerror=function(){_e("loadBundle errorBundle",e),p.getElementById("jcont")&&function(e,t,n){if(clearTimeout(C),++M>=5){if(_e("Bundle load retries count is exceeded"),_e("Bad csp is: "+z),z)return void _.error("Widget not loaded due CSP security policy.");var o=new Error("Bundle NOT loaded. Type: "+e+(t?". Host: "+t:"")+(n?". Status code: "+n:""));return void s.__jivoOnError(o)}te()}("errorBundle",e)},t.appendChild(n)}function oe(){if(!(x++>3)){if(!I)return x--,te();try{S=H.contentWindow.document}catch(e){y=p.domain,H.src="javascript:var d=document.open();d.domain='"+y+"';void(0);",S=H.contentWindow.document}var e='<meta name="google" content="notranslate"><meta http-equiv="X-UA-Compatible" content="IE=edge" />',t="";try{t="window.onerror = "+u.toString()+";"}catch(e){}var n=(b&&!b.disable_error_reporting?t:"")+I;if(!(navigator.userAgent.toLowerCase().indexOf("firefox")>-1)&&S.head&&S.body){S.body.class="notranslate",S.head.innerHTML=e;var o=p.createElement("script");o.type="text/javascript",O&&o.setAttribute("nonce",O),o.innerHTML=n,S.head.appendChild(o)}else{var r='<body class="notranslate"></body>',i='<script type="text/javascript"'+(O?'nonce="'+O+'"':"")+">"+n+"<\/script>",a="<head>"+e+i+"</head>";S.write("<!doctype HTML>"+a+r),i=null,r=null,a=null}S.close(),n=null}}function re(){var e={isChatStarted:null,geoWidgetInfo:{widgetId:null,clientLocation:null,region:null},configHost:null,deletedInfo:{widgetId:null,resolveTime:null},abTesting:null,buildNumber:null,bundleLoaded:null,isNewCode:null,loadTime:null,log:null,configUpdatedTs:null};if(A.hasStorage&&(localStorage.removeItem("jv_loader_info"),T)){var t=Ce(localStorage.getItem("jv_loader_info_"+T));t&&ae(t,e)}return e}function ie(e,t){if(J[e]=t,A.hasStorage&&T){var n={};ae(J,n),localStorage.setItem("jv_loader_info_"+T,(o=n,s.MooTools&&void 0===JSON.stringify?JSON.encode(o):JSON.stringify(o)))}var o}function ae(e,t){Object.keys(e).forEach((function(n){(function(e){if(de(e))return!0;if("object"==typeof e){for(var t=Object.keys(e),n=0;n<t.length;n++)if(!de(e[t[n]]))return!1;return!0}})(e[n])||(t[n]=e[n])}))}function de(e){return null===e&&"object"==typeof e}function se(){var e="";return _e("getConfigUrl",J.configUpdatedTs),J.configUpdatedTs&&(e="?v="+J.configUpdatedTs),r()+L+"/script/widget/config/"+T+e}function le(){var r=function(e){if(e)return e.src;try{throw new Error("Get script URL")}catch(e){var r=e.stack;if(r){var i=t(r),a=n(r),d=o(r);return i?i[0]:a?a[0]:d?d[0]:null}}}(N=e());if(r&&r.match(/&lt;/))_e("Invalid codeHost",r);else{var i,a=t(r),d=n(r),s=o(r);L||(a?(L="//"+a[1],U=!0):d?L="//"+d[1]:s&&(L="//"+s[1])),T||(d&&d[2]?(T=d[2],U=!1):s&&s[2]?(T=s[2],U=!1):(U=!0,N&&(T=N.getAttribute("jv-id")||N.getAttribute("data-jv-id")),T||(i=r&&r.match(/https?:\/\/\S+\/widget\/([A-Za-z0-9]+)/),T=i?i[1]:null))),_e("getWidgetIdAndConfigHost",T,L)}}function ce(e,t,n){return{widgetId:e,region:t,clientLocation:n}}function ue(e){if("string"==typeof e&&""!==e){var t=e.split(";");return{country:t[0],region:t[1],city:t[2]}}}function ge(){_e("Widget was removed",T),ie("configHost",null),J.geoWidgetInfo.widgetId||J.isChatStarted?(ie("geoWidgetInfo",ce(null,null,null)),ie("isChatStarted",null),me()):(ie("deletedInfo",{widgetId:T,resolveTime:((new Date).getTime()+6048e5).toString()}),_.error("Widget "+T+" is permanently removed. Host: "+L),Y(v))}function fe(e){_e("Config loading error:",e?"parse":"request"),ie("geoWidgetInfo",ce(null,null,null)),ie("isChatStarted",null),ie("configHost",null),e||me()}function me(){T=null,L=null,le(),Z(se())}function ve(e){if(e)return e.type="text/javascript",e.async=!0,e.charset="UTF-8",O&&e.setAttribute("nonce",O),e}function pe(e){return e.responseType&&"text"!==e.responseType?"document"===e.responseType?e.responseXML:e.response:e.responseText}function he(e,t){for(var n=!1,o=0;o<t.length;o++){var r=t[o].toLowerCase(),i=new RegExp("([, .]|^)"+r+"([, .]|$)","gi");if(e.toLowerCase().search(i)>-1){n=!0;break}}return n}function we(){return b.base_url}function _e(){if(J.log){var e=Array.prototype.slice.call(arguments||[]);e.unshift("Loader:"),_.log.apply(_,e)}}function be(){var e=p.head||p.getElementsByTagName("head")[0];if(!e)throw _.error("Cannot get document head element"),new Error("Cannot get document head element");return e}function ye(e){return-1!==B.indexOf(e)}function Se(){return ye("chrome")&&!ye("opr/")&&"Google Inc."===s.navigator.vendor}function je(){return!ye("windows")&&ye("android")}function Ce(e){try{return s.MooTools&&void 0===JSON.parse?JSON.decode(e):JSON.parse(e)}catch(e){return e.message="Config parse error: "+T+"\n\n"+e.message,s.__jivoOnError(e),null}}}var h=p,w=null;if(window.__hasStorage){try{w=JSON.parse(localStorage.getItem("__jivoLoader"))}catch(e){jivoLog("Loader cache parse error.")}w&&w.version>s&&(h=new Function("window","document","broswerCacheLoaderVersion","currentLoaderVersionCache","("+w.code+")(window, document, broswerCacheLoaderVersion, currentLoaderVersionCache)"))}try{h(window,document,s,w?w.version:s)}catch(e){e.message=e.message?"Loader error. "+e.message:"Loader error",window.__jivoOnError(e),delete window.jivo_magic_var,(h=p)(window,document,s,s)}}()}();