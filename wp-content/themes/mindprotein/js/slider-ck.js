var mct1_Options={sliderId:"mcts1",direction:"horizontal",scrollInterval:5e3,scrollDuration:1100,hoverPause:!0,autoAdvance:!0,scrollByEachThumb:!0,circular:!0,largeImageSlider:null,inSyncWithLargeImageSlider:!0,license:"mylicense"};(function(e){function n(t){function S(){var e=50,t=navigator.userAgent,n;(n=t.indexOf("MSIE "))!=-1&&(e=parseInt(t.substring(n+5,t.indexOf(".",n))));return e}function N(e){var t=[],r=e[n];while(r--)t.push(String.fromCharCode(e[r]));return t.join("")}var n="length",r="className",i=function(e,t){var r=e[n];while(r--)if(e[r]===t)return!0;return!1},s=function(e,t){return i(e[r].split(" "),t)},o=function(e,t){s(e,t)||(e[r]==""?e[r]=t:e[r]+=" "+t)},u=function(e,t){var n=new RegExp("(^| )"+t+"( |$)");e[r]=e[r].replace(n,"$1");e[r]=e[r].replace(/ $/,"")},f=function(e,t){var n=null;typeof e.currentStyle!="undefined"?n=e.currentStyle:n=document.defaultView.getComputedStyle(e,null);return n[t]},l="largeImageSlider",c="appendChild",h="inSyncWithLargeImageSlider",p=function(e){var t=e.childNodes,r=[];if(t)for(var i=0,s=t[n];i<s;i++)t[i].nodeType==1&&r.push(t[i]);return r},d=function(e,t){var n=t==0?e.nextSibling:e.firstChild;while(n&&n.nodeType!=1)n=n.nextSibling;return n},v="style",m="offsetTop",g="offsetLeft",y="offsetHeight",b="offsetWidth",w="onmouseover",E="onmouseout",x=S()<8,T=["$1$2$3","$1$2$3","$1$24","$1$23"],C={b:0,a:0,c:0,d:0,e:1,f:0},k,L,A,O,M,_,D,P,H,B,j,F,I,q,R=function(e){O=e;A=[];this.c()},U=function(){k=t.direction=="vertical"?0:1;L={a:t.license,c:t.scrollInterval,b:t.autoAdvance,d:t.scrollByEachThumb,f:t.circular};P&&P.b()},z=document,W=[/(?:.*\.)?(\w)([\w\-])[^.]*(\w)\.[^.]+$/,/.*([\w\-])\.(\w)(\w)\.[^.]+$/,/^(?:.*\.)?(\w)(\w)\.[^.]+$/,/.*([\w\-])([\w\-])\.com\.[^.]+$/],X=function(e){var t=document.createElement("div");e&&(t[r]=e);t[v].display="block";return t},V=function(e){var t=document.createElement("a");t[r]=e;return t};R.prototype={c:function(){_=X(0);_[v][k?"width":"height"]="99999px";_[v].position="absolute";M=X(0);M[c](_);M[v].position="relative";M[v].overflow="hidden";var e=O[b]-parseInt(f(O,"paddingLeft")||0)-parseInt(f(O,"paddingRight")||0),r=O[y]-parseInt(f(O,"paddingTop")||0)-parseInt(f(O,"paddingBottom")||0);M[v].width=e+"px";M[v].height=r+"px";if(!k){M[v].height=O[y]+"px";O[v].height="auto"}O.insertBefore(M,O.firstChild);for(var i=p(O),s,o,u,a=1,d=i[n];a<d;a++){s=X("item");i[a][v].display="block";s[c](i[a]);if(k){s[v].cssFloat="left";s[v].styleFloat="left"}if(t[l]){s[v].cursor="pointer";s.onclick=function(){if(t[h]){C.b=this.i;P.g(1,1)}else t[l].displaySlide(this.i,1,0)}}A.push(_[c](s));A[A[n]-1].i=a-1}C.a=A[n];if(k)B=A[0][g];else{B=f(A[0],"marginTop");B=="auto"||!B?B=0:B=parseInt(B)}if(A[n]>1)var w=k?A[1][g]-A[0][g]-A[0][g]-A[0][b]:A[1][m]-A[0][m]-A[0][y];var E=A[A[n]-1];D=k?E[g]+E[b]+w:E[m]+E[y]+w;_[v][k?"width":"height"]=D+"px";this.b();O[v].backgroundImage="none"},b:function(){var e=this.l();if(e[0]){if(j==null)e[1].f();else{I[r]=L.b?"navPause":"navPlay";j[r]="navPrev";F[r]="navNext"}!L.f&&this.r();L.b&&(H=setTimeout(function(){e[1].d()},L.c));if(t.hoverPause){M[w]=function(){C.d=1;clearTimeout(H);H=null};M[E]=function(){C.d=0;if(H==null&&!C.c&&L.b){window.clearTimeout(H);H=null;H=setTimeout(function(){e[1].d()},L.c/2)}};if(j){F[w]=j[w]=M[w];F[E]=j[E]=M[E]}}else M[w]=M[E]=function(){}}if(t[l]){t[l].getElement()[w]=M[w];t[l].getElement()[E]=M[E];t[h]&&t[l].getAuto()&&t[l].changeOptions({autoAdvance:!1})}},e:function(){C.c=0;clearTimeout(H);H=null;if(L.f)this.m();else{this.r();if(!C.e)return}var e=this;!C.d&&L.b&&(H=setTimeout(function(){e.d()},L.c))},d:function(){var e=this.j();if(e!=null){C.b=e;this.g(0,1)}},g:function(n,r){C.c=1;L.d&&this.setActiveNav();var i={duration:t.scrollDuration,onComplete:function(){P.e()}};if(k)var s={left:B-A[C.b][g]+"px"};else x?s={top:B-A[C.b][m]+"px"}:s={top:-A[C.b][m]+"px"};e(_).animate(s,i.duration,i.onComplete);t[l]&&(t[h]||n)&&t[l].displaySlide(C.b,1,r)},f:function(){var e=this;if(L.d){q=document.createElement("div");q[r]="navBullets";for(var t=[],n=0;n<C.a;n++)t.push("<a rel='"+n+"'></a>");q.innerHTML=t.join("");for(var i=p(q),n=0;n<C.a;n++){n==C.b&&(i[n][r]="active");i[n].onclick=function(){if(this[r]=="active")return 0;if(C.c)return 0;e.h(parseInt(this.getAttribute("rel")))}}O[c](q)}j=V("navPrev");j.setAttribute("onselectstart","return false");j.onclick=function(){e.To(1)};O[c](j);I=V(L.b?"navPause":"navPlay");I.setAttribute("onselectstart","return false");I.setAttribute("title",L.b?"Pause":"Play");I.onclick=function(){window.clearTimeout(H);H=null;(L.b=!L.b)&&e.d();this[r]=L.b?"navPause":"navPlay";this.setAttribute("title",L.b?"Pause":"Play")};O[c](I);F=V("navNext");F.setAttribute("onselectstart","return false");F.onclick=function(){e.To(0)};O[c](F)},setActiveNav:function(){if(q){var e=p(q),t=e[n];while(t--)t==C.b?e[t][r]="active":e[t][r]=""}},i:function(e,t){var r=function(e){var t=e.charCodeAt(0).toString();return t.substring(t[n]-1)},i=t.replace(W[e-2],T[e-2]).split("");return"b"+e+i[1]+r(i[0])+r(i[2])},h:function(e){C.b=this.p(e);window.clearTimeout(H);H=null;this.g(0,0)},k:function(e){return e.replace(/(?:.*\.)?(\w)([\w\-])?[^.]*(\w)\.[^.]*$/,"$1$3$2")},To:function(e){if(C.c)return;if(e){var t=this.o();if(!L.f&&C.b==0)return;if(t==null)return;C.b=t}else{t=this.j();if(t==null)return;C.b=t}window.clearTimeout(H);H=null;this.g(0,0)},j:function(){if(!L.f&&!C.e)return null;var e=this.n(C.b);if(!L.f&&e<C.b)return C.b;if(!L.d){var t=e,r=p(_);for(;;){if(k&&A[t][g]-A[C.b][g]>M[b])break;if(!k&&A[t][m]-A[C.b][m]>M[y])break;if(t==r[r[n]-1].i)break;e=t;t=this.n(t)}return e}return e},m:function(){for(var e=p(_),t=0,r=e[n];t<r;t++){if(e[t].i==C.b)break;_[c](e[t])}k?_[v].left=B-A[C.b][g]+"px":x?_[v].top=B-A[C.b][m]+"px":_[v].top=-A[C.b][m]+"px"},l:function(){return(new Function("a","b","c","d","e","f","g","h","var noEnoughRoom=d>(h?c.offsetWidth:c.offsetHeight);var l=e(g(b([110,105,97,109,111,100])));if(l==''||l.length>3||a[b([97])]==f((+a[b([97])].substring(1,2)),g(b([110,105,97,109,111,100])))){return [noEnoughRoom, this];}else{return [1,{f:function(){},d:function(){}}];}")).apply(this,[L,N,M,D,this.k,this.i,function(e){return z[e]},k])},o:function(){if(L.f){var e=p(_),t=e[e[n]-1].i;if(!L.d)for(var r=e[n]-1;r>-1;r--){if(k&&D-e[r][g]>M[b])break;if(!k&&D-e[r][m]>M[y])break;t=e[r].i}for(var r=e[n]-1;r>-1;r--){_.insertBefore(e[r],d(_,1));if(e[r].i==t)break}k?_[v].left=B-A[C.b][g]+"px":_[v].top=B-A[C.b][m]+"px"}else{if(!C.f)return null;t=this.q(C.b);if(!L.d)for(var r=t;r>-1;r--){if(k&&A[C.b][g]-A[r][g]>M[b]||!k&&A[C.b][m]-A[r][m]>M[y])break;t=A[r].i}}return t},n:function(e){return this.p(++e)},q:function(e){return this.p(--e)},p:function(e){e>=C.a?e=0:e<0&&(e=C.a-1);return e},r:function(){C.f=(k?_[g]:_[m])<0;C.f?u(j,"navPrevDisabled"):o(j,"navPrevDisabled");C.e=(k?_[g]-M[b]:_[m]-M[y])+D>0;C.e?u(F,"navNextDisabled"):o(F,"navNextDisabled")}};var $=function(){var e=document.getElementById(t.sliderId);e&&p(e)[n]&&e[y]?P=new R(e):setTimeout($,900)};U();e(window).load($);return{displaySlide:function(e){P.h(e)},changeOptions:function(e){for(var n in e)t[n]=e[n];U()}}}var t=new n(mct1_Options);e.jQuerySlider=function(){return t}})(jQuery);var jQuerySlider=jQuery.jQuerySlider();